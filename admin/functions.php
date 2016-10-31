<?php
session_start();
const ADMIN_URL = 'http://localhost/dmitry/admin';

function init()
{
    if (!is_login() && $_SERVER['SCRIPT_NAME'] != '/dmitry/admin/login.php') {
        redirect("/dmitry/admin/login.php");
    }
    auth();
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        logout();
    }
    if (isset($_POST['action']) && $_POST['action'] == 'add-user') {
        if (isset ($_POST['name'])) {
            $name = $_POST['name'];
        }
        if (isset ($_POST['password'])) {
            $password = $_POST['password'];
        }



        if (isset ($_POST['confirm_password'])) {
            $confirm_password = $_POST['confirm_password'];
        }
        if (isset ($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset ($_POST['role'])) {
            $role = $_POST['role'];
        }
        try{
            $user_created = create_admin($name, $email, $password, $confirm_password, $role);
            if ($user_created) {
                $arr = [
                    'message'=>"User with $role rights was added.",
                    'type'=>'success'
                ];

            } else {
                $arr = [
                    'message'=>'Please complete all fields.',
                    'type'=>'error'
                ];

            }
            $_SESSION["user_add_message"] =  $arr;

        }catch (Exception $e){
            $arr = [
                'message'=>$e->getMessage(),
                'type'=>'error'
            ];
            $_SESSION["user_add_message"] =  $arr;
        }




    }
    if (isset($_POST['action']) && $_POST['action'] == 'add-option-group') {
        try{
            if (isset ($_POST['name'])) {
               create_option_group($_POST['name']);
            }else{
                throw new Exception('Name is empty');
            }
        }catch (Exception $e){
            $_SESSION["user_option_group"] = $e->getMessage();
        }
    }
    if (isset($_POST['action']) && $_POST['action'] == 'add-config') {
        try{
            if (isset ($_POST['name'])) {
                create_option_group($_POST['name']);
            }else{
                throw new Exception('Name is empty');
            }



        }catch (Exception $e){
            $_SESSION["user_option_group"] = $e->getMessage();
        }
    }
}

function create_group($name, $value,$option_group_id){
    $conn = get_connection();

    //add check if exist option_group_id in table

    $insert = "INSERT INTO configs (name,value,option_group) VALUES ('$name','$value', $option_group_id)";
    if($conn->query($insert) === TRUE){
        return true;
    }else{
        throw new Exception('Error with inserting into database');
    }
}

function logout_link()
{
    return $_SERVER['SCRIPT_NAME'] . "?action=logout";
}

function create_option_group($name){
    $conn = get_connection();

    $insert = "INSERT INTO option_group (name,count) VALUES ('$name',0 )";
    if($conn->query($insert) === TRUE){
        return true;
    }else{
        throw new Exception('Error with inserting into database');
    }
}

function get_conf_options(){
    $conn = get_connection();
    $sql = "SELECT * FROM option_group";
    $result = $conn->query($sql);
    $res = [];
    while ($item = $result->fetch_assoc()){
        $res[] = $item;
    }
    return $res;
}

function get_configs() {
    $conn = get_connection();
    $sql = "SELECT * FROM configs";
    $result = $conn->query($sql);
    $res = [];
    while ($item = $result->fetch_assoc()){
        $res[] = $item;
    }
    return $res;
    }

function get_leads() {
    $conn = get_connection();
    $sql = "SELECT * FROM leads";
    $result = $conn->query($sql);
    $res = [];
    while ($item = $result->fetch_assoc()){
        $res[] = $item;
    }
    return $res;
}

function get_pages() {
    $conn = get_connection();
    $sql = "SELECT * FROM pages";
    $result = $conn->query($sql);
    $res = [];
    while ($item = $result->fetch_assoc()){
        $res[] = $item;
    }
    return $res;
}

//create session
function login($login, $pass)
{
    if (isset($login) && isset($pass)) {
        $user = get_user($login, $pass);
        if ($user) {
            $_SESSION['admin'] = $user;
            return true;
        }
    }
    return false;
}

//check if user is logged in
function is_login()
{
    return (isset ($_SESSION ['admin']) && !empty($_SESSION ['admin'])) ? true : false;
}

//redirect to login
function redirect($url)
{
    if ($_SERVER['SCRIPT_NAME'] == '/dmitry/admin/login.php' && $url == "/dmitry/admin/login.php") {
        return;
    }
    $url = (is_login()) ? $url : 'login.php';
    header("Location: $url");
    exit;
}

//logout user
function logout()
{
    if ($_SESSION ['admin']) {
        unset($_SESSION ['admin']);
    }
    redirect("/dmitry/admin/login.php");
}

function auth()
{
    if (isset($_POST["login"])) {
        if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
            if (login($_POST["username"], $_POST["password"])) {
                return redirect("/dmitry/admin/index.php");
            } else {
                $_SESSION["login_errors"] = "Incorrect login or password";
            }
        } else {
            $_SESSION["login_errors"] = "Login or password is empty";
        }
    }
}

// Create connection
function get_connection()
{
    $servername = "localhost";
    $username = "test_user";
    $password = "1111";
    $dbname = "database_test";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function get_user($login, $password, $role='admin' )
{
    $conn = get_connection();
    $sql = "SELECT * FROM users WHERE  name='$login' AND password=MD5('$password') AND role='$role'";
    $result = $conn->query($sql);
    return (isset($result->num_rows) && $result->num_rows > 0) ? $result->fetch_assoc() : false;
}

function create_admin($name, $email, $password, $confirm_password, $role)
{
    if (isset($name) && isset($email) && isset($password) && isset($confirm_password) && isset($role) && !empty($name)
        && !empty($email) && !empty($password) && !empty($role) && $password == $confirm_password
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             throw new Exception('Not valid email');
        }
        $conn = get_connection();
        $sql = "SELECT * FROM users WHERE name='$name' OR email='$email'";
        $result = $conn->query($sql);
        if (isset($result->num_rows) && $result->num_rows > 0) {
            throw new Exception('User already exist');
        }
        $password = md5($password);
        $insert = "INSERT INTO users (name, role, email, password) VALUES ('$name','$role','$email','$password')";
        if($conn->query($insert) === TRUE){
            return true;
        }else{
            throw new Exception('Error with inserting into database');
        }
    }

    throw new Exception('Arguments not correct');

}
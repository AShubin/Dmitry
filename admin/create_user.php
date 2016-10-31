<?php
require_once "functions.php";
init();

require_once "header_admin.php";
require_once "sidebar_admin.php";

?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">

                    <header class="panel-heading">
                        Adding new User
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php if (isset($_SESSION["user_add_errors"])){
                                    echo '<p>'.$_SESSION["user_add_errors"].'</p>';
                                }?>
                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="name" name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="password" class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="password" name="password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="confirm_password" class="control-label col-lg-2">Confirm
                                        Password</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="confirm_password"
                                               name="confirm_password" type="password">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="control-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="email" name="email" type="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="role" class="control-label col-lg-2">Role</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="role" name="role" type="text">
                                            <option value="user" selected>user</option>
                                            <option value="admin">admin</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="action" value="add-user">

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-danger" type="submit">Save</button>
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<?php require_once "footer_admin.php"; ?>

<!--script for this page-->


</body>
</html>

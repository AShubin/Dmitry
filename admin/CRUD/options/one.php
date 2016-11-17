<?php
require_once "../../functions.php";
init();
$id = (isset($_GET['id'])) ? $_GET['id'] : false;
$options = get_one('option_group', $id);
//var_dump($options);
//die();
if ($options == false) {
    redirect(ADMIN_URL . '/crud/options/list.php');
}
require_once "../../header_admin.php";
require_once "../../sidebar_admin.php";
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <b>Option</b>
                    </header>
                    <table>
                        <?php
                        foreach ($options as $key => $value) {
                            echo " <tr><td>$key</td><td>$value</td></tr>";
                        }
                        ?>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<?php require_once "../../footer_admin.php"; ?>

<!--script for this page-->

</body>
</html>
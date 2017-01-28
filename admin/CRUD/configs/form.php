<?php
require_once "../../functions.php";
init();
$id = (isset($_GET['id'])) ? $_GET['id'] : false;
$data_set = (isset($_GET['id'])) ? get_one('configs', $_GET['id']) : false;
$options = get_rows('configs');
$name = ($data_set == false) ? '' : $data_set['name'];
$value = ($data_set == false) ? '' : $data_set['value'];
$option_group = ($data_set == false) ? '' : $data_set['option_group'];
require_once "../../header_admin.php";
require_once "../../sidebar_admin.php";
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <b> <?= isset($_GET['id'])? 'Update config':'Adding new config' ?> </b>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php
                                if (isset($_SESSION["adding_config"])) {
                                    echo '<p class="' . (($_SESSION["adding_config"]['type'] == 'error') ?
                                            'error' : 'success') . '" >' . $_SESSION["adding_config"]['message'] . '</p>'; }

                                if (isset($_SESSION["updating_config"])) {
                                    echo '<p class="' . (($_SESSION["updating_config"]['type'] == 'error') ?
                                            'error' : 'success') . '" >' . $_SESSION["updating_config"]['message'] . '</p>'; }
                                ?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="name" name="name" type="text"
                                               value="<?= $name ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="value" class="control-label col-lg-2">Value</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="value" name="value" type="text"
                                               value="<?= $value ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="opt_group" class="control-label col-lg-2">Option group</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="opt_group" name="opt_group" type="text"
                                               value="<?= $option_group ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="action"
                                       value="<?= isset($_GET['id']) ? 'update-config' : 'add-config' ?>">
                                <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-danger"
                                                type="submit"><?= isset($_GET['id']) ? 'Update' : 'Save' ?></button>
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

<?php require_once "../../footer_admin.php"; ?>

<!--script for this page-->

</body>
</html>
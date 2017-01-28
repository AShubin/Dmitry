<?php
require_once "../../functions.php";
init();
$id=(isset($_GET['id'])) ? $_GET['id'] : false;
$data_set=(isset($_GET['id'])) ? get_one('option_group', $_GET['id']) : false;
$options=get_rows('option_group');
$name=($data_set == false) ? '' : $data_set['name'];
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
                        <b><?= isset($_GET['id'])? 'Update option group':'Adding new option group' ?></b>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php if (isset($_SESSION["adding_option_group"])) {
                                    echo '<p class="' . (($_SESSION["adding_option_group"]['type'] == 'error') ?
                                            'error' : 'success') . '" >' . $_SESSION["adding_option_group"]['message'] . '</p>';
                                }
                                if (isset($_SESSION["updating_option_group"])) {
                                    echo '<p class="' . (($_SESSION["updating_option_group"]['type'] == 'error') ?
                                            'error' : 'success') . '" >' . $_SESSION["updating_option_group"]['message'] . '</p>';
                                }
                                ?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="name" name="name" type="text"
                                               value="<?= $name ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="action" value="<?= isset($_GET['id'])? 'update-option-group' : 'add-option-group'?>">
                                <input type="hidden" name="id" value="<?= isset($_GET['id'])? $_GET['id'] : ''?>">
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-danger" type="submit"><?= isset($_GET['id'])? 'Update' : 'Save'?></button>
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
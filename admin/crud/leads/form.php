<?php
require_once "../../functions.php";
init();
$id=(isset($_GET['id'])) ? $_GET['id'] : false;
$data_set=(isset($_GET['id'])) ? get_one('leads', $_GET['id']) : false;
$options = get_rows('leads');
$email=($data_set == false) ? '' : $data_set['email'];
//$status=($data_set == false) ? '' : $data_set['status'];
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
                        <b> <?= isset($_GET['id'])? 'Update lead':'Adding new lead' ?> </b>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php if (isset($_SESSION["adding_lead"])) {
                                    echo '<p class="' . (($_SESSION["adding_lead"]['type'] == 'error') ?
                                            'error' : 'success') . '" >' . $_SESSION["adding_lead"]['message'] . '</p>';
                                }
                                unset ($_SESSION["adding_lead"]);

                                if (isset($_SESSION["updating_lead"])) {
                                    echo '<p class="' . (($_SESSION["updating_lead"]['type'] == 'error') ?
                                            'error' : 'success') . '" >' . $_SESSION["updating_lead"]['message'] . '</p>';
                                }
                                unset ($_SESSION["updating_lead"]);
                                ?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="email" name="email" type="text"
                                               value="<?= $email ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="opt_group" class="control-label col-lg-2">Status</label>
                                    <div class="col-lg-10">
                                        <select name="status" id="status" class="form-control">

                                            <?php
                                            $array= get_enum('leads', 'status');
                                            $html = '';
                                            foreach ($array as $option) {
                                                $html .= "<option value='" . $option . "'>" . $option . "</option>";
                                            }
                                            echo $html;
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="action" value="<?= isset($_GET['id'])? 'update-lead' : 'add-lead'?>">
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
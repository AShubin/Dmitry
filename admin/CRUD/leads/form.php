<?php
require_once "../../functions.php";
init();
$options = get_rows('leads');
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
                        <b>Adding new lead</b>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php if (isset($_SESSION["user_add_message"])){
                                    echo '<p class="'.(($_SESSION["config_add_message"]['type'] == 'error')? 'error':'success').'" >'.$_SESSION["config_add_message"]['message'].'</p>';
                                }?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="email" name="email" type="text">
                                    </div>
                                </div>
<!--                                <div class="form-group ">-->
<!--                                    <label for="value" class="control-label col-lg-2">Value</label>-->
<!--                                    <div class="col-lg-10">-->
<!--                                        <input required class="form-control" id="value" name="value"-->
<!--                                               type="text">-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group ">
                                    <label for="opt_group" class="control-label col-lg-2">Status</label>
                                    <div class="col-lg-10">
                                        <select name="status" id="status" class="form-control">

                                            <?php
                                            $html = '';
                                            foreach($options as $option){
                                                $html .= "<option value='".$option['id']."'>".$option['status']."</option>";
                                            }
                                            echo $html;
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="action" value="add-lead">
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

<?php require_once "../../footer_admin.php"; ?>

<!--script for this page-->

</body>
</html>
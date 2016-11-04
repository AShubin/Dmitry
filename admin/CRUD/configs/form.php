<?php
require_once "../../functions.php";
init();
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
                        <b>Adding new config</b>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php if (isset($_SESSION["user_add_message"])){
                                    echo '<p class="'.(($_SESSION["config_add_message"]['type'] == 'error')? 'error':'success').'" >'.$_SESSION["config_add_message"]['message'].'</p>';
                                }?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="name" name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="value" class="control-label col-lg-2">Value</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="value" name="value"
                                               type="text">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="opt_group" class="control-label col-lg-2">Option group</label>
                                    <div class="col-lg-10">
                                        <select name="opt_group" id="opt_group" class="form-control">

                                            <?php
                                            $html = '';
                                            foreach($options as $option){
                                                $html .= "<option value='".$option['id']."'>".$option['name']."</option>";
                                            }
                                            echo $html;
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="action" value="add-config">
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
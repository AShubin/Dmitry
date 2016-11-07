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
                        <b>Adding new option group</b>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="cmxform form-horizontal tasi-form" method="post">

                                <?php if (isset($_SESSION["user_option_group"])){
                                    echo '<p>'.$_SESSION["user_option_group"].'</p>';
                                }?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Name</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="name" name="name" type="text">
                                    </div>
                                </div>
                                <input type="hidden" name="action" value="add-option-group">
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
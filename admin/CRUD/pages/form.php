<?php
require_once "../../functions.php";
init();
$options = get_rows('pages');
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

                                <?php if (isset($_SESSION["adding_page"])){
                                    echo '<p>'.$_SESSION["adding_page"].'</p>';
                                }?>

                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Name of page</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="name" name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="value" class="control-label col-lg-2">Content</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="content" name="content" type="text">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="value" class="control-label col-lg-2">Slug</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="slug" name="slug" type="text">
                                    </div>
                                </div>

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

                                <input type="hidden" name="action" value="add-page">
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
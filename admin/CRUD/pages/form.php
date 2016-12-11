<?php
require_once "../../functions.php";
init();
$options = get_rows('pages');
$id=(isset($_GET['id'])) ? $_GET['id'] : false;
$data_set=(isset($_GET['id'])) ? get_one('pages', $_GET['id']) : false;
$options=get_rows('pages');

$name=($data_set == false) ? '' : $data_set['name'];
$content=($data_set == false) ? '' : $data_set['content'];
$slug=($data_set == false) ? '' : $data_set['slug'];

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
                        <b>Adding new page</b>
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
                                        <input required class="form-control" id="name" name="name" type="text"
                                               value="<?= $name ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="content" class="control-label col-lg-2">Content</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="content" name="content" type="text"
                                               value="<?= $content ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slug" class="control-label col-lg-2">Slug</label>
                                    <div class="col-lg-10">
                                        <input required class="form-control" id="slug" name="slug" type="text"
                                               value="<?= $slug ?>">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="status" class="control-label col-lg-2">Status</label>
                                    <div class="col-lg-10">
                                        <select name="status" id="status" class="form-control">

<!--                                            --><?php
//                                            $html = '';
//                                            foreach($options as $option){
//                                                $html .= "<option value='".$option['id']."'>".$option['status']."</option>";
//                                            }
//                                            echo $html;
//                                            ?>
                                            <?php
                                            $array= get_enum('pages', 'status');
                                            $html = '';
                                            foreach ($array as $option) {
                                                $html .= "<option value='" . $option . "'>" . $option . "</option>";
                                            }
                                            echo $html;
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="action" value="<?= isset($_GET['id'])? 'update-page' : 'add-page'?>">
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
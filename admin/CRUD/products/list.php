<?php
require_once "functions.php";
init();
$options = get_rows('products');
require_once "header_admin.php";
require_once "sidebar_admin.php";
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <b>Products</b>
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th> id</th>
                            <th> name</th>
                            <th> content</th>
                            <th> status</th>
                            <th> slug</th>
                            <th> price</th>
                            <th> currency</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($options as $opt):
                            ?>
                            <tr>
                                <td><a href="/opt_group/one.php?id=<?= $opt['id']; ?>"><?= $opt['id']; ?></a></td>
                                <td class=""><?= $opt['name']; ?></td>
                                <td class=""><?= $opt['content']; ?></td>
                                <td class=""><?= $opt['status']; ?></td>
                                <td class=""><?= $opt['slug']; ?></td>
                                <td class=""><?= $opt['price']; ?></td>
                                <td class=""><?= $opt['currency']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
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

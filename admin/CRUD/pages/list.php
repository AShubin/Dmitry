<?php
require_once "../../functions.php";
init();
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$options = get_rows('pages', $page);
$pag = get_pagination('pages');
require_once "../../header_admin.php";
require_once "../../sidebar_admin.php";
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <b>Pages</b>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"
                           id="hidden-table-info">
                        <thead>
                        <tr>
                            <th> id</th>
                            <th> name</th>
                            <th> slug</th>
                            <th> status</th>
                            <th> </th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($options as $opt): ?>
                            <tr>
                                <td>
                                    <a href="<?= admin_link('/crud/pages/one.php?id=' . $opt['id']) ?>"><?= $opt['id']; ?></a>
                                </td>
                                <td class=""><?= $opt['name']; ?></td>
                                <td class=""><?= $opt['slug']; ?></td>
                                <td class=""><?= $opt['status']; ?></td>
                                <td>
                                    <a class="btn btn-default"
                                       href="<?= admin_link('/crud/pages/form.php?id=' . $opt['id']) ?>">Update</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger"
                                       href="<?= admin_link('/crud/pages/list.php?delete_id=' . $opt['id'] . '&name=pages') ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="dataTables_info" id="hidden-table-info_info">Showing <?= $pag['min_number'] ?>
                                to <?= $pag['max_number'] ?> of <?= $pag['total'] ?> entries
                            </div>
                        </div>
                        <div class="span6">
                            <div class="dataTables_paginate paging_bootstrap pagination">
                                <ul>
                                    <?php if ($pag['page'] > 1): ?>
                                        <li class="prev"><a href="<?= create_link($pag['page'] - 1) ?>">← Previous</a>
                                        </li>
                                    <?php endif; ?>
                                    <?php
                                    if ($pag['number_pages'] < 10) {
                                        $range = range(1, $pag['number_pages']);
                                    } else {
                                        $min_arr = range($pag['page'] - 4, $pag['page']);
                                        $min = array_filter($min_arr, function ($v) {
                                            return $v > 0;
                                        });
                                        $max_arr = range($pag['page'], $pag['page'] + 4);
                                        $max = array_filter($max_arr, function ($v) {
                                            global $pag;
                                            return $v <= $pag['number_pages'];
                                        });
                                        $ar = range(min($min), max($max));
                                        $range = array_unique(array_merge([1], $ar, [$pag['number_pages']]));
                                    }

                                    foreach ($range as $number) {
                                        echo '<li ' . (($pag['page'] == $number) ? 'class="active"' : '') . '><a href="' . create_link($number) . '">' . $number . '</a></li>';
                                    } ?>

                                    <?php if ($pag['page'] < $pag['number_pages']): ?>
                                        <li class="next"><a href="<?= create_link($pag['page'] + 1) ?>">Next → </a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<?php require_once "../../footer_admin.php"; ?>

<!--script for this page-->
<!--<script src="js/jquery.js"></script>-->
<script type="text/javascript" language="javascript" src="../../assets/advanced-datatable/media/js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../../js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../../js/jquery.scrollTo.min.js"></script>
<script src="../../js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../../js/respond.min.js"></script>
<script type="text/javascript" language="javascript"
        src="../../assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../assets/data-tables/DT_bootstrap.js"></script>

</body>
</html>
<?php
require_once "../../functions.php";
init();
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$options = get_rows('configs', $page);
$pag = get_pagination('configs');
require_once "../../header_admin.php";
require_once "../../sidebar_admin.php";
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <b>Configs</b>
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th> id</th>
                            <th> option_group</th>
                            <th> name</th>
                            <th> value</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($options as $opt): ?>

                            <tr>
                                <td>
                                    <a href="<?= admin_link('/crud/configs/one.php?id=' . $opt['id']) ?>">
                                        <?= $opt['id']; ?></a>
                                </td>
                                <td class=""><?= $opt['option_group']; ?></td>
                                <td class=""><?= $opt['name']; ?></td>
                                <td class=""><?= $opt['value']; ?></td>
                                <td>
                                    <a class="btn btn-default"
                                       href="<?= admin_link('/crud/configs/form.php?id=' . $opt['id']) ?>">Update</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger"
                                       href="<?= admin_link('/crud/configs/list.php?delete_id=' . $opt['id'] . '&name=configs') ?>">Delete</a>
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
                                        echo '<li ' . (($pag['page'] == $number) ? 'class="active"' : '') . '>
                                        <a href="' . create_link($number) . '">' . $number . '</a></li>';
                                    } ?>

                                    <?php if ($pag['page'] < $pag['number_pages']): ?>
                                        <li class="next"><a href="<?= create_link($pag['page'] + 1) ?>">Next → </a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
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
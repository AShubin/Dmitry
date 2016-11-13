<?php
require_once "../../functions.php";
init();
$page=(isset($_GET['page']))?$_GET['page']:1;
$options = get_rows('option_group',$page);
$pag=get_pagination('option_group');
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
                        <b>Option group</b>
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                        <tr>
                            <th> id</th>
                            <th> name</th>
                            <th> count</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($options as $opt): ?>
                            <tr>
                                <td><a href="/opt_group/id/"><?= $opt['id']; ?></a></td>
                                <td class=""><?= $opt['name']; ?></td>
                                <td class=""><?= $opt['count']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="dataTables_info" id="hidden-table-info_info">Showing <?=$pag['min_number']?> to <?=$pag['max_number']?> of <?=$pag['total']?> entries</div>
                        </div>
                        <div class="span6">
                            <div class="dataTables_paginate paging_bootstrap pagination">
                                <ul>
                                    <?php if($pag['page']>1): ?>
                                        <li class="prev"><a href="<?=create_link($pag['page']-1)?>">← Previous</a></li>
                                    <?php endif; ?>
                                    <?php
                                    if ($pag['number_pages']<10) {
                                        $range = range(1, $pag['number_pages']);
                                    }else {
                                        $min_arr = range($pag['page']-4,$pag['page']);
                                        $min=  array_filter( $min_arr , function ($v) {
                                            return $v > 0;
                                        });
                                        $max_arr = range($pag['page'], $pag['page']+4);
                                        $max=  array_filter( $max_arr , function ($v) {
                                            global $pag;
                                            return $v <= $pag['number_pages'];
                                        });
                                        $ar = range(min($min), max($max));
                                        $range = array_unique(array_merge([1],$ar,[$pag['number_pages']]));
                                    }

                                    foreach ($range as $number) {
                                        echo '<li '.(($pag['page']==$number)?'class="active"':'').'><a href="'.create_link($number).'">'.$number.'</a></li>';
                                    }?>

                                    <?php if($pag['page']<$pag['number_pages']): ?>
                                        <li class="next"><a href="<?=create_link($pag['page']+1)?>">Next → </a></li>
                                    <?php endif;?>
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

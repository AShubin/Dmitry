<?php
require_once "../../functions.php";
init();
$options = get_rows('pages');
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
                            <th> content</th>
                            <th> slug</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($options as $opt): ?>
                            <tr>
                                <td><a href="/opt_group/one.php?id=<?= $opt['id']; ?>"><?= $opt['id']; ?></a></td>
                                <td class=""><?= $opt['name']; ?></td>
                                <td class="">Press <img src="../../assets/advanced-datatable/examples/examples_support/details_open.png"></td>
                                <td class=""><?= $opt['slug']; ?></td>
                            </tr>
                        </tbody>
                    </table>

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


<script type="text/javascript">

    function fnFormatDetails(oTable, nTr) {
        var aData = oTable.fnGetData(nTr);
        var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        sOut += '<tr><td class=""><?= $opt['content']; ?></td></tr>';
        sOut += '</table>';

        return sOut;
    }

    $(document).ready(function () {
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement('th');
        var nCloneTd = document.createElement('td');
        nCloneTd.innerHTML = '<img src="../../assets/advanced-datatable/examples/examples_support/details_open.png">';
        nCloneTd.className = "center";

        $('#hidden-table-info thead tr').each(function () {
            this.insertBefore(nCloneTh, this.childNodes[0]);
        });

        $('#hidden-table-info tbody tr').each(function () {
            this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
        });

        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#hidden-table-info').dataTable({
            "aoColumnDefs": [
                {"bSortable": false, "aTargets": [0]}
            ],
            "aaSorting": [[1, 'asc']]
        });

        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#hidden-table-info tbody td img').live('click', function () {
            var nTr = $(this).parents('tr')[0];
            if (oTable.fnIsOpen(nTr)) {
                /* This row is already open - close it */
                this.src = "../../assets/advanced-datatable/examples/examples_support/details_open.png";
                oTable.fnClose(nTr);
            }
            else {
                /* Open this row */
                this.src = "../../assets/advanced-datatable/examples/examples_support/details_close.png";
                oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
            }
        });
    });
</script>

<?php endforeach; ?>

</body>
</html>

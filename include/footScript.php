<!-- jQuery  -->
<script src="../include/assets/js/jquery.min.js"></script>
<script src="../include/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="../include/assets/js/bootstrap.min.js"></script>
<script src="../include/assets/js/waves.js"></script>
<script src="../include/assets/js/jquery.slimscroll.js"></script>
<script src="../include/assets/js/jquery.scrollTo.min.js"></script>


<!-- Jquery-Ui -->
<script src="../include/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- SCRIPTS -->



<script src="../include/plugins/moment/moment.js"></script>
<script src='../include/plugins/fullcalendar/js/fullcalendar.min.js'></script>
<script src="../include/assets/pages/jquery.calendar.js"></script>


 <script src="../include/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../include/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="../include/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../include/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../include/plugins/datatables/jszip.min.js"></script>
        <script src="../include/plugins/datatables/pdfmake.min.js"></script>
        <script src="../include/plugins/datatables/vfs_fonts.js"></script>
        <script src="../include/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../include/plugins/datatables/buttons.print.min.js"></script>
        <script src="../include/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../include/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../include/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../include/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../include/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../include/plugins/datatables/dataTables.colVis.js"></script>
        <script src="../include/plugins/datatables/dataTables.fixedColumns.min.js"></script>


             <script src="../include/assets/pages/jquery.datatables.init.js"></script>

             <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>

<!-- App js -->
<script src="../include/assets/js/jquery.core.js"></script>
<script src="../include/assets/js/jquery.app.js"></script>
  
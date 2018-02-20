<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../include/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="../include/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../include/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <!-- App css -->
        <link href="../include/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../include/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="../include/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">




            <!-- ========== Left Sidebar Start ========== -->

            <br>


                    <div class="container">
<div class="row">
  <div class="col-md-12">
    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal"><span class="fa fa-plus"></span> Add New</button>

  </div>

</div>
<br>


                        <!-- end row -->



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>List of Timesheet Submited</b></h4>


                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Check In</th>
                                            <th>Break Out</th>
                                            <th>Break In</th>
                                                    <th>Check Out</th>

                                          <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>07:00 AM</td>
                                            <td>12:00 PM</td>
                                            <td>01:00 PM</td>
                                            <td>05:00 PM</td>

                                              <td>
                                                <a  class="btn btn-sm btn-info"><span class="fa fa-eye"></span> View</a>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Sample Data</td>
                                            <td>09:00 AM</td>
                                            <td>11:30 PM</td>
                                            <td>12:30 PM</td>
                                            <td>04:00 PM</td>

                                              <td>
                                                <a  class="btn btn-sm btn-info"><span class="fa fa-eye"></span> View</a>
                                              </td>
                                        </tr>
                                        <tr>
                                            <td>Sample Again</td>
                                            <td>10:00 AM</td>
                                            <td>02:00 PM</td>
                                            <td>03:00 PM</td>
                                            <td>08:00 PM</td>

                                              <td>
                                                <a  class="btn btn-sm btn-info"><span class="fa fa-eye"></span> View</a>
                                              </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>















                        <!-- end row -->



                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>

            </div>
            <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="custom-width-modalLabel">Add New Time</h4>
                        </div>
                        <div class="modal-body">
                          <label>Employee Name</label>
                          <input type="text" class="form-control" placeholder="Input Name here!">
                          <label>Check In</label>
                          <input type="time" class="form-control">
                          <label>Break Out</label>
                          <input type="time" class="form-control">
                          <label>Break In</label>
                          <input type="time" class="form-control">
                          <label>Check Out</label>
                          <input type="time" class="form-control">
                          <label>Remarks</label>
                            <input type="text" class="form-control" placeholder="Enter remarks here!">
                                                  </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="../include/assets/js/jquery.min.js"></script>
        <script src="../include/assets/js/bootstrap.min.js"></script>
        <script src="../include/assets/js/metisMenu.min.js"></script>
        <script src="../include/assets/js/waves.js"></script>
        <script src="../include/assets/js/jquery.slimscroll.js"></script>

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

        <!-- init -->
        <script src="../include/assets/pages/jquery.datatables.init.js"></script>

        <!-- App js -->
        <script src="../include/assets/js/jquery.core.js"></script>
        <script src="../include/assets/js/jquery.app.js"></script>

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
                    ajax: "../include/plugins/datatables/json/scroller-demo.json",
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


    </body>
</html>

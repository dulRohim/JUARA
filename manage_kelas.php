<<<<<<< HEAD
<?php include 'php/koneksi.php'; ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SOLO KARATE CLUB | Kontingen </title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div id="wrapper">
         <?php include 'menubar.php'; ?>
      </div>
      <div class="row wrapper border-bottom white-bg page-heading">
         <div class="col-lg-10">
            <h2>Data Kelas</h2>
            <ol class="breadcrumb">
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <strong>Manage</strong>
               </li>
               <li class="active">
                  <strong>Manage Kelas</strong>
               </li>
            </ol>
         </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
         <div class="row">
            <div class="col-lg-12">
               <div class="ibox float-e-margins">
                  <div class="ibox-title">
                     <h5>Input Data Kelas</h5>
                  </div>
                  <div class="ibox-content">
                     <p>
                        Silahkan Input Data Kelas Melalui Tombol Berikut ini.
                     </p>
                     <div class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInput">
                        +
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="ibox float-e-margins">
                  <div class="ibox-title">
                     <h5>Data Kelas</h5>
                  </div>
                  <div class="ibox-content">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                           <thead>
                              <tr>
                                 <th width="30px">No</th>
                                 <th>Nama Kelas</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $sql = "SELECT * FROM datakelas ORDER BY id_kelas;";
                                 $hasil = mysqli_query($con, $sql);
                                 $no = 1;
                                 while ($cetak = mysqli_fetch_array($hasil)){
                                 echo "<tr>";
                                 echo "<td>".$no."</td>";
                                 echo "<td>".$cetak['nama_kelas']."</td>";
                                 echo "</tr>";
                                 $no++;}
                                 ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th></th>
                                 <th></th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer">
         <div class="pull-right">
            10GB of <strong>250GB</strong> Free.
         </div>
         <div>
            <strong>Copyright</strong> Example Company &copy; 2014-2015
         </div>
      </div>
      </div></div>
      <div class="modal inmodal fade" id="modalInput" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Input Kelas</h4>
               </div>
               <div class="modal-body">
                  <form method="POST" class="form-horizontal" action="#">
                     <!--
                        <div class="form-group"><label class="col-sm-2 control-label">Nama Kelas</label>
                          <div class="col-sm-10"><input type="text" class="form-control" name="nama_kelas" required></div>
                        </div>
                        -->
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kelas</label>
                        <div class="col-sm-10">
                           <div class="input-group m-b"><span class="input-group-btn">
                              <input type="reset" class="btn btn-danger btn-rounded btn-outline"></span> <input type="text" class="form-control" name="nama_kelas" required="">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <center>
                           <input type="submit" value="Save Changes" name="submit" class="btn btn-primary"/>
                        </center>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="js/plugins/dataTables/datatables.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/inspinia.js"></script>
      <script src="js/plugins/pace/pace.min.js"></script>
      <!-- jQuery UI -->
      <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
      <script>
         $(document).ready(function(){
             $('.dataTables-example').DataTable({
                 dom: '<"html5buttons"B>lTfgitp',
                 buttons: [
                     { extend: 'copy'},
                     {extend: 'csv'},
                     {extend: 'excel', title: 'DataKontingen'},
                     {extend: 'pdf', title: 'DataKontingen'},

                     {extend: 'print',
                      customize: function (win){
                             $(win.document.body).addClass('white-bg');
                             $(win.document.body).css('font-size', '10px');

                             $(win.document.body).find('table')
                                     .addClass('compact')
                                     .css('font-size', 'inherit');
                     }
                     }
                 ]

             });

             /* Init DataTables */
             var oTable = $('#editable').DataTable();
             });
      </script>
   </body>
</html>
<?php
   if(isset($_POST['submit'])){
     $nama_kelas = $_POST['nama_kelas'];
     $sql = "INSERT INTO datakelas(nama_kelas)
     VALUES ('$nama_kelas');";
     $hasil = mysqli_query($con, $sql);
     if(!$hasil){
     printf("Gagal mengisi tabel kontingen: %s\n",
     mysqli_error($con));
      exit();
     }
     mysqli_free_result($hasil);
     mysqli_close();
   }
   ?>
=======
<?php include 'php/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLO KARATE CLUB | Kontingen </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
    <?php include 'menubar.php'; ?>
  </div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Data Kelas</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <strong>Manage</strong>
                </li>
                <li class="active">
                    <strong>Manage Kelas</strong>
                </li>
            </ol>
        </div>
    </div>
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
          <div class="col-lg-12">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>Input Data Kelas</h5>
              </div>
              <div class="ibox-content">
                  <p>
                    Silahkan Input Data Kelas Melalui Tombol Berikut ini.
                  </p>
                  <div class="text-center">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInput">
                          +
                      </button>
                  </div>
              </div>
            </div></div></div>
        <div class="row">
            <div class="col-lg-12">
                          <div class="ibox float-e-margins">
                              <div class="ibox-title">
                                  <h5>Data Kelas</h5>
                              </div>
                              <div class="ibox-content">
                                <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                                  <thead>
                                  <tr>
                                      <th width="30px">No</th>
                                      <th>Nama Kelas</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                    $sql = "SELECT * FROM datakelas ORDER BY id_kelas;";
                                    $hasil = mysqli_query($con, $sql);
                                    $no = 1;
                                    while ($cetak = mysqli_fetch_array($hasil)){
                                    echo "<tr>";
                                    echo "<td>".$no."</td>";
                                    echo "<td>".$cetak['nama_kelas']."</td>";
                                    echo "</tr>";
                                    $no++;}
                                  ?>

                                  </tbody>
                                  <tfoot>
                                  <tr>
                                    <th></th>
                                    <th></th>
                                  </tr>
                                  </tfoot>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div></div></div>

        <div class="modal inmodal fade" id="modalInput" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Input Kelas</h4>
                    </div>
                    <div class="modal-body">
                      <form method="POST" class="form-horizontal" action="#">
                        <!--
                          <div class="form-group"><label class="col-sm-2 control-label">Nama Kelas</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="nama_kelas" required></div>
                          </div>
                        -->

                          <div class="form-group"><label class="col-sm-2 control-label">Nama Kelas</label>
                            <div class="col-sm-10">
                                <div class="input-group m-b"><span class="input-group-btn">
                                    <input type="reset" class="btn btn-danger btn-rounded btn-outline"></span> <input type="text" class="form-control" name="nama_kelas" required="">
                                </div>
                            </div>
                          </div>


                          <div class="form-group">
                                <center>
                                <input type="submit" value="Save Changes" name="submit" class="btn btn-primary"/>
                              </center>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'DataKontingen'},
                {extend: 'pdf', title: 'DataKontingen'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

        /* Init DataTables */
        var oTable = $('#editable').DataTable();
        });
    </script>
</body>
</html>
<?php
  if(isset($_POST['submit'])){
    $nama_kelas = $_POST['nama_kelas'];
    $sql = "INSERT INTO datakelas(nama_kelas)
    VALUES ('$nama_kelas');";
    $hasil = mysqli_query($con, $sql);
    if(!$hasil){
    printf("Gagal mengisi tabel kontingen: %s\n",
    mysqli_error($con));
     exit();
    }
    mysqli_free_result($hasil);
    mysqli_close();
  }
?>
>>>>>>> 1e7dd6ad927b701281adab618a27135a40957988

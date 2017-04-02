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
      <link href="css/twitter-typeahead.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div id="wrapper">
         <?php include 'menubar.php'; ?>
      </div>
      <div class="row wrapper border-bottom white-bg page-heading">
         <div class="col-lg-10">
            <h2>Data Peserta</h2>
            <ol class="breadcrumb">
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <strong>Champion</strong>
               </li>
               <li class="active">
                  <strong><a href="juara_umum.php">Juara Umum</a></strong>
               </li>
            </ol>
         </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
         <div class="row">
            <div class="col-lg-12">
               <div class="ibox float-e-margins">
                  <div class="ibox-title">
                     <h5>Data Juara Kelas Khusus</h5>
                  </div>
                  <div class="ibox-content">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                           <thead>
                              <tr>
                                 <th width="30px">No</th>
                                 <th>Nama Kelas</th>
                                 <th>Juara</th>
                                 <th>Nama Peserta</th>
                                 <th>Nama Kontingen</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $sql = "SELECT * FROM  datapeserta dp, datakontingen dkg, datakelas dk
                                 WHERE dp.id_kontingen=dkg.id_kontingen
                                 AND dp.id_kelas=dk.id_kelas
                                 AND dk.nama_kelas NOT LIKE '%Khusus%'
                                 ORDER BY id_peserta;";
                                 $hasil = mysqli_query($con, $sql);
                                 $no = 1;
                                 while ($cetak = mysqli_fetch_array($hasil)){
                                 echo "<tr>";
                                 echo "<td>".$no."</td>";
                                 echo "<td>".$cetak['nama_kelas']."</td>";
                                 echo "<td>".$cetak['juara']."</td>";
                                 echo "<td>".$cetak['nama_peserta']."</td>";
                                 echo "<td>".$cetak['nama_kontingen']."</td>";
                                 echo "</tr>";
                                 $no++;}
                                 ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>No</th>
                                 <th>Kontingen</th>
                                 <th>Action</th>
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
      <div class="modal inmodal fade" id="modalInput" tabindex="-1" role="dialog"  aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Input Peserta</h4>
               </div>
               <div class="modal-body">
                  <form method="POST" class="form-horizontal" action="#">
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Peserta</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="nama_peserta" required></div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Juara</label>
                        <div class="col-sm-10"><input type="radio" name="juara" value="1"> 1</div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10"><input type="radio" name="juara" value="2"> 2</div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10"><input type="radio" name="juara" value="3"> 3</div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kelas</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="nama_kelas"></div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kontingen</label>
                        <div class="col-sm-10"><input type="text" id="kontingen_pilih" class="form-control" name="nama_kontingen" maxlength="13" autocomplete="off"></div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                           <input type="submit" value="Save Changes" name="submit" class="btn btn-primary"/>
                           <input type = "reset" value="Reset" name="reset" class="btn btn-white"/>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap3-typeahead.min.js"></script>
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="js/plugins/dataTables/datatables.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/inspinia.js"></script>
      <script src="js/plugins/pace/pace.min.js"></script>
      <!-- jQuery UI -->
      <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
      <script>
         var kontingen_data   = [];
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
           <?php
            $sql = "SELECT * FROM datakontingen;";
            $hasil = mysqli_query($con, $sql);
            $no = 1;
            while ($cetak = mysqli_fetch_array($hasil)){
             echo "kontingen_data.push('".$cetak['nama_kontingen']."');";
            $no++;}
             ?>
           $('#kontingen_pilih').typeahead({
              local: kontingen_data
            });

         });
      </script>
   </body>
</html>

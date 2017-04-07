<?php include 'php/koneksi.php'; ?>
      <div class="row wrapper border-bottom white-bg page-heading">
         <div class="col-lg-10">
            <h2>Data Peserta</h2>
            <ol class="breadcrumb">
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <strong>Manage</strong>
               </li>
               <li class="active">
                  <strong><a href="index.php?konten=peserta">Manage Peserta</a></strong>
               </li>
            </ol>
         </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
         <div class="row">
            <div class="col-lg-12">
               <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <div class="text-center">
                      <strong><h2>Input Data Peserta</h2></strong>
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
                     <h5>Data Peserta</h5>
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
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $sql = "SELECT * FROM  datapeserta dp, datakontingen dkg, datakelas dk
                                 WHERE dp.id_kontingen=dkg.id_kontingen
                                 AND dp.id_kelas=dk.id_kelas
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
                                 ?>
                                 <td>
                                   <button type="button" class="btn btn-outline btn-info btn-xs" data-toggle="modal" data-target="#modalUpdate"><i class="fa fa-pencil">  Edit</i></button>
                                   <a href="?id=<?php echo $cetak['id_peserta'] ?>"><button type="button" class="btn btn-outline btn-danger btn-xs"><i class="fa fa-minus-circle">  Delete</i></button></a>
                                 </td>
                                 <?php
                                 $no++;
                               }
                             ?>
                           </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>No</th>
                                 <th>Kontingen</th>
                                 <th>Action</th>
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

      <!-- Custom and plugin javascript -->

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

<?php
   if(isset($_POST['submit'])){
     $nama_peserta = $_POST['nama_peserta'];
     $juara = $_POST['juara'];
     $nama_kelas = $_POST['nama_kelas'];
     $nama_kontingen = $_POST['nama_kontingen'];
     $sql = "INSERT INTO datapeserta(nama_peserta, juara, id_kelas, id_kontingen)
     VALUES ('$nama_peserta', '$juara', '$nama_kelas', '$nama_kontingen');";
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

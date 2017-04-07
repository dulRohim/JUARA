<?php include 'php/koneksi.php'; ?>

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
                  <strong><a href="index.php?konten=kelas">Manage Kelas</a></strong>
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
                       <div class="text-center">
                         <strong><h2>Input Data Kelas</h2></strong>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInput">
                          +
                          </button>
                       </div>
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
                                 <th width="100px">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $sql = "SELECT * FROM datakelas ORDER BY nama_kelas;";
                                 $hasil = mysqli_query($con, $sql);
                                 $no = 1;
                                 while ($cetak = mysqli_fetch_array($hasil)){
                                 echo "<tr>";
                                 echo "<td>".$no."</td>";
                                 echo "<td>".$cetak['nama_kelas']."</td>";
                                 $no++;
                                 ?>
                                 <td>
                                   <button type="button" class="btn btn-outline btn-info btn-xs" data-toggle="modal" data-target="#modalUpdate"><i class="fa fa-pencil">  Edit</i></button>
                                   <a href="?id=<?php echo $cetak['id_kontingen'] ?>"><button type="button" class="btn btn-outline btn-danger btn-xs"><i class="fa fa-minus-circle">  Delete</i></button></a>
                                 </td>
                                 <?php
                               }
                             ?>
                           </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th></th>
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

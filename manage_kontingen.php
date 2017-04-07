<?php include 'php/koneksi.php'; ?>

      <div class="row wrapper border-bottom white-bg page-heading">
         <div class="col-lg-10">
            <h2>Data Kontingen</h2>
            <ol class="breadcrumb">
               <li>
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <strong>Manage</strong>
               </li>
               <li class="active">
                  <strong><a href="index.php?konten=kontingen">Manage Kontingen</a></strong>
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
                      <strong><h2>Input Data Kontingen</h2></strong>
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
                     <h5>Data Kontingen</h5>
                  </div>
                  <div class="ibox-content">
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                           <thead>
                              <tr>
                                 <th width="30px">No</th>
                                 <th>Nama Kontingen</th>
                                 <th>Nama Official</th>
                                 <th>No Telepon</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                $sql = "SELECT * FROM datakontingen ORDER BY id_kontingen;";
                                $hasil = mysqli_query($con, $sql);
                                $no = 1;
                                while ($cetak = mysqli_fetch_array($hasil))
                                {
                                  echo "<tr>";
                                  echo "<td>".$no."</td>";
                                  echo "<td>".$cetak['nama_kontingen']."</td>";
                                  echo "<td>".$cetak['nama_official']."</td>";
                                  echo "<td>".$cetak['nomor_hp']."</td>";
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
                                 <th>No</th>
                                 <th>Kontingen</th>
                                 <th>Action</th>
                                 <th>xx</th>
                                 <th>x</th>
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
                  <h4 class="modal-title">Input Kontingen</h4>
               </div>
               <div class="modal-body">
                  <form method="POST" class="form-horizontal" action="#">
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kontingen</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="nama_kontingen" required></div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Official</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="nama_official"></div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor Telepon</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="nomor_hp" maxlength="13" id="edit1"></div>
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

<?php
   if(isset($_POST['submit'])){
     $nama_kontingen = $_POST['nama_kontingen'];
     $nama_official = $_POST['nama_official'];
     $nomor_hp = $_POST['nomor_hp'];
     $sql = "INSERT INTO datakontingen(nama_kontingen, nama_official, nomor_hp)
     VALUES ('$nama_kontingen', '$nama_official', '$nomor_hp');";
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

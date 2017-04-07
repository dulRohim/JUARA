<?php include 'php/koneksi.php'; ?>
<div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-10">
              <h2>Semua Data</h2>
              <ol class="breadcrumb">
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li class="active">
                      <strong>Semua Data</strong>
                  </li>
              </ol>
          </div>
      <div class="col-lg-2">
      </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
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
                               ORDER BY nama_kelas;";
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

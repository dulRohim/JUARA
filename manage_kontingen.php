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
            <h2>Data Kontingen</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <strong>Manage</strong>
                </li>
                <li class="active">
                    <strong>Manage Kontingen</strong>
                </li>
            </ol>
        </div>
    </div>
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
          <div class="col-lg-12">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>Input Data Kontingen</h5>
              </div>
              <div class="ibox-content">
                  <p>
                    Silahkan Input Data Kontingen Melalui Tombol Berikut ini.
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
                                  <h5>Data Kontingen</h5>

                              </div>
                              <div class="ibox-content">

                              <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover dataTables-example" >
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Kontingen</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                $sql = "SELECT * FROM datakontingen ORDER BY id_kontingen;";
                                $hasil = mysqli_query($con, $sql);
                                $no = 1;
                                while ($cetak = mysqli_fetch_array($hasil)){
                                echo "<tr>";
                                echo "<td>".$cetak['id_kontingen']."</td>";
                                echo "<td>".$cetak['nama_kontingen']."</td>";
                                echo "<td>".$cetak['nama_official']."</td>";
                                echo "<td></td>";
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
                            </div></div></div>

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
                        <h4 class="modal-title">Input Kontingen</h4>
                    </div>
                    <div class="modal-body">
                      <form method="POST" class="form-horizontal" action="#">
                          <div class="form-group"><label class="col-sm-2 control-label">Nama Kontingen</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="nama_kontingen" required></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label">Nama Official</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="nama_official"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label">Nomor Telepon</label>
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
      function validateNumber(event) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return true;
        } else if ( key < 48 || key > 57 ) {
            return false;
        } else {
            return true;
        }
    };
    $('[id^=edit]').keypress(validateNumber);

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

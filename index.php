<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Solo Karate Club | Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/twitter-typeahead.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
      <?php include 'menubar.php'; ?>
    </div>
      <?php
				if ($_GET['konten']=='data') {
					require 'semuaData.php';
				}elseif ($_GET['konten']=='kontingen') {
					require 'manage_kontingen.php';
        }elseif ($_GET['konten']=='peserta') {
          require 'manage_peserta.php';
        }elseif ($_GET['konten']=='kelas') {
          require 'manage_kelas.php';
        }elseif ($_GET['konten']=='khusus') {
          require 'juara_khusus.php';
        }elseif ($_GET['konten']=='umum') {
          require 'juara_umum.php';
				}elseif($_GET['konten']=='beranda'){
					require 'dashboard_utama.php';
				}else{
					echo '<meta http-equiv="refresh" content="0; url=index.php?konten=beranda">';
				}
			?>
    <div class="footer">
        <div class="pull-right">
          10GB of <strong>250GB</strong> Free.
        </div>
        <div>
          <strong>Copyright</strong> Solo Karate Club &copy; 2017
        </div>
      </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/bootstrap3-typeahead.min.js"></script>
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

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

</head>

<body>
    <div id="wrapper">
      <?php include 'menubar.php'; ?>
    </div>
      <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-3">
          <h2>Welcome Admin</h2>
          <small>Data yang sudah masuk adalah sebanyak xxxx Peserta. </small></br>
          <h3 align="center">Tutorial</h3>
          <ul class="list-group clear-list m-t">
            <li class="list-group-item fist-item">
              <span class="pull-right">Jumlah  </span>
              <span class="label label-success">1</span> Input Kontingen
            </li>
            <li class="list-group-item">
              <span class="pull-right">Jumlah</span>
              <span class="label label-success">2</span> Input Data Peserta
            </li>
          </ul>
        </div>
        <div class="col-sm-6">
          <?php include 'geserGambar.php'; ?>
        </div>
          <div class="col-sm-3">
            <?php include 'sidebar.php'; ?>
          </div>
      </div>
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


    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>


    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script>
    $(document).ready(function(){
              });
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Solo Karate Club', 'Welcome to Admin Panel');

    }, 1300);

    </script>
</body>
</html>

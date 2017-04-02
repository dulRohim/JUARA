<<<<<<< HEAD
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
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>All Data</h5>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead>
                        <tr>
                          <th width='30px'>No</th>
                          <th width='300px'>Kelas</th>
                          <th width='30px'>Juara</th>
                          <th width='300px'>Nama</th>
                          <th>Kontingen</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Trident</td>
                          <td>Internet
                              Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center">4</td>
                          <td class="center">X</td>
                        </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Kontingen</th>
                        <th>Action</th>
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
=======
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
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>All Data</h5>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead>
                        <tr>
                          <th width='30px'>No</th>
                          <th width='300px'>Kelas</th>
                          <th width='30px'>Juara</th>
                          <th width='300px'>Nama</th>
                          <th>Kontingen</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Trident</td>
                          <td>Internet
                              Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td class="center">4</td>
                          <td class="center">X</td>
                        </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Kontingen</th>
                        <th>Action</th>
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
>>>>>>> 1e7dd6ad927b701281adab618a27135a40957988

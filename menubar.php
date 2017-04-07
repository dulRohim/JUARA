<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="img/profile.jpg" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Abdul Rohim B.A.P</strong>
                    </span> <span class="text-muted text-xs block">Web Developer<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SKC
                </div>
            </li>
            <li <?php if ($_GET['konten']=='beranda' || $_GET['konten']=='data') {echo 'class="active"';}?>>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="index.php?konten=beranda">Dashboard</a></li>
                    <li><a href="index.php?konten=data">Semua Data</a></li>
                </ul>
            </li>
            <li <?php if ($_GET['konten']=='kontingen' || $_GET['konten']=='peserta' || $_GET['konten']=='kelas') {echo 'class="active"';}?>>
              <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Manage</span><span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li><a href="index.php?konten=kontingen">Manage Kontingen</a></li>
                <li><a href="index.php?konten=peserta">Manage Peserta</a></li>
                <li><a href="index.php?konten=kelas">Manage Kelas</a></li>
              </ul>
            </li>
            <li <?php if ($_GET['konten']=='umum' || $_GET['konten']=='khusus') {echo 'class="active"';}?>>
              <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Champion</span><span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                <li><a href="index.php?konten=umum">Juara Umum</a></li>
                <li><a href="index.php?konten=khusus">Juara Khusus</a></li>
              </ul>
            </li>
        </ul>
    </div>
</nav>

<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="row border-bottom">
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
  </div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <span class="m-r-sm text-muted welcome-message">Welcome to Admin Panel.</span>
        </li>
        <li>
            <a href="login.php">
                <i class="fa fa-sign-out"></i> Log out
            </a>
        </li>
    </ul>
</nav>

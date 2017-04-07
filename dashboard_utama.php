<?php include 'php/koneksi.php'; ?>
<div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-3">
          <h2>Welcome Admin</h2>
          <small>Data yang sudah masuk adalah sebanyak Peserta. </small></br>
          <h3 align="center">Tutorial</h3>
          <ul class="list-group clear-list m-t">
            <li class="list-group-item fist-item">
              <span class="pull-right">Jumlah</span>
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

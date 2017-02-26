<?php

$this->registerJs($this->render('_script_index_summary.js'));
$this->registerJs($this->render('_script_index_summary_pie.js'));
$this->registerJs($this->render('_script_index_summary_stacked.js'));

$data[1] = 20000;
$data[2] = 100000;
$data[3] = 32100;
$data[4] = 421300;
$data['JML_LUNAS_RP'] = 2123123;
$data['JML_LUNAS'] = 3213;
$data['JML_TAGIHAN'] = 21023123;
$data['JML_TAGIHAN_RP_ALL'] = 4123123;
$data['JML_TAGIHAN_ALL'] = 12314;
$data['JML_TAGIHAN_RP'] = 12412312;

  $this->title = "Dinas Pendapatan Daerah Pekanbaru - Dashboard";
  date_default_timezone_set("Asia/Jakarta");
?>  

<!-- TOP BAR -->

<div id="widget-dropdown" class="row">
    <div class="col-sm-3">
      <div class="panel panel-overflow mb10">
        <div class="panel-body pn pl20">
          <div class="icon-bg"><i class="fa fa-calendar-o text-grey"></i></div>
          <h2 class="mt15 lh15 text-blue2"><b><?= $data[3] ?></b></h2>
          <h6 class="text-muted">Total Kehadiran Bulan : <?=  date("F") ?> </h6>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="panel panel-overflow mb10">
        <div class="panel-body pn pl20">
          <div class="icon-bg"><i class="fa fa-bar-chart-o text-teal"></i></div>
          <h2 class="mt15 lh15 text-blue2"><b><?= $data[4] ?></b></h2>
          <h6 class="text-muted">Total Kehadiran Tahun : <?=  date("Y") ?></h6>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="panel panel-overflow mb10">
        <div class="panel-body pn pl20">
          <div class="icon-bg"><i class="fa fa-calendar-o text-grey"></i></div>
          <h2 class="mt15 lh15 text-blue2"><b><?= $data[1] ?></b></h2>
          <h6 class="text-muted">Total Kehadiran Peltu : <?=  date("F") ?> </h6>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="panel panel-overflow mb10">
        <div class="panel-body pn pl20">
          <div class="icon-bg"><i class="fa fa-bar-chart-o text-teal"></i></div>
          <h2 class="mt15 lh15 text-blue2"><b><?= $data[2] ?></b></h2>
          <h6 class="text-muted">Total Kehadiran Peltu : <?=  date("Y") ?></h6>
        </div>
      </div>
    </div>
</div>
<!-- END OF TOP BAR -->

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"> 
                <span class="panel-title">
                    <i class="fa fa-pencil"></i>Rangkuman Kehadiran
                </span>
                <ul class="nav panel-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Statistik</a></li>
                </ul>
            </div>
            <div class="panel-body pn">
                <div class="tab-content border-none pn">
                    <div id="tab1" class="tab-pane active p15">
                        <div class="row">
                            <div class="col-lg-8 pn">
                              <div id="graph-payment-bar" style="height: 400px; width: 100%;"></div>
                            </div>
                            <div class="col-lg-4 visible-lg pl5">
                              <div id="graph-kdtp-pie" style="width:100%; height:400px; max-width:600px; margin:0 auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="widget-dropdown" class="row">
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading"> 
                <span class="panel-title">
                    <i class="fa fa-pencil"></i>Laporan Kehadiran Global
                </span>
                <ul class="nav panel-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Statistik</a></li>
                </ul>
            </div>
            <div class="panel-body pn">
                <div class="tab-content border-none pn">
                    <div id="tab1" class="tab-pane active p15">
                        <div class="row">
                            <div class="col-lg-12 pn">
                              <div id="graph" style="height: 500px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




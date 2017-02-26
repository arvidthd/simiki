<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>SiMiki - Sistem Manajemen Informasi Kids Impact</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="Fusion - A Responsive HTML5 Admin UI Template Theme">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion')?>/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Required Plugin CSS 
    <link rel="stylesheet" type="text/css" href="vendor/plugins/ladda/ladda.min.css">
    -->

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/vendor.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/utility.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/custom.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web/fusion/')?>img/favicon_star.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<body class="buttons-page">
<script> var boxtest = localStorage.getItem('boxed'); if (boxtest === 'true') {document.body.className+=' boxed-layout';} </script> 

<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox">
  <!-- <div class="skin-toolbox-toggle"> <i class="fa fa-wrench"></i> </div> -->
  <div class="skin-toolbox-panel">
    <form id="skin-toolbox-form">
      <h4 class="pl5">Theme Options</h4>
      <div class="form-group">
        <div class="cBox cBox-inline">
          <input type="checkbox" id="ajax-option" checked/>
          <label for="ajax-option">Ajax Loading</label>
        </div>
      </div>
      <h4 class="pl5 mt20">Stylesss Options</h4>
      <div class="form-group">
        <div class="cBox cBox-inline">
          <input type="checkbox" id="header-option" checked/>
          <label for="header-option">Fixed Header</label>
        </div>
      </div>
      <div class="form-group">
        <div class="cBox cBox-inline">
          <input type="checkbox" id="sidebar-option"/>
          <label for="sidebar-option">Fixed Sidebar</label>
        </div>
      </div>
      <div class="form-group">
        <div class="cBox cBox-inline">
          <input type="checkbox" id="breadcrumb-hidden"/>
          <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
        </div>
      </div>
      <div class="form-group">
        <div class="cBox cBox-inline">
          <input type="checkbox" id="usermenu-hidden"/>
          <label for="usermenu-hidden">Hide Usermenu</label>
        </div>
      </div>
      <h4 class="pl5 mt20">Layout Options</h4>
      <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="optionsRadios" id="fullwidth-option" checked>
          Fullwidth </label>
      </div>
      <div class="form-group mb20">
        <label class="radio-inline">
          <input type="radio" name="optionsRadios" id="boxed-option">
          Boxed Layouts </label>
      </div>
      <h4 class="pl5 mt20">Header Colors</h4>
      <div class="form-group mb10">
        <div class="toggle-color-wrap">
            <div class="toggle-color-swap bg-purple3" data-swap="bg-purple3"></div>
            <div class="toggle-color-swap bg-purple2" data-swap="bg-purple2"></div>
            <div class="toggle-color-swap bg-blue4-alt" data-swap="bg-blue4-alt"></div>
            <div class="toggle-color-swap bg-blue5-alt" data-swap="bg-blue5-alt"></div>
            <div class="toggle-color-swap bg-blue6-alt" data-swap="bg-blue6-alt"></div>
            <div class="toggle-color-swap bg-red2" data-swap="bg-red2"></div>
            <div class="toggle-color-swap bg-orange2" data-swap="bg-orange2"></div>
            <div class="toggle-color-swap bg-brown-alt" data-swap="bg-brown-alt"></div>
            <div class="toggle-color-swap bg-dark3" data-swap="bg-dark3"></div>
            <div class="toggle-color-swap bg-white" data-swap="bg-white"></div>
            <div class="clearfix"></div>
        </div>
      </div>      
      <div class="form-group"> <a href="customizer.html" id="customizer-link" class="btn btn-gradient btn-block">CUSTOMIZER</a> </div>
    </form>
  </div>
</div>
<!-- End: Theme Preview Pane --> 

<!-- Start: Header -->
<header class="navbar navbar-fixed-top">
  <div class="navbar-branding"> <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span> <a class="navbar-brand" href="dashboard.html">
    <!-- <img src="img/logos/header-logo.png"> -->Logo
  </a> </div>
  <div class="navbar-left">
    <div class="navbar-divider"></div>
    <div id="settings_menu"> <span class="glyphicons glyphicons-settings dropdown-toggle cursor" data-toggle="dropdown"></span>
      <ul class="dropdown-menu" role="menu">
        <li><a href="javascript:void(0);"><span class="glyphicons glyphicons-bell text-purple mr15"></span>Users</a></li>
        <li><a href="javascript:void(0);"><span class="glyphicons glyphicons-notes text-blue mr15"></span>Servers</a></li>
        <li><a href="javascript:void(0);"><span class="glyphicons glyphicons-facebook text-orange mr15"></span>Crons</a></li>
      </ul>
    </div>
    <!-- <div id="language_menu"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="flag-xs flag-us"></span> <span class="small va-m">US</span> <i class="fa fa-angle-down"></i> </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="javascript:void(0);"><span class="flag-xs flag-in"></span> Hindu</a></li>
        <li><a href="javascript:void(0);"><span class="flag-xs flag-tr"></span> Turkish</a></li>
        <li><a href="javascript:void(0);"><span class="flag-xs flag-es"></span> Spanish</a></li>
      </ul>
    </div> -->
  </div>
  <div class="navbar-right">
    <div class="navbar-search">
      <input type="text" id="HeaderSearch" placeholder="Search..." value="Search...">
    </div>
    <div class="navbar-menus">
      <div class="btn-group" id="alert_menu">
        <button type="button" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicons glyphicons-bell"></span> <b>3</b> </button>
        <ul class="dropdown-menu media-list" role="menu">
          <li class="dropdown-header">Recent Notifications<span class="pull-right glyphicons glyphicons-bell"></span></li>
          <li class="p15 pb10">
            <ul class="list-unstyled">
                <li>
                    <span class="glyphicons glyphicons-gift text-purple2 fs16 mr15"></span>
                    <b>Gaby Safira</b>'s Birthday is Today
                </li>
                <li class="pt10">
                    <span class="glyphicons glyphicons-bell text-blue2 fs16 mr15"></span>
                    Total Kids Present Today : <b>4,100</b></li>
                <li class="pt10">
                    <span class="glyphicons glyphicons-cup text-red2 fs16 mr15"></span>
                    Peak total kids present is on <b>IR 13.00</b> 
                </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="btn-group" id="comment_menu">
        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicons glyphicons-display"></span> 
            <b>0</b>
        </button>
        <!-- <div class="dropdown-menu" role="menu">
          <ul class="nav nav-tabs tabs-border-bottom" role="tablist">
            <li class="active"><a href="#header_tab1" role="tab" data-toggle="tab">Messages</a></li>
            <li><a href="#header_tab2" role="tab" data-toggle="tab">Tickets</a></li>
            <li><a href="#header_tab3" role="tab" data-toggle="tab">Todo List</a></li>
          </ul>
        </div> -->
      </div>
      <div class="btn-group" id="toggle_sidemenu_r">
        <button type="button"> <span class="glyphicons glyphicons-parents"></span> </button>
      </div>
    </div>
  </div>
</header>
<!-- End: Header --> 
<!-- Start: Main -->
<div id="main">
<!-- Start: Sidebar -->
<aside id="sidebar_left">
  <div class="user-info">
    <div class="media"> <a class="pull-left" href="#">
      <div class="media-object border border-purple br64 bw2 p2"> <img class="br64" src="<?= Yii::getAlias('@web/fusion/')?>img/avatars/5.jpg" alt="..."> </div>
      </a>
      <div class="mobile-link"> <span class="glyphicons glyphicons-show_big_thumbnails"></span> </div>
      <div class="media-body">
        <h5 class="media-heading mt5 mbn fw700 cursor">
            <?php
                if (Yii::$app->user->isGuest) {
                    echo 'Guest';
                }
                else {
                    echo Yii::$app->user->identity->username;
                }
            ?>
            <span class="caret ml5"></span>
            </h5>
        <div class="media-links fs11"><a href="#">Menu</a>
        <i class="fa fa-circle text-muted fs3 p8 va-m"></i>
        <a href="<?= Url::to(['/site/logout']) ?>">Sign Out</a></div>
      </div>
    </div>
  </div>
  <div class="user-divider"></div>
  <div class="user-menu">
    <div class="row text-center mb15">
      <div class="col-xs-4"> <a href="dashboard.html"> <span class="glyphicons glyphicons-home fs22 text-blue2"></span>
        <h5 class="fs11">Home</h5>
        </a> </div>
      <div class="col-xs-4"> <a href="messages.html"> <span class="glyphicons glyphicons-inbox fs22 text-orange2"></span>
        <h5 class="fs11">Inbox</h5>
        </a> </div>
      <div class="col-xs-4"> <a href="tables.html"> <span class="glyphicons glyphicons-bell fs22 text-purple2"></span>
        <h5 class="fs11">Data</h5>
        </a> </div>
    </div>
    <div class="row text-center">
      <div class="col-xs-4 text-center"> <a href="timeline.html"> <span class="glyphicons glyphicons-imac fs22 text-grey3"></span>
        <h5 class="fs11">Views</h5>
        </a> </div>
      <div class="col-xs-4"> <a href="profile.html"> <span class="glyphicons glyphicons-settings fs22 text-green2"></span>
        <h5 class="fs11">Settings</h5>
        </a> </div>
      <div class="col-xs-4"> <a href="gallery.html"> <span class="glyphicons glyphicons-restart fs22 text-light6"></span>
        <h5 class="fs11">Images</h5>
        </a> </div>
    </div>
  </div>
  <div class="sidebar-menu">
    <ul class="nav sidebar-nav">
        <li> 
            <a href="#">
                <span class="glyphicons glyphicons-home"></span>
                <span class="sidebar-title">Dashboard</span>
            </a> 
        </li>
        <li> 
            <a class="accordion-toggle" href="#resources">
                <span class="glyphicons glyphicons-book_open"></span>
                <span class="sidebar-title">Laporan Ibadah</span>
                <span class="caret"></span>
            </a>
            <ul id="resources" class="nav sub-nav">
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-book"></span> 
                        Ibadah Raya 1 
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-book"></span> 
                        Ibadah Raya 2 
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-book"></span> 
                        Ibadah Raya 3 
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-book"></span> 
                        Ibadah Raya 4
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-book"></span> 
                        Ibadah Raya 5
                    </a>
                </li>
            </ul>
        </li>
        <li> 
            <a class="accordion-toggle" href="#resources">
                <span class="glyphicons glyphicons-settings"></span>
                <span class="sidebar-title">Pengaturan Data</span>
                <span class="caret"></span>
            </a>
            <ul id="resources" class="nav sub-nav">
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-vcard"></span> 
                        Data Anak 
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-user"></span> 
                        Data Peltu
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-magic"></span> 
                        Data Ibadah Raya
                    </a>
                </li>
                <li>
                    <a class="ajax-disable" href="#">
                        <span class="glyphicons glyphicons-globe"></span> 
                        Data Gedung / Lokasi
                    </a>
                </li>
            </ul>
        </li>
    </ul>
  </div>
</aside>
<!-- End: Sidebar -->

    <section id="content_wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <div id="content">
          <?= $content ?>
        </div>
    </section>


</div>
<!-- End: Main --> 


<!-- Google Map API --> 
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>  -->

<!-- jQuery --> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>vendor/jquery/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script> <!-- Bootstrap --> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>vendor/bootstrap/js/bootstrap.min.js"></script> 

<!-- Page Plugins --> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>vendor/plugins/ladda/ladda.min.js"></script> 

<!-- Theme Javascript --> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>js/utility/spin.min.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>js/utility/underscore-min.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>js/main.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>js/ajax.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>js/custom.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function () {
      
     "use strict";

     // Init Theme Core       
     Core.init();

     // Enable Ajax Loading       
     Ajax.init();
     
    
    // Init Ladda Plugin on buttons
    Ladda.bind( '.ladda-button', { timeout: 2000 } );

    // Bind progress buttons and simulate loading progress. Note: Button still requires ".ladda-button" class.
    Ladda.bind( '.progress-button', {
        callback: function( instance ) {
            var progress = 0;
            var interval = setInterval( function() {
                progress = Math.min( progress + Math.random() * 0.1, 1 );
                instance.setProgress( progress );

                if( progress === 1 ) {
                    instance.stop();
                    clearInterval( interval );
                }
            }, 200 );
        }
    });
        
});
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

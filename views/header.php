<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=(isset($this->title)) ? $this->title : ''; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL.'public/css/bootstrap.min.css'?>" />
    <link rel="stylesheet" href="<?php echo URL.'public/css/font-awesome.min.css'?>" />
    <link rel="stylesheet" href="<?php echo URL.'public/css/dataTables.bootstrap.css'?>" />
    <link rel="stylesheet" href="<?php echo URL.'public/css/style.css'?>" />
  </head>
  <body>
  <div class="container-fluid">
      <div class="row">
          <!-- Top Navbar -->
          <nav class="navbar navbar-default navbar-fixed-top t-navbar-header">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed t-navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand t-navbar-brand" href="<?=URL?>"><img src="<?=URL?>public/images/logo.png" alt="logo" class="img-responsive"></a>
                  </div>
                  <div class="collapse navbar-collapse t-no-border" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav t-nav-navbar">
                          <li><a href="<?=URL?>"><strong>TEKKOD</strong></a></li>
                          <li><a href="<?=URL?>category" data-toggle="tooltip" data-placement="bottom" title="Kategori"><i class="glyphicon glyphicon-th"></i></a></li>
                          <li><a href="<?=URL?>slider" data-toggle="tooltip" data-placement="bottom" title="Slider"><i class="fa fa-sliders"></i></a></li>
                          <li><a href="<?=URL?>information" data-toggle="tooltip" data-placement="bottom" title="Bilgi Sayfaları"><i class="fa fa-file"></i></a></li>
                          <li><a href="<?=URL?>news" data-toggle="tooltip" data-placement="bottom" title="Haberler"><i class="fa fa-newspaper-o"></i></a></li>
                          <li><a href="<?=URL?>announcement" data-toggle="tooltip" data-placement="bottom" title="Duyurular"><i class="fa fa-bullhorn"></i></a></li>
                          <li><a href="<?=URL?>comments" data-toggle="tooltip" data-placement="bottom" title="Yorumlar"><i class="fa fa-comments"></i></a></li>
                          <li><a href="<?=URL?>picture" data-toggle="tooltip" data-placement="bottom" title="Media"><i class="fa fa-medium"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Sayfa"><i class="fa fa-file-o"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Ziyaretçi Defteri"><i class="glyphicon glyphicon-book"></i></a></li>
                          <li><a href="<?=URL?>activities" data-toggle="tooltip" data-placement="bottom" title="Etkinlikler"><i class="fa fa-briefcase"></i></a></li>
                          <li><a href="<?=URL?>persons" data-toggle="tooltip" data-placement="bottom" title="Kişiler"><i class="fa fa-users"></i></a></li>
                          <li><a href="<?=URL?>career" data-toggle="tooltip" data-placement="bottom" title="İnsan Kaynakları"><i class="glyphicon glyphicon-tasks"></i></a></li>
                          <li><a href="<?=URL?>imagegallery" data-toggle="tooltip" data-placement="bottom" title="Foto Galeri"><i class="fa fa-picture-o"></i></a></li>
                          <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="İşlemler"><i class="fa fa-terminal"></i></a></li>
                          <li><a href="<?=URL?>social" data-toggle="tooltip" data-placement="bottom" title="Sosyal Medya"><i class="fa fa-share"></i></a></li>
                          <li><a href="<?=URL?>mail" data-toggle="tooltip" data-placement="bottom" title="Mail Kutusu"><i class="fa fa-envelope-o"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right t-nav-navbar">
                          <li class="dropdown">
                              <a href="#" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                              <div class="dropdown-menu">
                                  <form id="formSearch" action="<?=URL?>search" method="get">
                                      <input id="search-bar" type="text" required class="form-control" name="q" />
                                      <label for="search-bar" id="search-bar-label">
									    <span id="search-placeholder">
									      <i class="fa fa-search"></i>
									      <span id="placeholder-text">Arama</span>
									    </span>
                                      </label>
                                      <div id="close-btn">
                                          <i class="fa fa-times-circle"></i>
                                      </div>
                                  </form>
                              </div>
                          </li>
                          <li><a href="<?=URL?>login/logout"><i class="fa fa-times"></i></a></li>
                          <li><a href="#"><i class="fa fa-user-md"></i></a></li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div>
          </nav>

          <!-- Alert XS Ekranlarda Uyarı Verme Başlangıç -->

          <div class="alert alert-danger" id="alert">
              <a href="#" data-dismiss="alert" aria-label="close" class="close">x</a>
              <strong>Hata !</strong> Bu Çözünürlülük, Sistem İçin Uygun Değildir. Tarayıcı'nın Boyutunu Artırınız.
          </div>
          <!-- Alert XS Ekranlarda Uyarı Verme Bitiş -->
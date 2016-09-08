<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title> <?=(isset($this->title)) ? $this->title : ''; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css" />
    <meta http-equiv="refresh" content="2;url=<?= URL ?>">
    <style>
        body{background: #e4b9b9}
        *{border-radius: 0px !important;border: 0px !important;font-family: 'Open Sans', sans-serif}
    </style>
  </head>
  <body>
    <div class="text-center">
        <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Dikkat!</strong> Hata Oluştu. Lütfen En Son Yapılan İşlemi Gözden Geçiriniz.
        </div>
        <a href="<?=URL?>" class="btn btn-danger btn-lg">Ana Sayfa</a>
    </div>
  </body>
</html>
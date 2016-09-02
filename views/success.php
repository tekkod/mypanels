<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?=(isset($this->title)) ? $this->title : ''; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.min.css" />
    <style>
        body{background: #4cae4c}
        *{border-radius: 0px !important;border: 0px !important;font-family: 'Open Sans', sans-serif}
    </style>
</head>
<body>
<div class="text-center">
    <div class="alert alert-success alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Tebrikler!</strong> İşleminiz Başarıyla Gerçekleştirildi.
    </div>
    <a href="<?=URL?>" class="btn btn-success btn-lg">Ana Sayfa</a>
</div>
</body>
</html>
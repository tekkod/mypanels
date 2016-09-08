<!-- Explorer -->
<div class="container t-top hidden-xs ">
    <div class="row t-explorer-header">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5 class="text-center"><?=$this->title ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 t-rgba-3 t-sol">
            <ul class="t-navbar-link">
                <li><a href="<?= URL ?>slider">Slider</a></li>
                <li><a href="<?= URL ?>parallax">Parallax</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= URL ?>slider/create">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtQuestionName">Slider Adı</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtQuestionName" name="txtQuestionName" placeholder="Slider Adı" class="form-control input-md" type="text" required="">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtQuestion">Slider</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtQuestion" name="txtQuestion" class="form-control input-md" type="file" required="">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="button1id">İşlemler</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><span class="fa fa-plus"></span> Kaydet</button>
                            <a href="<?= URL ?>slider/getlist " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
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
                <li><a href="<?= URL ?>information">Bilgi Sayfası Ekle</a></li>
                <li><a href="<?= URL ?>information/getlist">Bilgi Sayfası Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag">
            <form class="form-horizontal" method="post" action="<?= URL ?>information/editSave/<?php echo $this->information[0]['information_id']; ?>">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtSection">Bilgi Sayfası Adı</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtSection" value="<?php echo $this->information[0]['name']; ?>" name="txtSection" type="text" placeholder="Bilgi Sayfası Adı" class="form-control input-md" required="">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Textarea input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">Bilgi Sayfası İçeriği</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <textarea id="txtSchool" name="txtSchool" type="text" placeholder="İçerik" cols="30" rows="10" required=""><?php echo $this->information[0]['detay']; ?></textarea>
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3"></label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><i class="fa fa-pencil"></i> Güncelle</button>
                            <a href="<?=URL?>information/getlist" class="btn btn-danger">Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- Explorer -->
<div class="container t-top hidden-xs ">
    <div class="row t-explorer-header">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5 class="text-center"><?=$this->title ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 t-rgba-3 t-sol" style="height: 450px">
            <ul class="t-navbar-link">
                <li><a href="<?= URL ?>persons">Kişi Ekle</a></li>
                <li><a href="<?= URL ?>persons/getlist">Kişi Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="height: 450px">
            <form class="form-horizontal" method="post" action="<?=URL?>persons/create">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtFullname">Ad Soyad</label>
                        <div class="col-md-10">
                            <input id="txtFullname" name="txtFullname" type="text" placeholder="Ad Soyad" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtCompany">Şirket</label>
                        <div class="col-md-10">
                            <input id="txtCompany" name="txtCompany" type="text" placeholder="Şirket" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtEmail">E-Mail</label>
                        <div class="col-md-10">
                            <input id="txtEmail" name="txtEmail" type="text" placeholder="E-Mail" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtPhone">Telefon</label>
                        <div class="col-md-10">
                            <input id="txtPhone" name="txtPhone" type="text" placeholder="Telefon" class="form-control input-md"  data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtAdress">Adres</label>
                        <div class="col-md-10">
                            <input id="txtAdress" name="txtAdress" type="text" placeholder="Adres" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtOther">Diğer</label>
                        <div class="col-md-10">
                            <input id="txtOther" name="txtOther" type="text" placeholder="Diğer" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">İşlemler</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><span class="fa fa-plus"></span> Kaydet</button>
                            <a href="<?= URL ?>activities/getlist " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>









<div class="container-fluid">
  <form class="form-horizontal" method="post" action="<?php echo URL;?>persons/create">
    <fieldset>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtFullname">Ad Soyad</label>
        <div class="col-md-10">
          <input id="txtFullname" name="txtFullname" type="text" placeholder="Ad Soyad" class="form-control input-md">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtCompany">Şirket</label>
        <div class="col-md-10">
          <input id="txtCompany" name="txtCompany" type="text" placeholder="Şirket" class="form-control input-md">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtEmail">E-Mail</label>
        <div class="col-md-10">
          <input id="txtEmail" name="txtEmail" type="text" placeholder="E-Mail" class="form-control input-md">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtPhone">Telefon</label>
        <div class="col-md-10">
          <input id="txtPhone" name="txtPhone" type="text" placeholder="Telefon" class="form-control input-md"  data-inputmask='"mask": "(999) 999-9999"' data-mask>
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtAdress">Adres</label>
        <div class="col-md-10">
          <input id="txtAdress" name="txtAdress" type="text" placeholder="Adres" class="form-control input-md">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtOther">Diğer</label>
        <div class="col-md-10">
          <input id="txtOther" name="txtOther" type="text" placeholder="Diğer" class="form-control input-md">
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-2"></label>
        <div class="col-md-10">
          <button id="btnSave" class="btn btn-success">Kaydet</button>
          <a href="<?php echo URL.'persons/getlist'; ?> " class="btn btn-danger">Vazgeç</a>
        </div>
      </div>
    </fieldset>
  </form>
</div>
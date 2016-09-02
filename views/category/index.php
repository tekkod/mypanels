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
        <li><a href="category">Kategori Ekle</a></li>
        <li><a href="subcategory">Alt Kategori Ekle</a></li>
      </ul>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag">
      <form class="form-horizontal" method="post" action="<?= URL ?>category/create">
        <fieldset>
          <!-- Form Name -->
          <legend><?=$this->title ?></legend>
          <!-- Text input-->
          <div class="form-group">
            <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtCategory">Kategori Adı</label>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
              <input id="txtCategory" name="txtCategory" type="text" placeholder="Kategori Adı" class="form-control input-md" required>
              <span class="help-block">Zorunlu Alan</span>
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">Kategori Durumu</label>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
              <label for="txtOnayRadios1"><input id="txtOnayRadios1" name="txtOnayRadios" type="radio" value="1" required />Aktif</label>
              <label for="txtOnayRadios0"><input id="txtOnayRadios0" name="txtOnayRadios" type="radio" value="0" required />Pasif</label>
              <span class="help-block">Zorunlu Alan</span>
            </div>
          </div>
          <!-- Button (Double) -->
          <div class="form-group">
            <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="button1id">İşlemler</label>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                <button id="btnSave" class="btn btn-success"><span class="fa fa-plus"></span> Kaydet</button>
                <a href="<?php echo URL.'category/getlist'; ?> " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
  </div>
</div>
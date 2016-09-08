<!-- Explorer -->
<div class="container t-top hidden-xs ">
    <div class="row t-explorer-header">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5 class="text-center"><?=$this->title ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 t-rgba-3 t-sol" style="height: 450px">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="height: 450px">
            <form class="form-horizontal" method="post" action="<?=URL?>picture/upload" enctype="multipart/form-data">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3">Görsel Seçiniz</label>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                            <input id="txtImage" name="txtImage[]" type="file" multiple class="form-control input-md">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            <button id="btnSave" class="btn btn-success btntxtImage">Yükle</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>










<!--
<div class="container-fluid">
  <fieldset>
    <div class="row">
      <form class="form-horizontal" method="post" action="<?php echo URL.'picture/create' ?>" enctype="multipart/form-data">
        <div class="col-md-12">
          <div class="col-md-11">
            <input id="txtImage" name="txtImage[]" type="file" multiple="multiple" placeholder="Kategori Resmi" class="form-control input-md">
          </div>
          <div class="col-md-1">
            <button id="btnSave" class="btn btn-success btntxtImage">Yükle</button>
          </div>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3">
          <ul class="list-group t-list-group" id="directoryfotolist">
            <?php
              foreach($this->imageslist as $key => $value) {
                echo '<li class="list-group-item">'.'<img draggable="true" src="'.$value.'" width="100" height="100" />'.'</li>';
              }
            ?>
          </ul>
        </div>
        <div class="col-md-8">
          <ul class="list-group t-category-list-group">
          <?php
            foreach($this->category as $key => $value) {
              //echo '<option value="'. $value["category_id"] .'">'. $value["name"] .'</option>';
              echo '<li class="list-group-item" data-categoryid="'.$value["category_id"].'">'.$value["name"].'</li>';
            }
          ?>
          </ul>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </fieldset>
</div>
-->
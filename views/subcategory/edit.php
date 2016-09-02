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
            <form class="form-horizontal" method="post" action="<?= URL ?>subcategory/editSave/<?= $this->subcategory[0]['subcategory_id']; ?>">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtCategory">Kategori Adı</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <select id="txtCategory" name="txtCategory" class="form-control" required="">
                                <?php
                                foreach($this->CategoryList as $key => $value) {
                                    echo "<option value='".$value['category_id']."'>".$value['name']."</option>";
                                }
                                ?>
                            </select>
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtSubCategory">Alt Kategori Adı</label>
                        <div class="col-md-10">
                            <input id="txtSubCategory" value="<?php echo $this->subcategory[0]['name']; ?>" name="txtSubCategory" type="text" placeholder="Alt Kategori Adı" class="form-control input-md" required="">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">Kategori Durumu</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <label for="txtOnayRadios1"><input id="txtOnayRadios1" name="txtOnayRadios" type="radio" value="1" required <?php if ($this->subcategory[0]['status']==1){ echo 'checked'; } ?> />Aktif</label>
                            <label for="txtOnayRadios0"><input id="txtOnayRadios0" name="txtOnayRadios" type="radio" value="0" required <?php if ($this->subcategory[0]['status']==0){ echo 'checked'; } ?> />Pasif</label>
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="button1id">İşlemler</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><span class="fa fa-pencil"></span> Güncelle</button>
                            <a href="<?=URL.'subcategory/getlist'; ?> " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
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
                <li><a href="<?= URL ?>activities">Etkinlik Ekle</a></li>
                <li><a href="<?= URL ?>activities/getlist">Etkinlik Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="height: 450px">
            <form class="form-horizontal" method="post" action="<?=URL?>activities/create">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtTitle">Başlık</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtTitle" name="txtTitle" type="text" placeholder="Başlık" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtLocation">Konum</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtLocation" name="txtLocation" type="text" placeholder="Konum" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtCategory">Kategori</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <select name="txtCategory" id="txtCategory" class="form-control input-md">
                                <?php
                                foreach($this->CategoryList as $key => $value) {
                                    echo '<option value="'.$value['category_id'].'">'.$value['name'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- Date range -->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtStart">Başlangıç - Bitiş</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="txtStart" class="form-control pull-right" id="reservation">
                            </div><!-- /.input group -->
                        </div>
                    </div>
                    <!-- Textarea input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtDescription">Açıklama</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <textarea id="txtDescription" name="txtDescription" type="text" placeholder="Açıklama"></textarea>
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
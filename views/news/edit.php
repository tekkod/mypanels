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
                <li><a href="<?= URL ?>news">Haber Ekle</a></li>
                <li><a href="<?= URL ?>news/getlist">Haber Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="overflow-y: scroll;height: 450px">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>news/editSave/<?php echo $this->news[0]['news_id']; ?>">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Select input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtCategory">Haber Kategorisi</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <select id="txtCategory" name="txtCategory" class="form-control">
                                <?php
                                foreach($this->category as $key => $value) {
                                    echo '<option value="'. $value["category_id"] .'">'. $value["name"] .'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- Select input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtNewstype">Haber Türü</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <select id="txtNewstype" name="txtNewstype" class="form-control">
                                <?php
                                foreach($this->newstype as $key => $value) {
                                    echo '<option value="'. $value["define_id"] .'">'. $value["define"] .'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- Select input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtSource">Haber Kaynağı</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <select id="txtSource" name="txtSource" class="form-control">
                                <?php
                                foreach($this->source as $key => $value) {
                                    echo '<option value="'. $value["define_id"] .'">'. $value["define"] .'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtNews">Haber Başlık</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtNews" name="txtNews" type="text" placeholder="Haber Başlık" class="form-control input-md" value="<?php echo $this->news[0]['news']; ?>">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtNewsOrder">Haber Sırası</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtNewsOrder" name="txtNewsOrder" type="text" placeholder="Haber Sırası" class="form-control input-md" value="<?php echo $this->news[0]['order']; ?>">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtNewsImage">Haber Resmi</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtNewsImage" name="txtNewsImage" type="file" placeholder="Haber Resmi" class="form-control input-md">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtNewsDesc">Haber İçerik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <textarea id="txtNewsDesc" name="txtNewsDesc" type="text" placeholder="İçerik" cols="30" rows="10"><?=$this->news[0]['description']; ?></textarea>
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">Haber Durumu</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <label for="txtOnayRadios1"><input id="txtOnayRadios1" name="txtOnayRadios" type="radio" value="1" required <?php if ($this->news[0]['status']==1){ echo 'checked'; } ?>/>Aktif</label>
                            <label for="txtOnayRadios0"><input id="txtOnayRadios0" name="txtOnayRadios" type="radio" value="0" required <?php if ($this->news[0]['status']==1){ echo 'checked'; } ?>/>Pasif</label>
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">İşlemler</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><span class="fa fa-pencil"></span> Güncelle</button>
                            <a href="<?= URL ?>news/getlist " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
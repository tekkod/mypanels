<!-- Explorer -->
<div class="container t-top hidden-xs ">
    <div class="row t-explorer-header">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5 class="text-center"><?=$this->title ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 t-rgba-3 t-sol" style="height: 450px">
            <ul class="nav nav-pills t-navbar-link">
                <li class="active"><a href="#tab1primary" data-toggle="tab">Site</a></li>
                <li><a href="#tab2primary" data-toggle="tab">Google</a></li>
                <li><a href="#tab5primary" data-toggle="tab">Yandex</a></li>
                <li><a href="#tab3primary" data-toggle="tab">Firma</a></li>
                <li><a href="#tab4primary" data-toggle="tab">Mail</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="overflow-y: scroll;height: 450px">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=URL?>settings/editSave/<?php echo $this->settings[0]['settings_id']; ?>">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <div class="">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1primary">
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtTitle">Site Başlığı</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtTitle" name="txtTitle" class="form-control input-md" type="text" placeholder="Site Başlığı" value="<?php echo $this->settings[0]['title']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtDescription">Açıklama</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtDescription" name="txtDescription" type="text" placeholder="Açıklama" class="form-control input-md" value="<?php echo $this->settings[0]['description']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtKeywords">Anahtar Kelimeler</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtKeywords" name="txtKeywords" type="text" placeholder="Anahtar Kelimeler" class="form-control input-md" value="<?php echo $this->settings[0]['keyword']; ?>">
                                            <span class="help-block" style="width:100%;"><b style="font-style:normal">Kelimler Arasına (,) Koyarak Ayrıştırma Yapınız</b></span>
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtThemes">Tema(Arayüz) Adı</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtThemes" name="txtThemes" type="text" placeholder="Tema Adı" class="form-control input-md" value="<?php echo $this->settings[0]['theme']; ?>">
                                            <span class="help-block">Zorunlu Alan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2primary">
                                    <!-- Textarea Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtGoogleAnalytics">Google Analytics</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                          <textarea name="txtGoogleAnalytics" id="txtGoogleAnalytics" placeholder="Google Analytics Kodunuz" class="form-control input-md" cols="30" rows="5">
                            <?php echo $this->settings[0]['googleanalytics']; ?>
                          </textarea>
                                        </div>
                                    </div>
                                    <!-- Textarea Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtGoogleMaps">Google Maps</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                          <textarea name="txtGoogleMaps" id="txtGoogleMaps" placeholder="Google Maps Kodunuz" class="form-control input-md" cols="30" rows="5">
                            <?php echo $this->settings[0]['googlemaps']; ?>
                          </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3primary">
                                    <!-- File Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtFirmaLogo">Firma Logo</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtFirmaLogo" name="txtFirmaLogo" class="form-control input-md" type="file" placeholder="Firma Logo" value="<?php echo $this->settings[0]['logo']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtFirmaName">Firma Adı</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtFirmaName" name="txtFirmaName" class="form-control input-md" type="text" placeholder="Firma Adı" value="<?php echo $this->settings[0]['name']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtFirmaPhone">Firma Telefon</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtFirmaPhone" name="txtFirmaPhone" class="form-control input-md" type="text" placeholder="Firma Telefon" value="<?php echo $this->settings[0]['phone']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtFirmaFax">Firma Fax</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtFirmaFax" name="txtFirmaFax" class="form-control input-md" type="text" placeholder="Firma Fax" value="<?php echo $this->settings[0]['fax']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtFirmaEMail">Firma E-Mail</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtFirmaEMail" name="txtFirmaEMail" class="form-control input-md" type="text" placeholder="Firma E-Mail" value="<?php echo $this->settings[0]['email']; ?>">
                                        </div>
                                    </div>
                                    <!-- Textarea Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtFirmaAdress">Firma Adres</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <textarea name="txtFirmaAdress" id="txtFirmaAdress" placeholder="Firma Adresiniz" class="form-control input-md" cols="30" rows="5"> <?php echo $this->settings[0]['adress']; ?> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4primary">
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtSiteEMailAdress">Site E-Mail Adresi</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtSiteEMailAdress" name="txtSiteEMailAdress" class="form-control input-md" type="text" placeholder="Site E-Mail Adresi" value="<?php echo $this->settings[0]['siteemail']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtSiteEMailPassword">Site E-Mail Şifre</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtSiteEMailPassword" name="txtSiteEMailPassword" class="form-control input-md" type="text" placeholder="Site E-Mail Şifre" value="<?php echo $this->settings[0]['siteemailpassword']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtSiteEMailHost">Site E-Mail Sunucu</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtSiteEMailHost" name="txtSiteEMailHost" class="form-control input-md" type="text" placeholder="Site E-Mail Sunucu" value="<?php echo $this->settings[0]['siteemailhost']; ?>">
                                        </div>
                                    </div>
                                    <!-- Text Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtSiteEMailPort">Site E-Mail Port</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <input id="txtSiteEMailPort" name="txtSiteEMailPort" class="form-control input-md" type="text" placeholder="Site E-Mail Port" value="<?php echo $this->settings[0]['siteemailport']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5primary">
                                    <!-- Textarea Input -->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtYandexMetrica">Yandex Metrica</label>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                            <textarea name="txtYandexMetrica" id="txtYandexMetrica" placeholder="Yandex Metrica Kodunuz" class="form-control input-md" cols="30" rows="5"><?php echo $this->settings[0]['yandexmetrica']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="button1id">İşlemler</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><span class="fa fa-pencil"></span> Güncelle</button>
                            <a href="<?= URL ?>settings/getlist " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
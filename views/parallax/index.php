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
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo URL?>parallax/create" style="overflow-y:scroll;height:450px;padding:20px;">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtparallaxname">Parallax Adı</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtparallaxname" name="txtparallaxname" placeholder="Parallax Adı" class="form-control input-md" type="text" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtinitialleft">Sol Başlangıç</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtinitialleft" name="txtinitialleft" placeholder="Sol Başlangıç" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-initial-left</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtinitialtop">Üst Başlangıç</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtinitialtop" name="txtinitialtop" placeholder="Üst Başlangıç" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-initial-top</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtfinalleft">Sol Bitiş</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtfinalleft" name="txtfinalleft" placeholder="Sol Bitiş" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-final-left</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtfinaltop">Üst Bitiş</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtfinaltop" name="txtfinaltop" placeholder="Üst Bitiş" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-final-top</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtduration">Süre</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtduration" name="txtduration" placeholder="Süre" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-duration</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtfadestart">Solma Başlangıcı</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtfadestart" name="txtfadestart" placeholder="Solma Başlangıcı" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-fade-start</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtcontinuousleft">Sol Süreklilik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtcontinuousleft" name="txtcontinuousleft" placeholder="Sol Süreklilik" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-continuous-left</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtcontinuoustop">Üst Süreklilik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtcontinuoustop" name="txtcontinuoustop" placeholder="Üst Süreklilik" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-continuous-top</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtcontinuouseasing">Animasyon Süreklilik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtcontinuouseasing" name="txtcontinuouseasing" placeholder="Animasyon" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-continuous-easing</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtcontinuousduration">Süre</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtcontinuousduration" name="txtcontinuousduration" placeholder="Süre" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-continuous-duration</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtrotate">Döndürme</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <select name="txtrotate" id="txtrotate" class="form-control input-md" required="">
                                <option value="select">Seçiniz</option>
                                <option value="true">Döndürme Var</option>
                                <option value="false">Döndürme Yok</option>
                            </select>
                            <span class="help-block">data-rotate</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtdurationrotate">Döndürme Süresi</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtdurationrotate" name="txtdurationrotate" placeholder="Döndürme Süresi" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-duration-rotate</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtdelay">Bekleme Süresi</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtdelay" name="txtdelay" placeholder="Bekleme Süresi" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-delay</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtbackroundimage">Arkaplan Resmi</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtbackroundimage" name="txtbackroundimage" class="form-control input-md" type="file" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtwidth">Genişlik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtwidth" name="txtwidth" placeholder="Genişlik" class="form-control input-md" type="number" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtheight">Yükseklik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtheight" name="txtheight" placeholder="Yükseklik" class="form-control input-md" type="number" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtexitleft">Sol Çıkış</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtexitleft" name="txtexitleft" placeholder="Sol Çıkış" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-exit-left</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtexittop">Üst Çıkış</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtexittop" name="txtexittop" placeholder="Üst Çıkış" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-exit-top</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtexitduration">Animasyon Çıkış</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtexitduration" name="txtexitduration" placeholder="Animasyon Çıkış" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-exit-duration</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtexitdelay">Bekletme Çıkış</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtexitdelay" name="txtexitdelay" placeholder="Bekletme Çıkış" class="form-control input-md" type="text" required="">
                            <span class="help-block">data-exit-delay</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3" for="txtbutton"></label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="txtbutton" class="btn btn-success"><i class="fa fa-plus"></i> Kaydet</button>
                            <a href="<?= URL ?>parallax/getlist" class="btn btn-danger"><i class="fa fa-trash"></i> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
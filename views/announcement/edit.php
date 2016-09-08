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
                <li><a href="<?= URL ?>announcement">Duyuru Ekle</a></li>
                <li><a href="<?= URL ?>announcement/getlist">Duyuru Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="overflow-y: scroll;height: 450px">
            <form class="form-horizontal" method="post" action="<?php echo URL; ?>announcement/editSave/<?php echo $this->announcement[0]['announcement_id']; ?>">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtAnnouncement">Duyuru Adı</label>
                        <div class="col-md-10">
                            <input id="txtAnnouncement" name="txtAnnouncement" type="text" placeholder="Duyuru Adı" class="form-control input-md" required="" value="<?php echo $this->announcement[0]['announcement']; ?>">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtAnnouncementOrder">Duyuru Sırası</label>
                        <div class="col-md-10">
                            <input id="txtAnnouncementOrder" name="txtAnnouncementOrder" type="text" placeholder="Duyuru Sırası" class="form-control input-md" required="" value="<?php echo $this->announcement[0]['order']; ?>">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtAnnouncementImage">Duyuru Resmi</label>
                        <div class="col-md-10">
                            <input id="txtAnnouncementImage" name="txtAnnouncementImage" type="file" placeholder="Duyuru Resmi" class="form-control input-md" required="">
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Textarea input-->
                    <div class="form-group">
                        <label class="col-md-2" for="txtAnnouncementDesc">Duyuru Açıklama</label>
                        <div class="col-md-10">
                            <textarea id="txtAnnouncementDesc" name="txtAnnouncementDesc" type="text" placeholder="İçerik" class="ckeditor" cols="30" rows="10" required=""><?php echo $this->announcement[0]['description']; ?></textarea>
                            <span class="help-block">Zorunlu Alan</span>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col lg-2 col-md-2 col-sm-3 col-xs-3">İşlemler</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSave" class="btn btn-success"><span class="fa fa-pencil"></span> Güncelle</button>
                            <a href="<?= URL ?>announcement/getlist " class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span> Vazgeç</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
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
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="height: 450px">
            <form class="form-horizontal" method="post" action="<?php echo URL;?>mail/send" enctype="multipart/form-data">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtalici">Alıcı</label>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                            <input id="txtalici" name="txtalici" type="text" placeholder="Gönderilecek Adres" class="form-control input-md" required="">
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            <a class="btn btn-default" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtkonu">Konu</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtkonu" name="txtkonu" type="text" placeholder="Konu" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtcc">CC</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtcc" name="txtcc" type="text" placeholder="CC" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtbcc">BCC</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtbcc" name="txtbcc" type="text" placeholder="BCC" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txtaddattachment">Dosya Ekleyin</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <input id="txtaddattachment" name="txtaddattachment[]" type="file" multiple="multiple" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Textarea input-->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3" for="txticerik">İçerik</label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <textarea id="txticerik" name="txticerik" placeholder="İçerik" class="form-control input-md" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-3 col-xs-3"></label>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                            <button id="btnSend" class="btn btn-primary">Gönder</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Kişi Listesi</h4>
            </div>
            <div class="modal-body" id="personlist">
                <?php
                echo "<ul class='list-group'>";
                foreach($this->personslist as $key => $value) {
                    echo '<li class="list-group-item" data-email="'.$value['email'].'">'.$value['fullname'].'</li>';
                }
                echo "</ul>";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-plus"></i> Kaydet ve Kapat</button>
            </div>
        </div>
    </div>
</div>
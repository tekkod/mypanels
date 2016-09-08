<!-- Explorer -->
<div class="container t-top hidden-xs ">
    <div class="row t-explorer-header">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h5 class="text-center"><?=$_GET["q"].' - '.$this->title ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 t-rgba-3 t-sol">
            <ul class="t-navbar-link">
                <li><a href="<?= URL ?>">Ana Sayfa</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag">
            <fieldset>
                <?= "Merhaba İşte Sonuç : ".$this->result?>
                <!-- Form Name -->
                <div class="table-responsive">
                    <table id="table" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Kod</th>
                            <th>Kategori Adı</th>
                            <th>Onay Durumu (0 = Red / 1 = Onay)</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kod</td>
                                <td>Kategori Adı</td>
                                <td>Onay Durumu (0 = Red / 1 = Onay)</td>
                                <td>Düzenle</td>
                                <td>Sil</td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Kod</th>
                            <th>Kategori Adı</th>
                            <th>Onay Durumu (0 = Red / 1 = Onay)</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>
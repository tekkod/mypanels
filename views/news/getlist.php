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
                <li><a href="<?=URL?>news">Haber Ekle</a></li>
                <li><a href="<?=URL?>news/getlist">Haber Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag">
            <div class="table-responsive">
                <table id="table" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Resim</th>
                            <th>Haber Adı</th>
                            <th>Haber Sırası</th>
                            <th>Haber Türü</th>
                            <th>Onay Durumu</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($this->news as $key => $value) {
                                echo '<tr>';
                                echo '<td><img src="'.URL.$value['image'].'" width="32" height="32" alt="'.$value['image'].'" alt='.$value["news"].' class="img-responsive"></td>';
                                echo '<td>' . $value['news'] . '</td>';
                                echo '<td>' . $value['order'] . '</td>';
                                echo '<td>' . $value['define'] . '</td>';
                                if ($value['status']=="1") { echo '<td>Onaylandı</td>'; }
                                if ($value['status']=="0") { echo '<td>Rededildi</td>'; }
                                echo '<td class="col-md-1"><a href="'. URL . 'news/edit/' . $value['news_id'].'"><i class="fa fa-pencil fa-2x"></i></a></td>';
                                echo '<td class="col-md-1"><a class="delete" href="'. URL . 'news/delete/' . $value['news_id'].'"><i class="fa fa-trash fa-2x"></i></a></td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Resim</th>
                            <th>Haber Adı</th>
                            <th>Haber Sırası</th>
                            <th>Haber Türü</th>
                            <th>Onay Durumu</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
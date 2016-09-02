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
                    <li><a href="<?=URL?>category">Kategori Ekle</a></li>
                    <li><a href="<?=URL?>subcategory">Alt Kategori Ekle</a></li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag">
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
                        <?php
                        foreach($this->CategoryList as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['category_id'] . '</td>';
                            echo '<td>' . $value['name'] . '</td>';
                            if ($value['status']=="1") { echo '<td>Onaylandı. Durum Kodu : '.$value['status'].'</td>'; }
                            if ($value['status']=="0") { echo '<td>Onay Verilmedi. Durum Kodu : '.$value['status'].'</td>'; }
                            echo '<td class="col-md-1"><a href="'. URL . 'category/edit/' . $value['category_id'].'"><i class="fa fa-pencil fa-2x"></i></a></td>';
                            echo '<td class="col-md-1"><a class="delete" href="'. URL . 'category/delete/' . $value['category_id'].'"><i class="fa fa-trash fa-2x"></i></a></td>';
                            echo '</tr>';
                        }
                        ?>
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
            </div>
        </div>
    </div>
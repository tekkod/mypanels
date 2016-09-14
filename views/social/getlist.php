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
                <li><a href="<?=URL?>social">Sosyal Medya Ekle</a></li>
                <li><a href="<?=URL?>social/getlist">Sosyal Medya Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="overflow-y: scroll;height: 450px">
            <div class="table-responsive">
                <table id="table" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sıra</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Google Plus</th>
                        <th>Youtube</th>
                        <th>Linkedin</th>
                        <th>İnstagram</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($this->social as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['social_id'] . '</td>';
                        echo '<td>' . $value['facebook'] . '</td>';
                        echo '<td>' . $value['twitter'] . '</td>';
                        echo '<td>' . $value['googleplus'] . '</td>';
                        echo '<td>' . $value['youtube'] . '</td>';
                        echo '<td>' . $value['linkedin'] . '</td>';
                        echo '<td>' . $value['instagram'] . '</td>';
                        echo '<td class="col-md-1"><a href="'. URL . 'social/edit/' . $value['social_id'].'"><i class="fa fa-pencil fa-2x"></i></a></td>';
                        echo '<td class="col-md-1"><a class="delete" href="'. URL . 'social/delete/' . $value['social_id'].'"><i class="fa fa-trash fa-2x"></i></a></td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Sıra</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Google Plus</th>
                        <th>Youtube</th>
                        <th>Linkedin</th>
                        <th>İnstagram</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
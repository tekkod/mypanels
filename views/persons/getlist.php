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
                <li><a href="<?= URL ?>persons/getlist">Kişi Listele</a></li>
            </ul>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9 t-rgba-f t-sag" style="height: 450px">
            <form class="form-horizontal" method="post" action="<?=URL?>persons/create">
                <fieldset>
                    <!-- Form Name -->
                    <legend><?=$this->title ?></legend>
                    <table id="table" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Kod</th>
                            <th>Ad Soyad</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        foreach($this->personsList as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['persons_id'] . '</td>';
                            echo '<td>' . $value['fullname'] . '</td>';
                            echo '<td class="col-md-1"><a href="'. URL . 'persons/edit/' . $value['persons_id'].'"><i class="fa fa-pencil fa-2x"></i></a></td>';
                            echo '<td class="col-md-1"><a class="delete" href="'. URL . 'persons/delete/' . $value['persons_id'].'"><i class="fa fa-trash fa-2x"></i></a></td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Kod</th>
                            <th>Ad Soyad</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</div>
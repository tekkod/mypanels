<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table id="table" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Kod</th>
              <th>Ad Soyad</th>
              <th>Düzenle</th>
              <th>Sil</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kod</th>
              <th>Ad Soyad</th>
              <th>Düzenle</th>
              <th>Sil</th>
            </tr>
          </tfoot>          
          <tbody>
            <?php
                foreach($this->personsList as $key => $value) {
                    echo '<tr>';
                      echo '<td>' . $value['persons_id'] . '</td>';
                      echo '<td>' . $value['fullname'] . '</td>';
                      echo '<td class="col-md-1"><a href="'. URL . 'persons/edit/' . $value['persons_id'].'"> <img src="'.URL."/public/images/edit.png".'" width=32 height=32 class="img-responsive center-block"></a></td>';
                      echo '<td class="col-md-1"><a class="delete" href="'. URL . 'persons/delete/' . $value['persons_id'].'"> <img src="'.URL."/public/images/delete.png".'" width=32 height=32 class="img-responsive center-block"></a></td>';
                    echo '</tr>';
                }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
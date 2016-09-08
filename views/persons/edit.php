<div class="container-fluid">
  <form class="form-horizontal" method="post" action="<?php echo URL; ?>persons/editSave/<?php echo $this->persons[0]['persons_id']; ?>">
    <fieldset>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtFullname">Ad Soyad</label>
        <div class="col-md-10">
          <input id="txtFullname" name="txtFullname" type="text" placeholder="Ad Soyad" class="form-control input-md" value="<?php echo $this->persons[0]['fullname']; ?>">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtCompany">Şirket</label>
        <div class="col-md-10">
          <input id="txtCompany" name="txtCompany" type="text" placeholder="Şirket" class="form-control input-md" value="<?php echo $this->persons[0]['company']; ?>">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtEmail">E-Mail</label>
        <div class="col-md-10">
          <input id="txtEmail" name="txtEmail" type="text" placeholder="E-Mail" class="form-control input-md" value="<?php echo $this->persons[0]['email']; ?>">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtPhone">Telefon</label>
        <div class="col-md-10">
          <input id="txtPhone" name="txtPhone" type="text" placeholder="Telefon" class="form-control input-md"  data-inputmask='"mask": "(999) 999-9999"' data-mask value="<?php echo $this->persons[0]['phone']; ?>">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtAdress">Adres</label>
        <div class="col-md-10">
          <input id="txtAdress" name="txtAdress" type="text" placeholder="Adres" class="form-control input-md" value="<?php echo $this->persons[0]['adress']; ?>">
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2" for="txtOther">Diğer</label>
        <div class="col-md-10">
          <input id="txtOther" name="txtOther" type="text" placeholder="Diğer" class="form-control input-md" value="<?php echo $this->persons[0]['other']; ?>">
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-2"></label>
        <div class="col-md-10">
          <button id="btnSave" class="btn btn-success">Kaydet</button>
          <a href="<?php echo URL.'persons/getlist'; ?> " class="btn btn-danger">Vazgeç</a>
        </div>
      </div>
    </fieldset>    
  </form>
</div>
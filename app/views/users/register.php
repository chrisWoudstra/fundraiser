<?php require APP_ROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body mt-5 custom-container">
        <h3 class="red text-center pb-2 caps">Create Account</h3>
          <form action="<?=URL_ROOT?>/users/register" method="post">
              <div class="form-group">
                  <label for="name">Name: <sup class="red">*</sup></label>
                  <input type="text" name="name" class="form-control form-control-lg custom-input <?=(!empty($data['name_err'])) ? 'is-invalid' : ''?>" value="<?=$data['name']?>">
                  <span class="invalid-feedback"><?=$data['name_err']?></span>
              </div>
              <div class="form-group">
                  <label for="email">Email: <sup class="red">*</sup></label>
                  <input type="email" name="email" class="form-control form-control-lg custom-input <?=(!empty($data['email_err'])) ? 'is-invalid' : ''?>" value="<?=$data['email']?>">
                  <span class="invalid-feedback"><?=$data['email_err']?></span>
              </div>
              <div class="form-group">
                  <label for="password">Password: <sup class="red">*</sup></label>
                  <input type="password" name="password" class="form-control form-control-lg custom-input <?=(!empty($data['password_err'])) ? 'is-invalid' : ''?>" value="<?=$data['password']?>">
                  <span class="invalid-feedback"><?=$data['password_err']?></span>
              </div>
              <div class="form-group">
                  <label for="confirm_password">Confirm Password: <sup class="red">*</sup></label>
                  <input type="password" name="confirm_password" class="form-control form-control-lg custom-input <?=(!empty($data['confirm_password_err'])) ? 'is-invalid' : ''?>" value="<?=$data['confirm_password']?>">
                  <span class="invalid-feedback"><?=$data['confirm_password_err']?></span>
              </div>

              <div class="row pt-3">
                  <div class="col">
                      <input type="submit" value="Register" class="btn btn-block custom-red-btn">
                  </div>
                  <div class="col">
                      <a href="<?=URL_ROOT?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body mt-5 custom-container">
                <?php flash('register_success'); ?>
                <h3 class="red text-center caps">Login</h3>
                <form action="<?=URL_ROOT?>/users/login" method="post">
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" class="form-control form-control-lg custom-input <?=(!empty($data['email_err'])) ? 'is-invalid' : ''?>" value="<?=$data['email']?>">
                        <span class="invalid-feedback"><?=$data['email_err']?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" class="form-control form-control-lg custom-input <?=(!empty($data['password_err'])) ? 'is-invalid' : ''?>" value="<?=$data['password']?>">
                        <span class="invalid-feedback"><?=$data['password_err']?></span>
                    </div>
                    <div class="row pt-3">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-block custom-red-btn">
                        </div>
                        <div class="col">
                            <a href="<?=URL_ROOT?>/users/register" class="btn btn-light btn-block">No account? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="col-md-8 offset-md-2">
        <div class="card card-body mt-5 custom-container">
            <?php flash('register_success'); ?>
            <h3 class="red text-center caps">Add Event</h3>
            <form action="<?=URL_ROOT?>/users/login" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" name="name" class="form-control form-control-lg custom-input <?=(!empty($data['name_err'])) ? 'is-invalid' : ''?>" value="<?=$data['name']?>">
                    <span class="invalid-feedback"><?=$data['name_err']?></span>
                </div>
                <div class="form-group">
                    <label for="foundation">Foundation: <sup>*</sup></label>
                    <input type="text" name="foundation" class="form-control form-control-lg custom-input <?=(!empty($data['foundation_err'])) ? 'is-invalid' : ''?>" value="<?=$data['foundation']?>">
                    <span class="invalid-feedback"><?=$data['foundation_err']?></span>
                </div>
                <div class="form-group">
                    <label for="name">Description: <sup>*</sup></label>
                    <textarea name="description" class="form-control form-control-lg custom-input <?=(!empty($data['name_err'])) ? 'is-invalid' : ''?>" cols="30" rows="5"><?=$data['body']?></textarea>
                    <span class="invalid-feedback"><?=$data['description_err']?></span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn custom-red-btn">Add</button>
                </div>
            </form>
        </div>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
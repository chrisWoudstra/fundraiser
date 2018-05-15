<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="col-md-8 offset-md-2">
        <div class="card card-body mt-5 custom-container">
            <h3 class="red text-center caps">Add Event</h3>
            <form action="<?=URL_ROOT?>/events/add" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup class="red">*</sup></label>
                    <input type="text" name="name" class="form-control form-control-lg custom-input <?=(!empty($data['name_err'])) ? 'is-invalid' : ''?>" value="<?=$data['name']?>">
                    <span class="invalid-feedback"><?=$data['name_err']?></span>
                </div>
                <div class="form-group">
                    <label for="foundation">Foundation: <sup class="red">*</sup></label>
                    <input type="text" name="foundation" class="form-control form-control-lg custom-input <?=(!empty($data['foundation_err'])) ? 'is-invalid' : ''?>" value="<?=$data['foundation']?>">
                    <span class="invalid-feedback"><?=$data['foundation_err']?></span>
                </div>
                <div class="form-group">
                    <label for="name">Description: <sup class="red">*</sup></label>
                    <textarea name="body" class="form-control form-control-lg custom-input <?=(!empty($data['body_err'])) ? 'is-invalid' : ''?>" cols="30" rows="5"><?=$data['body']?></textarea>
                    <span class="invalid-feedback"><?=$data['body_err']?></span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn custom-red-btn">Add</button>
                </div>
            </form>
        </div>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
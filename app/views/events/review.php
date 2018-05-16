<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="col-md-8 offset-md-2">
        <div class="card card-body mt-5 custom-container">
            <h3 class="red text-center caps">Add Review</h3>
            <form action="<?=URL_ROOT?>/events/review/<?=$data['event_id']?>" method="post">
                <div class="form-group">
                    <label for="rating">Rating (1-5): <sup class="red">*</sup></label>
                    <select name="rating" class="form-control form-control-lg custom-input <?=(!empty($data['rating_err'])) ? 'is-invalid' : ''?>">
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                    <span class="invalid-feedback"><?=$data['rating_err']?></span>
                </div>
                <div class="form-group">
                    <label for="review">Review: <sup class="red">*</sup></label>
                    <textarea name="review" class="form-control form-control-lg custom-input <?=(!empty($data['review_err'])) ? 'is-invalid' : ''?>" cols="30" rows="5"><?=$data['review']?></textarea>
                    <span class="invalid-feedback"><?=$data['review_err']?></span>
                </div>
                <input type="hidden" value="<?=$data['event_id']?>">
                <div class="text-center">
                    <button type="submit" class="btn custom-red-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
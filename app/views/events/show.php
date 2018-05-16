<?php require APP_ROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-8 offset-md-2">
        <div class="card card-body mb-3 custom-container">
            <h4 class="card-title red text-center"><?=$data['event']->name?></h4>
            <h6 class="text-center gray pb-1"><?=$data['event']->foundation?></h6>
            <p class="card-body gray"><?=$data['event']->body?></p>
            <div class="custom-btn-style mx-auto text-center">
                <a href="<?=URL_ROOT?>/events/review/<?=$data['event']->id?>" class="btn custom-red-btn">Add Review</a>
            </div>
        </div>
    </div>
</div>
<div class="col-8 offset-md-2">
    <h4 class="red pb-1 text-center">Reviews</h4>
</div>
<div class="row">
    <?php foreach($data['reviews'] as $review) : ?>
        <div class="col-8 offset-md-2">
            <div class="card card-body mb-3 custom-container">
                <h5 class="card-title red">
                    <i class="fa fa-user"></i>&nbsp;&nbsp;<?=$review->name?> | <span class="gray"><?=$review->reviewDate?></span>
                    <span class="red pull-right">
                        <?php for($i=0;$i<$review->rating;$i++) : ?>
                            <i class="fa fa-star"></i>
                        <?php endfor; ?>
                    </span>
                </h5>
                <p class="card-body gray"><?=$review->review?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>

<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <?php flash('event_message'); ?>
    <div class="row mb-4 pt-2">
        <div class="col-md-6 offset-md-3">
            <h2 class="red caps text-center">Events</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            <a href="<?=URL_ROOT?>/events/add" class="btn custom-red-btn pull-right mx-auto">
                <i class="fa fa-plus"></i> Add
            </a>
        </div>
    </div>
    <div class="row">
        <?php foreach($data['events'] as $event) : ?>
            <div class="col-6 offset-md-3">
                <div class="card card-body mb-3 custom-container">
                    <h5 class="card-title red text-center"><?=$event->name?></h5>
                    <h6 class="text-center gray pb-1"><?=$event->foundation?></h6>
                    <p class="card-body gray"><?=$event->body?></p>
                    <div class="custom-btn-style mx-auto text-center">
                        <a href="<?=URL_ROOT?>/events/show/<?=$event->id?>" class="btn custom-red-btn">More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>

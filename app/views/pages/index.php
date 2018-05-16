<?php require APP_ROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card card-body mb-3 custom-container">
                <h2 class="card-title red text-center">Welcome!</h2>
                <div class="col-md-8 offset-md-2 text-center">
                    <h5 class="card-body gray">Here you can <span class="red">view</span>,
                        <span class="red">rate</span>, <span class="red">review</span>,
                        and even <span class="red">add</span> your favorite fundraiser event!
                        Please register and login to continue!
                    </h5>
                    <div class="custom-btn-style mx-auto text-center">
                        <a href="<?=URL_ROOT?>/users/register" class="btn custom-red-btn">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
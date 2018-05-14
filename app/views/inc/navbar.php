<nav class="navbar navbar-default navbar-expand-lg navbar-dark mb-3">
    <div class="container">
        <a class="navbar-brand logo" href="#"><i class="fa fa-heart red"></i><span class="title"><?=SITE_NAME?></span></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL_ROOT?>/events">Events</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL_ROOT?>/users/logout">Logout</a>
                </li>
            <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL_ROOT?>/users/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL_ROOT?>/users/login">Login</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
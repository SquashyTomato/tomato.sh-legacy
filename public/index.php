<?php
// Require Preloader
require_once($_SERVER['DOCUMENT_ROOT'] . '/../resources/preload.php');

// Page Information
$page = [
    'name' => 'Home',
    'description' => 'Hello There',
    'permission' => '0',
    'banner' => '',
    'icon' => ''
];

// Require Socials List
require_once($root . '/data/socials.php');

// Require Head & Nav Templates
require_once($root . '/includes/head.php');
require_once($root . '/includes/nav.php');
?>
            <section class="hero is-fullheight-with-navbar">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <figure class="image has-image-centered is-128x128">
                            <img class="is-circle" src="/static/media/logo.png">
                        </figure>
                        <h1 class="title has-text-white"><?=$cfg['info']['name']?></h1>
                        <h2 class="subtitle has-text-white"><span class="typed"></span></h2>
                        <h4 class="is-size-4">
                            <span class="is-inline">
<?php foreach ($socials as $key => $social) { ?>
                                <a href="<?=$social['link']?>" class="is-link" target="_blank"><i class="<?=$social['icon']?>"></i></a>
<?php } ?>
                            </span>
                        </h4>
                    </div>
                </div>
            </section>
<?php require_once($root . '/includes/footer.php'); ?>
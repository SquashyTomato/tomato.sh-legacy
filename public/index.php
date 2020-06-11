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
                                <a href="/go?twitter" class="is-link" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="/go?twitch" class="is-link" target="_blank"><i class="fab fa-twitch"></i></a>
                                <a href="/go?discord" class="is-link" target="_blank"><i class="fab fa-discord"></i></a>
                                <a href="/go?osu" class="is-link" target="_blank"><i class="fac fa-osu"></i></a>
                                <a href="/go?git" class="is-link" target="_blank"><i class="fab fa-git-alt"></i></a>
                            </span>
                        </h4>
                    </div>
                </div>
            </section>
<?php require_once($root . '/includes/footer.php'); ?>
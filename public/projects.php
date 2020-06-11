<?php
// Require Preloader
require_once($_SERVER['DOCUMENT_ROOT'] . '/../resources/preload.php');

$page = [
    'name' => 'Projects',
    'description' => 'A List Of Things I Have Done',
    'permission' => '0',
    'banner' => '',
    'icon' => ''
];

// Require Projects List
require_once($root . '/data/projects.php');

// Require Head & Nav Templates
require_once($root . '/includes/head.php');
require_once($root . '/includes/nav.php');
?>
            <section class="section">
                <div class="container">
<?php foreach ($projects as $project) { ?>
                    <div class="box has-background-dark">
                        <article class="media">
                            <figure class="media-left">
                                <p class="image is-64x64"><img src="<?=$project['logo']?>"></p>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p class="is-size-5 has-text-white">
                                        <b><?=$project['name']?> (<?=$project['role']?>)</b> <small><?=$project['started']?> - <?=$project['ended']?></small>
                                        <div class="is-size-6 has-text-white">
                                        <?=$project['bio']?>
                                        </div>
                                    </p>
                                </div>
<?php if (isset($project['links'])) { ?>
                                <nav class="level is-mobile">
                                    <div class="level-left">
<?php foreach ($project['links'] as $key => $link) { ?>
                                        <a href="<?=$link?>" target="_blank" class="level-item"><i class="<?=$key?>"></i></a>
<?php } ?>
                                    </div>
                                </nav>
<?php } ?>
                            </div>
                        </article>
                    </div>
<?php } ?>
                </div>
            </section>
<?php require_once($root . '/includes/footer.php'); ?>
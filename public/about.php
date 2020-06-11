<?php
// Require Preloader
require_once($_SERVER['DOCUMENT_ROOT'] . '/../resources/preload.php');

// Page Information
$page = [
    'name' => 'About',
    'description' => 'Who Am I?',
    'permission' => '0',
    'banner' => '',
    'icon' => ''
];

// Get about.md Contents
$about = file_get_contents($root . '/data/about.md');

// Require Head & Nav Templates
require_once($root . '/includes/head.php');
require_once($root . '/includes/nav.php');
?>
            <section class="section">
                <div class="container">
                    <div class="box has-background-dark has-text-white">
                        <?=$Parsedown->text($about)?>
                    </div>
                </div>
            </section>
<?php require_once($root . '/includes/footer.php'); ?>
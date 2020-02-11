<?php require 'views/partials/__head.php';?>


<div id="app">

    <h1><?= $heading ?></h1>

    <div class="notes">
        <div class="section" id="intro">
            <p><?= $content ?></p>
        </div>
        <div class="section" id="notes">
            <?php require 'views/partials/__notes.php';?>
        </div>
    </div>

    <div class="form">
        <?php require('views/partials/__form.php'); ?>
    </div>

</div>

<?php require 'views/partials/__footer.php';?>

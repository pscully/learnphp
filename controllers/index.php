<?php 

$PAGE_ID = 1;

$notes = $app['database']->selectAll('notes', 'Note');

$heading = $app['database']->getContent($PAGE_ID)->heading;
$content = $app['database']->getContent($PAGE_ID)->content;

require 'views/index.view.php';
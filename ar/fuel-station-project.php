<?php
$lang = 'ar';
require __DIR__ . '/../includes/content.php';
fl_bootstrap('fuel', $lang);
$projectKey = 'fuel';
$project = fl_project_content($lang, $projectKey);
require __DIR__ . '/../includes/project-layout.php';

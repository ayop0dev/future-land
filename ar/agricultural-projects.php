<?php
$lang = 'ar';
require __DIR__ . '/../includes/content.php';
fl_bootstrap('agricultural', $lang);
$projectKey = 'agricultural';
$project = fl_project_content($lang, $projectKey);
require __DIR__ . '/../includes/project-layout.php';

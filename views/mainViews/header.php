<?php
if (!isset($viewTitle))
    $viewTitle = "";
if (!isset($viewHeadCustom))
    $viewHeadCustom = "";
if (!isset($viewName))
    $viewName = "";

$url = $root."views";
$viewHead = <<<HTML
    
HTML;
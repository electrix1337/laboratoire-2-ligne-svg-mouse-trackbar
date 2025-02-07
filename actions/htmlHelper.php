<?php
$linkColorTab = array();

function LinkClass ($className, $color, $underlined) {
    $textDecoration = "none";
    if ($underlined) {
        $textDecoration = "underline";
    }
    $html = <<<HTML
        <style>
            .$className {
                color: $color;
                text-decoration: $textDecoration;
            }
        </style>
    HTML;
}
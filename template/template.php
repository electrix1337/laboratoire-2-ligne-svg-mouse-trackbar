<?php
/*if you want to make a background with an image*/
$viewStyle = <<<HTML
    <style>
        #fixContent {
            background-image: url(./images/background/glowing-spaceship-orbits-planet-starry-galaxy-generated-by-ai.jpg);
        }
    </style>
HTML;

$viewContent = <<<HTML
    <pre>
        Remminder:
        1. change the title of the pages
        2. put the root location on all pages
        3. change the pages variables in variables.php
    </pre>
HTML;

$root = "./";
include $root."views/mainViews/master.php";

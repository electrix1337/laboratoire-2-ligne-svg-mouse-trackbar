<?php
$root = "../../";
$url = $root."css";

$viewStyle = <<<HTML
    <link rel="stylesheet" href="$url/add-on/creator.css">
HTML;

$viewContent = <<<HTML
    <div>
        <div>
            Creator: William Bégin
        </div>
    </div>

    <div class="backgroundLink">
        background image: <a target="_blank" href="https://fr.freepik.com/photos-gratuite/vaisseau-spatial-brillant-orbite-autour-planete-dans-galaxie-etoilee-generee-par-ia_40968198.htm#fromView=search&page=1&position=4&uuid=31450683-73bb-438c-a399-72ac7afef373">Image de vecstock sur Freepik</a>
    </div>
    
HTML;

include $root."views/mainViews/master.php";
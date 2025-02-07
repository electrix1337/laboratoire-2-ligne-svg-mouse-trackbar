<?php
if (!isset($pageTitle)) {
    $pageTitle = "Master";
}

$mainVariables = <<<HTML
    <style>
        :root {
            /*header*/
            --headerColor: black;
            --headerTextColor: white;

            /*footer*/
            --footerColor: grey;

            /*content*/
            --contentBackgroundColor: lightgrey;
            --textColor: white;
            --contentPaddingSide: 50px; /*if it is not in px, the mouse move function wont work in js/main/main.js*/

            /*fixed content*/

            /*mouse*/
            --selectionColor: white;
            --selectionBackgroundColor: blue;

            /*main stuff*/
            --defaultLinkColor: blue;
        }
    </style>
HTML;

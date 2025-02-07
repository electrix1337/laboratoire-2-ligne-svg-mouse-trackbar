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
            --contentPaddingSide: 50px;

            /*fixed content*/

            /*mouse*/
            --selectionColor: white;
            --selectionBackgroundColor: blue;

            /*main stuff*/
            --defaultLinkColor: blue;
        }
    </style>
HTML;

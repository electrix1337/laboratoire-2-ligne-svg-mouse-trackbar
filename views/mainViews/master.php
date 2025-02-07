<?php
/*load this first*/
include $root.'views/mainViews/variables.php';

/*load this after*/
include $root.'views/mainViews/header.php';
include $root.'views/mainViews/footer.php';
include $root.'views/mainViews/scriptsBundle.php';
include $root.'views/mainViews/stylesBundle.php';

if (!isset($pageTitle))
    $pageTitle = "";
if (!isset($viewHead))
    $viewHead = "";
if (!isset($viewStyle))
    $viewStyle = "";
if (!isset($viewContent))
    $viewContent = "";
if (!isset($viewScript))
    $viewScript = "";
if (!isset($viewFoot))
    $viewFoot = "";
if (!isset($stylesBundle))
    $stylesBundle = "";
if (!isset($scriptsBundle))
    $scriptsBundle = "";
if(!isset($mainVariables))
    $mainVariables = "";
if(!isset($fixContent))
    $fixContent = "";

echo <<<HTML
    <!doctype html>
    <html>
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$pageTitle</title>
        $mainVariables
        $stylesBundle
        $viewStyle
    </header>
    <body>
        <div id="main">
            <div id="header">
                $viewHead
            </div>
            $viewHeadCustom
            <div id="fixContent">
                $fixContent
            </div>
            <div id="content">
                $viewContent
            </div>
            <div id="footer">
                $viewFoot
            </div>
        </div>
        $scriptsBundle
        $viewScript
    </body>
    </html>
HTML;
?>
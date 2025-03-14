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
    <h1>SVG</h1>
    <svg id="trackbar" viewBox="0 0 1562 255">
        <defs>
        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgb(0, 0, 0);stop-opacity:1"/>
        <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1"/>
        </linearGradient>
        </defs>
        <path id="bar" fill="url(#grad1)" d="M42.486,104.96C19.021,104.96,0,85.939,0,62.474C0,39.01,19.021,19.988,42.486,19.988h1477.6 c23.465,0,42.486,19.022,42.486,42.486c0,23.465-19.021,42.486-42.486,42.486H42.486z"/>
        <g id="smallTicks">
        <line fill="none" x1="98.555" y1="165.857" x2="98.555" y2="180.03"/>
        <line fill="none" x1="126.901" y1="165.857" x2="126.901" y2="180.03"/>
        <line fill="none" x1="98.555" y1="180.03" x2="98.555" y2="165.857"/>
        <line fill="none" x1="155.248" y1="165.857" x2="155.248" y2="180.03"/>
        <line fill="none" x1="126.901" y1="180.03" x2="126.901" y2="165.857"/>
        <line fill="none" x1="183.595" y1="165.857" x2="183.595" y2="180.03"/>
        <line fill="none" x1="155.248" y1="180.03" x2="155.248" y2="165.857"/>
        <line fill="none" x1="183.595" y1="180.03" x2="183.595" y2="165.857"/>
        <line fill="none" x1="240.287" y1="165.857" x2="240.287" y2="180.03"/>
        <line fill="none" x1="268.634" y1="165.857" x2="268.634" y2="180.03"/>
        <line fill="none" x1="240.287" y1="180.03" x2="240.287" y2="165.857"/>
        <line fill="none" x1="296.98" y1="165.857" x2="296.98" y2="180.03"/>
        <line fill="none" x1="268.634" y1="180.03" x2="268.634" y2="165.857"/>
        <line fill="none" x1="325.327" y1="165.857" x2="325.327" y2="180.03"/>
        <line fill="none" x1="296.98" y1="180.03" x2="296.98" y2="165.857"/>
        <line fill="none" x1="325.327" y1="180.03" x2="325.327" y2="165.857"/>
        <line fill="none" x1="382.02" y1="165.857" x2="382.02" y2="180.03"/>
        <line fill="none" x1="410.366" y1="165.857" x2="410.366" y2="180.03"/>
        <line fill="none" x1="382.02" y1="180.03" x2="382.02" y2="165.857"/>
        <line fill="none" x1="438.713" y1="165.857" x2="438.713" y2="180.03"/>
        <line fill="none" x1="410.366" y1="180.03" x2="410.366" y2="165.857"/>
        <line fill="none" x1="467.06" y1="165.857" x2="467.06" y2="180.03"/>
        <line fill="none" x1="438.713" y1="180.03" x2="438.713" y2="165.857"/>
        <line fill="none" x1="467.06" y1="180.03" x2="467.06" y2="165.857"/>
        <line fill="none" x1="523.752" y1="165.857" x2="523.752" y2="180.03"/>
        <line fill="none" x1="552.099" y1="165.857" x2="552.099" y2="180.03"/>
        <line fill="none" x1="523.752" y1="180.03" x2="523.752" y2="165.857"/>
        <line fill="none" x1="580.445" y1="165.857" x2="580.445" y2="180.03"/>
        <line fill="none" x1="552.099" y1="180.03" x2="552.099" y2="165.857"/>
        <line fill="none" x1="608.792" y1="165.857" x2="608.792" y2="180.03"/>
        <line fill="none" x1="580.445" y1="180.03" x2="580.445" y2="165.857"/>
        <line fill="none" x1="608.792" y1="180.03" x2="608.792" y2="165.857"/>
        <line fill="none" x1="665.484" y1="165.857" x2="665.484" y2="180.03"/>
        <line fill="none" x1="693.831" y1="165.857" x2="693.831" y2="180.03"/>
        <line fill="none" x1="665.484" y1="180.03" x2="665.484" y2="165.857"/>
        <line fill="none" x1="722.178" y1="165.857" x2="722.178" y2="180.03"/>
        <line fill="none" x1="693.831" y1="180.03" x2="693.831" y2="165.857"/>
        <line fill="none" x1="750.524" y1="165.857" x2="750.524" y2="180.03"/>
        <line fill="none" x1="722.178" y1="180.03" x2="722.178" y2="165.857"/>
        <line fill="none" x1="750.524" y1="180.03" x2="750.524" y2="165.857"/>
        <line fill="none" x1="807.216" y1="165.857" x2="807.216" y2="180.03"/>
        <line fill="none" x1="835.563" y1="165.857" x2="835.563" y2="180.03"/>
        <line fill="none" x1="807.216" y1="180.03" x2="807.216" y2="165.857"/>
        <line fill="none" x1="863.91" y1="165.857" x2="863.91" y2="180.03"/>
        <line fill="none" x1="835.563" y1="180.03" x2="835.563" y2="165.857"/>
        <line fill="none" x1="892.256" y1="165.857" x2="892.256" y2="180.03"/>
        <line fill="none" x1="863.91" y1="180.03" x2="863.91" y2="165.857"/>
        <line fill="none" x1="892.256" y1="180.03" x2="892.256" y2="165.857"/>
        <line fill="none" x1="948.949" y1="165.857" x2="948.949" y2="180.03"/>
        <line fill="none" x1="977.295" y1="165.857" x2="977.295" y2="180.03"/>
        <line fill="none" x1="948.949" y1="180.03" x2="948.949" y2="165.857"/>
        <line fill="none" x1="1005.642" y1="165.857" x2="1005.642" y2="180.03"/>
        <line fill="none" x1="977.295" y1="180.03" x2="977.295" y2="165.857"/>
        <line fill="none" x1="1033.989" y1="165.857" x2="1033.989" y2="180.03"/>
        <line fill="none" x1="1005.642" y1="180.03" x2="1005.642" y2="165.857"/>
        <line fill="none" x1="1033.989" y1="180.03" x2="1033.989" y2="165.857"/>
        <line fill="none" x1="1090.681" y1="165.857" x2="1090.681" y2="180.03"/>
        <line fill="none" x1="1119.028" y1="165.857" x2="1119.028" y2="180.03"/>
        <line fill="none" x1="1090.681" y1="180.03" x2="1090.681" y2="165.857"/>
        <line fill="none" x1="1147.375" y1="165.857" x2="1147.375" y2="180.03"/>
        <line fill="none" x1="1119.028" y1="180.03" x2="1119.028" y2="165.857"/>
        <line fill="none" x1="1175.721" y1="165.857" x2="1175.721" y2="180.03"/>
        <line fill="none" x1="1147.375" y1="180.03" x2="1147.375" y2="165.857"/>
        <line fill="none" x1="1175.721" y1="180.03" x2="1175.721" y2="165.857"/>
        <line fill="none" x1="1232.414" y1="165.857" x2="1232.414" y2="180.03"/>
        <line fill="none" x1="1260.76" y1="165.857" x2="1260.76" y2="180.03"/>
        <line fill="none" x1="1232.414" y1="180.03" x2="1232.414" y2="165.857"/>
        <line fill="none" x1="1289.107" y1="165.857" x2="1289.107" y2="180.03"/>
        <line fill="none" x1="1260.76" y1="180.03" x2="1260.76" y2="165.857"/>
        <line fill="none" x1="1317.454" y1="165.857" x2="1317.454" y2="180.03"/>
        <line fill="none" x1="1289.107" y1="180.03" x2="1289.107" y2="165.857"/>
        <line fill="none" x1="1317.454" y1="180.03" x2="1317.454" y2="165.857"/>
        <line fill="none" x1="1374.146" y1="165.857" x2="1374.146" y2="180.03"/>
        <line fill="none" x1="1402.493" y1="165.857" x2="1402.493" y2="180.03"/>
        <line fill="none" x1="1374.146" y1="180.03" x2="1374.146" y2="165.857"/>
        <line fill="none" x1="1430.839" y1="165.857" x2="1430.839" y2="180.03"/>
        <line fill="none" x1="1402.493" y1="180.03" x2="1402.493" y2="165.857"/>
        <line fill="none" x1="1459.186" y1="165.857" x2="1459.186" y2="180.03"/>
        <line fill="none" x1="1430.839" y1="180.03" x2="1430.839" y2="165.857"/>
        <line fill="none" x1="1459.186" y1="180.03" x2="1459.186" y2="165.857"/>
        </g>
        <g id="bigTicks">
        <line fill="none" x1="70.208" y1="194.204" x2="70.208" y2="165.857"/>
        <line fill="none" x1="211.94" y1="194.204" x2="211.94" y2="165.857"/>
        <line fill="none" x1="353.673" y1="194.204" x2="353.673" y2="165.857"/>
        <line fill="none" x1="495.405" y1="194.204" x2="495.405" y2="165.857"/>
        <line fill="none" x1="637.138" y1="194.204" x2="637.138" y2="165.857"/>
        <line fill="none" x1="778.87" y1="194.204" x2="778.87" y2="165.857"/>
        <line fill="none" x1="920.602" y1="194.204" x2="920.602" y2="165.857"/>
        <line fill="none" x1="1062.334" y1="194.204" x2="1062.334" y2="165.857"/>
        <line fill="none" x1="1204.067" y1="194.204" x2="1204.067" y2="165.857"/>
        <line fill="none" x1="1345.799" y1="194.204" x2="1345.799" y2="165.857"/>
        <line fill="none" x1="1487.532" y1="194.204" x2="1487.532" y2="165.857"/>
        </g>
        <g class="draggable">
            <polygon id="cursor" fill="red" points="104,129 104,0 36,0 36,129 70,163 104,129 "/>
        </g>
        <g id="units">
            <text transform="matrix(1 0 0 1 62.7285 230)" font-family="'ArialNarrow'">0</text>
            <text transform="matrix(1 0 0 1 205.4609 230)" font-family="'ArialNarrow'">1</text>
            <text transform="matrix(1 0 0 1 347.1929 230)" font-family="'ArialNarrow'">2</text>
            <text transform="matrix(1 0 0 1 488.9253 230)" font-family="'ArialNarrow'">3</text>
            <text transform="matrix(1 0 0 1 630.6577 230)" font-family="'ArialNarrow'">4</text>
            <text transform="matrix(1 0 0 1 772.3901 230)" font-family="'ArialNarrow'">5</text>
            <text transform="matrix(1 0 0 1 914.1221 230)" font-family="'ArialNarrow'">6</text>
            <text transform="matrix(1 0 0 1 1055.8545 230)" font-family="'ArialNarrow'">7</text>
            <text transform="matrix(1 0 0 1 1197.5869 230)" font-family="'ArialNarrow'">8</text>
            <text transform="matrix(1 0 0 1 1339.3193 230)" font-family="'ArialNarrow'">9</text>
            <text transform="matrix(1 0 0 1 1470.0513 230)" font-family="'ArialNarrow'">10</text>
        </g>
    </svg>
HTML;

$root = "./";
include $root."views/mainViews/master.php";

<?php

$leftcard = rand(0,13);
$cards = array("JK.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");

?>


<!DOCUTIPE html>
<html lang="ja">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8"> 
        <title>High & lowゲーム</title>
        <style>
            .center {
                text-align: center;
            }
            .inline_block {
                display: inline-block;
                margin: 20px;
            }
            .clearfix::after {
                content: '';
                display: block;
                clear: both;
            }
        </style>
    </head>
    <body class="center">
        <font size=6>High & Lowゲーム</font>
        <hr>
        <form action="highAndLow02.php" method="post">
            <div class="clearfix">
                <div class="inline_block"><?php
                echo "<img src='cards/$cards[$leftcard]'>";
                    ?></div>
                <div class="inline_block"><?php
                echo "<img src='cards/bg.png'>";
                    ?></div>
            </div>
            <div class="clearfix">
                <div class="inline_block">
                    <input type="radio" name="select" value="High" required>High
                </div>
                <div class="inline_block">
                    <input type="radio" name="select" value="Low" required>Low
                </div>
                <input type="hidden" name="leftcard" value="<?php
                                                            echo $leftcard;
                                                            ?>">
            </div>
            <div><input type="submit" value="決定"></div>
        </form>
    </body>
</html>
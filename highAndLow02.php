<?php

$leftcard = $_POST['leftcard'];
$select = $_POST['select'];
$rightcard = rand(0,13);
$cards = array("JK.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//$resultへの格納
if($leftcard < $rightcard) {
    $result = "High";
} else if($leftcard > $rightcard){
    $result = "Low";
} else {
    $result = $select; //引き分けの場合は勝ち（仕様）
}
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
            /* 改行用 */
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
        <div class="clearfix"> 
            <div class="inline_block"><?php
            echo "<img src='cards/$cards[$leftcard]'>";
                ?></div>
            <div class="inline_block"><?php
            echo "<img src='cards/$cards[$rightcard]'>";
                ?></div>
        </div>
        <p>「<?=$select?>」を選択しました。</p>
        <p><?php
            if($select == $result) {
                echo "You Win!";
            } else {
                echo "You Lose...";
            }
            ?>
        </p>
        <a href="highAndLow01.php">もう一度挑戦</a>
    </body>
</html>
<!DOCTYPE html>		
<html lang="ko">		
    <head>		
    <meta charset="UTF-8" />		
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />		
    <title>나의 홈페이지</title>
    <link rel="stylesheet" href="./css/forth.css">		
    <style>			
      * {		
        box-sizing: border-box;		
        margin: 0;		
        padding: 0;		
      }		
    </style>		
    </head>		
        <body>			
            <h1 class="dd">네번째 php 연습</h1>			
            <?php
                echo "문자열 바꿔주기 : str_replace() </br>";
                $practice = "Hello World";
                echo str_replace("World","Dolly",$practice);
                echo "</br>";
                echo "문자열 반전 : strrev() </br>";
                echo strrev($practice);
                echo "</br>";
                print_r($practice);
                echo "</br>";
                $x = "Hello World";
                $y = explode(" ", $x);
            
                print_r($y);
            ?>
        </body>		
</html>		
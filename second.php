<!DOCTYPE html>		
<html lang="ko">		
    <head>		
    <meta charset="UTF-8" />		
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />		
    <title>나의 홈페이지</title>		
    <style>			
      * {		
        box-sizing: border-box;		
        margin: 0;		
        padding: 0;		
      }		
    </style>		
    </head>		
        <body>			
            <h1>두번째 연습페이지</h1>			
            <?php
                $global = "글로벌변수";
                static $static = "스태틱변수";
                function Test(){
                    global $global,$static; // 글로벌이라는 키워드로 전역변수를 가져온다
                    echo $global . "</br>" ."global 변수는 global 이라는 키워드로 함수내부에 한번더 선언해줘야 사용가능하다";
                    echo "</br>" . "그리고 echo 사용할때 . 을 붙여줘야 다음 문장이나 변수를 사용할수있다. </br>";
                    echo "<h3>".$static."</h3> 는 함수가 끝나더라도 지역변수처럼 사라지지않는다. </br>";
                    print("<h3>print 는 echo 랑 유사하다</h3>");
                }
                Test();
            ?>
        </body>		
</html>		
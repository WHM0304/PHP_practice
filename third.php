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
            <h1>나의 홈페이지</h1>
            <?php
           class Car {
            public $color;
            public $model;
            public function __construct($color,$model) {
                $this->color = $color;
                $this->model = $model;
           }
           public function message(){
            return "My car is a " . $this->color . " " . $this->model . "!" ;
           }
        }
        $myCar = new Car("red" , "kia");
        echo "<h3>클래스 만드는 방식은 다른 언어랑 비슷하다</h3>";
        var_dump(($myCar));

        $name = "hongmin";
        echo "</br>";
        echo "strpos() 함수는 해당문자열이 시작하는 위치 알려주기 : ";
        echo strpos($name,"min");



            ?>
            
            


        </body>		
</html>		
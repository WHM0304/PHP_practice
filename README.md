# PHP 연습페이지

- php를 연습해보자
- 일반 html 과 비슷하게 css 도 동일하게 적용되는 모습

- 클래스 만들기
```php
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
?>
```

-  `strpos()` : 해당문자열이 시작하는 위치 알려주기
```php
  	$name = "hongmin";
	echo strpos($name,"min");
```
- `str_replace()` : 문자열 바꿔주기 
	ex) echo str_replace("World","Dolly" ,"Hello World");
- `strrev()` : 문자열 반전
	ex) echo strrev("Hello World");
- `trim()` : 공백제거
- `explode()` : 문자열을 배열로 분할하기
	```php
	$x = "Hello World";
	$y = explode(" ", $x);

	print_r($y);
	```
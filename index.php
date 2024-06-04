<!DOCTYPE html>
<html>
<body>


	<h1>첫번째 페이지</h1>
<?php
// echo 사용 , 변수사용
$name = "이름";
$x = 5;
$y = 1;
echo "Hello!";
echo "??" . $name . "</br>";
?>
<h3>변수선언</h3>
<?php
echo $x; // 선언한 변수가 글로벌 scope 여서  된것같음
echo "<br>";
var_dump($x); var_dump(NULL); // 데이터유형 값 리턴
?>
<p> 첫번째 연습페이지</p>

<?php

function myTest() {
	$name = "이름";
	echo " <p> scope 문제 </p> ";
}
myTest();
echo "<p>함수를 만들기! $name 은 myTest! 전엔 오류가 났었다 문제는 변수의 scope</p>"
?>
</body>
</html>

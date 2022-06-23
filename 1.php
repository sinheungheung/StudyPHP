<?php
$Fruits = array(6);
// 배열이름 = array();

$arr[0] = "Apple";
$arr[1] = "Melon";
$arr[2] = "Mango";
$arr[3] = "Pear";
$arr[4] = "Strawberry";
$arr[5] = "Peach";
// 방을 만들고 값을 집어넣음

$Array = array("Apple","Melon","Mango","Pear","Strawberry","Peach");
// 동시에 방을 만들고 값을 집어넣음

foreach($arr as $Fruits){
    echo $Fruits;
}
// 각각 배열이 변수 안에 들어간다

$Mirim = array("key => value");
// 연관배열(asociative array): key, value로 이루어짐

foreach($arr as $Fruits){
    if($Fruits[0] != "Apple"){
        echo "사과가 아닙니다.";
    }
}
// foreach(배열이름 as 변수){
//    실행될 코드
//}

// 함수(function)

function Student($study,$sleep,$eat){
    echo "공부를 합니다";
    echo "잠을 잡니다";
    echo "밥을 먹습니다";
}
// 형식
// 1. 리턴타입x 매개변수x
$num1 = 3;
$num2 = 5;
function add(){
    echo 3+5;
}
add();

// 2. 리턴타입x 매개변수o
function add{$num1, $num2}{
    echo($num1 + $num2);
}
add(3,5);
// 매개변수가 있으면 함수호출을 할 때 값을 같이 넘겨줘야 함

// 3. 리턴타입o 매개변수x
function add(){
    return(3+5);
}
add();
echo(return);

// 4. 리턴타입o 매개변수o
function add($num1, $num2){
    return($num1, $num2);

    echo(add(3,5));
}
// strlen: 문자열 길이
?>
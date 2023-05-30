<?php
$userId = 1;
if(empty($_COOKIE['name'])){
  $user = 'user' . $userId;
  setcookie('name', $user);
  setcookie('count', 1);  
  $userId++;
} esle {
  $count = $_COOKIE['count'];
  $count++;
  setcookie('count', $count);
}

if(1 == $_COOKIE['count']) {
  echo "{$_COOKIE['name']} добро пожаловать на наш сайт, надеюсь он вам понравится!";
} else {
  echo "{$_COOKIE['name']} спасибо Вам, что вернулись на наш сайт в {$_COOKIE['count']} раз!";
}

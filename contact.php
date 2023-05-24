<?php 
$size = ini_get('post_max_size');
$last_letter = strtoupper(substr($size,-1));
switch ($last_letter){
  case 'G': $size = (int)$size * 1024;
  case 'M': $size = (int)$size * 1024;
  case 'K': $size = (int)$size * 1024;
  default: $size = (int)$size;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
   
    <!-- Область основного контента -->
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p> 
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <?php foreach($leftMenu as $item): ?>
      <li><a href='<?= $item['href'] ?>'><?= $item['link'] ?></a>
      </li>
      <?php endforeach; ?>
     
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>

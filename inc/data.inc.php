<?php
    setlocale(LC_ALL, "ru-RU");
    $day = date('d');
    $mon = date('F');
    $year = date('Y');
    $hour = date('H');
    $welcome = "";
    
    if (0 < $hour && $hour < 6) {
        $welcome = 'Доброй ночи';
    } elseif (6 <= $hour && $hour < 12) {
        $welcome = 'Доброе утро';
    } elseif (12 <= $hour && $hour < 18) {
        $welcome = 'Добрый день';
    } elseif (18 <= $hour && $hour < 23) {
        $welcome = 'Добрый вечер';
    } else {
        $welcome = 'Доброй ночи';
    }
    
    // Инициализация массива 
    $leftMenu = [
        ['link' => 'Домой', 'href' => 'index.php'],
        ['link' => 'О нас', 'href' => 'about.php'],
        ['link' => 'Контакты', 'href' => 'contact.php'],
        ['link' => 'Таблица умножения', 'href' => 'table.php'],
        ['link' => 'Калькулятор', 'href' => 'calc.php']
    ];
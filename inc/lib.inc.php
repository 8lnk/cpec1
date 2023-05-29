<?php
function drawMenu($menu, $vertical = true)
{
    if (!is_array($menu)) {
        return false;
    }
    echo "<ul>";
    foreach ($menu as $item) :

        if ($vertical) {
            echo "<li>";
        } else {
            echo "<li style = 'display: inline-block; margin-left: 10px;'>";
        }

        echo "<a href='{$item['href']}'>{$item['link']}</a></li>";
    endforeach;
    echo "</ul>";
    return true;
}
function drawTable($cols = 5, $rows = 5, $color = 'yellow')
{
    echo "<table border='1' width=\"200\">";
    for ($tr = 1; $tr <= $rows; $tr++) {

        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {

            if ($td == 1 || $tr == 1) {
                echo "<th style='background:$color;'>";
                echo $tr * $td;
                echo "</th>";
            } else {
                echo "<td>";
                echo $tr * $td;
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
function myError($ernum, $ermsg, $errfile, $errline)
{

    echo $ernum . ' ', $ermsg . ' ', $errline . ' ', "\n";

    switch ($ernum) {

        case E_USER_NOTICE:
            error_log("$ermsg\n", 3, 'errors.log');
            echo "\n  ==", E_USER_NOTICE . "\n";
    }
}

function calc($num1, $num2, $operator)
{
    $result = "";
    if (!is_int($num1) || !is_int($num2)) {
        $result = "Вычисления производятся только с целыми числами";
        return $result;
    }
    if (!($operator == '+' || $operator == '-' || $operator == '*' || $operator == '/')) {
        $result = 'Вы должны использовать один из этих операторов: "+, -, *, /"!';
        return $result;
    }
    switch ($operator) {
        case '+':
            $result = "Результат $num1 + $num2 = " . $num1 + $num2;
            break;
        case '-':
            $result = 'Результат $num1 - $num2 = ' . $num1 - $num2;
            break;
        case '*':
            $result = 'Результат $num1 * $num2 = ' . $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = 'На "0" делить нельзя';
                return $result;
            }
            $result = 'Результат $num1 / $num2 = ' . $num1 / $num2;
            break;
    }
    return $result;
}

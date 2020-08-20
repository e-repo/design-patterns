<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\Builder\MysqlQueryBuilder;

echo '<h2 style="text-align: center;">Паттерн - Билдер</h2>';

$queryBuilder = new MysqlQueryBuilder();

$query = $queryBuilder
    ->select('user', ['name', 'email', 'password'])
    ->where('age', 18, '>')
    ->where('age', 30, '<')
    ->limit(10, 20)
    ->getSQL();

echo '<pre>';
echo print_r($query, true);
echo '</pre>';

?>

<div style="text-align: center;">
    <p>Одним из лучших применений паттерна Строитель является конструктор запросов SQL. Интерфейс Строителя определяет общие шаги, необходимые для построения основного SQL-запроса. В тоже время Конкретные Строители, соответствующие различным диалектам SQL, реализуют эти шаги, возвращая части SQL-запросов, которые могут быть выполнены в данном движке базы данных.</p>
</div>
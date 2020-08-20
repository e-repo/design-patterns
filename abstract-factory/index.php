<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\AbstractFactory\TriangleFactory;
use Pattern\AbstractFactory\QuadrangleFactory;
use Pattern\AbstractFactory\PentagonFactory;

echo '<h2 style="text-align: center;">Абстрактная фабрика</h2>';

$triangleFactory = new TriangleFactory();
$triangle = $triangleFactory->createFiguresFirstType(400, 400);
echo $triangle->printShape();
$triangle = $triangleFactory->createFiguresSecondType(500, 500);
echo $triangle->printShape();
$triangle = $triangleFactory->createFiguresThirdType(600, 600);
echo $triangle->printShape();

echo '<hr />';

$quadrangleFactory = new QuadrangleFactory();
$quadrangle = $quadrangleFactory->createFiguresFirstType(200, 200);
echo $quadrangle->printShape();
$quadrangle = $quadrangleFactory->createFiguresThirdType(500, 500);
echo $quadrangle->printShape();
echo '<pre style="text-align: center">';
echo print_r($quadrangle->getDimensions(), true);
echo '</pre>';

echo '<hr />';

$pentagonFactory = new PentagonFactory();
$pentagon = $pentagonFactory->createFiguresFirstType(500, 500);
echo $pentagon->printShape();

?>

<div style="text-align: center;">
    <p>В данном примере показана абстрактная фаблика на примере фигур. Будут созданы три типа фигур - трехугольники, четырехугольники, пятиугольники</p>
    <p>!!Каждый отдельный тип продукта должен иметь отдельный интерфейс. Все варианты продукта должны соответствовать одному интерфейсу - !!(КАЖДЫЙ СВОЕМУ)!!.</p>
</div>

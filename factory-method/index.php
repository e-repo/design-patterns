<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\FactoryMethod\CreateDesignInterviewer;



echo '<h2 style="text-align: center;">Фабричный метод</h2>';

$interviewer = new CreateDesignInterviewer();
echo $interviewer->takeInterview();

?>

<div style="text-align: center;">
    <p>В данном примере показан фабричный метод на примере интревьюеров. При помощи фабричного метода будут созданы два типа интревьера - DesignInterviewer, FrontEndInterviewer</p>
</div>
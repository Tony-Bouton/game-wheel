<?php

$nav = [
    'home' => 'pages/homePage',
    'design' => '/design',
    'contact' => '/contact'
]

?>

<ul class="d-flex justify-content-around text-dark">
    <?php foreach ($nav as $key => $value) : ?>
        <li> <a class="text-dark " href=" <?= $value ?>"> <?= $key ?></a> </li>
    <?php endforeach ?>
</ul>
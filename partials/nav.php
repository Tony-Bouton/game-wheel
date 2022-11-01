<?php

$nav = [
    'Accueil' => 'index',
    'Ajouter un jeux' => 'addGame'
]
?>
<header class="bg-success text-white">
    <ul class="d-flex justify-content-around align-items-center text-dark list-unstyled h-100">
        <?php foreach ($nav as $key => $value) : ?>
            <li> <a class="text-white text-decoration-none align-items-center" href=" <?= $value ?>"> <?= $key ?></a></li>
        <?php endforeach ?>
    </ul>
</header>
<?php
$hide = false;
require '../partials/header.php';
require '../partials/nav.php';
?>
<div class="d-flex justify-content-center align-items-center h-75">
    <div>
        <button id="roll" class="btn btn-success text-white rounded-pill p-3 roll">A quoi on joue ?</button>
    </div>
</div>
<script>
    const roll = document.getElementById('roll');
    roll.addEventListener('click', () => {
        const game = document.getElementById('game');
        document.game.innerHTML.replkace('htrgd');
        console.log(game)
    })
</script>
<?php

require '../partials/footer.php'
?>
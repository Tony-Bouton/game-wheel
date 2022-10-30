<?php

require 'partials/header.php';


require 'partials/nav.php';
$test = ['test1', 'test2', 'test3', 'test4', 'test5', 'test6'];
$game = array_rand($test, $num = 1);

?>
<div class="container border h-75">
    <div class="d-flex align-items-center justify-content-center align-content-center h-100">
        <div class="col-md-6">
            <p id="game"><?= $test[$game] ?></p>
            <div class="d-flex justify-content-center">
                <button id="roll" class="roll">roll</button>
            </div>
            <div class="">
                <?php require 'partials/addGame.php' ?>
            </div>
        </div>
    </div>
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

require 'partials/footer.php'
?>
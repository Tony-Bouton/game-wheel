<?php
@include '../Class/Game.php';

if (isset($_POST)) {
    try {
        $gameName = $_POST['nom'];
        $gameRules = $_POST['rules'];
        $game = new Game($gameName, $gameRules);
$dbh = new PDO('mysql:host=localhost;dbname=thegame', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();

    $query = $dbh->prepare('INSERT INTO `newgame`(`gamename`, `gamerules`) VALUES ("$gameName", "$gameRules")');
    $dbh->exec($query);
    }
}
?>

<form action="" method="post" class="d-flex flex-column justify-content-around input-group">
    <label for="nom">Nom du jeu</label>
    <input type="text" name="nom" id="nom" class="input-group-text my-3">
    <label for="rules" class="">Règle du jeux</label>
    <input type="textarea" name="rules" id="rules" class="input-group-text  my-3">
    <input type="submit" value="valider" id="valider" class="btn btn-success my-3 rounded-pill">
</form>
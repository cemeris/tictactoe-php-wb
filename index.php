<link rel="stylesheet" href="style.css">



<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include 'DB.php';
    $game = new DB('game');
?>

<?php if(array_key_exists('game-id', $_REQUEST)) { ?>
    <div class="container">

    <?php for ($r = 1; $r <= 3; $r++):?>
        <?php for ($c = 1; $c <= 3; $c++):?>
            <a href="?c=<?=$c?>&r=<?=$r?>">-</a>
        <?php endfor; ?>
    <?php endfor; ?>

    </div>

<?php }else { ?>
    <a class="btn" href="startgame.php">start game</a>
<?php } ?>
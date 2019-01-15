<?php 
define("constant", "Min Topplista");
function myConstant(){
    echo constant;
}
?>
<div class="header">
    <div class="links">
        <h1 class="rubrik"><?php myConstant(); ?></h1>
        <a href="./index.php">Start</a>
        <a href="./lista.php"><?php myConstant(); ?></a>
        <a href="./kontakt.php">Kontakt</a>
    </div>
</div>
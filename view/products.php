
    <?= $productsSearch ?>

<?php
echo $products[1];
for ($i = 1; $i <= $products[0]; $i++) {
  echo "<li><div onClick=/localhost/index.php?op=read&p=" . $i . ">" . $i .
    "</div></li>";
}
?>
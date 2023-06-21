<?php
include_once("Templates/header.php"); ?>
<a class="link" href="<?= $BASE_URL ?>index.php"><div class="button-voltar"> Voltar </div></a>
<div class="container-show">
<h1 class="title-show"><?= $contact["nome"] ?> <?= $contact["sobrenome"] ?> </h1>
<p> Telefone: <?= $contact["phone"] ?> </p>
<P> Observações: <?= $contact["obs"] ?> </p>
</div>
<?php
include_once("Templates/footer.php");
?>
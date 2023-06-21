<?php

include_once("Templates/header.php")

?>

<a class="link" href="<?= $BASE_URL ?>index.php"><div class="button-voltar"> Voltar </div></a>


<div class="ct"> <h1 class="create-title"> EDITAR CONTATOS </h1>

    <form action="<?= $BASE_URL ?>config/process.php" method="POST">
    
    <input type="hidden" name="type" value="edit">

    <input type="hidden" name="id" value="<?= $contact['id'] ?>">

        <table class="form-group">
            <tr>
                <td> <label for="nome">Nome do contato:</label> </td>
                <td> <input type="text" id="name" name="nome" placeholder="digite o nome do contato" value=" <?= $contact['nome']?>"> </td>
            </tr>
            <tr>
                <td> <label for="sobrenome"> Sobrenome:</label> </td>
                <td> <input type="text" id="sobrenome" name="sobrenome" placeholder="digite o sobrenome" value=" <?= $contact['sobrenome']?>"> </td>
            </tr>  
            <tr>
                <td><label for="phone">Telefone:</label></td>
                <td><input type="text" id="phone" name="phone" placeholder="digite telefone" value=" <?= $contact['phone']?>"> </td>
            </tr>
            <tr>
                <td> <label for="obs">Observações:</label></td>
                <td><input type="text" id="obs" name="obs" value="<?php echo $contact['obs'] ?>" > </td>
            </tr>
            <tr>
                <td></td>
                <td id="gbt"><button type="submit" class="btn-env">Atualizar</button>  </td>
            </tr>
</table>
</form>    
</div>
<?php
include_once("Templates/footer.php");
?>
<?php
include_once("Templates/header.php")
;
?>
<div class="container">
    <?php if(isset($printMSG) && $printMSG != ''): ?>
       <div class="container-msg"> <p id="msg"><?= $printMSG ?></p> </div>
    <?php endif; ?>
    <h1 id="titulo">Minha Agenda </h1>
    <?php if(count($contacts)> 0): ?>
       <table class="tabela-contacts">
    <tr>
        <td class="coluna"># </td>
        <td class="coluna">Nome</td>
        <td class="coluna">Sobrenome </td>
        <td class="coluna">Telefone</td>
    </tr>
   
    <?php foreach($contacts as $contact): ?>
        <tr>
            <td class="coluna2"><?= $contact["id"] ?> </td>
            <td class="coluna2"><?= $contact['nome'] ?> </td>
            <td class="coluna2"><?= $contact['sobrenome'] ?> </td>
            <td class="coluna2"><?= $contact['phone'] ?> </td>
            <td class="acoes">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><span class="material-symbols-sharp" id="bt_view">visibility</span></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"> <span class="material-symbols-sharp" id="bt_add">edit_square </span></a>
                
                <form action="<?php $BASE_URL ?>config/process.php" method="POST">
                    
                    <input type="hidden" name="type" value="delete" >
                    <input type="hidden" name="id" value= "<?= $contact["id"]?>" >

                    <button type="submit" id="bt_delete" > <span class="material-symbols-outlined"> delete </span> </button>
                </form>
                
            </td> 
        </tr>   
    <?php endforeach; ?>
        </table>
        <?php else: ?>
            <p> ainda não temos contatos, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar </a>! </p>

            
    <?php endif; ?>
        
</div>
<?php
include_once("Templates/footer.php");
?>
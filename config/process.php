<?php
include_once("conection.php");
session_start();




$data = $_POST;
//MODIFICAçÃO

if(!empty($data)){
 
    // CRIAR CONTATO
    if($data["type"] === "create"){

        $nome = $data["nome"];
        $sobrenome = $data["sobrenome"];
        $phone = $data["phone"];
        $obs = $data["obs"];

        $q = "INSERT INTO contacts (nome, sobrenome, phone, obs) VALUES(:nome, :sobrenome, :phone, :obs)";

        $stmt = $conn->prepare($q);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":obs", $obs);

        try{
            $stmt->execute();
            $_SESSION["msg"] = " Contato criado com sucesso";
        
        }catch(PDOException $e){
            //erro na conexao
            $error = $e->getMessage();
            echo "erro: $error";
        }
  
 
     // EDITANDO CONTATO

    }else if ($data["type"] === "edit"){

        $nome = $data["nome"];
        $sobrenome = $data["sobrenome"];
        $phone = $data["phone"];
        $obs = $data["obs"];
        $id = $data["id"];

        $q = " UPDATE  contacts SET nome = :nome, sobrenome = :sobrenome, phone = :phone, obs = :obs WHERE id = :id ";

        $stmt = $conn->prepare($q);
        
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":obs", $obs);
       

        try{
            $stmt->execute();
            $_SESSION["msg"] = " Contato atualizado";
        
        }catch(PDOException $e){
            //erro na conexao
            $error = $e->getMessage();
            echo "erro: $error";
        }
    }else if($data["type"] === "delete") {

            $id = $data["id"];

            $q = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($q);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            try{
                $stmt->execute();
                $_SESSION["msg"] = " Contato Deletado";
            
            }catch(PDOException $e){
                //erro na conexao
                $error = $e->getMessage();
                echo "erro: $error";
            }

    }
   // redirecionando para outra pagina 
   header("Location:" . $BASE_URL ."../index.php");

    }else{

    $id;

    if(!empty($_GET)){
        $id = $_GET["id"];
    }
    
    // RETORNA O DADO DE UM CONTATO
    if(!empty($id)){
    
    $q = "SELECT * FROM contacts WHERE id = :id";
    
    $stmt = $conn->prepare($q);
    
    $stmt->bindParam(":id", $id);
    
    $stmt->execute();
    
    $contact = $stmt->fetch();
    
    
    }else{
    // RETORNA TODOS OS DADOS
    
    $contacts  = [];
    
    $q = "SELECT * FROM contacts";
    
    $stmt = $conn->prepare($q);
    
    $stmt->execute();
    $contacts = $stmt->fetchAll();
    
    }
    
    
}

// FECHAR CONEXAO

$conn = null;
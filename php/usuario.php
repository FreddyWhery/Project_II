<?php

class usuario{

    private $pdo;
public $msgErro="";

    public function conectar($nome, $host, $usuario, $senha){

global $pdo;
try {
$pdo=new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
}catch (PDOException $e){

    $msgErro=$e->getMessage();
}

}

    public function Cadastrar($nome, $contacto, $nomequarto, $datareser, $dataentrada, $datasaída){

        global $pdo;
        //Verifica

$sql=$pdo->prepare("SELECT id_Reserv FROM cadastrarreservar WHERE nome = :e");
$sql->bindValue(":e",$nome);
$sql->execute();
if($sql->rowCount()>0){

    return false; //Já_Está_Cadastrado
}else{
//Caso_não_esteja_cadastrado

$sql=$pdo->prepare("INSERT INTO cadastrarreservar (nome, contacto, nomequarto, datareser, dataentrada, datasaída) VALUES (:e, :n, :t, :s, :w, :k)");

$sql->bindValue(":e",$nome);
$sql->bindValue(":n",$contacto);
$sql->bindValue(":t",$nomequarto);
$sql->bindValue(":s",$datareser);
$sql->bindValue(":w",$dataentrada);
$sql->bindValue(":k",$datasaída);
$sql->execute();

return true;
}

        

    }

    public function logar($usuario,$senha){

        global $pdo;
//Verifica se está cadastrado
$sql=$pdo->prepare("SELECT id_usuario FROM usuario WHERE usuario = :u AND senha = :c");
$sql->bindValue(":u",$usuario);
$sql->bindValue(":c",$senha);
$sql->execute();

if ($sql->rowCount()>0){

//Acessar 
$dado=$sql->fetch();

$_SESSION['id_usuario']=$dado['id_usuario'];

return true; //Conseguiu logar
}else{
//Se sim, loga
return false; //Não conseguiu logar
}


    }
}

?>
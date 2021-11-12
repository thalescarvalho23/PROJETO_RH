<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>informação</title>
  <link rel="stylesheet" href="css/style-consulta.css">
</head>
<body>



<div class= "hader">

<h1>STICLE DUBLAGEM E COMÉRCIO DE TECIDOS</h1>
</div>  

<div class="row"> <!-- BOTOES -->
<div class="col-3 menu">
<ul>
<a href="index.html"style="text-decoration:none" ><li>Voltar </li></a>
</ul>
</div>

<div class="col-9.2"><!-- DIV DE ESPAÇAMENTO ENTRE FINAL DA DIV DE SELECT COM O RODAPÉ-->
<center><div class="painel" style="width: 80rem;">
 o tempo de resposta entre a o Envio para o retorno será em até 10 dias, se caso não<br> entrarmos em contato seu curriculo ficará armazenado em nosso banco de talentos
 e abrindo vaga entraremos em contato.

<?php
//CONEXAO COM BD
$mysqli_connection = new MySQLi('localhost', 'root', '', 'funcionario');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "";
}

      //INSERT
    $nome =$_POST['nome'];
    $telefone =$_POST['telefone'];
    $nascimento=$_POST['nascimento'];
    $idade= $_POST['idade'];
    $email= $_POST["email"];
    $nomemae=$_POST['nomemae'];
    $estado=$_POST["estado"];
    $cep= $_POST["cep"];
    $bairro=$_POST["bairro"];
    $rua =$_POST["rua"];
    $numero = $_POST["numero"];
    $ja_trabalhou =$_POST["ja_trabalhou"];
    $parente=$_POST['parentes'];
    $nomeparente=$_POST['nomeparente'];
    $grauparente=$_POST['grauparente'];
    $indica=$_POST['indica'];
    $disponibilidade=$_POST['disponibilidade'];
    $trabalhanoite= $_POST['trabalhanoite'];
    $mudahora=$_POST['mudahora'];
    $formacaoescolar=$_POST['formacaoescolar'];
    $ano=$_POST['ano'];
    $estuda=$_POST['estuda']; 
    $horario= $_POST['horario'];
    $curso=$_POST['curso'];
    $cargo =$_POST["cargo"];
    $sexo = $_POST["sexo"];
    $estadocivil=$_POST['estadocivil'];
    $objetivo = $_POST["objetivo"];
    $formacao = $_POST["formacao"];
    $experiencia = $_POST["experiencia"];

    
   
    $sql= "INSERT INTO `curriculo`(`id`, `nome`, `telefone`, `nascimento`, `idade`,
     `email`, `nomemae`, `estado`, `cep`, `bairro`, `rua`, `numero`, `ja_trabalhou`, 
     `parentes`, `nomeparente`, `grauparente`, `indica`, `disponibilidade`, `trabalhanoite`,
      `mudahora`, `formacaoescolar`, `ano`, `estuda`, `horario`,
     `curso`, `cargo`, `sexo`, `estadocivil`, `objetivo`, 
     `formacao`, `experiencia`)  VALUES  ('',' $nome','$telefone','$nascimento','$idade',
     '$email','$nomemae','$estado','$cep','$bairro','$rua','$numero',
     '$ja_trabalhou','$parente','$nomeparente','$grauparente','$indica','$disponibilidade',
     '$trabalhanoite','$mudahora','$formacaoescolar','$ano','$estuda','$horario','$curso',
     '$cargo','$sexo','$estadocivil','$objetivo','$formacao','$experiencia')";
   
   if ($mysqli_connection->query($sql) === TRUE) {
    echo "Formulário Enviado, Boa Sorte Candidato!";
  } else {
    echo "Erro: " . $sql . "<br>" . $mysqli_connection->error;
  }
  
  $mysqli_connection->close();

?>
</div>
</body>
</html>

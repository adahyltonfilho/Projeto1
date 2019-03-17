<?php
    
 
    // Parametros para Se Conectar ao Banco
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "Enem");

    //Conecta ao Banco
    $conn = new PDO('mysql:host=localhost;dbname=Enem', DB_USER, DB_PASSWORD);

    //Salva As Informações do Formulário da Página Index.html
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    //Monta a Consulta para Verificar se o Login Informado Existe no banco
    $query = "SELECT `id`, `nome` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') LIMIT 1";
    
    //Consulta o Banco com os Dados do Login Informado
    $stmt = $conn->query($query);
//var_dump ($stmt);
    //Verifica se a Consulta Retornou Algum Registro do Banco
    if ($stmt == null) {

      // Mensagem de erro Apresemtado quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
      header("Location: Index.html"); exit;
    }
    else {
      // Caso o Login Estiver Ok o Sistema Salva os dados encontrados na variável resultado
      $resultado = $stmt->fetchColumn();

      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado;


    
      // Redireciona o visitante para o Ambiente Restrito
      header("Location: CadastraPergunta.php"); exit;
  }
    
  ?>
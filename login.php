<?php
session_start();
    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('conexao.php');
        
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $nome = $_POST['nome'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        
        $resultado = $connect->query($sql);
        $row = $resultado->fetch_assoc();
        if(mysqli_num_rows($resultado) < 1){
            header("Location: Telalogin.php");

            print_r($resultado);
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            if($row['psicologo'] == 1){
                header("Location: pghenrique.php");
                
                print_r($resultado);
            }else{    
                header('Location: pgalunos.php');
                print_r($resultado);
            }

        }
    }

?>
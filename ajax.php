<?php
    include_once("connectBanco.php");
    session_start();

    if (isset($_GET['identificador'])  ) {

        $ident =  $_GET['identificador'];
        $val =  $_GET['valores'];
       
        if ($ident == "1" && isset($_GET['valores'])) {

            $usuario = explode(': :',$val);
            $query = "SELECT usuario,senha FROM tb_usuarios WHERE usuario = '$usuario[0]' AND senha = '".  md5($usuario[1]) . "'" ;
            $result = mysqli_query($link,$query);
            $row = mysqli_num_rows($result);


            
            if($row >0){
                $_SESSION['LOGAR'] = TRUE;
                echo "<div class=\"alert alert-success\">
                <strong>Sucesso!</strong> Você sera redirecionado.
              </div>";
            }else{
                echo "<div class=\"alert alert-danger alert-dismissible \" id=\"mensagem\" >
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Entrada negada!</strong> Usuario ou senha incorretos.
              </div>";

              $_SESSION['LOGAR'] = FALSE;


            }
        }
        elseif ($ident == "2") {
            include_once("Carregar.php");

        }

        elseif ($ident == "3") {
            $query = "DELETE FROM tb_produtos WHERE cod = ". $val;
            $result= mysqli_query($link,$query);
        }

        elseif ($ident == "4") {
            $usuario = explode(': :',$val);

            $query = "SELECT cod FROM tb_produtos WHERE cod= '$usuario[0]'";
            $result = mysqli_query($link,$query);
            $row =   mysqli_num_rows($result);
            if ($row === 0){
                
                $query = "INSERT INTO tb_produtos (cod,nome,preco,qnt) VALUES ('$usuario[0]','$usuario[1]','$usuario[2]','$usuario[3]')";
                $result= mysqli_query($link,$query);

                echo "<div class=\"alert alert-success alert-dismissible fade show\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Sucesso!</strong> Produto cadastrado com sucesso.
              </div>";



            }else{
                
                echo "  <div class=\"alert alert-danger alert-dismissible fade show\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong> Codigo ja inserido! </strong> Insira outro codigo para o produto.
              </div>";
            }



        }

        elseif ($ident == "5") {
            $usuario = explode(': :',$val);

            $query = "SELECT usuario FROM tb_usuarios WHERE usuario= '$usuario[1]'";

            $result = mysqli_query($link,$query);

            $row = mysqli_num_rows($result);


            if($row === 0){
                $query = "INSERT INTO tb_usuarios (usuario,senha,nome) VALUES ('$usuario[1]',md5($usuario[2]),'$usuario[0]')";
                $result = mysqli_query($link,$query);

                echo "<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Usuario cadastrado com sucesso!</strong> 
              </div>";


            }else{
                echo "  <div class=\"alert alert-danger alert-dismissible fade show\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong> Usuario ja cadastrado! </strong></div>";
            }

        }

        if ($ident == "6") {
            session_destroy();
        }














    }
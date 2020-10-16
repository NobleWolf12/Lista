<?php
  session_start();
?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    

    <!-- Bootstrap CSS -->
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Bem vindo</title>
  </head>
  <body>

    <div class="container pt-5 " >

    <div class="row d-flex  justify-content-center vh-100" >

    <div class="col-8 ">
        
        <form action="">
            <div class="form-group">
                <label for="eMail">Endereço de e-mail</label>
                <input type="email" class="form-control" id="eMail">
                
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label" for="checkbox">Lembra-me</label>
            </div>

            

            <button type="button" class="btn btn-primary" onclick="cadastraUsuario()">Cadastra usuario</button>
            <button type="button" class="btn btn-primary" onclick="coletor()">Entra</button>



            
        </form>
        <br>
        <div id="resposta"></div>



        <script>
          function coletor() {
          chamarFunction('resposta','1',document.getElementById("eMail").value + ": :" + document.getElementById("senha").value);
          setTimeout(function(){location.reload();}, 1000);
          }
          function cadastraUsuario() {
            window.location.href = "cadastraNovoUsuario.html";
          }


        </script>

        <?php

        if(isset($_SESSION['LOGAR'])){
          if ($_SESSION['LOGAR'] == true ) {

            header('location:lista.php');
          }
        }

        ?>



    </div>


    </div>

    </div>   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
<?php
session_start();

if ($_SESSION['LOGAR'] == false ) {

    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="ajax.js"></script>
    <script>
        function sair() {
            chamarFunction('','6','');
            location.reload();
        }
    </script>

    <title>Lista</title>
  </head>
  <body>
    <div class="container pt-5 d-flex justify-content-end" >
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-secondary" onclick="sair()">Sair</button>
                <button type="button" class="btn btn-secondary" onclick="cadastro()">Cadastra novo produto</button>
                <a href="#" onclick="chamarFunction('inserirItens','2','0')">
                    <img src="setas-de-recarga.png" height="50" width="50">
                </a>
            </div> 
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Preço </th>
                        <th>Quantidade</th>
                        <th>
                            Editar
                        </th>
                        <th>
                            Deletar
                        </th>
                      </tr>
                    </thead>
                    <tbody id="inserirItens">

                    </tbody>
                  </table>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        window.onload=chamarFunction('inserirItens','2','0');
        function Limpar() {
            document.getElementById('inserirItens').innerHTML ="";
            
        }
        function cadastro() {

            window.open('cadastra.html', 'janela', 'width=795, height=590, top=100, left=50, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no');

        }


     </script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
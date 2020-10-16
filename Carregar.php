<?php
    $query = "select * from tb_produtos";
    $result = mysqli_query($link,$query);

    foreach ($result as $key) {
        echo "<tr id=\"item".$key['cod'] . "\">";
        echo "<td>".$key['cod'] ."</td>";
        echo "<td>".$key['nome'] ."</td>";
        echo "<td>".$key['preco'] ."</td>";
        echo "<td>".$key['qnt'] ."</td>";
        echo "<td><a href=\"#\">";
        echo "<img src=\"editar.png\" height=\"20\" width=\"20\" id=\"" . $key['cod'] ."\">";
        echo "</a>";
        echo "</td>";
        echo "<td>";
        echo "<a href=\"#\"  onclick=\"Limpar();chamarFunction('item".$key['cod']."','3','".$key['cod']."');chamarFunction('inserirItens','2','0');\">";
        echo "<img src=\"remover.png\" height=\"20\" width=\"20\"id=\"" . $key['cod'] ."\">";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }
<?php

$lista_compras = [];


function adicionar_item(&$lista, $item) {
    //$lista[] adiciona o item ao final do array
    $lista[] = $item;
}

function remover_item(&$lista, $item) {
    
    //array_search retorna o índice do item ou false se não encontrado
    $index = array_search($item, $lista);
    if ($index !== false) {
       
       //unset remove o item do array
        unset($lista[$index]);
      
        //array_values array para manter a sequência correta
        $lista = array_values($lista);

    }
}
function exibir_lista($lista) {
    if (empty($lista)) {
        echo "A lista de compras está vazia.\n";
    } else {
        echo "Lista de Compras completa:\n<br>";
        foreach ($lista as $chaves =>$valor) {
          echo "lista [" . $chaves . "] = " . $valor . "<br>";
        }
    }
}

function contarItens($lista) {
    $quantidade =  count($lista);
    echo "<br>Quantidade de itens na lista: " . $quantidade . "\n";
}


// Adicionando itens à lista de compras
adicionar_item($lista_compras, "Verduras");
adicionar_item($lista_compras, "Frutas");
adicionar_item($lista_compras, "Leite");
adicionar_item($lista_compras, "Pães");
adicionar_item($lista_compras, "Arroz");
adicionar_item($lista_compras, "Feijão");
adicionar_item($lista_compras, "Carnes");
adicionar_item($lista_compras, "Ovos");
adicionar_item($lista_compras, "Massas");
adicionar_item($lista_compras, "Bebidas");
adicionar_item($lista_compras, "Balas");



exibir_lista($lista_compras);

 echo "<hr>";
remover_item($lista_compras, "Balas");
remover_item($lista_compras, "Bebidas");
echo "<br>Após remover Balas e Bebidas:<br>";

exibir_lista($lista_compras);

contarItens($lista_compras);

//http://localhost/listacompras-php/index.php
?>
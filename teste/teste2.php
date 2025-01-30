<?php

function adicionarCarro($marca, $nome, $potencia){
    if (empty($marca) || empty($nome) || empty($potencia)){
        throw new Exception("Todos os campos são obrigatórios");
    }

    $carro = [
        'marca' => $marca,
        'nome' => $nome, 
        'potência' => $potencia
    ];

    return $carro;
}

$carros = [];

function adicionarCarroLista(&$carros, $marca, $nome, $potencia){
    try {
        $novoCarro = adicionarCarro($marca, $nome, $potencia);
        $carros[] = $novoCarro;
        return true;
    } catch (Exception $e) {
        echo "Erro ao adicionar carro: " .$e->getMessage();
        return false;
    }
}

try {
    // Adiciona alguns carros
    adicionarCarroALista($carros, "Volkswagen", "Golf", "150");
    adicionarCarroALista($carros, "Ford", "Mustang", "450");
    adicionarCarroALista($carros, "Ferrari", "F40", "478");

    // Exibe todos os carros
    foreach ($carros as $carro) {
        echo "Marca: " . $carro['marca'] . "\n";
        echo "Nome: " . $carro['nome'] . "\n";
        echo "Potência: " . $carro['potência'] . "cv\n";
        echo "------------------------\n";
    }
} catch (Exception $e) {
    echo "Ocorreu um erro: " . $e->getMessage();
}

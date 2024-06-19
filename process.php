<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $data = $nome . "," . $email . "\n";
    $file = fopen('subscribers.csv', 'a');

    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo 'Dados salvos com sucesso!';
    } else {
        echo 'Erro ao salvar os dados.';
    }
}

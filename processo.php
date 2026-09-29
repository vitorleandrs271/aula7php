<?php
// Recebe os dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = (int)$_POST['idade'];

// Validação simples
if ($idade < 18) {
    echo "<p>Desculpe, apenas maiores de 18 anos podem se cadastrar.</p>";
} else {
    // Saída formatada
    echo "<h3>Dados recebidos:</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";

    // Depuração
    echo "<h4>Debug com var_dump</h4>";
    var_dump($_POST);
}
?>

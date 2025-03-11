<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST['email'];
    $horario = $_POST['horario'];
    $planos = $_POST['planos'];
    
    // Formata os dados para gravação
    $dados = "------------------------\n";
    $dados .= "Data: " . date("d/m/Y H:i:s") . "\n";
    $dados .= "Email: " . $email . "\n";
    $dados .= "Plano: " . $planos . "\n";
    $dados .= "Horário: " . $horario . "\n\n";
    
    // Grava no arquivo
    file_put_contents("cadastros.txt", $dados, FILE_APPEND);
    
    // Mostra mensagem de sucesso
    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<p><a href='index.html'>Voltar para página inicial</a></p>";
}
?>
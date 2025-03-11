<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h3>Mensagem Enviada</h3>";
    echo "<p><strong>Nome:</strong> $name</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $message</p>";
}
?>

<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";  // XAMPP usa 'localhost'
$username = "root";  // Usuário padrão do MySQL no XAMPP
$password = "";  // A senha padrão do MySQL no XAMPP é vazia
$dbname = "formulario_novo";  // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
<?php
// Incluindo o arquivo de conexão com o banco de dados
include 'db_connect.php';

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando dados do formulário
    $conjuge1 = $_POST['conjuge1'];
    $conjuge2 = $_POST['conjuge2'];
    $email = $_POST['email'];
    $email2 = $_POST['email2'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];

    // Preparando a consulta SQL
    $sql = "INSERT INTO inscrições (conjuge1, conjuge2, email, email2, phone1, phone2)
            VALUES ('$conjuge1', '$conjuge2', '$email', '$email2', '$phone1', '$phone2')";

    // Executando a consulta e verificando se foi bem-sucedidas
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }

    // Fechando a conexão
    $conn->close();
}
?>

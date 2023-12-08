<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Projetos de Consultoria</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        #content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .center-buttons {
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>

    <div id="content">
        <h1>Registro de Projetos de Consultoria</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $objetivo = $_POST['objetivo'];
            $escopo = $_POST['escopo'];
            $equipe = $_POST['equipe'];
            $prazos = $_POST['prazos'];
            $orcamento = $_POST['orcamento'];

            $conn = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

            if (!$conn) {
                die("Conexão falhou: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO projetos_consultoria (objetivo, escopo, equipe, prazos, orcamento) VALUES ('$objetivo', '$escopo', '$equipe', '$prazos', '$orcamento')";

            if (mysqli_query($conn, $sql)) {
                echo "Projeto registrado com sucesso!";
            } else {
                echo "Erro ao registrar projeto: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="objetivo">Objetivo do Projeto:</label>
            <input type="text" id="objetivo" name="objetivo" required>

            <label for="escopo">Escopo do Projeto:</label>
            <textarea id="escopo" name="escopo" rows="5" required></textarea>

            <label for="equipe">Equipe de Consultoria:</label>
            <input type="text" id="equipe" name="equipe" required>

            <label for="prazos">Prazos:</label>
            <input type="text" id="prazos" name="prazos" required>

            <label for="orcamento">Orçamento:</label>
            <input type="text" id="orcamento" name="orcamento" required>

            <input type="submit" value="Registrar Projeto">
        </form>

        <div class="center-buttons">
            <button onclick="location.href = 'index.php'">Voltar ao Gerenciador</button>
        </div>
    </div>

</body>

</html>

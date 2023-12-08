<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Sustentabilidade</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #menu {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        #menu a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        #menu a:hover {
            background-color: #555;
        }

        #body {
            margin-top: 80px;
        }

        #left {
            width: 20%;
            float: left;
            height: 80px;
            background-color: #f2f2f2;
        }

        #middle {
            width: 80%;
            float: left;
            padding: 20px;
        }

        .options {
            padding: 10px;
        }

        .formobjects {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .formobjects:hover {
            background-color: #45a049;
        }

        .center-buttons {
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="header">
        <h1>Sistema de Sustentabilidade</h1>
        <div id="menu">
            <a href="projetos.php">Registro de Projetos de Consultoria</a>
            <a href="coleta_analise.php">Coleta e Análise de Dados</a>
            <a href="relatorios.php">Criação de Relatórios de Sustentabilidade</a>
            <a href="tarefas.php">Planejamento e Acompanhamento de Tarefas</a>
            <a href="integracao_dados.php">Integração com Ferramentas de Análise de Dados</a>
            <a href="interacoes.php">Registro de Interações com Clientes</a>
            <a href="seguranca.php">Segurança de Dados</a>
            <a href="metricas.php">Métricas de Desempenho</a>
            <a href="integracao_sustentabilidade.php">Análise de Sustentabilidade</a>
        </div>
    </div>

    <div id="body">

        <div id="left" class="divisions"> </div>

        <div id="middle" class="divisions">
            <form method="post" action="insert.php">
                <table>
                    <h1>Clientes</h1>

                    <tr>
                        <td><label for="nome">Nome:</label></td>
                        <td><input id="nome" name="nome" autofocus required></td>
                    </tr>
                    <tr>
                        <td><label for="organizacao">Organização:</label></td>
                        <td><input id="organizacao" name="organizacao" required></td>
                    </tr>
                    <tr>
                        <td><label for="setor">Setor:</label></td>
                        <td><input id="setor" name="setor" required></td>
                    </tr>
                    <tr>
                        <td><label for="contato">Contato:</label></td>
                        <td><input id="contato" name="contato" required></td>
                    </tr>
                    <tr>
                        <td><label for="descricao">Descrição:</label></td>
                        <td><textarea id="descricao" name="descricao" rows="5" cols="40" required></textarea></td>
                    </tr>
                    <tr>
                        <td class="options center-buttons"><input type="submit" class="formobjects" value="Cadastrar"></td>
                        <td class="botoes center-buttons"><button onclick="location.href = 'select.php'">Ver Clientes</button></td>
                        <td class="botoes center-buttons"><button onclick="location.href = 'index.php'">Voltar ao Gerenciador</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>

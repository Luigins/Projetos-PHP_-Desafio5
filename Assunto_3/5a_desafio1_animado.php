<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #26336e 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-size: 1.5rem;
            color: #000000;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s ease;
            outline: none;
        }
        input:focus {
            border-color: #9f66ea;
        }
        button {
            width: 100%;
            background: #4ca0a6;
            color: white;
            border: none;
            padding: 14px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.1s ease;
        }
        button:hover {
            background: #c6c330;
        }
        button:active {
            transform: scale(0.98);
        }
        .alert {
            margin-top: 20px;
            padding: 14px 16px;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            text-align: center;
            line-height: 1.4;
        }
        .alert-success {
            background-color: #c6f6d5;
            color: #26692e;
            border: 1px solid #9ae6b4;
        }
        .alert-danger {
            background-color: #fed7d7;
            color: #742a2a;
            border: 1px solid #feb2b2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verificação de Acesso</h1>
        
        <form method="post" action="">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="form-group">
                <label for="ano_nascimento">Ano de nascimento</label>
                <input type="number" id="ano_nascimento" name="ano_nascimento" placeholder="Ex: 2004" min="1900" max="2026" required>
            </div>

            <button type="submit">Verificar Maioridade</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitiza o nome e converte o ano para inteiro
            $nome = htmlspecialchars($_POST['nome']);
            $ano_nascimento = (int)$_POST['ano_nascimento'];

            // Calcula a idade
            $idade = date('Y') - $ano_nascimento;

            // Renderiza o alerta conforme a idade
            if ($idade >= 18) {
                echo "<div class='alert alert-success'>Acesso permitido, <strong>$nome</strong>!<br>Idade calculada: $idade anos.</div>";

                // Salva no log TXT
                $arquivo = fopen('log_acessos.txt', 'a');
                $linha = "Nome: $nome, Idade: $idade\n";
                fwrite($arquivo, $linha);
                fclose($arquivo);
            } else {
                echo "<div class='alert alert-danger'>Acesso negado, <strong>$nome</strong>!<br>Idade calculada: $idade anos.</div>";
            }

            // Atualiza a página após 5 segundos
            echo '<meta http-equiv="refresh" content="5;url='.$_SERVER['PHP_SELF'].'">';
        }
        ?>
    </div>
</body>
</html>
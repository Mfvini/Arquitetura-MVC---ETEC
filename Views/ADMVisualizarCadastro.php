<?php
// Captura o ID que veio lá do botão da lista
$idUsuarioSelecionado = $_GET['id'] ?? null;

// Criamos uma lista simulada para a página saber quem é quem pelo ID
$bancoSimulado = [
    1 => ['nome' => 'João Silva', 'cpf' => '111.111.111-11', 'email' => 'joao@email.com', 'nascimento' => '1990-05-15', 'facul' => 'Ciência da Computação', 'empresa' => 'Empresa Alfa'],
    2 => ['nome' => 'Maria Oliveira', 'cpf' => '222.222.222-22', 'email' => 'maria@email.com', 'nascimento' => '1995-08-22', 'facul' => 'Análise de Sistemas', 'empresa' => 'Empresa Beta'],
    3 => ['nome' => 'Carlos Santos', 'cpf' => '333.333.333-33', 'email' => 'carlos@email.com', 'nascimento' => '1988-03-10', 'facul' => 'Engenharia de Software', 'empresa' => 'Empresa Gamma'],
];

// Se o ID existir na nossa lista, pegamos os dados dele. Se não, usamos o padrão Paulo.
if (array_key_exists($idUsuarioSelecionado, $bancoSimulado)) {
    $nomeUsuario = $bancoSimulado[$idUsuarioSelecionado]['nome'];
    $cpfUsuario = $bancoSimulado[$idUsuarioSelecionado]['cpf'];
    $emailUsuario = $bancoSimulado[$idUsuarioSelecionado]['email'];
    $dataNascimento = $bancoSimulado[$idUsuarioSelecionado]['nascimento'];
    $formacaoDesc = $bancoSimulado[$idUsuarioSelecionado]['facul'];
    $empresaDesc = $bancoSimulado[$idUsuarioSelecionado]['empresa'];
} else {
    $nomeUsuario = "Paulo";
    $cpfUsuario = "1";
    $emailUsuario = "p";
    $dataNascimento = "1988-03-10";
    $formacaoDesc = "Exemplo de Formação Acadêmica Cadastrada";
    $empresaDesc = "Empresa X";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title><?php echo $nomeUsuario; ?> - Currículo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #fff; }
        .container { max-width: 900px; margin: 0 auto; }
        .header-title { background-color: #00bcd4; color: white; text-align: center; padding: 12px; font-size: 20px; border-radius: 4px; margin-bottom: 25px; }
        .info-box { background-color: #00bcd4; color: white; padding: 10px 15px; margin-bottom: 10px; border-radius: 6px; font-weight: bold; font-size: 16px; }
        .secao-titulo { color: #00bcd4; text-align: center; margin-top: 35px; margin-bottom: 15px; font-size: 22px; }
        .tabela-dados { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .tabela-dados th { background-color: #1e88e5; color: white; padding: 10px; text-align: left; font-size: 14px; }
        .tabela-dados td { padding: 10px; border: 1px solid #e0e0e0; font-size: 14px; background-color: #f5f5f5; }
        .tabela-dados tr:nth-child(even) td { background-color: #eeeeee; }
        .btn-voltar { display: inline-block; margin-bottom: 15px; text-decoration: none; color: #1e88e5; font-weight: bold; }
    </style>
</head>

<body>

    <div class="container">
        <a href="ADMListarCadastrados.php" class="btn-voltar">⬅ Voltar para a lista</a>

        <div class="header-title"><?php echo $nomeUsuario; ?> Curriculo</div>

        <div class="info-box">NOME: <?php echo $nomeUsuario; ?></div>
        <div class="info-box">CPF: <?php echo $cpfUsuario; ?></div>
        <div class="info-box">EMAIL: <?php echo $emailUsuario; ?></div>
        <div class="info-box">DATA DE NASCIMENTO: <?php echo $dataNascimento; ?></div>

        <div class="secao-titulo">Formação Acadêmica</div>
        <table class="tabela-dados">
            <thead>
                <tr>
                    <th style="width: 15%;">Início</th>
                    <th style="width: 15%;">Fim</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2020-01-01</td>
                    <td>2023-12-31</td>
                    <td><?php echo $formacaoDesc; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="secao-titulo">Experiência Profissional</div>
        <table class="tabela-dados">
            <thead>
                <tr>
                    <th style="width: 15%;">Início</th>
                    <th style="width: 15%;">Fim</th>
                    <th style="width: 25%;">Empresa</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-01-15</td>
                    <td>2026-02-10</td>
                    <td><?php echo $empresaDesc; ?></td>
                    <td>Atividades com foco em manutenção e evolução do sistema da camada Model.</td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>
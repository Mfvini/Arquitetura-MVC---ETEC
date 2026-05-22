<?php
// Sua lista de usuários (depois você pode trocar isso por uma busca no banco)
$usuarios = [
    ['idusuario' => 1, 'nome' => 'João Silva'],
    ['idusuario' => 2, 'nome' => 'Maria Oliveira'],
    ['idusuario' => 3, 'nome' => 'Carlos Santos'],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
        /* Estilos básicos para o cabeçalho e tabela ficarem idênticos à imagem 12 */
        .header-title { background-color: #00bcd4; color: white; text-align: center; padding: 15px; font-size: 24px; margin-bottom: 20px; }
        .tabela-listagem { width: 100%; border-collapse: collapse; }
        .tabela-listagem th { background-color: #1e88e5; color: white; padding: 12px; text-align: left; }
        .tabela-listagem td { padding: 12px; border-bottom: 1px solid #e0e0e0; }
        .btn-visualizar { text-decoration: none; background-color: #1e88e5; padding: 5px 15px; color: white; border-radius: 4px; }
    </style>
</head>
<body>

    <div class="header-title">Lista de Usuários Cadastrados no Sistema</div>

    <table class="tabela-listagem">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th style="text-align: center;">Visualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['idusuario']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td align="center">
                        <a href="ADMVisualizarCadastro.php?id=<?php echo $usuario['idusuario']; ?>" class="btn-visualizar">
                            🖨️
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
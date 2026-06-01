<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta httpequiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <title>Enlatados Juarez</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
        .w3-sidebar {
            width: 120px;
        }

        /*Define Fonte para todas as tagslistadas abaixo*/
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">
    <?php
    include_once '../Controller/FormacaoAcadController.php';
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue ">
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-textlight-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-greyw3-hover-textcyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-greyw3-hover-textcyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>
    </nav>
    <div class="w3-padding-large" id="main">
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <?php
                    $fCon = new FormacaoAcadController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '<td style="width: 5%;">
                        <form action="/Controller/Navegacao.php" method="post">
                            <input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
                            <button name="btnExcluirFA" class="w3-button w3-block w3-blue w3-cell w3-round-large">
                            <i class="fa fa-user-times"></i> </button></td>
                        </form>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
</body>

</html>
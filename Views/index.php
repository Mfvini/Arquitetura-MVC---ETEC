<head>
    <style>
        /* Estilo Geral da Seção */
        #secao-outras-formacoes {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        #secao-outras-formacoes h3 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        /* Estilo do Formulário */
        #formOutrasFormacoes {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: flex-end;
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        #formOutrasFormacoes label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        #formOutrasFormacoes input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Estilo do Botão Adicionar */
        #btnAddOF {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
        }

        #btnAddOF:hover {
            background-color: #218838;
        }

        /* Estilo da Tabela */
        #tabelaOutrasFormacoes {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }

        #tabelaOutrasFormacoes th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            text-align: left;
        }

        #tabelaOutrasFormacoes td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        #tabelaOutrasFormacoes tr:hover {
            background-color: #f1f1f1;
        }

        /* Botão Apagar */
        .btnRemover {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: #dc3545;
            transition: transform 0.2s;
        }

        .btnRemover:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<div id="secao-outras-formacoes">
    <h3>Outras Formações</h3>

    <form id="formOutrasFormacoes" method="POST">
        <div class="form-group">
            <label for="txtInicioOF">Início:</label>
            <input type="date" id="txtInicioOF" name="txtInicioOF">
        </div>

        <div class="form-group">
            <label for="txtFimOF">Fim:</label>
            <input type="date" id="txtFimOF" name="txtFimOF">
        </div>

        <div class="form-group">
            <label for="txtDescEP">Descrição:</label>
            <input type="text" id="txtDescEP" name="txtDescEP" placeholder="Ex: Curso PHP">
        </div>

        <button type="submit" id="btnAddOF">Adicionar</button>
    </form>

    <table id="tabelaOutrasFormacoes">
        <thead>
            <tr>
                <th>Início</th>
                <th>Fim</th>
                <th>Descrição</th>
                <th style="text-align:center">Apagar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2024-01-01</td>
                <td>2024-05-01</td>
                <td>Desenvolvimento Web</td>
                <td align="center"><button class="btnRemover">🗑️</button></td>
            </tr>
        </tbody>
    </table>
</div>
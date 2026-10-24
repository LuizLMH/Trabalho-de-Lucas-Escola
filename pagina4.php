<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina4</title>
    <link rel="stylesheet" href="arquivo.css">
</head>

<body>
    <div class="titulob">
        <h1 id="tb">Sistema</h1>
        <h1 id="to">Acadêmico</h1>
    </div>
    <div class="pages4">
        <a href="pagina2.php" class="p2">Dashboard</a>
        <a href="pagina3.php" class="p3">Cadastrar Alunos</a>
        <a href="pagina4.php" class="p4">Visualizar Alunos</a>
        <a href="pagina6.php" class="p6">Cadastrar Turmas</a>
        <a href="pagina7.php" class="p7">Visualizar Turmas</a>
        <a href="index.php" id="sair">sair</a>
    </div>
    <h1>Visualizar Aluno</h1>
    <p id="t">Lista de alunos cadastrados no sistema</p>
    <div class="pesquisa2">
        <form action="pagina4.html" method="get">
            <input type="search" id="busca" name="achar" placeholder="Pesquisar Aluno...">
            <input type="button" value="Novo Aluno">
        </form>
    </div>
    <table>
        <tr>
            <th>Nome </th>
            <th>CPF</th>
            <th>Data nasc.</th>
            <th>Turma </th>
            <th>Status </th>
            <th>Ações </th>
        </tr>
        <tr>
            <td>João Pedro Oliveira</td>
            <td>123.456.789-10</td>
            <td>14/03/2007</td>
            <td>Desenvolvimento Web</td>
            <td id="ativo">Ativo</td>
            <td>
                <button onclick="window.location.href='veraluno 5.html'" id="mais">
                    Ver mais
                </button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
        <tr>
            <td>Maria Eduarda Santos</td>
            <td>234.567890-11</td>
            <td>22/06/2006</td>
            <td>Informática Básica</td>
            <td id="ativo">Ativo</td>
            <td>
                <button type="button" id="mais">Ver Mais</button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
        <tr>
            <td>Lucas ferreira Lima</td>
            <td>345.678.901-12</td>
            <td>11/09/2005</td>
            <td>Banco de Dados</td>
            <td id="ativo">Ativo</td>
            <td>
                <button type="button" id="mais">Ver Mais</button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
        <tr>
            <td>Ana Clara Souza</td>
            <td>456.678.012-13</td>
            <td>03/12/2008</td>
            <td>Lógica de Programação</td>
            <td id="inativo">Inativo</td>
            <td>
                <button type="button" id="mais">Ver Mais</button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
        <tr>
            <td>Gabriel Henrique Costa</td>
            <td>567.890.123-14</td>
            <td>09/01/2007</td>
            <td>Desenvolvimento Web</td>
            <td id="ativo">Ativo</td>
            <td>
                <button type="button" id="mais">Ver Mais</button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
        <tr>
            <td>Juliana Martins Rocha</td>
            <td>678.901.234-15</td>
            <td>24/04/2006 </td>
            <td>Banco de Dados </td>
            <td id="ativo">Ativo</td>
            <td>
                <button type="button" id="mais">Ver Mais</button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
        <tr>
            <td>Pedro Augusto Silva</td>
            <td>789.012.345-16</td>
            <td>17/08/2005</td>
            <td>Informática Básica</td>
            <td id="ativo">Ativo</td>
            <td>
                <button type="button" id="mais">Ver Mais</button>
                <button type="button" id="edit">Editar</button>
                <button type="button" id="zero">Excluir</button>
            </td>
        </tr>
    </table>
</body>

</html>
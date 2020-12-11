<?php
include_once "app/painelAdm/helpers/conexao.php";

function consultaSQL($tabela, $idtabela = null, $id_valor = null)
{
    if ($idtabela) {

        $parametros = array(
            ':' . $idtabela => $idtabela
        );
        $consulta = new Conexao();
        $resConsulta = $consulta->consultarBanco('SELECT * FROM ' . $tabela . ' WHERE ' . $idtabela . ' = ' . $id_valor, $parametros);
        return $resConsulta;
    }
}






function verificaSeLogado()
{

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);


    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);

    if (count($resultadoConsulta) > 0) {
        $senha_bd = $resultadoConsulta[0]['senha'];

        if (password_verify($senha, $senha_bd)) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['img_usuario'] = $resultadoConsulta[0]['img'];
            return true;
        } else {
            $erro = 'Usuário e/ou senha inválidos';

            //incluir a pagina de login aqui:
            include_once "app/painelAdm/paginas/login.php";
        }
    } else {
        $erro = 'Usuário e/ou senha inválidos';

        //incluir a pagina de login aqui:
        include_once "app/painelAdm/paginas/login.php";
    }
}

function inserirprofi()
{

    if ($_POST) {

        //Pegando as variáveis via post
        $medico = trim($_POST['nomemedico']);
        $rg = trim($_POST['rg']);
        $cpf = trim($_POST['cpf']);
        $especialidade = trim($_POST['especialidade']);

        //Validar as variáveis e encriptar a senha
        $parametros = array(

            ':nomemedico' => $medico,
            ':rg' => $rg,
            ':cpf' => $cpf,
            ':especialidade' => $especialidade

        );

        $resultDados = new Conexao();
        $resultDados->intervencaoNoBanco('INSERT INTO profissionais(nomemedico, rg, cpf, especialidade) 
         VALUES (:nomemedico, :rg, :cpf, :especialidade)', $parametros);

        //incluir a pagina que será exibida após cadastrar um usuario aqui:

        include_once "app/painelAdm/paginas/profissionais.php";
    } else {
        include_once "app/painelAdm/paginas/cadastrodemedicos.php";
        // header("Location: ?pg=profissionais");
    }
}


function inserirpaciente()
{

    if ($_POST) {

        //Pegando as variáveis via post
        $nome = trim($_POST['nome']);
        $rg = trim($_POST['rg']);
        $cpf = trim($_POST['cpf']);
        $medico = trim($_POST['medico']);
        $data1 = trim($_POST['data1']);

        //Validar as variáveis e encriptar a senha
        $parametros = array(

            ':nome' => $nome,
            ':rg' => $rg,
            ':cpf' => $cpf,
            ':medico' => $medico,
            ':data1' => $data1

        );

        $resultDados = new Conexao();
        $resultDados->intervencaoNoBanco('INSERT INTO pacientes(nome, rg, cpf,medico,data1) 
    VALUES (:nome, :rg, :cpf,:medico,:data1)', $parametros);

        //incluir a pagina que será exibida após cadastrar um usuario aqui:

        include_once "app/painelAdm/paginas/pacientes.php";
    } else {
        include_once "app/painelAdm/paginas/marcarconsulta.php";
        // header("Location: ?pg=profissionais");
    }
}

function inserirespecialidade()
{

    if ($_POST) {

        //Pegando as variáveis via post
        $especialidade = trim($_POST['especialidade']);

        //Validar as variáveis e encriptar a senha
        $parametros = array(

            ':especialidade' => $especialidade

        );

        $resultDados = new Conexao();
        $resultDados->intervencaoNoBanco('INSERT INTO especialidades(especialidade) 
    VALUES (:especialidade)', $parametros);

        //incluir a pagina que será exibida após cadastrar um usuario aqui:

        include_once "app/painelAdm/paginas/cadastrodeespecialidades.php";
    } else {
        include_once "app/painelAdm/paginas/cadastrodeespecialidades.php";
        // header("Location: ?pg=profissionais");
    }
}







// function inserirProduto()
// {

//     //Pegando as variáveis via post
//     $nome = trim($_POST['nome']);
//     $desc = trim($_POST['desc']);
//     $preco = trim($_POST['preco']);

//     //Validar as variáveis e encriptar a senha
//     $parametros = array(
//         ':nome' => $nome,
//         ':descricao' => $desc,
//         ':preco' => $preco
//     );

//     $resultDados = new Conexao();
//     $resultDados->intervencaoNoBanco('INSERT INTO produtos(nome, descricao, preco) VALUES (:nome,:descricao ,:preco)', $parametros);

//     //incluir a pagina que será exibida após cadastrar um produto aqui:
//     include_once "app/painelAdm/paginas/produtos.php";
// }

function atualizarpacientes()
{

    //pegando variaveis via POST
    $id_paciente = trim($_POST['id_paciente']);
    $nome = trim($_POST['nome']);
    $rg = trim($_POST['rg']);
    $cpf = trim($_POST['cpf']);
    $medico = trim($_POST['medico']);


    //validando as variaveis
    $parametros = array(
        ':id_paciente' => $id_paciente,
        ':nome' => $nome,
        ':rg' => $rg,
        ':cpf' => $cpf,
        ':medico' => $medico

    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE pacientes SET nome = :nome, rg = :rg, cpf = :cpf,medico = :medico   WHERE id_paciente = :id_paciente', $parametros);

    //incluir a pagina que será exibida quando um usuario for atualizado aqui:
    include_once "app/painelAdm/paginas/pacientes.php";
}



function atualizarprofissionais()
{

    //pegando variaveis via POST
    $id_profi = trim($_POST['id_profi']);
    $nomemedico = trim($_POST['nomemedico']);
    $rg = trim($_POST['rg']);
    $cpf = trim($_POST['cpf']);
    $especialidade = trim($_POST['especialidade']);


    //validando as variaveis
    $parametros = array(
        ':id_profi' => $id_profi,
        ':nomemedico' => $nomemedico,
        ':rg' => $rg,
        ':cpf' => $cpf,
        ':especialidade' => $especialidade

    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE profissionais SET nomemedico = :nomemedico, rg = :rg, cpf = :cpf,especialidade = :especialidade WHERE id_profi = :id_profi', $parametros);

    //incluir a pagina que será exibida quando um usuario for atualizado aqui:
    include_once "app/painelAdm/paginas/profissionais.php";
}

// function visualizarUsuario($id)
// {
//     if ($id) {
//         $parametros = array(':id_usuario' => $_GET['id']);

//         $resultUsuarioConsulta = new Conexao();
//         $dados = $resultUsuarioConsulta->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);

//         if (count($dados) > 0) {
//             return $dados;
//         } else {

//             //?pg vai receber o nome para o qual será redirecionado caso não encontre um usuario para visualizar:
//             Header('Location: ?pg=usuarios-listar');
//         }
//     }

// }


function visualizarMensagem()
{
    $idUsuario = $_GET['id'];

    $parametros = array(
        ':visualizou' => 1,
        ':id_usuario' => $idUsuario
    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE contato SET visualizou = :visualizou WHERE id_usuario = :id_usuario', $parametros);
}

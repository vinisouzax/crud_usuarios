<!DOCTYPE html>
<html>
<head>
    <title>Ferramenta de Avaliação de Acessibilidade de Aplicações Móveis</title>
    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--CSS da Index-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1>CRUD de Usuários</h1>
    <h3>Usuários</h3>

    <button
        id="btnAddUser" 
        data-toggle="modal" 
        data-target="#modalUser" 
        class="btn btn-block btn-login">
        Adicionar Usuário
    </button>

    <div class="panel-group only-padding" role="tablist">
        <div class="panel panel-default" id="usersList">

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modalUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalUserLabel">Usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body" id="contentUser">
                <form action="javascript:void(0)" id="formUser">
                    <input type="hidden" class="form-control" name="id" id="id"><br><br>
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name"><br><br>
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email"><br><br>
                    <label for="birthday">Data de Nascimento</label>
                    <input type="text" class="form-control" name="birthday" id="birthday"><br><br>
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" id="password"><br><br>
                    <input type="submit" value="Salvar" id="btnSubmit" class="btn btn-block btn-login">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        </div>
    </div>

    <script src="{{ asset('/js/user.js') }}"></script>
</body>
</html>
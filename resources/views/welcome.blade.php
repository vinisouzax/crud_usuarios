<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Usuários</title>
    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <!-- Tema opcional -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">

    <!--Jquery-->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Mascaras Jquery -->
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>

    <!--CSS da Index-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
</head>
<body>
    <h1>CRUD de Usuários</h1>
    <h3>Usuários</h3>

    <button
        id="btnAddUser" 
        data-toggle="modal" 
        data-target="#modalUser" 
        class="btn btn-block btn-login"
        onclick="clearModal()">
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
                    <input type="hidden" class="form-control" name="id" id="id" /><br><br>
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" required /><br><br>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required /><br><br>
                    <label for="birthday">Data de Nascimento</label>
                    <input type="text" class="form-control" name="birthday" id="birthday" /><br><br>
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" minlength="8" required /><br><br>
                    <button type="submit" id="btnSubmit" class="btn btn-block btn-login">Salvar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        </div>
    </div>

    <script src="{{ asset('/js/user.js') }}"></script>
</body>
</html>
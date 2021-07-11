$(document).ready(function () {
    create_table();

    $("#birthday").mask("99/99/9999");

    $("#btnSubmit").on("click", function (event) {

        event.preventDefault();

        $("#btnSubmit").prop("disabled", true);

        let id = $('#id').val();

        let data = {
            name: $('#name').val(),
            email: $('#email').val(),
            birthday: $('#birthday').val(),
            password: $('#password').val()
        }
        
        let url = "api/users/store";
        let type = "POST";

        if(id){
            url = `api/users/update/${id}`;
            type = "PUT";
        } 

        $.ajax({
            type: type,
            url: url,
            data: JSON.stringify(data),
            dataType: 'json',
            contentType: 'application/json',
            success: function (res) {
                alert("Salvo com sucesso");
                create_table();
                $("#btnSubmit").prop("disabled", false);
                $('#modalUser').modal('hide');
            },
            error: function (e) {
                alert("Erro ao realizar operação de salvamento");
                $("#btnSubmit").prop("disabled", false);
            }
        });
    });
});

function create_table(){

    let table = "";

    $("#usersList").html("");

    $.ajax({
        url: "api/users/index",
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            table += `<table class="tableL">  
            <thead>
                <tr>
                    <th class="row-1 row-2L">Nome</th>
                    <th class="row-2 row-2L">Email</th>
                    <th class="row-3 row-2L">Data de Nascimento</th>
                    <th class="row-4 row-2L">Editar</th>
                    <th class="row-5 row-2L">Excluir</th>
                </tr>
            </thead>
            <tbody>`;

            res.response.forEach(r => {

                table += `<tr>
                    <td>${r.name}</td>
                    <td>${r.email}</td>
                    <td>${r.birthday}</td>
                    <td><button type="button" 
                        class="btn btn-primary" 
                        data-toggle="modal" 
                        data-target="#modalUser" 
                        onclick='setUser(${r.id})'>Editar</button>
                    </td>
                    <td><button type="button" 
                        class="btn btn-danger" 
                        onclick='delUser(${r.id})'>Excluir</button>
                    </td>
                </tr>`;        
            });

            table += `</tbody></table>
                    <div class="panel-footer color-footer"></div>
                </div>`;

            $("#usersList").html(table);
        }
    });
}

function setUser(id){
    $.ajax({
        url: `api/users/show/${id}`,
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            $('#id').val(res.response.id);
            $('#name').val(res.response.name);
            $('#email').val(res.response.email);
            $('#birthday').val(res.response.birthday);
            $('#password').val("");
        }
    });
}

function delUser(id){
    if (window.confirm("Deseja excluir usuário?")) {
        $.ajax({
            url: `api/users/delete/${id}`,
            type: 'DELETE',
            dataType: 'json',
            success: function(res) {
                alert("Usuário excluído com sucesso");
                create_table();
            },
            error: function (e) {
                alert("Erro ao excluir usuário");
            }
        });
    }
}

function clearModal(){
    $('#id').val("");
    $('#name').val("");
    $('#email').val("");
    $('#birthday').val("");
    $('#password').val("");
}
$(document).ready(function () {
    create_table();

    $("#btnSubmit").click(function (event) {

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

        if(id) url = `api/users/update/${id}`;

        $.ajax({
            type: "POST",
            url: url,
            data: JSON.stringify(data),
            dataType: 'json',
            contentType: 'application/json',
            success: function (res) {
                console.log(res);
                create_table();
                $("#btnSubmit").prop("disabled", false);
            },
            error: function (e) {
                console.log(e);
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
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>`;        
            });

            table += `</tbody></table>
                    <div class="panel-footer color-footer"></div>
                </div>`;

            $("#usersList").html(table);
        }
    });
}
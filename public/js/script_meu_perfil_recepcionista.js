$(document).ready(function () {
    // Requisição AJAX ao carregar a página para obter e preencher os dados do perfil
    $.ajax({
        url: '/painel-recepcionista/obter-perfil',
        type: 'GET',
        success: function (response) {
            console.log(response);
            // Preenche os campos do formulário com os dados recebidos
            $('#nome').val(response.recepcionista.nome_completo).attr('readonly', true);
            $('#sexo').val(response.recepcionista.sexo).attr('disabled', true);
            $('#cpf').val(response.recepcionista.cpf).attr('readonly', true);
            $('#rg').val(response.recepcionista.rg).attr('readonly', true);
            $('#data-nasc').val(response.recepcionista.data_nascimento).attr('readonly', true);
            $('#email').val(response.recepcionista.email).attr('readonly', true);
            $('#tel').val(response.recepcionista.telefone).attr('readonly', true);
            $('#rua').val(response.recepcionista.rua).attr('readonly', true);
            $('#num').val(response.recepcionista.numero).attr('readonly', true);
            $('#complemento').val(response.recepcionista.complemento).attr('readonly', true);
            $('#cidade').val(response.recepcionista.cidade).attr('readonly', true);
            $('#estado').val(response.recepcionista.estado).attr('disabled', true);
            $('#cep').val(response.recepcionista.cep).attr('readonly', true);
            $('#nomesobrenome').text(response.nomeSobrenome);
            if (response.foto) {
                $('#fotoPerfil').attr('src', response.foto);
            }
        },
        error: function () {
            alert('Erro na requisição AJAX.');
        }
    });

    // Manipulador de evento para o botão de edição
    $('#btnEditarMeuPerfil').click(function () {
        // Remove o atributo readonly e disabled dos campos
        $('#nome').removeAttr('readonly');
        $('#sexo').removeAttr('disabled');
        $('#cpf').removeAttr('readonly');
        $('#rg').removeAttr('readonly');
        $('#data-nasc').removeAttr('readonly');
        $('#email').removeAttr('readonly');
        $('#tel').removeAttr('readonly');
        $('#rua').removeAttr('readonly');
        $('#num').removeAttr('readonly');
        $('#complemento').removeAttr('readonly');
        $('#cidade').removeAttr('readonly');
        $('#estado').removeAttr('disabled');
        $('#cep').removeAttr('readonly');

        // Mostra o input de arquivo e o botão de salvar
        $('#fileInput').show(); // Mostra o input de arquivo
        $('#btnSalvarMeuPerfil').show(); // Mostra o botão de salvar perfil

        // Permite que a imagem de perfil seja clicada para abrir o input de arquivo
        $('#fotoPerfil').addClass('clickable');
    });

    // Manipulador de evento para o clique na imagem de perfil
    $('#fotoPerfil').click(function () {
        if ($(this).hasClass('clickable')) {
            $('#fileInput').click(); // Aciona o clique no input de arquivo
        }
    });

    // Manipulador de evento para a seleção de um novo arquivo
    $('#fileInput').change(function () {
        var fileInput = $('#fileInput')[0];
        var file = fileInput.files[0];

        if (file) {
            var reader = new FileReader();

            // Quando o arquivo for lido, atualiza a imagem na tela
            reader.onload = function (e) {
                $('#fotoPerfil').attr('src', e.target.result);
            };

            reader.readAsDataURL(file); // Lê o arquivo como uma URL de dados
        } else {
            alert('Por favor, selecione uma imagem.');
        }
    });

    $('#formUpload').attr('action', '/painel-recepcionista/salvar-perfil')

    // Manipulador de evento para o botão de salvar perfil
    $('#btnSalvarMeuPerfil').click(function () {
        $.ajax({
            url: $('#formUpload').attr('action'),
            type: 'POST',
            data: new FormData($('#formUpload')[0]),
            contentType: false,
            processData: false,
            error: function () {
                alert('Erro na requisição AJAX.');
            }
        });
    });
});

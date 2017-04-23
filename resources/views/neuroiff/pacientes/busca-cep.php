<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca de endereço</title>
</head>
<body>

<form action="">

    <label for="cep">CEP:</label>
    <input type="text" name="cep" value="" size="">

    <label for="street">Rua</label>
    <input type="text" name="street" value="" size="">

    <label for="neighborhood">Bairro</label>
    <input type="text" name="neighborhood" value="" size="">

    <label for="city">Cidade</label>
    <input type="text" name="city" value="" size="">

    <label for="uf">Estado</label>
    <input type="text" name="uf" value="" size="">



</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>

<script>


    $(function () {
        $('input[name="cep"]').blur(function (e) {
            var cep = $('input[name="cep"]').val() || ''
            if (!cep){
                return
            }
            var url = 'http://viacep.com.br/ws/' + cep + '/json'
            $.getJSON(url, function (data) {
                if ("error" in data){
                    return
                }

                $('input[name="street"]').val(data.logradouro)
                $('input[name="neighborhood"]').val(data.bairro)
                $('input[name="city"]').val(data.localidade)
                $('input[name="uf"]').val(data.uf)

            })

        })
    })()


</script>

</body>
</html>
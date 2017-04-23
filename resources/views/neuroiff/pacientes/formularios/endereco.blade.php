<h1>Endereço</h1>

<!--

 +"resultado": "1"
    +"resultado_txt": "sucesso - cep completo"
    +"uf": "SP"
    +"cidade": "Santa Bárbara D'Oeste"
    +"bairro": "Jardim Santa Rita de Cássia"
    +"tipo_logradouro": "Rua"
    +"logradouro": "João Ribeiro"

 -->

<hr>
<h3>{{$results->tipo_logradouro}}: </h3><h3>{{$results->logradouro}}</h3> </br>
<h3>{{$results->bairro}}</h3> <h3>{{$results->cidade}}</h3> <h3>{{$results->uf}}</h3>

<hr>

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

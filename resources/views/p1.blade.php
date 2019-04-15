@include('cabecalho')
{{$Titulo}}

<div class="container mt-3">
    <h2>Selecione a Marca do seu Veiculo:</h2>
    <p>Clique no Menu de Seleção:</p>
    <form action="/action_page.php">
      <select name="cars" class="custom-select mb-3">
        <option selected>Menu de Seleção</option>
        <option value="volvo">Volvo</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
        <option value="audi">Ferrari</option>
      </select>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

@include('rodape')

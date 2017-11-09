<!--
  O código neste arquivo é responsável por construir formulário HTML para que o usuário selecione dois arquivos para Upload,ou seja, arquivos que serão transferidos para o servidor que hospeda a aplicação. O primeiro arquivo deve ser CSV (arquivo texto com separador de dados, ponto-e-vírgula neste caso) com o conteúdo apresentado a seguir. O segundo arquivo pode ser um qualquer, seus dados não serão tratados pelo código PHP executado no servidor. O código PHP executado no servidor incluirá os dados do 1o arquivo em tabela do MYSQL (criar banco de dados "ESCOLA" e tabela "ALUNO" usando comando a seguir).
  O elemento <input type="file" ... /> implementa interface para o usuário selecionar o arquivo. 

  Conteúdo 1o Arquivo
  ===================
  ID;NOME;ENDERECO
  1;JOAO;RUA X
  2;MARIA;RUA Y
  3;JOSE;RUA W
  4;CARLOS;RUA Z

  Criação de tabela
  =================
  CREATE TABLE ALUNO(ID INT NOT NULL PRIMARY KEY, NOME VARCHAR(100) NOT NULL, ENDERECO VARCHAR(100) NOT NULL)
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
</head>
<body>
  <div class="container">
    <h3 class="text-center">Formulário Upload</h3>
    <form method="post" enctype="multipart/form-data" action="GravaDados.php">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for ="email">Email</label>
          <input class="form-control" type="email" name="email" id="email" />
        </div>
        <div class="form-group col-md-4">
          <label for ="data">Data</label>
          <input class="form-control" type="date" name="date" id="data" />
        </div>
        <div class="form-group col-md-4">
          <label for ="idade">Idade</label>
          <input class="form-control" type="number" name="number" id="idade" />
        </div>
      </div>
      <div class="form-group">
        <label for ="text">Texto</label>
        <input class="form-control" type="text" name="text" id="text" />
      </div>
      <div class="form-group">
        <label for ="text2">Texto2</label>
        <textarea class="form-control" type="text" name="text2" id="text2" rows="5" /></textarea>
      </div>
      <div class="row">
        <div class="form-group col-md-8">
          <label for ="select">Select</label>
          <select class="form-control" id="select" name="select">
            <option>----</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select >
        </div>
        <div class="form-group col-md-4">
          <legend class="col-form-legend col-sm-2">Sexo</legend>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="option1"> M
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="option1"> F
            </label>
          </div>
        </div>
      </div><br/>



      <label for="idArq1">Arquivo 1</label>
      <input class="form-control-file" type="file" name="arq1" value="" id="idArq1"/>
      <br/>
      <input class="btn btn-primary text-center" type="submit" name="cmd" value="Carregar" />
    </form>

  </div>
  <script>
      function initMap() {
        var uluru = {lat: -24.0050237, lng: -46.4145247};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</body>
</html>
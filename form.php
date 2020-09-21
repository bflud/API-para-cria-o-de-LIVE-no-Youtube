<html>
	<head>
		<title>Cadastrar Live</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		
	</head>
	<body>
	<div id= "form">
	<form action="create_broadcast.php" method="post">
	  <div class="input-groupcol-5 offset-3">
	  <div class="form-group">
		<label for="formGroupExampleInput">Nome da Live</label>
		<input name="name" type="text" class="form-control" id="formGroupExampleInput" aria-describedby="emailHelp" value="Nova Live">
		
	  </div>
	  </div>
	   <div class="input-groupcol-5 offset-3" >
	  <div class="form-group">
		<label for="exampleInputPassword1">Chave Secreta(OAUTH2)</label>
		<input name="key" type="text" class="form-control" id="exampleInputPassword1" placeholder="Chave Secreta">
		 <small id="keyHelp" class="form-text text-muted">Para ter acesso a sua chave secreta: acesse https://console.developers.google.com/apis.</small>
	  </div>
	   </div>
	   
	   <div class="input-groupcol-5 offset-3" >
	  <div class="form-group">
		<label  for="exampleInputPassword1">ID do Cliente(OAUTH2)</label>
		<input name="id" type="text" class="form-control" id="exampleInputPassword1" placeholder="ID do Cliente">
		<small id="idHelp" class="form-text text-muted">Para ter acesso a sua chave ID acesse: https://console.developers.google.com/apis.</small>
	  </div>
	   </div>
	   <div class="input-groupcol-5 offset-3" >
	   <div class="form-group">
		<label  for="exampleFormControlSelect1">Tipo da Live</label>
		<select name="type" class="form-control" id="exampleFormControlSelect1">
		  <option>Publica</option>
		  <option>Privada</option>
		  <option>Não Listada</option>
		</select>
		</div>
		</div>
		<div class="input-groupcol-5 offset-3" >
	  <div class="form-group">
		<label for="formGroupExampleInput">Data de início</label>
		<input name="datestart" type="text" class="form-control" id="formGroupExampleInput" aria-describedby="emailHelp" placeholder="2018-10-30T00:00:00.000Z">
		
	  </div>
	  </div>
	  <div class="input-groupcol-5 offset-3" >
	  <div class="form-group">
		<label  for="formGroupExampleInput">Data de término</label>
		<input name="dateend" type="text" class="form-control" id="formGroupExampleInput" aria-describedby="emailHelp" placeholder="2018-10-31T00:00:00.000Z">
		
	  </div>
	  </div>
		
		</div>
	  </div>   
	  <div class="input-groupcol-5 offset-3" >
	  <button type="submit" class="btn btn-primary">Cadastrar</button>
	   </div>
	</form>
	</div>
 </body>
</html>
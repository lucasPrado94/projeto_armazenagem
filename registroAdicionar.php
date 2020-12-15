<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Cadastro de Clientes</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">




</head>



<body>
	<div class="container" style="width:800pt">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Projeto Armazenagem</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Cadastros
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="pessoaVisualizar.php">Pessoas</a></li>
						<li><a class="dropdown-item" href="clienteVisualizar.php">Cliente</a></li>
						<li><a class="dropdown-item" href="funcionarioVisualizar.php">Funcionário</a></li>
						<li><a class="dropdown-item" href="tipoArmVisualizar.php">Tipo de Armazenagem</a></li>
						<li><a class="dropdown-item" href="graoVisualizar.php">Grão</a></li>
					</ul>
					</li>
				
					<li class="nav-item">
						<a class="nav-link" href="registroVisualizar.php">Registros de Armazenagem</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>
		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Cadastro de Cliente</strong> <a href="pessoaVisualizar.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Buscar Pessoas</a></div>

			<div class="card-body">

				

				<div class="col-sm-6">

					<h5 class="card-title">Campos com <span class="text-danger">*</span> são obrigatórios!</h5>

					<form method="post">

						<div class="form-group">

							<label>Selecione o Cliente <span class="text-danger">*</span></label>

							<select class="form-select" aria-label="Default select example">
                                <option selected>Selecione o Cliente...</option>
                                <option value="1">Lucas Magalhães Prado</option>
                                <option value="3">Luis Inácio Lula da Silva</option>
                            </select>

						</div>

						<div class="form-group">

							<label>Mês da Colheita<span class="text-danger">*</span></label>

							<select class="form-select" aria-label="Default select example">
                                <option selected>Selecione o mês...</option>
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
								<option value="3">Março</option>
								<option value="4">Abril</option>
								<option value="5">Maio</option>
								<option value="6">Junho</option>
								<option value="7">Julho</option>
								<option value="8">Agosto</option>
								<option value="9">Setembro</option>
								<option value="10">Outubro</option>
								<option value="11">Novembro</option>
								<option value="12">Dezembro</option>
                            </select>

						</div>

                        <div class="form-group">
						
							<label>Ano da Colheita<span class="text-danger">*</span></label>
                            
                            <input type="text" name="anoColheita" id="anoColheita" class="form-control" placeholder="Digite o ano aqui..." required>

						</div>

                        <div class="form-group">

							<label>Grão<span class="text-danger">*</span></label>

							<select class="form-select" aria-label="Default select example">
                                <option selected>Selecione o grão...</option>
                                <option value="1">Soja</option>
                                <option value="2">Café</option>
								<option value="3">Arroz</option>
								<option value="4">Milho</option>
								<option value="5">Sorgo</option>
								<option value="6">Feijão</option>
                            </select>

						</div>

                        <div class="form-group">

							<label>Tipo de Armazenamento<span class="text-danger">*</span></label>

							<select class="form-select" aria-label="Default select example">
                                <option selected>Selecione o tipo de armazenamento...</option>
                                <option value="1">Fracionado KG</option>
                                <option value="2">Saca 60 KG</option>
								<option value="3">Bag 300KG</option>
								<option value="4">Bag 1000KG</option>
                            </select>

						</div>

                        <div class="form-group">
						
							<label>Quantidade<span class="text-danger">*</span></label>
                            
                            <input type="text" name="qtd" id="qtd" class="form-control" placeholder="Digite a quantidade aqui..." required>

						</div>

                        <div class="form-group">
						
							<label>Valor Unitário<span class="text-danger">*</span></label>
                            
                            <input type="text" name="vlr" id="vlr" class="form-control" placeholder="Digite o valor unitário aqui..." required>

						</div>

						<div class="form-group">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Salvar Dados</button>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
</body>

</html>
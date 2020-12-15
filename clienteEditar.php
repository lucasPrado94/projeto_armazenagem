<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro de Clientes - Edição</title>
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
						<li><a class="dropdown-item" href="#">Funcionário</a></li>
						<li><a class="dropdown-item" href="#">Tipo de Armazenagem</a></li>
						<li><a class="dropdown-item" href="#">Grão</a></li>
					</ul>
					</li>
				</ul>
				</div>
			</div>
		</nav>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Editar Pessoa</strong> <a href="pessoaVisualizar.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Buscar Pessoas</a></div>
			<div class="card-body">
				
				<div class="col-sm-6">
					<h5 class="card-title">Campos com <span class="text-danger">*</span> são obrigatórios!</h5>
					<form method="post">
                        <div class="form-group">

                        <label>Selecione a pessoa que deseja cadastrar como cliente <span class="text-danger">*</span></label>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Lucas Magalhães Prado</option>
                            <option value="2">Andreza Cristina Barbieri Serra</option>
                            <option value="3">Luis Inácio Lula da Silva</option>
                        </select>

                        </div>

                        <div class="form-group">

                        <label>Selecione a produção do Cliente <span class="text-danger">*</span></label>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>G</option>
                            <option value="1">P</option>
                            <option value="2">M</option>
                        </select>

                        </div>
						<div class="form-group">
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Atualizar Dados</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>
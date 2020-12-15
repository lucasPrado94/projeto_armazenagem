<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registros</title>
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
						<li><a class="dropdown-item" href="#">Tipo de Armazenagem</a></li>
						<li><a class="dropdown-item" href="#">Grão</a></li>
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
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Buscar Registro</strong> </div>
			<div class="card-body">
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Buscar Cliente<a href="registroAdicionar.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Adicionar Registro</a></h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Nome da Pessoa</label>
									<input type="text" name="nomePessoa" id="nomePessoa" class="form-control" value="" placeholder="Digite o Nome aqui...">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>CPF</label>
									<input type="text" name="cpf" id="cpf" class="form-control" value="" placeholder="Digite o CPF aqui...">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>&nbsp;</label>
									<div>
										<button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Procurar</button>
										<a href="<?php echo $_SERVER['PHP_SELF'];?>" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Limpar</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>Sr#</th>
						<th>Cliente</th>
						<th>Data da Armazenagem</th>
						<th>Mês da Colheita</th>
                        <th>Ano da Colheita</th>
                        <th>Grão</th>
                        <th>Tipo do Armazenamento</th>
                        <th>Quantidade</th>
                        <th>Mais Detalhes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Lucas Magalhães Prado</td>
                        <td>14/10/2018</td>
						<td>Abril</td>
                        <td>2018</td>
                        <td>Café</td>
                        <td>Saca 60 KG</td>
                        <td>100</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button></td>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detalhes do Registro de Armazenagem</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Cliente</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Lucas Magalhães Prado">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Funcionário Responsável</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Andreza Cristina Barbieri Serra">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Data da Armazenagem</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="14/10/2018">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Mês da Colheita</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Abril">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Ano da Colheita</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="2018">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Grão</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Café">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Tipo de Armazenagem</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Saca 60 KG">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Quantidade</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="100">
                                        </div>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Valor Unitário</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="R$380,00">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Editar Valor Unitário</button>
                                <button type="button" class="btn btn-primary">Efetuar Baixa</button>
                            </div>
                            </div>
                        </div>
                        </div>
					</tr>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
		
	</div>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
</body>
</html>

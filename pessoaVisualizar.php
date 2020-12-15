<?php include_once('config.php');?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro de Pessoas - Visualização</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
</head>

<body>
	
	<?php
	$condition	=	'';
	if(isset($_REQUEST['nomePessoa']) and $_REQUEST['nomePessoa']!=""){
		$condition	.=	' AND nomePessoa LIKE "%'.$_REQUEST['nomePessoa'].'%" ';
	}else if(isset($_REQUEST['cpf']) and $_REQUEST['cpf']!=""){
		$condition	.=	' AND cpf LIKE "%'.$_REQUEST['cpf'].'%" ';
	}
	
	$pessoasDados	=	$db->getAllRecords('pessoa','*',$condition,'ORDER BY idPessoa DESC');
	?>
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
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Buscar Pessoa</strong> <a href="pessoaAdicionar.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Adicionar Pessoa</a></div>
			<div class="card-body">
				<?php
				if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rds"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Dados apagados com sucesso!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Dados atualizados com sucesso!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){
					echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> Você não alterou nada!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
					echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Alguma coisa não deu certo <strong>Por favor, tente de novo!</strong></div>';
				}
				?>
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Buscar Pessoa</h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Nome da Pessoa</label>
									<input type="text" name="nomePessoa" id="nomePessoa" class="form-control" value="<?php echo isset($_REQUEST['nomePessoa'])?$_REQUEST['nomePessoa']:''?>" placeholder="Digite o Nome aqui...">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>CPF</label>
									<input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo isset($_REQUEST['cpf'])?$_REQUEST['cpf']:''?>" onkeydown="javascript: fMasc( this, mCPF );" placeholder="Digite o CPF aqui...">
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
						<th>Nome</th>
						<th>CPF</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th>Data de Nascimento</th>
						<th>Operações</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if(count($pessoasDados)>0){
						$s	=	'';
						foreach($pessoasDados as $val){
							$s++;
					?>
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['nomePessoa'];?></td>
						<td><?php echo $val['cpf'];?></td>
						<td><?php echo $val['enderecoPessoa'];?></td>
						<td><?php echo $val['telefonePessoa'];?></td>
						<td align="center"><?php echo date('d/m/Y',strtotime($val['nascimentoPessoa']));?></td>
						<td align="center">
							<a href="pessoaEditar.php?editId=<?php echo $val['idPessoa'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Editar</a> | 
							<a href="pessoaDeletar.php?delId=<?php echo $val['idPessoa'];?>" class="text-danger" onClick="return confirm('Tem certeza que deseja apagar essa informação?');"><i class="fa fa-fw fa-trash"></i> Apagar</a>
						</td>

					</tr>
					<?php 
						}
					}else{
					?>
					<tr><td colspan="6" align="center">Não foram encontradas informações no banco de dados!</td></tr>
					<?php } ?>
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
	<script>
  		function fMasc(objeto,mascara) {
			obj=objeto
			masc=mascara
			setTimeout("fMascEx()",1)
		}

  		function fMascEx() {
			obj.value=masc(obj.value)
		}

   		function mCPF(cpf){
			cpf=cpf.replace(/\D/g,"")
			cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
			cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
			cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
			return cpf
		}

    </script>
</body>
</html>

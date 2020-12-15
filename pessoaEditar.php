<?php include_once('config.php');
function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}
if(isset($_REQUEST['editId']) and $_REQUEST['editId']!=""){
	$row	=	$db->getAllRecords('pessoa','*',' AND idPessoa="'.$_REQUEST['editId'].'"');
}

if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	if($nomePessoa==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=np&editId='.$_REQUEST['editId']);
		exit;
	}else if($cpf==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=cpf&editId='.$_REQUEST['editId']);
		exit;
	}else if($enderecoPessoa==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=end&editId='.$_REQUEST['editId']);
		exit;
	}
	else if($telefonePessoa==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=tel&editId='.$_REQUEST['editId']);
		exit;
	}
	else if($nascimentoPessoa==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=nas&editId='.$_REQUEST['editId']);
		exit;
	}
	else if(!validaCPF($cpf)){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=cpfinv&editId='.$_REQUEST['editId']);
		exit;
	}
	$dados	=	array(
					'nomePessoa'=>$nomePessoa,
					'cpf'=>$cpf,
					'enderecoPessoa'=>$enderecoPessoa,
					'telefonePessoa'=>$telefonePessoa,
					'nascimentoPessoa'=>$nascimentoPessoa
					);
	$atualiza	=	$db->update('pessoa',$dados,array('idPessoa'=>$editId));
	if($atualiza){
		header('location: pessoaVisualizar.php?msg=rus');
		exit;
	}else{
		header('location: pessoaVisualizar.php?msg=rnu');
		exit;
	}
}
?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro de Pessoas - Edição</title>
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
						<li><a class="dropdown-item" href="#">Cliente</a></li>
						<li><a class="dropdown-item" href="#">Funcionário</a></li>
						<li><a class="dropdown-item" href="#">Tipo de Armazenagem</a></li>
						<li><a class="dropdown-item" href="#">Grão</a></li>
					</ul>
					</li>
				</ul>
				</div>
			</div>
		</nav>
		<?php
		if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="np"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Nome da Pessoa é um campo obrigatório!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="cpf"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> CPF da Pessoa é um campo obrigatório!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="end"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Endereço Completo da Pessoa é um campo obrigatório!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="tel"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Telefone da Pessoa é um campo obrigatório!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="nas"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Data de Nascimento da Pessoa é um campo obrigatório!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="cpfinv"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> CPF informado não é válido!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ras"){
			echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Dados gravados com sucesso!</div>';
		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Informação não alterada. <strong>Por favor, tente novamente!</strong></div>';
		}
		?>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Editar Pessoa</strong> <a href="pessoaVisualizar.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Buscar Pessoas</a></div>
			<div class="card-body">
				
				<div class="col-sm-6">
					<h5 class="card-title">Campos com <span class="text-danger">*</span> são obrigatórios!</h5>
					<form method="post">
						<div class="form-group">
							<label>Nome da Pessoa <span class="text-danger">*</span></label>
							<input type="text" name="nomePessoa" id="nomePessoa" class="form-control" value="<?php echo $row[0]['nomePessoa']; ?>" placeholder="Digite o Nome aqui..." required>
						</div>
						<div class="form-group">
							<label>CPF <span class="text-danger">*</span></label>
							<input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $row[0]['cpf']; ?>" onkeydown="javascript: fMasc( this, mCPF );" placeholder="Digite o CPF da pessoa..." required>
						</div>
						<div class="form-group">
							<label>Endereço Completo <span class="text-danger">*</span></label>
							<textarea name="enderecoPessoa" id="enderecoPessoa" class="form-control" maxlenght="200" placeholder="Digite o Endereço Completo aqui..." required><?php echo $row[0]['enderecoPessoa']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Telefone <span class="text-danger">*</span></label>
							<input type="text" name="telefonePessoa" id="telefonePessoa" class="form-control" value="<?php echo $row[0]['telefonePessoa']; ?>" placeholder="Digite o Telefone aqui..." required>
						</div>
						<div class="form-group">
							<label>Data de Nascimento <span class="text-danger">*</span></label>
							<input type="date" name="nascimentoPessoa" id="nascimentoPessoa" class="form-control" value="<?php echo $row[0]['nascimentoPessoa']; ?>" placeholder="Digite a Data de Nascimento aqui..." required>
						</div>
						<div class="form-group">
							<input type="hidden" name="editId" id="editId" value="<?php echo $_REQUEST['editId']?>">
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
	<script type="text/javascript">
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
		
		function mascara(o,f){
    		v_obj=o
    		v_fun=f
    		setTimeout("execmascara()",1)
		}
		function execmascara(){
    		v_obj.value=v_fun(v_obj.value)
		}
		function mtel(v){
    		v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    		v=v.replace(/^(\d{2})(\d)/g,"($1)$2"); //Coloca parênteses em volta dos dois primeiros dígitos
    		v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    		return v;
		}
		function id( el ){
			return document.getElementById( el );
		}
		window.onload = function(){
			id('telefonePessoa').onkeypress = function(){
				mascara( this, mtel );
			}
		}
    </script>
    
</body>
</html>
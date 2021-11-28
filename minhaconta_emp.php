<?php
include('verifica_login.php');
?>
<!DOCTYPE html>

<html lang="PT_br" >
  <head>
    <meta charset="UTF-8">
    <title> TruckWorld </title>
    <link rel="stylesheet" href="minhaConta.css">
    <!-- Boxicons CDN Link -->
    <link rel="icon" href="image/ico.ico">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="css/bootstrap.min.css" rel="stylesheet">


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>  
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">TruckWorld </div>
        <img src="image/logo2.png"class='bx bxl-c-plus-plus icon'>

        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Procurar...">
         <span class="tooltip">Procurar</span>
      </li>
      <li>
        <a href="painel_emp.php">
          <i class='bx bxs-grid-alt bx-spin-hover'></i>
          <span class="links_name">Início</span>
        </a>
         <span class="tooltip">Início</span>
      </li>
      <li>
       <a href="minhaconta_emp.php">
         <i class='bx bx-user bx-tada-hover' ></i>
         <span class="links_name">Minha Conta</span>
       </a>
       <span class="tooltip">Minha Conta</span>
     </li>
     <li>
       <a href="emandamento_emp.php">
         <i class='bx bx-pie-chart-alt-2 bx-spin-hover' ></i>
         <span class="links_name">Em Andamento</span>
       </a>
       <span class="tooltip">Em Andamento</span>
     </li>
     <li>
       <a href="historico_emp.php">
         <i class='bx bxs-hot bx-spin-hover' ></i>
         <span class="links_name">Histórico</span>
       </a>
       <span class="tooltip">Histórico</span>
     </li>
     
     <li>
       <a href="configuracao_emp.php">
         <i class='bx bx-cog bx-spin-hover' ></i>
         <span class="links_name">Configurações</span>
       </a>
       <span class="tooltip">Configurações</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="2.png" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['nome'];?></div>
             <div class="job">Transportadora</div>
           </div>
         </div>
         <a href="logout.php" class='bx bx-log-out' id="log_out" ></a>
     </li>
    </ul>
  </div>



<!-- AQUI COMEÇA A PAGINA -->
      <?php
	include_once("conexao.php");
	$result_empresas = "SELECT * FROM empresas";
	$resultado_empresas = mysqli_query($conexao, $result_empresas);
?>

<section class="home-section">
<div class="container theme" role="main">
			<div class="page-header">
				<f>Editar Contas</f>
			</div>
      <?php while($rows_empresas = mysqli_fetch_assoc($resultado_empresas)){ ?>
        
      <button type="button" id="int" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"  
                    data-whatevercodigo="<?php echo $rows_empresas['codigo']; ?>"  
										data-whatevercnpj="<?php echo $rows_empresas['cnpj']; ?>"  
										data-whatevernome="<?php echo $rows_empresas['nome']; ?>"  
										data-whateverusuario="<?php echo $rows_empresas['usuario']; ?>"  
										data-whatevercep="<?php echo $rows_empresas['cep']; ?>"  
										data-whatevercelular="<?php echo $rows_empresas['celular']; ?>"  
										data-whatevertelefone="<?php echo $rows_empresas['telefone']; ?>"  
										data-whateversenha="<?php echo $rows_empresas['senha']; ?>"  

										>Editar a conta <?php echo $rows_empresas['nome']; ?></button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" id="moda1">
						<h4 class="modal-title " id="exampleModalLabel">codigo do frete</h4>
					</div>
					<div class="modal-body">  <form method="POST" action="http://localhost/TruckWordWeb/processaempres.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="recipient-codigo" ></label>
      <input name="codigo"  class="b" id="recipient-codigo" >
    </div>
    <div class="form-group">
      <label for="recipient-cnpj"  class="control-label">cnpj:</label>
      <input name="cnpj" type="text" class="form-control" id="recipient-cnpj" >
    </div>
    <div class="form-group">
      <label for="recipient-nome" class="control-label">nome:</label>
      <input name="nome" type="text" class="form-control" id="recipient-nome" >
    </div>
    <div class="form-group">
      <label for="recipient-usuario" class="control-label">usuario:</label> 
      <input name="usuario" type="text" class="form-control" id="recipient-usuario" >
    </div>
    <div class="form-group">
      <label for="recipient-cep" class="control-label">cep:</label>
      <input name="cep" type="text" class="form-control" id="recipient-cep" >
    </div>
    <div class="form-group">
      <label for="recipient-celular" class="control-label">celular:</label>
      <input name="celular" type="text" class="form-control" id="recipient-celular" >
    </div>
    <div class="form-group">
      <label for="recipient-telefone" class="control-label">telefone:</label>
      <input name="telefone" type="text" class="form-control" id="recipient-telefone" >
    </div>
    <div class="form-group">
      <label for="recipient-senha" class="control-label">Senha:</label>
      <input name="senha" type="text" class="form-control" id="recipient-senha" >
    </div>
  
    <input name="id" type="hidden" id="id_curso">
    <div class="modal-footer">
      <button type="button" id="cancelar" class="btn btn-primary" data-toggle="modal">Cancelar</button>
      <button type="submit" id="alterar" class="btn btn-primary" data-toggle="modal">Alterar</button>
      </div>
						</form>
					</div>			  
				</div>
			</div>
		</div>      <?php } ?>

      </section>

</div>		
</div>

    
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="script.js"></script>
    <script type="text/javascript">
			$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientcodigo = button.data('whatevercodigo')
			var recipientcnpj = button.data('whatevercnpj')
			var recipientnome = button.data('whatevernome')
        	var recipientusuario = button.data('whateverusuario')
			var recipientcep = button.data('whatevercep')
        	var recipientcelular = button.data('whatevercelular')
        	var recipienttelefone = button.data('whatevertelefone')
        	var recipientsenha = button.data('whateversenha')

				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-title').text('Editando a Conta do '  + recipientnome)
				modal.find('#codigo_usuario').val(recipient)
				modal.find('#recipient-codigo').val(recipientcodigo)
				modal.find('#recipient-cnpj').val(recipientcnpj)
        		modal.find('#recipient-nome').val(recipientnome)
				modal.find('#recipient-usuario').val(recipientusuario)
				modal.find('#recipient-cep').val(recipientcep)
				modal.find('#recipient-celular').val(recipientcelular)
				modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-senha').val(recipientsenha)        
        
      
			})
		</script>



</body>
</html>
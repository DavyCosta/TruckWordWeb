<?php
include('verifica_login.php');
?>
<!DOCTYPE html>

<html lang="PT_br" >
  <head>
    <meta charset="UTF-8">
    <title> TruckWorld </title>
    <link rel="stylesheet" href="style.css">
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
	$result_fretesativo = "SELECT * FROM fretesativo";
	$resultado_fretesativo = mysqli_query($conexao, $result_fretesativo);
?>

<section class="home-section">
<div class="container theme" role="main">
			<div class="page-header">
				<g>FRETES EM ANDAMENTO</g>
			</div>
					




     







      
            <?php while($rows_fretesativo = mysqli_fetch_assoc($resultado_fretesativo)){ ?>

            <main class="cards ">
          <section class="card shop">
            <div class="icon">
                <img src="image/TT.png" alt="Contact us.">
            </div>
            <h3>Carga de <?php echo $rows_fretesativo['descricao']; ?></h3>
            <span>De: <?php echo $rows_fretesativo['localColeta']; ?></span>
            <span>Para: <?php echo $rows_fretesativo['localEntrega']; ?></span>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_fretesativo['codigo']; ?>">Dethalhes</button>
           
          
								<!-- Inicio Modal -->
								<div class="modal fade " id="myModal<?php echo $rows_fretesativo['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header" id="moda2">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel">Transportadora <?php echo $rows_fretesativo['empresa']; ?></h4>
											</div>
											<div class="modal-body">
                        <div class="bloco"><h class="texx">Valor:</h><h id="valor"> <?php echo $rows_fretesativo['valor']; ?> R$</h>
												<h class="texx">Peso:</h><h> <?php echo $rows_fretesativo['peso']; ?> Kg</h></div><p>
												<h class="texx">Descrição:</h><h> <?php echo $rows_fretesativo['descricao']; ?></h><p>
												<h class="texx">Empresa:</h><h> <?php echo $rows_fretesativo['empresa']; ?></h><p>
                        <h class="texx">Nome do Motorista:</h><h> <?php echo $_SESSION['nome'];?></h><p>
                        <h class="texx">Distância:</h><h> <?php echo $rows_fretesativo['distancia']; ?>Km</h><p>
												<h class="texx">Combustivel Gasto:</h><h> <?php echo $rows_fretesativo['combustivelGasto']; ?>L</h><p>
												<h class="texx">Coleta:</h><p><h class="texx"></h><h> <?php echo $rows_fretesativo['localColeta']; ?></h><p>
												<p><h class="texx"></h><h><?php echo $rows_fretesativo['dataColeta']; ?></h><p>
												<h class="texx">Entrega:</h><p><h class="texx"></h><h> <?php echo $rows_fretesativo['localEntrega']; ?></h>
												<p><h class="texx"></h><h><?php echo $rows_fretesativo['dataEntrega']; ?></h>
                        <p>
                      

  
							<form method="POST" action="http://localhost/TruckWordWeb/processa_fin.php" enctype="multipart/form-data">

								<div class="form-group">
                <div class="b">
                  <input value="<?= $rows_fretesativo['descricao']?>"class=" b" name="descricao"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['empresa']?>" class=" b" name="empresa"  type="text" class="form-control">
                  <input value="<?= $rows_fretesativo['nome']?>" class=" b" name="nome"  type="text" class="form-control">
                  <input value="<?= $rows_fretesativo['valor']?>"class=" b" name="valor"  type="text" class="form-control">
                  <input value="<?= $rows_fretesativo['peso']?>"class=" b" name="peso"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['distancia']?>"class=" b" name="distancia"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['combustivelGasto']?>"class=" b" name="combustivelGasto"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['localColeta']?>"class=" b" name="localColeta"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['dataColeta']?>"class=" b" name="dataColeta"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['localEntrega']?>"class=" b" name="localEntrega"  type="text" class="form-control">
									<input value="<?= $rows_fretesativo['dataEntrega']?>"class=" b" name="dataEntrega"  type="text" class="form-control">
								</div>								</div>



								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->   

            </section>
							<?php } ?>
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
				var recipientdescricao = button.data('whateverdescricao')
				var recipientempresa = button.data('whateverempresa')
        var recipientnome = button.data('whatevernome')
        var recipientvalor = button.data('whatevervalor')
				var recipientpeso = button.data('whateverpeso')
        var recipientdistancia = button.data('whateverdistancia')
        var recipientcombustivelGasto = button.data('whatevercombustivelGasto')
        var recipientlocalColeta = button.data('whateverlocalColeta')
        var recipientdataColeta = button.data('whateverdataColeta')
        var recipientlocalEntrega = button.data('whateverlocalEntrega')
        var recipientdataEntrega = button.data('whateverdataEntrega')



				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-title').text('codigo do historico: ' + recipient)
				modal.find('#codigo_historico').val(recipient)
				modal.find('#recipient-name').val(recipientdescricao)
        modal.find('#recipient-name').val(recipientempresa)
        modal.find('#recipient-name').val(recipientnome)
				modal.find('#recipient-name').val(recipientvalor)
				modal.find('#recipient-name').val(recipientpeso)
				modal.find('#recipient-name').val(recipientdistancia)
				modal.find('#recipient-name').val(recipientcombustivelGasto)
				modal.find('#recipient-name').val(recipientlocalColeta)
        modal.find('#recipient-name').val(recipientdataColeta)
				modal.find('#recipient-name').val(recipientlocalEntrega)
				modal.find('#recipient-name').val(recipientdataEntrega)        
			})
		</script>



</body>
</html>
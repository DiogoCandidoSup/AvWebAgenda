<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';

?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Usuarios </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Celular:</th>
					<th>Email:</th>
					<th>Data de aniversario:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM tbcontato";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobre']; ?></td>
					<td><?php echo $dados['celular']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['dataani']; ?></td>


					<!-- Modal Structure -->


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>


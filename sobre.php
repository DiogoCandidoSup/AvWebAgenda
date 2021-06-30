<?php
	// Conexão
	include_once 'php_action/db_connect.php';
	require_once 'includes/header.php';
   
  // Sessão
session_start();
?>

<br>

<?php
  date_default_timezone_set('America/Sao_Paulo');
  $horario1 = date('h:i');
  
  /*if($horario1 >= 00:00 && <= 06:00)
  {
    ?>
    <div class="left-align" style="text-indent: 30px">
      <h6 class="light"> Boa noite </h6>
    </div>
    <?php
  }
  elseif($horario1 >= 06:01 && <= 12:00)
  {
    ?>
    <div class="left-align" style="text-indent: 30px">
      <h6 class="light"> Bom amanhecer </h6>
    </div>
    <?php
  }
  else
  {
    ?>
    <div class="left-align" style="text-indent: 30px">
      <h6 class="light"> Bom tarde </h6>
    </div>
    <?php
  }
  */
?>

<div class="left-align" style="text-indent: 30px">
      <h6 class="light"> Boa noite </h6>
</div>

<br>

<div class="left-align" style="text-indent: 30px">
      <h6 class="light"> Bem vindo a sua agenda de contatos </h6>
</div>

<table style="width: 17%; text-indent: 25px;">
  <tr>
    <th>
    <div class="left-align">
      <h6 class="light"> Data: </h6>
    </div>
    </th>

    <th>
    <div class="left-align">      
      <?php
        date_default_timezone_set('America/Sao_Paulo');
        $dia = date('d');
        echo "Dia ";
        echo $dia;
        echo " de ";
      ?>

      <?php
        date_default_timezone_set('America/Sao_Paulo');
        $mes1 = date('m');
        echo $mes1;
        echo " de ";
      ?>

      <?php
        date_default_timezone_set('America/Sao_Paulo');
        $ano1 = date('y');
        echo $ano1;
      ?>

    </div>
    </th>
  </tr>
</table>

<?php
  // Footer
include_once 'includes/footer.php';

?>
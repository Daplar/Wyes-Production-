<?php $m = Model::getModel(); ?>


<h1> Ajoutez un composant </h1>

<form action = "?controller=production&action=add" method="post">
	<!--<p> <label> Numéro de série: <input type="text" name="serial_number_comp"/> </label> </p>-->
  <p>
		<label> Nom :
			<select name="name_comp" size="1">
      <?php foreach($m->getnameComp() as $v){
          foreach ($v as $key => $value) {
            echo '<option value="'.$value.'" >'. $value.'</option>';
          }
        }
        ?>
			</select>
		</label>
	</p>
  <p> <label> Numéro de série: <input type="text" name="serial_number_comp"/> </label> </p>
	<p><label> Quantité: <input type="text" name="quantity"/> </label></p>
  <p>  <input type="submit" value="Ajoutez dans la base de données"/> </p>
</form>

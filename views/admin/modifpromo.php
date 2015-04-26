<h2> ajouter une promotion</h2>
<?php 


if(isset($_GET['id']))
	{


		if(isset($modifpromo) & is_array($modifpromo))
		{
	//var_dump($modifpromo);
			foreach($modifpromo as $modifpromos)
			{

?>
		<form method="post" >
			<br/><input type="text" name="id_promo" value="<?php echo $modifpromos['id_promo']?>" class="" id="" placeholder="code promo"><br/>
			<br/><input type="text" name="code_promo" value="<?php echo $modifpromos['code_promo']?>" class="" id="" placeholder="code promo"><br/>
			<br/><input type="text" name="reduction" value="<?php echo $modifpromos['reduction']?>" class="" id="" placeholder="reduction"><br/>
			<br/><input type="submit" value="enregistre" name="modifpromo">
		</form>		


<?php 

		}

	}
}

?>


	
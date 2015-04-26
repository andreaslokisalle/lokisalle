<?php include_once('./Controller/Controller.php');?>
<?php include_once('./views/inc/header.php');?>
		<div id="contener">
				
			<?php include_once('./views/inc/menu2.php');?>
			
			
			
			
			<?php 
			if(membreAdmin())
					{	
						include_once('./views/inc/menuadmin.php');
					}
		?>

						
						<?php echo $contents ?>
		</div>
	


<?php include_once('./views/inc/footer.php');?>


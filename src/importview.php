
  <?php 
 global $wpdb;
 $mytables=$wpdb->get_results("SHOW TABLES");
 
  ?>
   <h2><?php echo _e( 'Redeye Unyson import'); ?></h2>		
     
	<form action="" method="post" id="nds_add_user_meta_form" >			
	
		<input type="hidden" name="action" value="rui_form_response">
		 <?php
		  foreach ($mytables as $mytable)
		  {
			  
			  foreach ($mytable as $t) 
			  {   ?>     
				 <input type="checkbox" name="tables[]" value="<?php echo $t; ?>"> <span> <?php echo $t; ?> </span> <br/>
				 <?php 
			  }
		  }
		 ?>   
		

		<input type="hidden" name="rui_add_import_meta_nonce" value="" />			
	     <?php wp_nonce_field( 'rui-unyson-import' ); ?>           
		<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Import"></p>
	</form>
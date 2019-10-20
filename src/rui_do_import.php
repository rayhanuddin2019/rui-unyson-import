<?php 


Class rui_do_import{

   public function init(){
     
      
         if( !wp_verify_nonce($_POST['_wpnonce'], 'rui-unyson-import') ) {
           
            return;

          }

         
         $this->import();
          wp_redirect( home_url() );
          exit();
           
   }

   public function import(){
         $tables = isset($_POST['tables'])?$_POST['tables']:[];
         $parser = new \JsonCollectionParser\Parser();
         $processor = new \RE_Import($tables);
         $parser->parse(RUI_DIR.'/database.json', [$processor, 'process']);
         
         $processor->store();
         
         

   }


}




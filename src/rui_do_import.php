<?php 


Class rui_do_import{

   public function init(){
     
      
         if( !wp_verify_nonce($_POST['_wpnonce'], 'rui-unyson-import') ) {
           
            return;

          }
          $this->import();
         
          

   }

   public function import(){

         $parser = new \JsonCollectionParser\Parser();
         $processor = new \RE_Import();
         $parser->parse(RUI_DIR.'/database.json', [$processor, 'process']);
         
         $processor->store();
        

   }


}




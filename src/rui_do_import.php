<?php 


Class rui_do_import{
   
   public function upload(){

      if( !wp_verify_nonce($_POST['_wpnonce'], 'rui-unyson-import-file-upload') ) {
           
         return;

       }

       $uploaddir = RUI_DIR.'/uploads/';
       $uploadfile = $uploaddir . basename($_FILES['rui_json_file']['name']);

       move_uploaded_file($_FILES['rui_json_file']['tmp_name'], $uploadfile);
       
   }
   public function init(){
     
      
         if( !wp_verify_nonce($_POST['_wpnonce'], 'rui-unyson-import') ) {
           
            return;

          }
  
        if(!isset($_POST['db_file'])){
         return;
        } 
         
        if(file_exists(RUI_DIR.'/uploads/'.$_POST['db_file'])){
              $this->import();
              wp_redirect( home_url() );
              exit();
        }

     
           
   }

   public function import(){
         $tables = isset($_POST['tables'])?$_POST['tables']:[];
         $parser = new \JsonCollectionParser\Parser();
         $processor = new \RE_Import($tables);
         $parser->parse(RUI_DIR.'/uploads/'.$_POST['db_file'], [$processor, 'process']);
         
         $processor->store();
     
   }


}




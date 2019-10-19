<?php 

Class RE_Import {
	 
	public $file_path = null; 
	public $table = [];
	public $table_data = [];
	public $params = [];
  	

   public function process(array $item)
    {

      if($item['type'] == 'table'){
      	  $this->table[] = serialize($item);
      }elseif ($item['type'] == 'row') {
      	$this->table_data[] =serialize($item); 
      }else{
      	$this->params[] =serialize($item); 
      }       
    
    }

    public function store(){
    	
    }

    
} 




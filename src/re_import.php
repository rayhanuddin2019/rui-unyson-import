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
      	$this->table_data[] = serialize($item); 
      }else{
      	$this->params[] = serialize($item); 
      } 
     
    
    }

    public function get_table_data(){
    	 return $this->params; 
    }

    public function store(){
      global $wpdb;
     
        foreach ($this->table_data as $key => $param) {
            $ns = unserialize( $param );
            try {
              if(isset($ns['data'])) {
                $table  = $ns['data'];
                 if(isset($table['table'])){
                    $row = $table['row'];  
                     $table = $wpdb->prefix.$table['table'];
                     $wpdb->insert($table,$row); 
                }
              } 
          }
          catch (exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
           
      }

    }

    
} 




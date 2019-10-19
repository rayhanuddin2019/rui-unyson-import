// function processItem(array $item)
// {
//    // is_array($item); //true
	
//    global $data;
//     if ($item['type']=='row') {
//         $data[] = serialize($item);
     	
//     }
 
// }

// $parser = new \JsonCollectionParser\Parser();
// $parser->parse('./database.json', 'processItem');

// $tables = [];
// foreach($data as $key=>$item){
   
   
//    $ns = unserialize( $item );

//    if(isset($ns['data'])) {
//      	$table  = $ns['data'];
//          if(isset($table['table'])){
//          	//$tables[] = $table['table'];
//          	array_push($tables,$table['table']);
//          	if($table['table']  == 'posts' || $table['table'] == 'post'){
//          		//echo $table['table'] .'<br/>' ;
//          	}
         	
//          }
//    }  

   

// }
// $result = array_unique($tables);
// print_r($result);

// function processItemtable(array $item)
// {
//    // is_array($item); //true
	
//    global $data;
//         $data[] = serialize($item);
     	
   
 
// }


// $parser = new \JsonCollectionParser\Parser();
// $parser->parse('./database.json', 'processItemtable');

// foreach ($data as $key => $value) {
// 	print_r(unserialize($value));
// 	if($key==10){
// 		break;
// 	}
// }


// $parser = new \JsonCollectionParser\Parser();
// $processor = new \RE_Import();
// $parser->parse('database.json', [$processor, 'process']) ;



// foreach ($processor->params as $key => $param) {
//       print_r( unserialize( $param) );	
// }
// $i =0;
// foreach ($processor->table_data as $key => $param) {
// 	   // if($i==2){
//     //      break;
// 	   // }

//          $ns = unserialize( $param );

// 		   if(isset($ns['data'])) {
// 		     	$table  = $ns['data'];
// 		         if(isset($table['table'])){
// 		         	//$tables[] = $table['table'];
		         	
// 		         	if($table['table']  == 'yoast_seo_links' ){
// 		         		$i++;

// 		         		   $row = $table['row'];
		         		
		         		
// 		         		   	 $sql = "INSERT INTO wp_yoast_seo_links (id,url,settings,hover,advanced,params) VALUES (' ". $row['id'] ."', 
								
// 							      	' " . $row['handle'] ." ',
// 							        ' " . $row['settings'] ." ',
// 							    	' " . $row['hover'] ." ',
// 							        ' " . $row['advanced'] ." ',
// 							         ' " . $row['params'] ." '
								
								
								


// 								)";

// 								if ($conn->query($sql) === TRUE) {
// 								    echo "New record created successfully";
// 								} else {
// 								    echo "Error: " . $sql . "<br>" . $conn->error;
// 								}
		         		  
		         		  
// 						}		

		         
		         	
// 		         }
// 		   } 
// }



                        
		      //    		   $sql = "INSERT INTO wp_posts (ID, post_author, post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES (' ". $row['ID'] ."', 
								// 	' " . $row['post_author'] ." ',
							 //    	' " . $row['post_date'] ." ',
								// 	' " . $row['post_date_gmt'] ." ',
								// 	' " . $row['post_content'] ." ',
								// 	' " . $row['post_title'] ." ',
								// 	' " . $row['post_excerpt'] ." ',
								// 	' " . $row['post_status'] ." ',
								// 	' " . $row['comment_status'] ." ',
								// 	' " . $row['ping_status'] ." ',
								// 	' " . $row['post_password'] ." ',
								// 	' " . $row['post_name'] ." ',
								// 	' " . $row['to_ping'] ." ',
								// 	' " . $row['pinged'] ." ',
								// 	' " . $row['post_modified'] ." ',
								// 	' " . $row['post_modified_gmt'] ." ',
								// 	' " . $row['post_content_filtered'] ." ',
								// 	' " . $row['post_parent'] ." ',
								// 	' " . $row['guid'] ." ',
								// 	' " . $row['menu_order'] ." ',
								// 	' " . $row['post_type'] ." ',
								// 	' " . $row['post_mime_type'] ." ',
								// 	' " . $row['comment_count'] ." '
								


								// )";

								// 	if ($conn->query($sql) === TRUE) {
								// 	    echo "New record created successfully";
								// 	} else {
								// 	    echo "Error: " . $sql . "<br>" . $conn->error;
								// 	}






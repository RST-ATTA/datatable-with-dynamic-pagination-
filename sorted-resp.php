
<?php
	//include connection file 
	include_once("connection.php");
	$fType=$_REQUEST['fType']; 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'field_1',
		1 =>'field_2', 
		2 => 'field_3',
		3 => 'field_4',
	);

	$where = $sqlTot = $sqlRec = "";

	// check search value exist
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" ( field_1 LIKE '".$params['search']['value']."%' ";    
		$where .=" OR field_2 LIKE '".$params['search']['value']."%' ";
		
		$where .=" OR field_3 LIKE '".$params['search']['value']."%' )";
	}
	if(!empty($fType)){$where .="where flag='y'";}

	// getting total number records without any search
	$sql = "SELECT field_1,field_2,field_3,field_4 FROM `TABLE-NAME` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	//concatenate search sql if value exist
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}


 	#$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";
 	$sqlRec .=  " ORDER BY id  asc  LIMIT 0 ,10";
	
	$queryTot = mysqli_query($conn, $sqlTot) or die("some error occured in connecting database :". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec) or die("Something went wrong");
	
	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	
	$params['draw']=1;
	$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
	#echo json_encode($data);
?>
	

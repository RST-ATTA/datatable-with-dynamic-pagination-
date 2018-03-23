<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datatable with dynamic pagination</title>
<link rel="stylesheet" id="font-awesome-style-css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" media="all">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<body>

	<div class="container">
		<button class="btn btn-danger sr" data="sorted">Sorted Record</button>
      <div class="">
        <h1>Data Table</h1>
        <div class="empt">
		<table id="dtTable" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>field 1</th>
                <th>field 2</th>
	        <th>field 3</th>
                <th>field 4</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>field 1</th>
                <th>field 2</th>
	        <th>field 3</th>
                <th>field 4</th>
            </tr>
        </tfoot>
    </table>
    </div>
      </div>

    </div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>

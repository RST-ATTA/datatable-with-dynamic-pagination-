$( document ).ready(function() {
var current_Url = window.location.href;
if (current_Url.match(/http\:\/\/LOCALTHOST-URL\/index.php/) ){
var table = $('#dtTable').DataTable( {
        "bProcessing": true,
	"bDestroy": true,
         "serverSide": true,
         "ajax":{
            url :"URL-FILE-PATH1.php", // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE
            error: function(){
              $("#dtTable_processing").css("display","none");
            }
          },
	"dataSrc": function (json){
		console.log(json);
	},
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-info'>LOL</button>"
        } ]
    } );
 
    $('#dtTable tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
	if(data[0]==1){console.log("Test 1");}
	else if(data[0]==2){console.log("Test 2");}
	else if(data[0]==3){console.log("Test 3");}
        alert( data[0] +"'s salary is: "+ data[ 3 ] );
    } );
}




$('.sr').click(function(){ var fType=$(this).attr('data');
        $('#dtTable').DataTable().clear().destroy();
	
	$('#dtTable').DataTable( {
        "bProcessing": true,
        "bDestroy": true,
         "serverSide": true,
         "ajax":{
            url :"URL-FILE-PATH2.php", 
            type: "post", 
	    data: {fType:fType},
            error: function(){
              $("#dtTable_processing").css("display","none");
            }
          },
        "dataSrc": function (json){
                console.log(json);
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-info'>Custom HTML BUTTON</button>"
        } ]
    } );


    $('#employee_grid tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
	if(data[0]==1){console.log("Test 1");}
        alert( data[0] +"'s Field is: "+ data[ 3 ] );
    } );


});


});

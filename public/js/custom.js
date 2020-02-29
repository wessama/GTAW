/*
* @Author: Wessam Ahmed
* @Date:   2020-02-29 03:12:30
* @Last Modified by:   Wessam Ahmed
* @Last Modified time: 2020-02-29 04:09:13
*/



$(document).ready(function(){

	$('#get-players').click(function(){

         // AJAX request 
         $.ajax({
         	url: 'getPlayers/',
         	type: 'get',
         	dataType: 'json',
         	success: function(response){

         		var len = 0;
         		if(response['data'] != null){
         			len = response['data'].length;
         		}

         		if(len > 0){
               // Read data and create rows
               for(var i=0; i<len; i++){

               	var id = response['data'][i].id;
               	var name = response['data'][i].name;
               	var date = response['data'][i].created_at;

               	var row = "<tr> <td>'"+id+"'</td> <td>'"+name+"'</td> <td>'"+date+"'</td> </tr>"; 

               	$("#records_table").append(row); 
               }
           }

       }
   });
     });

	$('#get-items').click(function(){

         // AJAX request 
         $.ajax({
         	url: 'getItems/',
         	type: 'get',
         	dataType: 'json',
         	success: function(response){

         		console.log(response['data']);

				for (var i = 0, len = response['data'].length; i < len; i++) {
					console.log(response['data'][i]);
         			var row = "<tr> <td>'"+response['data'][i]+"'</td> </tr>"; 
  					$("#items_table").append(row); 
				}
         	}
         });
     });

});
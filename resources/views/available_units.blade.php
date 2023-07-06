<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>   
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

        
        <title>Unit Details</title>
        <style>
           *{
                font-family: sans-serif; /* Change your font family */
            }
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                width: 100%;
                /*height: 40%;*/
                
            }
            .content-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }
            .content-table th, .content-table td {
                padding: 12px 15px;
            }
            .content-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }
            .content-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }
            .content-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }
            .content-table tbody tr:hover {
                /*font-weight: bold;*/
                color: #009879;
            }
            .Unit_Link{
                text-align: right;
                text-decoration: none;
                color: #009800;
                font-weight: bold;
            }
            .Back_Home{
                text-align: center;
                text-decoration: none;
                color: #009800;
                font-weight: bold;
            }
            a:link,a:visited{
                text-decoration: none;
                color: #009800;
                font-weight: bold;
            }
            
            .Searsh_input{
                text-align: left;
            }

            
            
            
        </style>
    </head>
    <body>
        <br>
        <div class="Searsh_input">  
            <h5>Search By</h5> 
            Unit View : <input type="text" name="search" placeholder="value..." id="search" onkeyup="searchFun()"/>  
       </div>
       
       <div class="table-responsive">
        <table class="content-table" id="employee_table">
            <thead>
                <tr id="header">
                    <th data-colname="Unit" width="15%">Unit</th>
                    <th data-colname="Name" width="20%">Name</th>
                    <th  data-colname="Price" data-order="desc" width="25%">price $ &#9650</th>
                    <th data-colname="View" width="25%">View</th>
                    <th data-colname="Floor" data-order="desc" width="15%">Floor &#9650</th>
                </tr>
            </thead>
            <tbody id="myTable">

            </tbody>
          </table>
          </div>
          <p class="Back_Home"><a href="{{ url('/') }}" class="Back_Home"> Back To Home Page </a></p>
    </body>
    <script>
        /*var myArray = [
            {'Unit':'1', 'Name':'<a href="Units.html" class="Unit_Link"> U-5', 'Price':'2,463 $' , 'View':'Lake View' , 'Floor':'3'},
            {'Unit':'2', 'Name':'<a href="Units.html" class="Unit_Link"> U-3', 'Price':'1,294 $' , 'View':'Pool View' , 'Floor':'3'},
            {'Unit':'3', 'Name':'<a href="Units.html" class="Unit_Link"> U-4', 'Price':'3,173 $' , 'View':'Pool View' , 'Floor':'1'},
            {'Unit':'4', 'Name':'<a href="Units.html" class="Unit_Link"> U-9', 'Price':'3,645 $' , 'View':'Lake View' , 'Floor':'2'},
            {'Unit':'5', 'Name':'<a href="Units.html" class="Unit_Link"> U-12', 'Price':'2,887 $' , 'View':'Pool View' , 'Floor':'2'},
            {'Unit':'6', 'Name':'<a href="Units.html" class="Unit_Link"> U-7', 'Price':'1,395 $' , 'View':'Lake View' , 'Floor':'4'},
            {'Unit':'7', 'Name':'<a href="Units.html" class="Unit_Link"> U-8', 'Price':'4,395 $' , 'View':'Lake View' , 'Floor':'5'},
            {'Unit':'8', 'Name':'<a href="Units.html" class="Unit_Link"> U-10', 'Price':'6,395 $' , 'View':'Pool View' , 'Floor':'2'},
            {'Unit':'9', 'Name':'<a href="Units.html" class="Unit_Link"> U-11', 'Price':'5,395 $' , 'View':'Lake View' , 'Floor':'4'},
            {'Unit':'10', 'Name':'<a href="Units.html" class="Unit_Link"> U-15', 'Price':'7,395 $' , 'View':'Pool View' , 'Floor':'3'},
        ]*/
        
        var myArray = [
		<?php $index = 1 ; ?>
		            @foreach ($units as $unit)
            {'Unit':'{{$index}}', 'Name':"<a href='"+"{{ url('/unit_details') }}/{{$unit->unitNumber}}'"+"class='Unit_Link'>{{$unit->unitNumber}}</a>", 'Price':'{{$unit->priceAmount}} $' , 'View':'{{$unit->description}}' , 'Floor':'{{(int)$unit->floor}}'},
            
			 <?php $index++ ; ?>
            @endforeach    
        ]
        buildTable(myArray)
        
        
        
         $('th').on('click', function(){
             var column = $(this).data('colname')
             var order = $(this).data('order')
             var text = $(this).html()
             text = text.substring(0, text.length - 1);
             
             
             if (column === 'Price' || column === 'Floor'){
             if (order == 'desc'){
                myArray = myArray.sort((a, b) => a[column] > b[column] ? 1 : -1)
                $(this).data("order","asc");
                text += '&#9660'
             }else{
                myArray = myArray.sort((a, b) => a[column] < b[column] ? 1 : -1)
                $(this).data("order","desc");
                text += '&#9650'
             }
        
            $(this).html(text)
            buildTable(myArray)
			}
            })
            
        function buildTable(data){
            var table = document.getElementById('myTable')
            table.innerHTML = ''
            for (var i = 0; i < data.length; i++){
                var colUnit = `Unit-${i}`
                var colName = `Name-${i}`
                var colPrice = `Price-${i}`
                var colView = `View-${i}`
                var colFloor = `Floor-${i}`  
        
                var row = `<tr>
                                <td>${data[i].Unit}</td>
                                <td>${data[i].Name}</td>
                                <td>${data[i].Price}</td>
                                <td>${data[i].View}</td>
                                <td>${data[i].Floor}</td>
                               
                           </tr>`
                table.innerHTML += row
            }
        } 

      /*$(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      }); */ 
        
        const searchFun = () =>{
            let filter = document.getElementById('search').value.toUpperCase();
            let myTable = document.getElementById('employee_table');
            let tr = myTable.getElementsByTagName('tr');
            for(var i=0; i<tr.length; i++){
                let td = tr[i].getElementsByTagName('td')[3];
                if(td){
                    let textvalue = td.textContent || td.innerHTML;
                    if(textvalue.toUpperCase().indexOf(filter) > -1 ){
                        tr[i].style.display="";
                    }
                    else{
                        tr[i].style.display="none";
                    }
                }
            }
        }

        </script>
</html>

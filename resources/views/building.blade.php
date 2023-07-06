<html>
    <head>
        <title>Building Details</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.min.css') }}">
        <script type="text/javascript" src="{{ asset('js/lightbox-plus-jquery.min.js') }}">
        </script>
        <style>
            body {
                background-color:white;
                text-align: center;
            }

            h1, h3, p{
                text-align:center;
                color: #009879;
                font-weight: bold;
            }

            h2{
                color: #009879; 
                font-weight: bold;
            }
            
            .tooltip{
                
                width: 100%;
                height: 65%;
                text-align: left;
                font-family: sans-serif;
                font-weight: bold;
            }
            .modal_Gallary{
                float: right; 
                width: 70%;
                height: 100%;
                margin-top: -395px;
            }
            .modal_Gallary img{
                filter: grayscale(100%);
                transition: 1s;
                width:33%;
                height:38%;
            }
            .modal_Gallary img:hover{
                filter: grayscale(0);
                transform: scale(1.03);
            }
            .Home_Page{
                text-align: right;
            }
            a:link,a:visited{
                text-decoration: none;
                color: #009879;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Building Details</h1>
        <div class="tooltip">
            <h2>Info :</h2>
            Building Code: <span id="Building_Code" class="info"> {{ $mergedBuilding[0]->buildingCode }} </span><br><br>
            Description: <span id="Description" class="info">{{ $mergedBuilding[0]->description }}</span><br><br>
            Status: <span id="Status" class="info">{{ $mergedBuilding['status'] }}</span><br><br>
            Type: <span id="Type" class="info">{{ $mergedBuilding[0]->type }}</span><br><br> 
            Zone: <span id="Zone" class="info">{{ (int)$mergedBuilding[0]->zone }}</span><br><br>  
            Company Code: <span id="cCode" class="info">{{ $mergedBuilding[0]->cCode }}</span><br><br> 
            Project Type: <span id="Project_type" class="info">{{ $mergedBuilding[0]->projectCode }}</span><br><br>
            Total Units: <span id="Total_Units" class="info">{{ $mergedBuilding['total_units'] }}</span><br><br>
            No.Available Units: <span id="Available_Units" class="info"> <a href="{{ url('/available_units') }}/{{$mergedBuilding[0]->buildingCode}}" > {{ $mergedBuilding['available'] }} </a> </span><br><br>
            No.Unavailable Units: <span id="Unavailable_Units" class="info"> {{ $mergedBuilding['unavailable'] }}</span><br><br>
            <div class="modal_Gallary">
            <a href="{{ asset('img/Building.jpg') }}"  data-lightbox="mygallery" data-title="Over View"><img src="{{ asset('img/Building.jpg') }}"/></a>
                <a href="{{ asset('img/Unit2.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit2.jpg') }}" /></a>
                <a href="{{ asset('img/Unit3.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit3.jpg') }}" /></a>
                <a href="{{ asset('img/Unit4.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit4.jpg') }}" /></a>
                <a href="{{ asset('img/Unit5.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit5.jpg') }}" /></a>
                <a href="{{ asset('img/Unit6.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit6.jpg') }}" /></a>
                <a href="{{ asset('img/Unit7.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit7.jpg') }}" /></a>
                <a href="{{ asset('img/Unit8.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit8.jpg') }}" /></a>
                <a href="{{ asset('img/Unit9.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit9.jpg') }}" /></a>
            </div> 
        </div><br><br><br><br><br>
        <a href="{{ url('/') }}" class="Home_Page"> Back To Home Page </a>
    </body>
</html>

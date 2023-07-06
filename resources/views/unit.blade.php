<html>
    <head>
        <title>Unit Details</title>
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
                font-weight: bold;            }
            h2{
                color: #009879; 
                font-weight: bold;
            }
            
            .tooltip{
                width: 100%;
                height: 75%;
                text-align: left;
                font-family: sans-serif;
                color: black;
                font-weight: bold;
            }
            .modal_Gallary{
                float: right; 
                width: 70%;
                height: 100%;
                margin-top: -430px;
            }
            .modal_Gallary img{
                filter: grayscale(100%);
                transition: 1s;
                width:33%;
                height:33%;
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
        <h1>Unit Details</h1>
        <div class="tooltip">
            <h2>Info :</h2>
            Unit Number: <span id="Unit Number" class="info">{{$unit[0]->unitNumber}}</span><br><br>
            Description: <span id="Description" class="info">{{$unit[0]->description}}</span><br><br>
            Status: <span id="Status" class="info">@if($unit[0]->status == 'Avail')Available @elseif($unit[0]->status == 'Res')Reserved @endif</span><br><br>
            Floor No: <span id="FloorNo" class="info">{{(int)$unit[0]->floor}}</span><br><br>  
            Price Amount: <span id="PriceAmount" class="info">{{$unit[0]->priceAmount}}</span><br><br>  
            Price Currency: <span id="PriceCurrency" class="info">{{$unit[0]->priceCurr}}</span><br><br> 
            Size: <span id="Size" class="info">{{$unit[0]->size}}</span><br><br> 
            Unit Of Measurment: <span id="UnitOfMeasurment" class="info">{{$unit[0]->unitOfMeasurment}}</span><br><br> 
            <!-- Layout Image: <span id="LayoutImage" class="info"></span><br><br>  -->
            Project Code: <span id="ProjectCode" class="info">{{$unit[0]->projectCode}}</span><br><br> 
            Building Code: <span id="BuildingCode" class="info">{{$unit[0]->buildingCode}}</span><br><br>
			<span id="reserve" class="info"><a href="https://my349320.sapbydesign.com/sap/public/ap/ui/repository/SAP_UI/HTMLOBERON5/client.html?client_type=html&app.component=/SAP_UI_CT/Main/root.uiccwoc&rootWindow=X&redirectUrl=/sap/public/ap/ui/runtime#n=eyJpblBvcnQiOiIiLCJ0YXJnZXQiOiIvWTVTTlpZWkxZX01BSU4vU1JDL09mZmVycy9PZmZlcnNfV0NWaWV3LldDVklFVy51aXdvY3ZpZXciLCJwYXJhbXMiOnt9LCJsaXN0cyI6e30sIndjQ29udGV4dCI6eyJ3b2NJZCI6Ii9ZNVNOWllaTFlfTUFJTi9TUkMvUmVzZXJ2YXRpb25TaW11bGF0aW9uL1Jlc2VydmF0aW9TaW11bGF0aW9uX1dDRi5XQ0YudWl3b2MiLCJ2aWV3SWQiOiIvWTVTTlpZWkxZX01BSU4vU1JDL09mZmVycy9PZmZlcnNfV0NWaWV3LldDVklFVy51aXdvY3ZpZXciLCJpc092cCI6ZmFsc2UsImlzTmF2Tm9kZSI6dHJ1ZSwibmF2Tm9kZVRleHQiOiJSRSUyME9wZXJhdGlvbiUyMC0lMjBSZXNlcnZhdGlvbnMifX0%3D" class="Home_Page">Reserve Now</a></span>
            <div class="modal_Gallary">
                <a href="{{ asset('img/Unit.jpg') }}"  data-lightbox="mygallery" data-title="Over View"><img src="{{ asset('img/Unit.jpg') }}"/></a>
                <a href="{{ asset('img/Unit2.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit2.jpg') }}" /></a>
                <a href="{{ asset('img/Unit3.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit3.jpg') }}" /></a>
                <a href="{{ asset('img/Unit4.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit4.jpg') }}" /></a>
                <a href="{{ asset('img/Unit5.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit5.jpg') }}" /></a>
                <a href="{{ asset('img/Unit6.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit6.jpg') }}" /></a>
                <a href="{{ asset('img/Unit7.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit7.jpg') }}" /></a>
                <a href="{{ asset('img/Unit8.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit8.jpg') }}" /></a>
                <a href="{{ asset('img/Unit9.jpg') }}" data-lightbox="mygallery" data-title="Living Room"><img src="{{ asset('img/Unit9.jpg') }}" /></a>
            </div> 
        </div><br><br>
        <a href="{{ url('/') }}" class="Home_Page"> Back To Home Page </a>
    </body>
</html>

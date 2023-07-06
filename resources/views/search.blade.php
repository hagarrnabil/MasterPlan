<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	
	  <style>
          *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 0;
                height: 100vh;
                text-align: center;
                color: #009879;
                font-weight: bold;
            }

            
            header{
                height: 90px;
                background: #2f3640;
                width: 100%;
            }

            .inner-width{
                max-width: 1000px;
                padding: 0 10px;
                margin: auto;
            }

            .logo{
                float: left;
                padding: 20px 0;
            }

            .logo img{
                height: 50px;
            }

            .navigation-menu{
                float: right;
                display: flex;
                align-items: center;
                min-height: 90px;
            }

            .navigation-menu a{
                margin-left: 10px;
                color: #ddd;
                text-transform: uppercase;
                font-size: 14px;
                padding: 12px 20px;
                border-radius: 4px;
                transition: .3s linear;
            }

            .navigation-menu a:hover{
                background: #fff;
                color: #2f3640;
                transform: scale(1.1);
            }

            .navigation-menu i{
                margin-right: 8px;
                font-size: 16px;
            }

            .home{
                color: #ff6b6b;
            }

            .about{
                color: #0abde3;
            }

            .works{
                color: #feca57;
            }

            .team{
                color: #5f27cd;
            }

            .contact{
                color: #1dd1a1;
            }
            .fa-search{
                color: tomato;
            }

            .menu-toggle-btn{
            float: right;
            height: 90px;
            line-height: 90px !important;
            color: #fff;
            font-size: 26px;
            display: none !important;
            cursor: pointer;
            }


            @media screen and (max-width:700px) {
            .menu-toggle-btn{
                display: block !important;
            }

            .navigation-menu{
                position: fixed;
                width: 100%;
                max-width: 400px;
                background: #172b4d;
                top: 90px;
                right: 0;
                display: none;
                padding: 20px 40px;
                box-sizing: border-box;
            }

            .navigation-menu::before{
                content: "";
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-bottom: 10px solid #172b4d;
                position: absolute;
                top: -10px;
                right: 10px;
            }

            .navigation-menu a{
                display: block;
                margin: 10px 0;
            }

            .navigation-menu.active{
                display: block;
            }
            }
            
            /*Prg*/
            p { font: 1.125em/2 trebuchet ms, tahoma, sans-serif }

            /* Box + - */ 
            code {
                display: inline-block;
                padding: 0 .375em .125em;
                border-radius: 5px;
                background: #ccc;
                font: 900 1.125em/1.25 consolas, monaco, monospace;
                cursor: pointer;
            }

            /*Map*/
            svg {
                width: 99vw;
            }

            /*Path*/
            [d] {
                fill: rgba(81, 240, 7, 0.4);
                transition: .7s;
                cursor: pointer;
            }

            /*
            hover Path
            [d]:hover { }
            */

            /*msg for zoom in and out*/
            .msg {
                height: 2em;
                padding: .25em .75em;
                border-radius: 5px;
                /*background: #009800;*/
                color: rgb(10, 10, 10);
                font-weight: bold;
            }

            /*ms2ola 3n el ay link magod fl model building*/
            a:link,a:visited{
                text-decoration: none;
                color: #009800;
                font-weight: bold;
            }   

            .modal{
                background-color: rgba(0,0,0, .8);
                width:100%;
                height: 100vh;
                position: absolute;
                left: 0;
                z-index: 10;
                opacity: 0;
                transition: all .5s;
            }

            .model{
                background-color: rgba(0,0,0, .8);
                width:100%;
                height: 145vh;
                position: absolute;
                transition: all .5s;
                align-self: start;
            }

            .modal__content{
                width: 75%;
                height: 65%;
                background-color: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 2em;
                border-radius: 1em;
                /*opacity: 0;*/
                transition: all .5s;
                background-image: url({{ asset('img/background.jpg') }});
                background-size: cover;
            }
            .modal__content_search{
                width: 75%;
                height: 65%;
                background-color: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 2em;
                border-radius: 1em;
                opacity: 0;
                transition: all .5s;
                background-image: url(background.jpg);
                background-size: cover;
                
                
            }

            #modal:target{
                opacity: 1;
                visibility: visible;
            }

            #model:target{
                opacity: 1;
                visibility: visible;
            }

            #modal:target .modal__content{
                opacity: 1;
                visibility: visible;
            }
            #modal:target .modal__content_search{
                opacity: 1;
                visibility: visible;
            }

            #model:target .modal__content{
                opacity: 1;
                visibility: visible;
            }
            
            #model:target .modal__content_search{
                opacity: 1;
                visibility: visible;
            }
            .modal__close{
                color: #363636;
                font-size: 2em;
                position: absolute;
                top: .5em;
                right: 1em;
            }

            .modal__heading{
                color: dodgerblue;
                margin-bottom: 1em;
                text-align: left;
                color: #009879;
            }

            .modal__paragraph{
                line-height: 1.5em;
                text-align: left;
                color: black;
            }

            .modal_Gallary{
                float: right; 
                width: 50%;
                height: 85%;
                margin-top: -310px;
            }

            .Building{
                float: right; 
                width: 100%;
                height:100%;
                margin-top: 60px;
                
            }

            .modal-open{
                display: inline-block;
                color: dodgerblue;
                margin: 2em;
                
            }

            .Unit_details{
                color: #009879;
                text-align: center;
            }

            .Building_details{
                color: #009879;
                
            }

             /*ms2ola 3n mkan el form fl screen*/
                .contact-form{
                width: 85%;
                max-width: 1100px;
                background: #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 30px 40px;
                box-sizing: border-box;
                border-radius: 8px;
                text-align: center;
                box-shadow: 0 0 20px #000000b3;
                font-family: "Montserrat",sans-serif;
                }



                .contact-form h1{
                margin-top: 0;
                font-weight: 200;
                }
                .txtb{
                border:1px solid gray;
                margin: 8px 0;
                padding: 12px 18px;
                border-radius: 8px;
                width: 40%;
                }
                .txtb2{
                border:1px solid gray;
                margin: -px 0;
                padding: 12px 18px;
                border-radius: 8px;
                width: 40%;
                float: right;
                }

                .txtb label{
                display: block;
                text-align: left;
                color: #333;
                text-transform: uppercase;
                font-size: 14px;
                }

                .txtb2 label{
                display: block;
                text-align: left;
                color: #333;
                text-transform: uppercase;
                font-size: 14px;
                }

                .txtb input,.txtb textarea ,.txtb2 input {
                width: 100%;
                border: none;
                background: none;
                outline: none;
                font-size: 18px;
                margin-top: 6px;
                }

                .btn{
                display: inline-block;
                /*background: #2f3640; 9b59b6*/
                padding: 14px 0;
                cursor: pointer;
                width: 50%;
                position: relative;
                color: rgb(14, 13, 13);
                font-size: 14px;
                border: 1px solid #2f3640;
                overflow: hidden;
                transition: 3s all ease;
                
                font-size: x-large;
                }
                .btn:hover{
                color: rgb(247, 245, 245);
                }
                .btn::before{
                background: #2f3640;
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                z-index: -1;
                transition: all 0.6s ease;
                width: 100%;
                height: 0%;
                transform: translate(-50%,-50%) rotate(45deg);
                }
                .btn:hover::before{
                height: 890%;
                }
                input[type=number], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                }
                /* Style the form - display items horizontally */

                .form-inline {
                    
                /*display: flex;*/
                flex-flow: row wrap;
                align-items: center;
                }
                /* Add some margins for each label */
                .form-inline label {
                margin: 5px 10px 5px 0;
                margin-right: 100%;
                color: rgb(43, 7, 246);
                }

                /* Style the input fields */
                .form-inline input {
                vertical-align: middle;
                margin: 5px 10px 5px 0;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
                }
                .first {
                    border:1px solid gray;
                    margin: -px 0;
                    padding: 12px 18px;
                    border-radius: 8px;
                    width: 50%;
                    float: right;
                    
                }
                .second {
                    height: 410px;
                    border:1px solid gray;
                    margin: 8px 0;
                    padding: 12px 18px;
                    border-radius: 8px;
                    width: 50%;
                }
                @media only screen and (max-width: 479px){
                    #form-inline { width: 90%; }
                }
                .buttonsearch {
                    background-color: #4CAF50; 
                    border:0.1em solid #FFFFFF;
                    color: white;
                    padding:  0.35em 1.2em;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 25px;
                    cursor: pointer;
                    transition: all 0.2s;
                    width: 60%;
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                    box-sizing: border-box;
                    font-weight: 300;
                    display: inline-block;
                    margin-top: 10px;

                }
                .buttonsearch:hover{
                    color: #000000;
                    background-color: #FFFFFF;
                    align-self: center;
                }
				</style>
  </head>
  <body>
    <div class="model" id="modal">
            <div class="modal__content">
                <a href="{{ url('/') }}" class="modal__close">&times;</a>
                <h2 class="modal__heading">Unit Search</h2>
                <div class="form-inline">
				<form action="{{ url('/') }}">
                    <div class="first">
		                <div class="phase">
                            <label for="phase">Phase:</label>
                            <select id='phase' data-trigger="" name="phase">
                                <option placeholder="" value=""></option>
								@foreach($phases as $phase)
                                <option value="{{$phase->phase}}" >{{$phase->phase}}</option>
								@endforeach
                            </select>
                        </div>
                        <div class="Zone">
                            <label for="zone">Zone:</label>
                            <select id='zone' data-trigger="" name="zone">
                                <option placeholder="" value=""></option>
								@foreach($zones as $zone)
                                <option value="{{$zone->zone}}" >{{(int)$zone->zone}}</option>
								@endforeach
                            </select>
                        </div> 
                        <div class="building">
                            <label for="building">Building:</label>  
                            <select id='building' data-trigger="" name="buildingCode">
                                <option placeholder="" value=""></option>
                                @foreach($buildings as $building)
                                <option value="{{$building->buildingCode}}" >{{$building->buildingCode}}</option>
								@endforeach
                            </select>
                        </div>
                        <div class="annex">
                            <label for="annex">Annex:</label>
                            <select id='annex' data-trigger="" name="annex">
                                <option placeholder="" value=""></option>
                                <option>Annex 1</option>
                                <option>Annex 2</option>
                            </select>
                        </div>
                        <div class="unit-type">
                            <label for="type">Type:</label>
                            <select id='type' data-trigger="" name="type">
                                <option placeholder="" value=""></option>
                                @foreach($types as $type)
                                <option value="{{$type->type}}" >{{$type->type}}</option>
								@endforeach
                            </select> 
                        </div>
                    </div>
                    <div class="second">
                        <div class="unit-category">
                            <label for="category">Category:</label>
                            <select id='category' data-trigger="" name="category" style="width: 97%;">
                                <option placeholder="" value=""></option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                            </select>
                        </div>
                        <div class="unit-delivery" style="margin-top: 8px;" >
                            <label for="Unit Delivery Date">DeliveryDate:</label>
                            <span style="color: rgb(43, 7, 246);"
                            >From</span> 
                             <input type="date" id="start" name="trip-start" style="width: 37%;"> <span style="color: rgb(43, 7, 246);"
                            >To</span>
                              <input type="date" id="end" name="trip-end" style="width: 37%;">
                         </div>
                         <div class="unit-size" style="margin-top: 8px;">
                            <label for="Unit size">Size:</label>
                           <span style="color: rgb(43, 7, 246);"
                           >From</span>
                            <input name="sizeFrom" type="number" value="50" min="0" max="800" style="width: 37%;"/> <span style="color: rgb(43, 7, 246);"
                            >To</span>
                            <input name="sizeTo" type="number" value="500" min="0" max="800" style="width: 37%;"/>
                         </div>
                         <div class="price" style="margin-top: 8px;">
                            <label for="Unit Price">Price:</label>
                            <span style="color: rgb(43, 7, 246);">From</span>
                            <input name="priceFrom" type="number" value="5000" min="0" max="100000000" style="width: 37%;"/><span style="color:rgb(43, 7, 246)">To
                            </span>
                            <input name="priceTo" type="number" value="50000" min="0" max="100000000" style="width: 37%;"/>
                        </div>
						
                    </div>                         
            </div>
                <input type="submit" value='Search' class="buttonsearch"/>
            </form>
       </div>
  </body>
</html>

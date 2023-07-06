<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
  <div class="contact-form">
    <h1>Search By</h1>

    <div class="txtb2">
      <label>Unit Size :</label>
      <input type="text" name="" value="" placeholder="Enter Unit Size">
    </div>

    <div class="txtb">
      <label>Project :</label>
      <input type="text" name="" value="" placeholder="Enter Project Name">
    </div>
    
    <div class="txtb2">
      <label>Unit Type :</label>
      <input type="text" name="" value="" placeholder="Enter Unit Type">
    </div>

    <div class="txtb">
      <label>Phase :</label>
      <input type="email" name="" value="" placeholder="Enter Phase Name">
    </div>

    <div class="txtb2">
      <label>Unit Category :</label>
      <input type="text" name="" value="" placeholder="Enter Unit Category">
    </div>

    <div class="txtb">
      <label>Zone :</label>
      <input type="text" name="" value="" placeholder="Enter Zone Name">
    </div>

    <div class="txtb2">
      <label>Unit Delivery Date :</label>
      <input type="text" name="" value="" placeholder="Enter Unit Delivery Date">
    </div>

    <div class="txtb">
      <label>Building :</label>
      <input type="text" name="" value="" placeholder="Enter Building">
    </div>

    <div class="txtb2">
      <label>Unit Price :</label>
      <input type="text" name="" value="" placeholder="Enter Unit Delivery Date">
    </div>

    <div class="txtb">
      <label>Annex Type :</label>
      <input type="text" name="" value="" placeholder="Enter Annex Type">
    </div><br>
    <a  href="{{ url('/') }}"><img src="{{ asset('img/search.png') }}" width="70px" height="60px"/></a>
    <a href="{{ url('/') }}" class="btn">Search</a>    
  </div>
  </body>
</html>

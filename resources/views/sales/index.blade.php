@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sales</h1>
                </div>

            </div>
        </div>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {
          box-sizing: border-box;
        }

        body {
          margin: 0;
        }

        .column {
          float: left;
          width: 25%;
          padding: 10px;
        }
        .text1 {
            text-align: center;
        }
        .column img {
          opacity: 0.8;
          cursor: pointer;
        }

        .column img:hover {
          opacity: 1;
        }

        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        .container {
          position: relative;
          display: none;
        }

        #blue, #red, #white, #black {
            color: cyan;
        }

        #imgtext {
          position: absolute;
          bottom: 15px;
          left: 15px;
          color: white;
          font-size: 20px;
        }

        .closebtn {
          position: absolute;
          top: 10px;
          right: 15px;
          color: white;
          font-size: 35px;
          cursor: pointer;
        }
        </style>
        </head>
        <body>

        <div style="text-align:center">
          <h2>Sports Car Sales</h2>
          <p>Click sports car you want</p>
        </div>


        <div class="row">
          <div class="column">
              <h3 class="text1">Nissan 370Z</h1>
            <img src="/picture/nissan.jpg" alt="Nissan 370Z" style="width:100%" onclick="myFunction(this);">
            <h4>Available Color</h4>
            <input type="radio" id="blue" name="drone" value="blue">
            <label for="blue" id="blue">Blue</label>
            <input type="radio" id="red" name="drone" value="red">
            <label for="red" id="red">Red</label>
            <input type="radio" id="white" name="drone" value="White">
            <label for="white" id="white">White</label>
            <input type="radio" id="black" name="drone" value="black">
            <label for="black" id="black">Black</label>
            <a href="{{ route('pricings.index') }}"
            class="nav-link {{ Request::is('pricings*') ? 'active' : '' }}">
            <p>Click here for sale price</p>
         </a>
          </div>
          <div class="column">
            <h3 class="text1">Mercedes Benz</h1>
            <img src="/picture/mercedes.jpg" alt="Mercedes Benz" style="width:100%" onclick="myFunction(this);">
            <h4>Available Color</h4>
            <input type="radio" id="blue" name="drone" value="blue">
            <label for="blue" id="blue">Blue</label>
            <input type="radio" id="red" name="drone" value="red">
            <label for="red" id="red">Red</label>
            <input type="radio" id="white" name="drone" value="White">
            <label for="white" id="white">White</label>
            <input type="radio" id="black" name="drone" value="black">
            <label for="black" id="black">Black</label>
            <a href="{{ route('pricings.index') }}"
            class="nav-link {{ Request::is('pricings*') ? 'active' : '' }}">
            <p>Click here for sale price</p>
         </a>
          </div>
          <div class="column">
            <h3 class="text1">Subaru WRX</h1>
            <img src="/picture/subura.jpg" alt="Subaru WRX" style="width:100%" onclick="myFunction(this);">
            <h4>Available Color</h4>
            <input type="radio" id="blue" name="drone" value="blue">
            <label for="blue" id="blue">Blue</label>
            <input type="radio" id="red" name="drone" value="red">
            <label for="red" id="red">Red</label>
            <input type="radio" id="white" name="drone" value="White">
            <label for="white" id="white">White</label>
            <input type="radio" id="black" name="drone" value="black">
            <label for="black" id="black">Black</label>
            <a href="{{ route('pricings.index') }}"
            class="nav-link {{ Request::is('pricings*') ? 'active' : '' }}">
            <p>Click here for sale price</p>
         </a>
          </div>
          <div class="column">
            <h3 class="text1">Chevrolet Corvette</h1>
            <img src="/picture/chevrolet.jpg" alt="Chevrolet Corvette" style="width:100%" onclick="myFunction(this);">
            <h4>Available Color</h4>
            <input type="radio" id="blue" name="drone" value="blue">
            <label for="blue" id="blue">Blue</label>
            <input type="radio" id="red" name="drone" value="red">
            <label for="red" id="red">Red</label>
            <input type="radio" id="white" name="drone" value="White">
            <label for="white" id="white">White</label>
            <input type="radio" id="black" name="drone" value="black">
            <label for="black" id="black">Black</label>
            <a href="{{ route('pricings.index') }}"
    class="nav-link {{ Request::is('pricings*') ? 'active' : '' }}">
    <p>Click here for sale price</p>
 </a>
          </div>
        </div>
        <a href="{{ route('products.index') }}"
        class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Back to products</p>
     </a>
        <div class="container">
          <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
          <img id="expandedImg" style="width:100%">
          <div id="imgtext"></div>
        </div>
        <script>
            function myFunction(imgs) {
              var expandImg = document.getElementById("expandedImg");
              var imgText = document.getElementById("imgtext");
              expandImg.src = imgs.src;
              imgText.innerHTML = imgs.alt;
              expandImg.parentElement.style.display = "block";
            }
            </script>
        </body>
        </html>
    </section>



@endsection


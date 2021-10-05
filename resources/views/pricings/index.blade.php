@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pricings</h1>
                </div>

            </div>
        </div>
    </section>
    <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {
          box-sizing: border-box;
        }

        .column1 {
          float: left;
          width: 25%;
          padding: 10px;
          height: 360px;
        }
        .column1 p {
            text-decoration: underline;
            font-weight: bold;
            font-style: italic;
        }
        .column {
          float: left;
          width: 25%;
          padding: 10px;
          height: 290px;
        }
        h2 {
            text-align: center;
        }
        .column p {
            text-decoration: underline;
            font-weight: bold;
            font-style: italic;
        }
        .row1 {
            text-align: center;
        }
        .row1:after {
          content: "";
          display: table;
          clear: both;
        }
        .button {
            background-color:#4a90e2;
            border:1px solid rgba(74,144,226,0.50);
            border-radius: 20px;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        button:hover{
	        background-color: rgb(0, 0, 158);
	        border: 1px solid #00326b;
	        color:#FFFFFF;
	        transition: all ease 0.3s;
}
        </style>
        </head>
        <body>

        <h2>Product price</h2>
        <div class="row1">
          <div class="column" style="background-color:#bbb; border-style: ridge;">
            <h4>Lamborghini</h4>
            <p>200,000 Dollars</p>
            <p>10,146,100.00 Php</p>
            <p>172,361.80 Euro</p>
            <p>14,928,399.20 Inr</p>
            <p>6,758,000.00 Thai Baht</p>
            <p>237,238,000.00 Won</p>
            <button class="button">buy now</button>
          </div>
          <div class="column" style="background-color:#bbb; border-style: ridge;">
            <h4>Mustang</h4>
            <p>32,655 Dollars</p>
            <p>1,657,600.46 Php</p>
            <p>28,146.49 Euro</p>
            <p>47,992.75 Inr</p>
            <p>21,753.48 Thai Baht</p>
            <p>763,766.63 Won</p>
            <button class="button">buy now</button>
          </div>
          <div class="column" style="background-color:#bbb; border-style: ridge;">
            <h4>Ferrari</h4>
            <p>526,888 Dollars</p>
            <p>26,725,603.47 Php</p>
            <p>454,180.09 Euro</p>
            <p>39,273,388.50 Inr</p>
            <p>17,803,545.52 Thai Baht</p>
            <p>625,084,116.56 Won</p>
            <button class="button">buy now</button>
          </div>
          <div class="column" style="background-color:#bbb; border-style: ridge;">
            <h4>BMW</h4>
            <p>42,245 Dollars</p>
            <p>2,142,624.16 Php</p>
            <p>36,415.40 Euro</p>
            <p>3,148,959.20 Inr</p>
            <p>1,427,458.55 Thai Baht</p>
            <p>50,109,751.65 Won</p>
            <button class="button">buy now</button>
          </div>
        </div>
        <br>
        <br>
        <br>
        <h2>Sales </h2>
        <div class="row1">
            <div class="column1" style="background-color:#ccc; border-style: double;">
              <h4>Nissan 370Z</h4>
              <h5>-50% sale-</h5>
              <p>$30,090 original price</p>
              <p style="color: red">NOW</p>
              <p>763,142.58 Php</p>
              <p>12,968.71 Euro</p>
              <p>1,121,771.75 Inr</p>
              <p>508,287.80 Thai Baht</p>
              <p>17,847,432.15 Won</p>
              <button class="button">buy now</button>
            </div>
            <div class="column1" style="background-color:#ccc; border-style: double;">
              <h4>Mercedes Benz</h4>
              <h5>20% sale</h5>
              <p>$54,250 original price</p>
              <p style="color: red">NOW</p>
              <p>2,200,336.60 Php</p>
              <p>37,412.75 Euro</p>
              <p>3,235,906.17 Inr</p>
              <p>1,466,920.00 Thai Baht</p>
              <p>51,489,109.00 Won</p>
              <button class="button">buy now</button>
            </div>
            <div class="column1" style="background-color:#ccc; border-style: double;">
              <h4>Subaru WRX</h4>
              <h5>30% sale</h5>
              <p>$37,245 original price</p>
              <p style="color: red">NOW</p>
              <p>1,322,033.62 Php</p>
              <p>22,473.50 Euro</p>
              <p>1,943,824.56 Inr</p>
              <p>880,969.02 Thai Baht</p>
              <p>30,935,659.76 Won</p>
              <button class="button">buy now</button>
            </div>
            <div class="column1" style="background-color:#ccc; border-style: double;">
              <h4>Chevrolet Corvette</h4>
              <h5>10% sale</h5>
              <p>$30,090 original price</p>
              <p style="color: red">NOW</p>
              <p>2,733,668.28 Php</p>
              <p>46,470.15 Euro</p>
              <p>4,019,222.31 Inr</p>
              <p>1,821,079.80 Thai Baht</p>
              <p>63,966,910.50 Won</p>
              <button class="button">buy now</button>
            </div>
          </div>
        </body>
        </html>
<br>
<br>
<br>
    <a href="{{ route('sales.index') }}"
    class="nav-link {{ Request::is('sales*') ? 'active' : '' }}">
    <p>Car sales here</p>
 </a>

    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
       <p>Back to products</p>
    </a>
@endsection


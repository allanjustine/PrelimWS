@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>

            </div>
        </div>
    </section>
    <html>
        <head>
            <style>
body{
	margin:0px;
	padding: 0px;
	background-color: #FFFFFF;
}
a{
	text-decoration:none;
}
.services{
	width:100%;
	height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: space-evenly;
	align-items: center;
}
.s-heading{
	text-align:center;
}
.s-heading h1{
	color:#576975;
	font-size: 3rem;
	font-weight: 400;
	letter-spacing: 1px;
	margin: 0px;
}
.s-heading p{
	color: rgba(87,105,117,0.60);
	font-size: 1rem;
	margin: 5px;
	text-align: center;
}
.s-box-container{
	width:100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.s-box{
	display:flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	width:300px;
	padding: 20px 25px;
	height: 400px;
	box-sizing: border-box;
	margin: 30px;
	position: relative;
}
.s-box img{
	height: 75px;
}
.s-box h1{
	color:#576975;
	letter-spacing: 1px;
	font-size: 1.5rem;
	margin-bottom: 8px;

}
.s-box p{
	color: rgba(87,105,117,0.90);
	text-align: center;
}
.s-btn{
	width: 140px;
	height: 40px;
	border-radius: 20px;
	border:1px solid rgba(74,144,226,0.50);
	display: flex;
	justify-content: center;
	align-items: center;
	color:#576975;
	margin-top:10px;
}
.bar{
	width: 100px;
	height: 6px;
	position: absolute;
	left: 50%;
	top: 0%;
	transform: translateX(-50%);
	background-color:#4a90e2;
	border-radius: 0px 0px 10px 10px;
	display: none;
	animation: bar 0.5s;
}
.s-box:hover{
	box-shadow: 2px 2px 30px rgba(0,0,0,0.08);
	transition: all ease 0.3s;
}
.s-btn:hover{
	background-color:#4a90e2;
	border: 1px solid #4a90e2;
	color:#FFFFFF;
	transition: all ease 0.3s;
}
.s-box:hover .bar{
	display: block;
}
@keyframes bar{
	0%{
		width:0px;
	}
	100%{
		width:100px;
	}
}
@media(max-width:1050px){
	.s-box-container{
		flex-wrap: wrap;

	}
	.services{
		height: auto;
	}
	.s-heading{
		margin: 15px;
	}
	.s-box{
		flex-grow: 1;
	}

}
                </style>
        </head>
        <body>
            <section class="services">
            <!--heading---------------->
            <div class="s-heading">
            <h1>Ser<font color="#4a90e2">vic</font>es</h1>
            <p>We Provide The Best In Class Servies For Our Customers</p>
            </div>
            <!--services-box-container------------------->
            <div class="s-box-container">
            <!--service-box-1---------------->
            <div class="s-box">
            <!--top-bar-------->
            <div class="bar"></div>
            <!--img---------->
            <img alt="1" src="/picture/images/1.png" />
            <!--servies-name---------->
            <h1>Spend Money</h1>
            <!--details------>
                <p>Track on your all daily expense and make your day to life easier.</p>
            <!--btn---------->
            <a class="s-btn" href="#">More</a>
            </div>
                <!--service-box-1---------------->
            <div class="s-box">
            <!--top-bar-------->
            <div class="bar"></div>
            <!--img---------->
            <img alt="2" src="/picture/images/2.png" />
            <!--servies-name---------->
            <h1>Set Budget</h1>
            <!--details------>
                <p>Make a Budget That Fit Right With You And Can Do Most With It</p>
            <!--btn---------->
            <a class="s-btn" href="#">More</a>
            </div>
                <!--service-box-3---------------->
            <div class="s-box">
            <!--top-bar-------->
            <div class="bar"></div>
            <!--img---------->
            <img alt="3" src="/picture/images/3.png" />
            <!--servies-name---------->
            <h1>Security</h1>
            <!--details------>
                <p>We Store All Card Info And Money Safe To Make You Relax And Crazy</p>
            <!--btn---------->
            <a class="s-btn" href="#">More</a>
            </div>
            </div>
            </section>
        </body>
        </html>

@endsection


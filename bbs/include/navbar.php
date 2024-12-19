<!DOCTYPE html>

<html>
    <head>

<meta charset="UTF-8">
<meta name="viewport" content="Width=device-width,initial-scale=1.0">
<title> navigation bar</title>
<style type="text/css">
*{
	text-decoration:none;
}
 .navbar{
	background-color:black;
	padding: 12px;
	

	.navdiv{
		display:flex;
		align-items:center;
		justify-content:space-between;		
}
.logo a
{
	font-size:35px;
	font-width:300;
	color:white;
	cursor:pointer;
}
li{
	list-style:name;
	display:inline-block;
	
}
li a{
	
color :white;
font-size:18px;
font-width:bold;
margin-right:120px;

}
button{
	padding:9px 20px;
	background-color:rgba(0,136,169,1);
	border:none;
	border-radius:50px;
	cursor:pointer;
	transition:all 0.3s ease 0s;
	
}

button:hover{
	background-color:rgba(0,136,169,0.8);
}

</style>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <a href="#"></a></div>
                <ul>
                    <li><a href="#" >Home</a></li>
                    <li><a href="#" >About us</a></li>
                    <li><a href="#" >Services</a></li>
                    <li><a href="#" >Booking Status</a></li>
                    <li><a href="#" >Contact</a></li>
                    <li><a href="#" >Admin</a></li>
					</ul>
					</nav>
</div>
</body>
</html>

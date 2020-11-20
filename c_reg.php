<?php
$id=filter_input(INPUT_POST,'id');
$name=filter_input(INPUT_POST,'name');
$phone=filter_input(INPUT_POST,'phone');
$pass=filter_input(INPUT_POST,'password');
$acc=filter_input(INPUT_POST,'account');
$milktype=filter_input(INPUT_POST,'milktype');
$adr=filter_input(INPUT_POST,'address');
$ifsc=filter_input(INPUT_POST,'ifsc');




$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = "webdairy";

$conn = mysqli_connect($server,$user,$pass,$dbname);
$id;
$sql="INSERT INTO `customer`(`id`, `name`, `phone`, `address`, `password`, `cattle`, `account_num`, `IFSC_code`) VALUES ($id,$name,$phone,$adr,$pass,$milktype,$acc,$ifsc)";
if(mysqli_query($conn,$sql ))
{
     echo 
	 "<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script>
alert('Your Order is Succesfully');
</script>
<style>
* { box-sizing: border-box; }

body {
  background-color:white-space;
  font-size: 16px;
}

#main-content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

#title {
  color: blue;
  position: absolute;
  top: 30%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 2em;
}
#title1 {
  color: red;
  position: absolute;
  top: 55%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 16px;
}

#btn {
  position: fixed;
  z-index: 5;
  top: 15px;
  left: 15px;
  cursor: pointer;
  -webkit-transition: left 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
  transition: left 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
}

#btn div {
  width: 35px;
  height: 2px;
  margin-bottom: 8px;
  background-color:black;
  -webkit-transition: -webkit-transform 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91), opacity 500ms, box-shadow 250ms, background-color 500ms;
  transition: transform 500ms cubic-bezier(0.6, 0.05, 0.28, 0.91), opacity 500ms, box-shadow 250ms, background-color 500ms;
}

#btn:hover > div { box-shadow: 0 0 1px #00DFFC; }

#btn.active { left: 230px; }

#btn.active div { background-color: #343838; }

#btn.active:hover > div { box-shadow: 0 0 1px #343838; }

#btn.active #top {
  -webkit-transform: translateY(10px) rotate(-135deg);
  -ms-transform: translateY(10px) rotate(-135deg);
  transform: translateY(10px) rotate(-135deg);
}

#btn.active #middle {
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
}

#btn.active #bottom {
  -webkit-transform: translateY(-10px) rotate(-45deg);
  -ms-transform: translateY(-10px) rotate(-45deg);
  transform: translateY(-10px) rotate(-45deg);
}

#box {
  position: fixed;
  z-index: 4;
  overflow: auto;
  top: 0px;
  left: -300px;
  width: 275px;
  opacity: 0;
  padding: 20px 0px;
  height: 100%;
  background-color:black;
  color: #343838;
  -webkit-transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
  transition: all 350ms cubic-bezier(0.6, 0.05, 0.28, 0.91);
}

#box.active {
  left: 0px;
  opacity: 1;
}

#items {
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

#items .item {
  position: relative;
  cursor: pointer;
  font-size: 20px;
  padding: 30px 30px;
  -webkit-transition: all 250ms;
  transition: all 250ms;
  color:white;
}

#items .item:hover {
  padding: 15px 45px;
  background-color:gray;
}

.avatar1{
    width: 100px;
    height: 100px;
    border-radius: 40%;
    position: absolute;
    top: 250px;
    left: 45%;
}


</style>
</head>

<body>
<div id='main-content'>
  <div id='title'>Dairy Management System</div>
  <div id='title1'>MILK FULL OF LOVE</div>

<img src='images.jpg' class='avatar1'>


</head>

  
</div>
<div id='btn'>
  <div id='top'></div>
  <div id='middle'></div>
  <div id='bottom'></div>
</div>
<div id='box'>
  <div id='items'>
    <a href='adminlog.html' ><div class='item' >Admin</div></a> 
    <a href='customerlog.html'><div class='item'>Customer</div></a>
    <a href='order.html' ><div class='item'>Order Now</div></a>
    
  </div>
</div>
<script>
var sidebarBox = document.querySelector('#box');
var sidebarBtn = document.querySelector('#btn');
var pageWrapper = document.querySelector('#main-content');

sidebarBtn.addEventListener('click', function(event) {

		if (this.classList.contains('active')) {
				this.classList.remove('active');
				sidebarBox.classList.remove('active');
		} else {
				this.classList.add('active');
				sidebarBox.classList.add('active');
		}
});

pageWrapper.addEventListener('click', function(event) {

		if (sidebarBox.classList.contains('active')) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});

window.addEventListener('keydown', function(event) {

		if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
</body>
</html>";
}
?>
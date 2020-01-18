<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>saint josphe student managment </title>
	<link rel="stylesheet" type="text/css" href="home.css" />
	<style>
	.news{
	position: absolute;
	margin: 5% 5%;
   color: red;
	}
	.news-2{
	position: absolute;
	margin: 40% 5%;
   color: red;
	}
/* contents for the  cardes*/
	.card{
	width: 350px;
	height: 350px;
	background: black;
	box-shadow: 0 5px 10px rgba(0,0,0,0.5);
	margin: 15% 5% auto;
   position: absolute; 
	border-radius: 10px;
	overflow: hidden;
}
.card span{
	height: 100%;
	left: 0;
	background: url(" img/girls.jpg");
	position: absolute;
	transition: 1s;
}
.card span:nth-child(1){
	z-index: 10;
	width: 25%;
	transition-delay: 0s;
}
.card span:nth-child(2){
	z-index: 9;
	width: 50%;
	transition-delay: 0.1s;
}.card span:nth-child(3){
	z-index: 8;
	width: 70%;
	transition-delay: 0.3s;
}.card span:nth-child(4){
	z-index: 7;
	width: 100%;
	transition-delay: 0.5s;
}
.card:hover span{
	transform: translateY(-100%);
	transition: 1s; 
}
.card:hover span:nth-child(1){
	transition-delay: 0.3s;
}
.card:hover span:nth-child(2){
	transition-delay: 0.2s;
}
.card:hover span:nth-child(3){
	transition-delay: 0.1s;
}
.card:hover span:nth-child(4){
	transition-delay: 0s;
}
.content{
	color: white;
	text-align: center;
	padding: 80px 20px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	transform: translateY(100%);
	transition: 2s;
}
.content a {
	width: 100px;
	text-decoration: none;
	border-radius: 50px;
	border: 1px solid white;
	display: block;
	margin: auto;
	padding: 10px;
	color: white;
}
.card:hover .content{
	transform: translateY(0%);
}
.card-2{
	width: 350px;
	height: 350px;
	background: black;
	box-shadow: 0 5px 10px rgba(0,0,0,0.5);
	margin: 15% 38% auto;
   position: absolute; 
	border-radius: 10px;
	overflow: hidden;
}
.card-2 span{
	height: 100%;
	left: 0;
	background: url("img/acchive.jpg");
	position: absolute;
	transition: 1s;
	}
.card-2 span:nth-child(1){
	z-index: 10;
	width: 25%;
	transition-delay: 0s;
}
.card-2 span:nth-child(2){
	z-index: 9;
	width: 50%;
	transition-delay: 0.1s;
}.card-2 span:nth-child(3){
	z-index: 8;
	width: 70%;
	transition-delay: 0.3s;
}.card-2 span:nth-child(4){
	z-index: 7;
	width: 100%;
	transition-delay: 0.5s;
}
.card-2:hover span{
	transform: translateY(-100%);
	transition: 1s; 
}
.card-2:hover span:nth-child(1){
	transition-delay: 0.3s;
}
.card-2:hover span:nth-child(2){
	transition-delay: 0.2s;
}
.card-2:hover span:nth-child(3){
	transition-delay: 0.1s;
}
.card-2:hover span:nth-child(4){
	transition-delay: 0s;
}


.content-2{
	color: white;
	text-align: center;
	padding: 80px 20px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	transform: translateY(100%);
	transition: 2s;
}
.content-2 a {
	width: 100px;
	text-decoration: none;
	border-radius: 50px;
	border: 1px solid white;
	display: block;
	margin: auto;
	padding: 10px;
	color: white;
}
.card-2:hover .content-2{
	transform: translateY(0%);
}
.card-3{
	width: 350px;
	height: 350px;
	background: black;
	box-shadow: 0 5px 10px rgba(0,0,0,0.5);
	margin: 15% 70% auto;
   position: absolute; 
	border-radius: 10px;
	overflow: hidden;
}
.card-3 span{
	height: 100%;
	left: 0;
	background: url("img/c.jpg");
	position: absolute;
	transition: 1s;
}
.card-3 span:nth-child(1){
	z-index: 10;
	width: 25%;
	transition-delay: 0s;
}
.card-3 span:nth-child(2){
	z-index: 9;
	width: 50%;
	transition-delay: 0.1s;
}
.card-3 span:nth-child(3){
	z-index: 8;
	width: 70%;
	transition-delay: 0.3s;
}
.card-3 span:nth-child(4){
	z-index: 7;
	width: 100%;
	transition-delay: 0.5s;
}
.card-3:hover span{
	transform: translateY(-100%);
	transition: 1s; 
}
.card-3:hover span:nth-child(1){
	transition-delay: 0.3s;
}
.card-3:hover span:nth-child(2){
	transition-delay: 0.2s;
}
.card-3:hover span:nth-child(3){
	transition-delay: 0.1s;
}
.card-3:hover span:nth-child(4){
	transition-delay: 0s;
}
.content-3{
	color: white;
	text-align: center;
	padding: 80px 20px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	transform: translateY(100%);
	transition: 2s;
}
.content-3 a {
	width: 100px;
	text-decoration: none;
	border-radius: 50px;
	border: 1px solid white;
	display: block;
	margin: auto;
	padding: 10px;
	color: white;
}
.card-3:hover .content-3{
	transform: translateY(0%);
}


.carde{
	width: 350px;
	height: 350px;
	background: black;
	box-shadow: 0 5px 10px rgba(0,0,0,0.5);
	margin: 50% 5%  auto;
   position: absolute; 
	border-radius: 10px;
	overflow: hidden;
}
.carde span{
	height: 100%;
	left: 0;
	background: url("img/a.jpg") no-repeat;
	position: absolute;
	transition: 1s;
}
.carde span:nth-child(1){
	z-index: 10;
	width: 25%;
	transition-delay: 0s;
}
.carde span:nth-child(2){
	z-index: 9;
	width: 50%;
	transition-delay: 0.1s;
}
.carde span:nth-child(3){
	z-index: 8;
	width: 70%;
	transition-delay: 0.3s;
}
.carde span:nth-child(4){
	z-index: 7;
	width: 100%;
	transition-delay: 0.5s;
}
.carde:hover span{
	transform: translateY(-100%);
	transition: 1s; 
}
.carde:hover span:nth-child(1){
	transition-delay: 0.3s;
}
.carde:hover span:nth-child(2){
	transition-delay: 0.2s;
}
.carde:hover span:nth-child(3){
	transition-delay: 0.1s;
}
.carde:hover span:nth-child(4){
	transition-delay: 0s;
}
.content-4{
	color: white;
	text-align: center;
	padding: 80px 20px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	transform: translateY(100%);
	transition: 2s;
}
.content-4 a {
	width: 100px;
	text-decoration: none;
	border-radius: 50px;
	border: 1px solid white;
	display: block;
	margin: auto;
	padding: 10px;
	color: white;
}
.carde:hover .content-4{
	transform: translateY(0%);
}




.carde-5 {
	width: 350px;
	height: 350px;
	background: black;
	box-shadow: 0 5px 10px rgba(0,0,0,0.5);
	margin: 50% 38%  auto;
   position: absolute; 
	border-radius: 10px;
	overflow: hidden;
}
.carde-5 span{
	height: 100%;
	left: 0;
	background: url("img/pen.jpg") no-repeat;
	position: absolute;
	transition: 1s;
}
.carde-5 span:nth-child(1){
	z-index: 10;
	width: 25%;
	transition-delay: 0s;
}
.carde-5 span:nth-child(2){
	z-index: 9;
	width: 50%;
	transition-delay: 0.1s;
}
.carde-5 span:nth-child(3){
	z-index: 8;
	width: 70%;
	transition-delay: 0.3s;
}
.carde-5 span:nth-child(4){
	z-index: 7;
	width: 100%;
	transition-delay: 0.5s;
}
.carde-5:hover span{
	transform: translateY(-100%);
	transition: 1s; 
}
.carde-5:hover span:nth-child(1){
	transition-delay: 0.3s;
}
.carde-5:hover span:nth-child(2){
	transition-delay: 0.2s;
}
.carde-5:hover span:nth-child(3){
	transition-delay: 0.1s;
}
.carde-5:hover span:nth-child(4){
	transition-delay: 0s;
}
.content-5{
	color: white;
	text-align: center;
	padding: 80px 20px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	transform: translateY(100%);
	transition: 2s;
}
.content-5 a {
	width: 100px;
	text-decoration: none;
	border-radius: 50px;
	border: 1px solid white;
	display: block;
	margin: auto;
	padding: 10px;
	color: white;
}
.carde-5:hover .content-5{
	transform: translateY(0%);
}


.carde-6 {
	width: 350px;
	height: 350px;
	background: black;
	box-shadow: 0 5px 10px rgba(0,0,0,0.5);
	margin: 50% 70%  auto;
   position: absolute; 
	border-radius: 10px;
	overflow: hidden;
}
.carde-6 span{
	height: 100%;
	left: 0;
	background: url("img/lab.jpg") no-repeat;
	position: absolute;
	transition: 1s;
}
.carde-6 span:nth-child(1){
	z-index: 10;
	width: 25%;
	transition-delay: 0s;
}
.carde-6 span:nth-child(2){
	z-index: 9;
	width: 50%;
	transition-delay: 0.1s;
}
.carde-6 span:nth-child(3){
	z-index: 8;
	width: 70%;
	transition-delay: 0.3s;
}
.carde-6 span:nth-child(4){
	z-index: 7;
	width: 100%;
	transition-delay: 0.5s;
}
.carde-6:hover span{
	transform: translateY(-100%);
	transition: 1s; 
}
.carde-6:hover span:nth-child(1){
	transition-delay: 0.3s;
}
.carde-6:hover span:nth-child(2){
	transition-delay: 0.2s;
}
.carde-6:hover span:nth-child(3){
	transition-delay: 0.1s;
}
.carde-6:hover span:nth-child(4){
	transition-delay: 0s;
}
.content-6{
	color: white;
	text-align: center;
	padding: 80px 20px;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	transform: translateY(100%);
	transition: 2s;
}
.content-6 a {
	width: 100px;
	text-decoration: none;
	border-radius: 50px;
	border: 1px solid white;
	display: block;
	margin: auto;
	padding: 10px;
	color: white;
}
.carde-6:hover .content-6{
	transform: translateY(0%);
}




.footer{
	background: #303036;
	color: #fff;
	height: 450px; 
	width: 1512px;
	position: absolute;
	margin: 80% 0% auto;
	
}
.footer .footer-bottom{
position: relative;
margin: 10% 40%;
bottom: 0px;
left:0px;
text-align: center;

}
.footer .footer-content{

	
    height: 350px;
    display: flex;
}
.footer .footer-content .footer-section{
	flex: 1;
	padding: 25px;
	border:1px solid #fff;
}
.footer .footer-section .footer-content .footer-section-about{
	margin: 1% 5%;

}
.footer .footer-section .footer-content .footer-section-contact{
	margin: 1% 10%;
}
.footer-bottem{
	margin: 28% -58% auto;
	position: center;
}
.footer .footer-section .footer-content .footer-section-link{
	margin: 1% 8%;
}



	</style>


</head>
<body>
<img src="img/photo.jpg"width="1500" height="150">


<div class="menu-bar">
		<ul>
		<li class="active"><a href="home.html"><strong>HOME</strong></a></li>
		<li><a href="#"><strong>LOGIN</strong></a>
         <div class="sub-menu-1">
         	<ul>
         		<li><a href="index.php">FAMILY</a></li>
         		<li><a href="index2.php">STUDENT</a></li>
				<li><a href="index3.php">TEACHER</a></li>
				<li><a href="admin.php">ADMIN</a></li>
         	</ul>
         </div>
		</li>
	    <li><a href="contact.php"><strong>CONTACT</strong></a></li>
	    <li><a href="#"><strong>ABOUT</strong></a>
	    <div class="sub-menu-2">
         	<ul>
         		<li><a href="aschool.php">SCHOOL</a></li>
         		<li><a href="adevelop.php">DEVELOPERS</a></li>
         	</ul>
         </div>
         </li> 
</ul>
</div>
<div class="news">
<p><strong><h1>NEWS FEED</h1></strong></p>
</div>
<div class="news-2">
	<p><strong><h1>UPCOMING EVENTS IN THE SCHOOL</h1></strong></p>
	</div>


<div class="card">
	<span></span><span></span><span></span><span></span>
	<div class="content">
	<h2>girls basket ball team</h2>
	<p>saint josph girls basket ball will paricipate for .....</p>
	<a href="read-1.html">Read more</a>
</div>
</div>


<div class="card-2" >
	<span></span><span></span><span></span><span></span>
	<div class="content-2"> 
   <h2>designed Bkstudio</h2>
   <p>it is a software campany that is used to develop a computer system</p>
   <a href="read-1.html">Read more</a>
	</div>
</div>

<div class="card-3">
	<span></span><span></span><span></span><span></span>
	<div class="content-3"> 
   <h2>designed Bkstudio</h2>
   <p>it is a software campany that is used to develop a computer system</p>
   <a href="read-1.html">Read more</a>
   </div>
</div>


<div class="carde">
	<span></span><span></span><span></span><span></span>
	<div class="content-4"> 
	 <h2>designed Bkstudio</h2>
	 <p>it is a software campany that is used to develop a computer system</p>
	 <a href="#">Read more</a>
	</div>
  </div>

  <div class="carde-5">
	<span></span><span></span><span></span><span></span>
	<div class="content-5"> 
	 <h2>designed Bkstudio</h2>
	 <p>it is a software campany thaa computer system</p>
	 <a href="read-2.html">Read more</a>
	</div>
  </div>

<div class="carde-6">
	<span></span><span></span><span></span><span></span>
	<div class="content-6"> 
	 <h2>designed Bkstudio</h2>
	 <p>it is a software campany that is used to develop a computer system</p>
	 <a href="#">Read more</a>
	</div>
  </div>



  <div class="footer">
	<div class="footer-section">
	<div class="footer-content">
		<div class="footer-section-about">
			<h3>about this website</h3>
			<h4><p>this website is design to help families and students
       <br>to help both families and students, families can 
       <br>access there childers acadamic result and make payment
       <br>online student can make registeration and access thier
       <br>assessment online.
       <br>
       <br>this website  id designed for educational service the owner
       <br>of the sit is saint joseph school adama branch
       <br>the development of the site is done by Smart technologies
       <br>
       <br> 
       <br>SAINT JOSPHE SCHOOL ADAMA
         </p></h4>

      </p>
		</div>
		<div class="footer-section-link">
			<h3>links to our school</h4>
			<P><H4>SAINT JOSPHE SCHOOL</H4></P>
			<P><H4>Contact St. Joseph</H4></P>
			<P><H4>Nazareth Community</H4></P>
			<P><H4>P.O Box 406</H4></P>
			<P><H4>nazareth, Ethiopia</H4></P>
			<P><H4>Tel School: 251 (22) 111.3019</H4></P>
			<P><H4>Br. Sheferaw Mekonen(Heaqdmster)</H4></P>
			<p><h4>Email:sjsadama@telecom.net.et</h4></p>
			<a><i class="fab fa-facebook"></i></a>
		</div>
		<div class="footer-section-contact">
			<h1>SAINT JOSPHE SCHOOL</h1>
			<p><h1>  ADAMA</h1></p>
			<img src="img/logo.jpg"width="150" height="150">
		</div>
	<div class="footer-bottem">
		&copy; smartTechnologies.com| designed by SMART THECNOLOGIES
	</div>
</div>
</div>
</div>
</ul>
</div>






</body>
</html>
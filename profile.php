
<?php    session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>wellcome</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>

	<img src="img/photo.jpg"width="1500" height="150">

	 <div class="menu-bar">
    <ul>
    <li class="active"><strong>welcome</strong></li>
    <li ><a href="asses.php" ><strong>CHILD ASSESMENT</strong></a></li>
     <li><a href="paye.php"><strong>PAYMENT</strong></a></li>   
      <li><a href="opening.html"><strong>LOGOUT</strong></a></li>
</ul>
</div>

<center>
	<p><H1>WELCOME  <?php echo $_SESSION['username'];  ?>    TO SAINT JOSPHE STUDENT MANAGMENT SYSTEM</H1></p>
	<p><H3>This is family page,in this page you can access your childassessment  </H3></p>
	<p><H3> resuls and make the monthly payment online </H3></p>
	<p><H1>*    *   *   * </H1></p>



</center>



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
		&copy; smartthcnologies.com| designed by SMART THECNOLOGIES
	</div>
</div>
</div>
</div>
</ul>
</div



</html>

</body>
<style>


.footer{
  background: #303036;
  color: #fff;
  height: 450px; 
  width: 1512px;
  position: absolute;
  margin: 15% 0% auto;
  
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

</html>
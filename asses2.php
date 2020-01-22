<?php
session_start();
 require 'dbconfig/config.php';
 $connect = mysqli_connect("localhost","root","","phplearning");
 $query = "SELECT * FROM asses where";
 $result = mysqli_query($connect,$query);
?>
<html>
<head>
  <title>assesment</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="asses.css">
  <style> 
body{ background-image: url('img/back.jpg');}
table,th,td{
  border: 2px solid black;
  width: 1100px;
  background-color: lightgreen;

}

.btn{
  width: 10%;
  height: 5%;
  font-size: 22px;
  padding: 0px;
  color: blue;
}



.footer{
  background: #303036;
  color: #fff;
  height: 450px; 
  width: 1512px;
  position: absolute;
  margin: 10% 0% auto;
  
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
   <img src="img/photo.jpg"width="1500" height="170">

<div class="menu-bar">
    <ul>
    <li ><a href="profile2.php"><strong>WELCOME STUDENT</strong></a></li>
    <li class="active"><a href="#"><strong>ASSESMENT</strong></a>

    </li>
      <li><a href="rege.php"><strong>REGISTER</strong></a></li>
      <li><a href="opening.html"><strong>LOGOUT</strong></a>
      </li>
    </ul>
  </div>
<div class="note"> <p>STUDENT ASSESMENT CHECKING  FORM</p></div>

<br><br><br><br><br><br>

  <center>
    <div class="container">
      
    <form action="" method="POST">
      <input type="text" class="btn" name="id" placeholder="id">
       <input type="password" class="btn" name="password" placeholder="password">
      <input type="submit" class="btn" name="search" value="SHOW RESUT">
    </form>
    <table><tr>
        <th> id </th>
        <th> name </th>
        <th> dept </th>
        <th> class </th> 
        <th> classInstractor </th>
        <th> maths </th>
        <th> english </th>
        <th> physics </th>
        <th> chemistery </th> 
        <th> biology </th>
        <th> history </th>
        <th> geography </th>
        <th> economics </th>
        <th> ict </th>
        <th> hpe </th>  
        <th> conduct </th>
        <th> average </th>
        <th> rank </th>                 


    </tr><br>

   <?php

        $connection = mysqli_connect("localhost","root","");
        $dn = mysqli_select_db($connection,'phplearning');

        if (isset($_POST['search'])) {
             $id = $_POST['id'];
             $password = $_POST['password'];
             $query = "SELECT * FROM asses WHERE id = '$id' AND password = '$password'" ;
             $query_run = mysqli_query($connection,$query);

             while ($row = mysqli_fetch_array($query_run)) {
              ?>

         <tr>
  
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['dept']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['classinst']; ?></td>
<td><?php echo $row['maths']; ?></td>
<td><?php echo $row['english']; ?></td>
<td><?php echo $row['physics']; ?></td>
<td><?php echo $row['chem']; ?></td>
<td><?php echo $row['biology']; ?></td>
<td><?php echo $row['history']; ?></td>
<td><?php echo $row['geo']; ?></td>
<td><?php echo $row['eco']; ?></td>
<td><?php echo $row['ict']; ?></td>
<td><?php echo $row['hpe']; ?></td>
<td><?php echo $row['conduct']; ?></td>
<td><?php echo $row['average']; ?></td>
<td><?php echo $row['rank']; ?></td>


</tr>

        <?php
               
             }
           } 
?>
  </table>


    </div>




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
        <P><H1>SCHOOL </H1></P>
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


</body>
</html>
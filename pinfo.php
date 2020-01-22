<?php
 
 $connect = mysqli_connect("localhost","root","","phplearning");
 $query = "SELECT * FROM payment ORDER BY id DESC";
 $result = mysqli_query($connect,$query);
?>
<html>
<head>

    <title>admine payment display</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>


<style>


.footer{
  background: #303036;
  color: #fff;
  height: 450px; 
  width: 1512px;
  position: absolute;
  margin: 25% -14% auto;
  
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

.menu-bar{
	   background-color: #33bbff;
    text-align: center;
    width: 1500;
}
.menu-bar ul{
	display: inline-flex;
	list-style: none;
	color: white;

}
.menu-bar ul li{
width: 120px;
margin: 15px;
padding: 15px;

}
.menu-bar ul li a{
	text-decoration: none;
	color: white;
}
.active, .menu-bar ul li:hover{
	background: green;
	border-radius: 3px;
}
.sub-menu-1{
	display: none;
}
.menu-bar ul li:hover .sub-menu-1{
	display: block;
	position: absolute;
	background:green;
	margin-top: 15px;
	margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-1 ul{
	display: block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li{
width: 150px;
padding: 10px;
border-bottom: 1px dotted #fff;
background: transparent;
border-radius: 0px;
text-align: left;
}
.sub-menu-2{
	display: none;
}
.menu-bar ul li:hover .sub-menu-2{
	display: block;
	position: absolute;
	background:green;
	margin-top: 15px;
	margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-2 ul{
	display: block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-2 ul li{
width: 150px;
padding: 10px;
border-bottom: 1px dotted #fff;
background: transparent;
border-radius: 0px;
text-align: left;
}


.contact{
	margin:110% -70% auto;
	position: absolute;
}



.menu-bar{
	   background-color: #33bbff;
	text-align: center;
}
.menu-bar ul{
	display: inline-flex;
	list-style: none;
	color: white;

}
.menu-bar ul li{
width: 120px;
margin: 15px;
padding: 15px;

}
.menu-bar ul li a{
	text-decoration: none;
	color: white;
}
.active, .menu-bar ul li:hover{
	background: green;
	border-radius: 3px;
}
.sub-menu-1{
	display: none;
}
.menu-bar ul li:hover .sub-menu-1{
	display: block;
	position: absolute;
	background:green;
	margin-top: 15px;
	margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-1 ul{
	display: block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li{
width: 150px;
padding: 10px;
border-bottom: 1px dotted #fff;
background: transparent;
border-radius: 0px;
text-align: left;
}
.sub-menu-2{
	display: none;
}
.menu-bar ul li:hover .sub-menu-2{
	display: block;
	position: absolute;
	background:green;
	margin-top: 15px;
	margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-2 ul{
	display: block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-2 ul li{
width: 150px;
padding: 10px;
border-bottom: 1px dotted #fff;
background: transparent;
border-radius: 0px;
text-align: left;
}


.contact{
	margin:110% -70% auto;
	position: absolute;
}



</style>


</head>
<body>
<img src="img/photo.jpg"width="1500" height="150">



<div class="menu-bar">
<ul>
        <li ><a href="adminpage.php" ><strong>ADMIN HOME</strong></a></li>
    <li ><a href="admins.php" ><strong>STUDENT INFORMATION</strong></a></li>
     <li class="active"><a href="adminf.php"><strong>FAMILY INFORMATION</strong></a></li>   
	 <li><a href="sinup3.php"><strong>ADD TEACHER </strong></a></li> 
	 <li ><a href="signup.php"><strong>ADD FAMIILY</strong></a></li> 
     <li ><a href="pinfo.php"><strong>payment information</strong></a></li> 
      <li><a href="opening.html ?>"><strong>LOGOUT</strong></a></li>
</ul>
</div>
    <div class="container">
     <br />
     <br />
     <br />
     <div class="table-responsive">
         <h3>PAYMENT PANEL</h3>
         <table id="editable_table" class="table table-border table striped">
             <thead>
                  <tr>
                    <th>id</th>
                    <th>cname</th>
                    <th>grade</th>
                    <th>fee</th>
                    <th>pname</th>
                    <th>accnum</th>
                    
                  </tr>
             </thead>
             <tbody>
<?php
$query='select * from payment';
$result=$connect->query($query);
if($result->num_rows >0)
{
while($row = mysqli_fetch_array($result))
{
  echo'
  <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["cname"].'</td>
                    <td>'.$row["grade"].'</td>
                    <td>'.$row["fee"].'</td>
                    <td>'.$row["pname"].'</td>
                    <td>'.$row["accnum"].'</td>
    </tr>
  '; 

}

}
?>

            </tbody>
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
<style>



    </style>


</html>
<script>


$(document).ready(function(){
$('#editable_table').Tabledit({
url:'actionp.php',
columns:{
identifier:[0, "id"],
editable:[[1, 'cname'], [2, 'grade'], [3, 'fee'], [3, 'pname'], [5, 'accnum'] ]
}, 
restoreButton:false,
onSuccess:function(data,textStatus,jqXHR)
{
    if(data.action == 'delete'){
        $('#'+data.id).remove();
    }
}
});

});
</script>
<?php

 require 'dbconfig/config.php';


?>


<html>
    <head>

        <title>uploading student result</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <img src="img/photo.jpg"width="1500" height="150">
  

      <div class="menu-bar">
    <ul>

    <li ><a href="profilet.php" ><strong>TEACHER HOME</strong></a></li>
    <li class="active"><a href="up.php" ><strong>UPLOED RESULT</strong></a></li>
     <li><a href="dis.php"><strong>DISPLAY RESULT</strong></a></li>   
      <li><a href="opening.html"><strong>LOGOUT</strong></a></li>
</ul>
</div>


<div class="text">
<p>UPLOADING ASSESSMENT RESULT</p>
</div>

       
        <div id="main">
            
            
            <center>
                <h2>UPLOADING ASSESSMENT RESULT</h2>
                <img src="img/logo.jpg" class="avatar">
          
            </center>
            
            <form class="myform" method="post">
                
                 <label class="label">Student name:</label>
            
                 <input type="text"  name="username"  class="input" placeholder="Type username" required/>
                <br>
                <label class="label">Depeartment:</label>
    
                 <input type="text"  name="dept"  class="input" placeholder="department" required/>
                <br>
                <label class="label">instractor name:</label>
            
                 <input type="text"  name="classinst"  class="input" placeholder="class instractor" required/>
                <br>
                <label class="label">maths:</label>
      
                <input type="text" name="maths"  class="input" placeholder="maths"/>
                   <br>
                   <label class="label">English:</label>
      
                <input type="text" name="english"  class="input" placeholder="english"
                   <br>
              
                 <label class="label">Physics:</label>
          
                <input type="text"  name="physics" class="input" placeholder="Physics"  />
                <br>
                <label class="label">Chemistery:</label>
                <input type="text"  name="chem" class="input" placeholder="chemistery"  />
                <br>
      
                <label class="label">biology:</label>
                <input type="text"  name="biology" class="input" placeholder="biology"  />
                <br>
    
                <label class="label">History:</label>
                <input type="text"  name="history" class="input" placeholder="history"  />
                <br>
          
                <label class="label">georaphy:</label>
                <input type="text"  name="geo" class="input" placeholder="geography"  />
                <br>
          
                <label class="label">economics:</label>
                <input type="text"  name="eco" class="input" placeholder="economics"  />
                <br> 
                <label class="label">ict:</label>
                <input type="text"  name="ict" class="input" placeholder="ict"  />
    
                <br>
                <label class="label">health and physical education:</label>
                <input type="text"  name="hpe" class="input" placeholder="hpe"  />
                <br>
  
                <label class="label">Conduct:</label>
                <input type="text"  name="conduct" class="input" placeholder="student conduct"  />
                <br>

                <label class="label">average:</label>
                <input type="number"  name="average" class="input" placeholder="average"  />
                <br>
                <label class="label">Rank:</label>
                <input type="number"  name="rank" class="input" placeholder="rank"  />
                <br>
                <input type="submit" name="submitbn"  id="signupb"  value="UPLOAD"/>
                       <br>
              
                
            
             
                
                
                
                
                
            </form>
            
            
   <?php 
    
   
     if(isset($_POST['submitbn']))
   
     { 
        $username=$_POST['username'];
        $dept=$_POST['dept'];
        $class=$_POST['class'];
        $classinst=$_POST['classinst'];
        $maths=$_POST['maths'];
        $english=$_POST['english'];
        $physics=$_POST['physics'];
        $chem=$_POST['chem'];
        $biology=$_POST['biology'];
        $history=$_POST['history'];
        $geo=$_POST['geo'];
        $eco=$_POST['eco'];
        $ict=$_POST['ict'];
        $hpe=$_POST['hpe'];
        $conduct=$_POST['conduct'];
        $average=$_POST['average'];
        $rank=$_POST['rank'];
      
                $query="SELECT * FROM asses  WHERE username='$username'";
                $result= mysqli_query($conn, $query);
                   
                
                  if( mysqli_num_rows($result)>0)
                  {
                     echo '<script type="text/javascript"> alert("username is taken tryanother ")   </script>'; 
                  }
                  
                 {
                    $query="INSERT INTO asses (username,dept,class,classinst,maths,english,physics,chem,biology,history,geo,eco,ict,hpe,conduct,average,rank) values( '$username','$dept','$class', '$classinst','$maths ','$english','$physics','$chem','$biology','$history','$geo','$eco','$ict','$hpe','$conduct','$average','$rank')";
                      
                      $result=mysqli_query($conn,$query);
                      
                        
                      
                        if($result)
                        {
                           echo '<script type="text/javascript"> alert("YOU ARE SUCCESSFULLY REAGISTERED TO SAINTJOSPHE SCHOOL")   </script>'; 
                            
                        }
                        else{
                        echo("Error description: " . mysqli_error($conn));
                          
                            
                        }
                      
                   }
                
                
                
                
            
         
       
           
     
     
     
     
     
     
     }
      
   
   ?>




            
            
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

    </body>



    <style>
    
    
    
body{
background-image: url('img/assess.jpg');
background-repeat: no-repeat;
background-position: center;
background-size: cover;
margin: 0;
width: 100%;
height: 250%;
font-family: 'Ubuntu', sans-serif;
}

#main{
    width: 400px;
    margin: 0 auto;
    background:white;
    padding: 10px;
    margin: 5% 35% auto;
    border-radius: 10px;
    border: 2px solid #2c3e50;

}
.avatar{
    
    
    width: 100px;
    text-align: center;
    
        margin-bottom: 45px;
}
.myform{
 width: 350px;
margin: 0 auto;  
    
    
}
.label{
 font-size: 20px;
}
.input{
    
    width:100%;
    margin:0 auto;
    padding:5px;
    margin-bottom: 10px;
    
}
#loginb
{background-color: #0099ff;
margin-top: 40px;
 padding:5px;
 color:white;
 width:80%; 
 font-size: 18px;
 text-align: center;

}
#registerbt
{
background-color: #0099ff;
margin-top: 40px;
 padding:5px;
 color:white;
 width:80%; 
 font-size: 18px;
 text-align: center;
}

#signupb
{
   background-color:#3498db;
margin-top: 10px;
 padding:5px;
 color:white;
 width:80%; 
  font-size: 18px;
 text-align: center;   
}
#back_btn
{
   background-color:red;
margin-top: 10px;
 padding:5px;
 color:white;
 width:80%; 
  font-size: 18px;
 text-align: center;
}
#logoutbtn{
    
background-color:red;

 padding:2px;
 color:white;
 width:70px; 
  font-size: 12px;
  text-align: center; 
 border: 2px solid #2c3e50;
    
}
.wrapper{
    
    
    width :1500px;
    margin:auto;
    
     
}
header{
    
    
    background: linear-gradient (rgba(0,0,0,0.6), rgba(0,0,0 0.6));
    height: 100vh;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    position: relative;
      
}
.nav-area{
    
    
    
   float: right;
   list-style:none;
   
    
    
}




    

#welcometext{
   border:1px solid #fff;
   padding: 10px 25px;
   text-decoration: none;
   text-transform: uppercase;
   display: inline-block;
   font-size:14px;
   margin-top: 20px;
     background: #fff;
    color:#333;
        
}




.footer{
  background: #303036;
  color: #fff;
  height: 450px; 
  width: 1512px;
  position: absolute;
  margin: 0% 0% auto;
  
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


.text{
    
    font-size: 40px; 
    color:white;

}


  

    </style>
</html>

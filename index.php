<html>
<head>
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.debug.js"></script>
        <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    
        <link rel="stylesheet" type="text/css" href="css/index.css">
    
        <link rel="stylesheet" type="text/css" href="css/breakpoint.css">
       
         <link rel="icon"  type="image/png" href="img/uiux.png">
    
<!-- HAMBURGER MENU   -->
   
    
        <script>
            var a = 0;
        $(document).ready(function() {
            $("#boxx").click(function() {
                if (a % 2 == 0) {
                    $("#div1111").show();
                    $("#one").css({
                     "transform":"rotate(42deg)",
                     "top":"30px",
                     "transition":"0s"   
                    });
                    $("#two").css("display","none");
                    $("#three").css({
                     "transform":"rotate(-42deg)",
                     "top":"30px",
                     "transition":"0s"   
                    });
                    a++;
            
                } 
                else{
                    $("#div1111").hide();
                      $("#one").css({
                     "transform":"rotate(0deg)",
                     "top":"0px",
                     "transition":"0s"
                    });
                    $("#two").css("display","inherit");
                    $("#three").css({
                     "transform":"rotate(0deg)",
                     "top":"65px",
                     "transition":"0s"   
                    });
                    a++;}
                });

        });

    </script>
    
<!-- HAMBURGER MENU   -->

  <script>
    function pagescr(aj){
        $("html, body").animate({scrollTop:aj},"slow");
    }      
  </script>

  <script>
                         
        function teamval() 
        {
            var na = document.company.name.value;
            var em = document.company.email.value;
            var nu = document.company.con.value;
            var co = document.company.com.value;
            var se = document.company.services.value;
            var me = document.company.message.value;
            
             if (na == "" || em == "" ||  nu == "" || co == "" || se == "" || me == "")
            {
                alert("Enter All Reqired Fields");
                return false;
            }
            if (nu.length != 10) 
            {
                alert("Enter 10 Digit Mobile Number");
                return false;
            } 
            if(na!= "" || em!= "" ||   nu!= "" || co!= "" || se!= "" || me!= "")
            {
                alert("Submitted Successfully");   
            }
        }
                          

      </script>
    
</head>

<body>
    <div id="main">
        <div id="box1">
            <?php include 'header.php';?>
            
<!--hamburger menu-->
          
        <div id="boxx">
        <div id="one"></div>
        <div id="two"></div>
        <div id="three"></div>
        </div>
            
        <div id="div1111">
        <div id="f1" onclick="pagescr(0)">HOME</div>
        <div id="f2" onclick="pagescr(1900)">SERVICES</div>
        <div id="f3" onclick="pagescr(4170)">CLIENTS</div>
        </div>
            
<!--hamburger menu-->
     

		            <!--     form       -->

             
            <form id="form1" method="post" name="company" onsubmit="return teamval()">
            <div id="mainlogin1"> 
            <div id="blueheadd"></div>
            <div id="blueheadtextt">Get In Touch</div>
               
                     <input type="text" id="fullnamee" placeholder="Name" name="name" required>
                    <input type="email" id="emailidd" placeholder="Email" name="email" required>
                     <input type="text" id="phonenumberr" placeholder="Contact Number" name="con" maxlength="10" onkeypress='return event.charCode >=48 && event.charCode<=57' required>
                     <input type="text" id="companyn" placeholder="Company Name" name="com" required>
                <select id="select11" name="services" required>
                    <option value="">Services</option>
                    <option value="web design">Responsive web Designing</option>
                    <option value="mobile App">Mobile App Development</option>
                    <option value="web development">Responsive web Development</option>
                    <option value="usability">Usability Testing</option>
                    <option value="workflow">Workflow Management System</option>
                    <option value="crm">CRM Customization,Development & Implementation</option>
                    <option value="consultancy">Consultancy</option>
                    <option value="Construction Engineering">Construction Engineering</option>
                    
                </select>
                <textarea id="messageus" placeholder="Message Us Here" name="message" required></textarea>
                <input type="submit" id="sendrequest" value="Send Request"  name="sub" required>
               </div>   
            </form>
           
            </div>
                
                <!--     form       -->
            

        
    <!-- #endregion Jssor Slider End -->



                <!--  services  -->

<div id="greydiv">

    <div id="servicesdiv">
        <div id="our_services">Our Services</div>
    </div>
                        
    <center>
                            
        <div id="group_div">
            
        <a href="responsivewebdesign.php">
                                    
                                <div id="box_one">
                                    <div id="image1"><img src="img/webdesign.png" height="160" width="210"></div>
                                    <div id="text1">
                                        <p id="pp1">Responsive web Designing</p>
                                    </div>
                                </div>
        </a>
                                
        <a href="mobileappdevelopment.php">
                                <div id="box_two">
                                    <div id="image2"><img src="img/mobileaapp.png" height="150" width="120"></div>
                                    <div id="text2">
                                        <p id="pp2">Mobile App Development</p>
                                    </div>
                                </div>
        </a>

        <a href="responsivewebdevelopment.php">
                                <div id="box_three">
                                    <div id="image3"><img src="img/webdesign.png" height="160" width="210"></div>
                                    <div id="text3">
                                        <p id="pp3">Responsive web Development</p>
                                    </div>
                                </div>
        </a>    

        <a href="usablitytesting.php">
                                <div id="box_four">
                                    <div id="image4"><img src="img/us.png" height="160" width="180"></div>
                                    <div id="text4">
                                        <p id="pp4">Usability Testing</p>
                                    </div>
                                </div>
        </a>    
                                   
        <a href="workflowmanagementsystem.php">
                                <div id="box_five">
                                    <div id="image5"><img src="img/workf.png" height="180" width="250"></div>
                                    <div id="text5">
                                        <p id="pp5">Workflow Management System</p>
                                    </div>
                                </div>
        </a>
                                
        <a href="crm.php">
                                <div id="box_six">
                                    <div id="image6"><img src="img/crmcrm.png" height="170" width="180"></div>
                                    <div id="text6">
                                        <p id="pp6">CRM Customization,Development & Implementation </p>
                                    </div>
                                </div>
        </a>
                                
        <a href="consultancy.php">
                                <div id="box_seven">
                                    <div id="image7"><img src="img/consultancy.png" height="250" width="250"></div>
                                    <div id="text7">
                                        <p id="pp7">Consultancy</p>
                                    </div>
                                </div>
        </a>    

        <a href="ce.php">
                                <div id="box_eight">
                                    <div id="image8"><img src="img/sas.png" height="250" width="250"></div>
                                    <div id="text8">
                                        <p id="pp8">Construction  Engineering</p>
                                    </div>
                                </div>
        </a>
                                
        </div>
    </center>
</div>

                    <!--      services      -->
                   
           

                    <?php include 'slider.php';?>
                    <?php include'footer.php';?>       

<!--
                            <div id="our_team">
                                <div id="tagline">We Are Your Virtual IT Development Team</div>
                            </div>
-->


        
    </div>
</body>
</html>

<?php
date_default_timezone_set("Asia/Kolkata");
$curdate=date('Y-m-d');
$curtime=date('H:i:s');       
//$con=mysql_connect("localhost","root","");
//$db=mysql_select_db("logiio");
//if(isset($_POST['sub']))
//{
//    $a=$_POST["name"];
//    $b=$_POST["email"];
//    $c=$_POST["con"];
//    $d=$_POST["com"];
//    $e=$_POST["services"];
//    $f=$_POST["message"];
//                
//     $query="insert into getintouch values(' ','$a','$b','$c','$d','$e','$f','',)";
//     mysql_query($query);
//}
include "allfunctions.php";
$obj=new allfunctions();

$obj->connect();
 
$ipp=$obj->returnIP();

if(isset($_POST['sub']))
{
    $a=$_POST["name"];
    $b=$_POST["email"];
    $c=$_POST["con"];
    $d=$_POST["com"];
    $e=$_POST["services"];
    $f=$_POST["message"];
   
//    echo $a,$b,$c,$d,$e,$f,$curdate,$curtime,$ipp;
    $ans=$obj->insertdb("getintouch","Name",$a,"Email",$b,"Contact_No",$c,
                        "Company_Name",$d,"Services",$e,"Message_Us_Here",$f,"Cur_Date",$curdate,"Cur_Time",$curtime,"Ip_Address",$ipp);

//    if($ans==1)
//    {
//        echo "<script>alert('REGISTERED SUCCESSFULLY');</script>";   
//    }
//    else
//    {
//        echo "<script>alert('TRY AGAIN');</script>";
//    }   
}
?>
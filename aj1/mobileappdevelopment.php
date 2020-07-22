<html>
<head>
    <link rel="stylesheet" href="css/mobileappdevelopment.css" type="text/css">
    
     <style>
        a{color:white;text-decoration: none;}
    </style>
</head>
    <body>
        <?php include "header.php";?>
        
<div id="header">
<!--    <a href="http://pratikjoil.com/aj/"><div id="logo">LOGIIO</div></a>-->
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php">SERVICES</a></li>
        <li><a href="index.php">CLIENTS</a></li>
    </ul>

</div>

    <div id="main">
       
        <div id="backbox">
        </div>
        <div id="text1">Mobile App Development</div>
<!--        <p id="p1">Responsive web design is the practice of optimizing your site to work well on devices including desktops, tablets and smartphones.</p>-->
        
        <div id="fulltext">   
        <p id="def">Mobile  application  development  is  the  set  of  processes  and  procedures  involved  in  writing  software  for  small,  wireless  computing  devices  such  as  smartphones  or  tablets. Mobile  application  development  is  similar  to  Web  application  development  and  has  its  roots  in  more  traditional  software  development. In  the  future,  it's  expected  that  a  majority  of  mobile  application  development  efforts  will  focus  on  creating  browser-based  applications  that  are  device-agnostic. </p>
        </div> 
        
  
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
                alert("Enter All Reuired Fields");
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
        
    <form id="form1" method="post" name="company" onsubmit="return teamval()">
    <div id="blueheadd"></div>
    <div id="blueheadtextt">Get In Touch</div>
<!--
                <div id="getintouch">Get In Touch</div>
                <div id="line">The right choice for smart people to get things done effortlessly</div>
-->
                
                <input type="text" id="tt1" placeholder="Name" name="name" required>
                <input type="email" id="tt2" placeholder="Email" name="email" required>
                <input type="text" id="tt3" placeholder="Contact Number" name="con" maxlength="10" onkeypress='return event.charCode >=48 && event.charCode<=57' required>
                <input type="text" id="tt4" placeholder="Company Name" name="com" required>

                <select id="select1" name="services" required>
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
                <textarea id="tt5" placeholder="Message Us Here" name="message" required></textarea>
                <input type="submit" id="tt6" value="Send Request"  name="sub" required>
                    
          </form>
        </div>
    </body>
</html>
<?php
date_default_timezone_set("Asia/Kolkata");
$curdate=date('Y-m-d');
$curtime=date('H:i:s');       

include "allfunctions.php";
$obj=new allfunctions();    

$obj->connect();
 
$ipp=$obj->returnIP();

$page="Mobile App Development";

if(isset($_POST['sub']))
{
    $a=$_POST["name"];
    $b=$_POST["email"];
    $c=$_POST["con"];
    $d=$_POST["com"];
    $e=$_POST["services"];
    $f=$_POST["message"];
   
    //echo $a,$b,$c,$d,$e,$f,$curdate,$curtime,$ipp;
    $ans=$obj->insertdb("services","Name",$a,"Email",$b,"Contact_No",$c,
                        "Company_Name",$d,"Services",$e,"Message_Us_Here",$f,"Cur_Date",$curdate,"Cur_Time",$curtime,"Ip_Address",$ipp,"Page_Name",$page);

}
?>
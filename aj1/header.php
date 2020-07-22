<head>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
    function pagescroll(len){
        $("html, body").animate({scrollTop:len},"slow");
    }
        
        
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1){
                    $('#header').addClass("sticky");
                    $('ul').addClass("sticky");
                    $('ul li').addClass("sticky");
        
                } 
                
                else
                { 
                    $('#header').removeClass("sticky");
                      $('ul').removeClass("sticky");
                    $('ul li').removeClass("sticky");
          
                } 
            });
    </script>
    
<!--
    <script>
    
    $(document).ready(function(){
    $("#header").scroll(function(){
       $("#header").animate({
         opacity: "0.2"  
       });
    }); 
});

    </script>
-->
</head>
<div id="header">
<!--    <a href="http://pratikjoil.com/aj/"><div id="logo">LOGIIO</div></a>-->
    <ul>
        <li onclick="pagescroll(0)"><a>HOME</a></li>
        <li onclick="pagescroll(893)"><a>SERVICES</a></li>
        <li onclick="pagescroll(1713)"><a>CLIENTS</a></li>
    </ul>

</div>

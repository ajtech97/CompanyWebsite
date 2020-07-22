<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.debug.js"></script>
    <script>
        jQuery(document).ready(function($) {

            var jssor_1_options = {
                $AutoPlay: true,
                $AutoPlaySteps: 1,
                $SlideDuration: 250,
                $SlideWidth: 445,
                $SlideSpacing: 200,
                $Cols: 3,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 4
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 1,
                    $SpacingY: 1
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(1000);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });

    </script>
    <style>
        .jssorb03 {
            position: absolute;
        }
        
        .jssorb03 div,
        .jssorb03 div:hover,
        .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        
        .jssorb03 div {
            background-position: -5px -4px;
        }
        
        .jssorb03 div:hover,
        .jssorb03 .av:hover {
            background-position: -35px -4px;
        }
        
        .jssorb03 .av {
            background-position: -65px -4px;
        }
        
        .jssorb03 .dn,
        .jssorb03 .dn:hover {
            background-position: -95px -4px;
        }
        
        .jssora03l,
        .jssora03r {
            display: none;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a03.png') no-repeat;
            overflow: hidden;
           
        
        }
        
        .jssora03l {
            background-position: -3px -33px;
        }
        
        .jssora03r {
            background-position: -63px -33px;
        }
        
        .jssora03l:hover {
            background-position: -123px -33px;
        }
        
        .jssora03r:hover {
            background-position: -183px -33px;
        }
        
        .jssora03l.jssora03ldn {
            background-position: -243px -33px;
        }
        
        .jssora03r.jssora03rdn {
            background-position: -303px -33px;
        }

    </style>
</head>

<body>
    <div id="our_clients">

        <div id="client">Our Client Galaxy</div>
        <div id="jssor_1" style="position: absolute; top: 50px; width: 2700px;//border:solid; height: 400px;left:50%;overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: absolute; top: 150px;//border:solid; left: 50%;margin-left:-400px; width: 1750px; height: 210px; overflow: hidden;">
                
                
                <div>
                    <a href="http://www.truckbazzar.com/Dindex.php">
                    <img data-u="image" src="img/trucklogo.png"/>
                    </a>
                </div>
                
                <div style="display: none;">
                    <a href="http://epropertyworld.com/build/">
                    <img data-u="image" src="img/back.jpg" />
                    </a>
                </div>
                
                <div>
                    <a href="http://bloodfriends.in/desktop/">
                    <img data-u="image" src="img/bloo.png" />
                    </a>
                </div>
                
                <div>
                    <a href="http://12thit.com/desktop/index.php">
                    <img data-u="image" src="img/it.png" />
                    </a>
                </div>
                

                <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>

            </div> <span data-u="arrowleft" class="jssora03l" style="margin-top:60px;left:8px;width:55px;height:55px;border:solid;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora03r" style="margin-top:60px;right:8px;width:85px;height:85px;border:solid;" data-autocenter="2"></span>
        </div>



    </div>
</body>

</html>

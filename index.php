<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>#TAKECONTROL</title>
	<meta name="description" content="Roskilde Festival / 2018 / Denmark / Copenhagen / VALG">
	<meta name="viewport takecontrol" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/logo1.png" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="formstyle.css" rel="stylesheet">
	<script src="js/jquery-1.6.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/init.js"></script>
    <script src="js/script.js"></script>

<!---CSS--> 
	<style type="text/css">
		#intro { 
			background: url(images/subtle.png) 50% 0 fixed; 
			height: auto;  
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;
		}
		#home { 
			background: url(images/rf18.jpg) 100% 0 fixed; 
			height: auto;  
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 200px 0;
    
		}
        .home {
           background: url("images/home.jpg") 50% 0 fixed; 
			height: auto;  
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 200px 0; 
            
        }
        
        #about { 
			background: url(images/about.png) 50% 0 fixed; 
			height: auto;
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;
		    color: #fff;
		}
        #logo {
            width: 50px; height: 50px;
            position: absolute;
            margin-top: 700px;
            margin-left: 125px;
    
        }
        .title {
            color: white;
            position: absolute;
            width: 50px;
            height: 50px;
            
            
        }
        
        .titlee {
            background-color: white;
            position: absolute;
            width: 250px;
            height: 250px;
            color: red;
            
            z-index: 99;
        }
        
        h1 {
            color: darkorange;
            margin: auto;
            margin-top: 35%;
            width: 50%;
            position: absolute;
            margin-left: 35%;
            
            
        }
        .jscountdownn {
            font-size: 46px;
            height: 140px;
            position: relative;
            font-family: 'Anton', sans-serif;
            text-shadow: 2px 2px black;
            width: 100%;
            color: white;
          }
        
        .sqlcountdownn {
            background-size:cover;
            height: 140px;
            font-family: 'Anton', sans-serif;
            font-size: 45px;
            color: black;
            text-shadow: 2px 2px whitesmoke;
            width: 100%;
        
        }
        
        .rf2018bg {
            
            height: 140px;
            font-family: 'Anton', sans-serif;
            font-size: 44px;
            color: orange;
            text-shadow: 2px 2px #A33F1D;
            width: 100%;
          
        }
        
        h2 {
            font-family: 'Anton', sans-serif;
        }
		/* Non-essential demo stuff */
		.hero-unit {
			background-color: #fff;
		    box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}
		.media-object { width: 64px; height: 64px; padding-bottom: 30px }
        
        .venstre {
            padding-right: 60px;
        }
        .venstre:hover {
            width: 65px;
        }
        .infoo {
            padding-top: 100px;
            margin-left: 43%;
        }
        .choosew {
            margin-left: 45%;
        }
        
        .respimg {
                height: 208px;
                width: 250px;
                margin-left: 22px;
                
        
        }
        .respimgr {
                margin-left: -10px;
        }
        .respimgk {
                margin-left: -7px;
        }
        .forum {
            width: 550px;
            height: auto;
            background-color: pink;
            position: inherit;
        }
        .shareee {
            margin-left: 333px;
        }
        .tb {
            background: none;
            border: none;
            border-top: none;
        }
        .position {
            margin-top: 50px;
            margin-left: 10px;
        }
        #rfcountdown {
            width: 100%;
            height: 100%;
            margin-top: 12%;
        }
        .bs {
            box-shadow: 20px 20px 20px 3px rgba(0, 0, 0, 0.5);
            border-top: none;
            border: none;
            }
        
        .goback {
            margin-top: -90px;
        }
        h5 {
            position: relative;
            font-size: 50px;
            color: white;
            margin-top: -100px;
            padding-bottom: 50px;
            padding-left: 9%;
            text-shadow: 4px 4px black;
        }
	</style>

</head>

<body>
    
<!---PHP-->    
    <h1>  <?php 
   //  include("database.php");
        
   //     $title = mysqli_query($link, "Select title from title where id = 1");
     //   if(!$link){
       //     die("ERROR" . mysqli_error());
//        } else {
//            echo '<div class="title">';
//                $title_display = mysqli_fetch_array($title);
//                echo $title_display['title'];
//            echo '</div>';
//            }
        ?></h1>
    
   
            <video width="100%" height="100%" autoplay loop onloadstart="this.volume=0.0">
  <source src="images/rf.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
            </video>
	<div class="navbar navbar-inverse navbar-fixed-bottom">
	  <div class="navbar-inner">
	  	<div class="container">
		    <a class="brand" href="#">#TAKECONTROL</a>
		    <ul class="nav">
		      <li class="active"><a href="#"><img src="images/logo2w.png" width="26px" height="55px"></a></li>
		      <li><a href="#infobar">INFO</a></li>
		      <li><a href="#home">COUNTDOWN</a></li>
              <li><a href="#about">FEEDBACK</a></li>
		    </ul>
		</div>
	  </div>
	</div>

	<!-- Section #1 -->
    
	<section id="intro" data-speed="6" data-type="background">
		<div class="container" id="infobar">
			<div class="row-fluid">
                
                <div class="span4 well tb">
		          <img class="respimg" src="images/logo1.png" width="350px">
                    
		        </div>
               <div class="span4 well tb">
		          <img class="respimgk" src="images/kobehavnskommune.png" width="420px" alt="kklogo">
		        </div> 
                
		        <div class="span4 well tb">
		          <img class="respimgr" src="images/logo-clean.svg" width="390px" alt="RF">
		        </div>
	    	</div>
            <div class="polina" id="poli">
    </div>
	    	<div class="hero-unit">
	    		<h2>#TAKECONTROL</h2>
	    		<p>TV2 Lorry and Roskilde Festival are giving you the chance to win from 5% up to 40% dicount on your ticket for next year!</p>
                <p>When and how is this happening - you can find out in the nearest kommune.</p><br>
                <p># WHAT IS THE MISSION OF THE COMMUNITIES<br>
The municipalities take care of daily and public welfare. This may include social assistance, primary school, day care centers and elderly care. The benefits paid by the municipality to the citizens are financed by the state. This means that the municipality functions as a kind of bank that addresses public welfare for the citizens of the municipalities.</p>
<p> #DIVIDES OF REGION AND MUNICIPALITY <br>
In Denmark, the public sector can be divided into the state, regions and municipalities. Regions and municipalities differ from each other, as the regions are far larger than the municipalities. We have 5 regions and 98 municipalities in Denmark. The 5 regions' main task is to administer hospital services and regional development in social areas.</p>
            
	    	</div>
	    </div>
	</section>

    
	<!-- Section #2 -->
	<section id="home" data-speed="4" data-type="background" class="votecph">
		 <h5>"It is not the voting that's democracy, it's the counting."</h5> 
        <div class="container">
			<div class="row-fluid">         
		        <div class="span4 well bs" style="background-image:url('images/keybcd.jpg'); background-repeat:no-repeat; background-size:cover;">
		<div class="jscountdownn">
            <p id="jscountdown" class="first position">
                    </p><br> 
            <p>TEST</p>
                    </div>
                    
		        </div><!-- /.span4 -->
		        <div class="span4 well bs" style="background-image:url('images/citycd.jpg'); background-repeat:no-repeat; background-size:cover;">
		         
		    <div class="sqlcountdownn"> <p id="sqlcountdown" class="position">
                  </p>
                   <br>
                <p>ELECTIONS</p>
                    
                    </div>  


		        </div><!-- /.span4 -->
                
		   <div class="span4 well bs" style="background-image:url('images/oscd.jpg'); background-repeat:no-repeat; background-size:cover;">

               <div class="rfcountdown rf2018bg"> <p id="rfcountdown" class="position ">
                  </p>
                  
                   <p class="goback">RF 2018</p>
                   
               </div>  
		        </div><!-- /.span4 -->
	    	</div>
	    </div>
	</section>
    
    <section id="intro" data-speed="6" data-type="background">
        <div class="whiteb container" style="width:100%; height:100%; background-color: white; z-index:99; position:absolute; margin-top:-100px;">
            <p><strong>VENSTRE, DANMARKS LIBERALE PARTI
KEY ISSUES (MÆRKESAGER)
LYNGBY-TAARBÆK KOMMUNE</strong><br>
Venstre ønsker udvikling i både købstæder og landsbyer, så alle dele ad kommunen bliver et godt sted at bo og arbejde.<br>
Venstre vil sætte borgerne in centrum -og prioritere beskæftigelse og jon højt. Derfor skal kommunens administration indrettes efter borgere og erhvervsliv -ikke omvendt.<br>
Venstre tager borgerne alvorligt -vi lytter før vi beslutter.<br>
Venstre går imod stigninger i skatter, gebyrer og afgifter. Det må ikke blive dyrere at bo og drive erhverv i kommunen.<br>
Venstre vil slås for at fastholde de nuværende skoler og afdelinger- samt daginstitutioner. Sådan bevares en levende kommune.<br>
Venstre vil, hvor det er muligt, udbyde nybyggeri og vedligeholdelse i fagentrepriser frem for hovedentrepriser. Det giver lokale arbejdspladser.<br>
Venstre siger nej til store vindmøller på land indtil sundhedsrisikoen er afklaret i 2015.</p>
        <button class="venstrebutton"><strong>Close</strong></button>
        </div>
		<div class="container">
            
			<div class="row-fluid">
            <strong><p class="choosew">CHOOSE WISELY</p></strong>
            <img src="logos/venstre.png" width=50px; class="venstre"/>
            <img src="logos/alternativet.png" width=50px; class="venstre"/>
            <img src="logos/dflogo.png" width=50px; class="venstre"/>
            <img src="logos/dkflogo.png" width=50px; class="venstre"/>
            <img src="logos/enhedslisten.png" width=50px; class="venstre"/>
            <img src="logos/liberal.png" width=50px; class="venstre"/>
            <img src="logos/nlogo.png" width=50px; class="venstre"/>
            <img src="logos/radikalelogo.png" width=50px; class="venstre"/>
            <img src="logos/sdlogo.png" width=50px; class="venstre"/>
            <img src="logos/sflogo.png" width=50px; class="venstre"/>
            <p class="infoo">Click for more information.</p>
            
          
            </div> 
            </div>
	</section>

	<!-- Section #3 -->
	<section id="about" data-speed="2" data-type="background">
		<div class="container">
			<div class="page-header">
			</div>
			<div class="row-fluid">

		        <div class="span4">
                    <div class="oldform" style="width:500px;">
    			<div class="create"> <h2> SHARE YOUR OPINION </h2>
    				<form action="add-post-it.php" method="post"> 
						<input type="text" name="name" placeholder="Name" required>
						<input type="text" name="title" placeholder="Title" required><br>
        				<textarea type="text" name="comment" maxlength=" " required> </textarea><br>
        				<input type="button" value="Reset" onClick="this.form.reset()" />
						<input type="submit" name="cmd" value="Submit" >
					</form>
    			</div>
    			
    <!-- Displaying Comments-->
    			<div class="content recent"> 
			
					         <?php
            require_once("database.php");
                    $queryy = mysqli_query($con, "SELECT * FROM post_it");
            if($queryy === false){
            die("ERROR" . mysqli_error());
          } else {
            echo '<table>';
              while($userInfo = mysqli_fetch_array($queryy)){
                echo '<tr style=" width: 50%; padding-Top: 50px;  ">
                  <td>
                  <font padding="50px" paddingTop="150px" size="11" face="Lucida Sans Unicode" color=white >' ."Username: ".$userInfo['name'].' ' ."Title: ".$userInfo['title'].' ' .'<br>' ."Thoughts: " .$userInfo['note'].'  
                  </td>
                  </tr>';
              
                 // getPosts($link);
              }
                  echo '</table>';

              }
        
            ?>       
                    
                    
                    
		        </div><!-- /.span4 -->
            
		        <div class="span4 shareee">
		          	
		        </div><!-- /.span4 -->
	    	</div>
	    </div>


  <script>
		var countDownDate = new Date("Oct 30, 2017 12:00:00").getTime();
      
        var countDownDateEL = new Date("Nov 21, 2017 8:00:00").getTime();
      
        var countDownDateRF = new Date("June 30, 2018 12:00:00").getTime();
      
		var x = setInterval(function() {
		    var now = new Date().getTime();
		    var distance = countDownDate - now;
            var distanceelection = countDownDateEL - now;
            var distancerf = countDownDateRF - now;
            
          

		    // Time calculations for days, hours, minutes and seconds
		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
		    <!-- -->
                var dayss = Math.floor(distanceelection / (1000 * 60 * 60 * 24));
		    var hourss = Math.floor((distanceelection % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutess = Math.floor((distanceelection % (1000 * 60 * 60)) / (1000 * 60));
		    var secondss = Math.floor((distanceelection % (1000 * 60)) / 1000);
            
            <!-- -->
                var daysss = Math.floor(distancerf / (1000 * 60 * 60 * 24));
		    var hoursss = Math.floor((distancerf % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutesss = Math.floor((distancerf % (1000 * 60 * 60)) / (1000 * 60));
		    var secondsss = Math.floor((distancerf % (1000 * 60)) / 1000);
                
                
            
		    document.getElementById("jscountdown").innerHTML = days + "d " + hours + "h "
		    + minutes + "m " + seconds + "s ";
            
             document.getElementById("sqlcountdown").innerHTML = dayss + "d " + hourss + "h "
		    + minutess + "m " + secondss + "s ";// Output the result in an element with id="jscountdown"
            
            document.getElementById("rfcountdown").innerHTML = daysss + "d " + hoursss + "h "
		    + minutesss + "m " + secondsss + "s ";

		    // If the count down is over, write some text 
		    if (distance < 0) {
		        clearInterval(x);
		        document.getElementById("jscountdown").innerHTML = "EXPIRED";
		    }
		}, 1000);
        
            $(".whiteb").hide();
            $(".venstre").click(function(){
            $(".whiteb").show(function(){
                $(".whiteb").animate({
                height: "300px"
            },1000);   
            });   
                console.log("this button works");
            }); 
            $(".venstrebutton").click(function(){
            $(".whiteb").hide(function(){
                $(".whiteb").animate({
                height: "-300px"
            },1000);   
            });
            
            });
    </script>
    
</html>
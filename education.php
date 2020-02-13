<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/education.css" rel="stylesheet" type="text/css">
</head>
<body onload="secons();" onscroll="hiddrop(); medi(); hamad(); secons(); secons1();">
   
   <div class="container">
    <div class="welcome">
        <header>
          <span id="close" class="red" onclick="hidemenu();">x</span>
          <span id="open" onclick="menuz(); menuz1(); "><img class="m-icon" src="Images/588a64cdd06f6719692a2d0d.png"></span>
           <img class="logo" src="Images/lgg.png"/>
           <span class="lab"></span>
            <nav id="mynav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#" onclick="clicking();">About<span><i id="downs" class="down"></i></span></a>
                        <ul class="dropdown">
                           <li><a href="#" class="red" onclick="hiddrop();">x</a></li>
                            <li><a href="safety.php"> WORKPLACE HEALTH AND SAFETY  </a></li>
                            <li><a href="education.php"> THE GENDER COMPONENT  </a></li>
                             <li><a href="director.php"> DIRECTOR MESSAGE  </a></li>
                              <li><a href="about.php"> ABOUT </a></li>
                        </ul>
                    </li>
                    <li><a href="#" onclick="clicking1();">Services<span><i id="downs" class="down push"></i></span></a>
                        <ul class="dropdown">
                            <li><a href="#" class="red" onclick="hiddrop();">x</a></li>
                            <li><a href="themaincomponent.php"> THE MAIN COMPONENTS </a></li>
                            <li><a href="health.php"> HEALTH THROUGH SPORT </a></li>
                            <li><a href="safety.php"> WORKPALCE HEALTH AND SAFETY </a></li>
                            <li><a href="education.php">  THE GENDER COMPONENT  </a></li><!-- not yet finish !-->
                            <li><a href="monitoring.php"> MONITARING, TRACKING AND RESCUE OF WORKERS </a></li><!-- not yet finish !-->
                            <li><a href="safety.php"> ROAD SAFETY AND COMPONENT  </a></li>
                            <li><a href="environment.php"> ENVIRONMENTAL PROTECTION   </a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li class="lastlink"><a href="index.php">Projects</a></li>
                </ul>
            </nav>
            
            
        </header> 
   
    
    <!--image slider!-->
    <div class="cycle-slideshow">
			<span class="cycle-prev">&#9001;</span>
			<span class="cycle-next">&#9002;</span>
			<span class="cycle-pager"></span>
			<img src="Images/2.png"/>
			<img src="Images/33.png"/>
    </div>
    </div>
    
    <div id="education-para">
        <p>
            TLAU gives priority to issues of gender equality and women's empowerment. We encourage participation of women, men, boys and girls in programmes and projects for sustainable development. According to Uganda National Household Survey (UNHS) of 2012/13, 41% of women are employed as compared to 55% of men. 
        </p>
        
        <p>
            Out of 41% only 13.8% are in formal employment. Uganda's Economy is mainly agricultural based. Over 80% of the agricultural sector is performed by women. However men who are 50% of the population are the main bene ciaries of the women’s sweat. It is a fact that less than 20% of all titled land in Uganda is owned by women yet they are the main users of land in Uganda. 
TLAU gender specialists work with various stakeholders to enforce gender equality and mainstreaming,Protection of the rights of women,eradication of child labour, and protection of the rights of other vulnerable groups.
        </p>
    </div>
    
    
    <footer>
       <div id="footer-col1">
           <p class="cont">Contact us</p>
           <form role="form" action="index.php" method="post" autocomplete="off">
              
              <div id="form-col1">
                    <p>name</p>
                    <input name="name" type="text" />
                    <p>telephone</p>
                    <input name="telephone" type="text" />
              </div>

              <div id="form-col2">
                    <p>Email</p>
                    <input name="email" type="email" />
                    <p>Subject</p>
                    <input name="subject" type="text" />
              </div>
                    
                    <textarea name="body" class="content-msg"></textarea>
                    <input name="submit" type="submit"/>
               
           </form>
       </div>
       
       <div id="footer-col2">
           <p class="compi">Company Information</p>
           <ul>
               <li>The Labour Alliance Uganda</li>
               <li>Registered in Uganda</li>
           </ul>
           <p>Follow us:</p>
           <a href="https://www.facebook.com/TheLabourAllianceUganda/"><img src="Images/facebook.png"/></a>
           <p>Copyright &copy; The Labour Alliance Uganda</p>
           <img class="foot-log" src="Images/lgg.png"/>
       </div>
       
        <div class="lastfooter">
           <p class="cont">Our Contact Details !</p>
           <p>The Labour Alliance Uganda Plot 2, Geoge Street, Simbamayo Building/MLGSD,Level 5 Office 1 Kampala</p>
            <p>Tel: +2560392001761</p>
            <p>P.O Box 23629 Kla</p>
            <p>Email: info@thelabouralliances.org</p>
        </div>
        
    </footer>
    
    
    </div>
    
    

    
<script src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
 
<script type="text/javascript">
    
    $(function(){
        
    $('#play').click(function(){$('#slider').cycle('resume'); return false;});
    
     $('#pause').click(function(){$('#slider').cycle('pause'); return false;});
        
    $('#slider').cycle({
        fx: 'scrollHorz',
        next: '#next',
        prev: '#prev',
        pager: '#pager',
        timeout: 3000,
        speed: 900
    });
    });
    
   function menuz(){
    var element1 = document.getElementById("mynav");
    element1.style.display == "none";
       
    element1.style.display = "block";
       
    element1.style.background = "#402f73";
    var b = document.getElementById("open");
       b.style.display = "none";
       
      return true;
       
   }
    
    function menuz1(){
    if(menuz() == true){
         var c = document.getElementById("close");
       c.style.display = "block";
    }
    }
    
    function hidemenu(){
        var element1 = document.getElementById("mynav");
    element1.style.display = "none";
         var c = document.getElementById("close");
       c.style.display = "none";
        
        var b = document.getElementById("open");
       b.style.display = "block";
    }
    
   
    function clicking(){
    var element1 = document.getElementsByClassName("dropdown");
    element1[0].style.display = "block";
    element1[1].style.display = "none";
    }
    
    function clicking1(){
    var element1 = document.getElementsByClassName("dropdown");
    //var element2 = document.getElementsByClassName("down");
    element1[1].style.display = "block";
    element1[0].style.display = "none";
    }
    
    function hiddrop(){
    var element1 = document.getElementsByClassName("dropdown");
    element1[1].style.display = "none";
    element1[0].style.display = "none";
   
    }
    
    
    
    
   

</script>
    
</body>
</html>
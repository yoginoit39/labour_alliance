<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/maincomp.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
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
                             <li><a href="about.php"> ABOUT US  </a></li>
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
   
    </div>
    
    <div id="themaincomp">
        <h1>THE MAIN COMPONENTS</h1>
    </div>
    
    <div id="monitoring">
        
        <div id="mon-left">
            <div id="ugandans">
                <h1>Ugandans going abroad for work</h1>
            </div>
        </div>
        <div id="mon-right">
            <h2>Monitoring,Tracking and Rescue of Workers Component</h2>
            <p>
                This Flagship Programme is managed by our well trained and experienced professionals in partnership with the Uganda Police Force, Interpol and other partners to perform sensitive and vital roles. They render assistance and rescue Ugandan workers who may land into serious problems affecting their physical, psychological, mental, and sexual wellbeing whether alive or dead within Uganda or in diaspora under various circumstances. We provide advice and consultancy services in Labour Administration and Legislation. TLAU networks with various stakeholders to monitor, inspect, keep records of all exported Labour from Uganda to ensure their safety, health, wellbeing and conducive working environment and enforcement of International Labour Standards (ILS).
            </p>
        </div>
    </div>
    
    <div id="labour-relation">
        <div id="labour-left">
            <h2>The Labour Relations Component</h2>
            <p>
                The Labour Relations Component is managed by our qualified labour officers who partner with their counterparts in the Ministry of Gender,Labour and Social Development. They play specialised roles in the field of social dialogue, labour administration and labour consultancy services, disputes settlement labour relations, monitoring counselling, labour policy analysis and ensure enforcement of labour laws and regulations. They liaise and conciliate between employees and employers and maintain communication between various internal and external Partners.
            </p>
        </div>
        
        <div id="labour-right">
            <div id="ugandans">
                <h1>The Labour Alliance Uganda and Tembo steels plant heads in Labour Relations meeting in Iganga</h1>
            </div>
        </div>
    </div>
    
    <div id="gender-comp">
       
        <div id="right-gender">
            <h2>The Gender Component</h2>
            <p>
                TLAU gives priority to issues of gender equality and women's empowerment. We encourage participation of women, men, boys and girls in programmes and projects for sustainable development. According to Uganda National Household Survey (UNHS) of 2012/13, 41% of women are employed as compared to 55% of men. Out of 41% only 13.8% are in formal employment. Uganda's Economy is mainly agricultural based. Over 80% of the agricultural sector is performed by women. However men who are 50% of the population are the main beneficiaries of the women’s sweat. It is a fact that less than 20% of all titled land in Uganda is owned by women yet they are the main users of land in Uganda. TLAU gender specialists work with various stakeholders to enforce gender equality and mainstreaming,Protection of the rights of women,eradication of child labour, and protection of the rights of other vulnerable groups.
            </p>
        </div>
        
         <div id="left-gender">
            <div id="ugandans">
                <h1>March against violence on women at work</h1>
            </div>
        </div>
    </div>
    
    <div id="environment">
        <div id="left-enviro">
            <div id="ugandans">
                <h1>A partialy deforested forest in Uganda</h1>
            </div>
        </div>
        
        <div id="last-left">
            <h2>Environmental Protection Component</h2>
            <p>
                At The Labour Alliance, we acknowledged that there are gaps in enforcement and creating a healthier environment because the rate of environmental degradation in Uganda is at an alarming stage. In liaison with National Environment Management Authority (NEMA), we act as independent stakeholder to offer high quality technical services in the chemical, technical, environmental and biological sciences. We provide support services in the disciplines of environmental consulting,environmental health,auditing,assessments,water and waste testing, field sampling and environmental testing. Our service product is accurate and timely while technical information is provided in confidence and restricted to clients at a reasonable cost. we are committed to environmental friendly human operations, which include using natural resources wisely and considering the overall impact on the sustainable environment
            </p>
        </div>
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
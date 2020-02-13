<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/director.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="Js/myfirst.js"></script>
</head>
<body onload="secons();" onscroll="hiddrop(); medi(); hamad(); secons(); secons1();">
   
   <div class="container">
       <header>
          <span id="close" class="red" onclick="hidemenu();">x</span>
          <span id="open" onclick="menuz(); menuz1(); "><img class="m-icon" src="Images/588a64cdd06f6719692a2d0d.png"></span>
           <img class="logo" src="Images/lgg.png"/>
           <span class="lab"></span>
            <nav id="mynav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#" onclick="clicking();">About us  <span><i id="downs" class="down"></i></span></a>
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
   
        
        <div id="img-text">
        <div id="top">
         <h1>MESSAGE FROM THE DIRECTOR</h1>
          <div id="left-text"><p>Allow me to welcome you to the labour alliance Uganda Ltd where we treasure the life of every individual client and cherish memories  of our brothers and sisters who left us as a result of hazardous and fatal workplace injuries arising from none compliance among careless employers. 
            We took special interest in Labour matters in Uganda because we found out that many times both employers and employees lack knowledge on their part. As a result you find employers exploiting the employees out of sheer ignorance on what they are supposed to do. However some employers know but deliberately exploit due to lack of the workers knowledge of their rights. 
              Whereas there are already existing Organisations carrying out sensitisation and enforcement of Labour rights in Uganda, they have not been able to cover all the population owing to the limited resources.  Driven by the need to sensitise both employers and employees about Industrial Labour Relations in Uganda we founded TLAU to address these gaps.</p>
        </div>
         
          <div id="right-text">
              <p>To date we have been able to Partner with the many agencies, development partners and other actors in the Labour industry and we believe there are still many gaps that need to be addressed on Labour matters.
We must confess that  have not carried out any baseline surveys so far but going by the outcries from the public, we intend to focus on manufacturers, industrialists and migrant workers for  starters. We intend to sensitise both workers and the employers in the domestic and external labour market about what is expected of them.  

                  Many allegations of violation of the Workers’ Rights however are reported from time to time. Violations differ by category, magnitude and location. Whereas majority of violations are inflicted against foreign job seekers it is also common in the domestic labour market.  We are putting more emphasis on external labour market because of the outcry from different stakeholders at home and abroad.</p>

          </div>
            </div>
         
         <h3 class="dr">Director. Gaffa Dennis</h3>
         <div id="back"></div>
          
       </div>
       
       <div id="last-para">
              <p>
                  Pursuing our mission, it is our assurance to every individual labourer that we are determined to make a difference in the lives of the powerless by putting to an end all forms of workplace injustices, human trafficking and child labour to promote workplace safety and health systems, in order to achieve a safer working environment for all workers country wide.
We need the support of everyone to reach our colleagues in all parts of the country  and world at large who are facing similar challenges to form a concerted effort and create awareness of work related hazards and  lack of bargaining power that exposes many labourers  to accept dangerous tasks with poor working conditions.
At the labour alliance, we say that unemployment should not be an excuse for excessive and gross labour exploitation. Considering physical, psychological devastation inflicted on several workers including those that are subjected to deliberate and pre-meditated attacks. We shall track, document and make available cases of labour violations inside and outside the country.  If we don’t document them, even when government agencies are there, victims will not be ready to claim redress even when they are represented.
Best regards.
………………………..
Gaffa Dennis
Director

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
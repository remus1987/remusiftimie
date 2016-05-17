<!DOCTYPE html>
<html lang="en">

<head>
    <title>Remus Iftimie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="author" content="Remus Iftimie">
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/styles.css" />
    <link rel="stylesheet" href="CSS/flipcards.css" />
    <link rel="stylesheet" href="CSS/progressbar.css" />
    <link rel="stylesheet" href="CSS/social-networks.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button>
      <a class="navbar-brand" href="#myPage"><img src="logo.png" alt="Logo" style="width:150px;height:35px;" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#site_story">SITE-STORY</a></li>
        <li><a href="#skills">SKILLS</a></li>
        <li><a href="#ongoing_projects">ONGOING PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="jumbotron text-center">
        <h1>Freelancer</h1>
        <p>Web developer - Software tester - C# programmer</p>
    </div>

    <!-- Container( About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About me</h2>
                <p> An ambitious and creative person ready to step into a career in software development. Experience in using most of the SDLC models, as all my projects on college are based on System Development Life Cycle processes, specially in Agile methodology.</p>
                <p> Passion for object oriented programming languages and a deep research in C# and Java programming languages. As well deep research in web developmenmt applications, and prosper result at college with distinction grade.</p>
                <button class="btn btn-default btn-lg">Download Resume</button>
            </div>
            <div class="col-sm-4">
                <span style="padding-right:3px; padding-top: 3px; display:block;">
        <img class="logo" src="logo.jpg"
                  </span>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo"></span>
            </div>
            <div class="col-sm-8">
                <h2>Personal Info</h2>
                <p><strong>Name:</strong> Remus Iftimie</p>
                <p><strong>Address:</strong> London, England</p>
                <p><strong>Postcode:</strong> SE18 5EF</p>
                <p><strong>Email:</strong> remusiftimie87@gmail.com</p>
            </div>
        </div>
    </div>

    <!--Here I jump the stage add Services container from tutorial -->

    <!--Container (Site-Story Section) -->
    <div id="site_story" class="container-fluid text-center bg-grey">
        <h2>Site Story</h2>
        <h4>How I create the site</h4>
        <br><br>
        <div class="row text-center">
            <div class="col-sm-6 col-xs-12">
                   
                    <p style="color:green;"> As every project in software engineering, this site follow the <b>System Development Life Cycle</b> stages.</p>
                    <p>In this section are presented in short the stages involved in creating this site.</p>
                
                    <h5>Information gathering</h5>
                        <p>At this stage I just gather the necesary resources and material to fill the website.</p><p>To gather the main information more quickly I just go back and review my CV.</p>
            </div>
                    
                    <div class="col-sm-6 col-xs-12">
                <div class="work-image">
                    <!-- Trigger the Modal -->
                    <img id="myImg" src="work.jpg" alt="Work zone" width="300" height="200">

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- The Close Button -->
                        <span class="close">x</span>
                        <!-- Modal Content (The Image) -->
                        <img class="modal-content" id="img01">

                        <!-- Modal Caption (Image Text) -->
                        <div id="caption"></div>
                    </div>
                        </div>
                </div>
        </div>
                    <div class="row text-center">
                        <div class="col-sm-6 col-xs-12">
                    <div class="flip" id="one">
                    <div class="card">
                    <div class="face front">
                        <span class="text">
                    <h5>Planning</h5>
                    <p> After I read a lot of source code from several websites and do research on different profiles I decide to include 4 main sections on the site: About, Site Story, Skills and Contact me.</p>
                    <p>Also I want to include the social networks links and I will use a work-desk photo of my own.</p></span>
                    </div>
                    <div class="face back">
                        <span class="text"> </br>
                    <p>Basically at this stage I decide what tools and technologies I will use to create the website.</p>
                    <p>I want to be more bespoke and concise, so I won't use a Content Management System, I will use just a smart text editor named Brackets and work with the bootstrap 3 framework. Brackets help me with his intellisense on several programming languages and with useful plugins as beautify.</p></span>
                    </div>
                        </div>
                        </div>
                        </div>
                    <div class="col-sm-6 col-xs-12">
                    <div class="flip" id="two">
                    <div class="card">
                    <div class="face front">
                        <span class="text">
                    <h5>Design</h5>
                    <p> We already know the technologies we use whitch are: HTML5, CSS3, Bootstrap3, JavaScript, jQuery on the client side to make a dynamic, fast and responsive website. </p>
                    <p>At this stage we use the wire-framing technique first. Here I choose to do on <b>paper</b> the wire-framing of the site, even I ussually do it in <b>Pencil</b> software. </p></span>
                    </div>
                     <div class="face back">
                         <span class="text"> </br>
                    <p>And I will have on the header my name and the menu with the four sections, with a fixed position to be present on all height of the page and we add an affix techniwue to highlight the specific section all the time.</p>
                    <p>The code will be written as first designed for mobile, and responsive on all devices and displays, by setting logical breakpoints within the elements.</p></span>
                         </div>
                        </div>
                        </div>
                </div>   
                </div>
            <div class="row text-center">
            <div class="col-sm-6 col-xs-12">
                
                    <div class="flip" id="three">
                    <div class="card">
                    <div class="face front">
                        <span class="text"> </br></br></br>
                    <h5>Development</h5>
                    <p>Here I already finished my design and start working on the back-end with the fourth section, the contact form.</p></span>
                        </div>
                        <div class="face back">
                            <span class="text"> </br></br></br>
                    <p>I use <b>XAMPP</b> stack platform with <b>MySQL</b> as database, Apache as web server and communicate with <b>PHP</b> as server-side language.</p>
                    <p>I do preliminary testing in XAMPP using localhost and phpMyAdmin to control the database.</p></span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="flip" id="four">
                    <div class="card">
                    <div class="face front">
                        <span class="text"> </br></br>
                    <h5>Testing and delivery</h5>
                    <p>Testing is an essential stage of the SDLC process, but since is a small project and I am the main stakeholder, I upload the files on the host web server and launch the site.</p></span>
                        </div>
                    <div class="face back">
                        <span class="text"> </br></br></br></br>
                    <p>After I do another series of testing, respective test on different devices and on different web browsers for it's entire functionality.</p></span>
                        </div>
                        </div>
                </div>
                    </div>
                    </div>
                    <div class="row text-center">
                    <div class="col-sm-12">
                    <div class="flip" id="five">
                    <div class="card">
                    <div class="face front">
                    <span class="text"> </br> <h5>Maintenance</h5>
                    <p>At this final stage the tasks are never ending and there are always new technologies that can I adapt to my website.</p>
                    <p>By the time it is useful to create a to-do list and include what has to be improved as in my example.<p></span>
                        </div>
                    <div class="face back">
                        <span class="text"> </br></br></br>
                    I need to add a portfolio section.</p> Also include new technologies and plugins; on my to-do list are RSS feed, more JQuery plugins and a blog site to connect with.</p>
                        </span>
                    </div>
                </div>
                </div>
                </div>
    </div>
    </div>

    <!--Container (Skills Section)-->
    <div id="skills" class="container-fluid text-center">
        <h2>Skills</h2>
        <h4>Over the past 3 years since I am in the software development industry I've aqcuired essential knowledge and experience in the following technologies:</h4>
        <br>
        <div class="row">
            <div id="my-skills">
                <div class="col-sm-6">
                    <h3>Web Application Development</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="80" style="width:10%">
                            <span>HTML5 / CSS3</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="72" style="width:10%">
                            <span>JavaScript / JQuery</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="64" style="width:10%">
                            <span>Bootstrap3 / Responsive Web Design</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="55" style="width:10%">
                            <span>PHP</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="55" style="width:5%">
                            <span>MySQL</span>
                        </div>
                    </div>

                    <!--     <label>HTML5</label>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width:0%"></div>
    </div>                   -->

                </div>
                <div class="col-sm-6">
                    <h3>Desktop Application Development</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="80" style="width:10%">
                            <span>C#</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="65" style="width:10%">
                            <span>Java</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="50" style="width:10%">
                            <span>C++</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="60" style="width:5%">
                            <span>SQL Server</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-info" id="show">View my skills</button>
            </div>
        </div>
    </div>

<!-- Container (Ongoing Projects) -->
<div id="ongoing_projects" class="container-fluid">
        <div class="row">
            <h2 style="text-align:center">Ongoing projects</h2>
    <div class="col-sm-6 col-xs-12">
            <div class="wrapper">
        <img src="blog.png" alt="Blog" />
             <div class="overlay">
                <h5 style="opacity:0.3;">Comming soon: </h5><br>
                 <h3>Blog</h3>
                </div>
        </div>
            </div>
            <div class="col-sm-6 col-xs-12">
            <div class="wrapper">
        <img src="e-commerce.png" alt="E-commerce"  />
             <div class="overlay">
                <h5 style="opacity:0.3;">Comming soon: </h5><br>
                 <h3>E-commerce site</h3>
                </div>
        </div>
            </div>
    </div>
        </div>
        
        <!-- Container (Contact Section) DE INLOCUIT CU CEALALTA-->
        <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5"> <br><br>
      <p>Contact us and we'll get back to you within 24 hours.</p>
      </div>
        </div>
        </div>
    
<footer class="container-fluid text-center" style="padding:30px">
    <div class="row full-width-row">
        <div class="col-lg-12">
        <div class="col-md-8">
                <ul class="social-network social-circle">
                    <li><a href="https://www.facebook.com/remus.iftimie?fref=ts" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/remusiftimie87" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/remus-iftimie-bb6879105?trk=nav_responsive_tab_profile" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
        </div>
    <div class="col-md-4">
            <p class="muted pull-right" style="weight:300;font-size:14px;color:#fff;padding-top:5px">&copy 2016 Remus Iftimie. All rights reserved</p>
        </div>
    </div>
    </div>
        </footer>        
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/myscript.js"></script>
<script src="JS/modal.js"></script>
</body>

</html>

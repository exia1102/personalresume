<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

    <title>Nero personal website</title>
  </head>
  <style type="text/css">
  	.websiteheader{
  		height: auto;
  		background-color: #fff;
      position: fixed;
      z-index: 99;
  	}
/*    .title{
      font-size: 1.4rem;
    }*/
 /*   .topNav{
      font-size: 0.8rem;
    }*/
    .homePageImg{
      background-image: url("./images/bg-homepage.jpg");
      background-size: cover;
      background-position: center;
    }
    .homePage{
      height: 100vh;
      min-height: 30rem;
      top: 8rem;
    }
    .homePageRight{
      background-color: #f1e2d7;
    }
    .homePageRow{
      height: 100%;
    }
    .aboutMe{
      height: 40vh;
      min-height: 24.5rem;
    }
    strong{
      color: black;
    }
    .progress{
      height:2px;
      margin-bottom: 30px;
    }
    .pull-right{
      float:right!important;
    }
    h1{
      font-size: 35px;
      padding-bottom: 14px;
      margin-bottom: 0px;
      font-weight: 300;
      font-style: normal;
    }
    .color-white{
      color: white;
    }
/*    .experience-img{
      background-color: green;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }*/
    .myExperiencePage{
      height: 40vh;
      min-height: 24rem;
    }
    #experience small {
    color: #633;
    font-weight: bold;
    font-size: 65%;
}
    #education small {
    color: #633;
    font-weight: bold;
    font-size: 65%;
}
    .myEducationPage{
      height: 40vh;
      min-height: 24rem;
    }
    #quotes .overlay {
    background: #121212;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    opacity: 0.7;
}
#quotes {
    background: url(./images/quotes-bg.jpg) 50% 0 repeat-y fixed;
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    position: relative;
    padding: 100px 0px;
}
  p {
    color: #888;
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    letter-spacing: 0.2px;
}
  #contact .contact-form, #contact .contact-thumb {
    padding: 22px 32px 22px 32px;
    min-height: 75vh;
}
  #contact .form-control {
    background: transparent;
    border: none;
    border-bottom: 1px solid #E3AE57;
    border-radius: 0px;
    box-shadow: none;
    color: #ffffff;
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 25px;
    transition: all 0.4s ease-in-out;
}

.skillpage{
  color:#fff;height: 40vh;min-height: 15rem;

}
#education .media-object{
  font-size: 2.3rem;
}



@media screen and (max-width: 620px){
  .skillpage{
    height: auto;
  }
  .bg-experience{
    display: none;
  }
  .bg-education{
    display: none;
  }
  #experience .parallax-section{
    height: auto;

  }
  #education .parallax-section{
    height: auto;
  }
  .smallfont1{
    font-size:1.2rem;
  }
  .smallfont2{
    font-size:1rem;
  }
  .homepage{
    height: auto;
    top:5rem;
  }
  .aboutMe{
    height: auto;
  }
  .btn-homePage{
    display:none;
  }
  .btn-resume{
    display:none;
  }
  .websiteheader{
    height:auto;
  }
  .myEducationPage{
    height: 28rem;
  }
  .myExperiencePage{
    height: 28rem;
  }
  .experience-description{
    padding-left: 0.5rem;
    padding-top: 10px;
  }
  .education-description{
    padding-left: 0.5rem;
    padding-top:10px;
  }
  .experience-thumb{
    padding-top: 0px;
  }
  .education-thumb{
    padding-top: 0px;
  }
  .btn-homePage:hover{
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
  }
  .btn-resume:hover{
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
  }

} 

  </style>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script> -->
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>




<!-- websitetoptitle -->
<div class="container-fluid websiteheader p-0">
 	<div class="row p-0 m-0">
 		<div class="col-12 p-0 m-0 title">
 			<!-- <p class="text-center m-0 ">Nero Website</p>
 	<div class="row text-center ">
 		<div class="col-12">
 			<ul class="nav display-5 topNav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link active" href="#">Home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" data-location1="700" data-location2="550" href="#">About Me</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" data-location1="1350" data-location2="2350"href="#">Experiences</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" data-location1="2150"data-location2="3250"href="#">Testimonial</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" data-location1="2500"data-location2="3650"href="#">contact</a>
				  </li>
			</ul>
 		</div>
 	</div> -->

      <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">

    <!-- Navbar brand -->
    <a class="navbar-brand"style="color: brown" href="#">Nero website</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-location1="700" data-location2="550" href="#">About me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-location1="1350" data-location2="2350" href="#">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-location1="2150"data-location2="3250" href="#">Testimonial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-location1="2500"data-location2="3650" href="#">Contacts</a>
            </li>

            

        </ul>
        <form class="form-inline my-2 my-lg-0">           
              <button class="btn btn-outline-success my-2 my-sm-0 btn-resume1">download resume</button>
        </form>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
</div>
</div>
</div>

<div class="container-fluid homePage">
  <div class="row homePageRow">
    <div class="col-md-6 col-sm-12 homePageImg">
    </div>
    <div class="col-md-6 col-sm-12 homePageRight justify-content-center align-items-center h-100">
      <div class="container align-items-center justify-content-center w-100" style="padding-top: 5rem;">
        <div class="row pt-5">
        <div class="col-12">
          <p class="animated fadeInUp">Welcome to My Website</p>
        </div>
      </div>
        <div class="row pt-5">
          <div class="col-12">
            <p class="text-black-50 animated fadeInUp"style="font-size: 2rem; color: #d4d2d1;line-height: 3rem; animation-delay:0.5s;">Hello, I am <span style="color: black;">Nero Wei</span> currently based in Ottawa city</p>
          </div>
        </div>
          <div class="row pt-3">
            <div class="col-12">
              <p class="text-black-50 animated fadeInUp" style="font-size: 1.2rem; animation-delay: 0.8s">I am a web developer with a MBA degree. Technology is valuable only when they create business value and I am here to make technology valvulable to you.</p>
            </div>
          </div>
          <div class="row">
            <div class="pl-3 pt-5">
             <button type="button " class="btn btn-outline-dark px-5 btn-homePage animated fadeInUp"style="border-radius: 1rem;">Get Started</button>        
            </div>
            <!-- <div class="pl-3 pt-5">
             <button type="button " class="btn btn-outline-dark px-5 btn-wordpress animated fadeInUp"style="border-radius: 1rem;">wordpress demo</button>        
            </div> -->
            <div class="pl-3 pt-5">
             <button type="button " class="btn btn-outline-dark px-5 btn-resume animated fadeInUp"style="border-radius: 1rem;">Download resume</button>        
            </div>

          </div>
      </div>
      
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid aboutMe ">
  <div class="row h-100">
    <div class="col-md-6 col-sm-12 h-100">
        <div class="container animated fadeInUp">
          <div class="row pt-5">
            <div class="col-12">
              <p style="color:#e3ae58;font-size: 1.3rem">About Me</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p style="color:#e3ae58;">Font-end,full-stack web developer</p>
            </div>
          </div>
          <div class="row pt-2">
            <div class="col-12">
              <p style="color:#d0d0d0">As a new comer in Canada, I always force myself to learn stuff, which includes not only work skills but also culture in Canada. I am a MBA graduate from Carleton university. To better fit the labor market and the digital trend, I start to learn web developing.From studying business to computer science, I know it is pretty hard but I am going to do it.
              After the study, I am very confident to show my ability as what you can see from this website. I am ready to make contribution! 
              </p>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 p-0 h-100">
      <div class="container-fluid w-100 h-100 m-0 p-0">
        <div class="row w-100 h-100 p-0 m-0">
          <div class="col-md-6 col-sm-12 h-100"style="background-image: url('./images/s2.jpg');background-size: cover;background-repeat: no-repeat;">
            
          </div>
          <div class="col-md-6 col-sm-12 px-5 pt-5"style="background-color: #e3ae57;">
            <div class="skill-thumb">
                         <div class="animated fadeInUp section-title text-white" webkit-animation-delay="1.2s">
                              <h1 class="pt-1">My skills</h1>
                              <p class="color-white">HTML . CSS . Bootstrap . JS . JQuery. AJAX . PHP . twig . MySql . Wordpress</p>
                         </div>

                         <div class=" animated fadeInUp skills-thumb text-white" webkit-animation-delay="1.6s">
                         <strong>Frontend Design</strong>
                              <span class="text-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <strong>Backend processing</strong>
                              <span class="text-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <strong>HTML5 & CSS3</strong>
                              <span class="text-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>
                         </div>

                    </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid justify-content-center mx-0 px-0 skillPage"style=" color:white">
  <div class="row h-100 w-100 p-0 m-0 ">
    <div class="col-md-3 col-sm-12 p-0  w-100"style="background-color: #e3ae57;">
      <div class="container animated fadeInUp">
        <div class="row text-center pt-5">
          <div class="col-12">
            <i class="material-icons"style="font-size: 4rem;">computer</i>
          </div>
        </div>
        <div class="row text-center pt-4">
          <div class="col-12">
            <p style="font-size: 1.4rem;color:white">Front design</p>
          </div>
        </div>
        <div class="row text-center pt-1">
          <div class="col-12">
            <p style="font-size: 0.9rem;color:white">Expert in Html,CSS design and framework like bootstrap</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 p-0 w-100"style="background-color: #e9724c;">
      <div class="container animated fadeInUp">
        <div class="row text-center pt-5">
          <div class="col-12">
            <i class="material-icons"style="font-size: 4rem;">book</i>
          </div>
        </div>
        <div class="row text-center pt-4">
          <div class="col-12">
            <p style="font-size: 1.4rem;color:white">Database control</p>
          </div>
        </div>
        <div class="row text-center pt-1">
          <div class="col-12">
            <p style="font-size: 0.9rem;color:white">Expert in mySql and able to connect Sql with JS and PHP</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 p-0 h-100"style="background-color: #161616;">
      <div class="container animated fadeInUp">
        <div class="row text-center pt-5">
          <div class="col-12">
            <i class="material-icons"style="font-size: 4rem;">group</i>
          </div>
        </div>
        <div class="row text-center pt-4">
          <div class="col-12">
            <p style="font-size: 1.4rem;color:white">Teamwork</p>
          </div>
        </div>
        <div class="row text-center pt-1">
          <div class="col-12">
            <p style="font-size: 0.9rem;color:white">Excellent management and communication is built through business study.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 p-0 h-100"style="background-color: #fff;color:#aaa;">
      <div class="container animated fadeInUp">
        <div class="row text-center pt-5">
          <div class="col-12">
            <i class="material-icons"style="font-size: 4rem;">thumb_up_alt</i>
          </div>
        </div>
        <div class="row text-center pt-4">
          <div class="col-12">
            <p style="font-size: 1.4rem;">Customer service</p>
          </div>
        </div>
        <div class="row text-center pt-1">
          <div class="col-12">
            <p style="font-size: 0.9rem;">2-year customer service experiece enables me to better understand customers.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="experience" class="parallax-section">
     <div class="container-fluid myExperiencePage m-0 p-0 ">
          <div class="row w-100 p-0 m-0 h-100">

               <div class="col-md-6  col-sm-12 h-100 bg-experience "style="background-image:url('./images/experience-img.jpg');background-size: cover;background-position: center;">
                    <div class="background-image experience-img"></div>
               </div>

               <div class="experience-description pl-5 col-md-6 pt-4 col-sm-12"style="background-color: #e9724c">
                    <div class="color-white experience-thumb ">
                         <div class="animated fadeInUp section-title" webkit-animation-delay="0.8s">
                              <h1>My Experiences</h1>
                              <p class="color-white ">Previous companies and my tasks</p>
                         </div>

                         <div class="animated fadeInUp color-white media pt-3" webkit-animation-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="material-icons pr-2"style="font-size: 2.3rem;">computer</i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading smallfont1"> In-store Sales <small>2018 Apr - 2018 Aug</small></h3>
                                   <p class="color-white smallfont2">Introduce mobile service to customers.This is where I learn how to deliver customer service</p>
                              </div>
                         </div>

                         <div class="animated fadeInUp color-white media" webkit-animation-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="material-icons pr-2"style="font-size: 2.3rem;">computer</i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading smallfont1"> Marketing Intern <small>2017 Jun - 2017 Sep</small></h3>
                                   <p class="color-white smallfont2">Running marketing campaign and marketing research for Ottawa-based IT company(Punchtime.co)</p>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Education Section -->

<section id="education" class="parallax-section">
     <div class="container-fluid p-0 m-0 myEducationPage">
          <div class="row p-0 m-0 w-100 h-100">

               <div class="col-md-6 col-sm-12 w-100 h-100 pl-5 pt-4 education-description"style="background-color: #e3ae57">
                    <div class="color-white education-thumb  ">
                         <div class="animated fadeInUp section-title" webkit-animation-delay="0.8s">
                              <h1>My Education</h1>
                              <p class="color-white">My education background</p>
                         </div>

                         <div class="animated fadeInUp color-white media" webkit-animation-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="material-icons pr-2"style="font-size: 2.3rem;">computer</i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading smallfont1">Web development training <small>2018 Feb - 2018 Aug</small></h3>
                                   <p class="color-white smallfont2">6-month training for full-stack web development, including real project development.</p>
                              </div>
                         </div>

                         <div class="animated fadeInUp color-white media" animation-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="material-icons pr-2"style="font-size: 2.3rem;">computer</i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading smallfont1">Master of business adminstration <small>2016 Sep - 2018 Feb</small></h3>
                                   <p class="color-white smallfont2">Business study includes real complete stategic analysis for Neolord.co, which is a Ottawa-based IT company</p>
                              </div>
                         </div>

                    </div>
               </div>

               <div class="col-md-6 col-sm-12 bg-education" style="background-image:url('./images/education-img.jpg');background-size: cover;background-position: center;">
                    <div class="background-image education-img"></div>
               </div>

          </div>
     </div>
</section>


<!-- Quotes Section -->

<section id="quotes" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-12  col-sm-12 text-center">
                    <i class="material-icons"style="font-size: 2.3rem;">
                    star
                    </i>
                    <h2 class="animated fadeInUp text-center" webkit-animation-delay="0.8s">Keep studying, discovering is what makes a developer better</h2>
                    <p class="animated fadeInUp text-center pt-5" webkit-animation-delay="1s">Yes, I want a job. But I also want to earn your trust and I want a place to develop myself.</p>
               </div>

          </div>
     </div>
</section>


<!-- Contact Section -->

<section id="contact" class="parallax-section">
     <div class="container-fluid">
          <div class="row">

               <div class="col-md-6 col-sm-12 p-0 m-0"style="background-color: #e9724c">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" webkit-animation-delay="0.2s">
                              <h1 class="color-white">Say hello..</h1>
                              <p class="color-white">Integer ut consectetur est. In cursus orci non ipsum gravida dignissim.</p>
                         </div>

                         <div id="contact-form">
                              <form action="#template-mo" method="post">
                                   <div class="wow fadeInUp" webkit-animation-delay="1s">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name">
                                   </div>
                                   <div class="wow fadeInUp" webkit-animation-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                   </div>
                                   <div class="wow fadeInUp" webkit-animation-delay="1.4s">
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" webkit-animation-delay="1.6s">
                                        <button type="button" style="border-radius: 2rem;" class="btn btn-outline-dark px-5">Send</button>
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>

               <div class="col-md-3 col-sm-6"style="background-image: url('./images/bg-aboutMe.jpg');background-size: cover;">
                    <div class="background-image contact-img"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
                         <div class="wow fadeInUp contact-info" webkit-animation-delay="0.6s">
                              <h3 class="color-white pt-5">Mail Me</h3>
                              <p>1109-1241 kilborn ave K1H1A5</p>
                         </div>

                         <div class="wow fadeInUp contact-info" webkit-animation-delay="0.8s">
                              <h3 class="color-white pt-5">Contact.</h3>
                              <p><i class="fa fa-phone"></i> 819-328-4081</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="mailto:wrh1102@gmail.com">wrh1102@gmail.com</a></p>
                              <p><i class="fa fa-globe"></i> <a href="#">http://18.222.172.69/personalwebsite</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>




<!-- Footer Section -->

<footer>
  <div class="container-fluid">
    <div class="row">

               <div class="col-md-12 col-sm-12 pt-1">
                    <div class="wow fadeInUp footer-copyright text-center" webkit-animation-delay="1.8s">
                         <p>Copyright &copy; 2018 Nero Wei</p>
                    </div>
               </div>
      
    </div>
  </div>
</footer>




  </body>
<script type="text/javascript">
  
  $(".btn-homePage").click(function(){
    // window.animate({scrollTo:0,700},500);
    $("html,body").animate({scrollTop:700},1000);

  })

  $(".nav-link").click(function(){
    var wjb51=screen.width;
    var hjb51=screen.height;
    var location1 = $(this).data('location1');
    var location2 = $(this).data('location2');
    if(document.documentElement.clientWidth >=630){
      
    $("html,body").animate({scrollTop:location1},1000);
    }
    if (document.documentElement.clientWidth<630) {
    $("html,body").animate({scrollTop:location2},1000);
    }

    
  })

  // $(".btn-wordpress").click(function(){
  //   window.open("../wordpress");


  // })
  $(".btn-resume").click(function(){
    window.open("./Resume.docx");


  })
  $(".btn-resume1").click(function(){
    window.open("./Resume.docx");


  })
  




</script>

</html>
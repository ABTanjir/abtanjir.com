<?php
function redirect($url) {
    header("location: " . $url);
}

$links = array(
    'fb' => 'www.facebook.com/abtanjir',
    'facebook' => 'www.facebook.com/abtanjir',
    'youtube' => 'www.youtube.com/channel/UCTV20nDdJ1MWktTbJZbNuEw?view_as=subscriber',
    'twitter' => 'www.twitter.com/abtanjir',
    'linkedin' => 'www.linkedin.com/in/abtanjir',
);
$model = explode('/', $_SERVER['REQUEST_URI'])[1];
if(isset($links[$model])){
    redirect('https://'.$links[$model]);
}
// print_r(explode('/', $_SERVER['REQUEST_URI']));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property='og:image' content='https://abtanjir.com/img/img-profile.jpg'/>
    <link rel="image_src" href="https://abtanjir.com/img/img-profile.jpg" / >
    <title>AB Tanjir | Passionate programmer</title>

    <!-- favicon -->
    <link href="favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>Hi, I'm AB Tanjir!</h1>

            <p class="lead">Full Stack Software Engineer</p>
            <ul class="social-icon">
                <li><a title="ABTanjir On Facebook" class="animate" target="_blank" href="https://abtanjir.com/fb"><i class="fa fa-facebook" aria-hidden="true"><p>ABTanjir On Facebook</p></i></a></li>
                <li><a title="ABTanjir On YouTube" class="animate" target="_blank" href="https://abtanjir.com/youtube"><i class="fa fa-youtube" aria-hidden="true"><p>ABTanjir On Youtube</p></i></a></li>
                <li><a title="ABTanjir On Twitter" class="animate" target="_blank" href="https://github.com/abtanjir"><i class="fa fa-github" aria-hidden="true"><p>ABTanjir On GitHub</p></i></a></li>
                <li><a title="ABTanjir On Linkedin" class="animate" target="_blank" href="https://api.whatsapp.com/send?phone=8801911222919"><i class="fa fa-whatsapp" aria-hidden="true"><p>ABTanjir On Whatsapp</p></i></a></li>
                <li><a title="ABTanjir On Skype" class="animate" href="skype:abtanjir"><i class="fa fa-skype" aria-hidden="true"><p>ABTanjir On Skype</p></i></a></li>
            </ul>
        </div>
        <div class="screen"></div>
        <div class="profile-img"></div>
    </header>
    <!-- .header-->
</div>
<div class="right-col-block blocks">
    <div class="arrow_bottom"></div>
<section class="intro section-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 style="float:left;">What I am all about.</h2>
                    <h2 style="float:right;"><a href="https://abtanjir.com/ABTanjir-cv.pdf"><i class="fa fa-chevron-down animate"></i>Download My CV</a></h2>
                </div>

            </div>

            <div class="col-md-12">
                <p>
                    I'm in 💔 with backend and security stuffs. Love to play with PHP, Python & JavaScript.
                    <br>
                    My biggest strength is, I am a <strong>quick self-learner</strong>. Computer technology is my play ground.
                    I started software developing when I was at class TEN. 
                    My first successful app was developed for mig33 (top social media site of 2004), I've developed more then 50 software for mig33.
                    and few others for windows computer.
                </p>
                <p>
                    I have been coding from 2011, Developed scalable and impactful products for different Local & International Businesses. Also Worked as a data analyst for couple years.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row v-center">
            <div class="col-md-6">
                <a href="https://haranobiggopti.com" target="_blank"><img src="img/hb.png" alt=""></a>
            </div>

            <div class="col-md-6">
                <a href="https://dontonno.com" target="_blank"><img src="img/dontonno.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section class="expertise-wrapper section-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Expertise</h2>
                </div>
            </div>
        </div>
        <!-- .row -->

        <div class="row">
            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Web Development</h3>

                    <p>
                        Expert in PHP & Django. Developed multiple api & website for last 7+ years. This is kind a first love to me.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>PHP FrameWorks</h3>
                    <p>
                        Expert in CodeIgniter & Laravel. Developed secure payment gateway and implemented multiple APIs like xero, stripe, paypal, aweber in multiple website.
                    </p>
                </div>
            </div>
            
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Web Scraping & Automation</h3>

                    <p>
                        I have expertice to create and scale bots (scraping agents) for multiple perpouse, like Collecting data from website, Bulk image editing etc.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Desktop Application</h3>

                    <p>
                        My programming career and interest in programming startded as a windows software development with VB6. But now I'm using modern technology like .NET, Electron etc.
                    </p>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!--.container-fluid-->
</section>
<!-- .expertise-wrapper -->
<section class="expertise-wrapper section-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 custom_tab">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Language</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Web</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">API</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Others</a>
					</div>
				</nav>
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- Programming -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>PHP</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>JavaScript</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">undefined 🤐</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Python</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>.NET</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Visual Basic 6</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>SQL</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>JAVA</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- Frameworks -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Laravel</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>CodeIgniter</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>WP Theme</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>WP Plugin</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>jQuery</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Vue</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>MySQL</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>IndexedDB</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Electron JS</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Bootstrap</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <!-- API -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>XERO</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Stripe, PayPal</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Aweber, Mailchimp, Twilio, ClickSend</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>FB OpenGraph</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <!-- Tools -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>GIT</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>CI/CD</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Photoshop</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Illustrator</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-block">
                                    <span>Docker</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-focus" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			
			</div>
		</div>
	</div>
</section>

<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Work Experience</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2017 - Present</small>
                    <h3>Software Developer</h3>
                    <h4>Dontonno</h4>

                    <p>Dhaka, Bangladesh</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2017</small>
                    <h3>Backend Engineer</h3>
                    <h4>cookups</h4>

                    <p>Dhaka, Bangladesh</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2016-2017</small>
                    <h3>Web Developer Engineer</h3>
                    <h4>Interspeed Ltd.</h4>

                    <p>Dhaka, Bangladesh</p>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2014-2016</small>
                    <h3>Software Engineer</h3>
                    <h4>expertfreelancer.net</h4>

                    <p>Dhaka, Bangladesh</p>
                </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-experience -->

<section class="section-wrapper section-education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Education</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2018 - 2022 (expected)</small>
                    <h3>B.Sc</h3>
                    <h4>Daffodil International University</h4>

                    <p>Dhaka, Bangladesh</p>
                </div>
                <!-- .experience-item -->
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2013 - 2017</small>
                    <h3>Diploma In CSE</h3>
                    <h4>Ahsanullah Institute of Technical and Vocational Education And Training</h4>

                    <p>Dhaka, Bangladesh</p>
                </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-education -->

<section class="section-wrapper section-interest gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Interest</h2>
                </div>
            </div>
        </div>
        <!-- .row -->

        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <h3>Youtube</h3>

                    <p>I love to share knowledge. That's why choosed youtube.</p>
                </div>
                <div class="content-item">
                    <h3>Chess</h3>

                    <p>
                        Only game I love to play a lot. Chess builds critical thinking and prediction skills.
                        If you can predict and prepare for your opponant's moves on a chessboard,
                        you can apply those skills to socialization and daily life.
                    </p>

                </div>
                <div class="content-item">
                    <h3>Learn more</h3>

                    <p>
                        I love to spend my time by learning and doing fun experiments with new technology.
                    </p>
                </div>
            </div>
        </div>
        <!-- .row -->

    </div>
</section>
<!-- .section-publications -->

<section class="section-wrapper portfolio-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a  target="_blank" class="portfolio-item" href="#">
                    <div class="portfolio-thumb" style="background:url('img/portfolio-1.jpg');"></div>

                    <div class="portfolio-info">
                        <h3>PRAN-RFL</h3>
                        <small>durantabikes.com</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>
            <div class="col-md-6">
                <a  target="_blank" class="portfolio-item" href="#">
                    <div class="portfolio-thumb" style="background:url('img/portfolio-2.jpg');"></div>

                    <div class="portfolio-info">
                        <h3>House Management</h3>
                        <small>bigroof.org</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>
            <div class="col-md-6">
                <a  target="_blank" class="portfolio-item" href="https://haranobiggopti.com">
                    <div class="portfolio-thumb" style="background:url('img/portfolio-3.jpg');"></div>

                    <div class="portfolio-info">
                        <h3>Lost & Found Store</h3>
                        <small>haranobiggopti.com</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>
            <div class="col-md-6">
                <a target="_blank" class="portfolio-item" href="#">
                    <div class="portfolio-thumb" style="background:url('img/portfolio-4.jpg');"></div>

                    <div class="portfolio-info">
                        <h3>NAAFCO Group</h3>
                        <small>naafco.com</small>
                    </div>
                    <!-- portfolio-info -->
                </a>
                <!-- .portfolio-item -->
            </div>
            <div class="col-md-12">
                <a target="_blank" class="portfolio-item-all" href="https://dontonno.com/">
                    View All
                </a>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- .portfolio -->

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <address>
                    <strong>Address</strong><br>
                    74/A East Maniknagar<br>
                    Bangladesh, Dhaka, 1203
                </address>
                <address>
                    <strong>Phone Number</strong><br>
                   <a href="tel:+8801911222919">+88 019 1122 2919</a><br>
                    <a href="tel:+8801612344578">+88 016 1234 4578</a>
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:hello@abtanjir.com">hello@abtanjir.com</a>
                </address>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="feedback-form">
                    <h2>Get in touch</h2>

                    <form id="contactForm" action="https://abtanjir.com/sendemail.php" method="POST">
                        <div class="form-group">
                            <label for="InputName">Name....</label>
                            <input type="text" name="name" required="" class="form-control" id="InputName"
                                   placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Email address</label>
                            <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message</label>
                            <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                      placeholder="Write message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- .feedback-form -->


            </div>
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; 2018 Online CV. All rights reserved | Design By: <a
                            href="https://dontonno.com">dontonno</a></div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
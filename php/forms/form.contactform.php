<?php
include_once("../configuration.php");
include_once("../objects/wff_misc.php");
if (sizeof($_POST) > 0)
{
	if ($GLOBALS['configuration']['email_sink'] != "<put your email address here>")
	{
		$message = "";
		$html = file_get_contents(__FILE__);
		$errors = array();
		foreach ($_POST as $key => $value)
		{
			if (QuestionRequired($key, $html) && $value == '')
			{
				AddFormError($errors, 'Some required fields were not filled in');
			}
			$message .= $key." : ".$_POST[$key]."\n";
		}
		$message .= "------ end of message ------";

		if (sizeof($errors) == 0)
		{
			mail($GLOBALS['configuration']['email_sink'], 'WFF: New response from contactForm', $message, "From: Web Form Factory <wffguys@webformfactory.com>");

?>

<!--
Thank you page starts here
-->

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Web Design & Development: bespoke client-facing solutions">
    <meta name="keywords" content="Web Developer,Programmer,HTML,CSS,JavaScript,Java,C++">
    <meta name="author" content="cafeTechne">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--hreflang tells Search Engines what the language of the target audience is-->
    <link rel="alternate" href="http://cafetechne.com" hreflang="en-us" />

    <!--Canonical Tag tells Search Engines this site is the original source of this content-->
    <link rel="canonical" href="https://www.cafetechne.com" />

    <!--The title tag is the most important tag for SEO, this is what shows up on google-->
    <title>Caf&#233;Techn&#233; | Web Design & Development Services</title>

    <!--Open Graph (og) meta tags are for ensuring content displays nicely when shared via social media-->
    <meta property="og:title" content="Caf&#233;Techn&#233;: Web Design & Development Solutions" />
    <meta property="og:image" content="https://example.com/img/facebooklogo.png" />
    <meta property="og:site_name" content="Caf&#233; Techn&#233;: Web Design & Development" />
    <meta property="og:description" content="This article will talk about tags" />

    <link rel="stylesheet" media="all" type="text/css" href="css/style.css">
    <link rel="stylesheet" media="only screen and (min-device-width : 320px) and (max-device-width : 490px)" type="text/css"
        href="css/smartphoneScreens.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width: 491px) and (max-width: 1129px)" href="css/491to1129.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width: 1130px)" href="css/regularScreens.css">

    <!--This is the CSS file for the font stack, courtesy of iconomoon.io-->
    <link rel="stylesheet" type="text/css" href="fonts.css">


    <!-- -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/javaScript.js"></script>

    <style>
        .navbar-fixed-top.scrolled {
            background-color: #fff !important;
            transition: background-color 200ms linear;
        }
    </style>

    <script>
        /* this is to resize the header dynamically... 
        //but being left in because this is a template.
        $(window).scroll(function (e) {
            $el = $('.header');
            $el.toggleClass('scrolledHeader', $(this).scrollTop() > 0);
        });
        */
    </script>

</head>

<body>
    <header class="header">
        <div class="container hamburger" onclick="openNav();myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <a href="index.html">
            <h1 id="brandName">Caf&#233; Techn&#233;</h1>
        </a>


        <nav id="navLinks">
            <a class="servicesLink" href="services.html" target="_blank">Services</a>
            <a class="portfolioLink" href="portfolio.html" target="_blank">Portfolio</a>
            <a class="aboutLink" href="about.html" target="_blank">About</a>
        </nav>
        <nav id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul>
                <a href="index.html" target="_blank" title="Go to Home section"><span class="icon-home3"></span><span
                        class="navigationText">Home</span></a>
                <a href="tel:3479214466" target="_blank" title="Call Me!"><span class="icon-phone"></span><span class="navigationText">Call</span></a>
                <a href="mailto:cafetechne@gmail.com" target="_blank" title="Email link."><span class="icon-envelope-o"></span><span
                        class="navigationText">Email</span></a>
                <a href="services.html" target="_blank" title="Go to Services section"><span class="icon-magic-wand"></span><span
                        class="navigationText">Services</span></a>
                <a href="portfolio.html" target="_blank" title="Go to Portfolio section"><span class="icon-power"></span><span
                        class="navigationText">Portfolio</span></a>
                <a href="about.html" target="_blank" title="Go to About section"><span class="icon-users"></span><span
                        class="navigationText">About</span></a>
                <a href="https://github.com/cafetechne.com" target="_blank" title="Go to my github page"><span class="icon-terminal"></span><span
                        class="navigationText">Code</span></a>
            </ul>
        </nav>
        <!-- FAB : <div class="contactButton"><span class="icon-share2 icon"></span></div> -->
    </header>





    <main class="content">
        
        <div class="mainContent">

            <main class="content" id="thankYouContent">
                <h2 id="thankYou">Thank you!</h2>
                <h3>We value your business!</h3>
                <h4>One of our associates will contact you between 9 and 5p.m. during the work week-unless you specified otherwise.</h4>
            
            </main>

        </div>
    
</main>
    <footer class="footer">
        <a href="https://twitter.com/cafetechne" target="_blank" title="Go to my twitter page" tabindex="7"><span class="icon-twitter icon"></span></a>
        <a href=""><span class="icon-play icon" target="_blank" title="Go to my youtube page" tabindex="8"></span></a>
        <a href="https://github.com/cafetechne" target="_blank" title="Go to github page" tabindex="9"><span class="icon-github icon"></span></a>
        <a href="https://soundcloud.com/cafetechne" target="_blank" title="Go to my soundcloud page" tabindex="10"><span
                class="icon-soundcloud icon"></span></a>

        <!--Left out, but the uploaded glyphs in this template support these icons.
                <span class="icon-instagram icon"></span>
            <span class="icon-steam icon"></span>
            <span class="icon-comment icon"></span>
            <span class="icon-paypal icon"></span>
            <span class="icon-user-circle-o icon"></span>
            <span class="icon-bubbles icon"></span>
            <span class="icon-share2 icon"></span>
            <a><span class="icon-shield"></span><span class="navigationText"></span></a>
                <a><span class="icon-wrench1"></span><span class="navigationText"></span></a>
        -->


    </footer>
</body>
<!--Phone Icon: By Ellipol [CC BY-SA 4.0  (https://creativecommons.org/licenses/by-sa/4.0)], from Wikimedia Commons-->
<!--Mail Icon: 	Hüseyin Çakır , iconfinder CC 3.0 Attribution, https://www.iconfinder.com/icons/3066965/circle_e-mail_high_quality_mail_media_social_social_media_icon  -->
<!--Social Media Icons: Anton Drukarov, https://www.iconfinder.com/Indygo -->
<!--SeaPhoto (heroImage) : CC0, pxhere: https://pxhere.com/en/photo/705346 -->

</html>

<!--
Thank you page ends here
-->

<?php
			exit();
		}
	}
	else
	{
		echo "Please edit configuration.php with your email address";
		exit;
	}
}
?> <!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Web Design & Development: bespoke client-facing solutions">
    <meta name="keywords" content="Web Developer,Programmer,HTML,CSS,JavaScript,Java,C++">
    <meta name="author" content="cafeTechne">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--hreflang tells Search Engines what the language of the target audience is-->
    <link rel="alternate" href="http://cafetechne.com" hreflang="en-us" />

    <!--Canonical Tag tells Search Engines this site is the original source of this content-->
    <link rel="canonical" href="https://www.cafetechne.com" />

    <!--The title tag is the most important tag for SEO, this is what shows up on google-->
    <title>Caf&#233;Techn&#233; | Web Design & Development Services</title>

    <!--Open Graph (og) meta tags are for ensuring content displays nicely when shared via social media-->
    <meta property="og:title" content="Caf&#233;Techn&#233;: Web Design & Development Solutions" />
    <meta property="og:image" content="https://example.com/img/facebooklogo.png" />
    <meta property="og:site_name" content="Caf&#233; Techn&#233;: Web Design & Development" />
    <meta property="og:description" content="This article will talk about tags" />

    <link rel="stylesheet" media="all" type="text/css" href="css/style.css">
    <link rel="stylesheet" media="only screen and (min-device-width : 320px) and (max-device-width : 490px)" type="text/css"
        href="css/smartphoneScreens.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width: 491px) and (max-width: 1129px)" href="css/491to1129.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width: 1130px)" href="css/regularScreens.css">

    <!--This is the CSS file for the font stack, courtesy of iconomoon.io-->
    <link rel="stylesheet" type="text/css" href="fonts.css">


    <!-- -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/javaScript.js"></script>

    <style>
        .navbar-fixed-top.scrolled {
            background-color: #fff !important;
            transition: background-color 200ms linear;
        }
    </style>

    <script>
        /* this is to resize the header dynamically... 
        //but being left in because this is a template.
        $(window).scroll(function (e) {
            $el = $('.header');
            $el.toggleClass('scrolledHeader', $(this).scrollTop() > 0);
        });
        */
    </script>

</head>

<body>
    <header class="header">
        <div class="container hamburger" onclick="openNav();myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <a href="index.html">
            <h1 id="brandName">Caf&#233; Techn&#233;</h1>
        </a>


        <nav id="navLinks">
            <a class="servicesLink" href="services.html" target="_blank">Services</a>
            <a class="portfolioLink" href="portfolio.html" target="_blank">Portfolio</a>
            <a class="aboutLink" href="about.html" target="_blank">About</a>
        </nav>
        <nav id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul>
                <a href="index.html" target="_blank" title="Go to Home section"><span class="icon-home3"></span><span
                        class="navigationText">Home</span></a>
                <a href="tel:3479214466" target="_blank" title="Call Me!"><span class="icon-phone"></span><span class="navigationText">Call</span></a>
                <a href="mailto:cafetechne@gmail.com" target="_blank" title="Email link."><span class="icon-envelope-o"></span><span
                        class="navigationText">Email</span></a>
                <a href="services.html" target="_blank" title="Go to Services section"><span class="icon-magic-wand"></span><span
                        class="navigationText">Services</span></a>
                <a href="portfolio.html" target="_blank" title="Go to Portfolio section"><span class="icon-power"></span><span
                        class="navigationText">Portfolio</span></a>
                <a href="about.html" target="_blank" title="Go to About section"><span class="icon-users"></span><span
                        class="navigationText">About</span></a>
                <a href="https://github.com/cafetechne.com" target="_blank" title="Go to my github page"><span class="icon-terminal"></span><span
                        class="navigationText">Code</span></a>
            </ul>
        </nav>
        <!-- FAB : <div class="contactButton"><span class="icon-share2 icon"></span></div> -->
    </header>





    <main class="content">
        
        <div class="mainContent">

            <main class="content">

                <div class="mainContent">
                    <table id="servicesTable">
                        <caption>
                            <h2>Services</h2>
                        </caption>
                        <tr>
                            <th>Service</th>
                            <th>Hourly</th>
                        </tr>
                        <tr>
                            <td>Design</td>
                            <td>$25</td>
                        </tr>
                        <tr>
                            <td>Development</td>
                            <td>$40</td>
                        </tr>
                        <tr>
                            <td>Consultation</td>
                            <td>$20</td>
                        </tr>
                    </table>

                    <h2 id="formCaption">Contact Us Today!</h2>
                    <p id="requiredInfoTag">Required information is marked with an asterisk (*)</p>
                    <!-- Need to fill in the action with an appropriate PHP script to gather the data-->
                    <form method='POST' action='./form.contactform.php'>
                        <label for="myName">* Name:</label>
                        <input type="text" value="<?=isset($contactForm->myName)?$contactForm->myName:''?>" name="myName" id="myName" placeholder="Name" required><br>
                        <label for="myEmail">* E-mail</label>
                        <input type="text" value="<?=isset($contactForm->myEmail)?$contactForm->myEmail:''?>" name="myEmail" id="myEmail" placeholder="email@gmail.com" required><br>

                        <label for="myComments">Comments:</label>
                        <textarea name="myComments" id="myComments" rows="11" cols="20"  placeholder="I would like to hire you!" required><?=isset($contactForm->myComments)? $contactForm->myComments : ""?></textarea>
                        <input id="mySubmit" type="submit" value="Submit">
                        <?php
				if (isset($errors) && sizeof($errors) > 0)
				{
					foreach ($errors as $error)
					{
						echo  $error."<br/>";
					}
				}
			?>
                        
                    </form>

                </div>
            </main>

        </div>
    </main>

    <div class="siteMap">
        <a href="services.html" target="_blank" tabindex="1" title="Go to the Services section">Services</a>
        <a href="portfolio.html" target="_blank" tabindex="2" title="Go to the Portfolio section">Portfolio</a>
        <a href="about.html" target="_blank" tabindex="3" title="Go to About section">About</a>
        <a href="tel:3479214466" target="_blank" tabindex="4" title="Call me!">Call</a>
        <a href="mailto:cafetechne@gmail.com" target="_blank" tabindex="5" title="Email me!">Email</a>
        <a href="https://github.com/cafetechne" target="_blank" tabindex="6" title="Go to my github page">Code</a>
    </div>
    <footer class="footer">
        <a href="https://twitter.com/cafetechne" target="_blank" title="Go to my twitter page" tabindex="7"><span class="icon-twitter icon"></span></a>
        <a href=""><span class="icon-play icon" target="_blank" title="Go to my youtube page" tabindex="8"></span></a>
        <a href="https://github.com/cafetechne" target="_blank" title="Go to github page" tabindex="9"><span class="icon-github icon"></span></a>
        <a href="https://soundcloud.com/cafetechne" target="_blank" title="Go to my soundcloud page" tabindex="10"><span
                class="icon-soundcloud icon"></span></a>

        <!--Left out, but the uploaded glyphs in this template support these icons.
                <span class="icon-instagram icon"></span>
            <span class="icon-steam icon"></span>
            <span class="icon-comment icon"></span>
            <span class="icon-paypal icon"></span>
            <span class="icon-user-circle-o icon"></span>
            <span class="icon-bubbles icon"></span>
            <span class="icon-share2 icon"></span>
            <a><span class="icon-shield"></span><span class="navigationText"></span></a>
                <a><span class="icon-wrench1"></span><span class="navigationText"></span></a>
        -->


    </footer>
</body>
<!--Phone Icon: By Ellipol [CC BY-SA 4.0  (https://creativecommons.org/licenses/by-sa/4.0)], from Wikimedia Commons-->
<!--Mail Icon: 	Hüseyin Çakır , iconfinder CC 3.0 Attribution, https://www.iconfinder.com/icons/3066965/circle_e-mail_high_quality_mail_media_social_social_media_icon  -->
<!--Social Media Icons: Anton Drukarov, https://www.iconfinder.com/Indygo -->
<!--SeaPhoto (heroImage) : CC0, pxhere: https://pxhere.com/en/photo/705346 -->

</html>
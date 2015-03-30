<?php
	include './html/functions.php';
	require_once('./html/config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="./css/index.css" rel="stylesheet" type="text/css">
        <link href="./css/base.css" rel="stylesheet" type="text/css">
		<script src="./javascript/form.js"></script>
        <title>Home</title>
    </head>
    <body>
        <div id="header">
            <a href="index.php">
            <div id="img">
              
            </div>
            </a>
            <div id="nav">
                <ul id="navmenu">
                    <li class="list"><a href="./index.php" class="button">Home</a></li>
                    <li class="list"><a href="./html/about.html" class="button">About/Contact</a></li>
                    <li class="list"><a href="./html/blog.html" class="button">Blog</a></li>
                    <li class="list"><a href="./html/member.php" class="button">Member</a></li>
                </ul>
            </div>
        </div>
                <div id="content1">
                    <div id="armLogoBox">  
           
                    <div id="logo">
                </div>
                </div>
        <div id="content1">
        <div id="armLogoBox">  
             <div id="logo">
            </div>
        </div>
            
            <div id="login">
                <div id="loginHead">
                    <p> Sign up or login in here to take full advantage of our site!</p>
                </div>
                <div id="loginFields">

                    <form id="loginboxes" action="./html/login.php">
                        <ul id="form">                        
                            <!-- username -->
                        <li><label class="formList" for="username">Username:</label><br>
                        <input class="formList" type="text" name="username" id="username" onblur="user_id" required="required"></li>
                             <!--password-->
                        <li><label class="formList" for="password">Password:</label><br>
                        <input class="formList" type="password" name="password" id="password" onblur="pass_id" required="required"></li>
                             <!-- email--> 
						<li><div id="email_holder"></div></li>
                        <li><input class="formList" id="submitButton" type="submit" form="loginboxes" value="Submit"></li>
                        </ul>
                        <?php
			                if (isLoggedIn()){
				                echo 'Welcome: '.$_SESSION['SESS_FIRST_NAME'].'<br>';
				                echo '<a href="./html/logout.php">Logout</a><br/>';
			                } else {
				                echo '<a href="./html/register_form.php">Not a member? Click here to sign up.</a>';
			                }
		                ?>   

                    </form>
                </div>
            </div>

        </div>

        <div id="content2">
            <div id="column1">
                <div class="contentBox">
                    <h1 class="contentheading">Nutrition</h1>
                    <img src="./images/kaleSalad.jpg" alt="Kale Salad">
                    <h3>Kale Salad</h3>
                    <p>Step outside your comfort zone and try this! Salad are no longer limited for those lunch dates, this salad is easy to make and nutritious... not to mention delicious!
                    <a href="http://thisisswift.com/category/eat/">[More]</a></p>
                </div>
                <div class="contentBox">
                    <h1 class="contentheading">Blogger of the week!</h1>
                    <img src="./images/Gina.jpg" alt="Gina">
                    <h3>Gina from Fitnessista</h3>
                    <p>This week's blogger of the week is Gina, a personal trainer and group fitness instructor from Georgia. Gina has been a driving for in the fitness blogger sphere lately. Click here to see what she has been up to.
                        <a href="http://fitnessista.com/fitness-categories/">[More]</a></p>
                </div>
                <div class="contentBox">
                    <h1 class="contentheading">New Excercises</h1>
                    <img src="./images/pullup.jpg" alt="Pull Ups">
                    <h3>Pull Ups</h3>
                    <p>Pullups are the ultimate test of relative body strength. Whether you’re a beginner or an expert, here are some variations of pull ups, with useful videos so that you can see progress faster.
                    <a href="file:///C:/Users/Francis/Documents/My%20Web%20Sites/NeverBetterFitness/G2/index.html">[More]</a></p>
                </div>
            </div>
            <div id="column2">
                <div class="contentBox">
                    <h1 class="contentheading">New Gear</h1>
                    <!--http://www.fuseproject.com/work/jawbone/up3/?focus=overview-->
                    <img src="./images/jawbone.jpeg" alt="JawBone UP3">
                    <h3>Jawbone UP3</h3>
                    <p>We have all observed a strong push for the latest wearbles, but which one is best for you and your fitness goals? We have a look at the Jawbone up3 in hope to make your next purchae easier.
                        <a href="http://gizmodo.com/jawbones-up3-brings-more-fashion-to-fitness-trackers-1654722413">[More]</a></p>
                </div>
                <div class="contentBox">
                    <h1 class="contentheading">Running</h1>
                    <img src="./images/RunningWoman.jpg" alt="Running">
                    <h3>10 tips for beginners</h3>
                    <p>Spring is fast approaching and the weather will soon allow us all to get back to running outside. Here are a few tips for those of you who are venturing out for the first time!
                        <a href="http://womensrunning.competitor.com/2012/12/training-tips/becoming-a-runner_8702">[More]</a></p>
                </div>
                <div class="contentBox">
                    <h1 class="contentheading">Routines</h1>
                    <!--http://runwritehike.com/2014/09/alone-weekend/-->
                    <img src="./images/Weekend.png" alt="Weekend">
                    <h3>Week 13</h3>
                    <p>Here is this week's Routine! By wednesday you might be feeling a little sore, but we left plenty of time for you to recover with the entire weekend free of excercise. But first... Wednesday.
                        <br><a href="http://www.realsimple.com/health/fitness-exercise/workouts/weekly-workout-checklist">[More]</a></p>
                </div>
            </div>
            <div id="column3">
                <div class="contentBox">
                    <h1 class="contentheading">Biking</h1>
                    <img src="./images/Cafe.jpg" alt="Cafe">
                    <h3>Biker Friendly</h3>
                    <p>There is nothing worst than to get weird looks because of your gear. Here are a few cafes and restaurants from coast to coast with bikers in mind, which may encourage you to head out... maybe for a treat? <a href="http://ivajean.com/blog/">[More]</a></p>
                </div>
                <div class="contentBox">
                    <h1 class="contentheading">Injury</h1>
                    <img src="./images/Stretch.JPG" alt="Stretching">
                    <h3>Preventing injury</h3>
                    <p>Injuries are never fun, but you shouldn't wait until you get hurt to get informed. Be sure to check out these quick tips in order to reduce your chances of injury.
                        <a href="http://sportsmedicine.about.com/od/injuryprevention/a/safe-workouts.htm">[More]</a></p>
                </div>
                <div class="contentBox">
                    <h1 class="contentheading">Trainer's Advice!</h1>
                    <!--http://agymlife.com/basic-weightlifting/-->
                    <img src="./images/weights.jpg" alt="weights">
                    <h3>SQUATS!</h3>
                    <p>Whether you fear injury or you are just not feeling the burn, our expert trainer is here to give you a few things to keep in mind when doing squats.
                        <a href="http://www.builtlean.com/2010/07/20/how-to-do-proper-squat-technique/">[More]</a></p>
                </div>
            </div>
        </div>
        <div id="footer">
            <p><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fsjcomp1536.webuda.com%2Fg2%2Findex.html"> W3C HTML </a>
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=sjcomp1536.webuda.com%2Fg2%2Findex.html%E2%80%8F&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning"> W3C CSS </a></p>
            <ul id="sitemap">
                    <li class="list2"><a href="./index.php" class="button">Home Page</a></li>
                    <li class="list2"><a href="./html/about.html" class="button">Contact Us</a></li>
                    <li class="list2"><a href="./html/blog.html" class="button">Blog Posts</a></li>
                    <li class="list2"><a href="./html/member.php" class="button">Member Page</a></li>
             </ul>
        </div>
    </body>
</html>

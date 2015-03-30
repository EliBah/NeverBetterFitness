<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/member.css">
        <link rel="stylesheet" type="text/css" href="../css/base.css">
        <title>Member Page</title>
    </head>
    <body>
        <div id="header">
            <a href="../index.php">
            <div id="img">
              
            </div>
            </a>
            <div id="nav">
                <ul id="navmenu">
					<li class="list"><a href="../index.php" class="button">Home</a></li>
                    <li class="list"><a href="./about.html" class="button">About/Contact</a></li>
                    <li class="list"><a href="./blog.html" class="button">Blog</a></li>
                    <li class="list"><a href="./member.php" class="button">Member</a></li>
                </ul>
            </div>
        </div>

        
        <div id="content">
            <?php
			//$name =  get name some how...
				$userfile = file('users.txt');
				include 'functions.php';
				require_once('config.php');
				session_start();

				// Connect to server and select database.
				mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
				mysql_select_db(DB_DATABASE)or die("cannot select DB");
				$tbl_name="topic"; // Table name

				// get value of id that sent from address bar
				$id=$_GET['id'];

				//Question 4d: Access info from the members table
				$sql="SELECT * FROM $tbl_name, members WHERE id='$id'";
				$result=mysql_query($sql);

				$rows=mysql_fetch_array($result);
				
				//Question 4b: do not allow users to view topic is user is not logged in.
				if (!isLoggedIn()){
					echo "Please log in to view topic!";
					exit(); 
				
				
				
				foreach($userfile as $line) 
				{ 
					if(strpos($line,$rows['login']) !== false) { //need to grab session name
						// break apart the line by delimiters to get date/name/percentage
							$str = $line;//
							$info = explode("||", $str);// $info is an array
						break;
					} else {
						echo "Error loading information.";
					}
				}
			?>
			<div id="column1">
				<div id="userimage">
				</div>

            <ul id="userstats">
					<li class="list3">User Name: <?php echo $info[0] ?></li>
					<li class="list3">Date Joined: <?php echo $info[3] ?></li>
					<li class="list3">Last Accessed: <?php echo $info[4] ?></li>
				 </ul>

			</div>
			
			<div id = "column2">
				<div id="progress">
					<progress value="<?php echo $info[8] ?>" max="100"></progress>
				</div>

                <div id="userprogress">
                    <p>
                        Progress: <?php echo $info[8] ?>%</div>
                    </p>
                </div>
			</div>
			
			<div id = "column3">

                <div id ="link1">
                    <a href="./workout.html" id="workout_link">Workout Page</a>
					
                </div>
	
            </div>
            
        </div>
 

        <div id="footer">
            <p><a href="http://validator.w3.org/check?uri=sjcomp1536.webuda.com%2Fg2%2Fhtml%2Fmember.html&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0"> W3C HTML </a>
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=sjcomp1536.webuda.com%2Fg2%2Fcss%2Fmember.css&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en"> W3C CSS </a></p>
            
            <ul id="sitemap">
                    <li class="list2"><a href="./index.php" class="button">Home Page</a></li>
                    <li class="list2"><a href="./html/about.html" class="button">Contact Us</a></li>
                    <li class="list2"><a href="./html/blog.html" class="button">Blog Posts</a></li>
                    <li class="list2"><a href="./html/member.php" class="button">Member Page</a></li>
             </ul>            
        </div>
 
    </body>
 
</html>
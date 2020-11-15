<?php
	include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - About</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <h1>ZenSpace</h1>
            <ul id="nav">
                <li><a href="index.php">Today</a></li>
                <li><a href="guides.php">Guides</a></li>
                <li><a href="journals.php">Journals</a></li>
                <li><a href="medals.php">Medals</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li>About Us</li>
            </ul>
        </div>
        <div id="root">
            <br>
            <div class="panelwide" id="about">
                <h2>What We Do</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis tellus ac nisl dictum suscipit id vel tellus. Mauris vestibulum euismod massa ac sagittis. Donec sit amet orci a mauris elementum aliquam. Praesent fringilla hendrerit aliquet. Proin tempor laoreet ligula at aliquam. Curabitur volutpat elit nec ex dictum finibus quis et erat. Sed eu molestie urna.</p>
                <h2>Who We Are</h2>
                <p>Nunc aliquam dignissim quam sed hendrerit. Duis eu odio at urna laoreet convallis. Donec molestie, ante sed egestas vehicula, lectus mauris ullamcorper ex, vitae tincidunt nulla ex at arcu. Proin a arcu nibh. Maecenas ac facilisis purus. Nunc imperdiet condimentum dapibus. Morbi varius lectus nec mauris fringilla imperdiet. Aliquam erat volutpat. Phasellus a dolor at tortor bibendum rhoncus. Praesent neque risus, faucibus at luctus et, efficitur sed ante. Mauris sapien metus, fermentum sit amet hendrerit eget, aliquam in quam. Sed eget pharetra nibh, vitae rhoncus nunc. Aliquam in ante porta, imperdiet lorem eu, tempus felis.</p>
            </div>
            <br>
            <form class="panelwide" id="email" action="/contact.php">
                <h2>Email Us!</h2>
                <input type="text" id="emailtitle" name="emailtitle" placeholder="Title" required>
                <br>
                <textarea style="resize:none" rows="5" cols="60" name="emailtext" placeholder="Message" required></textarea>
                <br><br>
                <input type="submit" value="Send Email">
            </form>
            <br>
            <div class="panelwide" id="contact">
                <h2>Contact Information</h2>
                <ul>
                    <li>4000 Central Florida Blvd</li>
                    <li>Orlando, Florida</li>
                    <li>32816</li>
                    <li>(407) 823-2000</li>
                </ul>
            </div>
            <br>
        </div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
        </div>
    </body>

</html>
<?php require('logic.php');?>

<!DOCTYPE HTML>
<html lang = "en">
    <head>
        <!--MetaData-->
        <title>Sean Misra | Website</title>
        <meta charset='UTF-8'>
        <meta name = 'description' content='Sean Misra Profile, a website built by Sean Misra. Personal summary, contact information, social media, and interests.'>
        <meta name ='author' content='Sean Misra'>
        <meta name='keywords' content='Sean, Misra, Computer Science, Software Engineering, Harvard Extension, Northeatern'>
        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!--Bootstrap and Font Awesome-->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       
        <!--jQuery UI-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>    
        
        <!--Stylesheet-->
        <link rel='stylesheet' href='style.css'>
        
        <!--Script Files-->
        <script src="scripts/quickQuery.min.js"></script>
        <script src='scripts/tweetie.min.js'></script>
        <script src="scripts/script.js"></script>
    </head>
    
    <body>
        <header> 
            <div class = "jumbotron">
                <h1>Sean Misra</h1>
                <br>
                <!--Twitter Feed Cycle-->
                <div class = "tweet"></div>
                <div class = "tweetSpace">Follow <a href="https://twitter.com/SeanMisra">@SeanMisra</a><br><a href="https://twitter.com/SeanMisra" class="fa fa-twitter" aria-hidden="true"></a></div>
            </div>
        </header>
        
        <main>
            <!-- Three Main Icons -->
            <div class="icon_set">
                <a href="https://www.linkedin.com/in/seanmisra/" class="fa fa-linkedin-square" aria-hidden="true" id="social_one"></a>
                <a href="https://github.com/seanmisra" class="fa fa-github-square" aria-hidden="true" id="social_two"></a>
                <a href="#" class="fa fa-pencil-square" aria-hidden="true" id="social_three"></a>
                
                <!-- Dialog Contact Form -->
                <div id="dialog" title="Contact"> 
                    <form action="" method="post" id = "contactForm">
                        <div class = 'form-group'> 
                            <label class='sr-only' for='name'>Name: </label>
                            <input class='form-control' id ="name" name="name" type="text" placeholder="Name" required oninvalid="this.setCustomValidity('I think you forgot your name')" oninput="setCustomValidity('')">
                        </div>
                        <div class = 'form-group'>
                            <label class='sr-only' for='email'>Email: </label>
                            <input class='form-control' id="email" name="email" type="text" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" oninvalid="this.setCustomValidity('Email format looks funky')" oninput="setCustomValidity('')">
                        </div>
                        <div class = 'form-group'>
                            <label class='sr-only' for='message'>Message: </label>
                            <textarea class='form-control' id="message" name="message" type="text" placeholder="Message" rows=8 required oninvalid="this.setCustomValidity('I think you forgot the message')" oninput="setCustomValidity('')"></textarea>
                        </div>    
                        <div class='form-group' id = 'submit'>
					       <input type='submit' id ='submitButton' class='btn btn-success' value='Send'> 
				        </div>
                    </form>
                </div>
                
                <!-- Contact Success Form -->
                <?php if($success == true):?> 
                    <div id="dialogTwo" title="Successfully Submitted"> 
                        Thanks <?=$filteredName?> for your message. I'll try my best to get back as soon as possible!
                    </div>
                <?php endif;?> 
            </div>
            
            <!-- Three Information Panels -->
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                           Education</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">I earned a degree in business administration from <strong>Northeastern University</strong> in 2014, and then an MBA from Northeastern in 2015. I have been taking computer science courses through <strong>Harvard Extension</strong> since 2016. </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            Programming</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">I got introduced to programming while participating in a social-media start-up in 2015. I have learnt some <strong>HTML/CSS/JavaScript, Java, PHP, Python, and C/C++</strong>. I am interested in learning more about Spring MVC, AngularJS, cybersecurity, and AR/VR.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Hobbies</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Travel, Creative Writing, Science-Fiction, <strong>Programming</strong>, Stock Market, NBA, NFL</div>
                    </div>
                </div>
            </div> 
        </main>
        
        <footer class="footer">
            <div class="container">
                <a href="https://github.com/seanmisra/seanmisra.com"><p id = "footer_message" class="text-muted">Code available at GitHub.</p></a>
            </div>
        </footer>
    </body>
</html>
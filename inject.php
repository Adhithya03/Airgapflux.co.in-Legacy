<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.78">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        
        <script type="text/javascript" src="js\popper.min.js"></script>
        <script type="text/javascript" src="js\bootstrap-4.4.1.js"></script>
        <link rel="stylesheet" href="css/bootstrap-4.4.1.css" />
        <link rel="stylesheet" href="css/inject.css">
        <link rel="stylesheet" type="text/css" href="css/main.css?t=<?=time()?>">
        <link rel="stylesheet" type="text/css" href="css/inject.css?t=<?=time()?>">
        <link href="images/inject.svg" rel="icon" type="image/x-icon"/>
        <title>Add resources to library</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Exo+2:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap" rel="stylesheet">
        <!--  -->
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <p class='menu text-center'>Add Resource</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/explore.php">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/inject.php">Add to Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://forms.gle/Lf4Jp3AweCkxNVpV8">Feedback</a>
      </li>
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="col-12 text-center">
                <h1>Add Resource</h1>
            </div>
            <div class="container">
                <?php
                    if(isset($_GET['thanks'])){
                          $random_num = rand(0, 23);
                          $quotes = array(
                                "Your contribution is not only making an impact on the website, but also on the lives of those who will benefit from the knowledge you've shared.",
                                "Great work! Your willingness to share your knowledge and help others is truly inspiring.",
                                "You have made a difference in the world by sharing your knowledge and expertise. Keep up the fantastic work!",
                                "Your contributions are a testament to the power of sharing knowledge and the positive impact it can have.",
                                "Every new piece of knowledge added to the website is a step towards a brighter future, and your efforts are helping make that future a reality.",
                                "The world needs more people like you, who are not only knowledgeable but also willing to share their knowledge to help others.",
                                "Your contributions to the website are not only valuable, but also invaluable in helping others grow and learn.",
                                "Keep shining your light of knowledge and helping others learn, for it is the greatest reward of all.",
                                "You are making a lasting impact on the world through your efforts to share knowledge and help others learn.",
                                "The world is a better place because of your willingness to share your knowledge and help others grow. Keep it up!",
                                "Your contributions to the website are a shining example of the power of collaboration and the impact it can have on the world.",
                                "You are not just adding to the website, but also to the collective wisdom of humanity, and that is truly a remarkable achievement.",
                                "The more we share our knowledge, the brighter our future will be, and your contributions are helping to light the way.",
                                "Your efforts to share your knowledge with others are an investment in the future, and a true act of kindness.",
                                "Keep spreading the wealth of your knowledge, for it will bring richness to many lives.",
                                "You are a true leader in the field, and your contributions to the website will inspire others to follow in your footsteps.",
                                "Your dedication to sharing your knowledge and helping others learn is a true testament to your character and your passion for learning.",
                                "Your contributions to the website are a valuable resource for the world, and a true gift to future generations.",
                                "Learning is not attained by chance, it must be sought for with ardor and diligence.",
                                "The purpose of education is to replace an empty mind with an open one.",
                                "The only real limitation on your abilities is the level of your desires. If you want it badly enough, there are no limits.",
                                "The more you help others, the more you help yourself.",
                                "The greatest use of life is to spend it for something that will outlast it.",
                                "The best way to help people is not to tell them what to do, but to help them discover what they already know.");
                    
                    
                                echo "<p class='thanks'>" . $quotes[$random_num] . "</p>";
                                
                                session_start();
                                if (isset($_SESSION['link'])) {
                                    $link = $_SESSION['link'];
                                    echo "<p class='linkback'>Thank you for contributing, here's link to resource you added: <a href='$link'>$link</a></p>";
                                    unset($_SESSION['link']);
                                }
}


                ?>
            </div>
            <div class="continer">
                <form action="addRes.php" method="post">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <fieldset><legend>Choose Subject *</legend>
                            <select class="select" name="subject" id="subject" required>
                                <option disabled selected value>$ Choose a subject $</option>
                                    <option value="oali">Analog Electronics</option>
                                    <option value="bect">Circuit Theory </option>
                                    <option value="coel">Consumer Electronics </option>
                                    <option value="cosy">Control Systems </option>
                                    <option value="diel">Digital Electronics </option>
                                    <option value="doem">Design Of Electrical Machines </option>
                                    <option value="dsip">Digital Signal Processing </option>
                                    <option value="edac">Electronic Devices And Circuits </option>
                                    <option value="emfi">Electromagnetic Fields </option>
                                    <option value="mach">Electrical Machines </option>
                                    <option value="basc">Fundamentals</option>
                                    <option value="main">Measurements </option>
                                    <option value="mpmc">Microprocessors </option>
                                    <option value="plsc">Plc And Scada </option>
                                    <option value="poel">Power Electronics </option>
                                    <option value="posy">Power Systems </option>
                                    <option value="prsw">Protection And Switch Gear </option>
                                    <option value="phys">Physics</option>
                                    <option value="slsd">Solid State Drives </option>
                                    <option value="spem">Special Machines </option>
                                    <option value="tmdt">Transmission And Distribution </option>
                            </select>
                            </fieldset>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <fieldset><legend>Resource Title *</legend>
                            <input name="topicname" type="text" id="name" class="name" placeholder="Topic being covered." required>
                        </fieldset>
                        </div>
                    </div>
                    
                    <div class="row">

                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="form-floating">
                                <fieldset><legend>Resource Link *</legend>
                                <textarea cols="40" rows="1" name="resources" id="link" required  placeholder="One link only."></textarea>
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6">
                            <fieldset><legend>Additional Information</legend>
                            <textarea name="notes" id="notes" rows="5" cols="40" placeholder="Any related thoughts."></textarea>
                             </fieldset>
                        </div>


                        <div class="col-12 col-md-12 col-lg-6">
                            <fieldset>
                                <legend>Conceptual Clarity *</legend>
                            <div>
                                <input type="radio" name='rating' id="ec3" value="3">
                                <label for="ec3">In-depth explanation</label>
                            </div>
                            <div >
                                <input type="radio" name='rating' id="ec2" value="2" >
                                <label for="ec2">Good Explanation</label>
                            </div>
                            <div >
                                <input type="radio" name='rating' id="ec1" value="1" checked>
                                <label for="ec1">Vague Explanation</label>
                            </div>  
                            <div >
                                <input type="radio" name='rating' id="ec0" value="0">
                                <label for="ec0">No concept explanation.</label>
                            </div>
                        </div>

                        </fieldset>
                      
                        <div class="col-12 col-md-12 col-lg-6">

                                <fieldset>
                                    <legend>Type of resource *</legend>
                                <div>
                                    <input type="radio" name='restype' id="em0" value="2" checked>
                                    <label for="em0">Video</label>
                                </div>
                                <div >
                                    <input type="radio" name='restype' id="em1" value="1">
                                    <label for="em1">Text</label>
                                </div>
                                </fieldset>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                        <fieldset>
                            <legend>Level of Difficulty *</legend>
                            <div>
                                <input type="radio" name='difficulty' id="d2" value="2">
                                <label for="d2">Advanced</label>
                            </div>
                            <div>
                                <input type="radio" name='difficulty' id="d1" value="1">
                                <label for="d1">Intermediate</label>
                            </div>
                            <div>
                                <input type="radio" name='difficulty' id="d0" value="0" checked>
                                <label for="d0">Beginner</label>
                            </div>
                        </fieldset>
                    </div>

                            <div class="col-12 col-md-12 col-lg-6">
                            <fieldset>
                                <legend>Resource Category</legend>
                                <select name='category' id="cat" required>
                                    <option value="reso" selected value>Resource</option>
                                    <option value="boks">Suggested Book</option>
                                    <option value="simu">Simulations</option>
                                    <option value="usma">Useful materials</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>


                    <div class="d-flex justify-content-center m-3">
                        <button class="btn btn-success" type="submit" name="submit">Add to Library</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- <a title="GDPR-compliant Web Analytics" href="https://clicky.com/101400280"><img alt="Clicky" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a> -->
<script async src="//static.getclicky.com/101400280.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101400280ns.gif" /></p></noscript>
    </body>
</html>
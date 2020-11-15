<?php
    include("extern/database.php");
    
    if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Today</title>
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
                <li><a href="index.html">Today</a></li>
                <li>Guides</li>
                <li><a href="journals.html">Journals</a></li>
                <li><a href="medals.html">Medals</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </div>
        <div id="root">
            <!--


            The most important feature, guides are contained in large dropdown categories, with each guide having their own dropdown for their details.
            These should populate according to JSON files on the server, so here are pure HTML examples.


            <form class="panelwide" id="search" action="/search.php">
                <input type="text" id="searchtext" name="searchtext" size="30" placeholder="Search Guides, Tasks, Journals, etc." required>
                <input type="submit" value="Search">
            </form>
            <br>
            <div class="panel" id="guides">
                
                <h2>Guides</h2>
                <ul class="categorylist">
                    <li class="category" id="meditation">
                        <h3>Meditation</h3>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit quam mollis, molestie odio at, congue diam. In sit amet molestie risus. Maecenas posuere dolor at nibh luctus, vitae cursus sem viverra. Sed in dolor sed diam interdum bibendum sed sed lorem. Nam felis lorem, vulputate quis erat eget, maximus interdum dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse maximus tellus ut eros dapibus, et vestibulum lacus consequat. Proin eget porta dui, non aliquet urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</div>
                        <ul class="guideslist">
                            <li class="guide">
                                <h4>Sample Guide</h4> 
                                <p>Proin vel rutrum dolor. Mauris nec dictum purus, eu tristique velit. Aliquam nec turpis accumsan, bibendum sem at, lobortis dolor. Duis ultricies sem elit, sit amet fermentum libero dignissim vel. Quisque ut leo imperdiet, scelerisque arcu ac, accumsan massa. Fusce eleifend nulla mi, eu consectetur velit maximus id.</p>
                                <p>[ Sample Video Goes Here ]</p>
                                <h4>Instructions</h4>
                                <ol>
                                    <li>First Step</li>
                                    <li>Second Step</li>
                                    <li>Last Step</li>
                                </ol>
                                <br>
                                <a href="javascript:alert('Test');">Add To Tasks!</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category" id="meditation">
                        <h3>Relaxation</h3>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit quam mollis, molestie odio at, congue diam. In sit amet molestie risus. Maecenas posuere dolor at nibh luctus, vitae cursus sem viverra. Sed in dolor sed diam interdum bibendum sed sed lorem. Nam felis lorem, vulputate quis erat eget, maximus interdum dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse maximus tellus ut eros dapibus, et vestibulum lacus consequat. Proin eget porta dui, non aliquet urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</div>
                        <ul class="guideslist">
                            <li class="guide">
                                <h4>Sample Guide</h4> 
                                <p>Proin vel rutrum dolor. Mauris nec dictum purus, eu tristique velit. Aliquam nec turpis accumsan, bibendum sem at, lobortis dolor. Duis ultricies sem elit, sit amet fermentum libero dignissim vel. Quisque ut leo imperdiet, scelerisque arcu ac, accumsan massa. Fusce eleifend nulla mi, eu consectetur velit maximus id.</p>
                                <p>[ Sample Video Goes Here ]</p>
                                <h4>Instructions</h4>
                                <ol>
                                    <li>First Step</li>
                                    <li>Second Step</li>
                                    <li>Last Step</li>
                                </ol>
                                <br>
                                <a href="javascript:alert('Test');">Add To Tasks!</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category" id="sleep">
                        <h3>Sleep</h3>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit quam mollis, molestie odio at, congue diam. In sit amet molestie risus. Maecenas posuere dolor at nibh luctus, vitae cursus sem viverra. Sed in dolor sed diam interdum bibendum sed sed lorem. Nam felis lorem, vulputate quis erat eget, maximus interdum dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse maximus tellus ut eros dapibus, et vestibulum lacus consequat. Proin eget porta dui, non aliquet urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</div>
                        <ul class="guideslist">
                            <li class="guide">
                                <h4>Sample Guide</h4> 
                                <p>Proin vel rutrum dolor. Mauris nec dictum purus, eu tristique velit. Aliquam nec turpis accumsan, bibendum sem at, lobortis dolor. Duis ultricies sem elit, sit amet fermentum libero dignissim vel. Quisque ut leo imperdiet, scelerisque arcu ac, accumsan massa. Fusce eleifend nulla mi, eu consectetur velit maximus id.</p>
                                <p>[ Sample Video Goes Here ]</p>
                                <h4>Instructions</h4>
                                <ol>
                                    <li>First Step</li>
                                    <li>Second Step</li>
                                    <li>Last Step</li>
                                </ol>
                                <br>
                                <a href="javascript:alert('Test');">Add To Tasks!</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category" id="classtips">
                        <h3>Class Tips</h3>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit quam mollis, molestie odio at, congue diam. In sit amet molestie risus. Maecenas posuere dolor at nibh luctus, vitae cursus sem viverra. Sed in dolor sed diam interdum bibendum sed sed lorem. Nam felis lorem, vulputate quis erat eget, maximus interdum dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse maximus tellus ut eros dapibus, et vestibulum lacus consequat. Proin eget porta dui, non aliquet urna. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</div>
                        <ul class="guideslist">
                            <li class="guide">
                                <h4>Sample Guide</h4> 
                                <p>Proin vel rutrum dolor. Mauris nec dictum purus, eu tristique velit. Aliquam nec turpis accumsan, bibendum sem at, lobortis dolor. Duis ultricies sem elit, sit amet fermentum libero dignissim vel. Quisque ut leo imperdiet, scelerisque arcu ac, accumsan massa. Fusce eleifend nulla mi, eu consectetur velit maximus id.</p>
                                <p>[ Sample Video Goes Here ]</p>
                                <h4>Instructions</h4>
                                <ol>
                                    <li>First Step</li>
                                    <li>Second Step</li>
                                    <li>Last Step</li>
                                </ol>
                                <br>
                                <a href="javascript:alert('Test');">Add To Tasks!</a>
                            </li>
                            <li class="guide">
                                <h4>Sample Guide</h4> 
                                <p>Proin vel rutrum dolor. Mauris nec dictum purus, eu tristique velit. Aliquam nec turpis accumsan, bibendum sem at, lobortis dolor. Duis ultricies sem elit, sit amet fermentum libero dignissim vel. Quisque ut leo imperdiet, scelerisque arcu ac, accumsan massa. Fusce eleifend nulla mi, eu consectetur velit maximus id.</p>
                                <p>[ Sample Video Goes Here ]</p>
                                <h4>Instructions</h4>
                                <ol>
                                    <li>First Step</li>
                                    <li>Second Step</li>
                                    <li>Last Step</li>
                                </ol>
                                <br>
                                <a href="javascript:alert('Test');">Add To Tasks!</a>
                            </li>
                            <li class="guide">
                                <h4>Sample Guide</h4> 
                                <p>Proin vel rutrum dolor. Mauris nec dictum purus, eu tristique velit. Aliquam nec turpis accumsan, bibendum sem at, lobortis dolor. Duis ultricies sem elit, sit amet fermentum libero dignissim vel. Quisque ut leo imperdiet, scelerisque arcu ac, accumsan massa. Fusce eleifend nulla mi, eu consectetur velit maximus id.</p>
                                <p>[ Sample Video Goes Here ]</p>
                                <h4>Instructions</h4>
                                <ol>
                                    <li>First Step</li>
                                    <li>Second Step</li>
                                    <li>Last Step</li>
                                </ol>
                                <br>
                                <a href="javascript:alert('Test');">Add To Tasks!</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <br>
            
            -->
        </div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
        </div>
    </body>

</html>
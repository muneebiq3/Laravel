<!doctype html>
<html lang="en">

    <head>
        
        <link rel="icon" href="Images/icons/favicon.ico">
        <title>edyou</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        
    </head>

    <body>
        
        <header>
            
          <div class="container-fluid">

            <div class="row pt-5">

                <div class="col-4">

                    <a class="menu-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">

                        <img src="Images/icons/menu-button.png" alt="menu button image" class="img-fluid">
                        
                        <div class="offcanvas offcanvas-start bg-light border" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 1000px;">
            
                            <div class="offcanvas-header">
            
                                <img src="Images/icons/sidebar-close-button.svg" alt="close button" class="img-fluid" type="button" data-bs-dismiss="offcanvas" aria-label="close">
            
                                <img src="Images/notIcons/edyou-sidebar.svg" alt="edyou img" class="img-fluid">
            
                            </div>
            
                            <div class="offcanvas-body">
            
                                <div class="col-12">
            
                                    <h4 class="text-black-50">Menu</h4>
            
                                </div>
            
                                <div class="col-12 d-lg-flex d-none justify-content-between mt-5" style="height: 200px;">
            
                                    <div class="col-lg-4 d-flex flex-column justify-content-between">
            
                                        <h3 class="fw-bold sidebar-menu-items-color">Features</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">About Us</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Schools</h3>
            
                                    </div>
            
                                    <div class="col-lg-8 col-12 d-flex flex-column justify-content-between">
            
                                        <h3 class="fw-bold sidebar-menu-items-color">Wishlist</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Contact Us</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Privacy Policy</h3>
            
                                    </div>
            
                                </div>
            
                                <div class="col-12 d-lg-none d-flex justify-content-between mt-5" style="height: 300px;">
            
                                    <div class="col-lg-4 d-flex flex-column justify-content-between mb-5">
            
                                        <h3 class="fw-bold sidebar-menu-items-color">Features</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">About Us</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Schools</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Wishlist</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Contact Us</h3>
                                        <h3 class="fw-bold sidebar-menu-items-color">Privacy Policy</h3>
            
                                    </div>
            
                                </div>
            
                                <div class="col-8 offcanvas-bottom mt-5">
            
                                    <div class="container mt-5">
            
                                        <div class="row mt-5">
            
                                            <div class="col-md-6 col-12">
            
                                                <label class="fw-bold text-black-50">Email</label>
                                                <p class="fw-bold text-black-50">supportme@edyou.com</p>
            
                                            </div>
            
                                            <div class="col-md-6 col-12">
            
                                                <label class="fw-bold text-black-50">Phone</label>
                                                <p class="fw-bold text-black-50">+1 607 254 4636</p>
            
                                            </div>
            
                                            <div class="col-md-9 col-12">
            
                                                <label class="fw-bold text-black-50">Address</label>
                                                <p class="fw-bold text-black-50">Ithaca, NY 14850, United States</p>
            
                                            </div>
            
                                        </div>
            
                                    </div>
            
                                    <div class="container">
                                        <div class="col-3">
            
                                            <img src="Images/notIcons/apple-button-sidebar-footer.svg" alt="apple button sidebar" >
            
                                        </div>
                                    </div>
            
                                </div>
                                
                            </div>
            
                        </div>
            
                    </a>
        
                </div>
        
                <div class="col-4 heading">
        
                    <img src="Images/notIcons/edyou-main-heading.png" alt="" class="img-fluid">
        
                </div>
        
                <div class="col-4 d-flex justify-content-center">
        
                <!-- Button to Open Login Modal -->
                <button type="button" class="btn btn-success btn-sm signin-btn" data-bs-toggle="modal" data-bs-target="#signInModal">
                    Log In
                </button>

                <!-- Login Modal -->
                <div class="modal fade" id="signInModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <svg type="button" class="mx-5 mt-3" data-bs-dismiss="modal" aria-label="Close" viewBox="0 0 16 16" width="2em" height="2em" role="img" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-arrow-left-circle">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
                            </svg>

                            <div class="modal-body p-5">
                                <p class="modal-title fw-bolder text-start" id="signInModalLabel">Sign In to Your Account</p>
                                <p class="text-start">Welcome back! Please sign in to continue.</p>

                                <!-- Login Form -->
                                <form action="login.php" method="post" class="needs-validation" novalidate>
                                    <input type="text" name="username" placeholder="Enter your username" class="form-control col-md-12 mb-3" required>
                                    <input type="password" name="password" placeholder="Enter your password" class="form-control col-md-12 mb-3" required>
                                    <button class="btn btn-success col-md-12 w-100" type="submit">Sign In</button>
                                </form>

                                <!-- Error message display (if any) -->
                                <?php if (isset($_GET['error'])): ?>
                                    <p class="text-danger mt-3"><?php echo htmlspecialchars($_GET['error']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


                </div>

            </div>

          </div>                   

        </header>

        <main>

            <section class="container-fluid mt-0 section-1">

                <div class="row">

                    <div class="col-lg-7 col-12 d-flex flex-column align-items-center text-center mt-3 pt-3">

                        <p class="text-white fw-bold private-social-text mt-5 pt-5">

                            The private social app made for 
                            <span class="college-life-text d-inline-block">college life</span>.

                        </p>

                        <img src="Images/notIcons/line_home.png" alt="main heading underline" class="img-fluid line">
                        
                        <div class="mt-5 pt-5 pb-1 mt-md-3 pt-md-3 pb-md-0 ">

                            <button type="button" class="btn btn-success join-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                                Sign up Now

                                <img src="Images/icons/Arrow Icon.png" alt="" class="img-fluid">

                            </button>

                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

                                    <div class="modal-content">

                                        <svg type="button" class="mx-5 mt-3" data-bs-dismiss="modal" aria-label="Close" viewBox="0 0 16 16" width="2em" height="2em" focusable="false" role="img" aria-label="arrow left circle" 
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-arrow-left-circle b-icon bi">
                                            <g>
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z">
                                                </path>
                                            </g>
                                        </svg>

                                        <div class="modal-body p-5">

                                            <p class="modal-title fw-bolder text-start waiting-list" id="staticBackdropLabel">Join the Waiting List and Secure Your Spot!</p>

                                            <p class="text-start">Exciting things are coming, and you don't want to miss out!</p>
                                            <form action="process.php" method="post" class="needs-validation" novalidate>
                                                
                                                <input type="email" name="email" placeholder="Enter your email" class="form-control col-md-12 mb-3" required>
                                                <input type="text" name="username" placeholder="Enter your username" class="form-control col-md-12 mb-3" required>
                                                <input type="password" name="password" placeholder="Enter your password" class="form-control col-md-12 mb-3" required>
                                                <input type="password" name="confirm_password" placeholder="Enter your password again" class="form-control col-md-12 mb-3" required>

                                                <button class="btn btn-success col-md-12 w-100 main-submit" type="submit">
                                                    Join
                                                </button>
                                                
                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    
                        <img src="Images/icons/Mouse.png" alt="scroll mouse" class="img-fluid mouse-icon" onclick="scrollToSectionCover()">

                    </div>

                    <div class="col-lg-5 flex-column d-flex align-items-center justify-content-center">

                        <div class="d-lg-block d-none px-5">

                            <div class="d-flex justify-content-center align-items-center rounded-circle outer-1">

                                <div class="main-image position-absolute">

                                    <img src="Images/notIcons/Mobile logo Style.png" alt="edyou logo" class="img-fluid">
                                        
                                </div>

                                <div class="image-1 position-absolute">

                                    <img src="Images/notIcons/image 22.png" alt="icon 1" class="img-fluid">

                                </div>    

                                <div class="check-image-1 position-absolute">

                                    <img src="Images/notIcons/check-image-1.png" alt="check icon 1" class="img-fluid">

                                </div>

                                <div class="image-2 position-absolute">

                                    <img src="Images/notIcons/Group 494.png" alt="icon 2" class="img-fluid">

                                </div>

                                <div class="image-3 position-absolute">

                                    <img src="Images/notIcons/image 23.png" alt="icon 3" class="img-fluid">

                                </div>

                                <div class="check-image-3 position-absolute">

                                    <img src="Images/notIcons/check-image-3.png" alt="check icon 3" class="img-fluid">

                                </div>

                                <div class="image-4 position-absolute">

                                    <img src="Images/notIcons/Rectangle 163.png" alt="icon 4" class="img-fluid">

                                </div>

                                <div class="check-image-4 position-absolute">

                                    <img src="Images/notIcons/check-image-4.png" alt="check icon 4" class="img-fluid">

                                </div>

                                <div class="image-5 position-absolute">

                                    <img src="Images/notIcons/Group 497.png" alt="icon 5" class="img-fluid">

                                </div>

                                <div class="image-6 position-absolute">

                                    <img src="Images/notIcons/Rectangle 168.png" alt="icon 6" class="img-fluid">

                                </div>

                                <div class="check-image-6 position-absolute">

                                    <img src="Images/notIcons/check-image-6.png" alt="check icon 6" class="img-fluid">

                                </div>

                                <div class="image-7 position-absolute">

                                    <img src="Images/notIcons/image 21.png" alt="icon 7" class="img-fluid">

                                </div>

                                <div class="check-image-7 position-absolute">

                                    <img src="Images/notIcons/check-image-7.png" alt="check icon 7" class="img-fluid">

                                </div>

                                <div class="image-8 position-absolute">

                                    <img src="Images/notIcons/Group 493.png" alt="icon 8" class="img-fluid">

                                </div>

                                <div class="image-9 position-absolute">

                                    <img src="Images/notIcons/Avatar 16 1.png" alt="icon 9" class="img-fluid">

                                </div>

                                <div class="check-image-9 position-absolute">

                                    <img src="Images/notIcons/check-image-9.png" alt="check icon 9" class="img-fluid">

                                </div>

                                <div class="image-10 position-absolute">

                                    <img src="Images/notIcons/Rectangle 169.png" alt="icon 10" class="img-fluid">

                                </div>

                                <div class="check-image-10 position-absolute">

                                    <img src="Images/notIcons/check-image-10.png" alt="check icon 10" class="img-fluid">

                                </div>

                                <div class="image-11 position-absolute">

                                    <img src="Images/notIcons/Group 495.png" alt="icon 11" class="img-fluid">

                                </div>

                                <div class="image-12 position-absolute">

                                    <img src="Images/notIcons/Rectangle 167.png" alt="icon 12" class="img-fluid">

                                </div>

                                <div class="check-image-12 position-absolute">

                                    <img src="Images/notIcons/check-image-12.png" alt="check icon 12" class="img-fluid">

                                </div>

                                <div class="image-13 position-absolute">

                                    <img src="Images/notIcons/Rectangle 165.png" alt="icon 13" class="img-fluid">

                                </div>

                                <div class="check-image-13 position-absolute">

                                    <img src="Images/notIcons/check-image-13.png" alt="check icon 13" class="img-fluid">

                                </div>

                                <div class="line-1 position-absolute"></div>
                                <div class="line-2 position-absolute"></div>
                                <div class="line-3 position-absolute"></div>
                                <div class="line-4 position-absolute"></div>
                                <div class="line-5 position-absolute"></div>
                                <div class="line-6 position-absolute"></div>
                                <div class="line-7 position-absolute"></div>
                                <div class="line-8 position-absolute"></div>
                                <div class="line-9 position-absolute"></div>
                                <div class="line-10 position-absolute"></div>
                                <div class="line-11 position-absolute"></div>
                                <div class="line-12 position-absolute"></div>
                                <div class="line-13 position-absolute"></div>
                
                                <div class="d-flex justify-content-center align-items-center rounded-circle outer-2">
                              
                                    <div class="d-flex justify-content-center align-items-center rounded-circle outer-3">
                
                                        <div class="d-flex justify-content-center align-items-center rounded-circle outer-4"></div>
                
                                    </div>
                
                                </div>    
                    
                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <section  class="container-fluid section-2 pt-5">

                <div class="row">

                    <div class="col-12 d-flex justify-content-center cover-section">

                        <img src="Images/notIcons/Group 357.png" alt="cover brand picture" class="img-fluid pt-5">

                    </div>

                </div>

            </section>

            <section class="section-3 container-fluid mb-0">

                <div class="row">

                    <div class="col-2"></div>
    
                    <div class="col-md-4 col-sm-4 col-8 d-flex flex-column justify-content-center section mt-md-0 mt-sm-0 mt-5">
    
                        <div class="col-1 position-fixed button-container">
    
                            <button onclick="scrollToSection(0)" class="border-0 bg-white image-button" data-index="0" data-image-default="Images/icons/Post icon.png" data-image-selected="Images/icons/Selected Post.png">
    
                                <img src="Images/icons/Post icon.png" alt="Post button" class="img-fluid">
                            
                            </button>
    
                            <button onclick="scrollToSection(1)" class="border-0 bg-white image-button" data-index="0" data-image-default="Images/icons/Chat.png" data-image-selected="Images/icons/Selected Chat.png">
    
                                <img src="Images/icons/Chat.png" alt="Chat button" class="img-fluid">
                            
                            </button>
    
                            <button onclick="scrollToSection(2)" class="border-0 bg-white image-button" data-index="0" data-image-default="Images/icons/Events.png" data-image-selected="Images/icons/Selected Events.png">
    
                                <img src="Images/icons/Events.png" alt="Events Button" class="img-fluid">
                            
                            </button>
    
                            <button onclick="scrollToSection(3)" class="border-0 bg-white image-button" data-index="0" data-image-default="Images/icons/Community.png" data-image-selected="Images/icons/Selected Community.png">
    
                                <img src="Images/icons/Community.png" alt="Community button" class="img-fluid">
                            
                            </button>
    
                            <button onclick="scrollToSection(4)" class="border-0 bg-white image-button" data-index="0" data-image-default="Images/icons/Story icon.png" data-image-selected="Images/icons/Selected Story.png">
    
                                <img src="Images/icons/Story icon.png" alt="Story button" class="img-fluid">
                            
                            </button>
                            
                        </div>
    
                        <p class="h1 text-success">Post</p>
                        <p>100% USER CONTROL</p>
                        <p>U Post to who you want.</p>
                        <p>U decide how long your content lives</p>
                        <p>Self-Destruct times illustration</p>
    
                        <img src="Images/notIcons/Post.png" alt="" class="img-fluid image">
    
                    </div>
    
                </div>

                <div class="row">

                    <div class="col-2"></div>
        
                    <div class="col-md-4 col-sm-4 col-8 d-flex flex-column justify-content-center section mt-5">
        
                        <p class="h1 text-success">Chat</p>
                        <p>Encrypted for your security.</p>
                        <p>Message 1 person, create a group and message more!</p>
        
                        <img src="Images/notIcons/Chat Images.png" alt="" class="img-fluid image">
    
                    </div>
    
                </div>

                <div class="row">

                    <div class="col-2"></div>
    
                    <div class="col-md-4 col-sm-4 col-8 d-flex flex-column justify-content-center section mt-5">
    
                        <p class="h1 text-success">U Events w/RSVP feature</p>
                        <p>Scheduling events, meetings, lunches and dinners have never been easier.</p>
                        <p>Set the event, select the guest and send the event, we handle the rest.</p>
                        <p>Automatically enters in your event calendar.</p>
        
                        <img src="Images/notIcons/Birthday.png" alt="" class="img-fluid image">
    
                    </div>
    
                </div>

                <div class="row">

                    <div class="col-2"></div>
    
                    <div class="col-md-4 col-sm-4 col-8 d-flex flex-column justify-content-center section mt-5">
        
                        <p class="h1 text-success">U Communities</p>
                        <p>U can set up any type of group, whether it is with two people or establish a new community for the everyone, it's up to U.</p>
                        <p>U have public and private groups for you to decide to create or join.</p>
                        
                        <img src="Images/notIcons/Cafe.png" alt="" class="img-fluid image">
    
                    </div>
                
                </div>

                <div class="row">

                    <div class="col-2"></div>
    
                    <div class="col-md-4 col-sm-4 col-8 d-flex flex-column justify-content-center mt-5 section">
    
                        <p class="h1 text-success">Stories</p>
                        <p>U can stay connected with your college friends and easily share your college memories and experiences all at once!</p>
        
                        <img src="Images/notIcons/Story.png" alt="" class="img-fluid story">
        
                    </div>
    
                </div>

            </section>
            
        </main>

        <footer>

            <div class="container mt-0">

                <div class="row footer-section-1">

                    <div class="col-md-4 col-12 d-flex justify-content-md-center">

                        <p class="h1">About</p>
        
                    </div>

                    <div class="col-md-7 col-12 d-flex flex-column justify-content-end">

                        <p>EDYOU was created by Cornell MBA Graduate students who wanted to create a EDU community, a place to
                        stay connected with their college friends and segment college life onto one all-inclusive platform.</p>
            
                        <p>A private and encrypted social media application to share content, posts, stories, search for new friends,
                        encrypted chat and make it easier to schedule events with our RSVP feature.</p>
            
                        <p>EDYOU was created for U, the college students, and alumni to stay connected.</p>
            
                        <p>EDYOU provides 100% User control over content, by allowing you to select who sees
                        your content and allowing you to decide for how long the content will live before being 
                        deleted permanently off our servers.</p>
            
                        <p>We look forward to growing EDYOU and adding new features and products over the next few 
                        months and would love to hear your feedback, so please reach out to us.</p>
            
                        <p>Welcome to our EDYOU community,</p>
            
                        <p class="fw-bold">TEAM EDYOU</p>
        
                    </div>

                </div>

            </div>

            <div class="container-fluid px-5 footer-section-2">

                <div class="row">

                    <div class="col-lg-10 col-sm-8 col-12 d-flex flex-column">
    
                        <div class="col-lg-10 col-sm-8 col-12 d-flex justify-content-sm-start justify-content-center mt-3">
    
                            <img src="Images/notIcons/edyou-footer.svg" alt="edyou logo" class="img-fluid" height="100px">
    
                        </div>
    
                        <div class="col-lg-10 col-sm-8 col-12 d-flex justify-content-sm-start justify-content-center mt-3">
        
                            <div>College Life. Stay Connected</div>
        
                        </div>
        
                        <div class="col-lg-10 col-sm-8 col-12 d-flex justify-content-sm-start justify-content-center mt-sm-3 mb-sm-5 mt-3 mb-1">
        
                            <img src="Images/notIcons/apple-button-footer.svg" alt="app store download button" class="img-fluid footer-apple-button" height="35px">
        
                        </div>
    
                    </div>
    
                    <div class="col-lg-2 col-sm-4 col-12 d-flex justify-content-sm-start justify-content-center">
        
                        <ul class="nav flex-column align-items-sm-start align-items-center mt-sm-3 mt-1">
        
                            <li class="nav-item">
        
                            <a class="nav-link footer-items" href="#">Features</a>
        
                            </li>
        
                            <li class="nav-item">
        
                            <a class="nav-link footer-items" href="#">About Us</a>
        
                            </li>
        
                            <li class="nav-item">
        
                                <a class="nav-link footer-items" href="#">Schools</a>
        
                            </li>
        
                            <li class="nav-item">
        
                            <a class="nav-link footer-items" href="#">Wishlist</a>
        
                            </li>
        
                            <li class="nav-item">
        
                            <a class="nav-link footer-items" href="#">Contact Us</a>
        
                            </li>
        
                        </ul>
        
                    </div>
    
                </div>
    
                <div class="row">
        
                    <hr>
                    <div class="col-lg-9 col-12 d-flex justify-content-lg-start justify-content-center">
        
                        <p class="no-hover-privacy-policy">All rights reserved. EDYOU © 2023</p>
        
                    </div>
        
                    <div class="col-lg-3 col-12 d-flex justify-content-center">
        
                        <a href="#" class="footer-items">Privacy Policy</a>
        
                        <a href="#" class="footer-items">
                            <img src="Images/icons/Globe.png" class="footer-items" alt="globe">
                            English
                        </a>
        
                    </div>
        
                </div>

            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

        <script src="script/script.js"></script>


    </body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="includes/assets/css/style.css">

    <title>Travelx</title>
</head>
<style>


nav {
    display: flex;
    flex-direction: column; /* Stack items for smaller screens */
    align-items: center; /* Center items */
    margin-bottom: 20px;
}

.logo {
    display: flex;
    align-items: center;
}

.bars {
    display: flex;
    align-items: center;
}

.menu {
    display: none; /* Hide menu by default */
}

.menu.active {
    display: block; /* Show menu when active */
}

.signup-login {
    display: flex;
    gap: 10px; /* Space between buttons */
}

.content {
    padding: 20px;
}

.search {
    display: flex;
    align-items: center;
    justify-content: center;
}

.search input {
    padding: 10px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search button {
    padding: 10px 15px;
    background-color: #007BFF; /* Button color */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Media Queries */
@media (min-width: 768px) {
    nav {
        flex-direction: row; /* Horizontal layout on larger screens */
        justify-content: space-between; /* Space between items */
    }
    
    .menu {
        display: flex; /* Show menu items on larger screens */
    }
    
    .menu ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .menu ul li {
        margin: 0 15px; /* Space between menu items */
    }
    
    .signup-login {
        margin-left: auto; /* Push to the right */
    }
}

@media (max-width: 767px) {
    .menu {
        flex-direction: column; /* Stack menu items */
        align-items: center;
        width: 100%;
    }
    
    .menu.active {
        display: flex; /* Show menu when active */
    }
}
</style>

<body>
    <!--home section start here-->
    <section class="home">
    <div class="home-box">
        <nav>
            <div class="logo bars">
                <div class="bar">
                    <i class="fa fa-bars"></i>
                </div>
                <h3>Travelx</h3>
            </div>
            <div class="menu">
                <div class="close">
                    <i class="fa fa-close"></i>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Travel Packages</a></li>
                    <li><a href="#">Destination</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="signup-login">
                <a href="#">Sign Up</a>
                <a href="#">Login</a>
            </div>
        </nav>

        <div class="content">
            <h5>Travelx</h5>
            <h1>Let's embark on your dream journey</h1>
            <p>Discover inspiring destinations, create unforgettable memories, and travel with confidence - adventure starts here.</p>
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Your journey begins with a search...">
                <button>Search</button>
            </div>
        </div>
    </div>
</section>

    <!-- home section end here -->

    <!-- travel section starts here  -->
    <section class="travel">
        <div class="container">
            <div class="box box1">
                <img src="includes/assets/img/trust.png">
                <div class="content">
                    <h4>reliable and trustworthy</h4>
                    
                </div>
            </div>

            <div class="box box2">
                <img src="includes/assets/img/planning.png">
                <div class="content">
                    <h4>seamslesss travel plannigs</h4>
                    
                </div>
            </div>

            <div class="box box3">
                <img src="includes/assets/img/map.png">
                <div class="content">
                    <h4>toilored</h4>
                   
                </div>
            </div>

        </div>
    </section>
    <!-- travel section end here  -->

    <!-- destination section starts here -->
    <section class="destinations">
        <h4 class="label">destinations</h4>
        <div class="container">
            <div class="container-box">
                <h2 class="heading">city escape and nature retreats</h2>
                <div class="content">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae reprehenderit eaque sint
                        architecto odio voluptate laudantium quibusdam atque ipsam aut commodi impedit possimus numquam
                        et dolorum adipisci, pariatur corporis nemo.</p>
                    <a href="#">explore more </a>
                </div>
            </div>
            <div class="gallery">
                <div class="box box1">
                    <img src="includes/assets/img/home-background.jpg" alt="">
                    <div class="text">
                        <h2>east nusa tenggara</h2>
                    </div>
                </div>
                <div class="box box2">
                    <img src="includes/assets/img/destinations-1.jpg" alt="">
                    <div class="text">
                        <h2>bali</h2>
                    </div>
                </div>
                <div class="box box3">
                    <img src="includes/assets/img/destinations-2.jpg" alt="">
                    <div class="text">
                        <h2>bali</h2>
                    </div>
                </div>
                <div class="box box4">
                    <img src="includes/assets/img/destinations-3.jpg" alt="">
                    <div class="text">
                        <h2>east java</h2>
                    </div>
                </div>
                <div class="box box5">
                    <img src="includes/assets/img/destinations-4.jpg" alt="">
                    <div class="text">
                        <h2>west papua</h2>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- destination section end here -->

    <!-- featured starts here -->
    <section class="featured">
        <div class="gallery">
            <div class="box box1">
                <div class="first-box">
                    <h4 class="label">featured offers</h4>
                    <h2 class="heading">unlock exclusive trevel deals</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quas quam, perferendis recusandae,
                        nobis!</p>
                    <a href="#">show more</a>
                    <div class="image">
                        <img src="includes/assets/img/plane.png" alt="">
                    </div>
                </div>
            </div>
            <div class="box box2">
                <img src="includes/assets/img/featured-1.jpg" alt="">
                <div class="content">
                    <h2>yuliaya hotel</h2>
                    <p>gill trawangan,lombok</p>
                    <div class="review-and-idr">
                        <div class="review"><i class="fa fa-star"></i>4.9 |653 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>

            <div class="box box3">
                <img src="includes/assets/img/featured-2.jpg" alt="">
                <div class="content">
                    <h2>feranndo hotel
                    </h2>
                    <p>gill trawangan,lombok</p>
                    <div class="review-and-idr">
                        <div class="review"><i class="fa fa-star"></i>4.9 |653 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>
            <div class="box box4">
                <img src="includes/assets/img/featured-3.jpg" alt="">
                <div class="content">
                    <h2>evin's hotel</h2>
                    <p>gill trawangan,lombok</p>
                    <div class="review-and-idr">

                        <div class="review"> <i class="fa fa-star"></i>4.9 |653 review</div>
                        <p>idr 343.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured ends here -->


    <!-- feedback section starts here -->

    <section class="feedback">
        <div class="container">
            <h4 class="label">adventure's voices</h4>
            <h2 class="heading">adventure's voices</h2>
            <p class="paragraph">
                real stories from our sdenturours community
            </p>
        </div>
        <div class="voices">
            <div class="voice box1">
                <div class="profile">
                    <img src="includes/assets/img/photo1.jpg">
                    <div class="detail">
                        <li>marvin davin</li>
                        <li>traveler</li>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eum veniam numquam voluptas perferendis
                minima repudiandae culpa ipsum ad nesciunt delectus iure cupiditate, nisi quia natus. Veritatis
                repudiandae aut minus!
            </div>


            <div class="voice box2">
                <div class="profile">
                    <img src="includes/assets/img/photo2.jpg">
                    <div class="detail">
                        <li>marvin davin</li>
                        <li>traveler</li>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eum veniam numquam voluptas perferendis
                minima repudiandae culpa ipsum ad nesciunt delectus iure cupiditate, nisi quia natus. Veritatis
                repudiandae aut minus!
            </div>
            <div class="voice box3">
                <div class="profile">
                    <img src="includes/assets/img/photo3.jpg">
                    <div class="detail">
                        <li>marvin davin</li>
                        <li>traveler</li>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eum veniam numquam voluptas perferendis
                minima repudiandae culpa ipsum ad nesciunt delectus iure cupiditate, nisi quia natus. Veritatis
                repudiandae aut minus!
            </div>

            <div class="voice box4">
                <div class="profile">
                    <img src="includes/assets/img/photo4.jpg">
                    <div class="detail">
                        <li>marvin davin</li>
                        <li>traveler</li>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eum veniam numquam voluptas perferendis
                minima repudiandae culpa ipsum ad nesciunt delectus iure cupiditate, nisi quia natus. Veritatis
                repudiandae aut minus!
            </div>


            <div class="voice box5">
                <div class="profile">
                    <img src="includes/assets/img/photo5.jpg">
                    <div class="detail">
                        <li>marvin davin</li>
                        <li>traveler</li>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eum veniam numquam voluptas perferendis
                minima repudiandae culpa ipsum ad nesciunt delectus iure cupiditate, nisi quia natus. Veritatis
                repudiandae aut minus!
            </div>


            <div class="voice box6">
                <div class="profile">
                    <img src="includes/assets/img/photo6.jpg">
                    <div class="detail">
                        <li>marvin davin</li>
                        <li>traveler</li>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eum veniam numquam voluptas perferendis
                minima repudiandae culpa ipsum ad nesciunt delectus iure cupiditate, nisi quia natus. Veritatis
                repudiandae aut minus!
            </div>


        </div>
    </section>
    <!-- feedback section ends here -->

    <!-- article section start here -->
    <section class="article">
        <h4 class="lable">resources</h4>
        <h2 class="heading">latest article</h2>
        <div class="container">
            <div class="latest-article">
                <img src="includes/assets/img/hidden-game.jpg">
                <p>destination discovery</p>
                <h3>10 must-visit hidden game in southest aisa</h3>
                <div class="author">
                    <img src="includes/assets/img/photo7.jpg">
                    <p>sandy aldiansyag - 9 min read</p>
                </div>
            </div>
            <div class="more-article">
                <div class="box box1">
                    <div class="image">
                        <img src="includes/assets/img/family.jpg">
                    </div>
                    <div class="text">
                        <h3> tarveling with kids :tips for stress-free family adventure </h3>
                        <li>family travel - 7 min read</li>
                    </div>
                </div>
                <div class="box box2">
                    <div class="image">
                        <img src="includes/assets/img/food-article.jpg">
                    </div>
                    <div class="text">
                        <h3> culinary adventure: exploring world cuisines on your travels</h3>
                        <li>food and travel - 5 min</li>
                    </div>
                </div>
                <div class="box box3">
                    <div class="image">
                        <img src="includes/assets/img/budget-travel.jpg">
                    </div>
                    <div class="text">
                        <h3> tarveling on buget: tips for affordable adventure </h3>
                        <li> budget travel - 7 min read</li>
                    </div>
                </div>
                <div class="box box4">
                    <div class="image">
                        <img src="includes/assets/img/tips.jpg">
                    </div>
                    <div class="text">
                        <h3> tarveling with kids :tips for stress-free family adventure </h3>
                        <li>travel tips - 7 min read</li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- article section end here -->

    <!--  footer section starts here -->
    <footer>
        <section class="footer">
            <div class="container">
                <div class="detail">
                    <h3>TravelX</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolores nesciunt tempore harum
                        quaerat, ipsa optio in voluptatem dolore, error eos vel unde deserunt cum accusamus deleniti
                        debitis consequuntur maxime?</p>
                    <h5>get in touch</h5>
                    <a herf="#">priyal@gmail.com</a>
                    <div class="social">
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                    </div>
                </div>
                <div class="about-us">
                    <h4>about us</h4>
                    <li> <a href="#">FAQ</a></li>
                    <li> <a href="#">booking guide</a></li>
                    <li> <a href="#">cancellation policy</a></li>
                    <li> <a href="#">site map</a></li>
                </div>

                <div class="about-us">
                    <h4>help</h4>
                    <li> <a href="#">FAQ</a></li>
                    <li> <a href="#">booking guide</a></li>
                    <li> <a href="#">cancellation policy</a></li>
                    <li> <a href="#">site map</a></li>
                </div>


                <div class="about-us">
                    <h4>resources</h4>
                    <li> <a href="#">newsletter</a></li>
                    <li> <a href="#">blog</a></li>
                    <li> <a href="#">gallery</a></li>
                    <li> <a href="#">offers</a></li>
                </div>
            </div>
            <div class="copyright">
                <div>
                    &copy;2024 - TravelX, inc , all rights reserved
                </div>
            </div>

            <div class="copy">

            <a href="#">term & condition</a>
            <a href="#">privacy policy</a>
            </div>

        </section>
    </footer>



    <!-- footer section  ends here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const bars = document.querySelector(".bar"),
            close = document.querySelector(".close"),
            menu = document.querySelector(".menu");

        bars.addEventListener("click", () => {
            menu.classList.add("active");
            gsap.from(".menu", {
                opacity: 0,
                duration: .3
            })

            gsap.from(".menu ul", {
                opacity: 0,
                x: -300

            })
        });

        close.addEventListener("click", () => {
            menu.classList.remove("active")

        });

        function animateContent(selector) {
            selector.forEach((selector) => {
                gsap.to(selector, {
                    y: 30,
                    duration: 0.5,
                    opacity: 1,
                    delay: 0.2,
                    stagger: 0.2,
                    ease: "power2.out",
                })
            })

        }

        function ScrollTriggerAnimation(triggerSelector, boxselectors) {
            const timeline = gsap.timeline({
                ScrollTrigger: {
                    trigger: triggerSelector,
                    start: "top 50%",
                    end: "top 80%",
                    scrub: 1,

                },
            });
            boxselectors.forEach((boxselectors) => {
                timeline.to(boxselectors, {
                    y: 0,
                    duration: 1,
                    opacity: 1,
                });
            })
        }

        function swipeAnimation(triggerSelector, boxselectors) {
            const timeline = gsap.timeline({
                ScrollTrigger: {
                    trigger: triggerSelector,
                    start: "top 50%",
                    end: "top 100%",
                    scrub: 1,
                },
            });


            boxselectors.forEach((boxselectors) => {
                timeline.to(boxselectors, {
                    x: 0,
                    duration: 1,
                    opacity: 1,
                });
            });
        }

        function galleryAnimation(triggerSelector, boxselectors) {
            const timeline = gsap.timeline({
                ScrollTrigger: {
                    trigger: triggerSelector,
                    start: "top 100%",
                    end: "bottom 100%",
                    scrub: 1,

                },
            });
            boxselectors.forEach((boxselector) => {
                timeline.to(boxselector, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                });
            });

        }
        animateContent([".home .content h5, .home .content h1, .home .content p, .home .content .search"]);

        ScrollTriggerAnimation(".travel", [".travel .box1", ".travel .box2", ".travel .box3"]);

        ScrollTriggerAnimation(".feedback.container", [".feedback .label", ".feedback .heading", ".feedback .paragraph"]);

        ScrollTriggerAnimation(".article", [".article.label", ".article .heading"]);

        swipeAnimation(".destinations", [".destinations .heading", ".destinations .content", ".destinations .heading"])

        swipeAnimation(".article", [".article .latest-article", ".article .box1",".article .box2",".article .box3",".article .box4"])

        galleryAnimation(".destinations .gallery", [".destinations .gallery .box1", ".destinations .gallery .box2", ".destinations .gallery .box3",
            ".destinations .gallery .box4", ".destinations .gallery .box5"])

        galleryAnimation(".featured .gallery", [".featured .gallery .box1", ".featured .gallery .box2", ".featured .gallery .box3",
            ".featured .gallery .box4"])

            galleryAnimation(".feedback.voices", [".feedback .voices .box1", ".feedback .voices .box2", ".feedback .voices .box3",
            ".feedback .voices .box4",  ".feedback .voices .box5", ".feedback .voices .box6"])

    </script>
</body>

</html>
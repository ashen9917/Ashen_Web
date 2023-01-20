<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="shortcut icon" type="images/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <title>Ashen</title>
</head>

<body>
    <div class="scroll-up-btn"><i class="fas fa-angle-up"></i></div>
    <!-- navigation -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">  
                <a href="#">Ashen<span>Indula</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>


    <!-- home -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, My Name is</div>
                <div class="text-2">Ashen Indula</div>
                <div class="text-3">and I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>


    <!-- about -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <h3 class="title1">-Who am I ?-</h3>
            <div class="about-content">
                <div class="column left">
                    <img src="15.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Web Design</span><br>Designing Web Pages by using HTML, CSS, JS.</li>
                            <li><span>UI/UX Design</span><br>Designing UI/UX for Web Pages.</li>
                            <li><span>Video Editing</span><br>Editing Video by using Adobe Premiere Pro.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>My Experience</span><br>I am a Designer of Web Sites, Blog Sites and also Desktop Software Applications.</li>
                            <li><span>Job</span><br>I'm Marketing Excecutive in Playiiit (pvt) LTD.</li>
                            <li><span>Work</span><br>I'm Working in Fiverr online Platform.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>School</span><br>A3 B2 C4 for O/L
                                <br>Physics-S, Combined Mathematics-S, Chemistry-S for A/L.
                            </li>
                            <li><span>Higher Study</span><br>Diploma in Software Engineering (SQA Level 3).</li>
                            <li><span>Now</span><br>3rd year Undergraduate student in Java Institute for Advanced Technology.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- projects -->
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">Projects</h2>
            <h3 class="title1">-What I provide?-</h3>
            <div class="projects-content">
                <div class="card">
                    <img src="Screenshot_1.jpg">
                    <div class="layer">
                        <h3>Vnaa Website</h3>
                        <p>Vnaa is an E-commerce Web site for selling Musical Instruments</p>
                        <a href="#"> <i class="fas fa-share-alt"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="Screenshot_2.jpg">
                    <div class="layer">
                        <h3>Health First Website</h3>
                        <p>Health First is a Web site for a Gym</p>
                        <a href="#"> <i class="fas fa-share-alt"></i></a>
                    </div>
                </div>
                <div class="card">
                    <img src="Screenshot_3.jpg">
                    <div class="layer">
                        <h3>Portfolio Website</h3>
                        <p>Portfolio is a Web site for Bootstrap</p>
                        <a href="#"> <i class="fas fa-share-alt"></i></a>
                    </div>
                </div>
            </div>
            <a href="projects.php" class="btn">See more</a>
            </div>
        </div>
    </section>

    <!-- skills -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Skills and Experiences</div>
                    <p>I am a Designer of Web Sites, Blog Sites and also Desktop Software Applications and also I'm Marketing Excecutive in Playiiit (pvt) LTD. I'm a student of Java Institute. After my 1st year I collected my Diploma in Software Engineering certificate...</p>
                    <a href="Ashen Indula (CV).pdf" download>Download CV</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JS</span>
                            <span>30%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>80%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="column left">
                <div class="contact-content">
                    <div class="column left">
                        <h3 class="text2">Get in Touch</h3>
                        <p>If you want to Design a Web Site, Blog Site or Desktop Software Application, plz contact me via followings...</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Ashen Indula</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">90, Raja Mawatha, Buttala</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-phone"></i>
                                <div class="info">
                                    <div class="head">Phone</div>
                                    <div class="sub-title">070 32 13 678</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">ashenindula@gmail.com</div>
                                </div>
                            </div>
                            <div class="social-icons">
                                <a class="fb" href="https://www.facebook.com/ashen.indula.777/"><i class="fab fa-facebook"></i></a>
                                <a class="wha" href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                <a class="ins" href="https://www.instagram.com/ashenindula/"><i class="fab fa-instagram"></i></a>
                                <a class="li" href="https://www.linkedin.com/in/ashen-indula-2b95b0206/"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message me</div>
                        <form name="submit-to-google-sheet">
                            <div class="field">
                                <div class="field name">
                                    <input type="text" name="Name" placeholder="Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" name="Email" placeholder="Email" required>
                                </div>
                                <div class="field textarea">
                                    <textarea name="Message" cols="30" rows="10" placeholder="Message..." required></textarea>
                                </div>
                                <div class="field">
                                    <div class="button">
                                        <button type="submit">Send message</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- footer -->
    <footer>
        <span>Created by <a href="#">AshenIndula</a> | <span class="far fa-copyright"> 2022 All rights reserved.</span></span>
    </footer>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyK4j4N5BxWAsux-klenzAQYm4aDFF5EmZ_bXDqX-FSdVeBjHGqFFf_wCnqi64kSJA4/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    msg.innerHTML = "Message Sent Successfully"
                    setTimeout(function() {
                        msg.innerHTML = ""
                    }, 5000)
                    form.reset()
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
    <script>
        var sidemenu = document.getElementById("sidemenu");

        function openmenu() {
            sidemenu.style.right = "0";
        }

        function closemenu() {
            sidemenu.style.right = "-200px";
        }
    </script>
    <script src="./script.js"></script>
</body>

</html>
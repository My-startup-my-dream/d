<?php
header('Location: ../account');
exit;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | LinkedIn</title>
    <link rel="icon" type="image/x-icon" href="CSS/Images/main-icon.png">
<link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
    
    
          <!--icons-->
	<link rel="apple-touch-icon" sizes="57x57" href="../icons/icons/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="../icons/icons/apple-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="../icons/icons/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="../icons/icons/apple-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="../icons/icons/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="../icons/icons/apple-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="../icons/icons/apple-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="../icons/icons/apple-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="../icons/icons/apple-icon-180x180.png" />
	<link rel="icon" type="image/png" sizes="192x192" href="../icons/icons/android-icon-192x192.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../icons/icons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="96x96" href="../icons/icons/favicon-96x96.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../icons/icons/favicon-16x16.png" />
	<link rel="manifest" href="../icons/icons/manifest.json" />
	<meta name="msapplication-TileColor" content="#0073b1" />
	<meta name="msapplication-TileImage" content="../icons/icons/ms-icon-144x144.png" />
	<meta name="theme-color" content="#0073b1" />
</head>
<body id="body">
    <div class="sidebar">
        <div class="profile-img-sidebar"> <img class="avatar" src="CSS/Images/MyLogo.jpg" alt=""> <img class="moon" src="SVG/moon-solid.svg" alt="">
            <p> Vignesh Antony <br> +91 750 760 1084 </p> <img class="down expand-add-acc" src="SVG/chevron-down-solid.svg" alt="">
        </div>
        <div class="all-uls">
            <ul class="add-account">
                <li class=""> <a href="#"> <img src="SVG/plus-solid.svg" alt=""> <span>Add Account</span> </a> </li>
            </ul>
            <hr class="hidden-hr-add-acc">
            <ul>
                <li class=""> <a href="#"> <img src="SVG/user-friends-solid.svg" alt=""> <span>New Group</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/lock-solid.svg" alt=""> <span>New Secret Chat</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/bullhorn-solid.svg" alt=""> <span>New Channel</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/user-solid.svg" alt=""> <span>Contacts</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/phone-volume-solid.svg" alt=""> <span>Calls</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/bookmark-solid.svg" alt=""> <span>Saved messages</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/cog-solid.svg" alt=""> <span>Settings</span> </a> </li>
            </ul>
            <hr>
            <ul>
                <li class=""> <a href="#"> <img src="SVG/user-plus-solid.svg" alt=""> <span>Invite Friends</span> </a> </li>
                <li class=""> <a href="#"> <img src="SVG/question-circle-solid.svg" alt=""> <span>Telegram FAQ</span> </a> </li>
            </ul>
        </div>
    </div>

    <div class="main-navbar-wrap">
        <div class="main-navbar"> <span class="icon"></span>
            <div class="input-wrap"> <span class="icon search-icon"></span> <input type="text" placeholder="Search" class="search-bar" for="search"> </div>
            <ul class="nav-icons"> <span class="icon home-icon active" title="Home"></span> <span class="icon user-icon" title="My Network"></span> <span class="icon suit-icon" title="Jobs"></span> <span class="icon chat-icon" title="Messaging"></span> <span class="icon notify-icon" title="Notifications"></span> <span class="icon me-icon"></span>
                <div class="work-icon"> <span class="icon work"></span> <span class="work-cont">Work</span> </div>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="main">
            <div class="profile-section">
                <div class="profile-photo">
                    <img src="CSS/Images/sample2.jpg" class="back-photo">
                    <span class="svg-icon camera" title="Change Background-Image"></span>
                    <img src="CSS/Images/MyLogo.jpg" class="user-photo">
                </div>
                <div class="personal-details">
                    <div>
                        <span class="user-name">Vignesh Antony</span>
                        <p class="status" title="Status">
                            Student at Madras Institute of Technology.
                        </p>
                        <p class="location">
                            Chennai, Tamil Nadu, India.
                        </p>
                        <p class="num">
                            41 Connections &nbsp; &bull; &nbsp; 12 Posts
                        </p>
                    </div>
                    <button class="edit-profile" title="Edit-Profile">Edit Profile</button>
                </div>
            </div>
            <div class="pers-nav-bar">
                <button class="nav-button active-tab" t-id="about">About</button>
                <button class="nav-button" t-id="connect">Connections</button>
                <button class="nav-button" t-id="posts">Posts</button>
            </div>
            <div class=" section about-section" id="about">
                <div class="info-box">
                    <span class="heading">
                        <span>Summary</span>
                        <span class="svg-icon edit-content" title="Edit"></span>
                    </span>
                    <div class="info-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, odit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et nemo, incidunt laborum facilis quibusdam reprehenderit!</div>
                </div>
                <div class="info-box">
                    <span class="heading">
                        <span>Contact</span>
                        <span class="add-button" title="Add Contact Details">+</span>
                        <span class="svg-icon edit-content" title="Edit"></span>
                    </span>
                    <div class="info-content">
                        <a class="anchor contact" href="tel:+919940595423">+91 9940595423</a>
                        <a class="anchor link" href="https://github.com/vignesh-antony">github.com/vignesh-antony</a>
                        <a class="anchor mail" href="mailto:vigneshantony5@gmail.com">vigneshantony5@gmail.com</a>
                    </div>
                </div>
                <div class="info-box">
                    <span class="heading">
                        <span>Education</span>
                        <span class="add-button" title="Add Education Details">+</span>
                        <span class="svg-icon edit-content" title="Edit"></span>
                    </span>
                    <div class="info-content educate">
                        <img src="CSS/Images/sample5.jpg" class="clg-img">
                        <span class="clg-details">
                            <span class="clg-name">Madras Institute of Technology, Chennai</span>
                            <span class="clg-degr">Bachelor of Engineering - B.E, Computer Technology</span>
                            <span class="clg-time">2017 - 2021</span>
                        </span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="heading">
                        <span>Work and Experience</span>
                        <span class="add-button" title="Add Work Details">+</span>
                        <span class="svg-icon edit-content" title="Edit"></span>
                    </span>
                    <div class="info-content educate">
                        <img src="CSS/Images/sample1.jpg" class="clg-img">
                        <span class="clg-details">
                            <span class="clg-name">Software Engineer</span>
                            <span class="clg-degr">Google LLC</span>
                            <span class="clg-time">2017 - Present &nbsp;&bull;&nbsp; 3 yrs 4 mos</span>
                            <span class="clg-time">Mountain View, California, United States</span><br>
                            <ul class="work-details">
                                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, laborum.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, eveniet?</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis tempora sed sunt facilis eum necessitatibus.</li>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="heading">
                        <span>Skills</span>
                        <span class="add-button" title="Add New Skills">+</span>
                        <span class="svg-icon edit-content" title="Edit"></span>
                    </span>
                    <div class="info-content">
                        <ul class="skills">
                            <li>
                                <span>C Programming</span>
                                <span class="skill-status">Advanced</span>
                            </li>
                            <li>
                                <span>C++ Programming</span>
                                <span class="skill-status">Advanced</span>
                            </li>
                            <li>
                                <span>Web Development</span>
                                <span class="skill-status">Advanced</span>
                            </li>
                            <li>
                                <span>Big Data Analysis</span>
                                <span class="skill-status">Medium</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="info-box">
                    <span class="heading">
                        <span>Interests</span>
                        <span class="add-button" title="Add Interests">+</span>
                        <span class="svg-icon edit-content" title="Edit"></span>
                    </span>
                    <div class="info-content">
                        <ul class="interest">
                            <li> - Machine Learning</li>
                            <li> - Artificial Intelligence</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section connections-section hide" id="connect">
                <div class="total-conn">&bull;&nbsp; 41 Connections</div>
                <div class="contacts">
                    <img src="CSS/Images/sample5.jpg" class="cont-img">
                    <div class="cont-details">
                        <a href="" class="con-name">Surya A</a>
                        <span class="conn-work">Managing Director in ITC</span>
                        <span class="conn-locate">Chennai, TamilNadu</span>
                    </div>
                    <button class="message">Message</button>
                </div>
                <div class="contacts">
                    <img src="CSS/Images/sample1.jpg" class="cont-img">
                    <div class="cont-details">
                        <a href="" class="con-name">Manikandan S</a>
                        <span class="conn-work">Software Analyst in HCL</span>
                        <span class="conn-locate">Bangalore, Karnataka</span>
                    </div>
                    <button class="message">Message</button>
                </div>
                <div class="contacts">
                    <img src="CSS/Images/sample2.jpg" class="cont-img">
                    <div class="cont-details">
                        <a href="" class="con-name">Prabhakar R</a>
                        <span class="conn-work">Software Engineer at VTV Chennai</span>
                        <span class="conn-locate">Chennai, TamilNadu</span>
                    </div>
                    <button class="message">Message</button>
                </div>
                <div class="contacts">
                    <img src="CSS/Images/sample4.jpg" class="cont-img">
                    <div class="cont-details">
                        <a href="" class="con-name">Sai Prakash</a>
                        <span class="conn-work">Mechanical Engineer in DeShaw</span>
                        <span class="conn-locate">Mumbai, Maharastra</span>
                    </div>
                    <button class="message">Message</button>
                </div>
            </div>
            <div class="section post-section hide" id="posts">
                <div class="total-conn">&bull;&nbsp;12 Posts</div>
                <div class="card">
                    <div class="follow-conn"> 
                        <img src="CSS/Images/MyLogo.jpg" class="follow-icon users">
                        <div class="conn-name"> 
                            <span> <b>Vignesh <small> &bull; 1st</small></b> </span> 
                            <span>Web Designer</span> 
                            <span> 
                                <span>2d • </span>
                                <span class="icon globe-icon"></span>
                            </span> 
                        </div> 
                        <span class="icon more-icon top-corner"></span>
                    </div>
                    <p class="content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam sequi asperiores ?? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum dolorem reiciendis rerum iste expedita? Molestiae. 
                    </p>
                    <div class="vote-section"> 
                        <span class="icon love-icon"></span> 
                        <span class="votes">10</span> 
                        <span> 
                            <span class="dot">•</span>&nbsp; 2 Comments
                        </span> 
                    </div>
                    <div class="share-section">
                        <div class="icon-wrap"> <span class="icon like-i"></span> <span>Like</span> </div>
                        <div class="icon-wrap"> <span class="icon comment-icon"></span> <span>Comment</span> </div>
                        <div class="icon-wrap"> <span class="icon share-icon"></span> <span>Share</span> </div>
                    </div>
                </div>
                <div class="card">
                    <div class="follow-conn"> 
                        <img src="CSS/Images/MyLogo.jpg" class="follow-icon users">
                        <div class="conn-name"> 
                            <span> <b>Vignesh <small> &bull; 1st</small></b> </span> 
                            <span>Web Designer</span> 
                            <span> 
                                <span>4d • </span>
                                <span class="icon globe-icon"></span>
                            </span> 
                        </div> 
                        <span class="icon more-icon top-corner"></span>
                    </div>
                    <p class="content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam sequi asperiores ?? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum dolorem reiciendis rerum iste expedita? Molestiae. 
                    </p>
                    <img src="CSS/Images/sample1.jpg" class="card-image">
                    <div class="vote-section"> 
                        <span class="icon love-icon"></span> 
                        <span class="votes">25</span> 
                        <span> 
                            <span class="dot">•</span>&nbsp; 11 Comments
                        </span> 
                    </div>
                    <div class="share-section">
                        <div class="icon-wrap"> <span class="icon like-i"></span> <span>Like</span> </div>
                        <div class="icon-wrap"> <span class="icon comment-icon"></span> <span>Comment</span> </div>
                        <div class="icon-wrap"> <span class="icon share-icon"></span> <span>Share</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SideBar -->
    <div class="mobile-header"> <span class="icon me-icon"></span>
        <div class="input-wrap"> <span class="icon search-icon"></span> <input type="text" placeholder="Search" class="search-bar"> <span class="icon qrcode-icon"></span> </div> <span class="icon chat-icon"></span>
    </div>
    <div class="mobile-nav-bar">
        <ul class="nav-icons"> <span class="icon home-icon active-icon" title="Home"></span> <span class="icon user-icon" title="My Network"></span> <span class="icon add-icon" title="Add Post"></span> <span class="icon suit-icon" title="Jobs"></span> <span class="icon notify-icon" title="Notifications"></span> </ul>
    </div>
    
    <script src="JS/main.js"></script>
</body>
</html>
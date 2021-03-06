<?php
session_start();
include '../connection.php';
if(!isset($_SESSION['id'])){
exit(0);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed | YaarMe</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="./style.css">

    <!--icons-->
    <link rel="apple-touch-icon" sizes="57x57" href="../icons/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../icons/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../icons/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../icons/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../icons/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../icons/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../icons/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../icons/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../icons/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../icons/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../icons/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../icons/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../icons/icons/favicon-16x16.png">
    <link rel="manifest" href="../icons/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#0073b1">
    <meta name="msapplication-TileImage" content="../icons/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#0073b1">
</head>


<body id="body" oncontextmenu="">
    <div class="loader">
        <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="main-navbar-wrap">
        <div class="main-navbar">
            <span class="icon company-logo"></span>
            <form class="input-wrap" autocomplete="off">
                <span class="icon search-icon autocomplete"></span>
                <input type="search" placeholder="Search" class="search-bar" name="s" id="search_des">
                <span class="icon qrcode-icon"></span>
            </form>
            <ul class="nav-icons">
                <a href="#" class="icon home-icon " title="Home">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30px" height="30px">
                        <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 15 L 14 15 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"></path>
                    </svg>
                </a>
                <a href="join" class="icon" title="My Network">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-friends" class="svg-inline--fa fa-user-friends fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="31px" height="31px">
                        <path d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z"></path>
                    </svg>
                </a>
                <a href="post" class="icon " title="Add Post">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="28px" height="28px">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                </a>
                <a href="chatall" class="icon" title="Message">
                    <svg aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-7x" width="28px" height="26px">
                        <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                    </svg>

                </a>
                <a href="noti" class="icon" title="Notifications">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="28px" height="26px">
                        <path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
                    </svg>
                </a>
                <span href="#" class="icon profile-icon work-cont">

                    <!--<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"  width="28px" height="26px" ><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>-->

                    <img src="../Images/profile-pic4.jpg">
                    <div class="desk-menu">
                        <div class="sidebar desktop-menu">
                            <div class="profile-img-sidebar">
                                <img class="avatar" src="../Images/profile-pic4.jpg" alt="">
                                <span class="moon"></span>
                                <p>
                                    Omkar Dabir <br>
                                </p>
                                <img class="down expand-add-acc" src="SVG/chevron-down-solid.svg" alt="">
                                <!-- <i class="fas fa-chevron-down arrow expand-add-acc"></i> -->
                            </div>
                            <div class="all-uls">
                                <!--<ul class="add-account">-->
                                <!--	<li >-->
                                <!--		<a href="#">-->
                                <!--			<img src="SVG/plus-solid.svg" alt="" /> <span>Add Account</span>-->
                                <!--		</a>-->
                                <!--	</li>-->

                                <!--</ul>-->
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="SVG/user-edit-solid.svg" alt="">
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="SVG/list-alt-solid.svg" alt="">
                                            <span>Manage List</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="SVG/clock-solid.svg" alt="">
                                            <span>My activity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="SVG/save.svg" alt=""> <span>Saved posts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="SVG/cog-solid.svg" alt="">
                                            <span>Settings</span>

                                        </a>
                                    </li>



                                    <li>
                                        <a href="#">
                                            <img src="SVG/user-plus-solid.svg" alt="">
                                            <span>Share Your Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="SVG/power-off-solid.svg" alt="">
                                            <span>Logout</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </span>
            </ul>
        </div>
    </div>
    <div class="container-wrap">
        <div class="container">
            <div class="left-bar"></div>
            <div class="main-content">
                <div class="homepage-main-content">


                    <div id="all_list">
                        <?php
                    
//                    $query = "select * from yaarme_follow.category where owner_id = {$_SESSION['id']} order by `category`.`id` ASC";
//               $query = mysqli_query($connection,$query);
//  while($row = mysqli_fetch_assoc($query)){
//      if($row['description']){
//          $description = '<div class="mid_con">'.$row['description'].'</div>';
//      }else{
//          $description = '';
//      }
//
//        echo ' <div class="posts g1" id="pt_'.$row['id'].'">
//                            <div class="k1"><img src="../emogi/128/'.$row['emoji'].'" class="avatar"></div>
//                            <div class="k1 mid">
//                                <div class="mid_head">'.$row['group_name'].'</div>
//                                '.$description.'
//                            </div>
//                            <div href="#" class="k1 hovrr1" id="'.$row['id'].'" name="'.$row['group_name'].'"  des="'.$row['description'].'"   url="'.$row['emoji'].'">
//                                <div class="svg_a"> <img src="image/trash.svg"></div>
//                            </div>
//                            <div href="#" class="k1 hovrr2" id="'.$row['id'].'" name="'.$row['group_name'].'"  des="'.$row['description'].'"   url="'.$row['emoji'].'">
//                                <div class="svg_a"> <img src="image/edit.svg"></div>
//                            </div>
//                        </div>';
//  }
                    ?>
                        
                        <div class="posts g1 g1add" id="pt_2">
                            <div class="k1 k1_add"><img src="../emogi/128/flags/flag-italy.png" class="avatar"></div>
                            <div class="k1 mid">
                                <div class="mid_head">My Family</div>
                            </div>
                            <div href="#" class="k1 hovrr1">
                                <div class=" svg_ad hovrr1_1"><button id="Add_mem">Add Member</button></div>
                                 <div class=" hovrr1_2"> <img class="svg_plus" src="image/add.svg"></div>
                            </div>
                            <div href="#" class="k1 hovrr2">
                                <div class="svg_a"> <img class="svg_a" src="image/sort.svg"></div>
                            </div>
                        </div>
                        
                        <div class="result">
                        <div class="posts g1" id="pt_2">
                            <div class="k1"><img src="../emogi/128/flags/flag-italy.png" class="avatar"></div>
                            <div class="k1 mid">
                                <div class="mid_head">my</div>
                                <div class="mid_con">flaf</div>
                            </div>
                            <div href="#" class="k1 hovrr1" id="2" name="my" des="flaf" url="flags/flag-italy.png">
                                <div class="svg_a"> <img src="image/trash.svg"></div>
                            </div>
                           
                        </div><div class="posts g1" id="pt_2">
                            <div class="k1"><img src="../emogi/128/flags/flag-italy.png" class="avatar"></div>
                            <div class="k1 mid">
                                <div class="mid_head">my</div>
                                <div class="mid_con">flaf</div>
                            </div>
                            <div href="#" class="k1 hovrr1" id="2" name="my" des="flaf" url="flags/flag-italy.png">
                                <div class="svg_a"> <img src="image/trash.svg"></div>
                            </div>
                           
                        </div>
                        
                        </div>
                        
                        
                    </div>



                    <div class="posts g1 g1_create">
                        See all lists
                    </div>




                </div>
            </div>
            <div class="right-bar"></div>
        </div>
    </div>
    <div class="mobile-header">
        <a href="../" class="icon me-icon">
            <svg aria-hidden="true" data-prefix="far" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-left fa-w-14 fa-7x">
                <path fill="black" d="M229.9 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L94.569 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H94.569l155.13-155.13c4.686-4.686 4.686-12.284 0-16.971L229.9 38.101c-4.686-4.686-12.284-4.686-16.971 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971L212.929 473.9c4.686 4.686 12.284 4.686 16.971-.001z" class=""></path>
            </svg>
        </a>
        <span class="">
            <label id="button_post" for="button_post_desk">Manage List</label>
        </span>
        <form class="input-wrap" autocomplete="off">
        </form>
    </div>
    <script src="app.js"></script>
</body>

</html>
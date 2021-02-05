<?php
session_start();
include '../connection.php';
if(!isset($_SESSION['id'])){
exit(0);
}


//submit edit
$post = mysqli_real_escape_string($connection, $_GET['post']);
if(isset($_POST["submit"])) {
    
$text = mysqli_real_escape_string($connection, $_POST['text']);
$location = mysqli_real_escape_string($connection, $_POST['location']);
    
 $query_delete = "DELETE FROM yaarme_post.share_with_post WHERE post_detail = {$post}";
                 if(mysqli_query($connection,$query_delete)){

                          }
    
    
    $only = 'NULL';
       if(isset($_POST['all_list'])){
             if($_POST['all_list']==1){
                   $only = $post;
                
                 
                          $name = $_POST['list'];
                          $insert ='';
                          foreach ($name as $list){
                          echo $list."<br />";
                          $insert .= '('.$post.','.$list.'),';
                          }
                          $insert = substr( $insert,0,-1);

                          $query_2 = "INSERT INTO yaarme_post.share_with_post (`post_detail`, `category_id`) VALUES {$insert}";
                          if(mysqli_query($connection,$query_2)){

                          }
             
               }
             
             
         }
    
    
    
    $query = "UPDATE yaarme_post.posts SET `content` = '{$text}',location = '{$location}',shared_with = {$only} WHERE id = {$post} and owner_id = {$_SESSION['id']}";
if(mysqli_query($connection,$query)){
     header('Location: ../');
    echo "updated";
}
    
    echo "update na";
    exit(0);
   
     }



//fetch data
$query = "select * from yaarme_post.posts where id = {$post} and owner_id = {$_SESSION['id']}";
$result = mysqli_query($connection,$query);
if (!mysqli_num_rows($result)){
    header('Location: ../');
exit(0);
}

//declear variable
$data = array('','','','','','','','','','','','','','','','','','','','','','');

while($row = mysqli_fetch_assoc($result)){
    $data[0] = $row['content'];
    if($row['p1']){
       $data[1] = "src='./upload/720/".$row['p1']."'";
    }
    if($row['p1']){
       $data[1] = "src='upload/720/".$row['p1']."'";
    }
    if($row['p2']){
       $data[2] = "src='upload/720/".$row['p2']."'";
    }
    if($row['p3']){
       $data[3] = "src='upload/720/".$row['p3']."'";
    }
    if($row['p4']){
       $data[4] = "src='upload/720/".$row['p4']."'";
    }
    if($row['p5']){
       $data[5] = "src='upload/720/".$row['p5']."'";
    }
    if($row['p6']){
       $data[6] = "src='upload/720/".$row['p6']."'";
    }
    if($row['p7']){
       $data[7] = "src='upload/720/".$row['p7']."'";
    }
    if($row['p8']){
       $data[8] = "src='upload/720/".$row['p8']."'";
    }
    if($row['p9']){
       $data[9] = "src='upload/720/".$row['p9']."'";
    }
    if($row['p10']){
       $data[10] = "src='upload/720/".$row['p10']."'";
    }
    if($row['location']){
       $data[11] = $row['location'];
    }
}
//echo $data[0].$data[1].$data[2].$data[3].$data[4].$data[5].$data[6].$data[7].$data[8].$data[9].$data[10].$data[11];
//exit(0);



    

?>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post</title>
    <link rel="stylesheet" href="../CSS/spin_loader.css">
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
    
    
<!--desktop header-->
 <!--desktop header-->
    <div class="main-navbar-wrap">
        <div class="main-navbar">
            <a href="../" class="icon company-logo"></a>
            <a href="../" class="input-wrap" autocomplete="off">
                <span class="icon search-icon autocomplete"></span>
                <input type="search" placeholder="Search" class="search-bar" name="s" id="search_des">
                <span class="icon qrcode-icon"></span>
            </a>
            <ul class="nav-icons">
                <a href="../" class="icon home-icon " title="Home">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30px" height="30px">
                        <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 15 L 14 15 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"></path>
                    </svg>
                </a>
                <a href="../request/" class="icon" title="My Network">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-friends" class="svg-inline--fa fa-user-friends fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="31px" height="31px">
                        <path d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z"></path>
                    </svg>
                </a>
                <a href="../create_post/" class="icon " title="Add Post">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="28px" height="28px">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                </a>
                <a href="../chatall" class="icon" title="Message">
                    <svg aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-7x" width="28px" height="26px">
                        <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                    </svg>

                </a>
                <a href="../noti" class="icon" title="Notifications">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="28px" height="26px">
                        <path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
                    </svg>
                </a>
                <span href="#" class="icon profile-icon work-cont">
                    <img src="<?php if($_SESSION['img']){ echo '../profile/i/240/'.$_SESSION['img'];}else{ echo "../profile/i/none.svg"; } ?>">
                    <div class="desk-menu">
                        <div class="sidebar desktop-menu">
                            <div class="profile-img-sidebar">
                                <img class="avatar" src="<?php if($_SESSION['img']){ echo '../profile/i/240/'.$_SESSION['img'];}else{ echo "../profile/i/none.svg"; } ?>" alt="">
                                <span class="moon"></span>
                                <p>
                                     <?php echo $_SESSION['name'];?>  <br>
                                </p>
                                <img class="down expand-add-acc" src="../SVG/chevron-down-solid.svg" alt="">
                            </div>
                            <div class="all-uls">
                                <ul>
                                    <li>
                                        <a href="../profile/">
                                            <img src="../SVG/user-edit-solid.svg" alt="" />
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../manage_category/">
                                            <img src="../SVG/list-alt-solid.svg" alt="" />
                                            <span>Manage List</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../page/activity">
                                            <img src="../SVG/clock-solid.svg" alt="" />
                                            <span>My activity</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../page/saved_posts">
                                            <img src="../SVG/save-black.svg" alt="" /> <span>Saved posts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../page/settings">
                                            <img src="../SVG/cog-solid.svg" alt="" />
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                         <a href="#" onclick="share(' <?php echo $_SESSION['name'];?>','Follow <?php echo $_SESSION['name'];?> on YaarMe','https://yaarme.com/account?user=<?php echo $_SESSION['id'];?>')">
                                            <img src="../SVG/share-black.svg" alt="" />
                                            <span>Share Your Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../page/logout">
                                            <img src="../SVG/power-off-solid.svg" alt="" />
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

                    <div class="posts">
                        <div class="card">
                            <form  class="card-main" id="form" method="post" enctype="multipart/form-data">
                                <div class="follow-conn">
                                    <img src="<?php if($_SESSION['img']){ echo '../profile/i/240/'.$_SESSION['img'];}else{ echo "../profile/i/none.svg"; } ?>" class="follow-icon">
                                    <a href="profile/" class="conn-name">
                                        <span><b><?php echo $_SESSION['name'];?>    </b></span>
                                        <span>
                                        
                                        <?php 
                                                $query_show = "SELECT * FROM yaarme.users where id = {$_SESSION['id']}" ;
                                                $result_show = mysqli_query($connection,$query_show);
                                                while($row = mysqli_fetch_assoc($result_show)){
echo $row['status_mini_bio'];
                                                }
?>
                                        
                                        
                                        </span> <span>
                                         
                                        </span>
                                    </a>
                                   
                                </div>
                                <div class="post_raw_body" >

                                    <textarea class="textarea" onkeydown="autosize()" name="text"  placeholder="Whats going on in your mind..."><?php echo $data[0];?></textarea>
                                   <div class="img_div">
                                     
                                       
                                        <input accept="image/*" type="file" id="f1" name="a" onchange="loadFile(event,1)"/>
                                        <input accept="image/*" type="file" id="f2" name="b" onchange="loadFile(event,2)"/>
                                        <input accept="image/*" type="file" id="f3" name="c" onchange="loadFile(event,3)"/>
                                        <input accept="image/*" type="file" id="f4" name="d" onchange="loadFile(event,4)"/>
                                        <input accept="image/*" type="file" id="f5" name="e" onchange="loadFile(event,5)"/>
                                        <input accept="image/*" type="file" id="f6" name="f" onchange="loadFile(event,6)"/>
                                        <input accept="image/*" type="file" id="f7" name="g" onchange="loadFile(event,7)"/>
                                        <input accept="image/*" type="file" id="f8" name="h" onchange="loadFile(event,8)"/>
                                        <input accept="image/*" type="file" id="f9" name="i" onchange="loadFile(event,9)"/>
                                        <input accept="image/*" type="file" id="f10" name="j" onchange="loadFile(event,10)"/>
                                       
                                       <label class="ac1 "><label for=f1><img <?php echo $data[1];?> class="slide" id="o1"></label><label class="sp_r" data="1"></label></label>
                                       <label  class="ac2 " ><label for=f2><img <?php echo $data[2];?> class="slide" id="o2"></label><label class="sp_r" data="2"></label></label>
                                       <label  class="ac3 " ><label for=f3><img <?php echo $data[3];?> class="slide" id="o3"></label><label class="sp_r" data="3"></label></label>
                                       <label  class="ac4 " ><label for=f4><img <?php echo $data[4];?> class="slide" id="o4"></label><label class="sp_r" data="4"></label></label>
                                       <label  class="ac5 " ><label for=f5><img <?php echo $data[5];?> class="slide" id="o5"></label><label class="sp_r" data="5"></label> </label>
                                       <label  class="ac6 " ><label for=f6><img <?php echo $data[6];?> class="slide" id="o6"></label><label class="sp_r" data="6"></label></label>
                                       <label  class="ac7 " ><label for=f7><img <?php echo $data[7];?> class="slide" id="o7"></label><label class="sp_r" data="7"></label></label>
                                       <label  class="ac8 " ><label for=f8><img <?php echo $data[8];?> class="slide" id="o8"></label><label class="sp_r" data="8"></label></label>
                                       <label  class="ac9 " ><label for=f9><img <?php echo $data[9];?> class="slide" id="o9"></label><label class="sp_r" data="9"></label></label>
                                       <label  class="ac10 " ><label for=f10><img <?php echo $data[10];?> class="slide" id="o10"></label><label class="sp_r" data="10"></label></label>
                                      
                                    </div>
                                </div>


                                <label class="share-section hide" id="forclick" for="f1">
                                      <div class="icon-wrap" >
                                        <img src="image/image-solid.svg" class="icon  alert_more_img"> <span id="alert_more">Add Photo / Images</span>
                                    </div>
                                </label>
                              <div class="share-section location_open">
                                      <div class="icon-wrap" >
                                        <img src="image/map-marker-alt-solid.svg" class="icon " > <span  class="location" >Add Location</span>
                                    </div>
                                </div>
                             
                              <div class="share-section location_div">
                                      <div class="icon-wrap" >
                                        <input type="text" value="<?php echo $data[11];?>" name="location" id="location" placeholder="Type Location">
                                    </div>
                                </div>
                              <div class="share-section open_more_click">
                                      <div class="icon-wrap" >
                                        <img src="image/cog-solid.svg" class="icon comment-icon" > <span>More Options</span>
                                    </div>
                                </div>
                               <div id="open_more"     >
                                  <div class="setting_option">
                                      <div class="share-section" onclick="open_id('lists')">
                                          <div class="icon-wrap">
                                              <img src="../story/SVG/eye-regular.svg" class="icon comment-icon"> <span>Share with</span>
                                          </div>
                                      </div>
                                      <div id="lists" >
                                      <div class="share_with" id="bottom_border"><input class="options" type="radio" name="all_list" id="all_follow" value="0" checked>Share with all followers</div>
                                          
                                      <div class="share_with"><input class="options" type="radio" name="all_list" id="all_list" value="1">Share only with</div>
                                          
                                          <div>
                                              
                                              <?php
                                              
                                              $query = "select * from yaarme_follow.category where owner_id = {$_SESSION['id']}" ;
                                              $result = mysqli_query($connection,$query);
                                              while($row = mysqli_fetch_assoc($result)){
                                              $desciption = '';
                                              if($row['description']){
                                              $desciption = '<div class="description">'.$row['description'].'</div>';
                                              }
                                              echo '
                                              <div class="list_fetch">
                                                  <div class="center"><img src="../emogi/128/'.$row['emoji'].'" class="list_image"></div>
                                                  <div class="certer_mid">
                                                      <div class="name">'.$row['group_name'].'</div>
                                                      '.$desciption.'
                                                  </div>
                                                  <label class="center"><input class="checkbox" type="checkbox" name="list[]" value="'.$row['id'].'" oninput="correct_seletion()"></label>
                                              </div>
                                              ';
                                              }
                                              
                                              ?>
                                              
                                          </div>
                                      </div>
                                  </div>
                                  <div class="setting_option">
                                      <div class="share-section">
                                          <div class="icon-wrap">
                                              <img src="image/thumbs-up-regular.svg" class="icon comment-icon"> <span>Allow people to react on your post</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="setting_option">
                                      <div class="share-section">
                                          <div class="icon-wrap">
                                              <img src="image/comment-regular.svg" class="icon comment-icon"> <span>Allow people to comment on your post</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                                
                                <BUTTON  class="share-section"  id="button_post_desk" name="submit" value="submit">
                                     UPDATE
                                </BUTTON>
                                
                            </form>
                          </div>
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
        <form class="input-wrap" autocomplete="off">
        </form>
        <span class="">
            <label id="button_post" for="button_post_desk">UPDATE</label>
        </span>
    </div>



<script src="app.js"></script>



</body>

</html>
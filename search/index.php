<?php
if(isset($_GET['s'])){
session_start();
include '../connection.php';
    $search = mysqli_real_escape_string($connection, $_GET['s']);
$query_get_id = "SELECT *,follower as followers, users.id as num FROM `users` left join yaarme.location on yaarme.location.id = users.location where first_name like '{$search}%'   ORDER BY follower DESC limit 100  ";
//$query_get_id = "SELECT * FROM `users` where first_name like '{$search}%' limit 10";
//    echo $query_get_id;
$result_get_id = mysqli_query($connection,$query_get_id);
$total_rows = mysqli_num_rows($result_get_id);
// echo $total_rows;


$x=1;
while($row = mysqli_fetch_assoc($result_get_id)){
//check if i am already following
    $mute = "";
    $following = ' • Follow ';
     $category ='';
    
    $follow= " select * from yaarme_follow.follow  left join yaarme_follow.category on category.id = follow.category where user={$_SESSION['id']}  and opponent = {$row['num']}" ;
$result_f = mysqli_query($connection,$follow);
while($row_f = mysqli_fetch_assoc($result_f)){
     if($row_f['mute_post']){
                              $mute = " • Unmute "  ;
                            }
    if($row_f['approve']==9){
                              $following = ' • Requested ';
                            }else if($row_f['approve']==1){
                              $following = '';  
                            }
    if($row_f['group_name']){
                             $category = '• '.$row_f['group_name'];
                            }
}
echo '



 <div class="grid">
                    
                    <a href="./account?user='.$row['num'].'" class="flex_s"><img class="profile_img" src="./profile/i/none.svg"></a>
                    <div class="grid_mid">
                        <div class="name">'.$row['first_name']." ".$row['last_name'].'
                            <small class="u_c_'.$row['num'].'">'.$category.'</small>
                            <small class="fllw_'.$row['num'].'" onclick="unfollow_ys('.$row['num'].','.$row['account_type'].')">'.$following.'</small>
                            <small class="unmt_'.$row['num'].'" onclick="mute_ys('.$row['num'].')">'.$mute.'</small>
                        </div>
                        <div class="description">'.$row['status_mini_bio'].'</div>
                        <div class="location"><img class="loc-icon" src="./SVG/location.svg" alt="">'.$row['location'].'</div>
                        </div>
                    <div class="flex_s" onclick="open_post_options('.$row['num'].', 88,16,0)"><span class="icon more-icon" ></span></div>
                    </div>




' ;


}



//echo $_GET['s'];
exit(0);
}
?>


       
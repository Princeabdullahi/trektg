<?php
global $profile;
global $profile_post;
global $user;
global $follow_suggestions;
global $video_posts;
?>
<style>
  .text-dark {
    color: #000; /* Set the color code for dark text, typically black (#000) */
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <body>
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
          <div><img src="assets/images/profile/<?=$profile['profile_pic']?>"  alt="user profile" class="rounded-circle border" /></div>
            
          </div>
          <h2><?=$profile['first_name']?> <?=$profile['last_name']?>
    <div class="dropdown" style="display: inline-block;">
        <div class="dropdown">
            <span class="" style="font-size: xx-large" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i></span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php
                if ($user['id'] == $profile['id']) {
                    // Display "Message yourself" on your own profile.
                    ?>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#chatbox"
                            onclick="popchat(<?=$profile['id']?>)"><i class="bi bi-chat-fill"></i> Message yourself</a></li>
                            <li><a class="dropdown-item" href="?editprofile"><i class="bi bi-pencil-square"></i> Edit Profile</a></li>
                    <?php
                } else {
                    // Display "Message" on other users' profiles.
                    ?>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#chatbox"
                            onclick="popchat(<?=$profile['id']?>)"><i class="bi bi-chat-fill"></i> Message</a></li>
                    <?php
                }
                ?>
                <?php
                if($user['id'] != $profile['id']) {
                // Display the "Block" option only if it's not your own profile.
                ?>
                <li><a class="dropdown-item" href="assets/php/actions.php?block=<?=$profile['id']?>&username=<?=$profile['username']?>"><i
                            class="bi bi-x-circle-fill"></i> Block</a></li>
                <?php
                }
                ?>
                <li><a class="dropdown-item "><i class="bi bi-file-post-fill"></i> <?=count($profile_post)?> Posts</a></li>
            </ul>
        </div>
    </div>
</h2>

<script>
    // Replace 'isOwnProfile' with the logic to check if the user is viewing their own profile.
    var isOwnProfile = false; // Change this based on your logic.

    if (isOwnProfile) {
        // If it's the user's own profile, hide the dropdown.
        $('.dropdown').hide();
    }
</script>

          <p>@<?=$profile['username']?></p>
          <div class="content">
            

          
          <a <?=count($profile['followers']) < 1 ? 'disabled' : ''?> data-bs-toggle="modal" data-bs-target="#follower_list"><i class="bi bi-people-fill"></i> <?=count($profile['followers'])?> Followers</a>
          <a <?=count($profile['following']) < 1 ? 'disabled' : ''?> data-bs-toggle="modal" data-bs-target="#following_list"><i class="bi bi-person-fill"></i> <?=count($profile['following'])?> Following</a> 
          </ul><br>
          <h8>
            <?=$profile['bio']?>
</h8>
            <p>
            Account Created: <?= show_time($profile['created_at'])?>
</p>
<p>
Date of Birth: <?=$profile['date_of_birth']?>
</p>
<p>
    Location: <?= !empty($user['location']) ? $user['location'] : 'Not specified' ?>
</p>

            
          </div>
        </div>
        <div class="right__col">
        <?php
if($user['id']!=$profile['id'] && !checkBS($profile['id'])){
}?>
          <nav>
          <?php


if($user['id']!=$profile['id']){
?>
 <div class="d-flex gap-2 align-items-center my-1">
<?php
if(checkBlockStatus($user['id'],$profile['id'])){
    ?> 
    <button class="btn btn-sm btn-danger unblockbtn" data-user-id='<?=$profile['id']?>' >Unblock</button>
    
    <?php
}else if(checkBlockStatus($profile['id'],$user['id'])){ ?>
    <div class="alert alert-danger" role="alert">
    <i class="bi bi-x-octagon-fill"></i> @<?=$profile['username']?> blocked you !
</div>
   <?php }else if(checkFollowStatus($profile['id'])){
   ?>
<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='<?=$profile['id']?>' >Unfollow</button>
   
   <?php
}else{
    ?>
<button class="btn btn-sm btn-primary followbtn" data-user-id='<?=$profile['id']?>' >Follow</button>

    <?php
}
?>



</div>
<?php
}
?>
                   
                </div>
            </div>
                  <!-- Navigation Links -->
        <nav class="p-2">
            <h3 class="border-bottom">Posts</h3>
            <div class="d-flex">
                <a href="?page=photo" class="text-decoration-none text-dark mx-2">Photos</a>
                <a href="#videos" class="text-decoration-none text-dark mx-2">Videos</a>
                <a href="#about" class="text-decoration-none text-dark mx-2">About</a>
            </div>
        </nav>
        
    </div>
</div>

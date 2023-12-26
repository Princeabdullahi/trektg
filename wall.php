<?php
global $user;
global $posts;
global $video_posts;
global $follow_suggestions;
?>

<div class="container col-md-10 col-sm-12 col-lg-9 rounded-0 d-flex justify-content-between">
    <div class="col-md-8 col-sm-12" style="max-width:93vw">
        <?php
        $allPosts = getPost();

        // Now, $allPosts contains an array of all posts

        if (count($allPosts) < 1) {
            echo "<p style='width:100%' class='p-2 bg-white border rounded text-center my-3 col-12'>No posts available</p>";
        }

        foreach ($allPosts as $post) {
            $likes = getLikes($post['id']);
            $comments = getComments($post['id']);
    // The rest of your post display code here...

?>
    <div class="card mt-4">
        <div class="card-title d-flex justify-content-between  align-items-center">
            <div class="d-flex align-items-center p-2">
                <img src="assets/images/profile/<?=$post['profile_pic']?>" alt="" height="50" width="50"
                     class="rounded-circle border">&nbsp;&nbsp;<a href='?u=<?=$post['username']?>'
                                                                  class="text-decoration-none text-dark" ><?=$post['first_name']?> <?=$post['last_name']?><br><p
                            style="margin:0px;" class="text-muted">@<?=$post['username']?></p></a>
            </div>
            
            <div class="p-2">
            <div class="dropdown">
    <i class="bi bi-three-dots-vertical" id="option<?=$post['id']?>"
       data-bs-toggle="dropdown" aria-expanded="false"></i>
    <ul class="dropdown-menu" aria-labelledby="option<?=$post['id']?>">
    <?php
if ($post['uid'] == $user['id']) {
    // User's own post
    ?>
    <li><a class="dropdown-item edit-post-button" href="#" data-post-id="<?=$post['id']?>" data-post-content="<?=$post['post_text']?>" style="z-index: 20000;"><i class="bi bi-pencil"></i> Edit Post</a></li>
    <li><a class="dropdown-item" href="assets/php/actions.php?deletepost=<?=$post['id']?>" style="z-index: 20000;"><i class="bi bi-trash-fill"></i> Delete Post</a></li>
    <?php
} else {
    // Another user's post
    ?>
    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reportModal" style="z-index: 20000;"><i class="fa fa-bolt"></i> Report Post</a></li>
    <?php
}
?>

    </ul>
    
</div>

            </div>
        </div>
        <style>
            img {
  border-radius: 10px;
}
video {
  border-radius: 20px;
}
        </style>
        <img src="assets/images/posts/<?= $post['post_img'] ?>"data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>" loading=lazy class="" alt="">
                <?php if (!empty($post['post_video'])) { ?>
    <video controls width="100%" height="auto">
        <!-- MP4 format (commonly used for screen recording) -->
        <source src="assets/videos/posts/<?= $post['post_video'] ?>" type="video/mp4">
        
        <!-- WebM format (another commonly used format) -->
        <source src="assets/videos/posts/<?= $post['post_video'] ?>" type="video/webm">
        
        <!-- Ogg format (you can add more formats as needed) -->
        <source src="assets/videos/posts/<?= $post['post_video'] ?>" type="video/ogg">
        
        Your browser does not support the video tag.
    </video>
<?php } ?>

<?php
if ($post['post_text']) {
    $text = $post['post_text'];
    $textWithParagraphs = nl2br(htmlspecialchars($text)); // Preserve paragraphs and escape HTML entities
    if (strlen($text) > 100) {
        $shortText = substr($textWithParagraphs, 0, 100); // Get the first 100 characters
        $remainingText = substr($textWithParagraphs, 100); // Get the remaining text
        ?>
        <div class="card-body">
            <div class="user-post-text-bg" style="text-align: left;">
                <?php
                if ($post['post_text']) {
                    $text = $post['post_text'];
                    $textWithParagraphs = nl2br(htmlspecialchars($text)); // Preserve paragraphs and escape HTML entities
                    if (strlen($text) > 100) {
                        $shortText = substr($textWithParagraphs, 0, 100); // Get the first 100 characters
                        $remainingText = substr($textWithParagraphs, 100); // Get the remaining text
                        ?>
                        <span id="shortText<?=$post['id']?>"><?=$shortText?></span>
                        <span id="remainingText<?=$post['id']?>" style="display: none;"><?=$remainingText?></span>
                        <span id="readMoreLink<?=$post['id']?>" style="cursor: pointer; color: blue;"> Read More</span>
                        <span id="seeLessLink<?=$post['id']?>" style="display: none; cursor: pointer; color: blue;"> See Less</span>
                        <?php
                    } else {
                        ?>
                        <?=$textWithParagraphs?>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <script>
           var shortText = document.getElementById('shortText<?=$post['id']?>');
var remainingText = document.getElementById('remainingText<?=$post['id']?>');
var readMoreLink = document.getElementById('readMoreLink<?=$post['id']?>');
var seeLessLink = document.getElementById('seeLessLink<?=$post['id']?>');


readMoreLink.addEventListener('click', function () {
    shortText.style.display = 'none';
    remainingText.style.display = 'inline';
    readMoreLink.style.display = 'none';
    seeLessLink.style.display = 'inline';
});

seeLessLink.addEventListener('click', function () {
    shortText.style.display = 'inline';
    remainingText.style.display = 'none';
    readMoreLink.style.display = 'inline';
    seeLessLink.style.display = 'none';
});

        </script>
        <?php
    } else {
        ?>
        <div class="card-body">
            <div class="user-post-text-bg" style="text-align: left;">
                <?=$textWithParagraphs?>
            </div>
        </div>
        <?php
    }
}
?>



<h4 style="font-size: x-larger" class="p-2 border-bottom d-flex">
            <span>
                <?php
                if (checkLikeStatus($post['id'])) {
                    $like_btn_display = 'none';
                    $unlike_btn_display = '';
                } else {
                    $like_btn_display = '';
                    $unlike_btn_display = 'none';
                }
                ?>
                <i class="bi bi-heart-fill unlike_btn text-danger" style="display: <?=$unlike_btn_display?>" data-post-id="<?=$post['id']?>"></i>
<i class="bi bi-heart like_btn" style="display: <?=$like_btn_display?>" data-post-id="<?=$post['id']?>"></i>
</span>

&nbsp;&nbsp;
<i class="bi bi-chat-left d-flex align-items-center">
    <span class="p-1 mx-2 text-small" style="font-size: small" data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>"><?=count($comments)?> comments</span>
</i>

<?php
if (count($comments) < 1) {
    ?>
    <?php
}

// Display unique user profile pictures for comments
$commentedUserIds = array();
foreach ($comments as $comment) {
    $userId = $comment['user_id'];
    if (!in_array($userId, $commentedUserIds)) {
        $commentedUserIds[] = $userId;
        $cuser = getUser($userId);
        ?>
        <a href="?u=<?=$cuser['username']?>"> <!-- Make the profile picture clickable -->
        <img src="assets/images/profile/<?=$cuser['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
        </a>
        <?php
    }
}

// Check if there are more than 5 unique commenters
if (count($commentedUserIds) > 5) {
    $remainingCount = count($commentedUserIds) - 5;
    ?>
    <span class="rounded-circle bg-primary text-white">+<?=$remainingCount?></span>
    <?php
}
?>



<script>
    
</script>
        </h4>
        <div>
            <span class="p-1 mx-2" data-bs-toggle="modal" data-bs-target="#likes<?=$post['id']?>">
                <span id="likecount<?=$post['id']?>"><?=count($likes)?></span> likes
            </span>
            <span style="font-size:small" class="text-muted">Posted</span> <?=show_time($post['created_at'])?> 
        </div>
               
        <!-- Comment input -->
        <div class="input-group p-2 <?=$post['post_text']?'border-top':''?>">
        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="45" width="45" class="rounded-circle border"><input type="text" class="form-control rounded-0 border-0 comment-input"
                   placeholder="Comment as <?=$user['username']?>"
                   aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-primary rounded-0 border-0 add-comment" data-page='wall' data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button"
                    id="button-addon2">Comment</button>
        </div>
    </div>
    <div class="modal fade" id="postview<?= $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-body d-md-flex p-0">
           <div class="col-md-8 col-sm-12">
    <?php if (!empty($post['post_img'])) : ?>
        <img src="assets/images/posts/<?= $post['post_img'] ?>" style="max-height: 90vh" class="w-100 overflow:hidden">
    <?php else : ?>
        <img src="path_to_blank_image.jpg" alt="" style="max-height: 90vh" class="w-100 overflow:hidden">
    <?php endif; ?>
</div>

               <div class="col-md-4 col-sm-12 d-flex flex-column">
                   <div class="d-flex align-items-center p-2 border-bottom">
                       <div class="d-flex flex-column align-items-end flex-fill">
                           <div class=""></div>
                           <div class="dropdown">
                               <span class="<?= count($likes) < 1 ? 'disabled' : '' ?>" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                   <?= count($likes) ?> likes
                               </span>
                               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                   <?php
                                   foreach ($likes as $like) {
                                       $lu = getUser($like['user_id']);
                                       ?>
                                       <li><a class="dropdown-item" href="?u=<?= $lu['username'] ?>"><?= $lu['first_name'] . ' ' . $lu['last_name'] ?> (@<?= $lu['username'] ?>)</a></li>
                                       <?php
                                   }
                                   ?>
                               </ul>
                           </div>
                           <div style="font-size:small" class="text-muted">Posted <?= show_time($post['created_at']) ?></div>
                       </div>
                   </div>
                   <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?= $post['id'] ?>" style="height: 100px;">
                       <?php
                       if (count($comments) < 1) {
                           ?>
                           <p class="p-3 text-center my-2 nce">Be the first to comment!</p>
                           <?php
                       }
                       foreach ($comments as $comment) {
                           $cuser = getUser($comment['user_id']);
                           ?>
                           <div class="d-flex align-items-center p-2">
                               <div><img src="assets/images/profile/<?= $cuser['profile_pic'] ?>" alt="" height="40" width="40" class="rounded-circle border"></div>
                               <div>&nbsp;&nbsp;&nbsp;</div>
                               <div class="d-flex flex-column justify-content-start align-items-start">
                                   <h6 style="margin: 0px;"><a href="?u=<?= $cuser['username'] ?>" class="text-decoration-none text-dark text-small text-muted">@<?= $cuser['username'] ?></a> - <?= $comment['comment'] ?></h6>
                                   <p style="margin:0px;" class="text-muted">(<?= show_time($comment['created_at']) ?>)</p>
                               </div>
                           </div>
                           <?php
                       }
                       ?>
                   </div>
                   <div class="input-group p-2 border-top">
                   <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="50" width="50" class="rounded-circle border">
<input type="text" class="form-control rounded-0 border-0 comment-input" placeholder="Comment as (<?=$user['username']?>)" aria-label="Recipient's username" aria-describedby="button-addon2">
                       <button class="btn btn-outline-primary rounded-0 border-0 add-comment" data-cs="comment-section<?= $post['id'] ?>" data-post-id="<?= $post['id'] ?>" type="button" id="button-addon2">Comment</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="modal fade" id="likes<?= $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">Likes</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <?php
               if (count($likes) < 1) {
                   ?>
                   <p>Currently No Likes</p>
                   <?php
               }
               foreach ($likes as $f) {
                   $fuser = getUser($f['user_id']);
                   $fbtn = '';
                   if (checkBS($f['user_id'])) {
                       continue;
                   } else if (checkFollowStatus($f['user_id'])) {
                       $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id=' . $fuser['id'] . ' >Unfollow</button>';
                   } else if ($user['id'] == $f['user_id']) {
                       $fbtn = '';
                   } else {
                       $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id=' . $fuser['id'] . ' >Follow</button>';
                   }
                   ?>
                   <div class="d-flex justify-content-between">
                       <div class="d-flex align-items-center p-2">
                           <div><img src="assets/images/profile/<?= $fuser['profile_pic'] ?>" alt="" height="40" width="40" class="rounded-circle border"></div>
                           <div>&nbsp;&nbsp;</div>
                           <div class="d-flex flex-column justify-content-center">
                               <a href='?u=<?= $fuser['username'] ?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?= $fuser['first_name'] ?> <?= $fuser['last_name'] ?></h6></a>
                               <p style="margin:0px;font-size:small" class="text-muted">@<?= $fuser['username'] ?></p>
                           </div>
                       </div>
                       <div class="d-flex align-items-center">
                           <?= $fbtn ?>
                       </div>
                   </div>
                   <?php
               }
               ?>
           </div>
       </div>
   </div>
</div>
<?php
}
?>
</div>
        <?php
        require_once 'follow.php';
        ?>
   <!-- Reporting Modal -->
   <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reportModalLabel">Report Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="assets/php/actions.php?report_post"> <!-- Adjust the action attribute to your PHP processing script -->
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <div class="mb-3">
                        <label for="reportReason" class="form-label">Reason for reporting:</label>
                        <textarea class="form-control" id="reportReason" name="report_reason" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="report_post">Submit Report</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add this code within your HTML file, where you want to display the edit form -->
<div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="editPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostModalLabel">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="assets/php/actions.php?POST">
                    <!-- Include post ID for identifying the post to edit -->
                    <input type="hidden" name="post_id" id="editPostId">
                    <div class="mb-3">
                        <label for="editPostContent" class="form-label">Edit Post Content:</label>
                        <textarea class="form-control" id="editPostContent" name="post_text" rows="4"></textarea>
                    </div>
                    <button onclick="myFunction()" type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
  alert("Sucessful");
}
</script>
<script>
    // JavaScript code to populate the edit form with post details
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-post-button');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const postId = this.getAttribute('data-post-id');
                const postContent = this.getAttribute('data-post-content');

                // Populate the edit form with post details
                document.querySelector('#editPostId').value = postId;
                document.querySelector('#editPostContent').value = postContent;

                // Show the edit post modal
                const editPostModal = new bootstrap.Modal(document.getElementById('editPostModal'));
                editPostModal.show();
            });
        });
    });
</script>

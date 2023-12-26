<?php if(isset($_SESSION['Auth'])){ ?>
  <style>
    /* Custom Styles for Chatbox */
.modal.fade:not(.show) .modal-dialog {
  transform: translate(0, -50%);
}

.modal-content {
  border: none;
  border-radius: 15px;
}

.modal-header {
  background-color: brown;
  color: #fff;
  border-radius: 15px 15px 0 0;
  padding: 15px;
}

.modal-title {
  display: flex;
  align-items: center;
}

.modal-title img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

.modal-title span {
  font-size: 18px;
  font-weight: bold;
}

.modal-body {
  padding: 15px;
}

.modal-footer {
  background-color: #f0f0f0;
  border-radius: 0 0 15px 15px;
  padding: 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.text-danger {
  color: #ff0000;
}

.btn-outline-primary {
  color: #007BFF;
  border-color: #007BFF;
  border-radius: 5px;
}

.btn-outline-primary:hover {
  background-color: #007BFF;
  color: #fff;
}

/* Animation for Modal */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate(0, 20px);
  }
  to {
    opacity: 1;
    transform: translate(0, 0);
  }
}

.modal.fade.show .modal-dialog {
  animation: fadeInUp 0.3s ease-in-out;
}

/* Hover Effect for Close Button */
.btn-close:hover {
  color: #fff;
  background-color: #007BFF;
}

.rounded-circle-a {
    border-radius: 50%!important;
    display: block;
    margin: auto;
}

.rounded-circle-b {
    border-radius: 50%!important;
    display: block;
    margin: auto;
    text-align-last: center;
}

/* Message Input Styles */
.form-control.rounded-0 {
  border-radius: 0;
}

/* Custom Styles for Chat Messages */
.custom-chat-message {
  background-color: #f0f0f0;
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 10px;
  max-width: 70%;
  word-wrap: break-word;
}

.custom-chat-message.sent {
  background-color: #007BFF;
  color: #fff;
  align-self: flex-end;
}

.custom-chat-message.sent .custom-chat-message-timestamp {
  text-align: right;
}

/* Custom Styles for Chat Message Timestamp */
.custom-chat-message-timestamp {
  font-size: 12px;
  color: #777;
  text-align: left;
}

/* Custom Styles for Follow Indicator */
.custom-follow-indicator {
  background-color: #4CAF50;
  color: #fff;
  padding: 5px 10px;
  border-radius: 20px;
  font-size: 14px;
  margin-left: 10px;
}

/* Custom Styles for Error Icon */
.bi-x-octagon-fill {
  color: #ff0000;
  font-size: 24px;
  vertical-align: middle;
  margin-right: 5px;
}

/* CSS for scrolling user details */
#user-details {
    max-height: 150px; /* Set the maximum height for scrolling */
    overflow-y: auto; /* Enable vertical scrolling */
    transition: max-height 0.3s ease; /* Smooth transition effect */
}


  </style>
<div class="modal fade" id="addpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" style="display:none" id="post_img" class="w-100 rounded border">
                <form method="post" action="assets/php/actions.php?addpost" enctype="multipart/form-data">
                    <div class="my-3">
                        <input class="form-control" name="post_img" type="file" id="select_post_img">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea name="post_text" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
    
                <button type="submit" class="btn btn-primary">Post</button>
          
                </form>
            </div>
   
        </div>
  </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="notification_sidebar" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Notifications</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php
  $notifications = getNotifications();
foreach($notifications as $not){
    $time = $not['created_at'];
    $fuser = getUser($not['from_user_id']);
    $post='';
    if($not['post_id']){
        $post='data-bs-toggle="modal" data-bs-target="#postview'.$not['post_id'].'"';
    }
    $fbtn='';
    ?>
<div class="d-flex justify-content-between border-bottom">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center" <?=$post?>>
                            <a href='?u=<?=$fuser['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="<?=$not['read_status']?'text-muted':''?>">@<?=$fuser['username']?> <?=$not['message']?></p>
                            <time style="font-size:small" class="timeago <?=$not['read_status']?'text-muted':''?> text-small" datetime="<?=$time?>"></time>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <?php
if($not['read_status']==0){
    ?>
                      <div class="p-1 bg-primary rounded-circle"></div>

    <?php

}else if($not['read_status']==2){
?>
<span class="badge bg-danger">Post Deleted</span>
<?php
}
                        ?>

                    </div>
                </div>
    <?php
}
                ?>
    
  </div>
</div>




<div class="offcanvas offcanvas-start" tabindex="-1" id="message_sidebar" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header bg-primary">
    <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Messages</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" id="chatlist">
    <!-- Your chat list content here -->
  </div>
</div>


<div class="modal fade" id="chatbox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <a href="" id="cplink" class="text-decoration-none text-dark"><h5 class="modal-title" id="exampleModalLabel"><img src="assets/images/profile/default_profile.jpg" id="chatter_pic" height="40" width="40" class="m-1 rounded-circle border"><span id="chatter_name"></span></h5></a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                       
      <div class="modal-body d-flex flex-column-reverse gap-2" id="user_chat">
      loading...
      </div>
      <div class="modal-footer">
         
          <p class="p-2 text-danger mx-auto" id="blerror" style="display:none"> 
          <i class="bi bi-x-octagon-fill"></i> you are not allowed to send message to this user anymore
</div>
<div id="imagePreview" class="mt-2">
    <!-- Image preview will be displayed here -->
</div>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="from_user_id" value="1"> <!-- Change this to the sender's user ID -->
    <input type="hidden" name="to_user_id" value="2"> <!-- Change this to the recipient's user ID -->
    <div class="input-group p-2" id="msgsender">
        <input type="text" class="form-control rounded-0 border-0" id="msginput" name="msg"  placeholder="Say Hi!" aria-label="Recipient's username" aria-describedby="button-addon2">
        <label for="fileInput" class="input-group-text bg-white rounded-0 border-0">
            <i class="bi bi-image"></i> <!-- Add your image icon here -->
        </label>
        <input type="file" id="fileInput" name="image" style="display: none;"> <!-- Hidden file input for image upload -->
        <button class="btn btn-outline-primary rounded-0 border-0" id="sendmsg" data-user-id="0" type="submit" name="sendmessage">Send</button>
    </div>
</form>
<script>
  // Add an event listener to the file input
document.getElementById("fileInput").addEventListener("change", function(event) {
    const fileInput = event.target;
    const imagePreview = document.getElementById("imagePreview");

    // Check if a file was selected
    if (fileInput.files.length > 0) {
        // Create a FileReader to read the selected file
        const reader = new FileReader();

        // Define an event handler for when the FileReader has loaded the image
        reader.onload = function(e) {
            // Create an image element to display the preview
            const img = document.createElement("img");
            img.src = e.target.result; // Set the image source to the loaded data URL
            img.classList.add("img-thumbnail"); // Add Bootstrap classes for styling
            img.style.maxWidth = "30%"; // Ensure the image fits within its container

            // Remove any previously displayed preview
            while (imagePreview.firstChild) {
                imagePreview.removeChild(imagePreview.firstChild);
            }

            // Append the image to the preview container
            imagePreview.appendChild(img);
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(fileInput.files[0]);
    } else {
        // No file selected, clear the preview
        while (imagePreview.firstChild) {
            imagePreview.removeChild(imagePreview.firstChild);
        }
    }
});

</script>


<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.timeago.js"></script>

    <script src="assets/js/custom.js?v=<?=time()?>"></script>
    

</body>

</html>

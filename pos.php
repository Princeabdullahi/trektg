<?php
global $user;
global $posts;
?>
<div class="container col-md-10 col-sm-12 col-lg-9 rounded-0 d-flex justify-content-between">
    <div class="col-md-8 col-sm-12" style="max-width: 93vw">
        <div class="modal-content">
            <div class="modal-header" role="button" tabindex="0">
                <h5 class="modal-title">Add New Post</h5>
            </div>
            <div class="modal-body">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="50" width="50" class="rounded-circle border">
                    <buttons class="custom-button btn btn-outline-secondary ml-3" type="button" data-bs-toggle="modal" data-bs-target="#addpost">Hey (<?=$user['username']?>) click to add some post</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Post Modal -->
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
                    <div class="mb-3">
                        <textarea name="post_text" class="form-control" id="exampleFormControlTextarea1" placeholder="<?=$user['username']?> Write something amazing..." rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="select_post_img" class="form-label">
                            <i class="bi bi-image"></i> Upload Picture
                        </label>
                        <div class="my-3">
                            <input class="form-control" name="post_img" type="file" id="select_post_img" accept="image/*">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="post_video" class="form-label">
                            <i class="bi bi-camera-video"></i> Upload Video
                        </label>
                        <div class="my-3">
                            <input class="form-control" name="post_video" type="file" id="select_post_video" accept="video/*">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
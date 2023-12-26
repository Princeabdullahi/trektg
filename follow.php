<style>
    /* Profile Info Card */
.profile-info-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Profile Pic */
.profile-pic img {
    border: 2px solid #007bff;
}

/* User Link */
.user-link {
    text-decoration: none;
    color: #333;
}

.user-link:hover {
    text-decoration: underline;
}

/* Follow Suggestions */
.follow-suggestions {
    padding: 0 20px;
}

.suggestion-item {
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.follow-btn {
    border-radius: 5px;
}

.no-suggestions {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    color: #777;
}

</style>
<?php
global $user;
global $follow_suggestions;
?>
    <!-- Container for Follow Suggestions (Keep your existing code here) -->
    <div class="col-lg-6 overflow-hidden mt-4 p-md-3">
    <div class="card">
        <!-- User Information Section -->
        <div class="card-body d-flex align-items-center p-2">
            <div><img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="60" width="60" class="rounded-circle border"></div>
            <div>&nbsp;&nbsp;&nbsp;</div>
            <div class="d-flex flex-column justify-content-center">
                <a href='?u=<?=$user['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;"><?=$user['first_name']?> <?=$user['last_name']?></h6></a>
                <p style="margin:0px;" class="text-muted">@<?=$user['username']?></p>
            </div>
        </div>

        <!-- Follow Suggestions Section -->
        <div class="card-body">
            <h6 class="text-muted p-2">You Can Follow Them</h6>
            <?php
            foreach ($follow_suggestions as $suser) {
            ?>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$suser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border"></div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$suser['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$suser['first_name']?> <?=$suser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?=$suser['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary followbtn" data-user-id='<?=$suser['id']?>'>Follow</button>
                    </div>
                </div>
            <?php
            }

            if (count($follow_suggestions) < 1) {
                echo "<p class='p-2 bg-white border rounded text-center'>No Suggestions For You</p>";
            }
            ?>
        </div>
    </div>
</div>

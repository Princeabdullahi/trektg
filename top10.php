<style>
    .image-container {
        position: relative;
        display: inline-block;
        user-drag: none;
        user-select: none;
        pointer-events: none;
    }

    .image {
        pointer-events: none;
    }
</style>
<?php
global $user;
global $follow_suggestions;
global $mysqli; // Assuming you have a database connection

// Fetch the top 10 users with the most followers
$top10FollowedUsersQuery = "SELECT u.*, COUNT(f.follower_id) AS followers_count
                          FROM users u
                          LEFT JOIN follow_list f ON u.id = f.user_id
                          GROUP BY u.id
                          ORDER BY followers_count DESC
                          LIMIT 10";

$top10FollowedUsersResult = $mysqli->query($top10FollowedUsersQuery);

if ($top10FollowedUsersResult && $top10FollowedUsersResult->num_rows > 0) {
    $top10FollowedUsers = $top10FollowedUsersResult->fetch_all(MYSQLI_ASSOC);
} else {
    // Handle the case where there are no users or an error occurred
    $top10FollowedUsers = array();
}

// Assuming you have a variable $currentUserId to represent the current user's ID
$currentUserId = $_SESSION['userdata']['id'];

echo '<div class="col-lg-6 overflow-hidden mt-4 p-md-3">';
if (!empty($top10FollowedUsers)) {
    echo '<h6 class="text-muted p-2">Top 10 Most Followed Users</h6';
    $count = 1; // Initialize the count
    foreach ($top10FollowedUsers as $topUser) {
        ?>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center p-2">
                <?php
                if ($count <= 10) {
                    // Display the first 10 users with badges
                    echo '<div class="image-container">
                        <img src="assets/images/rank/' . $count . '.png" alt="User Image" height="40" width="40" class="image" id="image' . $count . '">
                    </div>';
                }
                ?>
                <div><img src="assets/images/profile/<?=$topUser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border"></div>
                <div>&nbsp;&nbsp;</div>
                <div class="d-flex flex-column justify-content-center">
                    <a href='?u=<?=$topUser['username']?>' class="text-decoration-none text-dark">
                        <h6 style="margin: 0px; font-size: small;">
                            <?php
                            echo $topUser['first_name'] . ' ' . $topUser['last_name'];
                            if ($count <= 10) {
                                echo ' <img src="assets/images/rank/' . $count . '.png" alt="User Image" height="18" width="18" class="image" id="image' . $count . '"> ';
                            }
                            ?>
                        </h6>
                    </a>
                    <p style="margin:0px; font-size: small;" class="text-muted">@<?=$topUser['username']?></p>
                </div>
            </div>
        </div>
        <?php
        if ($count === 1 && $topUser['id'] === $currentUserId) {
            // Send a congratulatory notification to the top user (You can define createNotification function)
            createNotification($currentUserId, "Congratulations! You are the top user!", $topUser['id']);
            
        }
        $count++; // Increment the count
    }
} else {
    echo "<p class='p-2 bg-white border rounded text-center'>No Top 10 Most Followed Users Available</p>";
}
?>
</div>
<?php

?>
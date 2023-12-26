<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'assets/php/functions.php';

if (isset($_GET['newfp'])) {
    unset($_SESSION['auth_temp']);
    unset($_SESSION['forgot_email']);
    unset($_SESSION['forgot_code']);
}


if (isset($_SESSION['Auth'])) {
    $user = getUser($_SESSION['userdata']['id']);
    $posts = filterPosts();
    $post_videos = filterVideoPosts(); // Add this line to fetch video posts
    $follow_suggestions = filterFollowSuggestion();
}

$pagecount = count($_GET);

// Manage pages
if (isset($_GET['page']) && $_GET['page'] === 'top10') {
    showPage('header', ['page_title' => 'Populars']);
    showPage('navbar');
    showPage('top10'); // Create a 'top10' page file
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 1 && !$pagecount) {
    showPage('header', ['page_title' => 'Home']);
    showPage('navbar');
    showPage('pos');
    showPage('wall');
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
    showPage('header', ['page_title' => 'Verify Your Email']);
    showPage('verify_email');
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
    showPage('header', ['page_title' => 'Profile']);
    showPage('profile_post');
    showPage('follow');
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
    showPage('header', ['page_title' => 'Two Factor Authentication']);
    showPage('2fa');
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
    showPage('header', ['page_title' => 'Follow']);
    showPage('navbar');
    showPage('follow');
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
    showPage('header', ['page_title' => 'Videos']);
    showPage('profile');
    showPage('videos');
} elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
    showPage('header', ['page_title' => 'About']);
    showPage('profile');
    showPage('about');
} elseif (isset($_SESSION['Auth']) && isset($_GET['editdeatails']) && $user['ac_status'] == 1) {
    showPage('header', ['page_title' => 'Edit deatails']);
    showPage('navbar');
    showPage('edit_deatails');
} elseif (isset($_SESSION['Auth']) && isset($_GET['editprofile']) && $user['ac_status'] == 1) {
    showPage('header', ['page_title' => 'Edit Profile']);
    showPage('navbar');
    showPage('edit_profile');
} elseif (isset($_SESSION['Auth']) && isset($_GET['u']) && $user['ac_status'] == 1) {
    $profile = getUserByUsername($_GET['u']);

    if (!$profile) {
        showPage('header', ['page_title' => '(404) User Not Found']);
        showPage('navbar');
        showPage('user_not_found');
    } else {
        $profile_post = getPostById($profile['id']);
        $photo = getPostById($profile['id']);
        $profile['followers'] = getFollowers($profile['id']);
        $profile['following'] = getFollowing($profile['id']);

        // Check if 'date_of_birth' exists, if not, set it to an empty string
        $date_of_birth = isset($profile['date_of_birth']) ? $profile['date_of_birth'] : '';

        // Build the page title
        $page_title = $profile['first_name'] . ' ' . $profile['last_name'];

        showPage('header', ['page_title' => $page_title]);
        showPage('navbar');
        showPage('profile');
        showPage('profile_post');
    }
} elseif (isset($_GET['signup'])) {
    showPage('header', ['page_title' => 'Together - SignUp']);
    showPage('signup');
} elseif (isset($_GET['login'])) {
    showPage('header', ['page_title' => 'Together - Login']);
    showPage('login');
} elseif (isset($_GET['forgotpassword'])) {
    showPage('header', ['page_title' => 'Together - Forgot Password']);
    showPage('forgot_password');
} elseif (isset($_GET['privacy'])) {
    showPage('header', ['page_title' => 'Privacy Policy']);
    showPage('privacy');
} elseif (isset($_GET['tearm'])) {
    showPage('header', ['page_title' => 'Terms and Conditions']);
    showPage('tearm');
} elseif (isset($_SESSION['Auth']) && isset($_GET['video'])) {
    showPage('header', ['page_title' => 'Video']);
    showPage('navbar');
    showPage('video');
} elseif (isset($_SESSION['Auth']) && isset($_GET['follow'])) {
    showPage('header', ['page_title' => 'Follow']);
    showPage('navbar');
    showPage('follow');
} else {
    if (isset($_SESSION['Auth']) && $user['ac_status'] == 1) {
        showPage('header', ['page_title' => 'Home']);
        showPage('navbar');
        showPage('pos');
        showPage('wall');
    } if (isset($_SESSION['Auth']) && $user['ac_status'] == 1) {
        showPage('header', ['page_title' => 'Profile']);
        showPage('profile_post');
        showPage('profile');
    } elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 2 && !$pagecount) {
        showPage('header', ['page_title' => 'Follow']);
        showPage('navbar');
        showPage('follow');
    } elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0 && !$pagecount) {
        showPage('header', ['page_title' => 'Videos']);
        showPage('profle');
        showPage('video');
    } elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0) {
        showPage('header', ['page_title' => 'Verify Your Email']);
        showPage('verify_email');
    } elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 0) {
        showPage('header', ['page_title' => 'Two Factor Authentication']);
        showPage('2fa');
    } elseif (isset($_SESSION['Auth']) && $user['ac_status'] == 2) {
        showPage('header', ['page_title' => 'Blocked']);
        showPage('blocked');
    } elseif (isset($_SESSION['Auth']) && isset($_GET['video'])) {
        showPage('header.php', ['page_title' => 'Video']);
        showPage('video.php');
        showPage('navbar.php');
    } else {
        showPage('header', ['page_title' => 'Together - Login']);
        showPage('login');
    }
}

showPage('footer');
unset($_SESSION['error']);
unset($_SESSION['formdata']);

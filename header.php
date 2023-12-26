<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="assets/images/icon.png">
    <title><?=$data['page_title']?></title>
    
</head>
    <style>
        .social-account-container {
  margin-top: 25px;
}

.social-account-container .title {
  display: block;
  text-align: center;
  font-size: 10px;
  color: #777; /* Lighter text color */
}

.social-account-container .social-accounts {
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 5px;
}

.social-account-container .social-accounts .social-button {
  background: #121212; /* Dark background color */
  border: 5px solid #fff; /* Light border color */
  padding: 5px;
  border-radius: 50%;
  width: 40px;
  aspect-ratio: 1;
  display: grid;
  place-content: center;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
  transition: all 0.2s ease-in-out;
}

.social-account-container .social-accounts .social-button .svg {
  fill: #fff; /* Light text color */
  margin: auto;
}

.social-account-container .social-accounts .social-button:hover {
  transform: scale(1.2);
}

.social-account-container .social-accounts .social-button:active {
  transform: scale(0.9);
}

.agreement {
  display: block;
  text-align: center;
  margin-top: 15px;
}

.agreement a {
  text-decoration: none;
  color: #12B1D1; /* Highlighted color */
  font-size: 9px;
}
    button {
 --color: blue;
 font-family: inherit;
 display: inline-block;
 width: 8em;
 height: 2.6em;
 line-height: 2.5em;
 margin: 20px;
 position: relative;
 overflow: hidden;
 border: 2px solid var(--color);
 transition: color .5s;
 z-index: 1;
 font-size: 17px;
 border-radius: 6px;
 font-weight: 500;
 color: var(--color);
}

button:before {
 content: "";
 position: absolute;
 z-index: -1;
 background: var(--color);
 height: 150px;
 width: 200px;
 border-radius: 50%;
}

button:hover {
 color: #fff;
}

button:before {
 top: 100%;
 left: 100%;
 transition: all .7s;
}

button:hover:before {
 top: -30px;
 left: -30px;
}

button:active:before {
 background: #3a0ca3;
 transition: background 0s;
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
body {
  width: 100%;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  min-height: 100vh;
  font-family: "Poppins", sans-serif;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
}

a {
  text-decoration: none;
}

.header__wrapper header {
  width: 100%;
  background: url("assets/images/together.png") no-repeat 50% 20% / cover;
  min-height: calc(100px + 15vw);
}


.header__wrapper .cols__container .left__col {
    padding: 71px 30px;
    text-align: center;
    max-width: 100%;
    position: relative;
    margin: auto;
}



.header__wrapper .cols__container .left__col .img__container {
  position: absolute;
  top: -60px;
  left: 50%;
  transform: translatex(-50%);
}
.header__wrapper .cols__container .left__col .img__container img {
    width: 180px;
    height: 180px;
    object-fit: cover;
    border-radius: 50%;
    display: block;
    box-shadow: inset 1px -20px 20px 0px rgba(0, 0, 0, 0.20);
}
.header__wrapper .cols__container .left__col .img__container span {
  position: absolute;
  background: #2afa6a;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  bottom: 3px;
  right: 11px;
  border: 2px solid #fff;
}
.header__wrapper .cols__container .left__col h2 {
  margin-top: 60px;
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 5px;
}
.header__wrapper .cols__container .left__col p {
  font-size: 0.9rem;
  color: #818181;
  margin: 0;
}
.header__wrapper .cols__container .left__col .about {
  justify-content: space-between;
  position: relative;
  margin: 35px 0;
}
.header__wrapper .cols__container .left__col .about li {
  display: flex;
  flex-direction: column;
  color: #818181;
  font-size: 0.9rem;
}
.header__wrapper .cols__container .left__col .about li span {
  color: #1d1d1d;
  font-weight: 600;
}
.header__wrapper .cols__container .left__col .about:after {
  position: absolute;
  content: "";
  bottom: -16px;
  display: block;
  background: #cccccc;
  height: 1px;
  width: 100%;
}
.header__wrapper .cols__container .content p {
  font-size: 1rem;
  color: #1d1d1d;
  line-height: 1.8em;
}
.header__wrapper .cols__container .content ul {
  gap: 30px;
  justify-content: center;
  align-items: center;
  margin-top: 25px;
}
.header__wrapper .cols__container .content ul li {
  display: flex;
}
.header__wrapper .cols__container .content ul i {
  font-size: 1.3rem;
}
.header__wrapper .cols__container .right__col nav {
  display: flex;
  align-items: center;
  padding: 30px 0;
  justify-content: space-between;
  flex-direction: column;
}
.header__wrapper .cols__container .right__col nav ul {
  display: flex;
  gap: 20px;
  flex-direction: column;
}
.header__wrapper .cols__container .right__col nav ul li a {
  text-transform: uppercase;
  color: #818181;
}
.header__wrapper .cols__container .right__col nav ul li:nth-child(1) a {
  color: #1d1d1d;
  font-weight: 600;
}
.header__wrapper .cols__container .right__col nav button {
  background: #0091ff;
  color: #fff;
  border: none;
  padding: 10px 25px;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 20px;
}
.header__wrapper .cols__container .right__col nav button:hover {
  opacity: 0.8;
}
.header__wrapper .cols__container .right__col .photos {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
  gap: 20px;
}
.header__wrapper .cols__container .right__col .photos img {
  max-width: 100%;
  display: block;
  height: 100%;
  object-fit: cover;
}

/* Responsiveness */

@media (min-width: 868px) {
  .header__wrapper .cols__container {
    max-width: 1200px;
    margin: 0 auto;
    width: 90%;
    justify-content: space-between;
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 50px;
  }
 
  .header__wrapper .cols__container .right__col nav ul {
    flex-direction: row;
    gap: 30px;
  }
  .header__wrapper .cols__container .right__col .photos {
    height: 365px;
    overflow: auto;
    padding: 0 0 30px;
  }
}

@media (min-width: 1017px) {
  .header__wrapper .cols__container .left__col {
    margin: 0;
    margin-right: auto;
  }
  .header__wrapper .cols__container .right__col nav {
    flex-direction: row;
  }
  .header__wrapper .cols__container .right__col nav button {
    margin-top: 0;
  }
}
    .horizontal-menu {
    display: flex;
    gap: 20px; /* Adjust the space between items as needed */
}

.horizontal-menu a {
    text-decoration: none;
    color: inherit;
}

.horizontal-menu h3 {
    margin: 0;
    padding: 10px;
    border-right: 1px solid #ccc; /* Add a border between items */
    display: flex;
    align-items: center;
}

.horizontal-menu h3:last-child {
    border-right: none; /* Remove border from the last item */
}

/* Add any additional styling you need */

        /* Style for the profile header */
        .profile-header {
            position: relative;
            overflow: hidden;
            background-color: #007BFF; /* Change to your desired background color */
            color: #fff; /* Change to your desired text color */
        }
        
        /* Style for the cover photo */
        .cover-photo {
            width: 100%;
            height: auto;
            max-height: 300px; /* Adjust the cover photo height as needed */
        }
        
        /* Style for the profile picture container (Desktop Version) */
        .profile-picture-container {
            position: relative;
        }
        
        /* Style for the profile picture (Desktop Version) */
        .profile-picture {
            width: 170px;
            height: 170px;
            border: 4px solid #fff; /* Add a border to the profile picture */
            border-radius: 50%; /* Make it circular */
            position: relative;
            z-index: 2; /* Bring it to the front */
        }
        
        /* Style for the shadow effect on the profile picture (Desktop Version) */
        .profile-picture-container::before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            top: 10px; /* Adjust the shadow position as needed */
            left: 10px; /* Adjust the shadow position as needed */
            background: rgba(0, 0, 0, 0.3); /* Adjust the shadow color and opacity as needed */
            border-radius: 50%;
            z-index: 1;
        }
        
        /* Style for the profile picture (Mobile Version) */
        .profile-picture-mobile {
            display: none; /* Hide the mobile profile picture by default */
            width: 80px; /* Adjust the width of the mobile profile picture */
            height: 80px; /* Adjust the height of the mobile profile picture */
            position: absolute;
            top: 30px; /* Adjust the vertical position as needed */
            left: 20px; /* Adjust the horizontal position as needed */
            border: 2px solid #fff; /* Add a border to the mobile profile picture */
            border-radius: 50%; /* Make it circular */
        }
        
        /* Media query for displaying the mobile profile picture */
        @media (max-width: 768px) {
            .profile-picture-mobile {
                display: inline-block;
            }
        
            .profile-picture {
                display: none;
            }
        }
        
        .login {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
element.style {
    font-size: x-large;
}

/* Offcanvas Header */
.offcanvas-header {
    background-color: #a52a2a; /* Change to your desired header color */
    color: #fff; /* Text color for the header */
}


/* Offcanvas Title */
.offcanvas-title {
    font-size: 1.25rem; /* Adjust the title font size as needed */
    margin-bottom: 0; /* Remove default margin */
}

/* Close Button */
.btn-close-white {
    color: #fff; /* Button color */
}

   /* Modal Content */
   .modal-content {
    border-radius: 15px;
}

/* Modal Header */
.modal-header {
    background-color: #007bff;
    color: #fff;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

/* Modal Title */
.modal-title {
    display: flex;
    align-items: center;
    background: linear-gradient(161deg,#000000,#ffffff 50.05%,#084298);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Close Button */
.btn-close {
    color: #fff;
}

/* Modal Body */
.modal-body {
    padding: 20px;
}

/* Form Elements */
.form-label {
    font-size: 16px;
}

/* Upload Inputs */
.form-control {
    border-radius: 10px;
}
.btn-primary{
  width: 50;
  height: 30;
  background-color: red;
  animation-name: btn;
  animation-duration: 4s;
}
.px-md-5 {
  -webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.4));
}

body{
    margin-top:20px;
    background:#eee;
}

.profile-header {
    position: relative;
    overflow: hidden
}

.profile-header .profile-header-cover {
    background-image: url(assets/images/profile/<?=$profile['profile_pic']?>);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0
}

body{
    background: #eaeaea;
    margin-top:20px;
}
.profile-info-list {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.profile-info-list > li.title {
    font-size: 0.625rem;
    font-weight: 700;
    color: #8a8a8f;
    padding: 0 0 0.3125rem;
}
.profile-info-list > li + li.title {
    padding-top: 1.5625rem;
}
.profile-info-list > li {
    padding: 0.625rem 0;
}
.profile-info-list > li .field {
    font-weight: 700;
}
.profile-info-list > li .value {
    color: #666;
}
.profile-info-list > li.img-list a {
    display: inline-block;
}
.profile-info-list > li.img-list a img {
    max-width: 2.25rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    border-radius: 2.5rem;
}
.coming-soon-cover img,
.email-detail-attachment .email-attachment .document-file img,
.email-sender-img img,
.friend-list .friend-img img,
.profile-header-img img {
    max-width: 100%;
}
.table.table-profile th {
    border: none;
    color: #000;
    padding-bottom: 0.3125rem;
    padding-top: 0;
}
.table.table-profile td {
    border-color: #c8c7cc;
}
.table.table-profile tbody + thead > tr > th {
    padding-top: 1.5625rem;
}
.table.table-profile .field {
    color: #666;
    font-weight: 600;
    width: 25%;
    text-align: right;
}
.table.table-profile .value {
    font-weight: 500;
}
.profile-header {
    position: relative;
    overflow: hidden;
}
.profile-header .profile-header-cover {
    background: url() center no-repeat;
    background-size: 100% auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.profile-header .profile-header-cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0, rgba(0, 0, 0, 0.85) 100%);
}
.profile-header .profile-header-content,
.profile-header .profile-header-tab,
.profile-header-img,
body .fc-icon {
    position: relative;
}
.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -1.25rem 0 0;
    padding: 0 0 0 8.75rem;
    border-bottom: 1px solid #c8c7cc;
    white-space: nowrap;
}
.profile-header .profile-header-tab > li {
    display: inline-block;
    margin: 0;
}
.profile-header .profile-header-tab > li > a {
    display: block;
    color: #000;
    line-height: 1.25rem;
    padding: 0.625rem 1.25rem;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.75rem;
    border: none;
}
.profile-header .profile-header-tab > li.active > a,
.profile-header .profile-header-tab > li > a.active {
    color: #007aff;
}
.profile-header .profile-header-content:after,
.profile-header .profile-header-content:before {
    content: "";
    display: table;
    clear: both;
}
.profile-header .profile-header-content {
    color: #fff;
    padding: 1.25rem;
}
body .fc th a,
body .fc-ltr .fc-basic-view .fc-day-top .fc-day-number,
body .fc-widget-header a {
    color: #000;
}
.profile-header-img {
    float: left;
    width: 7.5rem;
    height: 7.5rem;
    overflow: hidden;
    z-index: 10;
    margin: 0 1.25rem -1.25rem 0;
    padding: 0.1875rem;
    -webkit-border-radius: 0.25rem;
    -moz-border-radius: 0.25rem;
    border-radius: 0.25rem;
    background: #fff;
}
.profile-header-info h4 {
    font-weight: 500;
    margin-bottom: 0.3125rem;
}
.profile-container {
    padding: 1.5625rem;
}
@media (max-width: 967px) {
    .profile-header-img {
        width: 5.625rem;
        height: 5.625rem;
        margin: 0;
    }
    .profile-header-info {
        margin-left: 6.5625rem;
        padding-bottom: 0.9375rem;
    }
    .profile-header .profile-header-tab {
        padding-left: 0;
    }
}
@media (max-width: 767px) {
    .profile-header .profile-header-cover {
        background-position: top;
    }
    .profile-header-img {
        width: 3.75rem;
        height: 3.75rem;
        margin: 0;
    }
    .profile-header-info {
        margin-left: 4.6875rem;
        padding-bottom: 0.9375rem;
    }
    .profile-header-info h4 {
        margin: 0 0 0.3125rem;
    }
    .profile-header .profile-header-tab {
        white-space: nowrap;
        overflow: scroll;
        padding: 0;
    }
    .profile-container {
        padding: 0.9375rem 0.9375rem 3.6875rem;
    }
    .friend-list > li {
        float: none;
        width: auto;
    }
}
.profile-info-list {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.profile-info-list > li.title {
    font-size: 0.625rem;
    font-weight: 700;
    color: #8a8a8f;
    padding: 0 0 0.3125rem;
}
.profile-info-list > li + li.title {
    padding-top: 1.5625rem;
}
.profile-info-list > li {
    padding: 0.625rem 0;
}
.profile-info-list > li .field {
    font-weight: 700;
}
.profile-info-list > li .value {
    color: #666;
}
.profile-info-list > li.img-list a {
    display: inline-block;
}
.profile-info-list > li.img-list a img {
    max-width: 2.25rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    border-radius: 2.5rem;
}
.coming-soon-cover img,
.email-detail-attachment .email-attachment .document-file img,
.email-sender-img img,
.friend-list .friend-img img,
.profile-header-img img {
    max-width: 100%;
}
.table.table-profile th {
    border: none;
    color: #000;
    padding-bottom: 0.3125rem;
    padding-top: 0;
}
.table.table-profile td {
    border-color: #c8c7cc;
}
.table.table-profile tbody + thead > tr > th {
    padding-top: 1.5625rem;
}
.table.table-profile .field {
    color: #666;
    font-weight: 600;
    width: 25%;
    text-align: right;
}
.table.table-profile .value {
    font-weight: 500;
}

.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.img-grid-list {
    padding: 0;
}
.img-grid-list > li {
    float: left;
    width: 20%;
    padding: 1px;
}
.img-grid-list > li a {
    position: relative;
    overflow: hidden;
    padding-top: 75%;
    display: block;
}
.img-grid-list > li a img {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    left: 0;
    max-width: 100%;
}

.profile-header .profile-header-cover:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .75) 100%)
}

.profile-header .profile-header-content {
    color: #fff;
    padding: 25px
}

.profile-header-img {
    float: left;
    width: 120px;
    height: 120px;
    overflow: hidden;
    position: relative;
    z-index: 10;
    margin: 0 0 -20px;
    padding: 3px;
    border-radius: 4px;
    background: #fff
}

.profile-header-img img {
    max-width: 100%
}

.profile-header-info h4 {
    font-weight: 500;
    color: #fff
}

.profile-header-img+.profile-header-info {
    margin-left: 140px
}

.profile-header .profile-header-content,
.profile-header .profile-header-tab {
    position: relative
}

.b-minus-1,
.b-minus-10,
.b-minus-2,
.b-minus-3,
.b-minus-4,
.b-minus-5,
.b-minus-6,
.b-minus-7,
.b-minus-8,
.b-minus-9,
.b-plus-1,
.b-plus-10,
.b-plus-2,
.b-plus-3,
.b-plus-4,
.b-plus-5,
.b-plus-6,
.b-plus-7,
.b-plus-8,
.b-plus-9,
.l-minus-1,
.l-minus-2,
.l-minus-3,
.l-minus-4,
.l-minus-5,
.l-minus-6,
.l-minus-7,
.l-minus-8,
.l-minus-9,
.l-plus-1,
.l-plus-10,
.l-plus-2,
.l-plus-3,
.l-plus-4,
.l-plus-5,
.l-plus-6,
.l-plus-7,
.l-plus-8,
.l-plus-9,
.r-minus-1,
.r-minus-10,
.r-minus-2,
.r-minus-3,
.r-minus-4,
.r-minus-5,
.r-minus-6,
.r-minus-7,
.r-minus-8,
.r-minus-9,
.r-plus-1,
.r-plus-10,
.r-plus-2,
.r-plus-3,
.r-plus-4,
.r-plus-5,
.r-plus-6,
.r-plus-7,
.r-plus-8,
.r-plus-9,
.t-minus-1,
.t-minus-10,
.t-minus-2,
.t-minus-3,
.t-minus-4,
.t-minus-5,
.t-minus-6,
.t-minus-7,
.t-minus-8,
.t-minus-9,
.t-plus-1,
.t-plus-10,
.t-plus-2,
.t-plus-3,
.t-plus-4,
.t-plus-5,
.t-plus-6,
.t-plus-7,
.t-plus-8,
.t-plus-9 {
    position: relative!important
}

.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -10px 0 0;
    padding: 0 0 0 140px;
    white-space: nowrap;
    border-radius: 0
}

.text-ellipsis,
.text-nowrap {
    white-space: nowrap!important
}

.profile-header .profile-header-tab>li {
    display: inline-block;
    margin: 0
}

.profile-header .profile-header-tab>li>a {
    display: block;
    color: #929ba1;
    line-height: 20px;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: 700;
    font-size: 12px;
    border: none
}

.profile-header .profile-header-tab>li.active>a,
.profile-header .profile-header-tab>li>a.active {
    color: #242a30
}

.profile-content {
    padding: 25px;
    border-radius: 4px
}

.profile-content:after,
.profile-content:before {
    content: '';
    display: table;
    clear: both
}

.profile-content .tab-content,
.profile-content .tab-pane {
    background: 0 0
}

.profile-left {
    width: 200px;
    float: left
}

.profile-right {
    margin-left: 240px;
    padding-right: 20px
}

.profile-image {
    height: 175px;
    line-height: 175px;
    text-align: center;
    font-size: 72px;
    margin-bottom: 10px;
    border: 2px solid #E2E7EB;
    overflow: hidden;
    border-radius: 4px
}

.profile-image img {
    display: block;
    max-width: 100%
}

.profile-highlight {
    padding: 12px 15px;
    background: #FEFDE1;
    border-radius: 4px
}

.profile-highlight h4 {
    margin: 0 0 7px;
    font-size: 12px;
    font-weight: 700
}

.table.table-profile>thead>tr>th {
    border-bottom: none!important
}

.table.table-profile>thead>tr>th h4 {
    font-size: 20px;
    margin-top: 0
}

.table.table-profile>thead>tr>th h4 small {
    display: block;
    font-size: 12px;
    font-weight: 400;
    margin-top: 5px
}

.table.table-profile>tbody>tr>td,
.table.table-profile>thead>tr>th {
    border: none;
    padding-top: 7px;
    padding-bottom: 7px;
    color: #242a30;
    background: 0 0
}

.table.table-profile>tbody>tr>td.field {
    width: 20%;
    text-align: right;
    font-weight: 600;
    color: #2d353c
}

.table.table-profile>tbody>tr.highlight>td {
    border-top: 1px solid #b9c3ca;
    border-bottom: 1px solid #b9c3ca
}

.table.table-profile>tbody>tr.divider>td {
    padding: 0!important;
    height: 10px
}

.profile-section+.profile-section {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #b9c3ca
}

.profile-section:after,
.profile-section:before {
    content: '';
    display: table;
    clear: both
}

.profile-section .title {
    font-size: 20px;
    margin: 0 0 15px
}

.profile-section .title small {
    font-weight: 400
}

body.flat-black {
    background: #E7E7E7
}

.flat-black .navbar.navbar-inverse {
    background: #212121
}

.flat-black .navbar.navbar-inverse .navbar-form .form-control {
    background: #4a4a4a;
    border-color: #4a4a4a
}

.flat-black .sidebar,
.flat-black .sidebar-bg {
    background: #3A3A3A
}

.flat-black .page-with-light-sidebar .sidebar,
.flat-black .page-with-light-sidebar .sidebar-bg {
    background: #fff
}

.flat-black .sidebar .nav>li>a {
    color: #b2b2b2
}

.flat-black .sidebar.sidebar-grid .nav>li>a {
    border-bottom: 1px solid #474747;
    border-top: 1px solid #474747
}

.flat-black .sidebar .active .sub-menu>li.active>a,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li>a:focus,
.flat-black .sidebar .nav>li>a:hover,
.flat-black .sidebar .sub-menu>li>a:focus,
.flat-black .sidebar .sub-menu>li>a:hover,
.sidebar .nav>li.nav-profile>a {
    color: #fff
}

.flat-black .sidebar .sub-menu>li>a,
.flat-black .sidebar .sub-menu>li>a:before {
    color: #999
}

.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:hover,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:hover {
    color: #000
}

.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:focus>a,
.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:hover>a {
    background: #323232
}

.flat-black .page-sidebar-minified .sidebar .nav li.has-sub>.sub-menu,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li.active>a:focus,
.flat-black .sidebar .nav>li.active>a:hover,
.flat-black .sidebar .nav>li.nav-profile,
.flat-black .sidebar .sub-menu>li.has-sub>a:before,
.flat-black .sidebar .sub-menu>li:before,
.flat-black .sidebar .sub-menu>li>a:after {
    background: #2A2A2A
}

.flat-black .page-sidebar-minified .sidebar .sub-menu>li:before,
.flat-black .page-sidebar-minified .sidebar .sub-menu>li>a:after {
    background: #3e3e3e
}

.flat-black .sidebar .nav>li.nav-profile .cover.with-shadow:before {
    background: rgba(42, 42, 42, .75)
}

.bg-white {
    background-color: #fff!important;
}
.p-10 {
    padding: 10px!important;
}
.media.media-xs .media-object {
    width: 32px;
}
.m-b-2 {
    margin-bottom: 2px!important;
}
.media>.media-left, .media>.pull-left {
    padding-right: 15px;
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
select.form-control:not([size]):not([multiple]) {
    height: 34px;
}
.form-control.input-inline {
    display: inline;
    width: auto;
    padding: 0 7px;
}


.timeline {
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative
}

.timeline:before {
    content: '';
    position: absolute;
    top: 5px;
    bottom: 5px;
    width: 5px;
    background: #2d353c;
    left: 20%;
    margin-left: -2.5px
}

.timeline>li {
    position: relative;
    min-height: 50px;
    padding: 20px 0
}

.timeline .timeline-time {
    position: absolute;
    left: 0;
    width: 18%;
    text-align: right;
    top: 30px
}

.timeline .timeline-time .date,
.timeline .timeline-time .time {
    display: block;
    font-weight: 600
}

.timeline .timeline-time .date {
    line-height: 16px;
    font-size: 12px
}

.timeline .timeline-time .time {
    line-height: 24px;
    font-size: 20px;
    color: #242a30
}

.timeline .timeline-icon {
    left: 15%;
    position: absolute;
    width: 10%;
    text-align: center;
    top: 40px
}

.timeline .timeline-icon a {
    text-decoration: none;
    width: 20px;
    height: 20px;
    display: inline-block;
    border-radius: 20px;
    background: #d9e0e7;
    line-height: 10px;
    color: #fff;
    font-size: 14px;
    border: 5px solid #2d353c;
    transition: border-color .2s linear
}

.timeline .timeline-body {
    margin-left: 23%;
    margin-right: 17%;
    background: #fff;
    position: relative;
    padding: 20px 25px;
    border-radius: 6px
}

.timeline .timeline-body:before {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    border-right-color: #fff;
    left: -20px;
    top: 20px
}

.timeline .timeline-body>div+div {
    margin-top: 15px
}

.timeline .timeline-body>div+div:last-child {
    margin-bottom: -20px;
    padding-bottom: 20px;
    border-radius: 0 0 6px 6px
}

.timeline-header {
    padding-bottom: 10px;
    border-bottom: 1px solid #e2e7eb;
    line-height: 30px
}

.timeline-header .userimage {
    float: left;
    width: 34px;
    height: 34px;
    border-radius: 40px;
    overflow: hidden;
    margin: -2px 10px -2px 0
}

.timeline-header .username {
    font-size: 16px;
    font-weight: 600
}

.timeline-header .username,
.timeline-header .username a {
    color: #2d353c
}

.timeline img {
    max-width: 100%;
    display: block
}

.timeline-content {
    letter-spacing: .25px;
    line-height: 18px;
    font-size: 13px
}

.timeline-content:after,
.timeline-content:before {
    content: '';
    display: table;
    clear: both
}

.timeline-title {
    margin-top: 0
}

.timeline-footer {
    background: #fff;
    border-top: 1px solid #e2e7ec;
    padding-top: 15px
}

.timeline-footer a:not(.btn) {
    color: #575d63
}

.timeline-footer a:not(.btn):focus,
.timeline-footer a:not(.btn):hover {
    color: #2d353c
}

.timeline-likes {
    color: #6d767f;
    font-weight: 600;
    font-size: 12px
}

.timeline-likes .stats-right {
    float: right
}

.timeline-likes .stats-total {
    display: inline-block;
    line-height: 20px
}

.timeline-likes .stats-icon {
    float: left;
    margin-right: 5px;
    font-size: 9px
}

.timeline-likes .stats-icon+.stats-icon {
    margin-left: -2px
}

.timeline-likes .stats-text {
    line-height: 20px
}

.timeline-likes .stats-text+.stats-text {
    margin-left: 15px
}

.timeline-comment-box {
    background: #f2f3f4;
    margin-left: -25px;
    margin-right: -25px;
    padding: 20px 25px
}

.timeline-comment-box .user {
    float: left;
    width: 34px;
    height: 34px;
    overflow: hidden;
    border-radius: 30px
}

.timeline-comment-box .user img {
    max-width: 100%;
    max-height: 100%
}

.timeline-comment-box .user+.input {
    margin-left: 44px
}

.lead {
    margin-bottom: 20px;
    font-size: 21px;
    font-weight: 300;
    line-height: 1.4;
}

.text-danger, .text-red {
    color: #ff5b57!important;
}

 /* Button styles */
         .custom-button {
            display: inline-block;
            padding: 7px 10px;
            font-size: 16px;
            background-color: brown; /* Change the background color to your preference */
            color: #fff; /* Text color */
            border: none;
            border-radius: 25px; /* Rounded corners */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s; /* Smooth transitions */
            border-bottom-right-radius: 3%;
        }

        /* Hover effect */
        .custom-button:hover {
            background-color: #0056b3; /* Change the background color on hover */
            transform: scale(1.05); /* Scale the button slightly on hover */
        }

div.ex1 {
  margin: 50px;
  border: -2px solid black;
  outline: 2px solid blue;
  outline-offset: 15px;
}

/* Optional Note */
.form-label i {
    font-size: 18px;
    margin-right: 5px;
    color: #007bff;
}

/* Primary Button */
.btn-primary {
    background-color: #007bff;
    border-radius: 10px;
    color: #fff;
}

/* Primary Button Hover */
.btn-primary:hover {
    background-color: #0056b3;
}


/* Offcanvas Body */
.offcanvas-body {
    /* Add your custom styles for the offcanvas body */
    padding: 10px; /* Adjust padding as needed */
}

.search-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            height: 40px;
            padding: 5px;
            background-color: #f2f2f2;
            border-radius: 50px;
            overflow: hidden;
            transition: width 0.5s;
        }

        .search-container.active {
            width: 200px;
        }

        .search-input {
            width: 0;
            padding: 0;
            margin: 0;
            border: none;
            background-color: transparent;
            transition: width 0.5s;
        }

        .search-container.active .search-input {
            width: 120px;
            padding: 0 5px;
        }

        .search-button {
            background-color: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .search-icon {
            font-size: 16px;
            color: #333;
            transition: transform 0.5s;
        }

        .search-container.active .search-icon {
            transform: rotate(-90deg);
        }
        
        .navbar {
  font-weight: 900;
  font-size: 20px;
  padding: 15px 20px;
  background: #000;
  position: sticky;
  top: 0;
  z-index: 999;
    }
    
    

    /* Style the login container */
.login {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Style the login form container */
.login .col-md-4 {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the login form header */
.login h1 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 500;
    text-align: center;
}

/* Style the form labels */
.login label {
    font-size: 0.875rem;
    color: #333;
    margin-bottom: 0.25rem;
}

/* Style the form inputs */
.login input[type="text"],
.login input[type="password"] {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 1rem;
}

/* Style the form submit button */
.login button.btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
    border-radius: 5px;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login button.btn-primary:hover {
    background-color: #0056b3;
}

/* Style the "Create New Account" link */
.login a.text-decoration-none {
    font-size: 0.875rem;
    text-align: center;
    display: block;
    margin-top: 1rem;
    color: #007bff;
    transition: color 0.3s;
}

.login a.text-decoration-none:hover {
    color: #0056b3;
}

/* Style the "Forgot password?" link */
.login a.text-decoration-none:last-child {
    margin-top: 0.5rem;
}

@charset "UTF-8";/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */:root{--bs-brown:brown;--bs-indigo:#bf3b35;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#bf3b35;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-gray-100:#f8f9fa;--bs-gray-200:#e9ecef;--bs-gray-300:#dee2e6;--bs-gray-400:#ced4da;--bs-gray-500:#adb5bd;--bs-gray-600:#6c757d;--bs-gray-700:#495057;--bs-gray-800:#343a40;--bs-gray-900:#212529;--bs-primary:brown;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#bf3b35;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-primary-rgb:13,110,253;--bs-secondary-rgb:108,117,125;--bs-success-rgb:25,135,84;--bs-info-rgb:13,202,240;--bs-warning-rgb:255,193,7;--bs-danger-rgb:220,53,69;--bs-light-rgb:248,249,250;--bs-dark-rgb:f,f,f;--bs-white-rgb:0,0,0;--bs-black-rgb:0,0,0;--bs-body-color-rgb:33,37,41;--bs-body-bg-rgb:0,0,0;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));--bs-body-font-family:var(--bs-font-sans-serif);--bs-body-font-size:1rem;--bs-body-font-weight:400;--bs-body-line-height:1.5;--bs-body-color:#fff;--bs-body-bg:#000}*,::after,::before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:var(--bs-body-font-family);font-size:var(--bs-body-font-size);font-weight:var(--bs-body-font-weight);line-height:var(--bs-body-line-height);color:var(--bs-body-color);text-align:var(--bs-body-text-align);background-color:#5f5f5f;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}hr:not([size]){height:1px}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){.h1,h1{font-size:2.5rem}}.h2,h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){.h2,h2{font-size:2rem}}.h3,h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){.h3,h3{font-size:1.75rem}}.h4,h4{font-size:calc(1.275rem + .3vw)}@media (min-width:1200px){.h4,h4{font-size:1.5rem}}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}p{margin-top:0;margin-bottom:1rem}abbr[data-bs-original-title],abbr[title]{-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol,ul{padding-left:2rem}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}.small,small{font-size:.875em}.mark,mark{padding:.2em;background-color:brown}sub,sup{position:sticky;font-size:.75em;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:blue;text-decoration:underline}a:hover{color:#0a58ca}a:not([href]):not([class]),a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:var(--bs-font-monospace);font-size:1em;direction:ltr;unicode-bidi:bidi-override}pre{display:block;margin-top:0;margin-bottom:1rem;overflow:auto;font-size:.875em}pre code{font-size:inherit;color:inherit;word-break:normal}code{font-size:.875em;color:#d63384;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:.875em;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:1em;font-weight:700}figure{margin:0 0 1rem}img,svg{vertical-align:middle}table{caption-side:bottom;border-collapse:collapse}caption{padding-top:.5rem;padding-bottom:.5rem;color:#6c757d;text-align:left}th{text-align:inherit;text-align:-webkit-match-parent}tbody,td,tfoot,th,thead,tr{border-color:inherit;border-style:solid;border-width:0}label{display:inline-block}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}select:disabled{opacity:1}[list]::-webkit-calendar-picker-indicator{display:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}::-moz-focus-inner{padding:0;border-style:none}textarea{resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{float:left;width:100%;padding:0;margin-bottom:.5rem;font-size:calc(1.275rem + .3vw);line-height:inherit}@media (min-width:1200px){legend{font-size:1.5rem}}legend+*{clear:left}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:textfield}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::-webkit-file-upload-button{font:inherit}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}iframe{border:0}summary{display:list-item;cursor:pointer}progress{vertical-align:baseline}[hidden]{display:none!important}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:calc(1.625rem + 4.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-1{font-size:5rem}}.display-2{font-size:calc(1.575rem + 3.9vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-2{font-size:4.5rem}}.display-3{font-size:calc(1.525rem + 3.3vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-3{font-size:4rem}}.display-4{font-size:calc(1.475rem + 2.7vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-4{font-size:3.5rem}}.display-5{font-size:calc(1.425rem + 2.1vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-5{font-size:3rem}}.display-6{font-size:calc(1.375rem + 1.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-6{font-size:2.5rem}}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:.875em;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote>:last-child{margin-bottom:0}.blockquote-footer{margin-top:-1rem;margin-bottom:1rem;font-size:.875em;color:#6c757d}.blockquote-footer::before{content:"— "}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:.875em;color:#6c757d}.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}@media (min-width:1400px){.container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{max-width:1320px}}.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-.5 * var(--bs-gutter-x));margin-left:calc(-.5 * var(--bs-gutter-x))}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}.row-cols-auto>*{flex:0 0 auto;width:auto}.row-cols-1>*{flex:0 0 auto;width:100%}.row-cols-2>*{flex:0 0 auto;width:50%}.row-cols-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-4>*{flex:0 0 auto;width:25%}.row-cols-5>*{flex:0 0 auto;width:20%}.row-cols-6>*{flex:0 0 auto;width:16.6666666667%}.col-auto{flex:0 0 auto;width:auto}.col-1{flex:0 0 auto;width:8.33333333%}.col-2{flex:0 0 auto;width:16.66666667%}.col-3{flex:0 0 auto;width:25%}.col-4{flex:0 0 auto;width:33.33333333%}.col-5{flex:0 0 auto;width:41.66666667%}.col-6{flex:0 0 auto;width:50%}.col-7{flex:0 0 auto;width:58.33333333%}.col-8{flex:0 0 auto;width:66.66666667%}.col-9{flex:0 0 auto;width:75%}.col-10{flex:0 0 auto;width:83.33333333%}.col-11{flex:0 0 auto;width:91.66666667%}.col-12{flex:0 0 auto;width:100%}.offset-1{margin-left:8.33333333%}.offset-2{margin-left:16.66666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.33333333%}.offset-5{margin-left:41.66666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.33333333%}.offset-8{margin-left:66.66666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.33333333%}.offset-11{margin-left:91.66666667%}.g-0,.gx-0{--bs-gutter-x:0}.g-0,.gy-0{--bs-gutter-y:0}.g-1,.gx-1{--bs-gutter-x:0.25rem}.g-1,.gy-1{--bs-gutter-y:0.25rem}.g-2,.gx-2{--bs-gutter-x:0.5rem}.g-2,.gy-2{--bs-gutter-y:0.5rem}.g-3,.gx-3{--bs-gutter-x:1rem}.g-3,.gy-3{--bs-gutter-y:1rem}.g-4,.gx-4{--bs-gutter-x:1.5rem}.g-4,.gy-4{--bs-gutter-y:1.5rem}.g-5,.gx-5{--bs-gutter-x:3rem}.g-5,.gy-5{--bs-gutter-y:3rem}@media (min-width:576px){.col-sm{flex:1 0 0%}.row-cols-sm-auto>*{flex:0 0 auto;width:auto}.row-cols-sm-1>*{flex:0 0 auto;width:100%}.row-cols-sm-2>*{flex:0 0 auto;width:50%}.row-cols-sm-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-sm-4>*{flex:0 0 auto;width:25%}.row-cols-sm-5>*{flex:0 0 auto;width:20%}.row-cols-sm-6>*{flex:0 0 auto;width:16.6666666667%}.col-sm-auto{flex:0 0 auto;width:auto}.col-sm-1{flex:0 0 auto;width:8.33333333%}.col-sm-2{flex:0 0 auto;width:16.66666667%}.col-sm-3{flex:0 0 auto;width:25%}.col-sm-4{flex:0 0 auto;width:33.33333333%}.col-sm-5{flex:0 0 auto;width:41.66666667%}.col-sm-6{flex:0 0 auto;width:50%}.col-sm-7{flex:0 0 auto;width:58.33333333%}.col-sm-8{flex:0 0 auto;width:66.66666667%}.col-sm-9{flex:0 0 auto;width:75%}.col-sm-10{flex:0 0 auto;width:83.33333333%}.col-sm-11{flex:0 0 auto;width:91.66666667%}.col-sm-12{flex:0 0 auto;width:100%}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.33333333%}.offset-sm-2{margin-left:16.66666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.33333333%}.offset-sm-5{margin-left:41.66666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.33333333%}.offset-sm-8{margin-left:66.66666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.33333333%}.offset-sm-11{margin-left:91.66666667%}.g-sm-0,.gx-sm-0{--bs-gutter-x:0}.g-sm-0,.gy-sm-0{--bs-gutter-y:0}.g-sm-1,.gx-sm-1{--bs-gutter-x:0.25rem}.g-sm-1,.gy-sm-1{--bs-gutter-y:0.25rem}.g-sm-2,.gx-sm-2{--bs-gutter-x:0.5rem}.g-sm-2,.gy-sm-2{--bs-gutter-y:0.5rem}.g-sm-3,.gx-sm-3{--bs-gutter-x:1rem}.g-sm-3,.gy-sm-3{--bs-gutter-y:1rem}.g-sm-4,.gx-sm-4{--bs-gutter-x:1.5rem}.g-sm-4,.gy-sm-4{--bs-gutter-y:1.5rem}.g-sm-5,.gx-sm-5{--bs-gutter-x:3rem}.g-sm-5,.gy-sm-5{--bs-gutter-y:3rem}}@media (min-width:768px){.col-md{flex:1 0 0%}.row-cols-md-auto>*{flex:0 0 auto;width:auto}.row-cols-md-1>*{flex:0 0 auto;width:100%}.row-cols-md-2>*{flex:0 0 auto;width:50%}.row-cols-md-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-md-4>*{flex:0 0 auto;width:25%}.row-cols-md-5>*{flex:0 0 auto;width:20%}.row-cols-md-6>*{flex:0 0 auto;width:16.6666666667%}.col-md-auto{flex:0 0 auto;width:auto}.col-md-1{flex:0 0 auto;width:8.33333333%}.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-3{flex:0 0 auto;width:25%}.col-md-4{flex:0 0 auto;width:33.33333333%}.col-md-5{flex:0 0 auto;width:41.66666667%}.col-md-6{flex:0 0 auto;width:50%}.col-md-7{flex:0 0 auto;width:58.33333333%}.col-md-8{flex:0 0 auto;width:66.66666667%}.col-md-9{flex:0 0 auto;width:75%}.col-md-10{flex:0 0 auto;width:83.33333333%}.col-md-11{flex:0 0 auto;width:91.66666667%}.col-md-12{flex:0 0 auto;width:100%}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.33333333%}.offset-md-2{margin-left:16.66666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.33333333%}.offset-md-5{margin-left:41.66666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.33333333%}.offset-md-8{margin-left:66.66666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.33333333%}.offset-md-11{margin-left:91.66666667%}.g-md-0,.gx-md-0{--bs-gutter-x:0}.g-md-0,.gy-md-0{--bs-gutter-y:0}.g-md-1,.gx-md-1{--bs-gutter-x:0.25rem}.g-md-1,.gy-md-1{--bs-gutter-y:0.25rem}.g-md-2,.gx-md-2{--bs-gutter-x:0.5rem}.g-md-2,.gy-md-2{--bs-gutter-y:0.5rem}.g-md-3,.gx-md-3{--bs-gutter-x:1rem}.g-md-3,.gy-md-3{--bs-gutter-y:1rem}.g-md-4,.gx-md-4{--bs-gutter-x:1.5rem}.g-md-4,.gy-md-4{--bs-gutter-y:1.5rem}.g-md-5,.gx-md-5{--bs-gutter-x:3rem}.g-md-5,.gy-md-5{--bs-gutter-y:3rem}}@media (min-width:992px){.col-lg{flex:1 0 0%}.row-cols-lg-auto>*{flex:0 0 auto;width:auto}.row-cols-lg-1>*{flex:0 0 auto;width:100%}.row-cols-lg-2>*{flex:0 0 auto;width:50%}.row-cols-lg-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-lg-4>*{flex:0 0 auto;width:25%}.row-cols-lg-5>*{flex:0 0 auto;width:20%}.row-cols-lg-6>*{flex:0 0 auto;width:16.6666666667%}.col-lg-auto{flex:0 0 auto;width:auto}.col-lg-1{flex:0 0 auto;width:8.33333333%}.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-4{flex:0 0 auto;width:33.33333333%}.col-lg-5{flex:0 0 auto;width:41.66666667%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-7{flex:0 0 auto;width:58.33333333%}.col-lg-8{flex:0 0 auto;width:66.66666667%}.col-lg-9{flex:0 0 auto;width:75%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-11{flex:0 0 auto;width:91.66666667%}.col-lg-12{flex:0 0 auto;width:100%}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.33333333%}.offset-lg-2{margin-left:16.66666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.33333333%}.offset-lg-5{margin-left:41.66666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.33333333%}.offset-lg-8{margin-left:66.66666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.33333333%}.offset-lg-11{margin-left:91.66666667%}.g-lg-0,.gx-lg-0{--bs-gutter-x:0}.g-lg-0,.gy-lg-0{--bs-gutter-y:0}.g-lg-1,.gx-lg-1{--bs-gutter-x:0.25rem}.g-lg-1,.gy-lg-1{--bs-gutter-y:0.25rem}.g-lg-2,.gx-lg-2{--bs-gutter-x:0.5rem}.g-lg-2,.gy-lg-2{--bs-gutter-y:0.5rem}.g-lg-3,.gx-lg-3{--bs-gutter-x:1rem}.g-lg-3,.gy-lg-3{--bs-gutter-y:1rem}.g-lg-4,.gx-lg-4{--bs-gutter-x:1.5rem}.g-lg-4,.gy-lg-4{--bs-gutter-y:1.5rem}.g-lg-5,.gx-lg-5{--bs-gutter-x:3rem}.g-lg-5,.gy-lg-5{--bs-gutter-y:3rem}}@media (min-width:1200px){.col-xl{flex:1 0 0%}.row-cols-xl-auto>*{flex:0 0 auto;width:auto}.row-cols-xl-1>*{flex:0 0 auto;width:100%}.row-cols-xl-2>*{flex:0 0 auto;width:50%}.row-cols-xl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xl-4>*{flex:0 0 auto;width:25%}.row-cols-xl-5>*{flex:0 0 auto;width:20%}.row-cols-xl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xl-auto{flex:0 0 auto;width:auto}.col-xl-1{flex:0 0 auto;width:8.33333333%}.col-xl-2{flex:0 0 auto;width:16.66666667%}.col-xl-3{flex:0 0 auto;width:25%}.col-xl-4{flex:0 0 auto;width:33.33333333%}.col-xl-5{flex:0 0 auto;width:41.66666667%}.col-xl-6{flex:0 0 auto;width:50%}.col-xl-7{flex:0 0 auto;width:58.33333333%}.col-xl-8{flex:0 0 auto;width:66.66666667%}.col-xl-9{flex:0 0 auto;width:75%}.col-xl-10{flex:0 0 auto;width:83.33333333%}.col-xl-11{flex:0 0 auto;width:91.66666667%}.col-xl-12{flex:0 0 auto;width:100%}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.33333333%}.offset-xl-2{margin-left:16.66666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.33333333%}.offset-xl-5{margin-left:41.66666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.33333333%}.offset-xl-8{margin-left:66.66666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.33333333%}.offset-xl-11{margin-left:91.66666667%}.g-xl-0,.gx-xl-0{--bs-gutter-x:0}.g-xl-0,.gy-xl-0{--bs-gutter-y:0}.g-xl-1,.gx-xl-1{--bs-gutter-x:0.25rem}.g-xl-1,.gy-xl-1{--bs-gutter-y:0.25rem}.g-xl-2,.gx-xl-2{--bs-gutter-x:0.5rem}.g-xl-2,.gy-xl-2{--bs-gutter-y:0.5rem}.g-xl-3,.gx-xl-3{--bs-gutter-x:1rem}.g-xl-3,.gy-xl-3{--bs-gutter-y:1rem}.g-xl-4,.gx-xl-4{--bs-gutter-x:1.5rem}.g-xl-4,.gy-xl-4{--bs-gutter-y:1.5rem}.g-xl-5,.gx-xl-5{--bs-gutter-x:3rem}.g-xl-5,.gy-xl-5{--bs-gutter-y:3rem}}@media (min-width:1400px){.col-xxl{flex:1 0 0%}.row-cols-xxl-auto>*{flex:0 0 auto;width:auto}.row-cols-xxl-1>*{flex:0 0 auto;width:100%}.row-cols-xxl-2>*{flex:0 0 auto;width:50%}.row-cols-xxl-3>*{flex:0 0 auto;width:33.3333333333%}.row-cols-xxl-4>*{flex:0 0 auto;width:25%}.row-cols-xxl-5>*{flex:0 0 auto;width:20%}.row-cols-xxl-6>*{flex:0 0 auto;width:16.6666666667%}.col-xxl-auto{flex:0 0 auto;width:auto}.col-xxl-1{flex:0 0 auto;width:8.33333333%}.col-xxl-2{flex:0 0 auto;width:16.66666667%}.col-xxl-3{flex:0 0 auto;width:25%}.col-xxl-4{flex:0 0 auto;width:33.33333333%}.col-xxl-5{flex:0 0 auto;width:41.66666667%}.col-xxl-6{flex:0 0 auto;width:50%}.col-xxl-7{flex:0 0 auto;width:58.33333333%}.col-xxl-8{flex:0 0 auto;width:66.66666667%}.col-xxl-9{flex:0 0 auto;width:75%}.col-xxl-10{flex:0 0 auto;width:83.33333333%}.col-xxl-11{flex:0 0 auto;width:91.66666667%}.col-xxl-12{flex:0 0 auto;width:100%}.offset-xxl-0{margin-left:0}.offset-xxl-1{margin-left:8.33333333%}.offset-xxl-2{margin-left:16.66666667%}.offset-xxl-3{margin-left:25%}.offset-xxl-4{margin-left:33.33333333%}.offset-xxl-5{margin-left:41.66666667%}.offset-xxl-6{margin-left:50%}.offset-xxl-7{margin-left:58.33333333%}.offset-xxl-8{margin-left:66.66666667%}.offset-xxl-9{margin-left:75%}.offset-xxl-10{margin-left:83.33333333%}.offset-xxl-11{margin-left:91.66666667%}.g-xxl-0,.gx-xxl-0{--bs-gutter-x:0}.g-xxl-0,.gy-xxl-0{--bs-gutter-y:0}.g-xxl-1,.gx-xxl-1{--bs-gutter-x:0.25rem}.g-xxl-1,.gy-xxl-1{--bs-gutter-y:0.25rem}.g-xxl-2,.gx-xxl-2{--bs-gutter-x:0.5rem}.g-xxl-2,.gy-xxl-2{--bs-gutter-y:0.5rem}.g-xxl-3,.gx-xxl-3{--bs-gutter-x:1rem}.g-xxl-3,.gy-xxl-3{--bs-gutter-y:1rem}.g-xxl-4,.gx-xxl-4{--bs-gutter-x:1.5rem}.g-xxl-4,.gy-xxl-4{--bs-gutter-y:1.5rem}.g-xxl-5,.gx-xxl-5{--bs-gutter-x:3rem}.g-xxl-5,.gy-xxl-5{--bs-gutter-y:3rem}}.table{--bs-table-bg:transparent;--bs-table-accent-bg:transparent;--bs-table-striped-color:#212529;--bs-table-striped-bg:rgba(0, 0, 0, 0.05);--bs-table-active-color:#212529;--bs-table-active-bg:rgba(0, 0, 0, 0.1);--bs-table-hover-color:#212529;--bs-table-hover-bg:rgba(0, 0, 0, 0.075);width:100%;margin-bottom:1rem;color:#212529;vertical-align:top;border-color:#dee2e6}.table>:not(caption)>*>*{padding:.5rem .5rem;background-color:var(--bs-table-bg);border-bottom-width:1px;box-shadow:inset 0 0 0 9999px var(--bs-table-accent-bg)}.table>tbody{vertical-align:inherit}.table>thead{vertical-align:bottom}.table>:not(:first-child){border-top:2px solid currentColor}.caption-top{caption-side:top}.table-sm>:not(caption)>*>*{padding:.25rem .25rem}.table-bordered>:not(caption)>*{border-width:1px 0}.table-bordered>:not(caption)>*>*{border-width:0 1px}.table-borderless>:not(caption)>*>*{border-bottom-width:0}.table-borderless>:not(:first-child){border-top-width:0}.table-striped>tbody>tr:nth-of-type(odd)>*{--bs-table-accent-bg:var(--bs-table-striped-bg);color:var(--bs-table-striped-color)}.table-active{--bs-table-accent-bg:var(--bs-table-active-bg);color:var(--bs-table-active-color)}.table-hover>tbody>tr:hover>*{--bs-table-accent-bg:var(--bs-table-hover-bg);color:var(--bs-table-hover-color)}.table-primary{--bs-table-bg:#cfe2ff;--bs-table-striped-bg:#c5d7f2;--bs-table-striped-color:#000;--bs-table-active-bg:#bacbe6;--bs-table-active-color:#000;--bs-table-hover-bg:#bfd1ec;--bs-table-hover-color:#000;color:#000;border-color:#bacbe6}.table-secondary{--bs-table-bg:#e2e3e5;--bs-table-striped-bg:#d7d8da;--bs-table-striped-color:#000;--bs-table-active-bg:#cbccce;--bs-table-active-color:#000;--bs-table-hover-bg:#d1d2d4;--bs-table-hover-color:#000;color:#000;border-color:#cbccce}.table-success{--bs-table-bg:#d1e7dd;--bs-table-striped-bg:#c7dbd2;--bs-table-striped-color:#000;--bs-table-active-bg:#bcd0c7;--bs-table-active-color:#000;--bs-table-hover-bg:#c1d6cc;--bs-table-hover-color:#000;color:#000;border-color:#bcd0c7}.table-info{--bs-table-bg:#cff4fc;--bs-table-striped-bg:#c5e8ef;--bs-table-striped-color:#000;--bs-table-active-bg:#badce3;--bs-table-active-color:#000;--bs-table-hover-bg:#bfe2e9;--bs-table-hover-color:#000;color:#000;border-color:#badce3}.table-warning{--bs-table-bg:#fff3cd;--bs-table-striped-bg:#f2e7c3;--bs-table-striped-color:#000;--bs-table-active-bg:#e6dbb9;--bs-table-active-color:#000;--bs-table-hover-bg:#ece1be;--bs-table-hover-color:#000;color:#000;border-color:#e6dbb9}.table-danger{--bs-table-bg:#f8d7da;--bs-table-striped-bg:#eccccf;--bs-table-striped-color:#000;--bs-table-active-bg:#dfc2c4;--bs-table-active-color:#000;--bs-table-hover-bg:#e5c7ca;--bs-table-hover-color:#000;color:#000;border-color:#dfc2c4}.table-light{--bs-table-bg:#f8f9fa;--bs-table-striped-bg:#ecedee;--bs-table-striped-color:#000;--bs-table-active-bg:#dfe0e1;--bs-table-active-color:#000;--bs-table-hover-bg:#e5e6e7;--bs-table-hover-color:#000;color:#000;border-color:#dfe0e1}.table-dark{--bs-table-bg:#212529;--bs-table-striped-bg:#2c3034;--bs-table-striped-color:#fff;--bs-table-active-bg:#373b3e;--bs-table-active-color:#fff;--bs-table-hover-bg:#323539;--bs-table-hover-color:#fff;color:#fff;border-color:#373b3e}.table-responsive{overflow-x:auto;-webkit-overflow-scrolling:touch}@media (max-width:575.98px){.table-responsive-sm{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:767.98px){.table-responsive-md{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:991.98px){.table-responsive-lg{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1199.98px){.table-responsive-xl{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1399.98px){.table-responsive-xxl{overflow-x:auto;-webkit-overflow-scrolling:touch}}.form-label{margin-bottom:.5rem}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem}.form-text{margin-top:.25rem;font-size:.875em;color:#6c757d}.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#000;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control[type=file]{overflow:hidden}.form-control[type=file]:not(:disabled):not([readonly]){cursor:pointer}.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-control::-webkit-date-and-time-value{height:1.5em}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-control::file-selector-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}.form-control::file-selector-button{transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control:hover:not(:disabled):not([readonly])::file-selector-button{background-color:#dde0e3}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control-plaintext{display:block;width:100%;padding:.375rem 0;margin-bottom:0;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{min-height:calc(1.5em + .5rem + 2px);padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::file-selector-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-lg{min-height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::file-selector-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}textarea.form-control{min-height:calc(1.5em + .75rem + 2px)}textarea.form-control-sm{min-height:calc(1.5em + .5rem + 2px)}textarea.form-control-lg{min-height:calc(1.5em + 1rem + 2px)}.form-control-color{width:3rem;height:auto;padding:.375rem}.form-control-color:not(:disabled):not([readonly]){cursor:pointer}.form-control-color::-moz-color-swatch{height:1.5em;border-radius:.25rem}.form-control-color::-webkit-color-swatch{height:1.5em;border-radius:.25rem}.form-select{display:block;width:100%;padding:.375rem 2.25rem .375rem .75rem;-moz-padding-start:calc(0.75rem - 3px);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right .75rem center;background-size:16px 12px;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-select{transition:none}}.form-select:focus{border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-select[multiple],.form-select[size]:not([size="1"]){padding-right:.75rem;background-image:none}.form-select:disabled{background-color:#e9ecef}.form-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #212529}.form-select-sm{padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem;border-radius:.2rem}.form-select-lg{padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem;border-radius:.3rem}.form-check{display:block;min-height:1.5rem;padding-left:1.5em;margin-bottom:.125rem}.form-check .form-check-input{float:left;margin-left:-1.5em}.form-check-input{width:1em;height:1em;margin-top:.25em;vertical-align:top;background-color:#fff;background-repeat:no-repeat;background-position:center;background-size:contain;border:1px solid rgba(0,0,0,.25);-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact}.form-check-input[type=checkbox]{border-radius:.25em}.form-check-input[type=radio]{border-radius:50%}.form-check-input:active{filter:brightness(90%)}.form-check-input:focus{border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-check-input:checked{background-color:brown;border-color:brown}.form-check-input:checked[type=checkbox]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e")}.form-check-input:checked[type=radio]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")}.form-check-input[type=checkbox]:indeterminate{background-color:brown;border-color:brown;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")}.form-check-input:disabled{pointer-events:none;filter:none;opacity:.5}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{opacity:.5}.form-switch{padding-left:2.5em}.form-switch .form-check-input{width:2em;margin-left:-2.5em;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");background-position:left center;border-radius:2em;transition:background-position .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-switch .form-check-input{transition:none}}.form-switch .form-check-input:focus{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e")}.form-switch .form-check-input:checked{background-position:right center;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.form-check-inline{display:inline-block;margin-right:1rem}.btn-check{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.btn-check:disabled+.btn,.btn-check[disabled]+.btn{pointer-events:none;filter:none;opacity:.65}.form-range{width:100%;height:1.5rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.form-range:focus{outline:0}.form-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range::-moz-focus-outer{border:0}.form-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:brown;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.form-range::-webkit-slider-thumb:active{background-color:#b6d4fe}.form-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range::-moz-range-thumb{width:1rem;height:1rem;background-color:brown;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-moz-range-thumb{-moz-transition:none;transition:none}}.form-range::-moz-range-thumb:active{background-color:#b6d4fe}.form-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range:disabled{pointer-events:none}.form-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.form-range:disabled::-moz-range-thumb{background-color:#adb5bd}.form-floating{position:sticky}.form-floating>.form-control,.form-floating>.form-select{height:calc(3.5rem + 2px);line-height:1.25}.form-floating>label{position:absolute;top:0;left:0;height:100%;padding:1rem .75rem;pointer-events:none;border:1px solid transparent;transform-origin:0 0;transition:opacity .1s ease-in-out,transform .1s ease-in-out}@media (prefers-reduced-motion:reduce){.form-floating>label{transition:none}}.form-floating>.form-control{padding:1rem .75rem}.form-floating>.form-control::-moz-placeholder{color:transparent}.form-floating>.form-control::placeholder{color:transparent}.form-floating>.form-control:not(:-moz-placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:focus,.form-floating>.form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:-webkit-autofill{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-select{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:not(:-moz-placeholder-shown)~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:focus~label,.form-floating>.form-control:not(:placeholder-shown)~label,.form-floating>.form-select~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:-webkit-autofill~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.input-group{position:sticky;display:flex;flex-wrap:wrap;align-items:stretch;width:100%}.input-group>.form-control,.input-group>.form-select{position:sticky;flex:1 1 auto;width:1%;min-width:0}.input-group>.form-control:focus,.input-group>.form-select:focus{z-index:3}.input-group .btn{position:sticky;z-index:2}.input-group .btn:focus{z-index:3}.input-group-text{display:flex;align-items:center;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-lg>.btn,.input-group-lg>.form-control,.input-group-lg>.form-select,.input-group-lg>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.input-group-sm>.btn,.input-group-sm>.form-control,.input-group-sm>.form-select,.input-group-sm>.input-group-text{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.input-group-lg>.form-select,.input-group-sm>.form-select{padding-right:3rem}.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback){margin-left:-1px;border-top-left-radius:0;border-bottom-left-radius:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#198754}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(25,135,84,.9);border-radius:.25rem}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#198754;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#198754;box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-valid,.was-validated .form-select:valid{border-color:#198754}.form-select.is-valid:not([multiple]):not([size]),.form-select.is-valid:not([multiple])[size="1"],.was-validated .form-select:valid:not([multiple]):not([size]),.was-validated .form-select:valid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-valid:focus,.was-validated .form-select:valid:focus{border-color:#198754;box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid,.was-validated .form-check-input:valid{border-color:#198754}.form-check-input.is-valid:checked,.was-validated .form-check-input:valid:checked{background-color:#198754}.form-check-input.is-valid:focus,.was-validated .form-check-input:valid:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#198754}.form-check-inline .form-check-input~.valid-feedback{margin-left:.5em}.input-group .form-control.is-valid,.input-group .form-select.is-valid,.was-validated .input-group .form-control:valid,.was-validated .input-group .form-select:valid{z-index:1}.input-group .form-control.is-valid:focus,.input-group .form-select.is-valid:focus,.was-validated .input-group .form-control:valid:focus,.was-validated .input-group .form-select:valid:focus{z-index:3}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-invalid,.was-validated .form-select:invalid{border-color:#dc3545}.form-select.is-invalid:not([multiple]):not([size]),.form-select.is-invalid:not([multiple])[size="1"],.was-validated .form-select:invalid:not([multiple]):not([size]),.was-validated .form-select:invalid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-invalid:focus,.was-validated .form-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid,.was-validated .form-check-input:invalid{border-color:#dc3545}.form-check-input.is-invalid:checked,.was-validated .form-check-input:invalid:checked{background-color:#dc3545}.form-check-input.is-invalid:focus,.was-validated .form-check-input:invalid:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-inline .form-check-input~.invalid-feedback{margin-left:.5em}.input-group .form-control.is-invalid,.input-group .form-select.is-invalid,.was-validated .input-group .form-control:invalid,.was-validated .input-group .form-select:invalid{z-index:2}.input-group .form-control.is-invalid:focus,.input-group .form-select.is-invalid:focus,.was-validated .input-group .form-control:invalid:focus,.was-validated .input-group .form-select:invalid:focus{z-index:3}.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529}.btn-check:focus+.btn,.btn:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.btn.disabled,.btn:disabled,fieldset:disabled .btn{pointer-events:none;opacity:.65}.btn-primary{color:#fff;background-color:brown;border-color:brown}.btn-primary:hover{color:#fff;background-color:#0b5ed7;border-color:#0a58ca}.btn-check:focus+.btn-primary,.btn-primary:focus{color:#fff;background-color:#0b5ed7;border-color:#0a58ca;box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-check:active+.btn-primary,.btn-check:checked+.btn-primary,.btn-primary.active,.btn-primary:active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0a58ca;border-color:#0a53be}.btn-check:active+.btn-primary:focus,.btn-check:checked+.btn-primary:focus,.btn-primary.active:focus,.btn-primary:active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:brown;border-color:brown}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5c636a;border-color:#565e64}.btn-check:focus+.btn-secondary,.btn-secondary:focus{color:#fff;background-color:#5c636a;border-color:#565e64;box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-check:active+.btn-secondary,.btn-check:checked+.btn-secondary,.btn-secondary.active,.btn-secondary:active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#565e64;border-color:#51585e}.btn-check:active+.btn-secondary:focus,.btn-check:checked+.btn-secondary:focus,.btn-secondary.active:focus,.btn-secondary:active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-success{color:#fff;background-color:#198754;border-color:#198754}.btn-success:hover{color:#fff;background-color:#157347;border-color:#146c43}.btn-check:focus+.btn-success,.btn-success:focus{color:#fff;background-color:#157347;border-color:#146c43;box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-check:active+.btn-success,.btn-check:checked+.btn-success,.btn-success.active,.btn-success:active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#146c43;border-color:#13653f}.btn-check:active+.btn-success:focus,.btn-check:checked+.btn-success:focus,.btn-success.active:focus,.btn-success:active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#198754;border-color:#198754}.btn-info{color:#000;background-color:#bf3b35;border-color:#bf3b35}.btn-info:hover{color:#000;background-color:#31d2f2;border-color:#25cff2}.btn-check:focus+.btn-info,.btn-info:focus{color:#000;background-color:#31d2f2;border-color:#25cff2;box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-check:active+.btn-info,.btn-check:checked+.btn-info,.btn-info.active,.btn-info:active,.show>.btn-info.dropdown-toggle{color:#000;background-color:#3dd5f3;border-color:#25cff2}.btn-check:active+.btn-info:focus,.btn-check:checked+.btn-info:focus,.btn-info.active:focus,.btn-info:active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-info.disabled,.btn-info:disabled{color:#000;background-color:#bf3b35;border-color:#bf3b35}.btn-warning{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#000;background-color:#ffca2c;border-color:#ffc720}.btn-check:focus+.btn-warning,.btn-warning:focus{color:#000;background-color:#ffca2c;border-color:#ffc720;box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-check:active+.btn-warning,.btn-check:checked+.btn-warning,.btn-warning.active,.btn-warning:active,.show>.btn-warning.dropdown-toggle{color:#000;background-color:#ffcd39;border-color:#ffc720}.btn-check:active+.btn-warning:focus,.btn-check:checked+.btn-warning:focus,.btn-warning.active:focus,.btn-warning:active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#bb2d3b;border-color:#b02a37}.btn-check:focus+.btn-danger,.btn-danger:focus{color:#fff;background-color:#bb2d3b;border-color:#b02a37;box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-check:active+.btn-danger,.btn-check:checked+.btn-danger,.btn-danger.active,.btn-danger:active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#b02a37;border-color:#a52834}.btn-check:active+.btn-danger:focus,.btn-check:checked+.btn-danger:focus,.btn-danger.active:focus,.btn-danger:active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-light{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:focus+.btn-light,.btn-light:focus{color:#000;background-color:#f9fafb;border-color:#f9fafb;box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-check:active+.btn-light,.btn-check:checked+.btn-light,.btn-light.active,.btn-light:active,.show>.btn-light.dropdown-toggle{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:active+.btn-light:focus,.btn-check:checked+.btn-light:focus,.btn-light.active:focus,.btn-light:active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-light.disabled,.btn-light:disabled{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-dark{color:#fff;background-color:#212529;border-color:#212529}.btn-dark:hover{color:#fff;background-color:#1c1f23;border-color:#1a1e21}.btn-check:focus+.btn-dark,.btn-dark:focus{color:#fff;background-color:#1c1f23;border-color:#1a1e21;box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-check:active+.btn-dark,.btn-check:checked+.btn-dark,.btn-dark.active,.btn-dark:active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1a1e21;border-color:#191c1f}.btn-check:active+.btn-dark:focus,.btn-check:checked+.btn-dark:focus,.btn-dark.active:focus,.btn-dark:active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#212529;border-color:#212529}.btn-outline-primary{color:brown;border-color:brown}.btn-outline-primary:hover{color:#fff;background-color:brown;border-color:brown}.btn-check:focus+.btn-outline-primary,.btn-outline-primary:focus{box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-check:active+.btn-outline-primary,.btn-check:checked+.btn-outline-primary,.btn-outline-primary.active,.btn-outline-primary.dropdown-toggle.show,.btn-outline-primary:active{color:#fff;background-color:brown;border-color:brown}.btn-check:active+.btn-outline-primary:focus,.btn-check:checked+.btn-outline-primary:focus,.btn-outline-primary.active:focus,.btn-outline-primary.dropdown-toggle.show:focus,.btn-outline-primary:active:focus{box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:brown;background-color:transparent}.btn-outline-secondary{color:#fff;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:focus+.btn-outline-secondary,.btn-outline-secondary:focus{box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-check:active+.btn-outline-secondary,.btn-check:checked+.btn-outline-secondary,.btn-outline-secondary.active,.btn-outline-secondary.dropdown-toggle.show,.btn-outline-secondary:active{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:active+.btn-outline-secondary:focus,.btn-check:checked+.btn-outline-secondary:focus,.btn-outline-secondary.active:focus,.btn-outline-secondary.dropdown-toggle.show:focus,.btn-outline-secondary:active:focus{box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-success{color:#198754;border-color:#198754}.btn-outline-success:hover{color:#fff;background-color:#198754;border-color:#198754}.btn-check:focus+.btn-outline-success,.btn-outline-success:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-check:active+.btn-outline-success,.btn-check:checked+.btn-outline-success,.btn-outline-success.active,.btn-outline-success.dropdown-toggle.show,.btn-outline-success:active{color:#fff;background-color:#198754;border-color:#198754}.btn-check:active+.btn-outline-success:focus,.btn-check:checked+.btn-outline-success:focus,.btn-outline-success.active:focus,.btn-outline-success.dropdown-toggle.show:focus,.btn-outline-success:active:focus{box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#198754;background-color:transparent}.btn-outline-info{color:#bf3b35;border-color:#bf3b35}.btn-outline-info:hover{color:#000;background-color:#bf3b35;border-color:#bf3b35}.btn-check:focus+.btn-outline-info,.btn-outline-info:focus{box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-check:active+.btn-outline-info,.btn-check:checked+.btn-outline-info,.btn-outline-info.active,.btn-outline-info.dropdown-toggle.show,.btn-outline-info:active{color:#000;background-color:#bf3b35;border-color:#bf3b35}.btn-check:active+.btn-outline-info:focus,.btn-check:checked+.btn-outline-info:focus,.btn-outline-info.active:focus,.btn-outline-info.dropdown-toggle.show:focus,.btn-outline-info:active:focus{box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#bf3b35;background-color:transparent}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:focus+.btn-outline-warning,.btn-outline-warning:focus{box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-check:active+.btn-outline-warning,.btn-check:checked+.btn-outline-warning,.btn-outline-warning.active,.btn-outline-warning.dropdown-toggle.show,.btn-outline-warning:active{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:active+.btn-outline-warning:focus,.btn-check:checked+.btn-outline-warning:focus,.btn-outline-warning.active:focus,.btn-outline-warning.dropdown-toggle.show:focus,.btn-outline-warning:active:focus{box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:focus+.btn-outline-danger,.btn-outline-danger:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-check:active+.btn-outline-danger,.btn-check:checked+.btn-outline-danger,.btn-outline-danger.active,.btn-outline-danger.dropdown-toggle.show,.btn-outline-danger:active{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:active+.btn-outline-danger:focus,.btn-check:checked+.btn-outline-danger:focus,.btn-outline-danger.active:focus,.btn-outline-danger.dropdown-toggle.show:focus,.btn-outline-danger:active:focus{box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:focus+.btn-outline-light,.btn-outline-light:focus{box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-check:active+.btn-outline-light,.btn-check:checked+.btn-outline-light,.btn-outline-light.active,.btn-outline-light.dropdown-toggle.show,.btn-outline-light:active{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:active+.btn-outline-light:focus,.btn-check:checked+.btn-outline-light:focus,.btn-outline-light.active:focus,.btn-outline-light.dropdown-toggle.show:focus,.btn-outline-light:active:focus{box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-dark{color:#212529;border-color:#212529}.btn-outline-dark:hover{color:#fff;background-color:#212529;border-color:#212529}.btn-check:focus+.btn-outline-dark,.btn-outline-dark:focus{box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-check:active+.btn-outline-dark,.btn-check:checked+.btn-outline-dark,.btn-outline-dark.active,.btn-outline-dark.dropdown-toggle.show,.btn-outline-dark:active{color:#fff;background-color:#212529;border-color:#212529}.btn-check:active+.btn-outline-dark:focus,.btn-check:checked+.btn-outline-dark:focus,.btn-outline-dark.active:focus,.btn-outline-dark.dropdown-toggle.show:focus,.btn-outline-dark:active:focus{box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#212529;background-color:transparent}.btn-link{font-weight:400;color:brown;text-decoration:underline}.btn-link:hover{color:#0a58ca}.btn-link.disabled,.btn-link:disabled{color:#6c757d}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.collapsing.collapse-horizontal{width:0;height:auto;transition:width .35s ease}@media (prefers-reduced-motion:reduce){.collapsing.collapse-horizontal{transition:none}}.dropdown,.dropend,.dropstart,.dropup{position:sticky}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;font-size:1rem;color:#fff;text-align:left;list-style:none;background-color:#000;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu[data-bs-popper]{top:100%;left:0;margin-top:.125rem}.dropdown-menu-start{--bs-position:start}.dropdown-menu-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-end{--bs-position:end}.dropdown-menu-end[data-bs-popper]{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-start{--bs-position:start}.dropdown-menu-sm-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-sm-end{--bs-position:end}.dropdown-menu-sm-end[data-bs-popper]{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-start{--bs-position:start}.dropdown-menu-md-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-md-end{--bs-position:end}.dropdown-menu-md-end[data-bs-popper]{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-start{--bs-position:start}.dropdown-menu-lg-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-lg-end{--bs-position:end}.dropdown-menu-lg-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-start{--bs-position:start}.dropdown-menu-xl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xl-end{--bs-position:end}.dropdown-menu-xl-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1400px){.dropdown-menu-xxl-start{--bs-position:start}.dropdown-menu-xxl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xxl-end{--bs-position:end}.dropdown-menu-xxl-end[data-bs-popper]{right:0;left:auto}}.dropup .dropdown-menu[data-bs-popper]{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-menu[data-bs-popper]{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropend .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropend .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-toggle::after{vertical-align:0}.dropstart .dropdown-menu[data-bs-popper]{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropstart .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:""}.dropstart .dropdown-toggle::after{display:none}.dropstart .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropstart .dropdown-toggle:empty::after{margin-left:0}.dropstart .dropdown-toggle::before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid rgba(0,0,0,.15)}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#fff;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:#5b5757;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#1e2125;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:brown}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1rem;color:#212529}.dropdown-menu-dark{color:#dee2e6;background-color:#343a40;border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item{color:#dee2e6}.dropdown-menu-dark .dropdown-item:focus,.dropdown-menu-dark .dropdown-item:hover{color:#fff;background-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item.active,.dropdown-menu-dark .dropdown-item:active{color:#fff;background-color:brown}.dropdown-menu-dark .dropdown-item.disabled,.dropdown-menu-dark .dropdown-item:disabled{color:#adb5bd}.dropdown-menu-dark .dropdown-divider{border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item-text{color:#dee2e6}.dropdown-menu-dark .dropdown-header{color:#adb5bd}.btn-group,.btn-group-vertical{position:sticky;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:sticky;flex:1 1 auto}.btn-group-vertical>.btn-check:checked+.btn,.btn-group-vertical>.btn-check:focus+.btn,.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn-check:checked+.btn,.btn-group>.btn-check:focus+.btn,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:1}.btn-toolbar{display:flex;flex-wrap:wrap;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:nth-child(n+3),.btn-group>:not(.btn-check)+.btn{border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropend .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropstart .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{flex-direction:column;align-items:flex-start;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn~.btn{border-top-left-radius:0;border-top-right-radius:0}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem;color:brown;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out}@media (prefers-reduced-motion:reduce){.nav-link{transition:none}}.nav-link:focus,.nav-link:hover{color:#0a58ca}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-link{margin-bottom:-1px;background:0 0;border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6;isolation:isolate}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{background:0 0;border:0;border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:brown}.nav-fill .nav-item,.nav-fill>.nav-link{flex:1 1 auto;text-align:center}.nav-justified .nav-item,.nav-justified>.nav-link{flex-basis:0;flex-grow:1;text-align:center}.nav-fill .nav-item .nav-link,.nav-justified .nav-item .nav-link{width:100%}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:sticky;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding-top:.5rem;padding-bottom:.5rem}.navbar>.container,.navbar>.container-fluid,.navbar>.container-lg,.navbar>.container-md,.navbar>.container-sm,.navbar>.container-xl,.navbar>.container-xxl{display:flex;flex-wrap:inherit;align-items:center;justify-content:space-between}.navbar-brand{padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;text-decoration:none;white-space:nowrap}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static}.navbar-text{padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;transition:box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.navbar-toggler{transition:none}}.navbar-toggler:hover{text-decoration:none}.navbar-toggler:focus{text-decoration:none;outline:0;box-shadow:0 0 0 .25rem}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;background-repeat:no-repeat;background-position:center;background-size:100%}.navbar-nav-scroll{max-height:var(--bs-scroll-height,75vh);overflow-y:auto}@media (min-width:576px){.navbar-expand-sm{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm .navbar-nav-scroll{overflow:visible}.navbar-expand-sm .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}.navbar-expand-sm .offcanvas-header{display:none}.navbar-expand-sm .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-sm .offcanvas-bottom,.navbar-expand-sm .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-sm .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:768px){.navbar-expand-md{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-md .navbar-nav{flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md .navbar-nav-scroll{overflow:visible}.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}.navbar-expand-md .offcanvas-header{display:none}.navbar-expand-md .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-md .offcanvas-bottom,.navbar-expand-md .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-md .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:992px){.navbar-expand-lg{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg .navbar-nav-scroll{overflow:visible}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}.navbar-expand-lg .offcanvas-header{display:none}.navbar-expand-lg .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-lg .offcanvas-bottom,.navbar-expand-lg .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-lg .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:1200px){.navbar-expand-xl{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-xl .navbar-nav{flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl .navbar-nav-scroll{overflow:visible}.navbar-expand-xl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}.navbar-expand-xl .offcanvas-header{display:none}.navbar-expand-xl .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-xl .offcanvas-bottom,.navbar-expand-xl .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-xl .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:1400px){.navbar-expand-xxl{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-xxl .navbar-nav{flex-direction:row}.navbar-expand-xxl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xxl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xxl .navbar-nav-scroll{overflow:visible}.navbar-expand-xxl .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-xxl .navbar-toggler{display:none}.navbar-expand-xxl .offcanvas-header{display:none}.navbar-expand-xxl .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand-xxl .offcanvas-bottom,.navbar-expand-xxl .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand-xxl .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}.navbar-expand{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand .navbar-nav{flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand .navbar-nav-scroll{overflow:visible}.navbar-expand .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-expand .offcanvas-header{display:none}.navbar-expand .offcanvas{position:inherit;bottom:0;z-index:1000;flex-grow:1;visibility:visible!important;background-color:transparent;border-right:0;border-left:0;transition:none;transform:none}.navbar-expand .offcanvas-bottom,.navbar-expand .offcanvas-top{height:auto;border-top:0;border-bottom:0}.navbar-expand .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.55)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.55);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.55)}.navbar-light .navbar-text a,.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(0,0,0,.55)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(0,0,0,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.25)}.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(0,0,0,.55);border-color:rgba(0,0,0,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(0,0,0,.55)}.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:sticky;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#1c1e21;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card>.card-header+.list-group,.card>.list-group+.card-footer{border-top:0}.card-body{flex:1 1 auto;padding:1rem 1rem}.card-title{margin-bottom:.5rem}.card-subtitle{margin-top:-.25rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link+.card-link{margin-left:1rem}.card-header{padding:.5rem 1rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-footer{padding:.5rem 1rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.5rem;margin-bottom:-.5rem;margin-left:-.5rem;border-bottom:0}.card-header-pills{margin-right:-.5rem;margin-left:-.5rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1rem;border-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom,.card-img-top{width:100%}.card-img,.card-img-top{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-group>.card{margin-bottom:.75rem}@media (min-width:576px){.card-group{display:flex;flex-flow:row wrap}.card-group>.card{flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.accordion-button{position:sticky;display:flex;align-items:center;width:100%;padding:1rem 1.25rem;font-size:1rem;color:#212529;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease}@media (prefers-reduced-motion:reduce){.accordion-button{transition:none}}.accordion-button:not(.collapsed){color:#0c63e4;background-color:#e7f1ff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.125)}.accordion-button:not(.collapsed)::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");transform:rotate(-180deg)}.accordion-button::after{flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-size:1.25rem;transition:transform .2s ease-in-out}@media (prefers-reduced-motion:reduce){.accordion-button::after{transition:none}}.accordion-button:hover{z-index:2}.accordion-button:focus{z-index:3;border-color:#86b7fe;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.accordion-header{margin-bottom:0}.accordion-item{background-color:#fff;border:1px solid rgba(0,0,0,.125)}.accordion-item:first-of-type{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.accordion-item:first-of-type .accordion-button{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.accordion-item:not(:first-of-type){border-top:0}.accordion-item:last-of-type{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-body{padding:1rem 1.25rem}.accordion-flush .accordion-collapse{border-width:0}.accordion-flush .accordion-item{border-right:0;border-left:0;border-radius:0}.accordion-flush .accordion-item:first-child{border-top:0}.accordion-flush .accordion-item:last-child{border-bottom:0}.accordion-flush .accordion-item .accordion-button{border-radius:0}.breadcrumb{display:flex;flex-wrap:wrap;padding:0 0;margin-bottom:1rem;list-style:none}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{float:left;padding-right:.5rem;color:#6c757d;content:var(--bs-breadcrumb-divider, "/")}.breadcrumb-item.active{color:#6c757d}.pagination{display:flex;padding-left:0;list-style:none}.page-link{position:sticky;display:block;color:brown;text-decoration:none;background-color:#fff;border:1px solid #dee2e6;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.page-link{transition:none}}.page-link:hover{z-index:2;color:#0a58ca;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;color:#0a58ca;background-color:#e9ecef;outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.page-item:not(:first-child) .page-link{margin-left:-1px}.page-item.active .page-link{z-index:3;color:#fff;background-color:brown;border-color:brown}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;background-color:#fff;border-color:#dee2e6}.page-link{padding:.375rem .75rem}.page-item:first-child .page-link{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.35em .65em;font-size:.75em;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:sticky;top:-1px}.alert{position:sticky;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:3rem}.alert-dismissible .btn-close{position:absolute;top:0;right:0;z-index:2;padding:1.25rem 1rem}.alert-primary{color:#084298;background-color:#cfe2ff;border-color:#b6d4fe}.alert-primary .alert-link{color:#06357a}.alert-secondary{color:#41464b;background-color:#e2e3e5;border-color:#d3d6d8}.alert-secondary .alert-link{color:#34383c}.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc}.alert-success .alert-link{color:#0c4128}.alert-info{color:#055160;background-color:#cff4fc;border-color:#b6effb}.alert-info .alert-link{color:#04414d}.alert-warning{color:#664d03;background-color:#fff3cd;border-color:#ffecb5}.alert-warning .alert-link{color:#523e02}.alert-danger{color:#842029;background-color:#f8d7da;border-color:#f5c2c7}.alert-danger .alert-link{color:#6a1a21}.alert-light{color:#636464;background-color:#fefefe;border-color:#fdfdfe}.alert-light .alert-link{color:#4f5050}.alert-dark{color:#141619;background-color:#d3d3d4;border-color:#bcbebf}.alert-dark .alert-link{color:#101214}@-webkit-keyframes progress-bar-stripes{0%{background-position-x:1rem}}@keyframes progress-bar-stripes{0%{background-position-x:1rem}}.progress{display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:flex;flex-direction:column;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:brown;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(0,0,0,.15) 25%,transparent 25%,transparent 50%,rgba(0,0,0,.15) 50%,rgba(0,0,0,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:1s linear infinite progress-bar-stripes;animation:1s linear infinite progress-bar-stripes}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.list-group{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-numbered{list-style-type:none;counter-reset:section}.list-group-numbered>li::before{content:counters(section, ".") ". ";counter-increment:section}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:sticky;display:block;padding:.5rem 1rem;color:#212529;text-decoration:none;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:brown;border-color:brown}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{flex-direction:row}.list-group-horizontal>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal>.list-group-item.active{margin-top:0}.list-group-horizontal>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{flex-direction:row}.list-group-horizontal-sm>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm>.list-group-item.active{margin-top:0}.list-group-horizontal-sm>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{flex-direction:row}.list-group-horizontal-md>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md>.list-group-item.active{margin-top:0}.list-group-horizontal-md>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{flex-direction:row}.list-group-horizontal-lg>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg>.list-group-item.active{margin-top:0}.list-group-horizontal-lg>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1200px){.list-group-horizontal-xl{flex-direction:row}.list-group-horizontal-xl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl>.list-group-item.active{margin-top:0}.list-group-horizontal-xl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1400px){.list-group-horizontal-xxl{flex-direction:row}.list-group-horizontal-xxl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xxl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xxl>.list-group-item.active{margin-top:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush{border-radius:0}.list-group-flush>.list-group-item{border-width:0 0 1px}.list-group-flush>.list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#084298;background-color:#cfe2ff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#084298;background-color:#bacbe6}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#084298;border-color:#084298}.list-group-item-secondary{color:#41464b;background-color:#e2e3e5}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#41464b;background-color:#cbccce}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#41464b;border-color:#41464b}.list-group-item-success{color:#0f5132;background-color:#d1e7dd}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#0f5132;background-color:#bcd0c7}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#0f5132;border-color:#0f5132}.list-group-item-info{color:#055160;background-color:#cff4fc}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#055160;background-color:#badce3}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#055160;border-color:#055160}.list-group-item-warning{color:#664d03;background-color:#fff3cd}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#664d03;background-color:#e6dbb9}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#664d03;border-color:#664d03}.list-group-item-danger{color:#842029;background-color:#f8d7da}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#842029;background-color:#dfc2c4}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#842029;border-color:#842029}.list-group-item-light{color:#636464;background-color:#fefefe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#636464;background-color:#e5e5e5}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#636464;border-color:#636464}.list-group-item-dark{color:#141619;background-color:#d3d3d4}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#141619;background-color:#bebebf}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#141619;border-color:#141619}.btn-close{box-sizing:content-box;width:1em;height:1em;padding:.25em .25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:.25rem;opacity:.5}.btn-close:hover{color:#000;text-decoration:none;opacity:.75}.btn-close:focus{outline:0;box-shadow:0 0 0 .25rem rgba(13,110,253,.25);opacity:1}.btn-close.disabled,.btn-close:disabled{pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;opacity:.25}.btn-close-white{filter:invert(1) grayscale(100%) brightness(200%)}.toast{width:350px;max-width:100%;font-size:.875rem;pointer-events:auto;background-color:rgba(0,0,0,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .5rem 1rem rgba(0,0,0,.15);border-radius:.25rem}.toast.showing{opacity:0}.toast:not(.show){display:none}.toast-container{width:-webkit-max-content;width:-moz-max-content;width:max-content;max-width:100%;pointer-events:none}.toast-container>:not(:last-child){margin-bottom:.75rem}.toast-header{display:flex;align-items:center;padding:.5rem .75rem;color:#6c757d;background-color:rgba(0,0,0,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05);border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.toast-header .btn-close{margin-right:-.375rem;margin-left:.75rem}.toast-body{padding:.75rem;word-wrap:break-word}.modal{position:fixed;top:0;left:0;z-index:1055;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:sticky;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal.modal-static .modal-dialog{transform:scale(1.02)}.modal-dialog-scrollable{height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:100%;overflow:hidden}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-content{position:sticky;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#1a1a1a;background-clip:padding-box;border:1px solid #fff;border-radius: 1rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1050;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;flex-shrink:0;align-items:center;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .btn-close{position: absolute;right: 21px;width: 35px;height: 33px;cursor: pointer;font-size: 15px;color: #0a0909;border-radius: 50%;background: #E4E6EB;}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:sticky;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;flex-wrap:wrap;flex-shrink:0;align-items:center;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{height:calc(100% - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.modal-fullscreen{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen .modal-header{border-radius:0}.modal-fullscreen .modal-body{overflow-y:auto}.modal-fullscreen .modal-footer{border-radius:0}@media (max-width:575.98px){.modal-fullscreen-sm-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-sm-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-sm-down .modal-header{border-radius:0}.modal-fullscreen-sm-down .modal-body{overflow-y:auto}.modal-fullscreen-sm-down .modal-footer{border-radius:0}}@media (max-width:767.98px){.modal-fullscreen-md-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-md-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-md-down .modal-header{border-radius:0}.modal-fullscreen-md-down .modal-body{overflow-y:auto}.modal-fullscreen-md-down .modal-footer{border-radius:0}}@media (max-width:991.98px){.modal-fullscreen-lg-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-lg-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-lg-down .modal-header{border-radius:0}.modal-fullscreen-lg-down .modal-body{overflow-y:auto}.modal-fullscreen-lg-down .modal-footer{border-radius:0}}@media (max-width:1199.98px){.modal-fullscreen-xl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xl-down .modal-header{border-radius:0}.modal-fullscreen-xl-down .modal-body{overflow-y:auto}.modal-fullscreen-xl-down .modal-footer{border-radius:0}}@media (max-width:1399.98px){.modal-fullscreen-xxl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xxl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xxl-down .modal-header{border-radius:0}.modal-fullscreen-xxl-down .modal-body{overflow-y:auto}.modal-fullscreen-xxl-down .modal-footer{border-radius:0}}.tooltip{position:absolute;z-index:1080;display:block;margin:0;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .tooltip-arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .tooltip-arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[data-popper-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,.bs-tooltip-top .tooltip-arrow{bottom:0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,.bs-tooltip-top .tooltip-arrow::before{top:-1px;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[data-popper-placement^=right],.bs-tooltip-end{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,.bs-tooltip-end .tooltip-arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,.bs-tooltip-end .tooltip-arrow::before{right:-1px;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[data-popper-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,.bs-tooltip-bottom .tooltip-arrow{top:0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,.bs-tooltip-bottom .tooltip-arrow::before{bottom:-1px;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[data-popper-placement^=left],.bs-tooltip-start{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,.bs-tooltip-start .tooltip-arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,.bs-tooltip-start .tooltip-arrow::before{left:-1px;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1070;display:block;max-width:276px;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .popover-arrow{position:absolute;display:block;width:1rem;height:.5rem}.popover .popover-arrow::after,.popover .popover-arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow,.bs-popover-top>.popover-arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,.bs-popover-top>.popover-arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,.bs-popover-top>.popover-arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow,.bs-popover-end>.popover-arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,.bs-popover-end>.popover-arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,.bs-popover-end>.popover-arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,.bs-popover-bottom>.popover-arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,.bs-popover-bottom>.popover-arrow::before{top:0;border-width:0 .5rem .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,.bs-popover-bottom>.popover-arrow::after{top:1px;border-width:0 .5rem .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f0f0f0}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow,.bs-popover-start>.popover-arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,.bs-popover-start>.popover-arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,.bs-popover-start>.popover-arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem 1rem;margin-bottom:0;font-size:1rem;background-color:#f0f0f0;border-bottom:1px solid rgba(0,0,0,.2);border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:1rem 1rem;color:#212529}.carousel{position:sticky}.carousel.pointer-event{touch-action:pan-y}.carousel-inner{position:sticky;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:sticky;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-end,.carousel-item-next:not(.carousel-item-start){transform:translateX(100%)}.active.carousel-item-start,.carousel-item-prev:not(.carousel-item-end){transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;transform:none}.carousel-fade .carousel-item-next.carousel-item-start,.carousel-fade .carousel-item-prev.carousel-item-end,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{z-index:0;opacity:0;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:flex;align-items:center;justify-content:center;width:15%;padding:0;color:#fff;text-align:center;background:0 0;border:0;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:2rem;height:2rem;background-repeat:no-repeat;background-position:50%;background-size:100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:2;display:flex;justify-content:center;padding:0;margin-right:15%;margin-bottom:1rem;margin-left:15%;list-style:none}.carousel-indicators [data-bs-target]{box-sizing:content-box;flex:0 1 auto;width:30px;height:3px;padding:0;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border:0;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators [data-bs-target]{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:1.25rem;left:15%;padding-top:1.25rem;padding-bottom:1.25rem;color:#fff;text-align:center}.carousel-dark .carousel-control-next-icon,.carousel-dark .carousel-control-prev-icon{filter:invert(1) grayscale(100)}.carousel-dark .carousel-indicators [data-bs-target]{background-color:#000}.carousel-dark .carousel-caption{color:#000}@-webkit-keyframes spinner-border{to{transform:rotate(360deg)}}@keyframes spinner-border{to{transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}.offcanvas{position:fixed;bottom:0;z-index:1045;display:flex;flex-direction:column;max-width:100%;visibility:hidden;background-color:#000;background-clip:padding-box;outline:0;transition:transform .3s ease-in-out}@media (prefers-reduced-motion:reduce){.offcanvas{transition:none}}.offcanvas-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.offcanvas-backdrop.fade{opacity:0}.offcanvas-backdrop.show{opacity:.5}.offcanvas-header{display:flex;align-items:center;justify-content:space-between;padding:1rem 1rem}.offcanvas-header .btn-close{position: absolute;right: 21px;width: 35px;height: 33px;cursor: pointer;font-size: 15px;color: #0a0909;border-radius: 50%;background: #E4E6EB;}.offcanvas-title{margin-bottom:0;line-height:1.5}.offcanvas-body{flex-grow:1;padding:1rem 1rem;overflow-y:auto}.offcanvas-start{top:0;left:0;width:400px;border-right:1px solid rgba(0,0,0,.2);transform:translateX(-100%)}.offcanvas-end{top:0;right:0;width:400px;border-left:1px solid rgba(0,0,0,.2);transform:translateX(100%)}.offcanvas-top{top:0;right:0;left:0;height:30vh;max-height:100%;border-bottom:1px solid rgba(0,0,0,.2);transform:translateY(-100%)}.offcanvas-bottom{right:0;left:0;height:30vh;max-height:100%;border-top:1px solid rgba(0,0,0,.2);transform:translateY(100%)}.offcanvas.show{transform:none}.placeholder{display:inline-block;min-height:1em;vertical-align:middle;cursor:wait;background-color:currentColor;opacity:.5}.placeholder.btn::before{display:inline-block;content:""}.placeholder-xs{min-height:.6em}.placeholder-sm{min-height:.8em}.placeholder-lg{min-height:1.2em}.placeholder-glow .placeholder{-webkit-animation:placeholder-glow 2s ease-in-out infinite;animation:placeholder-glow 2s ease-in-out infinite}@-webkit-keyframes placeholder-glow{50%{opacity:.2}}@keyframes placeholder-glow{50%{opacity:.2}}.placeholder-wave{-webkit-mask-image:linear-gradient(130deg,#000 55%,rgba(0,0,0,0.8) 75%,#000 95%);mask-image:linear-gradient(130deg,#000 55%,rgba(0,0,0,0.8) 75%,#000 95%);-webkit-mask-size:200% 100%;mask-size:200% 100%;-webkit-animation:placeholder-wave 2s linear infinite;animation:placeholder-wave 2s linear infinite}@-webkit-keyframes placeholder-wave{100%{-webkit-mask-position:-200% 0%;mask-position:-200% 0%}}@keyframes placeholder-wave{100%{-webkit-mask-position:-200% 0%;mask-position:-200% 0%}}.clearfix::after{display:block;clear:both;content:""}.link-primary{color:brown}.link-primary:focus,.link-primary:hover{color:#0a58ca}.link-secondary{color:#6c757d}.link-secondary:focus,.link-secondary:hover{color:#565e64}.link-success{color:#198754}.link-success:focus,.link-success:hover{color:#146c43}.link-info{color:#bf3b35}.link-info:focus,.link-info:hover{color:#3dd5f3}.link-warning{color:#ffc107}.link-warning:focus,.link-warning:hover{color:#ffcd39}.link-danger{color:#dc3545}.link-danger:focus,.link-danger:hover{color:#b02a37}.link-light{color:#f8f9fa}.link-light:focus,.link-light:hover{color:#f9fafb}.link-dark{color:#212529}.link-dark:focus,.link-dark:hover{color:#1a1e21}.ratio{position:sticky;width:100%}.ratio::before{display:block;padding-top:var(--bs-aspect-ratio);content:""}.ratio>*{position:absolute;top:0;left:0;width:100%;height:100%}.ratio-1x1{--bs-aspect-ratio:100%}.ratio-4x3{--bs-aspect-ratio:75%}.ratio-16x9{--bs-aspect-ratio:56.25%}.ratio-21x9{--bs-aspect-ratio:42.8571428571%}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}@media (min-width:576px){.sticky-sm-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:768px){.sticky-md-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:992px){.sticky-lg-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1200px){.sticky-xl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1400px){.sticky-xxl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.hstack{display:flex;flex-direction:row;align-items:center;align-self:stretch}.vstack{display:flex;flex:1 1 auto;flex-direction:column;align-self:stretch}.visually-hidden,.visually-hidden-focusable:not(:focus):not(:focus-within){position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:""}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.vr{display:inline-block;align-self:stretch;width:1px;min-height:1em;background-color:currentColor;opacity:.25}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.float-start{float:left!important}.float-end{float:right!important}.float-none{float:none!important}.opacity-0{opacity:0!important}.opacity-25{opacity:.25!important}.opacity-50{opacity:.5!important}.opacity-75{opacity:.75!important}.opacity-100{opacity:1!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.overflow-visible{overflow:visible!important}.overflow-scroll{overflow:scroll!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-grid{display:grid!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display: flex!important;}.d-inline-flex{display:inline-flex!important}.d-none{display:none!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.position-static{position:static!important}.position-sticky{position:sticky!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.top-0{top:0!important}.top-50{top:50%!important}.top-100{top:100%!important}.bottom-0{bottom:0!important}.bottom-50{bottom:50%!important}.bottom-100{bottom:100%!important}.start-0{left:0!important}.start-50{left:50%!important}.start-100{left:100%!important}.end-0{right:0!important}.end-50{right:50%!important}.end-100{right:100%!important}.translate-middle{transform:translate(-50%,-50%)!important}.translate-middle-x{transform:translateX(-50%)!important}.translate-middle-y{transform:translateY(-50%)!important}.border{border:1px solid #dee2e6!important}.border-0{border:0!important}.border-top{border-top:1px solid #dee2e6!important}.border-top-0{border-top:0!important}.border-end{border-right:1px solid #dee2e6!important}.border-end-0{border-right:0!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-bottom-0{border-bottom:0!important}.border-start{border-left:1px solid #dee2e6!important}.border-start-0{border-left:0!important}.border-primary{border-color:brown!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#198754!important}.border-info{border-color:#bf3b35!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#212529!important}.border-white{border-color:#fff!important}.border-1{border-width:1px!important}.border-2{border-width:2px!important}.border-3{border-width:3px!important}.border-4{border-width:4px!important}.border-5{border-width:5px!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.mw-100{max-width:100%!important}.vw-100{width:100vw!important}.min-vw-100{min-width:100vw!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mh-100{max-height:100%!important}.vh-100{height:100vh!important}.min-vh-100{min-height:100vh!important}.flex-fill{flex:1 1 auto!important}.flex-row{flex-direction:row!important}.flex-column{flex-direction:column!important}.flex-row-reverse{flex-direction:row-reverse!important}.flex-column-reverse{flex-direction:column}.flex-grow-0{flex-grow:0!important}.flex-grow-1{flex-grow:1!important}.flex-shrink-0{flex-shrink:0!important}.flex-shrink-1{flex-shrink:1!important}.flex-wrap{flex-wrap:wrap!important}.flex-nowrap{flex-wrap:nowrap!important}.flex-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-0{gap:0!important}.gap-1{gap:.25rem!important}.gap-2{gap:.5rem!important}.gap-3{gap:1rem!important}.gap-4{gap:1.5rem!important}.gap-5{gap:3rem!important}.justify-content-start{justify-content:flex-start!important}.justify-content-end{justify-content:flex-end!important}.justify-content-center{justify-content:center!important}.justify-content-between{justify-content:space-between!important}.justify-content-around{justify-content:space-around!important}.justify-content-evenly{justify-content:space-evenly!important}.align-items-start{align-items:flex-start!important}.align-items-end{align-items:flex-end!important}.align-items-center{align-items:center!important}.align-items-baseline{align-items:baseline!important}.align-items-stretch{align-items:stretch!important}.align-content-start{align-content:flex-start!important}.align-content-end{align-content:flex-end!important}.align-content-center{align-content:center!important}.align-content-between{align-content:space-between!important}.align-content-around{align-content:space-around!important}.align-content-stretch{align-content:stretch!important}.align-self-auto{align-self:auto!important}.align-self-start{align-self:flex-start!important}.align-self-end{align-self:flex-end!important}.align-self-center{align-self:center!important}.align-self-baseline{align-self:baseline!important}.align-self-stretch{align-self:stretch!important}.order-first{order:-1!important}.order-0{order:0!important}.order-1{order:1!important}.order-2{order:2!important}.order-3{order:3!important}.order-4{order:4!important}.order-5{order:5!important}.order-last{order:6!important}.m-0{margin:0!important}.m-1{margin:.25rem!important}.m-2{margin:.5rem!important}.m-3{margin:1rem!important}.m-4{margin:1.5rem!important}.m-5{margin:3rem!important}.m-auto{margin:auto!important}.mx-0{margin-right:0!important;margin-left:0!important}.mx-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-3{margin-right:1rem!important;margin-left:1rem!important}.mx-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-5{margin-right:3rem!important;margin-left:3rem!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}.my-0{margin-top:0!important;margin-bottom:0!important}.my-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-0{margin-top:0!important}.mt-1{margin-top:.25rem!important}.mt-2{margin-top:.5rem!important}.mt-3{margin-top:1rem!important}.mt-4{margin-top:1.5rem!important}.mt-5{margin-top:3rem!important}.mt-auto{margin-top:auto!important}.me-0{margin-right:0!important}.me-1{margin-right:.25rem!important}.me-2{margin-right:.5rem!important}.me-3{margin-right:1rem!important}.me-4{margin-right:1.5rem!important}.me-5{margin-right:3rem!important}.me-auto{margin-right:auto!important}.mb-0{margin-bottom:0!important}.mb-1{margin-bottom:.25rem!important}.mb-2{margin-bottom:.5rem!important}.mb-3{margin-bottom:1rem!important}.mb-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.mb-auto{margin-bottom:auto!important}.ms-0{margin-left:0!important}.ms-1{margin-left:.25rem!important}.ms-2{margin-left:.5rem!important}.ms-3{margin-left:1rem!important}.ms-4{margin-left:1.5rem!important}.ms-5{margin-left:3rem!important}.ms-auto{margin-left:auto!important}.p-0{padding:0!important}.p-1{padding:.25rem!important}.p-2{padding:.5rem!important}.p-3{padding:1rem!important}.p-4{padding:1.5rem!important}.p-5{padding:3rem!important}.px-0{padding-right:0!important;padding-left:0!important}.px-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-3{padding-right:1rem!important;padding-left:1rem!important}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-5{padding-right:3rem!important;padding-left:3rem!important}.py-0{padding-top:0!important;padding-bottom:0!important}.py-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-0{padding-top:0!important}.pt-1{padding-top:.25rem!important}.pt-2{padding-top:.5rem!important}.pt-3{padding-top:1rem!important}.pt-4{padding-top:1.5rem!important}.pt-5{padding-top:3rem!important}.pe-0{padding-right:0!important}.pe-1{padding-right:.25rem!important}.pe-2{padding-right:.5rem!important}.pe-3{padding-right:1rem!important}.pe-4{padding-right:1.5rem!important}.pe-5{padding-right:3rem!important}.pb-0{padding-bottom:0!important}.pb-1{padding-bottom:.25rem!important}.pb-2{padding-bottom:.5rem!important}.pb-3{padding-bottom:1rem!important}.pb-4{padding-bottom:1.5rem!important}.pb-5{padding-bottom:3rem!important}.ps-0{padding-left:0!important}.ps-1{padding-left:.25rem!important}.ps-2{padding-left:.5rem!important}.ps-3{padding-left:1rem!important}.ps-4{padding-left:1.5rem!important}.ps-5{padding-left:3rem!important}.font-monospace{font-family:var(--bs-font-monospace)!important}.fs-1{font-size:calc(1.375rem + 1.5vw)!important}.fs-2{font-size:calc(1.325rem + .9vw)!important}.fs-3{font-size:calc(1.3rem + .6vw)!important}.fs-4{font-size:calc(1.275rem + .3vw)!important}.fs-5{font-size:1.25rem!important}.fs-6{font-size:1rem!important}.fst-italic{font-style:italic!important}.fst-normal{font-style:normal!important}.fw-light{font-weight:300!important}.fw-lighter{font-weight:lighter!important}.fw-normal{font-weight:400!important}.fw-bold{font-weight:700!important}.fw-bolder{font-weight:bolder!important}.lh-1{line-height:1!important}.lh-sm{line-height:1.25!important}.lh-base{line-height:1.5!important}.lh-lg{line-height:2!important}.text-start{text-align:left!important}.text-end{text-align:right!important}.text-center{text-align:center!important}.text-decoration-none{text-decoration:none!important}.text-decoration-underline{text-decoration:underline!important}.text-decoration-line-through{text-decoration:line-through!important}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-break{word-wrap:break-word!important;word-break:break-word!important}.text-primary{--bs-text-opacity:1;color:#b8bdc1!important,var(--bs-text-opacity))!important}.text-secondary{--bs-text-opacity:1;color:rgba(var(--bs-secondary-rgb),var(--bs-text-opacity))!important}.text-success{--bs-text-opacity:1;color:rgba(var(--bs-success-rgb),var(--bs-text-opacity))!important}.text-info{--bs-text-opacity:1;color:rgba(var(--bs-info-rgb),var(--bs-text-opacity))!important}.text-warning{--bs-text-opacity:1;color:rgba(var(--bs-warning-rgb),var(--bs-text-opacity))!important}.text-danger{--bs-text-opacity:1;color:rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important}.text-light{--bs-text-opacity:1;color:rgba(var(--bs-light-rgb),var(--bs-text-opacity))!important}.text-dark{--bs-text-opacity:1;color:rgba(var(--bs-dark-rgb),var(--bs-text-opacity))!important}.text-black{--bs-text-opacity:1;color:rgba(var(--bs-black-rgb),var(--bs-text-opacity))!important}.text-white{--bs-text-opacity:1;color:rgba(var(--bs-white-rgb),var(--bs-text-opacity))!important}.text-body{--bs-text-opacity:1;color:rgba(var(--bs-body-color-rgb),var(--bs-text-opacity))!important}.text-muted{--bs-text-opacity:1;color:#b8bdc1!important}.text-black-50{--bs-text-opacity:1;color:rgba(0,0,0,.5)!important}.text-white-50{--bs-text-opacity:1;color:rgba(0,0,0,.5)!important}.text-reset{--bs-text-opacity:1;color:inherit!important}.text-opacity-25{--bs-text-opacity:0.25}.text-opacity-50{--bs-text-opacity:0.5}.text-opacity-75{--bs-text-opacity:0.75}.text-opacity-100{--bs-text-opacity:1}.bg-primary{--bs-bg-opacity:1;background-color:rgba(var(--bs-primary-rgb),var(--bs-bg-opacity))!important}.bg-secondary{--bs-bg-opacity:1;background-color:rgba(var(--bs-secondary-rgb),var(--bs-bg-opacity))!important}.bg-success{--bs-bg-opacity:1;background-color:rgba(var(--bs-success-rgb),var(--bs-bg-opacity))!important}.bg-info{--bs-bg-opacity:1;background-color:rgba(var(--bs-info-rgb),var(--bs-bg-opacity))!important}.bg-warning{--bs-bg-opacity:1;background-color:rgba(var(--bs-warning-rgb),var(--bs-bg-opacity))!important}.bg-danger{--bs-bg-opacity:1;background-color:rgba(var(--bs-danger-rgb),var(--bs-bg-opacity))!important}.bg-light{--bs-bg-opacity:1;background-color:rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important}.bg-dark{--bs-bg-opacity:1;background-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important}.bg-black{--bs-bg-opacity:1;background-color:rgba(var(--bs-black-rgb),var(--bs-bg-opacity))!important}.bg-white{--bs-bg-opacity:1;background-color:rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important}.bg-body{--bs-bg-opacity:1;background-color:rgba(var(--bs-body-bg-rgb),var(--bs-bg-opacity))!important}.bg-transparent{--bs-bg-opacity:1;background-color:transparent!important}.bg-opacity-10{--bs-bg-opacity:0.1}.bg-opacity-25{--bs-bg-opacity:0.25}.bg-opacity-50{--bs-bg-opacity:0.5}.bg-opacity-75{--bs-bg-opacity:0.75}.bg-opacity-100{--bs-bg-opacity:1}.bg-gradient{background-image:var(--bs-gradient)!important}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;user-select:none!important}.pe-none{pointer-events:none!important}.pe-auto{pointer-events:auto!important}.rounded{border-radius:.25rem!important}.rounded-0{border-radius:0!important; margin-block-start: 2%;}.rounded-1{border-radius:.2rem!important}.rounded-2{border-radius:.25rem!important}.rounded-3{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-end{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-start{border-bottom-left-radius:.25rem!important;border-top-left-radius:.25rem!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media (min-width:576px){.float-sm-start{float:left!important}.float-sm-end{float:right!important}.float-sm-none{float:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-grid{display:grid!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:flex!important}.d-sm-inline-flex{display:inline-flex!important}.d-sm-none{display:none!important}.flex-sm-fill{flex:1 1 auto!important}.flex-sm-row{flex-direction:row!important}.flex-sm-column{flex-direction:column!important}.flex-sm-row-reverse{flex-direction:row-reverse!important}.flex-sm-column-reverse{flex-direction:column-reverse!important}.flex-sm-grow-0{flex-grow:0!important}.flex-sm-grow-1{flex-grow:1!important}.flex-sm-shrink-0{flex-shrink:0!important}.flex-sm-shrink-1{flex-shrink:1!important}.flex-sm-wrap{flex-wrap:wrap!important}.flex-sm-nowrap{flex-wrap:nowrap!important}.flex-sm-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-sm-0{gap:0!important}.gap-sm-1{gap:.25rem!important}.gap-sm-2{gap:.5rem!important}.gap-sm-3{gap:1rem!important}.gap-sm-4{gap:1.5rem!important}.gap-sm-5{gap:3rem!important}.justify-content-sm-start{justify-content:flex-start!important}.justify-content-sm-end{justify-content:flex-end!important}.justify-content-sm-center{justify-content:center!important}.justify-content-sm-between{justify-content:space-between!important}.justify-content-sm-around{justify-content:space-around!important}.justify-content-sm-evenly{justify-content:space-evenly!important}.align-items-sm-start{align-items:flex-start!important}.align-items-sm-end{align-items:flex-end!important}.align-items-sm-center{align-items:center!important}.align-items-sm-baseline{align-items:baseline!important}.align-items-sm-stretch{align-items:stretch!important}.align-content-sm-start{align-content:flex-start!important}.align-content-sm-end{align-content:flex-end!important}.align-content-sm-center{align-content:center!important}.align-content-sm-between{align-content:space-between!important}.align-content-sm-around{align-content:space-around!important}.align-content-sm-stretch{align-content:stretch!important}.align-self-sm-auto{align-self:auto!important}.align-self-sm-start{align-self:flex-start!important}.align-self-sm-end{align-self:flex-end!important}.align-self-sm-center{align-self:center!important}.align-self-sm-baseline{align-self:baseline!important}.align-self-sm-stretch{align-self:stretch!important}.order-sm-first{order:-1!important}.order-sm-0{order:0!important}.order-sm-1{order:1!important}.order-sm-2{order:2!important}.order-sm-3{order:3!important}.order-sm-4{order:4!important}.order-sm-5{order:5!important}.order-sm-last{order:6!important}.m-sm-0{margin:0!important}.m-sm-1{margin:.25rem!important}.m-sm-2{margin:.5rem!important}.m-sm-3{margin:1rem!important}.m-sm-4{margin:1.5rem!important}.m-sm-5{margin:3rem!important}.m-sm-auto{margin:auto!important}.mx-sm-0{margin-right:0!important;margin-left:0!important}.mx-sm-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-sm-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-sm-3{margin-right:1rem!important;margin-left:1rem!important}.mx-sm-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-sm-5{margin-right:3rem!important;margin-left:3rem!important}.mx-sm-auto{margin-right:auto!important;margin-left:auto!important}.my-sm-0{margin-top:0!important;margin-bottom:0!important}.my-sm-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-sm-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-sm-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-sm-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-sm-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-sm-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-sm-0{margin-top:0!important}.mt-sm-1{margin-top:.25rem!important}.mt-sm-2{margin-top:.5rem!important}.mt-sm-3{margin-top:1rem!important}.mt-sm-4{margin-top:1.5rem!important}.mt-sm-5{margin-top:3rem!important}.mt-sm-auto{margin-top:auto!important}.me-sm-0{margin-right:0!important}.me-sm-1{margin-right:.25rem!important}.me-sm-2{margin-right:.5rem!important}.me-sm-3{margin-right:1rem!important}.me-sm-4{margin-right:1.5rem!important}.me-sm-5{margin-right:3rem!important}.me-sm-auto{margin-right:auto!important}.mb-sm-0{margin-bottom:0!important}.mb-sm-1{margin-bottom:.25rem!important}.mb-sm-2{margin-bottom:.5rem!important}.mb-sm-3{margin-bottom:1rem!important}.mb-sm-4{margin-bottom:1.5rem!important}.mb-sm-5{margin-bottom:3rem!important}.mb-sm-auto{margin-bottom:auto!important}.ms-sm-0{margin-left:0!important}.ms-sm-1{margin-left:.25rem!important}.ms-sm-2{margin-left:.5rem!important}.ms-sm-3{margin-left:1rem!important}.ms-sm-4{margin-left:1.5rem!important}.ms-sm-5{margin-left:3rem!important}.ms-sm-auto{margin-left:auto!important}.p-sm-0{padding:0!important}.p-sm-1{padding:.25rem!important}.p-sm-2{padding:.5rem!important}.p-sm-3{padding:1rem!important}.p-sm-4{padding:1.5rem!important}.p-sm-5{padding:3rem!important}.px-sm-0{padding-right:0!important;padding-left:0!important}.px-sm-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-sm-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-sm-3{padding-right:1rem!important;padding-left:1rem!important}.px-sm-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-sm-5{padding-right:3rem!important;padding-left:3rem!important}.py-sm-0{padding-top:0!important;padding-bottom:0!important}.py-sm-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-sm-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-sm-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-sm-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-sm-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-sm-0{padding-top:0!important}.pt-sm-1{padding-top:.25rem!important}.pt-sm-2{padding-top:.5rem!important}.pt-sm-3{padding-top:1rem!important}.pt-sm-4{padding-top:1.5rem!important}.pt-sm-5{padding-top:3rem!important}.pe-sm-0{padding-right:0!important}.pe-sm-1{padding-right:.25rem!important}.pe-sm-2{padding-right:.5rem!important}.pe-sm-3{padding-right:1rem!important}.pe-sm-4{padding-right:1.5rem!important}.pe-sm-5{padding-right:3rem!important}.pb-sm-0{padding-bottom:0!important}.pb-sm-1{padding-bottom:.25rem!important}.pb-sm-2{padding-bottom:.5rem!important}.pb-sm-3{padding-bottom:1rem!important}.pb-sm-4{padding-bottom:1.5rem!important}.pb-sm-5{padding-bottom:3rem!important}.ps-sm-0{padding-left:0!important}.ps-sm-1{padding-left:.25rem!important}.ps-sm-2{padding-left:.5rem!important}.ps-sm-3{padding-left:1rem!important}.ps-sm-4{padding-left:1.5rem!important}.ps-sm-5{padding-left:3rem!important}.text-sm-start{text-align:left!important}.text-sm-end{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.float-md-start{float:left!important}.float-md-end{float:right!important}.float-md-none{float:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-grid{display:grid!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:flex!important}.d-md-inline-flex{display:inline-flex!important}.d-md-none{display:none!important}.flex-md-fill{flex:1 1 auto!important}.flex-md-row{flex-direction:row!important}.flex-md-column{flex-direction:column!important}.flex-md-row-reverse{flex-direction:row-reverse!important}.flex-md-column-reverse{flex-direction:column-reverse!important}.flex-md-grow-0{flex-grow:0!important}.flex-md-grow-1{flex-grow:1!important}.flex-md-shrink-0{flex-shrink:0!important}.flex-md-shrink-1{flex-shrink:1!important}.flex-md-wrap{flex-wrap:wrap!important}.flex-md-nowrap{flex-wrap:nowrap!important}.flex-md-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-md-0{gap:0!important}.gap-md-1{gap:.25rem!important}.gap-md-2{gap:.5rem!important}.gap-md-3{gap:1rem!important}.gap-md-4{gap:1.5rem!important}.gap-md-5{gap:3rem!important}.justify-content-md-start{justify-content:flex-start!important}.justify-content-md-end{justify-content:flex-end!important}.justify-content-md-center{justify-content:center!important}.justify-content-md-between{justify-content:space-between!important}.justify-content-md-around{justify-content:space-around!important}.justify-content-md-evenly{justify-content:space-evenly!important}.align-items-md-start{align-items:flex-start!important}.align-items-md-end{align-items:flex-end!important}.align-items-md-center{align-items:center!important}.align-items-md-baseline{align-items:baseline!important}.align-items-md-stretch{align-items:stretch!important}.align-content-md-start{align-content:flex-start!important}.align-content-md-end{align-content:flex-end!important}.align-content-md-center{align-content:center!important}.align-content-md-between{align-content:space-between!important}.align-content-md-around{align-content:space-around!important}.align-content-md-stretch{align-content:stretch!important}.align-self-md-auto{align-self:auto!important}.align-self-md-start{align-self:flex-start!important}.align-self-md-end{align-self:flex-end!important}.align-self-md-center{align-self:center!important}.align-self-md-baseline{align-self:baseline!important}.align-self-md-stretch{align-self:stretch!important}.order-md-first{order:-1!important}.order-md-0{order:0!important}.order-md-1{order:1!important}.order-md-2{order:2!important}.order-md-3{order:3!important}.order-md-4{order:4!important}.order-md-5{order:5!important}.order-md-last{order:6!important}.m-md-0{margin:0!important}.m-md-1{margin:.25rem!important}.m-md-2{margin:.5rem!important}.m-md-3{margin:1rem!important}.m-md-4{margin:1.5rem!important}.m-md-5{margin:3rem!important}.m-md-auto{margin:auto!important}.mx-md-0{margin-right:0!important;margin-left:0!important}.mx-md-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-md-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-md-3{margin-right:1rem!important;margin-left:1rem!important}.mx-md-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-md-5{margin-right:3rem!important;margin-left:3rem!important}.mx-md-auto{margin-right:auto!important;margin-left:auto!important}.my-md-0{margin-top:0!important;margin-bottom:0!important}.my-md-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-md-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-md-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-md-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-md-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-md-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-md-0{margin-top:0!important}.mt-md-1{margin-top:.25rem!important}.mt-md-2{margin-top:.5rem!important}.mt-md-3{margin-top:1rem!important}.mt-md-4{margin-top:1.5rem!important}.mt-md-5{margin-top:3rem!important}.mt-md-auto{margin-top:auto!important}.me-md-0{margin-right:0!important}.me-md-1{margin-right:.25rem!important}.me-md-2{margin-right:.5rem!important}.me-md-3{margin-right:1rem!important}.me-md-4{margin-right:1.5rem!important}.me-md-5{margin-right:3rem!important}.me-md-auto{margin-right:auto!important}.mb-md-0{margin-bottom:0!important}.mb-md-1{margin-bottom:.25rem!important}.mb-md-2{margin-bottom:.5rem!important}.mb-md-3{margin-bottom:1rem!important}.mb-md-4{margin-bottom:1.5rem!important}.mb-md-5{margin-bottom:3rem!important}.mb-md-auto{margin-bottom:auto!important}.ms-md-0{margin-left:0!important}.ms-md-1{margin-left:.25rem!important}.ms-md-2{margin-left:.5rem!important}.ms-md-3{margin-left:1rem!important}.ms-md-4{margin-left:1.5rem!important}.ms-md-5{margin-left:3rem!important}.ms-md-auto{margin-left:auto!important}.p-md-0{padding:0!important}.p-md-1{padding:.25rem!important}.p-md-2{padding:.5rem!important}.p-md-3{padding:1rem!important}.p-md-4{padding:1.5rem!important}.p-md-5{padding:3rem!important}.px-md-0{padding-right:0!important;padding-left:0!important}.px-md-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-md-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-md-3{padding-right:1rem!important;padding-left:1rem!important}.px-md-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-md-5{padding-right:3rem!important;padding-left:3rem!important}.py-md-0{padding-top:0!important;padding-bottom:0!important}.py-md-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-md-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-md-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-md-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-md-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-md-0{padding-top:0!important}.pt-md-1{padding-top:.25rem!important}.pt-md-2{padding-top:.5rem!important}.pt-md-3{padding-top:1rem!important}.pt-md-4{padding-top:1.5rem!important}.pt-md-5{padding-top:3rem!important}.pe-md-0{padding-right:0!important}.pe-md-1{padding-right:.25rem!important}.pe-md-2{padding-right:.5rem!important}.pe-md-3{padding-right:1rem!important}.pe-md-4{padding-right:1.5rem!important}.pe-md-5{padding-right:3rem!important}.pb-md-0{padding-bottom:0!important}.pb-md-1{padding-bottom:.25rem!important}.pb-md-2{padding-bottom:.5rem!important}.pb-md-3{padding-bottom:1rem!important}.pb-md-4{padding-bottom:1.5rem!important}.pb-md-5{padding-bottom:3rem!important}.ps-md-0{padding-left:0!important}.ps-md-1{padding-left:.25rem!important}.ps-md-2{padding-left:.5rem!important}.ps-md-3{padding-left:1rem!important}.ps-md-4{padding-left:1.5rem!important}.ps-md-5{padding-left:3rem!important}.text-md-start{text-align:left!important}.text-md-end{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.float-lg-start{float:left!important}.float-lg-end{float:right!important}.float-lg-none{float:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-grid{display:grid!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:flex!important}.d-lg-inline-flex{display:inline-flex!important}.d-lg-none{display:none!important}.flex-lg-fill{flex:1 1 auto!important}.flex-lg-row{flex-direction:row!important}.flex-lg-column{flex-direction:column!important}.flex-lg-row-reverse{flex-direction:row-reverse!important}.flex-lg-column-reverse{flex-direction:column-reverse!important}.flex-lg-grow-0{flex-grow:0!important}.flex-lg-grow-1{flex-grow:1!important}.flex-lg-shrink-0{flex-shrink:0!important}.flex-lg-shrink-1{flex-shrink:1!important}.flex-lg-wrap{flex-wrap:wrap!important}.flex-lg-nowrap{flex-wrap:nowrap!important}.flex-lg-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-lg-0{gap:0!important}.gap-lg-1{gap:.25rem!important}.gap-lg-2{gap:.5rem!important}.gap-lg-3{gap:1rem!important}.gap-lg-4{gap:1.5rem!important}.gap-lg-5{gap:3rem!important}.justify-content-lg-start{justify-content:flex-start!important}.justify-content-lg-end{justify-content:flex-end!important}.justify-content-lg-center{justify-content:center!important}.justify-content-lg-between{justify-content:space-between!important}.justify-content-lg-around{justify-content:space-around!important}.justify-content-lg-evenly{justify-content:space-evenly!important}.align-items-lg-start{align-items:flex-start!important}.align-items-lg-end{align-items:flex-end!important}.align-items-lg-center{align-items:center!important}.align-items-lg-baseline{align-items:baseline!important}.align-items-lg-stretch{align-items:stretch!important}.align-content-lg-start{align-content:flex-start!important}.align-content-lg-end{align-content:flex-end!important}.align-content-lg-center{align-content:center!important}.align-content-lg-between{align-content:space-between!important}.align-content-lg-around{align-content:space-around!important}.align-content-lg-stretch{align-content:stretch!important}.align-self-lg-auto{align-self:auto!important}.align-self-lg-start{align-self:flex-start!important}.align-self-lg-end{align-self:flex-end!important}.align-self-lg-center{align-self:center!important}.align-self-lg-baseline{align-self:baseline!important}.align-self-lg-stretch{align-self:stretch!important}.order-lg-first{order:-1!important}.order-lg-0{order:0!important}.order-lg-1{order:1!important}.order-lg-2{order:2!important}.order-lg-3{order:3!important}.order-lg-4{order:4!important}.order-lg-5{order:5!important}.order-lg-last{order:6!important}.m-lg-0{margin:0!important}.m-lg-1{margin:.25rem!important}.m-lg-2{margin:.5rem!important}.m-lg-3{margin:1rem!important}.m-lg-4{margin:1.5rem!important}.m-lg-5{margin:3rem!important}.m-lg-auto{margin:auto!important}.mx-lg-0{margin-right:0!important;margin-left:0!important}.mx-lg-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-lg-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-lg-3{margin-right:1rem!important;margin-left:1rem!important}.mx-lg-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-lg-5{margin-right:3rem!important;margin-left:3rem!important}.mx-lg-auto{margin-right:auto!important;margin-left:auto!important}.my-lg-0{margin-top:0!important;margin-bottom:0!important}.my-lg-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-lg-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-lg-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-lg-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-lg-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-lg-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-lg-0{margin-top:0!important}.mt-lg-1{margin-top:.25rem!important}.mt-lg-2{margin-top:.5rem!important}.mt-lg-3{margin-top:1rem!important}.mt-lg-4{margin-top:1.5rem!important}.mt-lg-5{margin-top:3rem!important}.mt-lg-auto{margin-top:auto!important}.me-lg-0{margin-right:0!important}.me-lg-1{margin-right:.25rem!important}.me-lg-2{margin-right:.5rem!important}.me-lg-3{margin-right:1rem!important}.me-lg-4{margin-right:1.5rem!important}.me-lg-5{margin-right:3rem!important}.me-lg-auto{margin-right:auto!important}.mb-lg-0{margin-bottom:0!important}.mb-lg-1{margin-bottom:.25rem!important}.mb-lg-2{margin-bottom:.5rem!important}.mb-lg-3{margin-bottom:1rem!important}.mb-lg-4{margin-bottom:1.5rem!important}.mb-lg-5{margin-bottom:3rem!important}.mb-lg-auto{margin-bottom:auto!important}.ms-lg-0{margin-left:0!important}.ms-lg-1{margin-left:.25rem!important}.ms-lg-2{margin-left:.5rem!important}.ms-lg-3{margin-left:1rem!important}.ms-lg-4{margin-left:1.5rem!important}.ms-lg-5{margin-left:3rem!important}.ms-lg-auto{margin-left:auto!important}.p-lg-0{padding:0!important}.p-lg-1{padding:.25rem!important}.p-lg-2{padding:.5rem!important}.p-lg-3{padding:1rem!important}.p-lg-4{padding:1.5rem!important}.p-lg-5{padding:3rem!important}.px-lg-0{padding-right:0!important;padding-left:0!important}.px-lg-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-lg-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-lg-3{padding-right:1rem!important;padding-left:1rem!important}.px-lg-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-lg-5{padding-right:3rem!important;padding-left:3rem!important}.py-lg-0{padding-top:0!important;padding-bottom:0!important}.py-lg-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-lg-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-lg-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-lg-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-lg-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-lg-0{padding-top:0!important}.pt-lg-1{padding-top:.25rem!important}.pt-lg-2{padding-top:.5rem!important}.pt-lg-3{padding-top:1rem!important}.pt-lg-4{padding-top:1.5rem!important}.pt-lg-5{padding-top:3rem!important}.pe-lg-0{padding-right:0!important}.pe-lg-1{padding-right:.25rem!important}.pe-lg-2{padding-right:.5rem!important}.pe-lg-3{padding-right:1rem!important}.pe-lg-4{padding-right:1.5rem!important}.pe-lg-5{padding-right:3rem!important}.pb-lg-0{padding-bottom:0!important}.pb-lg-1{padding-bottom:.25rem!important}.pb-lg-2{padding-bottom:.5rem!important}.pb-lg-3{padding-bottom:1rem!important}.pb-lg-4{padding-bottom:1.5rem!important}.pb-lg-5{padding-bottom:3rem!important}.ps-lg-0{padding-left:0!important}.ps-lg-1{padding-left:.25rem!important}.ps-lg-2{padding-left:.5rem!important}.ps-lg-3{padding-left:1rem!important}.ps-lg-4{padding-left:1.5rem!important}.ps-lg-5{padding-left:3rem!important}.text-lg-start{text-align:left!important}.text-lg-end{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.float-xl-start{float:left!important}.float-xl-end{float:right!important}.float-xl-none{float:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-grid{display:grid!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:flex!important}.d-xl-inline-flex{display:inline-flex!important}.d-xl-none{display:none!important}.flex-xl-fill{flex:1 1 auto!important}.flex-xl-row{flex-direction:row!important}.flex-xl-column{flex-direction:column!important}.flex-xl-row-reverse{flex-direction:row-reverse!important}.flex-xl-column-reverse{flex-direction:column-reverse!important}.flex-xl-grow-0{flex-grow:0!important}.flex-xl-grow-1{flex-grow:1!important}.flex-xl-shrink-0{flex-shrink:0!important}.flex-xl-shrink-1{flex-shrink:1!important}.flex-xl-wrap{flex-wrap:wrap!important}.flex-xl-nowrap{flex-wrap:nowrap!important}.flex-xl-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-xl-0{gap:0!important}.gap-xl-1{gap:.25rem!important}.gap-xl-2{gap:.5rem!important}.gap-xl-3{gap:1rem!important}.gap-xl-4{gap:1.5rem!important}.gap-xl-5{gap:3rem!important}.justify-content-xl-start{justify-content:flex-start!important}.justify-content-xl-end{justify-content:flex-end!important}.justify-content-xl-center{justify-content:center!important}.justify-content-xl-between{justify-content:space-between!important}.justify-content-xl-around{justify-content:space-around!important}.justify-content-xl-evenly{justify-content:space-evenly!important}.align-items-xl-start{align-items:flex-start!important}.align-items-xl-end{align-items:flex-end!important}.align-items-xl-center{align-items:center!important}.align-items-xl-baseline{align-items:baseline!important}.align-items-xl-stretch{align-items:stretch!important}.align-content-xl-start{align-content:flex-start!important}.align-content-xl-end{align-content:flex-end!important}.align-content-xl-center{align-content:center!important}.align-content-xl-between{align-content:space-between!important}.align-content-xl-around{align-content:space-around!important}.align-content-xl-stretch{align-content:stretch!important}.align-self-xl-auto{align-self:auto!important}.align-self-xl-start{align-self:flex-start!important}.align-self-xl-end{align-self:flex-end!important}.align-self-xl-center{align-self:center!important}.align-self-xl-baseline{align-self:baseline!important}.align-self-xl-stretch{align-self:stretch!important}.order-xl-first{order:-1!important}.order-xl-0{order:0!important}.order-xl-1{order:1!important}.order-xl-2{order:2!important}.order-xl-3{order:3!important}.order-xl-4{order:4!important}.order-xl-5{order:5!important}.order-xl-last{order:6!important}.m-xl-0{margin:0!important}.m-xl-1{margin:.25rem!important}.m-xl-2{margin:.5rem!important}.m-xl-3{margin:1rem!important}.m-xl-4{margin:1.5rem!important}.m-xl-5{margin:3rem!important}.m-xl-auto{margin:auto!important}.mx-xl-0{margin-right:0!important;margin-left:0!important}.mx-xl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xl-auto{margin-right:auto!important;margin-left:auto!important}.my-xl-0{margin-top:0!important;margin-bottom:0!important}.my-xl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xl-0{margin-top:0!important}.mt-xl-1{margin-top:.25rem!important}.mt-xl-2{margin-top:.5rem!important}.mt-xl-3{margin-top:1rem!important}.mt-xl-4{margin-top:1.5rem!important}.mt-xl-5{margin-top:3rem!important}.mt-xl-auto{margin-top:auto!important}.me-xl-0{margin-right:0!important}.me-xl-1{margin-right:.25rem!important}.me-xl-2{margin-right:.5rem!important}.me-xl-3{margin-right:1rem!important}.me-xl-4{margin-right:1.5rem!important}.me-xl-5{margin-right:3rem!important}.me-xl-auto{margin-right:auto!important}.mb-xl-0{margin-bottom:0!important}.mb-xl-1{margin-bottom:.25rem!important}.mb-xl-2{margin-bottom:.5rem!important}.mb-xl-3{margin-bottom:1rem!important}.mb-xl-4{margin-bottom:1.5rem!important}.mb-xl-5{margin-bottom:3rem!important}.mb-xl-auto{margin-bottom:auto!important}.ms-xl-0{margin-left:0!important}.ms-xl-1{margin-left:.25rem!important}.ms-xl-2{margin-left:.5rem!important}.ms-xl-3{margin-left:1rem!important}.ms-xl-4{margin-left:1.5rem!important}.ms-xl-5{margin-left:3rem!important}.ms-xl-auto{margin-left:auto!important}.p-xl-0{padding:0!important}.p-xl-1{padding:.25rem!important}.p-xl-2{padding:.5rem!important}.p-xl-3{padding:1rem!important}.p-xl-4{padding:1.5rem!important}.p-xl-5{padding:3rem!important}.px-xl-0{padding-right:0!important;padding-left:0!important}.px-xl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xl-0{padding-top:0!important;padding-bottom:0!important}.py-xl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xl-0{padding-top:0!important}.pt-xl-1{padding-top:.25rem!important}.pt-xl-2{padding-top:.5rem!important}.pt-xl-3{padding-top:1rem!important}.pt-xl-4{padding-top:1.5rem!important}.pt-xl-5{padding-top:3rem!important}.pe-xl-0{padding-right:0!important}.pe-xl-1{padding-right:.25rem!important}.pe-xl-2{padding-right:.5rem!important}.pe-xl-3{padding-right:1rem!important}.pe-xl-4{padding-right:1.5rem!important}.pe-xl-5{padding-right:3rem!important}.pb-xl-0{padding-bottom:0!important}.pb-xl-1{padding-bottom:.25rem!important}.pb-xl-2{padding-bottom:.5rem!important}.pb-xl-3{padding-bottom:1rem!important}.pb-xl-4{padding-bottom:1.5rem!important}.pb-xl-5{padding-bottom:3rem!important}.ps-xl-0{padding-left:0!important}.ps-xl-1{padding-left:.25rem!important}.ps-xl-2{padding-left:.5rem!important}.ps-xl-3{padding-left:1rem!important}.ps-xl-4{padding-left:1.5rem!important}.ps-xl-5{padding-left:3rem!important}.text-xl-start{text-align:left!important}.text-xl-end{text-align:right!important}.text-xl-center{text-align:center!important}}@media (min-width:1400px){.float-xxl-start{float:left!important}.float-xxl-end{float:right!important}.float-xxl-none{float:none!important}.d-xxl-inline{display:inline!important}.d-xxl-inline-block{display:inline-block!important}.d-xxl-block{display:block!important}.d-xxl-grid{display:grid!important}.d-xxl-table{display:table!important}.d-xxl-table-row{display:table-row!important}.d-xxl-table-cell{display:table-cell!important}.d-xxl-flex{display:flex!important}.d-xxl-inline-flex{display:inline-flex!important}.d-xxl-none{display:none!important}.flex-xxl-fill{flex:1 1 auto!important}.flex-xxl-row{flex-direction:row!important}.flex-xxl-column{flex-direction:column!important}.flex-xxl-row-reverse{flex-direction:row-reverse!important}.flex-xxl-column-reverse{flex-direction:column-reverse!important}.flex-xxl-grow-0{flex-grow:0!important}.flex-xxl-grow-1{flex-grow:1!important}.flex-xxl-shrink-0{flex-shrink:0!important}.flex-xxl-shrink-1{flex-shrink:1!important}.flex-xxl-wrap{flex-wrap:wrap!important}.flex-xxl-nowrap{flex-wrap:nowrap!important}.flex-xxl-wrap-reverse{flex-wrap:wrap-reverse!important}.gap-xxl-0{gap:0!important}.gap-xxl-1{gap:.25rem!important}.gap-xxl-2{gap:.5rem!important}.gap-xxl-3{gap:1rem!important}.gap-xxl-4{gap:1.5rem!important}.gap-xxl-5{gap:3rem!important}.justify-content-xxl-start{justify-content:flex-start!important}.justify-content-xxl-end{justify-content:flex-end!important}.justify-content-xxl-center{justify-content:center!important}.justify-content-xxl-between{justify-content:space-between!important}.justify-content-xxl-around{justify-content:space-around!important}.justify-content-xxl-evenly{justify-content:space-evenly!important}.align-items-xxl-start{align-items:flex-start!important}.align-items-xxl-end{align-items:flex-end!important}.align-items-xxl-center{align-items:center!important}.align-items-xxl-baseline{align-items:baseline!important}.align-items-xxl-stretch{align-items:stretch!important}.align-content-xxl-start{align-content:flex-start!important}.align-content-xxl-end{align-content:flex-end!important}.align-content-xxl-center{align-content:center!important}.align-content-xxl-between{align-content:space-between!important}.align-content-xxl-around{align-content:space-around!important}.align-content-xxl-stretch{align-content:stretch!important}.align-self-xxl-auto{align-self:auto!important}.align-self-xxl-start{align-self:flex-start!important}.align-self-xxl-end{align-self:flex-end!important}.align-self-xxl-center{align-self:center!important}.align-self-xxl-baseline{align-self:baseline!important}.align-self-xxl-stretch{align-self:stretch!important}.order-xxl-first{order:-1!important}.order-xxl-0{order:0!important}.order-xxl-1{order:1!important}.order-xxl-2{order:2!important}.order-xxl-3{order:3!important}.order-xxl-4{order:4!important}.order-xxl-5{order:5!important}.order-xxl-last{order:6!important}.m-xxl-0{margin:0!important}.m-xxl-1{margin:.25rem!important}.m-xxl-2{margin:.5rem!important}.m-xxl-3{margin:1rem!important}.m-xxl-4{margin:1.5rem!important}.m-xxl-5{margin:3rem!important}.m-xxl-auto{margin:auto!important}.mx-xxl-0{margin-right:0!important;margin-left:0!important}.mx-xxl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xxl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xxl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xxl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xxl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xxl-auto{margin-right:auto!important;margin-left:auto!important}.my-xxl-0{margin-top:0!important;margin-bottom:0!important}.my-xxl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xxl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xxl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xxl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xxl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xxl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xxl-0{margin-top:0!important}.mt-xxl-1{margin-top:.25rem!important}.mt-xxl-2{margin-top:.5rem!important}.mt-xxl-3{margin-top:1rem!important}.mt-xxl-4{margin-top:1.5rem!important}.mt-xxl-5{margin-top:3rem!important}.mt-xxl-auto{margin-top:auto!important}.me-xxl-0{margin-right:0!important}.me-xxl-1{margin-right:.25rem!important}.me-xxl-2{margin-right:.5rem!important}.me-xxl-3{margin-right:1rem!important}.me-xxl-4{margin-right:1.5rem!important}.me-xxl-5{margin-right:3rem!important}.me-xxl-auto{margin-right:auto!important}.mb-xxl-0{margin-bottom:0!important}.mb-xxl-1{margin-bottom:.25rem!important}.mb-xxl-2{margin-bottom:.5rem!important}.mb-xxl-3{margin-bottom:1rem!important}.mb-xxl-4{margin-bottom:1.5rem!important}.mb-xxl-5{margin-bottom:3rem!important}.mb-xxl-auto{margin-bottom:auto!important}.ms-xxl-0{margin-left:0!important}.ms-xxl-1{margin-left:.25rem!important}.ms-xxl-2{margin-left:.5rem!important}.ms-xxl-3{margin-left:1rem!important}.ms-xxl-4{margin-left:1.5rem!important}.ms-xxl-5{margin-left:3rem!important}.ms-xxl-auto{margin-left:auto!important}.p-xxl-0{padding:0!important}.p-xxl-1{padding:.25rem!important}.p-xxl-2{padding:.5rem!important}.p-xxl-3{padding:1rem!important}.p-xxl-4{padding:1.5rem!important}.p-xxl-5{padding:3rem!important}.px-xxl-0{padding-right:0!important;padding-left:0!important}.px-xxl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xxl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xxl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xxl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xxl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xxl-0{padding-top:0!important;padding-bottom:0!important}.py-xxl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xxl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xxl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xxl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xxl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xxl-0{padding-top:0!important}.pt-xxl-1{padding-top:.25rem!important}.pt-xxl-2{padding-top:.5rem!important}.pt-xxl-3{padding-top:1rem!important}.pt-xxl-4{padding-top:1.5rem!important}.pt-xxl-5{padding-top:3rem!important}.pe-xxl-0{padding-right:0!important}.pe-xxl-1{padding-right:.25rem!important}.pe-xxl-2{padding-right:.5rem!important}.pe-xxl-3{padding-right:1rem!important}.pe-xxl-4{padding-right:1.5rem!important}.pe-xxl-5{padding-right:3rem!important}.pb-xxl-0{padding-bottom:0!important}.pb-xxl-1{padding-bottom:.25rem!important}.pb-xxl-2{padding-bottom:.5rem!important}.pb-xxl-3{padding-bottom:1rem!important}.pb-xxl-4{padding-bottom:1.5rem!important}.pb-xxl-5{padding-bottom:3rem!important}.ps-xxl-0{padding-left:0!important}.ps-xxl-1{padding-left:.25rem!important}.ps-xxl-2{padding-left:.5rem!important}.ps-xxl-3{padding-left:1rem!important}.ps-xxl-4{padding-left:1.5rem!important}.ps-xxl-5{padding-left:3rem!important}.text-xxl-start{text-align:left!important}.text-xxl-end{text-align:right!important}.text-xxl-center{text-align:center!important}}@media (min-width:1200px){.fs-1{font-size:2.5rem!important}.fs-2{font-size:2rem!important}.fs-3{font-size:1.75rem!important}.fs-4{font-size:1.5rem!important}}@media print{.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-grid{display:grid!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:flex!important}.d-print-inline-flex{display:inline-flex!important}.d-print-none{display:none!important}}
/*# sourceMappingURL=bootstrap.min.css.map */
@font-face {
  font-family: "bootstrap-icons";
  src: url("./fonts/bootstrap-icons.woff2?a74547b2f0863226942ff8ded57db345") format("woff2"),
url("./fonts/bootstrap-icons.woff?a74547b2f0863226942ff8ded57db345") format("woff");
}

.bi::before,
[class^="bi-"]::before,
[class*=" bi-"]::before {
  display: inline-block;
  font-family: bootstrap-icons !important;
  font-style: normal;
  font-weight: normal !important;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  vertical-align: -.125em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.bi-123::before { content: "\f67f"; }
.bi-alarm-fill::before { content: "\f101"; }
.bi-alarm::before { content: "\f102"; }
.bi-align-bottom::before { content: "\f103"; }
.bi-align-center::before { content: "\f104"; }
.bi-align-end::before { content: "\f105"; }
.bi-align-middle::before { content: "\f106"; }
.bi-align-start::before { content: "\f107"; }
.bi-align-top::before { content: "\f108"; }
.bi-alt::before { content: "\f109"; }
.bi-app-indicator::before { content: "\f10a"; }
.bi-app::before { content: "\f10b"; }
.bi-archive-fill::before { content: "\f10c"; }
.bi-archive::before { content: "\f10d"; }
.bi-arrow-90deg-down::before { content: "\f10e"; }
.bi-arrow-90deg-left::before { content: "\f10f"; }
.bi-arrow-90deg-right::before { content: "\f110"; }
.bi-arrow-90deg-up::before { content: "\f111"; }
.bi-arrow-bar-down::before { content: "\f112"; }
.bi-arrow-bar-left::before { content: "\f113"; }
.bi-arrow-bar-right::before { content: "\f114"; }
.bi-arrow-bar-up::before { content: "\f115"; }
.bi-arrow-clockwise::before { content: "\f116"; }
.bi-arrow-counterclockwise::before { content: "\f117"; }
.bi-arrow-down-circle-fill::before { content: "\f118"; }
.bi-arrow-down-circle::before { content: "\f119"; }
.bi-arrow-down-left-circle-fill::before { content: "\f11a"; }
.bi-arrow-down-left-circle::before { content: "\f11b"; }
.bi-arrow-down-left-square-fill::before { content: "\f11c"; }
.bi-arrow-down-left-square::before { content: "\f11d"; }
.bi-arrow-down-left::before { content: "\f11e"; }
.bi-arrow-down-right-circle-fill::before { content: "\f11f"; }
.bi-arrow-down-right-circle::before { content: "\f120"; }
.bi-arrow-down-right-square-fill::before { content: "\f121"; }
.bi-arrow-down-right-square::before { content: "\f122"; }
.bi-arrow-down-right::before { content: "\f123"; }
.bi-arrow-down-short::before { content: "\f124"; }
.bi-arrow-down-square-fill::before { content: "\f125"; }
.bi-arrow-down-square::before { content: "\f126"; }
.bi-arrow-down-up::before { content: "\f127"; }
.bi-arrow-down::before { content: "\f128"; }
.bi-arrow-left-circle-fill::before { content: "\f129"; }
.bi-arrow-left-circle::before { content: "\f12a"; }
.bi-arrow-left-right::before { content: "\f12b"; }
.bi-arrow-left-short::before { content: "\f12c"; }
.bi-arrow-left-square-fill::before { content: "\f12d"; }
.bi-arrow-left-square::before { content: "\f12e"; }
.bi-arrow-left::before { content: "\f12f"; }
.bi-arrow-repeat::before { content: "\f130"; }
.bi-arrow-return-left::before { content: "\f131"; }
.bi-arrow-return-right::before { content: "\f132"; }
.bi-arrow-right-circle-fill::before { content: "\f133"; }
.bi-arrow-right-circle::before { content: "\f134"; }
.bi-arrow-right-short::before { content: "\f135"; }
.bi-arrow-right-square-fill::before { content: "\f136"; }
.bi-arrow-right-square::before { content: "\f137"; }
.bi-arrow-right::before { content: "\f138"; }
.bi-arrow-up-circle-fill::before { content: "\f139"; }
.bi-arrow-up-circle::before { content: "\f13a"; }
.bi-arrow-up-left-circle-fill::before { content: "\f13b"; }
.bi-arrow-up-left-circle::before { content: "\f13c"; }
.bi-arrow-up-left-square-fill::before { content: "\f13d"; }
.bi-arrow-up-left-square::before { content: "\f13e"; }
.bi-arrow-up-left::before { content: "\f13f"; }
.bi-arrow-up-right-circle-fill::before { content: "\f140"; }
.bi-arrow-up-right-circle::before { content: "\f141"; }
.bi-arrow-up-right-square-fill::before { content: "\f142"; }
.bi-arrow-up-right-square::before { content: "\f143"; }
.bi-arrow-up-right::before { content: "\f144"; }
.bi-arrow-up-short::before { content: "\f145"; }
.bi-arrow-up-square-fill::before { content: "\f146"; }
.bi-arrow-up-square::before { content: "\f147"; }
.bi-arrow-up::before { content: "\f148"; }
.bi-arrows-angle-contract::before { content: "\f149"; }
.bi-arrows-angle-expand::before { content: "\f14a"; }
.bi-arrows-collapse::before { content: "\f14b"; }
.bi-arrows-expand::before { content: "\f14c"; }
.bi-arrows-fullscreen::before { content: "\f14d"; }
.bi-arrows-move::before { content: "\f14e"; }
.bi-aspect-ratio-fill::before { content: "\f14f"; }
.bi-aspect-ratio::before { content: "\f150"; }
.bi-asterisk::before { content: "\f151"; }
.bi-at::before { content: "\f152"; }
.bi-award-fill::before { content: "\f153"; }
.bi-award::before { content: "\f154"; }
.bi-back::before { content: "\f155"; }
.bi-backspace-fill::before { content: "\f156"; }
.bi-backspace-reverse-fill::before { content: "\f157"; }
.bi-backspace-reverse::before { content: "\f158"; }
.bi-backspace::before { content: "\f159"; }
.bi-badge-3d-fill::before { content: "\f15a"; }
.bi-badge-3d::before { content: "\f15b"; }
.bi-badge-4k-fill::before { content: "\f15c"; }
.bi-badge-4k::before { content: "\f15d"; }
.bi-badge-8k-fill::before { content: "\f15e"; }
.bi-badge-8k::before { content: "\f15f"; }
.bi-badge-ad-fill::before { content: "\f160"; }
.bi-badge-ad::before { content: "\f161"; }
.bi-badge-ar-fill::before { content: "\f162"; }
.bi-badge-ar::before { content: "\f163"; }
.bi-badge-cc-fill::before { content: "\f164"; }
.bi-badge-cc::before { content: "\f165"; }
.bi-badge-hd-fill::before { content: "\f166"; }
.bi-badge-hd::before { content: "\f167"; }
.bi-badge-tm-fill::before { content: "\f168"; }
.bi-badge-tm::before { content: "\f169"; }
.bi-badge-vo-fill::before { content: "\f16a"; }
.bi-badge-vo::before { content: "\f16b"; }
.bi-badge-vr-fill::before { content: "\f16c"; }
.bi-badge-vr::before { content: "\f16d"; }
.bi-badge-wc-fill::before { content: "\f16e"; }
.bi-badge-wc::before { content: "\f16f"; }
.bi-bag-check-fill::before { content: "\f170"; }
.bi-bag-check::before { content: "\f171"; }
.bi-bag-dash-fill::before { content: "\f172"; }
.bi-bag-dash::before { content: "\f173"; }
.bi-bag-fill::before { content: "\f174"; }
.bi-bag-plus-fill::before { content: "\f175"; }
.bi-bag-plus::before { content: "\f176"; }
.bi-bag-x-fill::before { content: "\f177"; }
.bi-bag-x::before { content: "\f178"; }
.bi-bag::before { content: "\f179"; }
.bi-bar-chart-fill::before { content: "\f17a"; }
.bi-bar-chart-line-fill::before { content: "\f17b"; }
.bi-bar-chart-line::before { content: "\f17c"; }
.bi-bar-chart-steps::before { content: "\f17d"; }
.bi-bar-chart::before { content: "\f17e"; }
.bi-basket-fill::before { content: "\f17f"; }
.bi-basket::before { content: "\f180"; }
.bi-basket2-fill::before { content: "\f181"; }
.bi-basket2::before { content: "\f182"; }
.bi-basket3-fill::before { content: "\f183"; }
.bi-basket3::before { content: "\f184"; }
.bi-battery-charging::before { content: "\f185"; }
.bi-battery-full::before { content: "\f186"; }
.bi-battery-half::before { content: "\f187"; }
.bi-battery::before { content: "\f188"; }
.bi-bell-fill::before { content: "\f189"; }
.bi-bell::before { content: "\f18a"; }
.bi-bezier::before { content: "\f18b"; }
.bi-bezier2::before { content: "\f18c"; }
.bi-bicycle::before { content: "\f18d"; }
.bi-binoculars-fill::before { content: "\f18e"; }
.bi-binoculars::before { content: "\f18f"; }
.bi-blockquote-left::before { content: "\f190"; }
.bi-blockquote-right::before { content: "\f191"; }
.bi-book-fill::before { content: "\f192"; }
.bi-book-half::before { content: "\f193"; }
.bi-book::before { content: "\f194"; }
.bi-bookmark-check-fill::before { content: "\f195"; }
.bi-bookmark-check::before { content: "\f196"; }
.bi-bookmark-dash-fill::before { content: "\f197"; }
.bi-bookmark-dash::before { content: "\f198"; }
.bi-bookmark-fill::before { content: "\f199"; }
.bi-bookmark-heart-fill::before { content: "\f19a"; }
.bi-bookmark-heart::before { content: "\f19b"; }
.bi-bookmark-plus-fill::before { content: "\f19c"; }
.bi-bookmark-plus::before { content: "\f19d"; }
.bi-bookmark-star-fill::before { content: "\f19e"; }
.bi-bookmark-star::before { content: "\f19f"; }
.bi-bookmark-x-fill::before { content: "\f1a0"; }
.bi-bookmark-x::before { content: "\f1a1"; }
.bi-bookmark::before { content: "\f1a2"; }
.bi-bookmarks-fill::before { content: "\f1a3"; }
.bi-bookmarks::before { content: "\f1a4"; }
.bi-bookshelf::before { content: "\f1a5"; }
.bi-bootstrap-fill::before { content: "\f1a6"; }
.bi-bootstrap-reboot::before { content: "\f1a7"; }
.bi-bootstrap::before { content: "\f1a8"; }
.bi-border-all::before { content: "\f1a9"; }
.bi-border-bottom::before { content: "\f1aa"; }
.bi-border-center::before { content: "\f1ab"; }
.bi-border-inner::before { content: "\f1ac"; }
.bi-border-left::before { content: "\f1ad"; }
.bi-border-middle::before { content: "\f1ae"; }
.bi-border-outer::before { content: "\f1af"; }
.bi-border-right::before { content: "\f1b0"; }
.bi-border-style::before { content: "\f1b1"; }
.bi-border-top::before { content: "\f1b2"; }
.bi-border-width::before { content: "\f1b3"; }
.bi-border::before { content: "\f1b4"; }
.bi-bounding-box-circles::before { content: "\f1b5"; }
.bi-bounding-box::before { content: "\f1b6"; }
.bi-box-arrow-down-left::before { content: "\f1b7"; }
.bi-box-arrow-down-right::before { content: "\f1b8"; }
.bi-box-arrow-down::before { content: "\f1b9"; }
.bi-box-arrow-in-down-left::before { content: "\f1ba"; }
.bi-box-arrow-in-down-right::before { content: "\f1bb"; }
.bi-box-arrow-in-down::before { content: "\f1bc"; }
.bi-box-arrow-in-left::before { content: "\f1bd"; }
.bi-box-arrow-in-right::before { content: "\f1be"; }
.bi-box-arrow-in-up-left::before { content: "\f1bf"; }
.bi-box-arrow-in-up-right::before { content: "\f1c0"; }
.bi-box-arrow-in-up::before { content: "\f1c1"; }
.bi-box-arrow-left::before { content: "\f1c2"; }
.bi-box-arrow-right::before { content: "\f1c3"; }
.bi-box-arrow-up-left::before { content: "\f1c4"; }
.bi-box-arrow-up-right::before { content: "\f1c5"; }
.bi-box-arrow-up::before { content: "\f1c6"; }
.bi-box-seam::before { content: "\f1c7"; }
.bi-box::before { content: "\f1c8"; }
.bi-braces::before { content: "\f1c9"; }
.bi-bricks::before { content: "\f1ca"; }
.bi-briefcase-fill::before { content: "\f1cb"; }
.bi-briefcase::before { content: "\f1cc"; }
.bi-brightness-alt-high-fill::before { content: "\f1cd"; }
.bi-brightness-alt-high::before { content: "\f1ce"; }
.bi-brightness-alt-low-fill::before { content: "\f1cf"; }
.bi-brightness-alt-low::before { content: "\f1d0"; }
.bi-brightness-high-fill::before { content: "\f1d1"; }
.bi-brightness-high::before { content: "\f1d2"; }
.bi-brightness-low-fill::before { content: "\f1d3"; }
.bi-brightness-low::before { content: "\f1d4"; }
.bi-broadcast-pin::before { content: "\f1d5"; }
.bi-broadcast::before { content: "\f1d6"; }
.bi-brush-fill::before { content: "\f1d7"; }
.bi-brush::before { content: "\f1d8"; }
.bi-bucket-fill::before { content: "\f1d9"; }
.bi-bucket::before { content: "\f1da"; }
.bi-bug-fill::before { content: "\f1db"; }
.bi-bug::before { content: "\f1dc"; }
.bi-building::before { content: "\f1dd"; }
.bi-bullseye::before { content: "\f1de"; }
.bi-calculator-fill::before { content: "\f1df"; }
.bi-calculator::before { content: "\f1e0"; }
.bi-calendar-check-fill::before { content: "\f1e1"; }
.bi-calendar-check::before { content: "\f1e2"; }
.bi-calendar-date-fill::before { content: "\f1e3"; }
.bi-calendar-date::before { content: "\f1e4"; }
.bi-calendar-day-fill::before { content: "\f1e5"; }
.bi-calendar-day::before { content: "\f1e6"; }
.bi-calendar-event-fill::before { content: "\f1e7"; }
.bi-calendar-event::before { content: "\f1e8"; }
.bi-calendar-fill::before { content: "\f1e9"; }
.bi-calendar-minus-fill::before { content: "\f1ea"; }
.bi-calendar-minus::before { content: "\f1eb"; }
.bi-calendar-month-fill::before { content: "\f1ec"; }
.bi-calendar-month::before { content: "\f1ed"; }
.bi-calendar-plus-fill::before { content: "\f1ee"; }
.bi-calendar-plus::before { content: "\f1ef"; }
.bi-calendar-range-fill::before { content: "\f1f0"; }
.bi-calendar-range::before { content: "\f1f1"; }
.bi-calendar-week-fill::before { content: "\f1f2"; }
.bi-calendar-week::before { content: "\f1f3"; }
.bi-calendar-x-fill::before { content: "\f1f4"; }
.bi-calendar-x::before { content: "\f1f5"; }
.bi-calendar::before { content: "\f1f6"; }
.bi-calendar2-check-fill::before { content: "\f1f7"; }
.bi-calendar2-check::before { content: "\f1f8"; }
.bi-calendar2-date-fill::before { content: "\f1f9"; }
.bi-calendar2-date::before { content: "\f1fa"; }
.bi-calendar2-day-fill::before { content: "\f1fb"; }
.bi-calendar2-day::before { content: "\f1fc"; }
.bi-calendar2-event-fill::before { content: "\f1fd"; }
.bi-calendar2-event::before { content: "\f1fe"; }
.bi-calendar2-fill::before { content: "\f1ff"; }
.bi-calendar2-minus-fill::before { content: "\f200"; }
.bi-calendar2-minus::before { content: "\f201"; }
.bi-calendar2-month-fill::before { content: "\f202"; }
.bi-calendar2-month::before { content: "\f203"; }
.bi-calendar2-plus-fill::before { content: "\f204"; }
.bi-calendar2-plus::before { content: "\f205"; }
.bi-calendar2-range-fill::before { content: "\f206"; }
.bi-calendar2-range::before { content: "\f207"; }
.bi-calendar2-week-fill::before { content: "\f208"; }
.bi-calendar2-week::before { content: "\f209"; }
.bi-calendar2-x-fill::before { content: "\f20a"; }
.bi-calendar2-x::before { content: "\f20b"; }
.bi-calendar2::before { content: "\f20c"; }
.bi-calendar3-event-fill::before { content: "\f20d"; }
.bi-calendar3-event::before { content: "\f20e"; }
.bi-calendar3-fill::before { content: "\f20f"; }
.bi-calendar3-range-fill::before { content: "\f210"; }
.bi-calendar3-range::before { content: "\f211"; }
.bi-calendar3-week-fill::before { content: "\f212"; }
.bi-calendar3-week::before { content: "\f213"; }
.bi-calendar3::before { content: "\f214"; }
.bi-calendar4-event::before { content: "\f215"; }
.bi-calendar4-range::before { content: "\f216"; }
.bi-calendar4-week::before { content: "\f217"; }
.bi-calendar4::before { content: "\f218"; }
.bi-camera-fill::before { content: "\f219"; }
.bi-camera-reels-fill::before { content: "\f21a"; }
.bi-camera-reels::before { content: "\f21b"; }
.bi-camera-video-fill::before { content: "\f21c"; }
.bi-camera-video-off-fill::before { content: "\f21d"; }
.bi-camera-video-off::before { content: "\f21e"; }
.bi-camera-video::before { content: "\f21f"; }
.bi-camera::before { content: "\f220"; }
.bi-camera2::before { content: "\f221"; }
.bi-capslock-fill::before { content: "\f222"; }
.bi-capslock::before { content: "\f223"; }
.bi-card-checklist::before { content: "\f224"; }
.bi-card-heading::before { content: "\f225"; }
.bi-card-image::before { content: "\f226"; }
.bi-card-list::before { content: "\f227"; }
.bi-card-text::before { content: "\f228"; }
.bi-caret-down-fill::before { content: "\f229"; }
.bi-caret-down-square-fill::before { content: "\f22a"; }
.bi-caret-down-square::before { content: "\f22b"; }
.bi-caret-down::before { content: "\f22c"; }
.bi-caret-left-fill::before { content: "\f22d"; }
.bi-caret-left-square-fill::before { content: "\f22e"; }
.bi-caret-left-square::before { content: "\f22f"; }
.bi-caret-left::before { content: "\f230"; }
.bi-caret-right-fill::before { content: "\f231"; }
.bi-caret-right-square-fill::before { content: "\f232"; }
.bi-caret-right-square::before { content: "\f233"; }
.bi-caret-right::before { content: "\f234"; }
.bi-caret-up-fill::before { content: "\f235"; }
.bi-caret-up-square-fill::before { content: "\f236"; }
.bi-caret-up-square::before { content: "\f237"; }
.bi-caret-up::before { content: "\f238"; }
.bi-cart-check-fill::before { content: "\f239"; }
.bi-cart-check::before { content: "\f23a"; }
.bi-cart-dash-fill::before { content: "\f23b"; }
.bi-cart-dash::before { content: "\f23c"; }
.bi-cart-fill::before { content: "\f23d"; }
.bi-cart-plus-fill::before { content: "\f23e"; }
.bi-cart-plus::before { content: "\f23f"; }
.bi-cart-x-fill::before { content: "\f240"; }
.bi-cart-x::before { content: "\f241"; }
.bi-cart::before { content: "\f242"; }
.bi-cart2::before { content: "\f243"; }
.bi-cart3::before { content: "\f244"; }
.bi-cart4::before { content: "\f245"; }
.bi-cash-stack::before { content: "\f246"; }
.bi-cash::before { content: "\f247"; }
.bi-cast::before { content: "\f248"; }
.bi-chat-dots-fill::before { content: "\f249"; }
.bi-chat-dots::before { content: "\f24a"; }
.bi-chat-fill::before { content: "\f24b"; }
.bi-chat-left-dots-fill::before { content: "\f24c"; }
.bi-chat-left-dots::before { content: "\f24d"; }
.bi-chat-left-fill::before { content: "\f24e"; }
.bi-chat-left-quote-fill::before { content: "\f24f"; }
.bi-chat-left-quote::before { content: "\f250"; }
.bi-chat-left-text-fill::before { content: "\f251"; }
.bi-chat-left-text::before { content: "\f252"; }
.bi-chat-left::before { content: "\f253"; }
.bi-chat-quote-fill::before { content: "\f254"; }
.bi-chat-quote::before { content: "\f255"; }
.bi-chat-right-dots-fill::before { content: "\f256"; }
.bi-chat-right-dots::before { content: "\f257"; }
.bi-chat-right-fill::before { content: "\f258"; }
.bi-chat-right-quote-fill::before { content: "\f259"; }
.bi-chat-right-quote::before { content: "\f25a"; }
.bi-chat-right-text-fill::before { content: "\f25b"; }
.bi-chat-right-text::before { content: "\f25c"; }
.bi-chat-right::before { content: "\f25d"; }
.bi-chat-square-dots-fill::before { content: "\f25e"; }
.bi-chat-square-dots::before { content: "\f25f"; }
.bi-chat-square-fill::before { content: "\f260"; }
.bi-chat-square-quote-fill::before { content: "\f261"; }
.bi-chat-square-quote::before { content: "\f262"; }
.bi-chat-square-text-fill::before { content: "\f263"; }
.bi-chat-square-text::before { content: "\f264"; }
.bi-chat-square::before { content: "\f265"; }
.bi-chat-text-fill::before { content: "\f266"; }
.bi-chat-text::before { content: "\f267"; }
.bi-chat::before { content: "\f268"; }
.bi-check-all::before { content: "\f269"; }
.bi-check-circle-fill::before { content: "\f26a"; }
.bi-check-circle::before { content: "\f26b"; }
.bi-check-square-fill::before { content: "\f26c"; }
.bi-check-square::before { content: "\f26d"; }
.bi-check::before { content: "\f26e"; }
.bi-check2-all::before { content: "\f26f"; }
.bi-check2-circle::before { content: "\f270"; }
.bi-check2-square::before { content: "\f271"; }
.bi-check2::before { content: "\f272"; }
.bi-chevron-bar-contract::before { content: "\f273"; }
.bi-chevron-bar-down::before { content: "\f274"; }
.bi-chevron-bar-expand::before { content: "\f275"; }
.bi-chevron-bar-left::before { content: "\f276"; }
.bi-chevron-bar-right::before { content: "\f277"; }
.bi-chevron-bar-up::before { content: "\f278"; }
.bi-chevron-compact-down::before { content: "\f279"; }
.bi-chevron-compact-left::before { content: "\f27a"; }
.bi-chevron-compact-right::before { content: "\f27b"; }
.bi-chevron-compact-up::before { content: "\f27c"; }
.bi-chevron-contract::before { content: "\f27d"; }
.bi-chevron-double-down::before { content: "\f27e"; }
.bi-chevron-double-left::before { content: "\f27f"; }
.bi-chevron-double-right::before { content: "\f280"; }
.bi-chevron-double-up::before { content: "\f281"; }
.bi-chevron-down::before { content: "\f282"; }
.bi-chevron-expand::before { content: "\f283"; }
.bi-chevron-left::before { content: "\f284"; }
.bi-chevron-right::before { content: "\f285"; }
.bi-chevron-up::before { content: "\f286"; }
.bi-circle-fill::before { content: "\f287"; }
.bi-circle-half::before { content: "\f288"; }
.bi-circle-square::before { content: "\f289"; }
.bi-circle::before { content: "\f28a"; }
.bi-clipboard-check::before { content: "\f28b"; }
.bi-clipboard-data::before { content: "\f28c"; }
.bi-clipboard-minus::before { content: "\f28d"; }
.bi-clipboard-plus::before { content: "\f28e"; }
.bi-clipboard-x::before { content: "\f28f"; }
.bi-clipboard::before { content: "\f290"; }
.bi-clock-fill::before { content: "\f291"; }
.bi-clock-history::before { content: "\f292"; }
.bi-clock::before { content: "\f293"; }
.bi-cloud-arrow-down-fill::before { content: "\f294"; }
.bi-cloud-arrow-down::before { content: "\f295"; }
.bi-cloud-arrow-up-fill::before { content: "\f296"; }
.bi-cloud-arrow-up::before { content: "\f297"; }
.bi-cloud-check-fill::before { content: "\f298"; }
.bi-cloud-check::before { content: "\f299"; }
.bi-cloud-download-fill::before { content: "\f29a"; }
.bi-cloud-download::before { content: "\f29b"; }
.bi-cloud-drizzle-fill::before { content: "\f29c"; }
.bi-cloud-drizzle::before { content: "\f29d"; }
.bi-cloud-fill::before { content: "\f29e"; }
.bi-cloud-fog-fill::before { content: "\f29f"; }
.bi-cloud-fog::before { content: "\f2a0"; }
.bi-cloud-fog2-fill::before { content: "\f2a1"; }
.bi-cloud-fog2::before { content: "\f2a2"; }
.bi-cloud-hail-fill::before { content: "\f2a3"; }
.bi-cloud-hail::before { content: "\f2a4"; }
.bi-cloud-haze-1::before { content: "\f2a5"; }
.bi-cloud-haze-fill::before { content: "\f2a6"; }
.bi-cloud-haze::before { content: "\f2a7"; }
.bi-cloud-haze2-fill::before { content: "\f2a8"; }
.bi-cloud-lightning-fill::before { content: "\f2a9"; }
.bi-cloud-lightning-rain-fill::before { content: "\f2aa"; }
.bi-cloud-lightning-rain::before { content: "\f2ab"; }
.bi-cloud-lightning::before { content: "\f2ac"; }
.bi-cloud-minus-fill::before { content: "\f2ad"; }
.bi-cloud-minus::before { content: "\f2ae"; }
.bi-cloud-moon-fill::before { content: "\f2af"; }
.bi-cloud-moon::before { content: "\f2b0"; }
.bi-cloud-plus-fill::before { content: "\f2b1"; }
.bi-cloud-plus::before { content: "\f2b2"; }
.bi-cloud-rain-fill::before { content: "\f2b3"; }
.bi-cloud-rain-heavy-fill::before { content: "\f2b4"; }
.bi-cloud-rain-heavy::before { content: "\f2b5"; }
.bi-cloud-rain::before { content: "\f2b6"; }
.bi-cloud-slash-fill::before { content: "\f2b7"; }
.bi-cloud-slash::before { content: "\f2b8"; }
.bi-cloud-sleet-fill::before { content: "\f2b9"; }
.bi-cloud-sleet::before { content: "\f2ba"; }
.bi-cloud-snow-fill::before { content: "\f2bb"; }
.bi-cloud-snow::before { content: "\f2bc"; }
.bi-cloud-sun-fill::before { content: "\f2bd"; }
.bi-cloud-sun::before { content: "\f2be"; }
.bi-cloud-upload-fill::before { content: "\f2bf"; }
.bi-cloud-upload::before { content: "\f2c0"; }
.bi-cloud::before { content: "\f2c1"; }
.bi-clouds-fill::before { content: "\f2c2"; }
.bi-clouds::before { content: "\f2c3"; }
.bi-cloudy-fill::before { content: "\f2c4"; }
.bi-cloudy::before { content: "\f2c5"; }
.bi-code-slash::before { content: "\f2c6"; }
.bi-code-square::before { content: "\f2c7"; }
.bi-code::before { content: "\f2c8"; }
.bi-collection-fill::before { content: "\f2c9"; }
.bi-collection-play-fill::before { content: "\f2ca"; }
.bi-collection-play::before { content: "\f2cb"; }
.bi-collection::before { content: "\f2cc"; }
.bi-columns-gap::before { content: "\f2cd"; }
.bi-columns::before { content: "\f2ce"; }
.bi-command::before { content: "\f2cf"; }
.bi-compass-fill::before { content: "\f2d0"; }
.bi-compass::before { content: "\f2d1"; }
.bi-cone-striped::before { content: "\f2d2"; }
.bi-cone::before { content: "\f2d3"; }
.bi-controller::before { content: "\f2d4"; }
.bi-cpu-fill::before { content: "\f2d5"; }
.bi-cpu::before { content: "\f2d6"; }
.bi-credit-card-2-back-fill::before { content: "\f2d7"; }
.bi-credit-card-2-back::before { content: "\f2d8"; }
.bi-credit-card-2-front-fill::before { content: "\f2d9"; }
.bi-credit-card-2-front::before { content: "\f2da"; }
.bi-credit-card-fill::before { content: "\f2db"; }
.bi-credit-card::before { content: "\f2dc"; }
.bi-crop::before { content: "\f2dd"; }
.bi-cup-fill::before { content: "\f2de"; }
.bi-cup-straw::before { content: "\f2df"; }
.bi-cup::before { content: "\f2e0"; }
.bi-cursor-fill::before { content: "\f2e1"; }
.bi-cursor-text::before { content: "\f2e2"; }
.bi-cursor::before { content: "\f2e3"; }
.bi-dash-circle-dotted::before { content: "\f2e4"; }
.bi-dash-circle-fill::before { content: "\f2e5"; }
.bi-dash-circle::before { content: "\f2e6"; }
.bi-dash-square-dotted::before { content: "\f2e7"; }
.bi-dash-square-fill::before { content: "\f2e8"; }
.bi-dash-square::before { content: "\f2e9"; }
.bi-dash::before { content: "\f2ea"; }
.bi-diagram-2-fill::before { content: "\f2eb"; }
.bi-diagram-2::before { content: "\f2ec"; }
.bi-diagram-3-fill::before { content: "\f2ed"; }
.bi-diagram-3::before { content: "\f2ee"; }
.bi-diamond-fill::before { content: "\f2ef"; }
.bi-diamond-half::before { content: "\f2f0"; }
.bi-diamond::before { content: "\f2f1"; }
.bi-dice-1-fill::before { content: "\f2f2"; }
.bi-dice-1::before { content: "\f2f3"; }
.bi-dice-2-fill::before { content: "\f2f4"; }
.bi-dice-2::before { content: "\f2f5"; }
.bi-dice-3-fill::before { content: "\f2f6"; }
.bi-dice-3::before { content: "\f2f7"; }
.bi-dice-4-fill::before { content: "\f2f8"; }
.bi-dice-4::before { content: "\f2f9"; }
.bi-dice-5-fill::before { content: "\f2fa"; }
.bi-dice-5::before { content: "\f2fb"; }
.bi-dice-6-fill::before { content: "\f2fc"; }
.bi-dice-6::before { content: "\f2fd"; }
.bi-disc-fill::before { content: "\f2fe"; }
.bi-disc::before { content: "\f2ff"; }
.bi-discord::before { content: "\f300"; }
.bi-display-fill::before { content: "\f301"; }
.bi-display::before { content: "\f302"; }
.bi-distribute-horizontal::before { content: "\f303"; }
.bi-distribute-vertical::before { content: "\f304"; }
.bi-door-closed-fill::before { content: "\f305"; }
.bi-door-closed::before { content: "\f306"; }
.bi-door-open-fill::before { content: "\f307"; }
.bi-door-open::before { content: "\f308"; }
.bi-dot::before { content: "\f309"; }
.bi-download::before { content: "\f30a"; }
.bi-droplet-fill::before { content: "\f30b"; }
.bi-droplet-half::before { content: "\f30c"; }
.bi-droplet::before { content: "\f30d"; }
.bi-earbuds::before { content: "\f30e"; }
.bi-easel-fill::before { content: "\f30f"; }
.bi-easel::before { content: "\f310"; }
.bi-egg-fill::before { content: "\f311"; }
.bi-egg-fried::before { content: "\f312"; }
.bi-egg::before { content: "\f313"; }
.bi-eject-fill::before { content: "\f314"; }
.bi-eject::before { content: "\f315"; }
.bi-emoji-angry-fill::before { content: "\f316"; }
.bi-emoji-angry::before { content: "\f317"; }
.bi-emoji-dizzy-fill::before { content: "\f318"; }
.bi-emoji-dizzy::before { content: "\f319"; }
.bi-emoji-expressionless-fill::before { content: "\f31a"; }
.bi-emoji-expressionless::before { content: "\f31b"; }
.bi-emoji-frown-fill::before { content: "\f31c"; }
.bi-emoji-frown::before { content: "\f31d"; }
.bi-emoji-heart-eyes-fill::before { content: "\f31e"; }
.bi-emoji-heart-eyes::before { content: "\f31f"; }
.bi-emoji-laughing-fill::before { content: "\f320"; }
.bi-emoji-laughing::before { content: "\f321"; }
.bi-emoji-neutral-fill::before { content: "\f322"; }
.bi-emoji-neutral::before { content: "\f323"; }
.bi-emoji-smile-fill::before { content: "\f324"; }
.bi-emoji-smile-upside-down-fill::before { content: "\f325"; }
.bi-emoji-smile-upside-down::before { content: "\f326"; }
.bi-emoji-smile::before { content: "\f327"; }
.bi-emoji-sunglasses-fill::before { content: "\f328"; }
.bi-emoji-sunglasses::before { content: "\f329"; }
.bi-emoji-wink-fill::before { content: "\f32a"; }
.bi-emoji-wink::before { content: "\f32b"; }
.bi-envelope-fill::before { content: "\f32c"; }
.bi-envelope-open-fill::before { content: "\f32d"; }
.bi-envelope-open::before { content: "\f32e"; }
.bi-envelope::before { content: "\f32f"; }
.bi-eraser-fill::before { content: "\f330"; }
.bi-eraser::before { content: "\f331"; }
.bi-exclamation-circle-fill::before { content: "\f332"; }
.bi-exclamation-circle::before { content: "\f333"; }
.bi-exclamation-diamond-fill::before { content: "\f334"; }
.bi-exclamation-diamond::before { content: "\f335"; }
.bi-exclamation-octagon-fill::before { content: "\f336"; }
.bi-exclamation-octagon::before { content: "\f337"; }
.bi-exclamation-square-fill::before { content: "\f338"; }
.bi-exclamation-square::before { content: "\f339"; }
.bi-exclamation-triangle-fill::before { content: "\f33a"; }
.bi-exclamation-triangle::before { content: "\f33b"; }
.bi-exclamation::before { content: "\f33c"; }
.bi-exclude::before { content: "\f33d"; }
.bi-eye-fill::before { content: "\f33e"; }
.bi-eye-slash-fill::before { content: "\f33f"; }
.bi-eye-slash::before { content: "\f340"; }
.bi-eye::before { content: "\f341"; }
.bi-eyedropper::before { content: "\f342"; }
.bi-eyeglasses::before { content: "\f343"; }
.bi-facebook::before { content: "\f344"; }
.bi-file-arrow-down-fill::before { content: "\f345"; }
.bi-file-arrow-down::before { content: "\f346"; }
.bi-file-arrow-up-fill::before { content: "\f347"; }
.bi-file-arrow-up::before { content: "\f348"; }
.bi-file-bar-graph-fill::before { content: "\f349"; }
.bi-file-bar-graph::before { content: "\f34a"; }
.bi-file-binary-fill::before { content: "\f34b"; }
.bi-file-binary::before { content: "\f34c"; }
.bi-file-break-fill::before { content: "\f34d"; }
.bi-file-break::before { content: "\f34e"; }
.bi-file-check-fill::before { content: "\f34f"; }
.bi-file-check::before { content: "\f350"; }
.bi-file-code-fill::before { content: "\f351"; }
.bi-file-code::before { content: "\f352"; }
.bi-file-diff-fill::before { content: "\f353"; }
.bi-file-diff::before { content: "\f354"; }
.bi-file-earmark-arrow-down-fill::before { content: "\f355"; }
.bi-file-earmark-arrow-down::before { content: "\f356"; }
.bi-file-earmark-arrow-up-fill::before { content: "\f357"; }
.bi-file-earmark-arrow-up::before { content: "\f358"; }
.bi-file-earmark-bar-graph-fill::before { content: "\f359"; }
.bi-file-earmark-bar-graph::before { content: "\f35a"; }
.bi-file-earmark-binary-fill::before { content: "\f35b"; }
.bi-file-earmark-binary::before { content: "\f35c"; }
.bi-file-earmark-break-fill::before { content: "\f35d"; }
.bi-file-earmark-break::before { content: "\f35e"; }
.bi-file-earmark-check-fill::before { content: "\f35f"; }
.bi-file-earmark-check::before { content: "\f360"; }
.bi-file-earmark-code-fill::before { content: "\f361"; }
.bi-file-earmark-code::before { content: "\f362"; }
.bi-file-earmark-diff-fill::before { content: "\f363"; }
.bi-file-earmark-diff::before { content: "\f364"; }
.bi-file-earmark-easel-fill::before { content: "\f365"; }
.bi-file-earmark-easel::before { content: "\f366"; }
.bi-file-earmark-excel-fill::before { content: "\f367"; }
.bi-file-earmark-excel::before { content: "\f368"; }
.bi-file-earmark-fill::before { content: "\f369"; }
.bi-file-earmark-font-fill::before { content: "\f36a"; }
.bi-file-earmark-font::before { content: "\f36b"; }
.bi-file-earmark-image-fill::before { content: "\f36c"; }
.bi-file-earmark-image::before { content: "\f36d"; }
.bi-file-earmark-lock-fill::before { content: "\f36e"; }
.bi-file-earmark-lock::before { content: "\f36f"; }
.bi-file-earmark-lock2-fill::before { content: "\f370"; }
.bi-file-earmark-lock2::before { content: "\f371"; }
.bi-file-earmark-medical-fill::before { content: "\f372"; }
.bi-file-earmark-medical::before { content: "\f373"; }
.bi-file-earmark-minus-fill::before { content: "\f374"; }
.bi-file-earmark-minus::before { content: "\f375"; }
.bi-file-earmark-music-fill::before { content: "\f376"; }
.bi-file-earmark-music::before { content: "\f377"; }
.bi-file-earmark-person-fill::before { content: "\f378"; }
.bi-file-earmark-person::before { content: "\f379"; }
.bi-file-earmark-play-fill::before { content: "\f37a"; }
.bi-file-earmark-play::before { content: "\f37b"; }
.bi-file-earmark-plus-fill::before { content: "\f37c"; }
.bi-file-earmark-plus::before { content: "\f37d"; }
.bi-file-earmark-post-fill::before { content: "\f37e"; }
.bi-file-earmark-post::before { content: "\f37f"; }
.bi-file-earmark-ppt-fill::before { content: "\f380"; }
.bi-file-earmark-ppt::before { content: "\f381"; }
.bi-file-earmark-richtext-fill::before { content: "\f382"; }
.bi-file-earmark-richtext::before { content: "\f383"; }
.bi-file-earmark-ruled-fill::before { content: "\f384"; }
.bi-file-earmark-ruled::before { content: "\f385"; }
.bi-file-earmark-slides-fill::before { content: "\f386"; }
.bi-file-earmark-slides::before { content: "\f387"; }
.bi-file-earmark-spreadsheet-fill::before { content: "\f388"; }
.bi-file-earmark-spreadsheet::before { content: "\f389"; }
.bi-file-earmark-text-fill::before { content: "\f38a"; }
.bi-file-earmark-text::before { content: "\f38b"; }
.bi-file-earmark-word-fill::before { content: "\f38c"; }
.bi-file-earmark-word::before { content: "\f38d"; }
.bi-file-earmark-x-fill::before { content: "\f38e"; }
.bi-file-earmark-x::before { content: "\f38f"; }
.bi-file-earmark-zip-fill::before { content: "\f390"; }
.bi-file-earmark-zip::before { content: "\f391"; }
.bi-file-earmark::before { content: "\f392"; }
.bi-file-easel-fill::before { content: "\f393"; }
.bi-file-easel::before { content: "\f394"; }
.bi-file-excel-fill::before { content: "\f395"; }
.bi-file-excel::before { content: "\f396"; }
.bi-file-fill::before { content: "\f397"; }
.bi-file-font-fill::before { content: "\f398"; }
.bi-file-font::before { content: "\f399"; }
.bi-file-image-fill::before { content: "\f39a"; }
.bi-file-image::before { content: "\f39b"; }
.bi-file-lock-fill::before { content: "\f39c"; }
.bi-file-lock::before { content: "\f39d"; }
.bi-file-lock2-fill::before { content: "\f39e"; }
.bi-file-lock2::before { content: "\f39f"; }
.bi-file-medical-fill::before { content: "\f3a0"; }
.bi-file-medical::before { content: "\f3a1"; }
.bi-file-minus-fill::before { content: "\f3a2"; }
.bi-file-minus::before { content: "\f3a3"; }
.bi-file-music-fill::before { content: "\f3a4"; }
.bi-file-music::before { content: "\f3a5"; }
.bi-file-person-fill::before { content: "\f3a6"; }
.bi-file-person::before { content: "\f3a7"; }
.bi-file-play-fill::before { content: "\f3a8"; }
.bi-file-play::before { content: "\f3a9"; }
.bi-file-plus-fill::before { content: "\f3aa"; }
.bi-file-plus::before { content: "\f3ab"; }
.bi-file-post-fill::before { content: "\f3ac"; }
.bi-file-post::before { content: "\f3ad"; }
.bi-file-ppt-fill::before { content: "\f3ae"; }
.bi-file-ppt::before { content: "\f3af"; }
.bi-file-richtext-fill::before { content: "\f3b0"; }
.bi-file-richtext::before { content: "\f3b1"; }
.bi-file-ruled-fill::before { content: "\f3b2"; }
.bi-file-ruled::before { content: "\f3b3"; }
.bi-file-slides-fill::before { content: "\f3b4"; }
.bi-file-slides::before { content: "\f3b5"; }
.bi-file-spreadsheet-fill::before { content: "\f3b6"; }
.bi-file-spreadsheet::before { content: "\f3b7"; }
.bi-file-text-fill::before { content: "\f3b8"; }
.bi-file-text::before { content: "\f3b9"; }
.bi-file-word-fill::before { content: "\f3ba"; }
.bi-file-word::before { content: "\f3bb"; }
.bi-file-x-fill::before { content: "\f3bc"; }
.bi-file-x::before { content: "\f3bd"; }
.bi-file-zip-fill::before { content: "\f3be"; }
.bi-file-zip::before { content: "\f3bf"; }
.bi-file::before { content: "\f3c0"; }
.bi-files-alt::before { content: "\f3c1"; }
.bi-files::before { content: "\f3c2"; }
.bi-film::before { content: "\f3c3"; }
.bi-filter-circle-fill::before { content: "\f3c4"; }
.bi-filter-circle::before { content: "\f3c5"; }
.bi-filter-left::before { content: "\f3c6"; }
.bi-filter-right::before { content: "\f3c7"; }
.bi-filter-square-fill::before { content: "\f3c8"; }
.bi-filter-square::before { content: "\f3c9"; }
.bi-filter::before { content: "\f3ca"; }
.bi-flag-fill::before { content: "\f3cb"; }
.bi-flag::before { content: "\f3cc"; }
.bi-flower1::before { content: "\f3cd"; }
.bi-flower2::before { content: "\f3ce"; }
.bi-flower3::before { content: "\f3cf"; }
.bi-folder-check::before { content: "\f3d0"; }
.bi-folder-fill::before { content: "\f3d1"; }
.bi-folder-minus::before { content: "\f3d2"; }
.bi-folder-plus::before { content: "\f3d3"; }
.bi-folder-symlink-fill::before { content: "\f3d4"; }
.bi-folder-symlink::before { content: "\f3d5"; }
.bi-folder-x::before { content: "\f3d6"; }
.bi-folder::before { content: "\f3d7"; }
.bi-folder2-open::before { content: "\f3d8"; }
.bi-folder2::before { content: "\f3d9"; }
.bi-fonts::before { content: "\f3da"; }
.bi-forward-fill::before { content: "\f3db"; }
.bi-forward::before { content: "\f3dc"; }
.bi-front::before { content: "\f3dd"; }
.bi-fullscreen-exit::before { content: "\f3de"; }
.bi-fullscreen::before { content: "\f3df"; }
.bi-funnel-fill::before { content: "\f3e0"; }
.bi-funnel::before { content: "\f3e1"; }
.bi-gear-fill::before { content: "\f3e2"; }
.bi-gear-wide-connected::before { content: "\f3e3"; }
.bi-gear-wide::before { content: "\f3e4"; }
.bi-gear::before { content: "\f3e5"; }
.bi-gem::before { content: "\f3e6"; }
.bi-geo-alt-fill::before { content: "\f3e7"; }
.bi-geo-alt::before { content: "\f3e8"; }
.bi-geo-fill::before { content: "\f3e9"; }
.bi-geo::before { content: "\f3ea"; }
.bi-gift-fill::before { content: "\f3eb"; }
.bi-gift::before { content: "\f3ec"; }
.bi-github::before { content: "\f3ed"; }
.bi-globe::before { content: "\f3ee"; }
.bi-globe2::before { content: "\f3ef"; }
.bi-google::before { content: "\f3f0"; }
.bi-graph-down::before { content: "\f3f1"; }
.bi-graph-up::before { content: "\f3f2"; }
.bi-grid-1x2-fill::before { content: "\f3f3"; }
.bi-grid-1x2::before { content: "\f3f4"; }
.bi-grid-3x2-gap-fill::before { content: "\f3f5"; }
.bi-grid-3x2-gap::before { content: "\f3f6"; }
.bi-grid-3x2::before { content: "\f3f7"; }
.bi-grid-3x3-gap-fill::before { content: "\f3f8"; }
.bi-grid-3x3-gap::before { content: "\f3f9"; }
.bi-grid-3x3::before { content: "\f3fa"; }
.bi-grid-fill::before { content: "\f3fb"; }
.bi-grid::before { content: "\f3fc"; }
.bi-grip-horizontal::before { content: "\f3fd"; }
.bi-grip-vertical::before { content: "\f3fe"; }
.bi-hammer::before { content: "\f3ff"; }
.bi-hand-index-fill::before { content: "\f400"; }
.bi-hand-index-thumb-fill::before { content: "\f401"; }
.bi-hand-index-thumb::before { content: "\f402"; }
.bi-hand-index::before { content: "\f403"; }
.bi-hand-thumbs-down-fill::before { content: "\f404"; }
.bi-hand-thumbs-down::before { content: "\f405"; }
.bi-hand-thumbs-up-fill::before { content: "\f406"; }
.bi-hand-thumbs-up::before { content: "\f407"; }
.bi-handbag-fill::before { content: "\f408"; }
.bi-handbag::before { content: "\f409"; }
.bi-hash::before { content: "\f40a"; }
.bi-hdd-fill::before { content: "\f40b"; }
.bi-hdd-network-fill::before { content: "\f40c"; }
.bi-hdd-network::before { content: "\f40d"; }
.bi-hdd-rack-fill::before { content: "\f40e"; }
.bi-hdd-rack::before { content: "\f40f"; }
.bi-hdd-stack-fill::before { content: "\f410"; }
.bi-hdd-stack::before { content: "\f411"; }
.bi-hdd::before { content: "\f412"; }
.bi-headphones::before { content: "\f413"; }
.bi-headset::before { content: "\f414"; }
.bi-heart-fill::before { content: "\f415"; }
.bi-heart-half::before { content: "\f416"; }
.bi-heart::before { content: "\f417"; }
.bi-heptagon-fill::before { content: "\f418"; }
.bi-heptagon-half::before { content: "\f419"; }
.bi-heptagon::before { content: "\f41a"; }
.bi-hexagon-fill::before { content: "\f41b"; }
.bi-hexagon-half::before { content: "\f41c"; }
.bi-hexagon::before { content: "\f41d"; }
.bi-hourglass-bottom::before { content: "\f41e"; }
.bi-hourglass-split::before { content: "\f41f"; }
.bi-hourglass-top::before { content: "\f420"; }
.bi-hourglass::before { content: "\f421"; }
.bi-house-door-fill::before { content: "\f422"; }
.bi-house-door::before { content: "\f423"; }
.bi-house-fill::before { content: "\f424"; }
.bi-house::before { content: "\f425"; }
.bi-hr::before { content: "\f426"; }
.bi-hurricane::before { content: "\f427"; }
.bi-image-alt::before { content: "\f428"; }
.bi-image-fill::before { content: "\f429"; }
.bi-image::before { content: "\f42a"; }
.bi-images::before { content: "\f42b"; }
.bi-inbox-fill::before { content: "\f42c"; }
.bi-inbox::before { content: "\f42d"; }
.bi-inboxes-fill::before { content: "\f42e"; }
.bi-inboxes::before { content: "\f42f"; }
.bi-info-circle-fill::before { content: "\f430"; }
.bi-info-circle::before { content: "\f431"; }
.bi-info-square-fill::before { content: "\f432"; }
.bi-info-square::before { content: "\f433"; }
.bi-info::before { content: "\f434"; }
.bi-input-cursor-text::before { content: "\f435"; }
.bi-input-cursor::before { content: "\f436"; }
.bi-instagram::before { content: "\f437"; }
.bi-intersect::before { content: "\f438"; }
.bi-journal-album::before { content: "\f439"; }
.bi-journal-arrow-down::before { content: "\f43a"; }
.bi-journal-arrow-up::before { content: "\f43b"; }
.bi-journal-bookmark-fill::before { content: "\f43c"; }
.bi-journal-bookmark::before { content: "\f43d"; }
.bi-journal-check::before { content: "\f43e"; }
.bi-journal-code::before { content: "\f43f"; }
.bi-journal-medical::before { content: "\f440"; }
.bi-journal-minus::before { content: "\f441"; }
.bi-journal-plus::before { content: "\f442"; }
.bi-journal-richtext::before { content: "\f443"; }
.bi-journal-text::before { content: "\f444"; }
.bi-journal-x::before { content: "\f445"; }
.bi-journal::before { content: "\f446"; }
.bi-journals::before { content: "\f447"; }
.bi-joystick::before { content: "\f448"; }
.bi-justify-left::before { content: "\f449"; }
.bi-justify-right::before { content: "\f44a"; }
.bi-justify::before { content: "\f44b"; }
.bi-kanban-fill::before { content: "\f44c"; }
.bi-kanban::before { content: "\f44d"; }
.bi-key-fill::before { content: "\f44e"; }
.bi-key::before { content: "\f44f"; }
.bi-keyboard-fill::before { content: "\f450"; }
.bi-keyboard::before { content: "\f451"; }
.bi-ladder::before { content: "\f452"; }
.bi-lamp-fill::before { content: "\f453"; }
.bi-lamp::before { content: "\f454"; }
.bi-laptop-fill::before { content: "\f455"; }
.bi-laptop::before { content: "\f456"; }
.bi-layer-backward::before { content: "\f457"; }
.bi-layer-forward::before { content: "\f458"; }
.bi-layers-fill::before { content: "\f459"; }
.bi-layers-half::before { content: "\f45a"; }
.bi-layers::before { content: "\f45b"; }
.bi-layout-sidebar-inset-reverse::before { content: "\f45c"; }
.bi-layout-sidebar-inset::before { content: "\f45d"; }
.bi-layout-sidebar-reverse::before { content: "\f45e"; }
.bi-layout-sidebar::before { content: "\f45f"; }
.bi-layout-split::before { content: "\f460"; }
.bi-layout-text-sidebar-reverse::before { content: "\f461"; }
.bi-layout-text-sidebar::before { content: "\f462"; }
.bi-layout-text-window-reverse::before { content: "\f463"; }
.bi-layout-text-window::before { content: "\f464"; }
.bi-layout-three-columns::before { content: "\f465"; }
.bi-layout-wtf::before { content: "\f466"; }
.bi-life-preserver::before { content: "\f467"; }
.bi-lightbulb-fill::before { content: "\f468"; }
.bi-lightbulb-off-fill::before { content: "\f469"; }
.bi-lightbulb-off::before { content: "\f46a"; }
.bi-lightbulb::before { content: "\f46b"; }
.bi-lightning-charge-fill::before { content: "\f46c"; }
.bi-lightning-charge::before { content: "\f46d"; }
.bi-lightning-fill::before { content: "\f46e"; }
.bi-lightning::before { content: "\f46f"; }
.bi-link-45deg::before { content: "\f470"; }
.bi-link::before { content: "\f471"; }
.bi-linkedin::before { content: "\f472"; }
.bi-list-check::before { content: "\f473"; }
.bi-list-nested::before { content: "\f474"; }
.bi-list-ol::before { content: "\f475"; }
.bi-list-stars::before { content: "\f476"; }
.bi-list-task::before { content: "\f477"; }
.bi-list-ul::before { content: "\f478"; }
.bi-list::before { content: "\f479"; }
.bi-lock-fill::before { content: "\f47a"; }
.bi-lock::before { content: "\f47b"; }
.bi-mailbox::before { content: "\f47c"; }
.bi-mailbox2::before { content: "\f47d"; }
.bi-map-fill::before { content: "\f47e"; }
.bi-map::before { content: "\f47f"; }
.bi-markdown-fill::before { content: "\f480"; }
.bi-markdown::before { content: "\f481"; }
.bi-mask::before { content: "\f482"; }
.bi-megaphone-fill::before { content: "\f483"; }
.bi-megaphone::before { content: "\f484"; }
.bi-menu-app-fill::before { content: "\f485"; }
.bi-menu-app::before { content: "\f486"; }
.bi-menu-button-fill::before { content: "\f487"; }
.bi-menu-button-wide-fill::before { content: "\f488"; }
.bi-menu-button-wide::before { content: "\f489"; }
.bi-menu-button::before { content: "\f48a"; }
.bi-menu-down::before { content: "\f48b"; }
.bi-menu-up::before { content: "\f48c"; }
.bi-mic-fill::before { content: "\f48d"; }
.bi-mic-mute-fill::before { content: "\f48e"; }
.bi-mic-mute::before { content: "\f48f"; }
.bi-mic::before { content: "\f490"; }
.bi-minecart-loaded::before { content: "\f491"; }
.bi-minecart::before { content: "\f492"; }
.bi-moisture::before { content: "\f493"; }
.bi-moon-fill::before { content: "\f494"; }
.bi-moon-stars-fill::before { content: "\f495"; }
.bi-moon-stars::before { content: "\f496"; }
.bi-moon::before { content: "\f497"; }
.bi-mouse-fill::before { content: "\f498"; }
.bi-mouse::before { content: "\f499"; }
.bi-mouse2-fill::before { content: "\f49a"; }
.bi-mouse2::before { content: "\f49b"; }
.bi-mouse3-fill::before { content: "\f49c"; }
.bi-mouse3::before { content: "\f49d"; }
.bi-music-note-beamed::before { content: "\f49e"; }
.bi-music-note-list::before { content: "\f49f"; }
.bi-music-note::before { content: "\f4a0"; }
.bi-music-player-fill::before { content: "\f4a1"; }
.bi-music-player::before { content: "\f4a2"; }
.bi-newspaper::before { content: "\f4a3"; }
.bi-node-minus-fill::before { content: "\f4a4"; }
.bi-node-minus::before { content: "\f4a5"; }
.bi-node-plus-fill::before { content: "\f4a6"; }
.bi-node-plus::before { content: "\f4a7"; }
.bi-nut-fill::before { content: "\f4a8"; }
.bi-nut::before { content: "\f4a9"; }
.bi-octagon-fill::before { content: "\f4aa"; }
.bi-octagon-half::before { content: "\f4ab"; }
.bi-octagon::before { content: "\f4ac"; }
.bi-option::before { content: "\f4ad"; }
.bi-outlet::before { content: "\f4ae"; }
.bi-paint-bucket::before { content: "\f4af"; }
.bi-palette-fill::before { content: "\f4b0"; }
.bi-palette::before { content: "\f4b1"; }
.bi-palette2::before { content: "\f4b2"; }
.bi-paperclip::before { content: "\f4b3"; }
.bi-paragraph::before { content: "\f4b4"; }
.bi-patch-check-fill::before { content: "\f4b5"; }
.bi-patch-check::before { content: "\f4b6"; }
.bi-patch-exclamation-fill::before { content: "\f4b7"; }
.bi-patch-exclamation::before { content: "\f4b8"; }
.bi-patch-minus-fill::before { content: "\f4b9"; }
.bi-patch-minus::before { content: "\f4ba"; }
.bi-patch-plus-fill::before { content: "\f4bb"; }
.bi-patch-plus::before { content: "\f4bc"; }
.bi-patch-question-fill::before { content: "\f4bd"; }
.bi-patch-question::before { content: "\f4be"; }
.bi-pause-btn-fill::before { content: "\f4bf"; }
.bi-pause-btn::before { content: "\f4c0"; }
.bi-pause-circle-fill::before { content: "\f4c1"; }
.bi-pause-circle::before { content: "\f4c2"; }
.bi-pause-fill::before { content: "\f4c3"; }
.bi-pause::before { content: "\f4c4"; }
.bi-peace-fill::before { content: "\f4c5"; }
.bi-peace::before { content: "\f4c6"; }
.bi-pen-fill::before { content: "\f4c7"; }
.bi-pen::before { content: "\f4c8"; }
.bi-pencil-fill::before { content: "\f4c9"; }
.bi-pencil-square::before { content: "\f4ca"; }
.bi-pencil::before { content: "\f4cb"; }
.bi-pentagon-fill::before { content: "\f4cc"; }
.bi-pentagon-half::before { content: "\f4cd"; }
.bi-pentagon::before { content: "\f4ce"; }
.bi-people-fill::before { content: "\f4cf"; }
.bi-people::before { content: "\f4d0"; }
.bi-percent::before { content: "\f4d1"; }
.bi-person-badge-fill::before { content: "\f4d2"; }
.bi-person-badge::before { content: "\f4d3"; }
.bi-person-bounding-box::before { content: "\f4d4"; }
.bi-person-check-fill::before { content: "\f4d5"; }
.bi-person-check::before { content: "\f4d6"; }
.bi-person-circle::before { content: "\f4d7"; }
.bi-person-dash-fill::before { content: "\f4d8"; }
.bi-person-dash::before { content: "\f4d9"; }
.bi-person-fill::before { content: "\f4da"; }
.bi-person-lines-fill::before { content: "\f4db"; }
.bi-person-plus-fill::before { content: "\f4dc"; }
.bi-person-plus::before { content: "\f4dd"; }
.bi-person-square::before { content: "\f4de"; }
.bi-person-x-fill::before { content: "\f4df"; }
.bi-person-x::before { content: "\f4e0"; }
.bi-person::before { content: "\f4e1"; }
.bi-phone-fill::before { content: "\f4e2"; }
.bi-phone-landscape-fill::before { content: "\f4e3"; }
.bi-phone-landscape::before { content: "\f4e4"; }
.bi-phone-vibrate-fill::before { content: "\f4e5"; }
.bi-phone-vibrate::before { content: "\f4e6"; }
.bi-phone::before { content: "\f4e7"; }
.bi-pie-chart-fill::before { content: "\f4e8"; }
.bi-pie-chart::before { content: "\f4e9"; }
.bi-pin-angle-fill::before { content: "\f4ea"; }
.bi-pin-angle::before { content: "\f4eb"; }
.bi-pin-fill::before { content: "\f4ec"; }
.bi-pin::before { content: "\f4ed"; }
.bi-pip-fill::before { content: "\f4ee"; }
.bi-pip::before { content: "\f4ef"; }
.bi-play-btn-fill::before { content: "\f4f0"; }
.bi-play-btn::before { content: "\f4f1"; }
.bi-play-circle-fill::before { content: "\f4f2"; }
.bi-play-circle::before { content: "\f4f3"; }
.bi-play-fill::before { content: "\f4f4"; }
.bi-play::before { content: "\f4f5"; }
.bi-plug-fill::before { content: "\f4f6"; }
.bi-plug::before { content: "\f4f7"; }
.bi-plus-circle-dotted::before { content: "\f4f8"; }
.bi-plus-circle-fill::before { content: "\f4f9"; }
.bi-plus-circle::before { content: "\f4fa"; }
.bi-plus-square-dotted::before { content: "\f4fb"; }
.bi-plus-square-fill::before { content: "\f4fc"; }
.bi-plus-square::before { content: "\f4fd"; }
.bi-plus::before { content: "\f4fe"; }
.bi-power::before { content: "\f4ff"; }
.bi-printer-fill::before { content: "\f500"; }
.bi-printer::before { content: "\f501"; }
.bi-puzzle-fill::before { content: "\f502"; }
.bi-puzzle::before { content: "\f503"; }
.bi-question-circle-fill::before { content: "\f504"; }
.bi-question-circle::before { content: "\f505"; }
.bi-question-diamond-fill::before { content: "\f506"; }
.bi-question-diamond::before { content: "\f507"; }
.bi-question-octagon-fill::before { content: "\f508"; }
.bi-question-octagon::before { content: "\f509"; }
.bi-question-square-fill::before { content: "\f50a"; }
.bi-question-square::before { content: "\f50b"; }
.bi-question::before { content: "\f50c"; }
.bi-rainbow::before { content: "\f50d"; }
.bi-receipt-cutoff::before { content: "\f50e"; }
.bi-receipt::before { content: "\f50f"; }
.bi-reception-0::before { content: "\f510"; }
.bi-reception-1::before { content: "\f511"; }
.bi-reception-2::before { content: "\f512"; }
.bi-reception-3::before { content: "\f513"; }
.bi-reception-4::before { content: "\f514"; }
.bi-record-btn-fill::before { content: "\f515"; }
.bi-record-btn::before { content: "\f516"; }
.bi-record-circle-fill::before { content: "\f517"; }
.bi-record-circle::before { content: "\f518"; }
.bi-record-fill::before { content: "\f519"; }
.bi-record::before { content: "\f51a"; }
.bi-record2-fill::before { content: "\f51b"; }
.bi-record2::before { content: "\f51c"; }
.bi-reply-all-fill::before { content: "\f51d"; }
.bi-reply-all::before { content: "\f51e"; }
.bi-reply-fill::before { content: "\f51f"; }
.bi-reply::before { content: "\f520"; }
.bi-rss-fill::before { content: "\f521"; }
.bi-rss::before { content: "\f522"; }
.bi-rulers::before { content: "\f523"; }
.bi-save-fill::before { content: "\f524"; }
.bi-save::before { content: "\f525"; }
.bi-save2-fill::before { content: "\f526"; }
.bi-save2::before { content: "\f527"; }
.bi-scissors::before { content: "\f528"; }
.bi-screwdriver::before { content: "\f529"; }
.bi-search::before { content: "\f52a"; }
.bi-segmented-nav::before { content: "\f52b"; }
.bi-server::before { content: "\f52c"; }
.bi-share-fill::before { content: "\f52d"; }
.bi-share::before { content: "\f52e"; }
.bi-shield-check::before { content: "\f52f"; }
.bi-shield-exclamation::before { content: "\f530"; }
.bi-shield-fill-check::before { content: "\f531"; }
.bi-shield-fill-exclamation::before { content: "\f532"; }
.bi-shield-fill-minus::before { content: "\f533"; }
.bi-shield-fill-plus::before { content: "\f534"; }
.bi-shield-fill-x::before { content: "\f535"; }
.bi-shield-fill::before { content: "\f536"; }
.bi-shield-lock-fill::before { content: "\f537"; }
.bi-shield-lock::before { content: "\f538"; }
.bi-shield-minus::before { content: "\f539"; }
.bi-shield-plus::before { content: "\f53a"; }
.bi-shield-shaded::before { content: "\f53b"; }
.bi-shield-slash-fill::before { content: "\f53c"; }
.bi-shield-slash::before { content: "\f53d"; }
.bi-shield-x::before { content: "\f53e"; }
.bi-shield::before { content: "\f53f"; }
.bi-shift-fill::before { content: "\f540"; }
.bi-shift::before { content: "\f541"; }
.bi-shop-window::before { content: "\f542"; }
.bi-shop::before { content: "\f543"; }
.bi-shuffle::before { content: "\f544"; }
.bi-signpost-2-fill::before { content: "\f545"; }
.bi-signpost-2::before { content: "\f546"; }
.bi-signpost-fill::before { content: "\f547"; }
.bi-signpost-split-fill::before { content: "\f548"; }
.bi-signpost-split::before { content: "\f549"; }
.bi-signpost::before { content: "\f54a"; }
.bi-sim-fill::before { content: "\f54b"; }
.bi-sim::before { content: "\f54c"; }
.bi-skip-backward-btn-fill::before { content: "\f54d"; }
.bi-skip-backward-btn::before { content: "\f54e"; }
.bi-skip-backward-circle-fill::before { content: "\f54f"; }
.bi-skip-backward-circle::before { content: "\f550"; }
.bi-skip-backward-fill::before { content: "\f551"; }
.bi-skip-backward::before { content: "\f552"; }
.bi-skip-end-btn-fill::before { content: "\f553"; }
.bi-skip-end-btn::before { content: "\f554"; }
.bi-skip-end-circle-fill::before { content: "\f555"; }
.bi-skip-end-circle::before { content: "\f556"; }
.bi-skip-end-fill::before { content: "\f557"; }
.bi-skip-end::before { content: "\f558"; }
.bi-skip-forward-btn-fill::before { content: "\f559"; }
.bi-skip-forward-btn::before { content: "\f55a"; }
.bi-skip-forward-circle-fill::before { content: "\f55b"; }
.bi-skip-forward-circle::before { content: "\f55c"; }
.bi-skip-forward-fill::before { content: "\f55d"; }
.bi-skip-forward::before { content: "\f55e"; }
.bi-skip-start-btn-fill::before { content: "\f55f"; }
.bi-skip-start-btn::before { content: "\f560"; }
.bi-skip-start-circle-fill::before { content: "\f561"; }
.bi-skip-start-circle::before { content: "\f562"; }
.bi-skip-start-fill::before { content: "\f563"; }
.bi-skip-start::before { content: "\f564"; }
.bi-slack::before { content: "\f565"; }
.bi-slash-circle-fill::before { content: "\f566"; }
.bi-slash-circle::before { content: "\f567"; }
.bi-slash-square-fill::before { content: "\f568"; }
.bi-slash-square::before { content: "\f569"; }
.bi-slash::before { content: "\f56a"; }
.bi-sliders::before { content: "\f56b"; }
.bi-smartwatch::before { content: "\f56c"; }
.bi-snow::before { content: "\f56d"; }
.bi-snow2::before { content: "\f56e"; }
.bi-snow3::before { content: "\f56f"; }
.bi-sort-alpha-down-alt::before { content: "\f570"; }
.bi-sort-alpha-down::before { content: "\f571"; }
.bi-sort-alpha-up-alt::before { content: "\f572"; }
.bi-sort-alpha-up::before { content: "\f573"; }
.bi-sort-down-alt::before { content: "\f574"; }
.bi-sort-down::before { content: "\f575"; }
.bi-sort-numeric-down-alt::before { content: "\f576"; }
.bi-sort-numeric-down::before { content: "\f577"; }
.bi-sort-numeric-up-alt::before { content: "\f578"; }
.bi-sort-numeric-up::before { content: "\f579"; }
.bi-sort-up-alt::before { content: "\f57a"; }
.bi-sort-up::before { content: "\f57b"; }
.bi-soundwave::before { content: "\f57c"; }
.bi-speaker-fill::before { content: "\f57d"; }
.bi-speaker::before { content: "\f57e"; }
.bi-speedometer::before { content: "\f57f"; }
.bi-speedometer2::before { content: "\f580"; }
.bi-spellcheck::before { content: "\f581"; }
.bi-square-fill::before { content: "\f582"; }
.bi-square-half::before { content: "\f583"; }
.bi-square::before { content: "\f584"; }
.bi-stack::before { content: "\f585"; }
.bi-star-fill::before { content: "\f586"; }
.bi-star-half::before { content: "\f587"; }
.bi-star::before { content: "\f588"; }
.bi-stars::before { content: "\f589"; }
.bi-stickies-fill::before { content: "\f58a"; }
.bi-stickies::before { content: "\f58b"; }
.bi-sticky-fill::before { content: "\f58c"; }
.bi-sticky::before { content: "\f58d"; }
.bi-stop-btn-fill::before { content: "\f58e"; }
.bi-stop-btn::before { content: "\f58f"; }
.bi-stop-circle-fill::before { content: "\f590"; }
.bi-stop-circle::before { content: "\f591"; }
.bi-stop-fill::before { content: "\f592"; }
.bi-stop::before { content: "\f593"; }
.bi-stoplights-fill::before { content: "\f594"; }
.bi-stoplights::before { content: "\f595"; }
.bi-stopwatch-fill::before { content: "\f596"; }
.bi-stopwatch::before { content: "\f597"; }
.bi-subtract::before { content: "\f598"; }
.bi-suit-club-fill::before { content: "\f599"; }
.bi-suit-club::before { content: "\f59a"; }
.bi-suit-diamond-fill::before { content: "\f59b"; }
.bi-suit-diamond::before { content: "\f59c"; }
.bi-suit-heart-fill::before { content: "\f59d"; }
.bi-suit-heart::before { content: "\f59e"; }
.bi-suit-spade-fill::before { content: "\f59f"; }
.bi-suit-spade::before { content: "\f5a0"; }
.bi-sun-fill::before { content: "\f5a1"; }
.bi-sun::before { content: "\f5a2"; }
.bi-sunglasses::before { content: "\f5a3"; }
.bi-sunrise-fill::before { content: "\f5a4"; }
.bi-sunrise::before { content: "\f5a5"; }
.bi-sunset-fill::before { content: "\f5a6"; }
.bi-sunset::before { content: "\f5a7"; }
.bi-symmetry-horizontal::before { content: "\f5a8"; }
.bi-symmetry-vertical::before { content: "\f5a9"; }
.bi-table::before { content: "\f5aa"; }
.bi-tablet-fill::before { content: "\f5ab"; }
.bi-tablet-landscape-fill::before { content: "\f5ac"; }
.bi-tablet-landscape::before { content: "\f5ad"; }
.bi-tablet::before { content: "\f5ae"; }
.bi-tag-fill::before { content: "\f5af"; }
.bi-tag::before { content: "\f5b0"; }
.bi-tags-fill::before { content: "\f5b1"; }
.bi-tags::before { content: "\f5b2"; }
.bi-telegram::before { content: "\f5b3"; }
.bi-telephone-fill::before { content: "\f5b4"; }
.bi-telephone-forward-fill::before { content: "\f5b5"; }
.bi-telephone-forward::before { content: "\f5b6"; }
.bi-telephone-inbound-fill::before { content: "\f5b7"; }
.bi-telephone-inbound::before { content: "\f5b8"; }
.bi-telephone-minus-fill::before { content: "\f5b9"; }
.bi-telephone-minus::before { content: "\f5ba"; }
.bi-telephone-outbound-fill::before { content: "\f5bb"; }
.bi-telephone-outbound::before { content: "\f5bc"; }
.bi-telephone-plus-fill::before { content: "\f5bd"; }
.bi-telephone-plus::before { content: "\f5be"; }
.bi-telephone-x-fill::before { content: "\f5bf"; }
.bi-telephone-x::before { content: "\f5c0"; }
.bi-telephone::before { content: "\f5c1"; }
.bi-terminal-fill::before { content: "\f5c2"; }
.bi-terminal::before { content: "\f5c3"; }
.bi-text-center::before { content: "\f5c4"; }
.bi-text-indent-left::before { content: "\f5c5"; }
.bi-text-indent-right::before { content: "\f5c6"; }
.bi-text-left::before { content: "\f5c7"; }
.bi-text-paragraph::before { content: "\f5c8"; }
.bi-text-right::before { content: "\f5c9"; }
.bi-textarea-resize::before { content: "\f5ca"; }
.bi-textarea-t::before { content: "\f5cb"; }
.bi-textarea::before { content: "\f5cc"; }
.bi-thermometer-half::before { content: "\f5cd"; }
.bi-thermometer-high::before { content: "\f5ce"; }
.bi-thermometer-low::before { content: "\f5cf"; }
.bi-thermometer-snow::before { content: "\f5d0"; }
.bi-thermometer-sun::before { content: "\f5d1"; }
.bi-thermometer::before { content: "\f5d2"; }
.bi-three-dots-vertical::before { content: "\f5d3"; }
.bi-three-dots::before { content: "\f5d4"; }
.bi-toggle-off::before { content: "\f5d5"; }
.bi-toggle-on::before { content: "\f5d6"; }
.bi-toggle2-off::before { content: "\f5d7"; }
.bi-toggle2-on::before { content: "\f5d8"; }
.bi-toggles::before { content: "\f5d9"; }
.bi-toggles2::before { content: "\f5da"; }
.bi-tools::before { content: "\f5db"; }
.bi-tornado::before { content: "\f5dc"; }
.bi-trash-fill::before { content: "\f5dd"; }
.bi-trash::before { content: "\f5de"; }
.bi-trash2-fill::before { content: "\f5df"; }
.bi-trash2::before { content: "\f5e0"; }
.bi-tree-fill::before { content: "\f5e1"; }
.bi-tree::before { content: "\f5e2"; }
.bi-triangle-fill::before { content: "\f5e3"; }
.bi-triangle-half::before { content: "\f5e4"; }
.bi-triangle::before { content: "\f5e5"; }
.bi-trophy-fill::before { content: "\f5e6"; }
.bi-trophy::before { content: "\f5e7"; }
.bi-tropical-storm::before { content: "\f5e8"; }
.bi-truck-flatbed::before { content: "\f5e9"; }
.bi-truck::before { content: "\f5ea"; }
.bi-tsunami::before { content: "\f5eb"; }
.bi-tv-fill::before { content: "\f5ec"; }
.bi-tv::before { content: "\f5ed"; }
.bi-twitch::before { content: "\f5ee"; }
.bi-twitter::before { content: "\f5ef"; }
.bi-type-bold::before { content: "\f5f0"; }
.bi-type-h1::before { content: "\f5f1"; }
.bi-type-h2::before { content: "\f5f2"; }
.bi-type-h3::before { content: "\f5f3"; }
.bi-type-italic::before { content: "\f5f4"; }
.bi-type-strikethrough::before { content: "\f5f5"; }
.bi-type-underline::before { content: "\f5f6"; }
.bi-type::before { content: "\f5f7"; }
.bi-ui-checks-grid::before { content: "\f5f8"; }
.bi-ui-checks::before { content: "\f5f9"; }
.bi-ui-radios-grid::before { content: "\f5fa"; }
.bi-ui-radios::before { content: "\f5fb"; }
.bi-umbrella-fill::before { content: "\f5fc"; }
.bi-umbrella::before { content: "\f5fd"; }
.bi-union::before { content: "\f5fe"; }
.bi-unlock-fill::before { content: "\f5ff"; }
.bi-unlock::before { content: "\f600"; }
.bi-upc-scan::before { content: "\f601"; }
.bi-upc::before { content: "\f602"; }
.bi-upload::before { content: "\f603"; }
.bi-vector-pen::before { content: "\f604"; }
.bi-view-list::before { content: "\f605"; }
.bi-view-stacked::before { content: "\f606"; }
.bi-vinyl-fill::before { content: "\f607"; }
.bi-vinyl::before { content: "\f608"; }
.bi-voicemail::before { content: "\f609"; }
.bi-volume-down-fill::before { content: "\f60a"; }
.bi-volume-down::before { content: "\f60b"; }
.bi-volume-mute-fill::before { content: "\f60c"; }
.bi-volume-mute::before { content: "\f60d"; }
.bi-volume-off-fill::before { content: "\f60e"; }
.bi-volume-off::before { content: "\f60f"; }
.bi-volume-up-fill::before { content: "\f610"; }
.bi-volume-up::before { content: "\f611"; }
.bi-vr::before { content: "\f612"; }
.bi-wallet-fill::before { content: "\f613"; }
.bi-wallet::before { content: "\f614"; }
.bi-wallet2::before { content: "\f615"; }
.bi-watch::before { content: "\f616"; }
.bi-water::before { content: "\f617"; }
.bi-whatsapp::before { content: "\f618"; }
.bi-wifi-1::before { content: "\f619"; }
.bi-wifi-2::before { content: "\f61a"; }
.bi-wifi-off::before { content: "\f61b"; }
.bi-wifi::before { content: "\f61c"; }
.bi-wind::before { content: "\f61d"; }
.bi-window-dock::before { content: "\f61e"; }
.bi-window-sidebar::before { content: "\f61f"; }
.bi-window::before { content: "\f620"; }
.bi-wrench::before { content: "\f621"; }
.bi-x-circle-fill::before { content: "\f622"; }
.bi-x-circle::before { content: "\f623"; }
.bi-x-diamond-fill::before { content: "\f624"; }
.bi-x-diamond::before { content: "\f625"; }
.bi-x-octagon-fill::before { content: "\f626"; }
.bi-x-octagon::before { content: "\f627"; }
.bi-x-square-fill::before { content: "\f628"; }
.bi-x-square::before { content: "\f629"; }
.bi-x::before { content: "\f62a"; }
.bi-youtube::before { content: "\f62b"; }
.bi-zoom-in::before { content: "\f62c"; }
.bi-zoom-out::before { content: "\f62d"; }
.bi-bank::before { content: "\f62e"; }
.bi-bank2::before { content: "\f62f"; }
.bi-bell-slash-fill::before { content: "\f630"; }
.bi-bell-slash::before { content: "\f631"; }
.bi-cash-coin::before { content: "\f632"; }
.bi-check-lg::before { content: "\f633"; }
.bi-coin::before { content: "\f634"; }
.bi-currency-bitcoin::before { content: "\f635"; }
.bi-currency-dollar::before { content: "\f636"; }
.bi-currency-euro::before { content: "\f637"; }
.bi-currency-exchange::before { content: "\f638"; }
.bi-currency-pound::before { content: "\f639"; }
.bi-currency-yen::before { content: "\f63a"; }
.bi-dash-lg::before { content: "\f63b"; }
.bi-exclamation-lg::before { content: "\f63c"; }
.bi-file-earmark-pdf-fill::before { content: "\f63d"; }
.bi-file-earmark-pdf::before { content: "\f63e"; }
.bi-file-pdf-fill::before { content: "\f63f"; }
.bi-file-pdf::before { content: "\f640"; }
.bi-gender-ambiguous::before { content: "\f641"; }
.bi-gender-female::before { content: "\f642"; }
.bi-gender-male::before { content: "\f643"; }
.bi-gender-trans::before { content: "\f644"; }
.bi-headset-vr::before { content: "\f645"; }
.bi-info-lg::before { content: "\f646"; }
.bi-mastodon::before { content: "\f647"; }
.bi-messenger::before { content: "\f648"; }
.bi-piggy-bank-fill::before { content: "\f649"; }
.bi-piggy-bank::before { content: "\f64a"; }
.bi-pin-map-fill::before { content: "\f64b"; }
.bi-pin-map::before { content: "\f64c"; }
.bi-plus-lg::before { content: "\f64d"; }
.bi-question-lg::before { content: "\f64e"; }
.bi-recycle::before { content: "\f64f"; }
.bi-reddit::before { content: "\f650"; }
.bi-safe-fill::before { content: "\f651"; }
.bi-safe2-fill::before { content: "\f652"; }
.bi-safe2::before { content: "\f653"; }
.bi-sd-card-fill::before { content: "\f654"; }
.bi-sd-card::before { content: "\f655"; }
.bi-skype::before { content: "\f656"; }
.bi-slash-lg::before { content: "\f657"; }
.bi-translate::before { content: "\f658"; }
.bi-x-lg::before { content: "\f659"; }
.bi-safe::before { content: "\f65a"; }
.bi-apple::before { content: "\f65b"; }
.bi-microsoft::before { content: "\f65d"; }
.bi-windows::before { content: "\f65e"; }
.bi-behance::before { content: "\f65c"; }
.bi-dribbble::before { content: "\f65f"; }
.bi-line::before { content: "\f660"; }
.bi-medium::before { content: "\f661"; }
.bi-paypal::before { content: "\f662"; }
.bi-pinterest::before { content: "\f663"; }
.bi-signal::before { content: "\f664"; }
.bi-snapchat::before { content: "\f665"; }
.bi-spotify::before { content: "\f666"; }
.bi-stack-overflow::before { content: "\f667"; }
.bi-strava::before { content: "\f668"; }
.bi-wordpress::before { content: "\f669"; }
.bi-vimeo::before { content: "\f66a"; }
.bi-activity::before { content: "\f66b"; }
.bi-easel2-fill::before { content: "\f66c"; }
.bi-easel2::before { content: "\f66d"; }
.bi-easel3-fill::before { content: "\f66e"; }
.bi-easel3::before { content: "\f66f"; }
.bi-fan::before { content: "\f670"; }
.bi-fingerprint::before { content: "\f671"; }
.bi-graph-down-arrow::before { content: "\f672"; }
.bi-graph-up-arrow::before { content: "\f673"; }
.bi-hypnotize::before { content: "\f674"; }
.bi-magic::before { content: "\f675"; }
.bi-person-rolodex::before { content: "\f676"; }
.bi-person-video::before { content: "\f677"; }
.bi-person-video2::before { content: "\f678"; }
.bi-person-video3::before { content: "\f679"; }
.bi-person-workspace::before { content: "\f67a"; }
.bi-radioactive::before { content: "\f67b"; }
.bi-webcam-fill::before { content: "\f67c"; }
.bi-webcam::before { content: "\f67d"; }
.bi-yin-yang::before { content: "\f67e"; }
.bi-bandaid-fill::before { content: "\f680"; }
.bi-bandaid::before { content: "\f681"; }
.bi-bluetooth::before { content: "\f682"; }
.bi-body-text::before { content: "\f683"; }
.bi-boombox::before { content: "\f684"; }
.bi-boxes::before { content: "\f685"; }
.bi-dpad-fill::before { content: "\f686"; }
.bi-dpad::before { content: "\f687"; }
.bi-ear-fill::before { content: "\f688"; }
.bi-ear::before { content: "\f689"; }
.bi-envelope-check-1::before { content: "\f68a"; }
.bi-envelope-check-fill::before { content: "\f68b"; }
.bi-envelope-check::before { content: "\f68c"; }
.bi-envelope-dash-1::before { content: "\f68d"; }
.bi-envelope-dash-fill::before { content: "\f68e"; }
.bi-envelope-dash::before { content: "\f68f"; }
.bi-envelope-exclamation-1::before { content: "\f690"; }
.bi-envelope-exclamation-fill::before { content: "\f691"; }
.bi-envelope-exclamation::before { content: "\f692"; }
.bi-envelope-plus-fill::before { content: "\f693"; }
.bi-envelope-plus::before { content: "\f694"; }
.bi-envelope-slash-1::before { content: "\f695"; }
.bi-envelope-slash-fill::before { content: "\f696"; }
.bi-envelope-slash::before { content: "\f697"; }
.bi-envelope-x-1::before { content: "\f698"; }
.bi-envelope-x-fill::before { content: "\f699"; }
.bi-envelope-x::before { content: "\f69a"; }
.bi-explicit-fill::before { content: "\f69b"; }
.bi-explicit::before { content: "\f69c"; }
.bi-git::before { content: "\f69d"; }
.bi-infinity::before { content: "\f69e"; }
.bi-list-columns-reverse::before { content: "\f69f"; }
.bi-list-columns::before { content: "\f6a0"; }
.bi-meta::before { content: "\f6a1"; }
.bi-mortorboard-fill::before { content: "\f6a2"; }
.bi-mortorboard::before { content: "\f6a3"; }
.bi-nintendo-switch::before { content: "\f6a4"; }
.bi-pc-display-horizontal::before { content: "\f6a5"; }
.bi-pc-display::before { content: "\f6a6"; }
.bi-pc-horizontal::before { content: "\f6a7"; }
.bi-pc::before { content: "\f6a8"; }
.bi-playstation::before { content: "\f6a9"; }
.bi-plus-slash-minus::before { content: "\f6aa"; }
.bi-projector-fill::before { content: "\f6ab"; }
.bi-projector::before { content: "\f6ac"; }
.bi-qr-code-scan::before { content: "\f6ad"; }
.bi-qr-code::before { content: "\f6ae"; }
.bi-quora::before { content: "\f6af"; }
.bi-quote::before { content: "\f6b0"; }
.bi-robot::before { content: "\f6b1"; }
.bi-send-check-fill::before { content: "\f6b2"; }
.bi-send-check::before { content: "\f6b3"; }
.bi-send-dash-fill::before { content: "\f6b4"; }
.bi-send-dash::before { content: "\f6b5"; }
.bi-send-exclamation-1::before { content: "\f6b6"; }
.bi-send-exclamation-fill::before { content: "\f6b7"; }
.bi-send-exclamation::before { content: "\f6b8"; }
.bi-send-fill::before { content: "\f6b9"; }
.bi-send-plus-fill::before { content: "\f6ba"; }
.bi-send-plus::before { content: "\f6bb"; }
.bi-send-slash-fill::before { content: "\f6bc"; }
.bi-send-slash::before { content: "\f6bd"; }
.bi-send-x-fill::before { content: "\f6be"; }
.bi-send-x::before { content: "\f6bf"; }
.bi-send::before { content: "\f6c0"; }
.bi-steam::before { content: "\f6c1"; }
.bi-terminal-dash-1::before { content: "\f6c2"; }
.bi-terminal-dash::before { content: "\f6c3"; }
.bi-terminal-plus::before { content: "\f6c4"; }
.bi-terminal-split::before { content: "\f6c5"; }
.bi-ticket-detailed-fill::before { content: "\f6c6"; }
.bi-ticket-detailed::before { content: "\f6c7"; }
.bi-ticket-fill::before { content: "\f6c8"; }
.bi-ticket-perferated-fill::before { content: "\f6c9"; }
.bi-ticket-perferated::before { content: "\f6ca"; }
.bi-ticket::before { content: "\f6cb"; }
.bi-tiktok::before { content: "\f6cc"; }
.bi-window-dash::before { content: "\f6cd"; }
.bi-window-desktop::before { content: "\f6ce"; }
.bi-window-fullscreen::before { content: "\f6cf"; }
.bi-window-plus::before { content: "\f6d0"; }
.bi-window-split::before { content: "\f6d1"; }
.bi-window-stack::before { content: "\f6d2"; }
.bi-window-x::before { content: "\f6d3"; }
.bi-xbox::before { content: "\f6d4"; }
.bi-ethernet::before { content: "\f6d5"; }
.bi-hdmi-fill::before { content: "\f6d6"; }
.bi-hdmi::before { content: "\f6d7"; }
.bi-usb-c-fill::before { content: "\f6d8"; }
.bi-usb-c::before { content: "\f6d9"; }
.bi-usb-fill::before { content: "\f6da"; }
.bi-usb-plug-fill::before { content: "\f6db"; }
.bi-usb-plug::before { content: "\f6dc"; }
.bi-usb-symbol::before { content: "\f6dd"; }
.bi-usb::before { content: "\f6de"; }
.bi-boombox-fill::before { content: "\f6df"; }
.bi-displayport-1::before { content: "\f6e0"; }
.bi-displayport::before { content: "\f6e1"; }
.bi-gpu-card::before { content: "\f6e2"; }
.bi-memory::before { content: "\f6e3"; }
.bi-modem-fill::before { content: "\f6e4"; }
.bi-modem::before { content: "\f6e5"; }
.bi-motherboard-fill::before { content: "\f6e6"; }
.bi-motherboard::before { content: "\f6e7"; }
.bi-optical-audio-fill::before { content: "\f6e8"; }
.bi-optical-audio::before { content: "\f6e9"; }
.bi-pci-card::before { content: "\f6ea"; }
.bi-router-fill::before { content: "\f6eb"; }
.bi-router::before { content: "\f6ec"; }
.bi-ssd-fill::before { content: "\f6ed"; }
.bi-ssd::before { content: "\f6ee"; }
.bi-thunderbolt-fill::before { content: "\f6ef"; }
.bi-thunderbolt::before { content: "\f6f0"; }
.bi-usb-drive-fill::before { content: "\f6f1"; }
.bi-usb-drive::before { content: "\f6f2"; }
.bi-usb-micro-fill::before { content: "\f6f3"; }
.bi-usb-micro::before { content: "\f6f4"; }
.bi-usb-mini-fill::before { content: "\f6f5"; }
.bi-usb-mini::before { content: "\f6f6"; }
.bi-cloud-haze2::before { content: "\f6f7"; }
.bi-device-hdd-fill::before { content: "\f6f8"; }
.bi-device-hdd::before { content: "\f6f9"; }
.bi-device-ssd-fill::before { content: "\f6fa"; }
.bi-device-ssd::before { content: "\f6fb"; }
.bi-displayport-fill::before { content: "\f6fc"; }
.bi-mortarboard-fill::before { content: "\f6fd"; }
.bi-mortarboard::before { content: "\f6fe"; }
.bi-terminal-x::before { content: "\f6ff"; }

    </style>
<body>

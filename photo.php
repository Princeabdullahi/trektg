<?php
global $profile;
global $profile_post;
global $user;
?>
   <div class="profile-container">
        <div class="row row-space-20">
            <div class="col-md-8">
                <div class="tab-content p-0">
                    <div class="tab-pane active show" id="profile-photos">
                        <div class="m-b-10"><b>Photos (30)</b></div>
                        <ul class="img-grid-list">
                        <div class="col-md-8 col-sm-12">
                        <img src="assets/images/posts/<?=$post['post_img']?>" style="max-height:90vh" class="w-100 rounded-start">
                    </div>
                        </ul>
                    </div>                    
                </div>
            </div>

            <div class="col-md-4 hidden-xs hidden-sm">
                <ul class="profile-info-list">
                    <li class="title">PERSONAL INFORMATION</li>
                    <li>
                        <div class="field">Occupation:</div>
                        <div class="value"><?=$profile['bio']?></div>
                    </li>
                    <li>
                        <div class="field">Birth of Date:</div>
                        <div class="value"><?=$profile['date_of_birth']?></div>
                    </li>
                    <li>
                        <div class="field">Country:</div>
                        <div class="value"><?=$profile['country']?></div>
                    </li>
                    <li>
                        <div class="field">Address:</div>
                        <div class="value">
                            <address class="m-b-0">
                            <?=$profile['address']?>
                            </address>
                        </div>
                    </li>
                    <li class="title">Followers LIST <?=count($profile['followers'])?></li>
                    <li class="img-list">
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                        <a href="#" class="m-b-5"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
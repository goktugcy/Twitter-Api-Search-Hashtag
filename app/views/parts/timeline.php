<div id="container" class="wrapper nav-closed">
    <div id="timeline">
        <?php foreach ($tweets->statuses as $key => $tweet) { ?>
        <div class="tweet">
            <div class="left">
                <img src="<?=$tweet->user->profile_image_url;?>">
            </div>
            <div class="right">
                <div class="info">
                    <p><?=$tweet->user->screen_name; ?><span>@<?=$tweet->user->screen_name; ?></span></p>

                    <time><?= \Carbon\Carbon::createFromTimeStamp(strtotime( $tweet->created_at))->diffForHumans() ; ?></time>
                </div>
                <div class="message">
                    <p><?=$tweet->text; ?></p>

                    
                </div>
                <div class="btns">
                    <button class="green"><i class="fas fa-retweet"></i><?=$tweet->retweet_count; ?></button>
                    <button class="red"><i class="far fa-heart"></i><?=$tweet->favorite_count; ?></button>
                    <button onclick="window.open('https://twitter.com/<?=$tweet->user->screen_name; ?>/status/<?=$tweet->id;?>')" class="blue"><i class="fas fa-link"></i></button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
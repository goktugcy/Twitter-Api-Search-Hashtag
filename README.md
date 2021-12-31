
# Twitter Api Search Hashtag
Search and filter any hashtag you want with Twitter Api using PHP.

## API Using

#### API Connection

```http
  $twitter = new 
  TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
```

| Parametre | Tip     |
| :-------- | :------- | 
| `id`      | `string` | 
| `$consumer_key = "";`||Your consumer key|
`$consumer_secret = "";`|Your consumer_secret key
`$access_token = "";`|Your access token
`$access_token_secret = "";`|Your access_token_secret


#### Get Data

```http
if (isset($_POST['search'])){
$tweets =
$twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23'.$_POST['search'].'&result_type='.$_POST['type'].'&count=10');
}
```



  
## Features

- Hashtag filtering
- The date of the tweet has been made readable with Carbon. 
- Date and time have been made readable with the Carbon plugin. 
- Fav, Retweet count and twitter link are in view.

  
## Usage and Examples

```php
Composer install & update

Timeline Code

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
```

  

<?php 

include "views/layouts/header.php";



if (isset($_POST['search'])){
$tweets =
$twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23'.$_POST['search'].'&result_type='.$_POST['type'].'&count=10');

}

include "views/layouts/coinbar.php";

include "views/parts/timeline.php";

include "views/parts/rightbar.php";    

include "views/layouts/footer.php";
    ?>
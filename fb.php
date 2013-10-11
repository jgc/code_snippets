<?php 

         $app_id = "340031409395063";
         // $canvas_page = "http://bloggundog.com/fb.php";
         $canvas_page = 'http://www.bloggundog.com';
         // DOES NOT WORK! $message = $this->item->title . ' on ' . $this->item->date;
         // Additional parameters
         $link = '&link=http://www.bloggundog.com';
         //$picture = '&picture="http://upload.wikimedia.org/wikipedia/commons/f/fe/American_Brittany_standing.jpg"';
         //$name    = '&name="Brittany picture"';
         //$caption = '&caption="Training on " . $this->item->date';
         //$description = "HPR line 1<center></center>line 2<center></center>line 3";
	 $description = $this->item->title . ' on ' . $this->item->date;
	 
         //$feed_url = "http://www.facebook.com/dialog/feed?app_id=". $app_id . "&link=" . $link . "&picture=" . $picture . "&name=" . $name . "&caption=" . $caption . "&description=" . $description . "&redirect_uri=" . $canvas_page . "&message=" . $message;

  	$feed_url = "http://www.facebook.com/dialog/feed?app_id=". $app_id . $link . $picture . $name .  $caption . "&description=" . $description . "&redirect_uri=" . $canvas_page . "&message=" . $message;

 echo '<br/>';
//echo 'Facebook message: ' . $feed_url;
 echo '<br/>';

//         if (empty($_REQUEST["post_id"])) {
//            echo("<script> top.location.href='" . $feed_url . "'</script>");
//         } else {
//            echo ("Feed Post Id: " . $_REQUEST["post_id"]);
//         }
// https://www.facebook.com/dialog/feed?app_id=340031409395063&link=http://www.wikipedia.com&
// picture=http://upload.wikimedia.org/wikipedia/commonsf/fe/American_Brittany_standing.jpg&name=new blog&
// caption=news and views&description=about gundogs&redirect_uri=http://bloggundog.com
?>
<a class="btn" href="<?php echo $feed_url; ?>" target="default">Post to Facebook</a>
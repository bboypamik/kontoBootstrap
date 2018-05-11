<?php
$pictures = array(
    array(
      "bigPic" => "https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg?auto=compress&cs=tinysrgb&h=600",
        "smallPic" => "https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg?auto=compress&cs=tinysrgb&h=600"
    ),
array(
 "bigPic" => "https://wallpaperbrowse.com/media/images/soap-bubble-1958650_960_720.jpg",
    "smallPic" =>"https://wallpaperbrowse.com/media/images/soap-bubble-1958650_960_720.jpg"

),
array(
  "bigPic" => "https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg",
  "smallPic" =>"https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg"
),
   array(
       "bigPic" => "https://wallpaperbrowse.com/media/images/3848765-wallpaper-images-download.jpg",
       "smallPic" =>"https://wallpaperbrowse.com/media/images/3848765-wallpaper-images-download.jpg"
   ),
   array(
       "bigPic" => "https://www.elastic.co/assets/bltada7771f270d08f6/enhanced-buzz-1492-1379411828-15.jpg",
       "smallPic" =>"https://www.elastic.co/assets/bltada7771f270d08f6/enhanced-buzz-1492-1379411828-15.jpg"
   ),
   array(
       "bigPic" => "http://www.hd-freewallpapers.com/latest-wallpapers/images-of-snakes.jpg",
       "smallPic" =>"http://www.hd-freewallpapers.com/latest-wallpapers/images-of-snakes.jpg"
   ),

   array(
       "bigPic" =>"https://www.planwallpaper.com/static/images/6775415-beautiful-images.jpg",
       "smallPic" =>"https://www.planwallpaper.com/static/images/6775415-beautiful-images.jpg"
   ),
   array(
       "bigPic" =>"https://s.ftcdn.net/v2013/pics/all/curated/WABGq1xFtP1BDaOekfJZ9zFOU5uRTgGq_cover_1160.jpg?r=2e8d241fa2ca9957d1b8fab2a3d479f07a2c963b",
       "smallPic" =>"https://s.ftcdn.net/v2013/pics/all/curated/WABGq1xFtP1BDaOekfJZ9zFOU5uRTgGq_cover_1160.jpg?r=2e8d241fa2ca9957d1b8fab2a3d479f07a2c963b"
   ),
   array(
       "bigPic" =>"https://wallpaperbrowse.com/media/images/maxresdefault_RlXh3Bt.jpg",
       "smallPic" =>"https://wallpaperbrowse.com/media/images/maxresdefault_RlXh3Bt.jpg"
   ),
   array(
       "bigPic" =>"https://3.bp.blogspot.com/--wJKcRs0bKc/Wntv6WfrlVI/AAAAAAAAASg/TP_zwxM0XF8AOFqOuOjVrHEvYUiisI6QwCLcBGAs/s1600/3.jpeg",
       "smallPic" =>"https://3.bp.blogspot.com/--wJKcRs0bKc/Wntv6WfrlVI/AAAAAAAAASg/TP_zwxM0XF8AOFqOuOjVrHEvYUiisI6QwCLcBGAs/s1600/3.jpeg"
   ),
   array(
       "bigPic" =>"https://www.gettyimages.in/gi-resources/images/Homepage/Hero/US/SEP2016/embed7-601057996.jpg",
       "smallPic" =>"https://www.gettyimages.in/gi-resources/images/Homepage/Hero/US/SEP2016/embed7-601057996.jpg"
   ),
   array(
       "bigPic" => "http://www.freedigitalphotos.net/images/img/homepage/87357.jpg",
       "smallPic" =>"http://www.freedigitalphotos.net/images/img/homepage/87357.jpg"
   ),
   array(
           "bigPic" => "http://www.nhm.ac.uk/content/dam/nhmwww/visit/Exhibitions/art-of-british-natural-history/magpie-illustration-keulemans-two-column.jpg",
       "smallPic" => "http://www.nhm.ac.uk/content/dam/nhmwww/visit/Exhibitions/art-of-british-natural-history/magpie-illustration-keulemans-two-column.jpg"
   ),
    array(
            "bigPic" => "https://www.drivespark.com/img/2017/11/02-1509620655-bajaj-pulsar-ns-200-abs-launch-india-price-images-details-8.jpg",
        "smallPic" => "https://www.drivespark.com/img/2017/11/02-1509620655-bajaj-pulsar-ns-200-abs-launch-india-price-images-details-8.jpg"
    ),
    array(
            "bigPic" => "http://www.hdwallpapery.com/static/images/Sv4BC_ltdPPcT.png",
        "smallPic" => "http://www.hdwallpapery.com/static/images/Sv4BC_ltdPPcT.png"
    ),
    array(
            "bigPic" => "http://www.uniwallpaper.com/static/images/Wallpaper-10.jpg",
        "smallPic" => "http://www.uniwallpaper.com/static/images/Wallpaper-10.jpg"
    )

);
?>


<div class="container">
 	<h2 class="text-center p-5">GALERIJA</h2>
    <div class="row">

 	<?php foreach ($pictures as $pic) : ?>

 		<div class="col-3">
 			<a class="test-popup-link" href="<?php echo $pic["bigPic"];?>">
 				<img src="<?php echo $pic["smallPic"];?>" class="img-fluid">
 			</a>

 		</div>
   <?php endforeach; ?>
    </div>
 	
 </div>



<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="common/css/import.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/top.css" media="all" />
<link rel="stylesheet" type="text/css" href="common/css/thickbox.css" media="all" />

<script src="common/js/jquery.js" type="text/javascript"></script>
<script src="common/js/smoothscroll.js" type="text/javascript"></script>
<script src="common/js/rollover.js" type="text/javascript"></script>
<script src="common/js/swfobject.js" type="text/javascript"></script>
<script src="../common/js/redirect.js" type="text/javascript"></script>
<script type="text/javascript" src="common/js/thickbox.js"></script>





<title>Nissenken Quality Evaluation India Pvt. Ltd.</title>

<meta name="keywords" content="nissenken quality evaluation center,nissenken,senken,oeko tex,formaldehyde,textile,fabric,garment,inspection,testing,quality management, testing institute,quality standard,aromatic amine,azo,safety,functionality,heavy metal" />
<meta name="description" content="Nissenken, with the spirit that confidence comes from safety the only authorized testing institute of "Oeko-Tex standard" aimed at securing ecological safety of textile in Japan." />




</head>

<body>

<a id="top" name="top"></a>


<div class="container">




<div class="flash">
<div id="flashcontent">

<div class="header">
<img src="img/title.jpg" alt="Nissenken Quality Evaluation Center　Nissenken is the third party quality evaluation institute involved in safety and functionality test for garments and raw materials." width="960" height="86" border="0" usemap="#Map">
</div><!-- /header -->


<img src="img/flash.png" width="960" height="370" border="0" usemap="#Map3">
<map name="Map3" id="Map3">
  <area shape="poly" coords="128,320,127,109,226,50,327,108,327,321" href="service/index.html" alt="Business guide" />
  <area shape="poly" coords="626,320,623,107,722,51,823,109,823,320"  href="test/index.html" alt="Order for testing" />
  <area shape="poly" coords="381,318,381,110,481,51,582,112,580,319" href="service/safety_arylamines.html" alt="amines"/>
</map>
</div>
</div>



<div class="contentsArea">

<div class="topMenu">
<ul>
<li><a href="news/index.php"><img src="common/img/menu_1.jpg" alt="news" width="151" height="43" class="rollover"/></a></li>
<li><a href="service/index.html"><img src="common/img/menu_2.jpg" alt="service" width="150" height="43" class="rollover" /></a></li>
<li><a href="test/index.html"><img src="common/img/menu_3.jpg" alt="order for testing" width="150" height="43" class="rollover" /></a></li>
<li><a href="outline/index.html"><img src="common/img/menu_4.jpg" alt="nissenken outline" width="149" height="43" class="rollover" /></a></li>
<li><a href="businesssites/index.html"><img src="common/img/menu_5.jpg" alt="business sites" width="150" height="43" class="rollover" /></a></li>
<li><a href="contact/index.html"><img src="common/img/menu_6.jpg" alt="contact" width="150" height="43" class="rollover" /></a></li>
</ul>
<div class="clearfloat"></div>
</div><!-- /topMenu -->


<div class="mainArea">

<div class="leftArea">

<div class="concept"><a href="moviegallery/index.html"><img src="img/concept.jpg" alt="Nissenken, being kind to people and strict in textile quality with professional eyes, protects the confidence, safety and health of human.Nissenken is the third party quality evaluation institute involved in safety and functionality test for garments and raw materials.
" width="670" height="204" border="0" class="rollover"></a></div>



<div class="news">
<img src="img/h_news.jpg" alt="news info" width="668" height="34" border="0" usemap="#Map2">
<map name="Map2" id="Map2">
  <area shape="rect" coords="548,9,662,26" href="news/index.html" alt="list of news" />
</map>
<ul>

<?php
  $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
  $dbname = "mundqcfi_cl56-yash"; // the name of the database that you are going to use for this project
  $dbuser = "mundqcfi_cl56-yash"; // the username that you created, or were given, to access your database
  $dbpass = "1999hsay"; 
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
  if(! $conn ) {
  die('Could not connect: ' . mysql_error());
  }

  $sql = 'SELECT * FROM news LIMIT 5';
  mysql_select_db($dbname);
  $retval = mysql_query( $sql, $conn );

  if(! $retval ) {
  die('Could not get data: ' . mysql_error());
  }
  while($row = mysql_fetch_array($retval, MYSQL_ASSOC) ) {
  echo "<li><p><a href='{$row['link']}'>{$row['newsd']}</a></p></li>";
  }
?>

</ul>

</div>
</div><!-- /reftArea -->

<div class="rightArea">

<div class="contact">
<a href="contact/index.html"><img src="common/img/contact_bt.jpg" alt="contact" width="210" height="80" class="rollover"></a>
</div><!-- /contact -->

<div class="banner">
<ul>
<li><a href="moviegallery/index.html"><img src="img/banner_movie.jpg" alt="movie gallery" width="210" height="150" class="rollover"></a></li>
</ul>
</div>

</div><!-- /rightArea -->

<div class="clearfloat"></div>
</div>

</div><!-- /contentsArea -->

</div><!-- /container -->

<!-- サイトマップ・フッター読み込み -->
<script type="text/javascript" src="common/js/footer2.js"></script>


</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../common/css/import.css" media="all" />
<link rel="stylesheet" type="text/css" href="../common/css/global2.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/news.css" media="all" />

<script src="../common/js/jquery.js" type="text/javascript"></script>
<script src="../common/js/smoothscroll.js" type="text/javascript"></script>
<script src="../common/js/rollover.js" type="text/javascript"></script>
<script src="../common/js/redirect.js" type="text/javascript"></script>


<title>Nissenken Quality India Pvt. Ltd. | News | List of news</title>

<meta name="keywords" content="nissenken quality evaluation center,nissenken,senken,oeko tex,formaldehyde,textile,fabric,garment,inspection,testing,quality management, testing institute,quality standard,aromatic amine,azo,safety,functionality,heavy metal" />
<meta name="description" content="Nissenken, with the spirit that confidence comes from safety the only authorized testing institute of "Oeko-Tex standard" aimed at securing ecological safety of textile in Japan." />




</head>

<body>
<a id="top" name="top"></a>

<div class="container">

<div class="contentsArea">

<!-- ヘッダーの読み込み -->
<script type="text/javascript" src="../common/js/header.js"></script>



<div class="mainArea">

<div class="path">
<a href="../index.php">Home</a> > News
</div><!-- /path -->

<div class="leftArea">

<div class="sideMenu">

<h2><img src="img/title.jpg" alt="news" width="210" height="82"></h2>

</div><!-- /sideMenu -->

<!-- 問い合わせの読み込み -->
<script type="text/javascript" src="../common/js/contact.js"></script>

</div><!-- /leftArea -->


<div class="rightArea">

<div class="column1">
<h3><img src="img/title_newsindex.jpg" alt="list of news" width="650" height="81"></h3>

<div class="news">
<ul>
<?php
   $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
	$dbname = "cl56-yash"; // the name of the database that you are going to use for this project
	$dbuser = "cl56-yash"; // the username that you created, or were given, to access your database
	$dbpass = "1999hsay";
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
  if(! $conn ) {
  die('Could not connect: ' . mysql_error());
  }

  $sql = 'SELECT * FROM news ';
  mysql_select_db($dbname);
  $retval = mysql_query( $sql, $conn );

  if(! $retval ) {
  die('Could not get data: ' . mysql_error());
  }
  while($row = mysql_fetch_array($retval, MYSQL_ASSOC) ) {
  echo "<li><p><a href='{$row['link']}'>{$row['newsd']}</a>  {$row['date']}</p></li>";
  }
?>
</ul>

</div><!-- /news -->



</div><!-- /column1 -->

</div><!-- /rightArea -->



</div><!-- /mainArea -->
<div class="clearfloat"></div>


</div><!-- /contentsArea -->
</div><!-- /container -->


<!-- サイトマップ・フッター読み込み -->
<script type="text/javascript" src="../common/js/footer.js"></script>

</body>
</html>

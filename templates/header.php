<?php
//$bbPath = "/YouTube-Downloader/";
$bbPath = "/";

$additionPortPath = '';

if ($_SERVER['SERVER_PORT'] != 80) {
    $additionPortPath = ":" . $_SERVER['SERVER_PORT'];
}


$currentURL = $_SERVER['REQUEST_SCHEME'] . "://" .$_SERVER['SERVER_NAME'] . $additionPortPath . $_SERVER['REQUEST_URI'];

//echo $currentURL;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->get('title', 'Youtube Downloader'); ?></title>
	<meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader"/>
	<meta name="description" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="<?php echo $bbPath?>css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo $bbPath?>css/custom.css" rel="stylesheet">
	<style type="text/css">
		#info {
			padding: 0 0 0 130px;
			position: relative;
			height: 100px;
		}
		#info img {
			left: 0;
			position: absolute;
			top: 0;
			width: 120px;
			height: 90px
		}
	</style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140690718-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-140690718-1');
    </script>

    <script>
        var ytBasePath = '<?php echo $bbPath?>';

        window.addEventListener('load', function(){
            var nodeList = document.querySelectorAll('.nav>li>a');
            var currentLocation = window.location.href;

            nodeList.forEach(function(node){
                var nodeHref = node.href
                if (nodeHref == currentLocation) {
                    node.parentNode.classList.add('active')
                }


            })
        })
    </script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://youtubedownloadervideos.com">Youtube Video Downloader</a>
		</div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://youtubedownloadervideos.com">Home</a></li>
                <li><a href="<?php echo $bbPath?>convert-youtube-to-mp3/index.php">Convert Youtube to mp3</a></li>
            </ul>
        </div><!--/.nav-collapse -->
	</div>
</nav>
<div class="container">

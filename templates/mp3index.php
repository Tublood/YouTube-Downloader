<?php echo $this->inc('header.php', ['title' => 'Youtube MP3 Converter']); ?>
	<div class="well">
		<form class="" method="get" id="download" action="getmp3.php">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- ad21 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-4631273244511276"
                 data-ad-slot="8858021838"
                 data-ad-format="link"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
			<h1 class="form-download-heading">Convert Youtube To MP3</h1>
				<div class="input-group">
				  <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="YouTube Link or VideoID" autofocus>
				  <span class="input-group-btn">
					<input class="btn btn-primary btn-lg" type="submit" name="type" id="type" value="Convert" />
				  </span>
				</div><!-- /input-group -->
			<div class="video-info">
				<p>Valid inputs are YouTube links or VideoIDs:</p>
					<ul>
						<li>youtube.com/watch?v=...</li>
						<li>youtu.be/...</li>
						<li>youtube.com/embed/...</li>
						<li>youtube-nocookie.com/embed/...</li>
						<li>youtube.com/watch?feature=player_embedded&v=...</li>
					</ul>
			</div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- ad14 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-4631273244511276"
                 data-ad-slot="5938473435"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <h2>Video Downloader Features</h2>
            <div class="content">

                Our video downloader is completely free and easy to use without requiring you to register for an account or download any software. Moreover, it offers the following features:
                <ul>
                    <li>Download videos in HD, SD, and many other available resolutions</li>
                    <li>Unlimited downloads without any restrictions</li>
                    <li>Free to use</li>
                    <li>Fast downloads and conversions with no rate limiting</li>
                    <li>Works on any device, whether it be Windows, macOS, iOS, Linux, or Android</li>
                    <li>100% safe &amp; secure</li>
                </ul>
            </div>
		<!-- @TODO: Prepend the base URI -->
		<?php
		if ( $this->get('showBrowserExtensions') === true )
		{
			echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
		}
		?>
		<div class="clearfix"></div>
		</form>
	</div>
<?php echo $this->inc('footer.php'); ?>

<div id="body">
	<div id="body_area">
		<div id="body_head">
			<div id="logo_area" class="left">
				<a href="/"><img id="logo_over" src="/images/logo_over.png" /></a>
				<img src="/images/wembleys_logo.png"/ style="margin-right: 15px;" class="left" border="0" />
				<p id="wembleys_title" class="left"> <a href="/">wembleys</a> </p>
			</div>
			<a href="?page=about" class="left">
				<div id="about" class="button <?=$a_active?>">
					ABOUT
				</div>
			</a>
			<a href="?page=contact" class="left">
				<div id="contact" class="button <?=$c_active?>">
					CONTACT
				</div>
			</a>
			<img id="slide_toggle" src="/images/fb_thumb.png" style="margin-left: 10px;" />
			<div class="clear"></div><br>
			<div class="line">
			</div>
		</div>
		<?
			include("pages/$page/$page.php");
		?>
		<div id="footer">
			<div class="line"></div>
			<div id="commercial" class="foot_list left">
				<img src="/images/commercial_estate.png">
				<div class="foot_text">
					<h1>commercial</h1>
					<p>real estate</p>
				</div>
			</div>
			
			<div class="vert_line left"></div>
			
			<div id="commercial_b" class="foot_list left">
				<img src="/images/commercial_lending.png">
				<div class="foot_text">
					<h1>commercial</h1>
					<p>lending</p>
				</div>
			</div>
		
			<div class="vert_line left"></div>
		
			<div id="residential" class="foot_list left">
				<img src="/images/residential_estate.png">
				<div class="foot_text">
					<h1>residential</h1>
					<p>real estate</p>
				</div>
			</div>
			
			<div class="vert_line left"></div>
			
			<div id="residential_b" class="foot_list left">
				<img src="/images/residential_lending.png">
				<div class="foot_text">
					<h1>residential</h1>
					<p>morgate & lending</p>
				</div>
			</div>
			<div class="clear"></div>
			<div class="line"></div>
			<div id="footnote">
				<img id="img_7" src="/images/7.png" class='left'/>
				<h1 class='left'>Footnote:</h1>
				<p class='left'> 7% of our earnings go towards helping Save The Children, Kiva and Open Source Projects</p>
			</div>
			<div id="copyright" class='clear'>
				Copyright © 2010 Wembley’s, Inc. Use of this web site constitutes acceptance of the eHow Terms of Use † and Privacy Policy †. en-US † requires javascrip
			</div>
		</div>
	</div>
</div>
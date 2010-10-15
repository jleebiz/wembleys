<div class="line"></div>

<div id="social_side">
	<img class="icon" src="/images/twitter_side.png" /><br/><br/>
	<img class="icon" src="/images/connect_side.png" /><br/><br/>
	<img class="icon" src="/images/facebook_side.png" /><br/><br/>
	<img class="icon" src="/images/rss_side.png" /><br/><br/>
</div>

<!--<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> <script language="javascript" src="http://stiqr.jlee.biz/sticker/api"></script>-->
</body>
</html>

<script language="javascript">
	$(document).ready(function(){
		$("#fb").append('<iframe src="http://www.facebook.com/plugins/like.php?href=wembleys.com&amp;layout=standard&amp;show_faces=true&amp;width=250&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:25px;" allowTransparency="true"></iframe>');
		$("#social_side").appendTo('#body');
		
		var slide_display = false;
		
		$('#slide_toggle').toggle(function(){
			$("#head_slide").animate({
				"height": "200px"
			});
			$(this).attr('src','/images/thumbup.png');
		}, function(){
			$("#head_slide").animate({
				"height": "0px"
			});
			$(this).attr('src','/images/fb_thumb.png');
		});
		
		$("#logo_area").hover(function(){
			$("#logo_over").show();
		}, function(){
			$("#logo_over").hide();
		});
		
		$("#img_7").hover(function(){
			$(this).attr("src", "/images/7_over.png");
		}, function(){
			$(this).attr("src", "/images/7.png");
		});
		
		$(".foot_list").hover(function(){
			src = $(this).find("img").attr("src");
			new_src = get_over_src(src);
			$(this).find("img").attr("src", new_src);
			
		}, function(){
			$(this).find("img").attr("src", src);
		});
		
		$("#social_side .icon").hover(function(){
			src = $(this).attr("src");
			new_src = get_over_src(src);
			$(this).attr("src", new_src);
		}, function(){
			$(this).attr("src", src);
		});
		
		$("#other img").hover(function(){
			src = $(this).attr('src');
			new_src = get_over_src(src);
			$(this).attr("src", new_src);
		}, function(){
			$(this).attr("src", src);
		});
	});
	
	function get_over_src(src){
		explode = src.split(".");
		new_src = explode[0] + "_over." + explode[1];
		return (new_src);
	}
	
</script>

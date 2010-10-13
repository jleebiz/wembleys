<div class="line"></div>

<!--<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> <script language="javascript" src="http://free.stiqr.com/sticker/api"></script>-->
</body>
</html>

<script language="javascript">
	$(document).ready(function(){
		$("#fb").append('<iframe src="http://www.facebook.com/plugins/like.php?href=wembleys.com&amp;layout=standard&amp;show_faces=true&amp;width=250&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:25px;" allowTransparency="true"></iframe>');
		$("body").show();
		
		
		var slide_display = false;
		
		$('#slide_toggle').toggle(function(){
			$("#head_slide").fadeIn();
		}, function(){
			$("#head_slide").fadeOut();
		});
	});
</script>

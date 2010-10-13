<?
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = "home";
	}
	
	
	if($page == "home"){
		$a_active = "";
		$c_active = "";
	}else if($page == "about"){
		$a_active = "active";
	}else if($page == "contact"){
		$c_active = "active";
	}
	
	include("header.php");
	include("body.php");
	include("footer.php");
?>
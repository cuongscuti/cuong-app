$(function(){
	$(".menu a").click(function(){
		if($(this).hasClass("acti")){
			return false;
		}
		else{
			$(".menu a").removeClass("menu acti");
			$(this).addClass("acti");
		}
		return false;
	});
});
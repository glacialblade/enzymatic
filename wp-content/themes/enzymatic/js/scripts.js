jQuery(document).ready(function($){
	$("#banner").banner();

	$("#menuicon").click(function(){
		$("#navigation ul").eq(0).toggle();
	})

	$(window).resize(function(){
		if($(window).width() > 1000){
			$("#navigation ul").eq(0).show();
		}
		else{
			$("#navigation ul").eq(0).hide();
		}
	})
});
jQuery(document).ready(function($){
	$("#banner").banner();

	$("#menuicon").click(function(){
		$("#navigation ul").eq(0).toggle();
	})
});
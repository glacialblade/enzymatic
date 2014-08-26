jQuery(document).ready(function($) {
    $(document).on("click","#chooseimage",function(){
    	var button = $(this);
        tb_show('Upload a logo', 'media-upload.php?referer=wptuts-settings&type=image&TB_iframe=true&post_id=0', false);

		window.send_to_editor = function(html) {
			var image_url = $('img',html).attr('src');
			
			$.each(button.parents(".widget").find("input"),function(key,val){
				var id = $(this).attr("id");
	    		if(id == "imagelink"){
	    			$(this).val(image_url);
	    		}
	    	});

			tb_remove();
		}
		return false;
    });
});
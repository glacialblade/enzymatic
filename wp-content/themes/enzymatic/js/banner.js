(function($){
   $.fn.banner = function() {
   		var selector      = $(this).selector;
   		var imagewrappers = $(selector).find(".bannerimage");
   		var textwrappers  = $(selector).find(".bannertext");
   		var timer;
   		
   		var banner = {
   			currentimage:0,
   			lastimage:0,
   			initialize:function(){
   				this.fixposition();
   				this.hideimages();
   				this.hidetexts();

   				this.animatebannertext();
   				this.startanimation();
   			},
   			fixposition:function(){
   				$(selector).css("position","relative");
   				imagewrappers.css({
   					"position":"absolute",
   					"overflow":"hidden"
   				});
                imagewrappers.find("img").css("height","auto");
   				textwrappers.css({
   					"position":"absolute",
   					"bottom":"10px",
   					"padding":"8px 5px",
   					"background":"rgba(0,0,0,0.5)",
   					"color":"#d2d2d2"
   				});

   				$.each(imagewrappers,function(key,val){
   					$(this).css("z-index",1000-key);
   				});

   				this.fixheight();
   			},
   			fixheight:function(){
   				var height = imagewrappers.height();
   				$(selector).height(height);
   			},
   			startanimation:function(){
   				timer = setInterval(function(){
   					banner.lastimage = banner.currentimage;
   					banner.currentimage++;
   					if(banner.currentimage > (imagewrappers.length-1)){
   						banner.currentimage = 0;
   					}

   					banner.animateimages();
   				},5000);
   			},
   			animateimages:function(){
   				nextimage = imagewrappers.eq(this.currentimage);
   				lastimage = imagewrappers.eq(this.lastimage);

   				nextimage.css({
   					"z-index":lastimage.css("z-index")*1+1
   				});
   				$(nextimage).fadeIn(1000,function(){
   					banner.hideimages();
   					banner.animatebannertext();
   				});
   			},
   			animatebannertext:function(){
                //textwrappers.eq(this.currentimage).css("width",textwrappers.eq(this.currentimage).width());
                //textwrappers.eq(this.currentimage).css("right","10px");
                var twidth = textwrappers.eq(this.currentimage).innerWidth();
                var iwidth = imagewrappers.eq(this.currentimage).innerWidth();
                
                if(twidth > iwidth - 10 && iwidth != 0){
                    textwrappers.eq(this.currentimage).css("width",iwidth-50);
                }
   				textwrappers.eq(this.currentimage).animate({
   					left:"10px"
   				},800,function(){
   					banner.hidetexts();
   				});
   			},
   			hideimages:function(){
   				$.each(imagewrappers,function(key,val){
	   				if(key != banner.currentimage){
						$(this).css("display","none");
					}
				});
   			},
   			hidetexts:function(){
   				$.each(textwrappers,function(key,val){
   					if(key != banner.currentimage){
	   					var width = $(this).css("width");
	   					$(this).css("left",-2000);
	   				}
   				});
   			}
   		};
   		banner.initialize();


   		/****************** EVENTS ******************/
   		$(window).resize(function(){
   			banner.fixheight();
   		});

        imagewrappers.find("img").load(function(){
            banner.fixheight();
        })
   }; 
})( jQuery );
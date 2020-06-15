var Business = (function(){

	function init()
	{
		$('.area h4').click(function(){
			var area = $(this).parent('.area').attr('class').split(' ')[1];
			var area_elem = $('.area.' + area);
			var area_list = area_elem.find('.list');
			area_list.slideToggle(400);
			area_elem.find('h4').toggleClass('open');
		});
		$('.world_map a,ul.region_list li a').click(function(){
			var region = $(this).attr('class');
			var area = $('.list-container').find('.' + region).parents('.area').attr('class');
			if(area != undefined)
			{
				var area_name = area.split(' ')[1];
				areaOpen(area_name,region);
			}
			else
			{
				areaOpen(region);
			}
		});
	}

	function areaOpen(area,region){
		var area_elem = $('.area.' + area);
		area_elem.find('.list').slideDown(0);
		var h4 = area_elem.find('h4');
		if(!h4.hasClass('open'))
		{
			h4.addClass('open');
		}
		if(region != undefined)
		{
			var region_elem = area_elem.find('.' + region);
			var target_y = region_elem.offset().top;
			$('html, body').animate({scrollTop:target_y},500,"swing");
		}
		else{
			var target_y = area_elem.offset().top;
			$('html, body').animate({scrollTop:target_y},500,"swing");	
		}
	}

	return{
		init: init
	}
})();
$(function(){
	Business.init()
});
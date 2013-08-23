$(document).ready(function () {
	
	//counts the number of images in arch-slider
	var total_slide=0;
	var current = 0;
	$(".arch-slider").find('.slide').each(function(){
		total_slide++;
	});
	//stores image number in an array
	var list = new Array();
	for (var i = 1; i <=total_slide; i++) {
		list.push(i);
	}
	//next button press
	$(".next").click(function(){
		next_image();
	});
	//prev button press
	$(".prev").click(function(){
		prev_image();
	});
	//for extended menu in sports page
	$('.arrow-last').bind('click', function(){
		$('.sec-menu-item').css("margin-top","-5%");
	});
	//to change image to next in the slideshow
	function next_image()
	{
		var present_slide="#slide"+list[current];
		var next_slide="#slide"+list[current+1];
		$(present_slide).css("left","-100%");
		$(next_slide).css("left","0%");
		current++;
		if (current>=total_slide) {
			current = 0;
			for(i=1;i<=total_slide;i++)
			{
				$("#slide"+i).css("left","-100%");
			}
			$("#slide1").css("left","0%");
		}
	}
	//to change image to previous in the slideshow
	function prev_image()
	{
		var present_slide="#slide"+list[current];
		var next_slide="#slide"+list[current-1];
		if (current===0) {
			current = total_slide;
			next_slide="#slide"+list[current-1];
			for(i=1;i<=total_slide;i++)
			{
				$("#slide"+i).css("left","-100%");
			}
			$("#slide"+current).css("left","0%");
			current--;

		}
		else{
			current--;
			$(present_slide).css("left","-100%");
			$(next_slide).css("left","0%");
		}
	}
	//progress bar
	var timer=self.setInterval(function(){next_image();},5000);
	/*
	function animate_bar(){
		$('.progress-bar').animate({
			width: '-=800'
		},5000,"linear",function(){
			$('.progress-bar').css("width","100%");
		});
	}*/

	//submenu in sports ajax
	$('.sec-menu-item').click(function(){
		var id = $(this).attr("id");
		$.ajax({
			type: 'POST',
			url: 'sport_page.php',
			data: {'id':id},
			success: function(data){
				$('.text-container').html("");
				$('.text-container').html(data);
			},
		});
	});

	//clicking on sports tab
	$('.menu-item').click(
		function(){
			var page_name = $(this).attr("id");
			if (page_name=='sports') {
				$('.secondary-menu-container').slideDown("slow");
			}
			else{
				$('.secondary-menu-container').slideUp("slow");
			}
			if (page_name == 'home') {
				window.location = 'index.php';
			}
			$.ajax({
				type: 'GET',
				url: 'p.php',
				data: {'page': page_name},
				success: function(data){
					$('title').html("ProSports | "+page_name);
					$('.text-container').html(data);
				}
			});
		});

	//show "back to top" on scrolling down
	$('.main-content').scroll(function(){
			if ($('.main-content').scrollTop() > 350) {
				$('.back-top').show("slow");
			}
			if ($('.main-content').scrollTop() < 350) {
					$('.back-top').hide("slow");
			}
	});

	//back top click
	$('.back-top').click(function(){
		$('.main-content').animate({
			scrollTop:0
		}, 500);
	});
	//social icons- open
	function next_social(){
		current = $('.social-container').children().filter('.invisible').first();
		if(current.length>0){
			current.toggleClass('invisible');
			current.toggleClass('visible');
			current.animate({
				'margin-right' : '+='+val
			}, 200, function(){
				val+=50;
				if (current.length>0) {
					next = next_social();
				}
			});
		}
		else
			return 0;
	}
	//social plugin icons- collapse
	function prev_social(){
		current = $('.social-container').children().filter('.visible').first();
		if(current.length>0){
			current.animate({
				'margin-right' : 0
			}, 200, function(){
				if (current.length>0) {
					current.toggleClass('invisible');
					current.toggleClass('visible');
					prev = prev_social();
				}
			});
		}
		else
			return 0;
	}
	//social icon button for opening/collapsing the other social icons
	$('.first').click(function(){
		$(this).toggleClass('opened');
		if($(this).attr("class")!='social-icon first opened')	{	
			prev_social();
		}
		else{
			val = 50;
			next_social();
		}
	});
});
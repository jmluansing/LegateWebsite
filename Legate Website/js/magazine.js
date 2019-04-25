/*
 * Magazine sample
*/

function addPage(page, book) {

	var id, pages = book.turn('pages');

	// Create a new element for this page
	var element = $('<div />', {});

	// Add the page to the flipbook
	if (book.turn('addPage', element, page)) {

		// Add the initial HTML
		// It will contain a loader indicator and a gradient
		element.html('<div class="gradient" ></div><div class="loader"></div>');

		// Load the page
		loadPage(page, element);
	}

}

function loadPage(page, pageElement) {

	// Create an image element
	
	var img = $('<img id="imgpages"/>');
	img.mousedown(function(e) {
		e.preventDefault();
	});

	img.load(function() {
		
		// Set the size
		$(this).css({width: '100%', height: '100%'});

		// Add the image to the page after loaded

		$(this).appendTo(pageElement);

		// Remove the loader indicator
		
		pageElement.find('.loader').remove();
	});

	// Load the page
		var iddd = "pgimg"+page;
		img.attr('id',iddd);
		img.attr('name',iddd);
		img.attr('src','pages/'+ page +'.jpg');

	
	if($("#btnpg2").length == 0){
				$( "#pgimg2" ).after( "<a id='btnpg2' href='https://www.youtube.com/watch?v=Bx6m3ou64fM'  target='_blank'><img  id='imgbtn2' style='width:100%;' src='pages/btns/Cata-02.png'></a>" );	

	}else{

	}
	if($("#btnpg5").length==0){
		$( "#pgimg5" ).after( "<a id='btnpg5' href='https://www.facebook.com/LegateLifestyle/videos/1228554783911124/'  target='_blank'><img  id='imgbtn5' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg6").length==0){
		$( "#pgimg6" ).after( "<a id='btnpg6' href='https://www.youtube.com/watch?v=7dPt4f8aKeM'  target='_blank'><img  id='imgbtn6' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg7").length==0){
		$( "#pgimg7" ).after( "<a id='btnpg7' href='https://www.youtube.com/watch?v=wCni0hlbEGA'  target='_blank'><img  id='imgbtn7' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg10").length==0){
		$( "#pgimg10" ).after( "<a id='btnpg10' href='https://www.facebook.com/LegateLifestyle/videos/1267556690010933/'  target='_blank'><img  id='imgbtn10' style='width:100%;' src='pages/btns/Cata-07.png'></a>" );	
	}else{

	}
	if($("#btnpg11").length==0){
		$( "#pgimg11" ).after( "<a id='btnpg11' href='https://www.youtube.com/watch?v=jItAhI914JQ&t=5s'  target='_blank'><img  id='imgbtn11' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg12").length==0){
		$( "#pgimg12" ).after( "<a id='btnpg12' href='https://www.youtube.com/watch?v=jItAhI914JQ&t=5s'  target='_blank'><img  id='imgbtn12' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg13").length==0){
		$( "#pgimg13" ).after( "<a id='btnpg13' href='https://www.youtube.com/watch?v=jItAhI914JQ&t=5s'  target='_blank'><img  id='imgbtn13' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg14").length==0){
		$( "#pgimg14" ).after( "<a id='btnpg14' href='https://www.facebook.com/LegateLifestyle/videos/1239792642787338/'  target='_blank'><img  id='imgbtn14' style='width:100%;' src='pages/btns/Cata-08.png'></a>" );	
	}else{

	}
	if($("#btnpg17").length==0){
		$( "#pgimg17" ).after( "<a id='btnpg17' href='https://www.youtube.com/watch?v=CIfBtN8N2aU&t=1s'  target='_blank'><img  id='imgbtn17' style='width:100%;' src='pages/btns/Cata-04.png'></a>" );	
	}else{

	}
	if($("#btnpg18").length==0){
		$( "#pgimg18" ).after( "<a id='btnpg18' href='https://www.youtube.com/watch?v=lVeSdJDbWlU'  target='_blank'><img  id='imgbtn18' style='width:100%;' src='pages/btns/Cata-03.png'></a>" );	
	}else{

	}
	if($("#btnpg19").length==0){
		$( "#pgimg19" ).after( "<a id='btnpg19' href='https://www.youtube.com/watch?v=0Rq4EbfMDlA'  target='_blank'><img  id='imgbtn19' style='width:100%;' src='pages/btns/Cata-05.png'></a>" );	
	}else{

	}
	if($("#btnpg20").length==0){
		$( "#pgimg20" ).after( "<a id='btnpg20' href='https://www.facebook.com/LegateLifestyle/videos/1273170986116170/'  target='_blank'><img  id='imgbtn20' style='width:100%;' src='pages/btns/Cata-09.png'></a>" );	
	}else{

	}
	if($("#btnpg21").length==0){
		$( "#pgimg21" ).after( "<a id='btnpg21' href='https://www.facebook.com/LegateLifestyle/videos/1273170986116170/'  target='_blank'><img  id='imgbtn21' style='width:100%;' src='pages/btns/Cata-06.png'></a>" );	
	}else{

	}
	if($("#btnpg22").length==0){
		$( "#pgimg22" ).after( "<a id='btnpg22' href='https://www.facebook.com/LegateLifestyle/videos/1273170986116170/'  target='_blank'><img  id='imgbtn22' style='width:100%;' src='pages/btns/Cata-06.png'></a>" );	
	}else{

	}


}

// Zoom in / Zoom out

function zoomTo(event) {

		setTimeout(function() {
			if ($('.magazine-viewport').data().regionClicked) {
				$('.magazine-viewport').data().regionClicked = false;
			} else {
				if ($('.magazine-viewport').zoom('value')==1) {
					$('.magazine-viewport').zoom('zoomIn', event);
				} else {
					$('.magazine-viewport').zoom('zoomOut');
				}
			}
		}, 1);

}



// Load regions



// Add region



// Process click on a region

function regionClick(event) {

	var region = $(event.target);

	if (region.hasClass('region')) {

		$('.magazine-viewport').data().regionClicked = true;
		
		setTimeout(function() {
			$('.magazine-viewport').data().regionClicked = false;
		}, 100);
		
		var regionType = $.trim(region.attr('class').replace('region', ''));

		return processRegion(region, regionType);

	}

}

// Process the data of every region

function processRegion(region, regionType) {

	data = decodeParams(region.attr('region-data'));

	switch (regionType) {
		case 'link' :

			window.open(data.url);

		break;
		case 'zoom' :

			var regionOffset = region.offset(),
				viewportOffset = $('.magazine-viewport').offset(),
				pos = {
					x: regionOffset.left-viewportOffset.left,
					y: regionOffset.top-viewportOffset.top
				};

			$('.magazine-viewport').zoom('zoomIn', pos);

		break;
		case 'to-page' :

			$('.magazine').turn('page', data.page);

		break;
	}

}

// Load large page

function loadLargePage(page, pageElement) {
	
	var img = $('<img />');

	img.load(function() {

		var prevImg = pageElement.find('img');
		$(this).css({width: '100%', height: '100%'});
		$(this).appendTo(pageElement);
		prevImg.remove();
		
	});

	// Loadnew page
	
	img.attr('src', 'pages/' +  page + '-large.jpg');
}

// Load small page

function loadSmallPage(page, pageElement) {
	
	var img = pageElement.find('img');

	img.css({width: '100%', height: '100%'});

	img.unbind('load');
	// Loadnew page

	img.attr('src', 'pages/' +  page + '.jpg');
}

// http://code.google.com/p/chromium/issues/detail?id=128488

function isChrome() {

	return navigator.userAgent.indexOf('Chrome')!=-1;

}

function disableControls(page) {
		if (page==1)
			$('.previous-button').hide();
		else
			$('.previous-button').show();
					
		if (page==$('.magazine').turn('pages'))
			$('.next-button').hide();
		else
			$('.next-button').show();
}

// Set the width and height for the viewport

function resizeViewport() {

	var width = $(window).width(),
		height = $(window).height(),
		options = $('.magazine').turn('options');

	$('.magazine').removeClass('animated');

	$('.magazine-viewport').css({
		width: width,
		height: height
	}).
	zoom('resize');


	if ($('.magazine').turn('zoom')==1) {
		var bound = calculateBound({
			width: options.width,
			height: options.height,
			boundWidth: Math.min(options.width, width),
			boundHeight: Math.min(options.height, height)
		});

		if (bound.width%2!==0)
			bound.width-=1;

			
		if (bound.width!=$('.magazine').width() || bound.height!=$('.magazine').height()) {

			$('.magazine').turn('size', bound.width, bound.height);

			if ($('.magazine').turn('page')==1){
				$('.magazine').turn('peel', 'br');
			

			$('.next-button').css({height: bound.height, backgroundPosition: '-38px '+(bound.height/2-32/2)+'px'});
			$('.previous-button').css({height: bound.height, backgroundPosition: '-4px '+(bound.height/2-32/2)+'px'});
		}
		}

		$('.magazine').css({top: -bound.height/2, left: -bound.width/2});
	}

	var magazineOffset = $('.magazine').offset(),
		boundH = height - magazineOffset.top - $('.magazine').height(),
		marginTop = (boundH - $('.thumbnails > div').height()) / 2;

	if (marginTop<0) {
		$('.thumbnails').css({height:1});
	} else {
		$('.thumbnails').css({height: boundH});
		$('.thumbnails > div').css({marginTop: marginTop});
	}

	if (magazineOffset.top<$('.made').height())
		$('.made').hide();
	else
		$('.made').show();

	$('.magazine').addClass('animated');
	
}


// Number of views in a flipbook

function numberOfViews(book) {
	return book.turn('pages') / 2 + 1;
}

// Current view in a flipbook

function getViewNumber(book, page) {
	return parseInt((page || book.turn('page'))/2 + 1, 10);
}

function moveBar(yes) {
	if (Modernizr && Modernizr.csstransforms) {
		$('#slider .ui-slider-handle').css({zIndex: yes ? -1 : 10000});
	}
}

function setPreview(view) {

	var previewWidth = 112,
		previewHeight = 73,
		previewSrc = 'pages/preview.jpg',
		preview = $(_thumbPreview.children(':first')),
		numPages = (view==1 || view==$('#slider').slider('option', 'max')) ? 1 : 2,
		width = (numPages==1) ? previewWidth/2 : previewWidth;

	_thumbPreview.
		addClass('no-transition').
		css({width: width + 15,
			height: previewHeight + 15,
			top: -previewHeight - 30,
			left: ($($('#slider').children(':first')).width() - width - 15)/2
		});

	preview.css({
		width: width,
		height: previewHeight
	});

	if (preview.css('background-image')==='' ||
		preview.css('background-image')=='none') {

		preview.css({backgroundImage: 'url(' + previewSrc + ')'});

		setTimeout(function(){
			_thumbPreview.removeClass('no-transition');
		}, 0);

	}

	preview.css({backgroundPosition:
		'0px -'+((view-1)*previewHeight)+'px'
	});
}

// Width of the flipbook when zoomed in

function largeMagazineWidth() {
	
	return 2214;

}

// decode URL Parameters

function decodeParams(data) {

	var parts = data.split('&'), d, obj = {};

	for (var i =0; i<parts.length; i++) {
		d = parts[i].split('=');
		obj[decodeURIComponent(d[0])] = decodeURIComponent(d[1]);
	}

	return obj;
}

// Calculate the width and height of a square within another square

function calculateBound(d) {
	
	var bound = {width: d.width, height: d.height};

	if (bound.width>d.boundWidth || bound.height>d.boundHeight) {
		
		var rel = bound.width/bound.height;

		if (d.boundWidth/rel>d.boundHeight && d.boundHeight*rel<=d.boundWidth) {
			
			bound.width = Math.round(d.boundHeight*rel);
			bound.height = d.boundHeight;

		} else {
			
			bound.width = d.boundWidth;
			bound.height = Math.round(d.boundWidth/rel);
		
		}
	}
		
	return bound;
}
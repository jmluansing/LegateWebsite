<!doctype html>
<head>
<meta name="viewport" content="width=device-width">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script type="text/javascript" src="js/jquery.min.1.7.js" ></script>
<script type="text/javascript" src="js/modernizr.2.5.3.min.js" ></script>
<script type="text/javascript" src="js/hash.js" ></script>
<link rel="stylesheet" href="css/jmcat.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<style type="text/css">
	.magazine-viewport {
    width: auto!important;
    overflow: auto!important;
}
</style>
</head>
<body>

<div id="wrapper" style="padding-left:153px;">

    <nav class="navbar navbar-fixed-top" role="navigation" >  

    <div class="container-fluid">

      <div class="navbar-header">

        <div  class="navbar-brand">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a href="#"><img src="images/Legate Logo-01.png" class="img-responsive" ></a>

        </div>

      </div>

      <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav" style="background-color: white;">

          <li ><a href="index.php" >Home</a></li>

          <li><a href="story.html">Legate Story</a></li>

          <li><a href="products.html">Products</a></li>

          <li> <a href="portfolio.html">Portfolio</a></li>

          <li><a href="promotions.html">Promotions</a></li>

           <li><a href="events.html">Events</a></li>

          <li><a href="contact-us.php">Contact Us</a></li>

          <li><a href="videos.php"> Videos </a></li>

        </ul>

      </div><!--/.nav-collapse -->

    </div>

  </nav>

    <!-- Sidebar -->

 <div id="sidebar-wrapper" style="background-color: white;">

        <nav id="spy">

            <ul class="sidebar-nav nav">

                <li class="sidebar-brand">

                    <a href="index.php" id="homepage"><span >Home</span></a>

                </li>

                <li class="sidebar-brand">

                    <a href="story.html" id="ls">

                        <span>Legate Story</span>

                    </a>

                </li>

                <li class="sidebar-brand">

                    <a href="products.html"  >

                        <span >Products</span>

                    </a>

                </li>

                <li class="sidebar-brand">

                    <a href="portfolio.html" id="pf">

                        <span >Portfolio</span>

                    </a>

                </li>

                <li class="sidebar-brand">

                    <a href="promotions.html" id="prmt">

                        <span >Promotions</span>

                    </a>

                </li>

                <li class="sidebar-brand">

                    <a href="events.html" id="Ent">

                        <span >Events</span>

                    </a>

                </li>

                <li class="sidebar-brand">

                    <a href="contact-us.php" id="">

                        <span >Contact Us</span>

                    </a>

                </li>

                <li class="sidebar-brand">

                    <a href="videos.php">

                        <span> Videos </span>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

    <!-- Page content -->

    <div id="page-content-wrapper" style="padding-top: 0;">

        <div class="page-content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <div class="panel ">
                            <div class="panel-heading" >
								<p style="text-align: right;margin-bottom: -28px;">For Free Consultation<br>Call Legate NOW at <a href="tel:62421911">+65 6242 1911</a><br>Email to:<a href="mailto:sales@legate.com.sg?Subject=Inquiry%20" target="_top">sales@legate.com.sg
	                            </a></p>  
                            </div>
                            <div class="panel-body">
                            	<div class="container">
                            		<div class="row">
                            			<div class="col-md-12">
											<div class="magazine-viewport">
												<div class="container">
													<div class="magazine">
														<div ignore="1" class="next-button"></div>
														<div ignore="1" class="previous-button"></div>
													</div>
												</div>
											</div>
                            			</div>
                            		</div>
                            	</div>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>  
</div>
<script type="text/javascript">
async function loadApp() {

 	$('#canvas').fadeIn(1000);

 	var flipbook = $('.magazine');

 	// Check if the CSS was already loaded
	
	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 24);
		return;
	}
	
	// Create the flipbook

	flipbook.turn({
			
			// Magazine width

			width: 922,

			// Magazine height

			height: 600,

			// Duration in millisecond

			duration: 1000,

			// Hardware acceleration

			acceleration: !isChrome(),

			// Enables gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true,

			// Elevation from the edge of the flipbook when turning a page

			elevation: 50,

			// The number of pages

			pages: 22,

			// Events

			when: {
				turning: function(event, page, view) {
					
					var book = $(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');
			
					// Update the current URI

					Hash.go('page/' + page).update();

					// Show and hide navigation buttons

					disableControls(page);
					
					$('.thumbnails .page-'+currentPage).

						parent().
						removeClass('current');

					$('.thumbnails .page-'+page).
						parent().
						addClass('current');

				},

				turned: function(event, page, view) {

					disableControls(page);

					$(this).turn('center');

					if (page==1) { 
						$(this).turn('peel', 'br');
					}

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
				},
				missing: function (event, pages) {
					// Add pages that aren't in the magazine
					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], $(this));
				}
			}
	});

	// Zoom.js

	$('.magazine-viewport').zoom({
		flipbook: $('.magazine'),

		max: function() { 
			
			return largeMagazineWidth()/$('.magazine').width();

		}, 

		when: {

			swipeLeft: function() {

				$(this).zoom('flipbook').turn('next');

			},

			swipeRight: function() {
				
				$(this).zoom('flipbook').turn('previous');

			},

			resize: function(event, scale, page, pageElement) {

				if (scale==1)
					loadSmallPage(page, pageElement);
				else
					loadLargePage(page, pageElement);

			},

			zoomIn: function () {

				$('.thumbnails').hide();
				$('.made').hide();
				$('.magazine').removeClass('animated').addClass('zoom-in');
				$('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');
				
				if (!window.escTip && !$.isTouch) {
					escTip = true;

					$('<div />', {'class': 'exit-message'}).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								$(this).remove();
							});
				}
			},

			zoomOut: function () {

				$('.exit-message').hide();
				$('.thumbnails').fadeIn();
				$('.made').fadeIn();
				$('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');
				$('#imgbtn2').attr('src','pages/btns/Cata-02.png');
				$('#imgbtn5').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn6').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn7').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn10').attr('src','pages/btns/Cata-07.png');
				$('#imgbtn11').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn12').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn13').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn14').attr('src','pages/btns/Cata-08.png');
				$('#imgbtn17').attr('src','pages/btns/Cata-04.png');
				$('#imgbtn18').attr('src','pages/btns/Cata-03.png');
				$('#imgbtn19').attr('src','pages/btns/Cata-05.png');
				$('#imgbtn20').attr('src','pages/btns/Cata-09.png');
				$('#imgbtn21').attr('src','pages/btns/Cata-06.png');
				$('#imgbtn22').attr('src','pages/btns/Cata-06.png');

				setTimeout(function(){
					$('.magazine').addClass('animated').removeClass('zoom-in');
					resizeViewport();
				}, 0);

			}
		}
	});

	// Zoom event

	if ($.isTouch)
		$('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
	else
		$('.magazine-viewport').bind('zoom.tap', zoomTo);


	// Using arrow keys to turn the page

	$(document).keydown(function(e){

		var previous = 37, next = 39, esc = 27;

		switch (e.keyCode) {
			case previous:

				// left arrow
				$('.magazine').turn('previous');
				e.preventDefault();

			break;
			case next:

				//right arrow
				$('.magazine').turn('next');
				e.preventDefault();

			break;
			case esc:
				
				$('.magazine-viewport').zoom('zoomOut');	
				e.preventDefault();

			break;
		}
	});

	// URIs - Format #/page/1 

	Hash.on('^page\/([0-9]*)$', {
		yep: function(path, parts) {
			var page = parts[1];

			if (page!==undefined) {
				if ($('.magazine').turn('is'))
					$('.magazine').turn('page', page);
			}

		},
		nop: function(path) {

			if ($('.magazine').turn('is'))
				$('.magazine').turn('page', 1);
		}
	});


	$(window).resize(function() {
		resizeViewport();
	}).bind('orientationchange', function() {
		resizeViewport();
	});

	// Events for thumbnails

	$('.thumbnails').click(function(event) {
		
		var page;

		if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {
		
			$('.magazine').turn('page', page[1]);
		}
	});

	$('.thumbnails li').
		bind($.mouseEvents.over, function() {
			
			$(this).addClass('thumb-hover');

		}).bind($.mouseEvents.out, function() {
			
			$(this).removeClass('thumb-hover');

		});

	if ($.isTouch) {
	
		$('.thumbnails').
			addClass('thumbanils-touch').
			bind($.mouseEvents.move, function(event) {
				event.preventDefault();
			});

	} else {

		$('.thumbnails ul').mouseover(function() {

			$('.thumbnails').addClass('thumbnails-hover');

		}).mousedown(function() {

			return false;

		}).mouseout(function() {

			$('.thumbnails').removeClass('thumbnails-hover');

		});

	}


	// Regions

	if ($.isTouch) {
		$('.magazine').bind('touchstart', regionClick);
	} else {
		$('.magazine').click(regionClick);
	}

	// Events for the next button

	$('.next-button').bind($.mouseEvents.over, function() {
		
		$(this).addClass('next-button-hover');

	}).bind($.mouseEvents.out, function() {
		
		$(this).removeClass('next-button-hover');

	}).bind($.mouseEvents.down, function() {
		
		$(this).addClass('next-button-down');

	}).bind($.mouseEvents.up, function() {
		
		$(this).removeClass('next-button-down');

	}).click(function() {
		
		$('.magazine').turn('next');

	});

	// Events for the next button
	
	$('.previous-button').bind($.mouseEvents.over, function() {
		
		$(this).addClass('previous-button-hover');

	}).bind($.mouseEvents.out, function() {
		
		$(this).removeClass('previous-button-hover');

	}).bind($.mouseEvents.down, function() {
		
		$(this).addClass('previous-button-down');

	}).bind($.mouseEvents.up, function() {
		
		$(this).removeClass('previous-button-down');

	}).click(function() {
		
		$('.magazine').turn('previous');

	});


	resizeViewport();

	$('.magazine').addClass('animated');

}

// Zoom icon

 $('.zoom-icon').bind('mouseover', function() { 
 	
 	if ($(this).hasClass('zoom-icon-in'))
 		$(this).addClass('zoom-icon-in-hover');

 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).addClass('zoom-icon-out-hover');
 
 }).bind('mouseout', function() { 
 	
 	 if ($(this).hasClass('zoom-icon-in'))
 		$(this).removeClass('zoom-icon-in-hover');
 	
 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).removeClass('zoom-icon-out-hover');

 }).bind('click', function() {

 	if ($(this).hasClass('zoom-icon-in'))
 		$('.magazine-viewport').zoom('zoomIn');
 	else if ($(this).hasClass('zoom-icon-out'))	
		$('.magazine-viewport').zoom('zoomOut');

 });

 $('#canvas').hide();
 yepnope({
 	test : Modernizr.csstransforms,
	yep: ['js/turn.js'],

	both: ['js/zoom.min.js', 'js/magazine.js', 'css/magazine.css'],
	complete: loadApp
});
</script>
</body>

</html>
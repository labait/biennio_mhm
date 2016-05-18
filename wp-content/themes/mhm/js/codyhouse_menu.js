jQuery(document).ready(function($){
	//open navigation clicking the menu icon
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		toggleNav(true);
	});
	//close the navigation
	$('.cd-close-nav, .cd-overlay').on('click', function(event){
		event.preventDefault();
		toggleNav(false);
	});
	//select a new section
	$('.cd-nav li').on('click', function(event){
		event.preventDefault();
		var target = $(this),
			//detect which section user has chosen
			sectionTarget = target.data('menu');
<<<<<<< HEAD

		/* modified by biennio */
		var sectionUrl = target.find("a").attr("href")
		var sectionName = "section-"+target.attr("id")

		/* end modified by biennio */


=======
>>>>>>> 0ac20354be6562986183665bce39f7b8a2950bc7
		if( !target.hasClass('cd-selected') ) {
			//if user has selected a section different from the one alredy visible
			//update the navigation -> assign the .cd-selected class to the selected item
			target.addClass('cd-selected').siblings('.cd-selected').removeClass('cd-selected');
			//load the new section
<<<<<<< HEAD
			loadNewContent(sectionName, sectionUrl);
=======
			loadNewContent(sectionTarget);
>>>>>>> 0ac20354be6562986183665bce39f7b8a2950bc7
		} else {
			// otherwise close navigation
			toggleNav(false);
		}
	});

	function toggleNav(bool) {
		$('.cd-nav-container, .cd-overlay').toggleClass('is-visible', bool);
		$('main').toggleClass('scale-down', bool);
	}

<<<<<<< HEAD
	function loadNewContent(sectionName, sectionUrl) {
		//alert("sectionUrl: "+sectionUrl+", sectionName: "+sectionName)
		//create a new section element and insert it into the DOM
		var section = $('<section class="cd-section '+sectionName+'"></section>').appendTo($('main'));
		//load the new content from the proper html file
		//section.load(sectionName+'.html .cd-section > *', function(event){
		section.load(sectionUrl+" .cd-section > *", function(event){
=======
	function loadNewContent(newSection) {
		//create a new section element and insert it into the DOM
		var section = $('<section class="cd-section '+newSection+'"></section>').appendTo($('main'));
		//load the new content from the proper html file
		section.load(newSection+'.html .cd-section > *', function(event){
>>>>>>> 0ac20354be6562986183665bce39f7b8a2950bc7
			//add the .cd-selected to the new section element -> it will cover the old one
			section.addClass('cd-selected').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//close navigation
				toggleNav(false);
			});
			section.prev('.cd-selected').removeClass('cd-selected');
		});

		$('main').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			//once the navigation is closed, remove the old section from the DOM
			section.prev('.cd-section').remove();
		});

		if( $('.no-csstransitions').length > 0 ) {
			//if browser doesn't support transitions - don't wait but close navigation and remove old item
			toggleNav(false);
			section.prev('.cd-section').remove();
		}
	}
<<<<<<< HEAD
});
=======
});
>>>>>>> 0ac20354be6562986183665bce39f7b8a2950bc7

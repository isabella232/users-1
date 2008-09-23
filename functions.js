function flipAnimation () {
	//Top Section
	var helpTopFade = new YAHOO.util.Anim("help", {	opacity:{to:0} }, 1, YAHOO.util.Easing.easeOut );
	var helpTopShow = new YAHOO.util.Anim("help", {	opacity:{to:1} }, 1, YAHOO.util.Easing.easeIn );
	var categoriesTopFade = new YAHOO.util.Anim("categories", {	opacity:{to:0} }, 1, YAHOO.util.Easing.easeOut );
	var categoriesTopShow = new YAHOO.util.Anim("categories", {	opacity:{to:1} }, 1, YAHOO.util.Easing.easeIn );
	//List Section
	var helpListFade = new YAHOO.util.Anim("helpList", {	opacity:{to:0} }, 1, YAHOO.util.Easing.easeOut );
	var helpListShow = new YAHOO.util.Anim("helpList", {	opacity:{to:1} }, 1, YAHOO.util.Easing.easeIn );
	var categoriesListFade = new YAHOO.util.Anim("categoriesList", {	opacity:{to:0} }, 1, YAHOO.util.Easing.easeOut );
	var categoriesListShow = new YAHOO.util.Anim("categoriesList", {	opacity:{to:1} }, 1, YAHOO.util.Easing.easeIn );
	
	function show (e) { 
		var el = document.getElementById(e);
		el.className = "visible"; 
	}
	
	function hide (e) { var el = document.getElementById(e); el.className = "invisible"; }
	
	//Top Help Functions
	var helpFadeStart = function (type, args) {
		show('categories');			
	}
	var helpShowStart = function (type, args) {
		var help = document.getElementById('help');
		help.style.opacity = 0;
	}
	var helpFadeComplete = function (type, args) { hide('help'); hide('categoriesList'); show('helpList'); helpListShow.animate(); }
	helpTopFade.onStart.subscribe(helpFadeStart);
	helpTopFade.onComplete.subscribe(helpFadeComplete);
	helpTopShow.onStart.subscribe(helpShowStart);
	
	//Top Categories Functions
	var categoriesFadeStart = function (type, args) {
		show('help');
	}
	var categoriesShowStart = function (type, args) {
		var categories = document.getElementById('categories');
		categories.style.opacity = 0;
	}
	var categoriesFadeComplete = function (type, args) { hide('categories');}
	categoriesTopFade.onStart.subscribe(categoriesFadeStart);
	categoriesTopFade.onComplete.subscribe(categoriesFadeComplete);
	categoriesTopShow.onStart.subscribe(categoriesShowStart)






	//List Help Functions
	var helpListShowStart = function (type, args) { 
		var helpList = document.getElementById('helpList');
		helpList.style.opacity = 0;
	}
	var helpListFadeComplete = function (type, args) { hide('helpList'); show('categoriesList'); categoriesListShow.animate(); }
	helpListShow.onStart.subscribe(helpListShowStart);
	helpListFade.onComplete.subscribe(helpListFadeComplete);

	//List Categories Functions
	var categoriesListShowStart = function (type, args) { 
		var categoriesList = document.getElementById('categoriesList');
		categoriesList.style.opacity = 0;
	}
	var categoriesListFadeComplete = function (type, args) { hide('categoriesList'); show('helpList'); helpListShow.animate(); }
	categoriesListShow.onStart.subscribe(categoriesListShowStart);
	categoriesListFade.onComplete.subscribe(categoriesListFadeComplete);
	
	var exdate = new Date();
	exdate.setDate(exdate.getDate()+7);
	var checkState = document.getElementById('help');
	if (checkState.className != "invisible")
	{
		document.cookie = "userSwap=categories" + ((7===null) ? "" : ";expires="+exdate.toGMTString()); 
		if (YAHOO.env.ua.ie > 0)
		{
			show('categories');
			hide('help');
			hide('categoriesList');
			show('helpList');
		}		
		else {
			categoriesListFade.animate();
			helpTopFade.animate();
			categoriesTopShow.animate();
			
		}
	}
	else
	{	
		document.cookie = "userSwap=help" + ((7===null) ? "" : ";expires="+exdate.toGMTString()); 
		if (YAHOO.env.ua.ie > 0)
		{
			show('help');
			hide('categories');	
			hide('helpList');
			show('categoriesList');	
		}
		else {
			helpListFade.animate();
			categoriesTopFade.animate();
			helpTopShow.animate();
			
		}
	}	
}
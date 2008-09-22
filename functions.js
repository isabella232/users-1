function flipAnimation () {
	var helpFade = new YAHOO.util.Anim("help", {	opacity:{to:0} }, 1, YAHOO.util.Easing.easeOut );
	var helpShow = new YAHOO.util.Anim("help", {	opacity:{to:1} }, 1, YAHOO.util.Easing.easeIn );
	var categoriesFade = new YAHOO.util.Anim("categories", {	opacity:{to:0} }, 1, YAHOO.util.Easing.easeOut );
	var categoriesShow = new YAHOO.util.Anim("categories", {	opacity:{to:1} }, 1, YAHOO.util.Easing.easeIn );
	
	function show (e) { 
		var el = document.getElementById(e);
		el.className = "visible"; 
	}
	
	function hide (e) { var el = document.getElementById(e); el.className = "invisible"; }
	
	var helpStart = function (type, args) {
		var toggleLink = document.getElementById('toggleLink');
		var toggleText = document.getElementById('toggleText');
		toggleLink.innerHTML = "I'm looking for...";
		toggleText.innerHTML = "I use Eclipse for...";
		show('categories');			

	}
	
	var helpComplete = function (type, args) { hide('help'); }
	
	var categoriesStart = function (type, args) {
		var toggleLink = document.getElementById('toggleLink');
		var toggleText = document.getElementById('toggleText');
		toggleLink.innerHTML = "I use Eclipse for...";
		toggleText.innerHTML = "I'm looking for...";
		show('help');
	}
	
	var categoriesComplete = function (type, args) { hide('categories'); }

	helpFade.onStart.subscribe(helpStart);
	helpFade.onComplete.subscribe(helpComplete);
	
	categoriesFade.onStart.subscribe(categoriesStart);
	categoriesFade.onComplete.subscribe(categoriesComplete);
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
		}
		else {
			helpFade.animate();
			categoriesShow.animate();
		}
	}
	else
	{	
		document.cookie = "userSwap=help" + ((7===null) ? "" : ";expires="+exdate.toGMTString()); 
		if (YAHOO.env.ua.ie > 0)
		{
			show('help');
			hide('categories');		
		}
		else {
			categoriesFade.animate();
			helpShow.animate();
		}
	}	
}
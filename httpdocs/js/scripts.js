function subNav(nav){
	var sub = nav.getElementsByClassName('subnav')[0];
	sub.style.display='block';
	sub.addEventListener('mouseleave', function(){sub.removeAttribute('style');});
}
function accordionToggle(h){
	var sect = h.parentNode;
	var accordion = sect.parentNode;
	var sections = accordion.getElementsByClassName('section');
	var x = sect.className.indexOf('active');
	for (var i=0;i<sections.length;i++){
		sections[i].className = sections[i].className.replace(' active', '');
	}
	if (!(x>-1)){
		sect.className +=' active';
	}
}
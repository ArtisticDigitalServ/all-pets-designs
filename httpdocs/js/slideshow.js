var sto;
var lastCaption='';
var slideshowCont;
var speed;
function initializeSS(id, s){
	slideshowCont = document.getElementById(id);
	speed = s;
	startSlideshow();
}

function slide(){
	var slides = slideshowCont.getElementsByTagName('figure');
	if (slides.length <=1){
		return false;
	}
	var x = slides[0];
	$(x).animate(
		{opacity:0},
		2000, 
		function(){
			slideshowCont.appendChild(x);
			setCaption(slides[0].attributes['data-caption'].value);
			x.removeAttribute('style');
			x.getElementsByTagName('img')[0].removeAttribute('style');
			pan(speed);
			setActiveThumb();
			sto = setTimeout(function(){slide(speed);}, speed);
		}
	);
}

function pan(speed){
	var slides = slideshowCont.getElementsByTagName('figure');
	var s = slides[0].getElementsByTagName('img')[0];
	var x = s.offsetWidth;
	var y = s.offsetHeight;
	if (y > slides[0].offsetHeight){
		var t = y - slides[0].offsetHeight;
		$(s).animate({top: "-="+t+"px"}, speed);
	}else if (x > slides[0].offsetWidth){
		var l = x-slides[0].offsetWidth;
		$(s).animate({left: "-="+l+"px"}, speed);
	}
}
function setSlide(i){
	stopSlideshow()
	var slides = slideshowCont.getElementsByTagName('figure');
	for (var l=0;l<slides.length;l++){
		if  (slides[0].id == 'slide-'+i){
			break;
		}else{
			slideshowCont.appendChild(slides[0]);
		}
	}
	setActiveThumb();
	startSlideshow();
}
function stopSlideshow(){
	clearTimeout(sto);
}
function startSlideshow(){
	sto = setTimeout(function(){slide(speed);}, speed);
	setCurrentCaption();
}
function setCurrentCaption(){
	var slides = slideshowCont.getElementsByTagName('figure');
	setCaption(slides[0].attributes['data-caption'].value);
}
function setActiveThumb(){
	var slides = slideshowCont.getElementsByTagName('figure');
	var n = slides[0].id.replace('slide-', 'thumb');
	var acts = document.getElementsByClassName('thumbnail active');
	for (var a=0;a<acts.length;a++){
		acts[a].className = acts[a].className.replace('active','');
	}
	document.getElementById(n).className += ' active';
}
function setCaption(t){
	var capt = document.getElementById('caption');
	if (capt){
		lastCaption = capt.innerHTML;
		capt.style.left='20px';
		capt.innerHTML = '';
		capt.className='hide';
		if (t !=='' && t !== null && t !== undefined){
			capt.innerHTML = t;
			capt.className='show';
			//capt.style.left = (capt.parentNode.offsetWidth - capt.offsetWidth) / 2+"px";
		}
	}
}
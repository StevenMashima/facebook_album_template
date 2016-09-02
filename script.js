// JavaScript Document

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
document.getElementById('menu-text').style.opacity = "1";
document.getElementById('header-text').style.opacity = "0";
} else {
document.getElementById('menu-text').style.opacity = "0";
document.getElementById('header-text').style.opacity = "1";
}
if(document.body.scrollTop > 192 || document.documentElement.scrollTop > 192){
document.getElementById('header').style.position = "fixed";	
document.getElementById('header').style.height = "64px";	

}
else{
document.getElementById('header').style.position = "absolute";	
document.getElementById('header').style.height = "256px";
}
}

window.onscroll = function() {scrollFunction()};

function showPreview(photo){
	var height = photo.getAttribute("data-fullheight");
	var width = photo.getAttribute("data-fullwidth");
	if(photo.style.height == height+"px"){
		photo.style.height = "244.97px";
		photo.style.width = "19.28%";
		}else{
	photo.style.height = height+"px";
	photo.style.width = width+"px";
		}
	}
window.isScrolledIntoView = function(el, topOffset=0, btmOffset=0) {
	let rect = el.getBoundingClientRect();
	let elemTop = rect.top;
	let elemBottom = rect.bottom;

	// Only completely visible elements return true:
	let isVisible = (elemTop >= topOffset) && (elemBottom+btmOffset <= window.innerHeight);
	// Partially visible elements return true:
	//isVisible = elemTop < window.innerHeight && elemBottom >= 0;
	return isVisible;
}

window.debounce = function(func, delay=250) {
	let timer = null;
	return function(...args) {
		clearTimeout(timer);
		timer = setTimeout(() => {
			func(...args);
			timer = null;
		}, delay);
	}
}

window.throttle = function(func, delay=250) {
	let prev = 0;
	return function(...args) {
		let now = new Date().getTime(); 
		if(now - prev > delay){ 
		  prev = now;
		  func(...args);
		}
	}
}
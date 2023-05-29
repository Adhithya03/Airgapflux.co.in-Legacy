window.onload = function() {
	window.onscroll = function() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			document.querySelector(".go-to-top").classList.add("show");
		 } else {
			document.querySelector(".go-to-top").classList.remove("show");
		 }
	};
	document.querySelector(".go-to-top").addEventListener("click", function() {
	  document.body.scrollTop = 0; // For Safari
	  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	});
	
}
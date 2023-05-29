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


function fill(Value) {
	$('#search').val(Value);
	$('#display').hide();
}

$(document).ready(function() {
	var urlParams = new URLSearchParams(window.location.search);
	var search = urlParams.get('search');
	var subject = urlParams.get('subject');
	// var restype = urlParams.get('restype');
  
	$('#search').val(search || '');
	$('#subject').val(subject || '');
	// var restypeEl = document.querySelector(`input[name="restype"][value="${restype}"]`);
	// if (restypeEl) {
	//   restypeEl.checked = true;
	// }
  
	if (search) {
	  $.ajax({
		type: "POST",
		url: "ajax.php",
		data: {
		  search: search,
		  subject: subject || $('#subject').val(),
		//   restype: restype || (restypeEl ? restypeEl.value : '')
		},
		success: function(html) {
		  $("#display").html(html).show();
		}
	  });
	}
  });
  
  $(document).ready(function() {
	var delayTimer;
	var skeletonTimeout;
	
	$("#search").keyup(function() {
	  var name = $('#search').val();
	  var subject = $('#subject').val();
	//   var restype = document.querySelector('input[name="restype"]:checked').value;
	  var url = "?search=" + name + "&subject=" + subject 
	  
	  window.history.pushState({}, '', url);
	  
	  // clear the previous timer
	  clearTimeout(delayTimer);
	  
	  // show the skeleton loader
	  $("#display").html('<div class="video-block skeleton"><div class="video-title"></div><div class="video-thumb"></div><div class="video-notes"></div><hr></div>'.repeat(7));
	  
	  // set a new timer

		if (name == "") {
		  $("#display").html("");
		} else {
		  $.ajax({
			type: "POST",
			url: "ajax.php",
			data: {
			  search : name,
			  subject: subject,
			//   restype: restype
			},
			success: function(html) {
			  // hide the skeleton loader and show the loaded data
			  clearTimeout(skeletonTimeout);
			  skeletonTimeout = setTimeout(function() {
			    $("#display").html(html).show();
			  }, 500); // set a delay of 500ms before showing the loaded content
			}
		  });
		}

	});
  });

  
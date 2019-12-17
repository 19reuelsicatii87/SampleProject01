$(document).ready(function() {
  $('#Submit1').click(function() {
    $('input').each(function() {
      alert($(this).val());
    });
  });
});

$(document).ready(function() {
	  $('#Submit2').click(function() {
	    $(':input').each(function() {
	      alert($(this).val());
	    });
	  });
	});
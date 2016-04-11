
$("#centered-box .item").hide();

document.currentSlideIndex = 0;

document.onkeydown = function(e) {
    if (e.keyCode == 39) {
      var $current =  $("#centered-box .item").eq(document.currentSlideIndex);
      if (!$current.hasClass('shown-english')) {
      	$("#centered-box .item").hide();
        $current.find('.french').hide();
        $current.find('.english').show();
        $current.show();
        $current.addClass('shown-english');
      }
      else if (!$current.hasClass('shown-french')) {
      	$current.find('.english').hide();
        $current.find('.french').show();
        $current.addClass('shown-french');
	    document.currentSlideIndex++;
        if (document.currentSlideIndex == $("#centered-box .item").length) {
          document.currentSlideIndex = 0;
        }      	
      }
    }
};

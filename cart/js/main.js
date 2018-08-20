$(document).ready(function() {

    $('.section-holder').each(function(index, element) {
        $(element).attr('data-index', index);
        $('.section_controls .control').eq(index).attr('data-index', index);
    })


    $('.section_controls .control').click(function() {
        $('body,element').animate({
            scrollTop: $('.section-holder[data-index="' + $(this).attr('data-index') + '"]').offset().top + 'px'
        }, 800);

    })
    /*var current_section=0;
    $(window).scroll(function() {

    	var scrolled_section;
        for (i = 0; i < $('.section-holder').length; i++) {
            var section_top = $('.section-holder').eq(i).offset().top;
            var section_height = Number(section_top) + Number($('.section-holder').eq(i).height());
            if ($(window).scrollTop() > section_top && $(window).scrollTop() < section_height) {
            	if(i!=current_section){
            	$('body,element').animate({
		            scrollTop: $('.section-holder[data-index="'+i+'"]').offset().top + 'px'
		        }, 800);
		        current_section = i;
            	}
            }
        }
    })*/
})
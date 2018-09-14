      // Skills Progress Bar

         $(document).ready(function(){
        $('#button').click(function(){
            $('.progressBar').each(function() {
                var bar = $(this);
                var maxvalue = $(this).attr('data');
                maxvalue = 0;
                var text = $(this).children('div').data('show');
                progress1(maxvalue, bar, text);
            });
            $('.progressBar').each(function() {
                var bar = $(this);
                var maxvalue = $(this).attr('data');
                maxvalue = maxvalue.substring(3);
                var text = $(this).children('div').data('show');
                progress(maxvalue, bar, text);
            });
        });                                    
    });
    
    function progress1(percent, element, text) {
        element.find('div').animate({ width: percent+'%' }, 1).html(text +"&nbsp;"+ percent + "%&nbsp;");
    }
    function progress(percent, element, text) {
        element.find('div').animate({ width: percent+'%' }, 4000).html(text +"&nbsp;"+ percent + "%&nbsp;");
    }
    
        
 
        /* Card Flip on the Site Story*/

$(".flip").hover(function(){
  $(this).find(".card").toggleClass("flipped");
  return false;
});
        
        
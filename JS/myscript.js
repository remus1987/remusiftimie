
       <!-- Skills Progress Bar -->
    
        // Skills Progress Bar
        $('.progress-bar').each(function () {
            
            var $bar = $(this);
            var progress = setInterval(function () {

                var currWidth = parseInt($bar.attr('aria-valuenow'));
                var maxWidth = parseInt($bar.attr('aria-valuemax'));

                //update the progress
                $bar.width(currWidth + '%');
                $bar.attr('aria-valuenow', currWidth + 10);

                //clear timer when max is reach
                if (currWidth >= maxWidth) {
                    clearInterval(progress);
                }

            }, 500);       
});
    
        
        <!-- Flip Cards on the Site-Story -->
 
        /* card flip */
$(".flip").hover(function(){
  $(this).find(".card").toggleClass("flipped");
  return false;
});
        
        
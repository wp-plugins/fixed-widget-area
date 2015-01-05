jQuery(document).ready(function(){
       
    jQuery(document).scroll(function(){
        
        var wid_h=parseInt(jQuery(".widget-liquid-right").height())+parseInt(50);
        var w_h=jQuery(window).height();
        if(w_h>wid_h)
        {
             jQuery(".widget-liquid-right").css({
                    'position': 'fixed',
                    'left': '48%',
                    'width': '50%'
                });
        }
        else
        {
            jQuery(".widget-liquid-right").removeAttr("style")
        }
                
        
    });
});
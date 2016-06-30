$(document).ready(function(){
    $('#fullAbout').click(function(){
        $('.abCountry').removeClass('about_details').addClass('about_details_full');
        $('.abs_country').css('width','720px');
        $(".jq_class_country").css('display' , 'none');
        
        $('.about_img_country').each(function(){
            $('.abCountry').prepend($(this).html());
            $('.abCountry img').css('margin','5px');
        })
        
        $('#fullAbout').css('display' , 'none');
    })

    $('#fullKitchen').click(function(){
        $('.abKitchen').removeClass('about_details').addClass('about_details_full');
        $('.abs_kitchen').css('width','720px');
        $(".jq_class_kitchen").css('display' , 'none');
        
        $('.about_img_kitchen').each(function(){
            $('.abKitchen').prepend($(this).html());
            $('.abKitchen img').css('margin','5px');
        })
        
        $('#fullKitchen').css('display' , 'none');
    })

    $('#fullExcursion').click(function(){
        $('.abExcursion').removeClass('about_details').addClass('about_details_full');
        $('.abs_excursion').css('width','720px');
        $(".jq_class_excursion").css('display' , 'none');
        
        $('.about_img_excursion').each(function(){
            $('.abExcursion').prepend($(this).html());
            $('.abExcursion img').css('margin','5px');
        })
        
        $('#fullExcursion').css('display' , 'none');
    })

}) // EOF .document
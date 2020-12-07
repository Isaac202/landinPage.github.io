$(()=>{
   return $('nav.menu-mobile').click(()=>{

    /*var listaMenu = $('.ul-mobile')
       return ((listaMenu.is(':hidden') == true) ? listaMenu.fadeIn(): listaMenu.fadeOut()) */

           //Geito mais facil de aplicar o menu mobile
        var listaMenu = $('.ul-mobile');
        if(listaMenu.is(':hidden') == true){
            var icon = $('.botton-mobile i')
            icon.removeClass('fa fa-bars')
            icon.addClass('fa fa-times')
            listaMenu.slideToggle() 

        }
        else{
            var icon = $('.botton-mobile i')
            icon.removeClass('fa fa-bars')
            icon.addClass('fa fa-bars')
            listaMenu.slideToggle() 
        }
        
        
   })
})



$(document).ready(function(){
    $(".link .view").click(function(){
      $(".hide").stop().slideUp("slow");
      $( this ).parents( 'li' ).find( '.hide' ).stop().slideToggle( 'slow' );

    });
});




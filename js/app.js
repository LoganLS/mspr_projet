$(document).ready(function(){ 
    $('#ajouter_evenement').on('click',function(){
       location.href="event_add.php";
    });
    
    $(".bloc_images_accueil img").hover(function(){
            $(this).next().css("visibility","visible");
        }, function(){
            $(this).next().css("visibility","hidden");
        } 
    );
    
    $(".bloc_images_accueil p").hover(function(){
            $(this).css('cursor','default');
            $(this).css("visibility","visible");
        }, function(){
            $(this).css("visibility","hidden");
        } 
    );
});
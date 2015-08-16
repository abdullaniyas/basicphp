/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $(".success-message").click(function(){
        $(this).hide();
    });
    
    $(".insert-tab>p").click(function(){
        $(".insert-container").show();
    });
    $(".insertp").click(function(){
        $(".insert-container").hide();
    });
    
    /* Tabs */
    $('.nav-items').on('click',function(){
        
        $('.nav-items').removeClass('selected-menu');
        $(this).addClass('selected-menu');
        
        var panel_to_show = $( this).attr('data-name');
        $('.panels').hide();
       $('.'+panel_to_show).show();
    });
    
}); 


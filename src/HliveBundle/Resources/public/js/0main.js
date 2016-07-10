/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    
  var  hauteur= $('#bloc-notre-histoire').height();
   $('#bloc-pub-gauche').css({ 
        'height' : hauteur
    });
    
     var  largeur_bloc_subtitle= $('.bloc-subtitle').width();
    var  largeur_subtitle= $('.subtitle').width();
    var largeur_subtitle_border = largeur_bloc_subtitle - largeur_subtitle;
     $('.bloc-subtitle-border').css({ 
        'width' : largeur_subtitle_border
    });
    
    
     
    $(document).on('click','.list-group-item', function(){
       
        iditem = $(this).attr('num_item');
        hauteur= $('#bloc-notre-histoire').height();
         console.log(hauteur);
        //alert(iditem);
        //alert('test test');
       $('.list-group-item').css({ 
           'background-color' : '#ffffff',
            color : '#555'
        });
       $(this).css({ 
           'background-color' : '#0055a4',
            color : '#ffffff'
        });
        
        if (iditem == 4){
            $('#bloc-notre-histoire').fadeIn();
            $('#bloc-notre-organisation').fadeOut();
            $('#bloc-que-faisons-nous').fadeOut();
            $('#bloc-qui-sommes-nous').fadeOut();
        }
        else if (iditem == 3){
            $('#bloc-notre-histoire').fadeOut();
            $('#bloc-notre-organisation').fadeIn();
            $('#bloc-que-faisons-nous').fadeOut();
            $('#bloc-qui-sommes-nous').fadeOut();
        }
        else if (iditem == 2){
            $('#bloc-notre-histoire').fadeOut();
            $('#bloc-notre-organisation').fadeOut();
            $('#bloc-que-faisons-nous').fadeIn();
            $('#bloc-qui-sommes-nous').fadeOut();
        }
        else{
            $('#bloc-notre-histoire').fadeOut();
            $('#bloc-notre-organisation').fadeOut();
            $('#bloc-que-faisons-nous').fadeOut();
            $('#bloc-qui-sommes-nous').fadeIn();
        }
    });
    
    $(document).on('click','.navbar-nav', function(){
        
       
     });
    
});
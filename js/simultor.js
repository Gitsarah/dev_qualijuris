$(function(){
    var tabdep = ['58','18','36','71','21','52','31','09','81','82','75','77','91','93','94','89'];
    var tab58 = ['58','18','36'];
    var tab71 = ['71','21','52'];
    var tab31 = ['31','09','81','82'];
    var tab89 = ['75','77','91','93','94','89'];
    var codePostal = $('#codepostal').val();
    
    
    function valDep(){
      var departement = codePostal.slice(0,2); 
        return departement;
    }


    //recupe valeur d'un select
     $('select').on('change', function(){
        var valeur = this.options[this.selectedIndex].value;
     });

     //function recup valeur radio urgent
     function urgence(){
        var radioValue = $( "input:checked" ).val();
        var coutUrgence;

       if(radioValue == 'oui')
       coutUrgence = 100;

       if(radioValue == 'non')
       coutUrgence = 0;

       return coutUrgence;
     }


     function timeConstat(){
        var nbMinute = $('#duree').val();
      var coutHoraire = ((nbMinute - 60)/30)*75; // coût de la durée du constat
      return coutHoraire;
     }
 
     function coutLieu(){
        var valHorsDep ='';
        var found = tabdep.find(function(e){
            return e === valDep() ;
        });
         
        if(found === valDep()) {
            valHorsDep = 0;
        }else {
            valHorsDep = 100;
        }
        return valHorsDep;
    }

    function montantHt(){
        var constatStandard = 250;
        var coutGobal = constatStandard + urgence() + timeConstat() + coutLieu();
        return coutGobal;
    }

    function ttc(){
        var tva = 20/100;
        return tva*montantHt() + montantHt();
    }

        // recup tel
    function tel(){
        var valTel;
        var found58 = tab58.find(function(e){
            return e === valDep() ;
        });
        var found71 = tab71.find(function(e){
            return e === valDep() ;
        });
        var found31 = tab31.find(function(e){
            return e === valDep() ;
        });
        var found89 = tab89.find(function(e){
            return e === valDep() ;
        });
        

        if((found58 === valDep()) || (found71 !== valDep()) || (found31 !== valDep()) || (found89 !== valDep()) )
            valTel = "03 86 59 73 40" ;
        
        if(found71 === valDep())
            valTel = "03 85 73 00 60" ;
        
        if(found31 === valDep())
            valTel = "05 62 71 92 71" ;
        
        if(found89 === valDep())
            valTel = "03 86 72 03 75" ;
        
        return valTel;
    }

    
    function result(){
        var $newdiv1 = '<div id="result" class="jumbotron w-responsive mx-auto text-center blue-grey lighten-5 mt-4 "></div>';
       $("#simulateur").append($newdiv1);

        $('#result').html(function() {
           return '<p class="font-weight-bold red-text">Le montant est de '+ ttc() +'  TTC (soit '+ montantHt() +' € HT)</p><button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#basicExampleModal">Me rappeler</button>';
        });
      
    }
    
    function infoCall(){
        var $divCall = '<div id="appeler" class="text-center"></div>';
        var $newh4 = '<h4 class="h4">Appelez-nous</h4>';
        var $newP = '<p></p>';
        var $message = 'Nous sommes disponibles du lundi au vendredi de 9h à 12h et de 14h à 17h';
        var $linkPhone = '<p><a class="btn btn-rounded pr-0 black-text" role="button" href="tel:+33386597340"></a></p>';
        var $newspan = '<span  class="py-3 px-5 ml-3 btn-flat btn-rounded blue-grey darken-4 white-text">service gratuit</span>';
        
        $('#simulateur').after($divCall);
        $("#appeler").prepend($newh4);
        $("#appeler .h4").after($newP);
        $('#appeler p').text($message);
        $("#appeler p").after($linkPhone);
        $('#appeler a').text(tel()).append($newspan);
        
    }


    
  $('button').on('click', function(e){
      e.preventDefault();
       
      $('div').remove('#result').eq(1);
      $('div').remove('#appeler').eq(1);    
      result();
      infoCall();
  });
    

    

});
$(function(){

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
 	var codePostal = $('#codepostal').val();
 	var departement = codePostal.slice(0,2);
 	var valHorsDep ;
 
	var tabdep = ['58','18','36','71','21','52','31','09','81','82','75','77','91','93','94','89'];
	var egale =  tabdep.find(dep);
  
 	function dep(value){
 		return value === departement ;
 	}
 
 	if(egale === departement) {
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

  function result(){
    var $newdiv1 = '<div id="result" class="jumbotron w-responsive mx-auto text-center blue-grey lighten-5 mt-4 "></div>';
   $("#simulateur").append($newdiv1);

    $('#result').html(function() {
       return '<p class="font-weight-bold red-text">Le montant est de '+ ttc() +'  TTC (soit '+ montantHt() +' € HT)</p><a href="#" class="btn btn-danger btn-rounded">Me rappeler</a';
    });
      
  }

  $('button').on('click', function(e){
      e.preventDefault();
      $('div').remove('#result').eq(1);
      return result();
      
  });

});
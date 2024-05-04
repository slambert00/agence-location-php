Document.addEventListener("load",abonnement);


function abonnement(){
var boutonInsertVoiture=document.getElementById("inserVoiture");
boutonInsertVoiture.addEventListener("click",AfficherMasquer);

var boutonSupprimeVoiture=document.getElementById("insertVoiture");
boutonSupprimeVoiture.addEventListener("click",AfficherMasquer);
}

function AfficherMasquer(monId){
divInfo = document.getElementById(monId);
 if (divInfo.style.display == 'none')
divInfo.style.display = 'block';
else
divInfo.style.display = 'none';
}
/*
function AfficherMasquerSuppression(){
divInfo = document.getElementById("aMasquerSupprimeVoiture");
 if (divInfo.style.display == 'none')
    divInfo.style.display = 'block';
else
    divInfo.style.display = 'none';
}
*/
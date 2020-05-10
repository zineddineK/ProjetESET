var temps = 0;// variable qui incremente à chaque dix seconde dans la fonction setTimeout
var statut = false;
//false : arreter , true = commencer


function commencer(){
    statut = true;
    compter();

    }

function arreter(){
    statut = false;
}
function reinitialiser(){
    statut = false;
    temps = 0;
    return document.getElementById('compteur').value=  "00 : 00";
}
function compter(){
  if(statut == true){
      //setTimeout faire appel a une fonction chaque milisecond que vous avez specifier dans sa deuxieme argument
      setTimeout(function () {
              temps +=1;
              var sec = temps;
              var min = Math.floor(temps/60);

              if(sec >= 60) {
                  sec = sec % 60;
              }

              if(min < 10) {
                  min = "0" + min;
              }

              if(sec < 10) {
                  sec = "0" + sec;
              }

              document.getElementById('compteur').value =  min+" : " + sec;
              compter();}

          ,1000)
  }
}

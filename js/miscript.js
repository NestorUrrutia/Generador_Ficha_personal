function cambiar() {
    var elemento= document.getElementById("dojo")
    var elemento2= document.getElementById("horario_VM")
    if(elemento.value=="vm")
        elemento2.style.display="block"
    if(elemento.value=="uno")
        elemento2.style.display="none"
 }


 function cambiar_dto() {
    var elemento_dto= document.getElementById("departamento")
    var elemento2= document.getElementById("div_dto")

    elemento2.style.display="block"
 }

 function cambiar_csa(){
    var elemento_csa= document.getElementById("casa")
    var elemento2= document.getElementById("div_dto")

    elemento2.style.display="none"
 }





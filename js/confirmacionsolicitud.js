function confirmacion(e){

    if (confirm("¿Esta seguro de que desea hacer esta accion?")) {
        return true;
    } else {
e.preventDefault();

    }
}
let linkDelete = document.querySelectorAll(".table__item__link");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmacion);
}
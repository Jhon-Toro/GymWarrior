var carrito = document.getElementById("carrito");
var elementos0 = document.getElementById("lista-0");
var elementos1 = document.getElementById("lista-1");
var elementos2 = document.getElementById("lista-2");
var lista = document.querySelector('#lista-carrito tbody');
var vaciarCarrito = document.getElementById("vaciar-carrito");

function comprarElemento(e){
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')){
        var elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento){
    var infoElemento = {
        imagen: elemento.querySelector("img").src,
        titulo: elemento.querySelector("h3").textContent,
        precio: elemento.querySelector(".precio").textContent,
        id: elemento.querySelector('a').getAttribute('dataId')
    }
    insertarCarrito(infoElemento);
}

function insertarCarrito(elemento){
    var row = document.createElement("tr");
    row.innerHTML = `
    <td>
        <img src="${elemento.imagen}" width="100" />
    </td>
    <td style="color: white;">
        ${elemento.titulo}
    </td>
    <td>
        ${elemento.precio}
    </td>
    <td>
        <a href="#" class="borrar" data-id="${elemento.id}">X </a>
    </td>
    `

    lista.appendChild(row);
}

function eliminarElemento(e){
    e.preventDefault();
    let elemento,
        elementoId;
    if (e.target.classList.contains("borrar")) {
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento,querySelector("a").getAttribute('data-id');
    }
}

function vaciarCarrito(){
    while(lista.firstChild){
        lista.removeChild(lista.firstChild)
    }
    return false;
}

function load(){
    elementos0.addEventListener("click", comprarElemento);
    elementos1.addEventListener("click", comprarElemento);
    elementos2.addEventListener("click", comprarElemento);
    carrito.addEventListener("click", eliminarElemento);
    vaciarCarrito.addEventListener("click", vaciarCarrito);
}

load();


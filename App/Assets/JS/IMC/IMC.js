
const body = document.querySelector("body"),
    sidebar= body.querySelector("nav"),
    toggle = body.querySelector(".toggle"),
    
    modeswitch = body.querySelector(".toggle-switch"),
    titul = body.querySelector("titu"),
    infoT = body.querySelector("partr"),
    infoD = body.querySelector("tdpar"),

    BJ = body.querySelector("Bj"),
    Peson = body.querySelector("pesoN"),
    Pso = body.querySelector("Pso"),
    Obes = body.querySelector("Obes")

    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})



modeswitch.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        modeText.innerText = "Modo blanco"
    } else {
        modeText.innerText = "Modo oscuro"
    }
})


//Calculadora 


function calcularIMC() {
    var peso = document.getElementById('weight').value;
    var altura = document.getElementById('height').value;

    if (peso !== '' && altura !== '') {
        
        var imc = peso / (altura * altura);

        var result = document.getElementById('result');
        result.innerHTML = 'Tu IMC es ' + imc.toFixed(2);

        var parrafos = document.getElementById('parrafos');
        parrafos.style.display = 'block';

        var bajoPeso = document.getElementById('bajoPeso');
        var pesoNormal = document.getElementById('pesoNormal');
        var pesoSobrepeso = document.getElementById('pesoSobrepeso');
        var obesidad = document.getElementById('Obesidad');

//crear estas variables sobre los pesos más arriba, no olvidarse
        if (imc < 18.5 ) {
            result.innerHTML += ' - Bajo peso';

            bajoPeso.style.display = 'block';
            pesoSobrepeso.style.display = 'none';
            obesidad.style.display = 'none';
            pesoNormal.style.display = 'none';

        }else if (imc >= 18.5 && imc <= 24.9) {
            result.innerHTML += ' - Peso normal o saludable';
            bajoPeso.style.display = 'none';
            pesoNormal.style.display = 'block';
            pesoSobrepeso.style.display = 'none';
            obesidad.style.display = 'none';
        }else if (imc >= 25.0 && imc <= 29.9) {
            result.innerHTML += ' - Sobrepeso';
            bajoPeso.style.display = 'none';
            pesoSobrepeso.style.display = 'block';
            obesidad.style.display = 'none';
            pesoNormal.style.display = 'none';
        }else {
            result.innerHTML += ' - Obesidad';
            bajoPeso.style.display = 'none';
            pesoSobrepeso.style.display = 'none';
            obesidad.style.display = 'block';
            pesoNormal.style.display = 'none';
        }
    }





}

const body = document.querySelector("body"),
    sidebar= body.querySelector("nav"),
    toggle = body.querySelector(".toggle"),
    
    modeswitch = body.querySelector(".toggle-switch"),
    titul = body.querySelector("titu"),
    infoT = body.querySelector("partr"),
    infoD = body.querySelector("tdpar"),

    form = body.querySelector("oeform"),
    explica = body.querySelector("explica"),
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


function calcularCalo(event) {
    event.preventDefault(); 

    const edad = document.getElementById('años').value;
    const genero = document.getElementById('genero').value;
    const peso = document.getElementById('peso').value;
    const altura = document.getElementById('altura').value;
    const actividad = document.getElementById('actividad').value;
    const objetivo = document.getElementById('objetivo').value; 

    const result = document.getElementById('resultado');

    if (peso !== '' && altura !== '') {

        let TMB;
                //tmb es Tasa Metábolica Basal

        if (genero == 'macho') {
                    //fórmula tmb para hombres

            TMB = 10 * peso + 6.25 * altura - 5 * edad + 5;
        } else if (genero == 'hembra') {
                    //fórmula tmb para mujeres

            TMB = 10 * peso + 6.25 * altura - 5 * edad - 161;
        }

        let calorias;
        switch (actividad) {
            case 'sedentario':
                calorias = TMB * 1.2;
                break;
            case 'ligero':
                calorias = TMB * 1.375;
                break;
            case 'moderado':
                calorias = TMB * 1.55;
                break;
            case 'activo':
                calorias = TMB * 1.725;
                break;
            case 'muy_activo':
                calorias = TMB * 1.9;
                break;
            default:
                calorias = TMB * 1.2;
                break;
        }

        if(objetivo ==='ganar'){
            calorias += calorias * 0.2; //Ganar peso en un 20%
        }
        else if (objetivo === 'perder'){
            calorias -= calorias * 0.1; // reducir peso un 10%
        }
        result.innerText = 'Las calorías necesarias para ti son: ' + calorias.toFixed(2);
    }
}







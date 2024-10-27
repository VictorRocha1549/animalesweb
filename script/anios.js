function Mostrar(){
    var anio1 = parseInt(document.getElementById("anoInicio").value);
    var anio2 = parseInt(document.getElementById("anoFinal").value);
    var divAnios = document.getElementById("divAnios");
    divAnios.innerHTML = ""; // Limpiar contenido previo

    for(let i = anio1; i <= anio2; i++){
        if(i % 4 === 0 && i % 100 !== 0) {
            divAnios.innerHTML += '<p class="añobisiesto">' + i + ' es bisiesto</p>';
        } else {
            divAnios.innerHTML += '<p>' + i + '</p>';
        }
    }
}

function Faltantes(){
    const fechaNacimiento = new Date(document.getElementById("fechaNacimiento").value);
    const hoy = new Date();
    let proximoCumple = new Date(hoy.getFullYear(), fechaNacimiento.getMonth(), fechaNacimiento.getDate());
    
    if (proximoCumple < hoy) {
        proximoCumple.setFullYear(hoy.getFullYear() + 1);
    }

    const diferencia = Math.ceil((proximoCumple - hoy) / (1000 * 60 * 60 * 24));
    document.getElementById("div_dias").innerHTML = '<p class="diasFaltantes">' + diferencia + ' días para el próximo cumpleaños</p>';
}

function Transcurridos(){
    const fechaNacimiento = new Date(document.getElementById("fechaNacimiento").value);
    const hoy = new Date();

    const transcurridos = Math.floor((hoy - fechaNacimiento) / (1000 * 60 * 60 * 24));
    document.getElementById("div_dias").innerHTML = '<p class="diasTranscurridos">' + transcurridos + ' días que llevas de vida</p>';
}


//console.log("hello word")

function sumar(){
    //declarar variables
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
    var result= parseFloat(valor1)+parseFloat(valor2);

    //colocar un valor interno dentro de p
    document.getElementById("resultado1").innerText = "El resultado de la suma es " + result;
    document.getElementById("resultado3").innerText = "Esperando valores para multiplicar... ";
    document.getElementById("resultado4").innerText = "Esperando valores para dividir... " ;
    document.getElementById("resultado2").innerText = "Esperando valores para restar... " ;
    }

function restar(){
    //declarar variables
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
    var result= parseFloat(valor1)-parseFloat(valor2);

    //colocar un valor interno dentro de p
    document.getElementById("resultado2").innerText = "El resultado de la resta es " + result;
    document.getElementById("resultado1").innerText = "Esperando valores para sumar... ";
    document.getElementById("resultado3").innerText = "Esperando valores para multiplicar... ";
    document.getElementById("resultado4").innerText = "Esperando valores para dividir... " ;
    }
    
function multiplicar(){
    //declarar variables
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
    var result= parseFloat(valor1)*parseFloat(valor2);

    //colocar un valor interno dentro de p
    document.getElementById("resultado3").innerText = "El resultado de la multiplicacion es " + result;
    document.getElementById("resultado4").innerText = "Esperando valores para dividir... " ;
    document.getElementById("resultado2").innerText = "Esperando valores para restar... " ;
    document.getElementById("resultado1").innerText = "Esperando valores para sumar... ";
    }

function dividir(){
    //declarar variables
    var valor1= document.getElementById("valor1").value;
    var valor2= document.getElementById("valor2").value;
    var result= parseFloat(valor1)/parseFloat(valor2);

    //colocar un valor interno dentro de p
    document.getElementById("resultado4").innerText = "El resultado de la division es " + result;
    document.getElementById("resultado2").innerText = "Esperando valores para restar... " ;
    document.getElementById("resultado1").innerText = "Esperando valores para sumar... ";
    document.getElementById("resultado3").innerText = "Esperando valores para multiplicar... ";
    }
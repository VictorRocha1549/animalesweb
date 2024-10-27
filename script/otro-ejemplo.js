function ejecutar(){
    /*
    var  variable
    conts constante
    let es para que solo sea accesible dentro de un bloque, ya sea dentro de un if, un for o por el estilo
    */
    var valor = document.getElementById("valor").value;
    var div_elementos = document.getElementById("elementos");
    div_elementos.innerHTML ='<p>esperando valores</p>';
    for(let i = 1; i <= valor; i++ ){
        div_elementos.innerHTML +='<p>' + i + '</p>';
    }

}
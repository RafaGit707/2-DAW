let vectorNumeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

let cadenaToString = vectorNumeros.toString();
let cadenaJoin = vectorNumeros.join();

if (cadenaToString === cadenaJoin) {
    document.write("Ambos métodos generan el mismo resultado:", cadenaToString + "<br>");
} else {
    document.write("Los dos métodos generan resultados diferentes." + "<br>");
}
document.write("Join:" + cadenaJoin + "<br>"  + "toString:" + cadenaToString);
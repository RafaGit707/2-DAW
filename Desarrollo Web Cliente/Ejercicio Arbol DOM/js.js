document.addEventListener("DOMContentLoaded", () => {
    const output = document.getElementById("output");
    const bodyChildren = document.body.childNodes;

    bodyChildren.forEach((node) => {
        let nodeType;
        switch (node.nodeType) {
            case 1:
                nodeType = "Elemento";
                break;
            case 3:
                nodeType = "Texto";
                break;
            case 8:
                nodeType = "Comentario";
                break;
            default:
                nodeType = "Otro";
        }
        const text = `Nombre: ${node.nodeName}, Tipo: ${nodeType}`;
        output.innerHTML += `<p>${text}</p>`;
    });
});

document.addEventListener("DOMContentLoaded", () => {
  // Botón para contar elementos <p>
  document.getElementById("count-p").addEventListener("click", () => {
    const paragraphs = document.getElementsByTagName("p");
    document.getElementById("result-p").textContent = `Número de elementos <p>: ${paragraphs.length}`;
  });

  // Contar elementos de etiqueta personalizada
  document.getElementById("count-custom").addEventListener("click", () => {
    const tag = document.getElementById("tag-input").value.trim();
    if (tag) {
      const elements = document.getElementsByTagName(tag);
      document.getElementById("result-custom").textContent = `Número de elementos encontrados: ${elements.length}`;
    } else {
      document.getElementById("result-custom").textContent = "Por favor, ingresa una etiqueta válida.";
    }
  });

  // Aplicar estilos a los párrafos
  document.getElementById("apply-styles").addEventListener("click", () => {
    const textColor = document.getElementById("text-color").value;
    const bgColor = document.getElementById("bg-color").value;

    const paragraphs = document.getElementsByTagName("p");
    for (let p of paragraphs) {
      p.style.color = textColor;
      p.style.backgroundColor = bgColor;
    }
  });
});
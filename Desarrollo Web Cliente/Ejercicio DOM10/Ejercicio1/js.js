document.addEventListener("DOMContentLoaded", function() {
  
    function recorrerTag() {
      const parrafos = document.querySelectorAll('#elementosTag p');
      parrafos.forEach((p, index) => {
          p.textContent = `Parrafo ${index + 1}`;
      });
    }
    
    document.getElementById('actualizar').addEventListener('click', recorrerTag);

});
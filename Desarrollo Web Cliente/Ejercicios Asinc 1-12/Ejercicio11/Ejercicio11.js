const visited = [];

function walk() {
    setTimeout(() => {
        visited.push('London');
        setTimeout(() => {
            visited.push('Milan');
            setTimeout(() => {
                visited.push('Madrid');
                setTimeout(() => {
                    visited.push('Barcelona');
                    console.log(visited.toString());
                }, 1000);
            }, 1000);
        }, 1000);
    }, 1000);
}

walk();

// Salida esperada
// (Después de 1 segundo) -> visited = ['London']
// (Después de 2 segundos) -> visited = ['London', 'Milan']
// (Después de 3 segundos) -> visited = ['London', 'Milan', 'Madrid']
// (Después de 4 segundos) -> visited = ['London', 'Milan', 'Madrid', 'Barcelona']

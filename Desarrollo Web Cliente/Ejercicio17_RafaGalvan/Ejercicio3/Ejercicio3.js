let vector = [1, 2, 3, 2, 4, 5, 2, 6, 2];

for (let i = 0; i < vector.length; i++) {
    if (vector[i] === 2) {
        vector.splice(i, 1, 1, 1);
        i++;
    }
}

document.write("Vector modificado:", vector);

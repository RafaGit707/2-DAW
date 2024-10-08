from flask import Flask, render_template, jsonify

app = Flask(__name__)

@app.route('/home')
def home():
    lista_strings = ["Hola mundo", "Flask es genial", "Python es poderoso", "Bienvenidos a Flask"]
    return render_template ('index.html', strings=lista_strings)

@app.route('/json')
def dame_json():
    lista_json = ["Opcion 1", "Opcion 2", "Opcion 3", "Opcion 4"]
    return render_template ('index.html', strings=lista_json)

if __name__ == '__main__':
    app.run(debug=True)
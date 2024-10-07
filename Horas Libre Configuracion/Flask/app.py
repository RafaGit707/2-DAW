from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def home():
    lista_strings = ["Hola mundo", "Flask es genial", "Python es poderoso", "Bienvenidos a Flask"]
    return render_template ('index.html', strings=lista_strings)

if __name__ == '__main__':
    app.run(debug=True)
horario = {
    'lunes' : [
        {'inicio': 8, 'final': 9, 'asignatura': 'Fisica'},
        {'inicio': 9, 'final': 10, 'asignatura': 'Matematicas', 'profe': 'Pepe'},
        {'inicio': 10, 'final': 11, 'recreo': True},
        {'inicio': 14, 'final': 15, 'comida': 'pizza', 'bebida': 'cafe'},
        {'inicio': 17, 'final': 19, 'clase': 'golf'},
        {'inicio': 20, 'final': 21, 'bebida': 'cocacola'},
        {'inicio': 22, 'final': 23, 'tareas': ['limpiar','planchar']},
    ],
    'martes' : [
        {'inicio': 8, 'final': 9, 'asignatura': 'Python'},
        {'inicio': 9, 'final': 10, 'asignatura': 'PHP', 'profe': 'Luis'},
        {'inicio': 10, 'final': 11, 'recreo': True},
    ],
}

for dia, actividades in horario.items():
    salida = []
    for actividad in actividades:

        if 'inicio' in actividad and 'final' in actividad:
            salida.append(f"El dia {dia} de {actividad['inicio']} a {horario}")

        if 'asignatura' in actividad:
            salida.append(f"Tenemos la asignatura {actividad['asignatura']}")

        if 'recreo' in actividad:
            salida.append("Tenemos recreo")
            
        if 'comida' in actividad:
            salida.append(f"Hora de comer {actividad['comida']} con {actividad.get('bebida', 'agua')}")
        
        if 'clase' in actividad:
            salida.append(f"Clase de {actividad['clase']}")
        
        if 'bebida' in actividad and 'comida' not in actividad:
            salida.append(f"Hora de beber {actividad['bebida']}")
        
        if 'tareas' in actividad:
            tareas = ", ".join(actividad['tareas'])
            salida.append(f"Tareas pendientes: {tareas}")

print(f"Horario para {dia}:")
print("\n".join(salida))
print()
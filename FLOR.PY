# Función modificada para agregar un tallo verde y una hoja
def draw_flower_with_stem(petals=10, radius=5, petal_width=2, petal_color='yellow', stem_color='green'):
    theta = np.linspace(0, 2 * np.pi, 100)

    # Configuración de la figura
    fig, ax = plt.subplots()

    # Dibujar cada pétalo
    for i in range(petals):
        angle = i * (2 * np.pi / petals)
        x = radius * np.cos(theta) + petal_width * np.cos(angle)
        y = radius * np.sin(theta) + petal_width * np.sin(angle)
        ax.fill(x, y, petal_color, edgecolor='orange')

    # Dibujar el centro de la flor
    circle = plt.Circle((0, 0), petal_width/2, color='orange', zorder=10)
    ax.add_artist(circle)

    # Dibujar el tallo de la flor
    stem_x = [0, 0]
    stem_y = [-radius - petal_width, -radius - petal_width - 10]
    ax.plot(stem_x, stem_y, color=stem_color, lw=5)

    # Dibujar una hoja
    leaf_theta = np.linspace(0, np.pi, 100)
    leaf_x = 2 * np.cos(leaf_theta) - 1
    leaf_y = 1 * np.sin(leaf_theta) - radius - petal_width - 5
    ax.fill(leaf_x, leaf_y, stem_color)

    # Personalizar los ejes
    ax.set_aspect('equal')
    ax.set_xlim([-radius - petal_width, radius + petal_width])
    ax.set_ylim([-radius - petal_width - 12, radius + petal_width])
    ax.axis('off')

    # Mostrar la flor con su tallo y hoja
    plt.show()

# Dibujar la flor amarilla con su palito verde y una hojita
draw_flower_with_stem()

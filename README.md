
# SimpleEmojis: Selector de Emojis con Categorías y Búsqueda

Este proyecto es un selector dinámico de emojis construido con **HTML**, **CSS**, **JavaScript**, y **Bootstrap 4**. Permite a los usuarios seleccionar emojis de diversas categorías y admite la búsqueda de emojis en **inglés** y **español**. El selector incluye categorías como **Caritas y Emociones**, **Personas y Cuerpo**, **Animales y Naturaleza**, **Comida y Bebida**, y **Actividades**.

## Características

- **Selector de Emojis basado en Categorías**: Los emojis están organizados en categorías como Caritas, Personas, Animales, Comida, etc.
- **Funcionalidad de Búsqueda**: Los usuarios pueden buscar emojis por nombre en inglés y español.
- **Carga Dinámica**: Los emojis se cargan dinámicamente al seleccionar la categoría.
- **Integración Fácil**: El selector de emojis se puede integrar fácilmente en cualquier campo de entrada de texto.
- **Bootstrap 4**: El selector utiliza Bootstrap para un diseño moderno y responsivo.

## Vista Previa

![Vista previa del Selector de Emojis](https://jaimefranko.com/wp-content/uploads/2024/09/simpleemojis.png)

## Instalación

1. Clona el repositorio en tu máquina local:
   ```bash
   git clone https://github.com/jaimefranko/simpleemojis.git
   ```

2. Navega al directorio del proyecto:
   ```bash
   cd simpleemojis
   ```

3. Abre el archivo `index.php` en tu navegador o configura un servidor local para ver el proyecto.

## Uso

Para integrar este selector de emojis en tu propio proyecto:

1. Incluye los archivos CSS y JS necesarios:
    ```html
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    ```

2. Añade el siguiente HTML para incluir el selector de emojis en tu proyecto:
    ```html
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Selector de Emojis</h3>
                <input type="text" id="emoji-input" class="form-control" placeholder="Escribe aquí...">
                <button class="btn btn-primary mt-2" id="emoji-btn">Seleccionar Emoji</button>

                <div class="emoji-picker mt-2" id="emoji-picker">
                    <input type="text" id="emoji-search" class="form-control mb-2" placeholder="Buscar emojis...">
                    <div class="emoji-categories">
                        <button class="category-btn active" data-category="smileys">😊 Caritas</button>
                        <button class="category-btn" data-category="people">👨‍👩‍👧‍👦 Personas</button>
                        <button class="category-btn" data-category="nature">🌳 Naturaleza</button>
                        <button class="category-btn" data-category="food">🍔 Comida</button>
                        <button class="category-btn" data-category="activities">⚽ Actividades</button>
                    </div>
                    <div class="emoji-list">
                        <!-- Aquí se llenarán los emojis dinámicamente -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    ```

3. Personaliza las categorías y la lista de emojis editando la configuración en el archivo **JavaScript** (`javascript-file.js`):
    ```javascript
    const allEmojis = {
        smileys: { title: "Caritas y Emociones", emojis: [ { emoji: "😀", name_en: "grinning face", name_es: "cara sonriente" }, /* ... */ ] },
        people: { title: "Personas y Cuerpo", emojis: [ /* ... */ ] },
        /* Más categorías */
    };
    ```

4. Los emojis se cargarán automáticamente cuando el usuario seleccione una categoría o realice una búsqueda.

## Personalización

- Para **añadir más emojis** o **categorías**, actualiza el objeto `allEmojis` en el archivo JavaScript.
- El diseño del selector puede modificarse editando el archivo `style.css`, donde puedes ajustar el diseño de los botones de emojis, la selección de categorías, etc.

## Contribuciones

Si deseas contribuir, siéntete libre de hacer un fork de este repositorio y enviar tus pull requests. ¡Toda ayuda es bienvenida!

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

## Contacto

Para cualquier pregunta o comentario, puedes contactarme en [developer@jaimefranko.com](mailto:developer@jaimefranko.com).

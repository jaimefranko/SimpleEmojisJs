
# Simple Emojis JS: Selector de Emojis con Categorías

**Simple Emojis JS** es un selector de emojis construido con **HTML**, **CSS**, **JavaScript**, y **Bootstrap 4**. Permite a los usuarios seleccionar emojis de diversas categorías y admite la búsqueda en **inglés** y **español**. Este selector es fácil de integrar y altamente personalizable.

[![Demo en vivo](https://img.shields.io/badge/Demo-Live-brightgreen.svg)](https://jaimefranko.com/simpleemojijs/)

![Vista previa del Selector de Emojis](https://jaimefranko.com/wp-content/uploads/2024/09/simpleemojis.png)


## Características

- Selector de emojis basado en categorías como **Caritas**, **Personas**, **Animales**, **Comida**, y más.
- Búsqueda en inglés y español.
- Totalmente personalizable y fácil de integrar.
- Compatible con **Bootstrap 4** para un diseño moderno y responsivo.

## Estructura del Proyecto

La estructura actual del proyecto es la siguiente:

```
simpleemojisjs/
│
├── css/
│   └── style.css       # Archivo CSS para los estilos personalizados
│
├── js/
│   └── script.js       # Archivo JavaScript con la lógica del selector de emojis
│
├── index.html          # Archivo principal HTML
└── README.md           # Documentación del proyecto
```

## Instalación

### 1. Clona el repositorio en tu máquina local:
```bash
git clone https://github.com/jaimefranko/SimpleEmojisJs.git
```

### 2. Navega al directorio del proyecto:
```bash
cd SimpleEmojisJs
```

### 3. Abre el archivo `index.php` en tu navegador:
Puedes abrirlo directamente en tu navegador o configurarlo en un servidor local.

## Uso

### Incluir los archivos CSS y JS en el HTML:
En tu archivo `index.php`, asegúrate de incluir las rutas correctas a los archivos CSS y JavaScript:

```html
<link href="css/simpleemoji.css" rel="stylesheet">
<script src="js/simpleemoji.js"></script>
```

### Estructura del selector de emojis en el HTML:

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

### Personaliza las categorías de emojis:
En el archivo `js/simpleemoji.js`, puedes editar o añadir más categorías y emojis a tu selector. Ejemplo:

```javascript
const allEmojis = {
    smileys: {
            title: "Smileys & Emotion",
               emojis: [
                  { emoji: "😀", name_en: "grinning face", name_es: "cara sonriente" }, /* ... */
            ]
            },
    people:
            {
            title: "People", /* Puedes cambiar el titulo de las categorias */
               emojis: [
                   /* ... */
               ]
   },
    /* Más categorías */
};
Puedes agregar más iconos, en su momento lo ire haciendo o tambien puedes contribuir, lo revisamos y lo agregamos
```

## Contribuciones

Si deseas contribuir a este proyecto, siéntete libre de hacer un fork del repositorio y enviar tus pull requests. Toda la ayuda es bienvenida.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

## Contacto

Si tienes preguntas o comentarios, no dudes en contactarme en [developer@jaimefranko.com](mailto:developer@jaimefranko.com).



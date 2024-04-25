<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <script src="js/products.js"></script>
    <script src="js/register.js"></script>
    <script>
        // Función para actualizar la subcategoría según la categoría seleccionada
        function updateSubCategory(category) {
            // Obtener el valor seleccionado de la categoría
            let selected = category.value;
            // Obtener el elemento de subcategoría del formulario
            var subcategoryTag = window.document.forms[0].elements["subcategory"];
            
            // Si se selecciona la opción predeterminada, no hacer nada
            if (selected == -1) return true;

            // Obtener los datos de subcategoría del servidor mediante una solicitud fetch
            fetch('categories-data.php?category=' + selected)
            .then(response => {
                if (!response.ok) {
                    throw new Error('No se encontraron subcategorías');
                }
                return response.json();
            })
            .then(data => {
                // Actualizar las opciones de subcategoría en el formulario
                if (data != null) {
                    subcategories = data; 
                    subcategoryTag.innerHTML = '';
                    subcategories.subcategory.forEach(function(elem) {
                        let option = document.createElement("option");
                        option.value = elem.id;
                        option.text = elem.name;
                        subcategoryTag.appendChild(option);
                    })
                }    
            })
            .catch(error => {
                console.error('Error al recibir la lista de subcategorías:', error);
            });
        }

        // Función para obtener productos del servidor y mostrarlos en una tabla
        function getProductesFromServer() {
            fetch('llistatProductes-data.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('No se encontraron productos');
                }
                return response.json();
            })
            .then(data => {
                productesRemots = data; 
                escriureTaula(productesRemots);
            })
            .catch(error => {
                console.error('Error al recibir la lista de productos:', error);
            });
        }

        // Función para validar el formulario
        function validateForm(form) {
            console.log(form);
            return true;
        }

        // Función para abrir una nueva ventana
        function abrirNovaFinestra() {
            window.open('nueva-ventana.php', '_blank');
        }

        // Función para ordenar productos por nombre
        function ordenaPerNom() {
            // Implementación de la lógica para ordenar por nombre
        }

        // Función para ordenar productos por categoría
        function ordenaPerCategoria() {
            // Implementación de la lógica para ordenar por categoría
        }

        // Función para ordenar productos por precio
        function ordenaPerPreu() {
            // Implementación de la lógica para ordenar por precio
        }

        // Función para filtrar productos por categoría
        function filtraPer(categoria) {
            // Implementación de la lógica para filtrar por categoría
        }

        // Función para escribir una tabla de productos en el documento HTML
        function escriureTaula(productes) {
            // Implementación de la lógica para escribir la tabla de productos
        }

        // Función para mostrar productos al cargar el documento
        document.addEventListener("DOMContentLoaded", function() {
            getProductesFromServer();
        })
    </script>
</head>
<body>
    <!-- Imágenes de la marca y enlaces de login y registro -->
    <img width="200px" src="//www.sarti.webs.upc.edu/moodle/pluginfile.php/1/theme_klass/logo/1515671862/Logo%20Sarti%20blanc2.svg" alt="Formació Sarti">
    <img width="200px" src="https://www.sarti.webs.upc.edu/web_v2/assets/onepage/img/logo/upc.png" alt="Formació Sarti">
    <a href="#">Login</a>&nbsp;<a href="#">Registro</a>

    <!-- Formulario de alta de producto -->
    <form id="altaProducte" method="POST" action="afegeixProducte.php" enctype="multipart/form-data" onSubmit="return validateForm(this)">
        <input type="hidden" name="id" value="-1">
        <input type="hidden" name="operation" value="add">
        <p>Nom: <input type="text" name="name" value=""></p>
        <p>Categoria: 
            <select name="category" onchange="updateSubCategory(this)">
                <option value="-1">- Selecciona un valor -</option>
                <option value="1">Frescos</option>
                <option value="2">Refrigerados</option>
                <option value="3">Bodega</option>
            </select>
        </p>
        <p>Subcategoria: <select name="subcategory"></select></p>
        <p>Preu: <input type="number" name="price"></p>
        <p>Imatge: <input type="file" name="imatge"></p>
        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>

    <hr>
    
    <!-- Enlaces para obtener productos -->
    <a onclick="getProductesFromServer()" href="#">Obtener productos</a>&nbsp;&nbsp;<a href="llistatProductes.php" target="_blank">Obtener productos (Nueva página)</a>&nbsp;<a href="categories-data.php?category=1">Productos Frescos.json </a>&nbsp;<a href="generateXSL.php">PDF Generado al Vuelo</a>&nbsp;<a href="dummy.pdf">PDF Dummy</a>&nbsp;<a href="download.php">Descargar PDF</a>
    
    <hr>

    <!-- Enlaces y botones para ordenar y filtrar productos -->
    <p>
        <a href="#" onclick="ordenaPerNom()">[Ordenar por Nombre]</a>&nbsp;
        <a href="#" onclick="ordenaPerCategoria()">[Ordenar por Categoría]</a>&nbsp;
        <a href="#" onclick="ordenaPerPreu()">[Ordenar por Precio]</a>
    </p>
    <p>
        <a href="#" onclick="filtraPer('')">[Todos]</a>&nbsp;
        <a href="#" onclick="filtraPer('peixos')">[Filtrar por Pescados]</a>&nbsp;
        <a href="#" onclick="filtraPer('carns')">[Filtrar por Carnes]</a>&nbsp;
        <a href="#" onclick="filtraPer('fruites')">[Filtrar por Frutas]</a>
    </p>

    <!-- Tabla de productos -->
    <table id="tauladeProductes" border="1"></table>

    <!-- Enlace para abrir una nueva ventana -->
    <a href="#" onclick="abrirNovaFinestra()">Abrir nueva ventana</a>
    <div id="contingut"></div>
</body>
</html>
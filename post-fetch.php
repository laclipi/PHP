<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF8>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- <link rel="stylesheet" href="estils.css"> -->
    <title>Post amb id's</title>
    <script>
        function modificarDOMTitol() {  // Titol
        let p= document.getElementById("titol");
        p.innerHTML = "TUTORIAL JAVA SCRIPT";
        }

        function modificarDOMText() {  // Text Informació
        let p= document.getElementById("text");
        p.innerHTML = "Text modificat Informació. Lorem Ipsum...";
        }


        function modificarDOMTNomUsuari() {  // Titol
        let p= document.getElementById("nom_usuari");
        p.innerHTML = "Maria Alonso";
        }

        function principi() { // CRIDA A LA FUNCIÓ amb un Botó:
        let boton = document.getElementById('miBoton'); // Obtener el botón por su ID. Títol
        let botoTitol = document.getElementById('BotoTitol'); // Botó pel Títol
        let botoNomUsuari = document.getElementById('BotoNomUsuari'); // Botó pel Nom d'usuari
        
        // Asignar la función al evento clic del botón:
        boton.addEventListener('click', modificarDOMText);   
        botoTitol.addEventListener('click', modificarDOMTitol);   
        botoNomUsuari.addEventListener('click', modificarDOMTNomUsuari);   
        }

        document.addEventListener("DOMContentLoaded", principi); // Carrega el JS quan s'ha carregat tot la pàgina
    </script>
</head>

<body>
    <div>
        <h1>Post 2</h1>
        <div> <!-- Post -->
            <h2>TÍTOL:</h2>
            <p id="titol"></p>

            <h2>INFORMACIÓ:</h2>
            <p id="text"></p>
        </div>

        <div> <!-- User -->
            <h2>NOM D'USUARI:</h2>
            <p id="nom_usuari"></p>

            <h2>E-MAIL:</h2>
            <p id="email"></p>

            <h2>NOM D'EMPRESA:</h2>
            <p id="nom-empresa"></p>
        </div> 

    <!-- BOTÓ PER CRIDA A LA FUNCIÓ:  -->      
    <div><button id="BotoTitol">Títol >></button></div>
    <div><button id="miBoton">Informació >></button></div>
    <div><button id="BotoNomUsuari">Nom d'usuari >></button></div>
            
    <!-- BOTONS Back i Previous:         
            <a href="#">&#8249; &#8249; Back</a>
            <a href="#"> Next &#8250; &#8250;</a> -->


            <!-- Botons per si poso Estils:
            <a href="#" class="previous round">&#8249;</a>
            <a href="#" class="next round">&#8250;</a> 
            -->

        <!-- <button onclick="goBack()">Go Back</button> -->
        </div>
</body>

</html>
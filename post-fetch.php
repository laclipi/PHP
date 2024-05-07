<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones</title>
   
</head>
<body>
    <div class="container">
        <div class="post" id="post1">
            <h2>Publicación 1</h2>
            <p>Contenido de la publicación 1.</p>
            <p><strong>Usuario:</strong> usuario1</p>
            <p><strong>Nombre:</strong> Nombre Usuario1</p>
            <p><strong>Email:</strong> usuario1@example.com</p>
        </div>
        <div class="post" id="post2">
            <h2>Publicación 2</h2>
            <p>Contenido de la publicación 2.</p>
            <p><strong>Usuario:</strong> usuario2</p>
            <p><strong>Nombre:</strong> Nombre Usuario2</p>
            <p><strong>Email:</strong> usuario2@example.com</p>
        </div>
        <div class="post" id="post3">
            <h2>Publicación 3</h2>
            <p>Contenido de la publicación 3.</p>
            <p><strong>Usuario:</strong> usuario3</p>
            <p><strong>Nombre:</strong> Nombre Usuario3</p>
            <p><strong>Email:</strong> usuario3@example.com</p>
        </div>
        <div class="navigation">
            <button onclick="prevPost()">Anterior</button>
            <button onclick="nextPost()">Siguiente</button>
        </div>
    </div>

    <script>
     document.addEventListener ("DOMContentLoaded,modifyDOM");
      
      let datos=............................................ 
      let currentPost = 1;
      const totalPosts = 3;

     function modifyDOM () {
        let p=document.get getElementById ("texto");
        p.innerHTML= "TEXTO MODIFICADO";

        let json = "https"................................


     }    
       function fetch () {
        fetch (https:jsonplaceholder.typicode,com/todos/1);
       }

        function prevPost() {
            if (currentPost > 1) {
                currentPost--;
                showPost(currentPost);
            }
        }

        function nextPost() {
            if (currentPost < totalPosts) {
                currentPost++;
                showPost(currentPost);
            }
        }

        function showPost(postNumber) {
            const posts = document.querySelectorAll('.post');
            posts.forEach(post => post.style.display = 'none');
            document.getElementById(`post${postNumber}`).style.display = 'block';
        }

        showPost(currentPost);
    </script>
</body>
</html>
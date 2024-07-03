<?php
class Libro {
    private $titulo;
    private $autor;
    private $anioPublicacion;

    public function __construct($titulo, $autor, $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnioPublicacion() {
        return $this->anioPublicacion;
    }

    public function mostrarInfo() {
        return "Título: " . $this->titulo . ", Autor: " . $this->autor . ", Año de Publicación: " . $this->anioPublicacion;
    }
}

class Biblioteca {
    private $libros = [];

    public function agregarLibro(Libro $libro) {
        $this->libros[] = $libro;
    }

    public function mostrarLibros() {
        foreach ($this->libros as $libro) {
            echo $libro->mostrarInfo() . "\n";
        }
    }
}

// Crear libros
$libro1 = new Libro("1984", "George Orwell", 1949);
$libro2 = new Libro("To Kill a Mockingbird", "Harper Lee", 1960);

// Crear una biblioteca
$biblioteca = new Biblioteca();
$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);

// Mostrar los libros en la biblioteca
$biblioteca->mostrarLibros();
// Output:
// Título: 1984, Autor: George Orwell, Año de Publicación: 1949
// Título: To Kill a Mockingbird, Autor: Harper Lee, Año de Publicación: 1960
?>
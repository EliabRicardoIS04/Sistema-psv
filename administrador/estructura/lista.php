<?php
    class servicio {
        public $idServicio;
        public $servicio;
    
        function __construct($servicio) {
            $this->servicio = $servicio;
        }
    
        function get_servicio() {
            return $this->servicio;
        }
    }
    
    class empleado extends servicio {
        public $idEmpleado;
        public $nombre;
        public $apellido;
        public $edad;
        public $foto;
        public $descripcion;
    
        function __construct($foto, $nombre, $apellido, $edad, $descripcion,  $servicio) {
            parent::__construct($servicio);
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this ->foto = $foto;
            $this->descripcion = $descripcion;
        }
    
        // Resto de los métodos...
    
        function Mostrar(){
            return '
            <table style="border-collapse: collapse; border: 1px solid black;">
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 5px;">foto</th>
                        <th style="border: 1px solid black; padding: 5px;">Nombre</th>
                        <th style="border: 1px solid black; padding: 5px;">apellido</th>
                        <th style="border: 1px solid black; padding: 5px;">edad</th>
                        <th style="border: 1px solid black; padding: 5px;">descripción</th>
                        <th style="border: 1px solid black; padding: 5px;">servicio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid black; padding: 5px;"><img src="data:image/jpeg;base64,' . base64_encode($this->foto) . '" alt="Imagen JPG" width="25" height="25"></td>
                        <td style="border: 1px solid black; padding: 5px;">' . $this->nombre . '</td>
                        <td style="border: 1px solid black; padding: 5px;">' . $this->apellido . '</td>
                        <td style="border: 1px solid black; padding: 5px;">' . $this->edad . '</td>
                        <td style="border: 1px solid black; padding: 5px;">' . $this->descripcion . '</td>
                        <td style="border: 1px solid black; padding: 5px;">' . $this->servicio . '</td>
                    </tr>
                </tbody>
            </table>';
        }
    }
    
    $listaEmpleados = new SplDoublyLinkedList;

    $urlfoto1 = "../imagenesproductos/userempleasos.png";
    $contenido = file_get_contents($urlfoto1);
    
    
    $empleado1 = new empleado($contenido,"Juan", "perez", 25, "es muy fdofsdfsd", "vigilante");
    $empleado2 = new empleado($contenido,"carlos", "zuñiga", 22, "es muy inteligente", "supervicion");
    $empleado3 = new empleado($contenido,"hernesto", "paredes", 26, "es muy fdsfsdfsd","vigilante");
    $empleado4 = new empleado($contenido,"pedro", "ricardo", 45, "es muy dfsdffdsf", "supervicion");
    $empleado5 = new empleado($contenido,"maria", "arias", 55, "es muy idsfsdfsddfe", "supervicion");
    $empleado6 = new empleado($contenido,"estefani", "lora", 24, "es muy inteligente", "supervicion");
    $empleado7 = new empleado($contenido,"joel", "pera", 23, "es muy dfsdfdsfsdfsd", "cuidador de zonas");
    $empleado8 = new empleado($contenido,"leonardo", "manzana", 22, "es muy intdfdsfsdde", "protección");
    
    $listaEmpleados->push($empleado1);
    $listaEmpleados->push($empleado2);
    $listaEmpleados->push($empleado3);
    $listaEmpleados->push($empleado4);
    $listaEmpleados->push($empleado5);
    $listaEmpleados->push($empleado6);
    $listaEmpleados->push($empleado7);
    $listaEmpleados->push($empleado8);
    
    foreach ($listaEmpleados as $empleado) {
        echo $empleado->Mostrar() . "<br>";  
    }
    
?>
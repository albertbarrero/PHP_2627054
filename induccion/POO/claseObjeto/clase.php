<?php

    class clase{

        // private $nom;
        // private $edad;

        // public function __construct($nom, $edad){
        //     $this->nom=$nom;
        //     $this->edad=$edad;
        // }

        public function __construct(
            private $nom,
            private $edad
        ) {}


        function getNom(){
            return $this->nom;
        }

        function setNom($nom){
            return $this->nom=$nom;
        }
        
        function getEdad(){
            return $this->edad;
        }

        function setEdad($edad){
            return $this->edad=$edad;
        }  

        function mostrar(){
            echo 'El nombre es: '.$this->nom."<br>". 'La edad es: '.$this->edad;
        }

        }
    


        class animal{

            // private $nom;
            // private $edad;
    
            // public function __construct($nom, $edad){
            //     $this->nom=$nom;
            //     $this->edad=$edad;
            // }
    
            public function __construct(
                private $nom,
                private $edad
            ) {}
    
    
            function getNom(){
                return $this->nom;
            }
    
            function setNom($nom){
                return $this->nom=$nom;
            }
            
            function getEdad(){
                return $this->edad;
            }
    
            function setEdad($edad){
                return $this->edad=$edad;
            }  
    
            function mostrar(){
                echo 'El nombre es: '.$this->nom."<br>". 'La edad es: '.$this->edad;
            }
    
            }
?>
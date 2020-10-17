
        <?php 
        class Coche{
            var $ruedas; //creas los atrivutos de la clase
            var $color;
            var $motor;

            function __construct (){ //creas el constructor (estado inicial del objeto)
                $this->ruedas=4;
                $this->color=""; //aca los valores ponlo sin $
                $this->motor=1400;
            }

            function arrancar (){ //creas las instancias o funciones de clase
                echo "estoy arrancando <br>";
            }
            function girar(){
                echo "estoy girando";
            }
            function frenar(){
                echo "estoy frenando";
            }
            function establece_color($color_coche, $nombre_coche){
                $this -> color = $color_coche;
                echo "el color de "  . $nombre_coche .  " es : " . $this->color . "<br>";
            }

            function ruido_carro($sonido){
                echo $sonido  . " prueba git 1";
            }

        }
        
        //------------------------------------------------------------------------------------------------

        class Camion extends Coche{

            function __construct (){ //creas el constructor (estado inicial del objeto)
                $this->ruedas=8;
                $this->color="Gris"; //aca los valores ponlo sin $
                $this->motor=2600;
            }
            function establece_color($color_camion, $nombre_camion){ //sobreescritura de clase padre
                $this -> color = $color_camion;
                echo "el color de "  . $nombre_camion .  " es : " . $this->color . "<br>";
            }
            function arrancar(){

                parent ::arrancar();
                echo "camion arrancado <br>";
            }
        }




        //$ferrari=new Coche(); // das estado inicial del objeto o instancia
        //$volswagen=new Coche();
        //$volbo=new Coche();
        
        //$ferrari->establece_color("Rojo", "Ferrari"); //usa funcion esyablece coor con los dos parametros usados
        //$volswagen->establece_color("verde", "Wolsvagen");

        //$ferrari->arrancar();
           // echo $volswagen->ruedas;

        
        ?>

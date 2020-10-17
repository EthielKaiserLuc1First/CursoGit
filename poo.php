<html>
    <head>
    <body>
        <?php 

        include ("poo2.php"); //incluyes los datos del otro php que tien clases coche y camion
        $ferrari= new Coche();//creas nuevo objeto
        $pegaso= new Camion();

        echo "el ferrari tiene " . $ferrari->ruedas . " ruedas <br>";
        echo "el pegaso tiene " . $pegaso->ruedas . " ruedas <br>";

        $pegaso->arrancar();
        $pegaso->establece_color("rojo","XVLSR34");

        ?>
    </body>
</html>
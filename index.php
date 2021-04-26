<html>
    <head>
        <title>Test PHP</title>
    </head>
<body>
<?php
    echo '<h1>Bonjour les gens!</h1>';
        class Voiture {
        public $vitesse = 130;
    }

      function checkVitesse(Voiture $veh) {
        if ($veh->vitesse > 100)
            echo "Exces de vitesse";
    }

    $v = new Vehicule;
    checkVitesse($v);
?>
</body>
</html>>
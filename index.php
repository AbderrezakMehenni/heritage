<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héritage</title>
</head>

<body>
    <?php

    class Animal
    {
        protected $animalType;

        public function __construct($animalType)
        {
            $this->animalType = $animalType;
        }

        public function info()
        {
            echo "Je suis un " . $this->animalType . ".<br>";
        }
    }

    class Mammifere extends Animal
    {
        protected $mammalType;

        public function __construct($animalType, $mammalType)
        {
            parent::__construct($animalType);
            $this->mammalType = $mammalType;
        }

        public function infoPlus()
        {
            echo "Je suis un " . $this->mammalType . ".<br>";
        }
    }

    class Chien extends Mammifere
    {
        protected $breed;

        public function __construct($animalType, $mammalType, $breed)
        {
            parent::__construct($animalType, $mammalType);
            $this->breed = $breed;
        }

        public function crie()
        {
            echo "J'aboie.<br>";
        }
    }

    $monChien = new Chien("animal", "mammifère", "rottweiler");
    $monChien->info();
    $monChien->infoPlus();
    $monChien->crie();
    ?>

</body>

</html>
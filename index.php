<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héritage</title>
</head>
<body>
    <?php
    class animal
    {
        protected $animal;
        public function __construct($animal)
        {
            $this->animal = $animal;
        }
        public function info()
        {
            echo "Je suis un " . $this->animal . ".<br>";
        }
    }
    class mammifere extends animal
    {
        protected $mammifere;
        public function __construct($animal, $mammifere)
        {
            parent::__construct($animal);
            $this->mammifere = $mammifere;
        }
        public function infoPlus()
        {
            echo "Je suis un " . $this->mammifere . ".<br>";
        }
    }
    class chien extends mammifere
    {
        protected $chien;
        public function __construct($animal, $mammifere, $chien)
        {
            parent::__construct($animal, $mammifere);
            $this->chien = $chien;
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
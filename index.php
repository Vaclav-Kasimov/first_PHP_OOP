<!DOCTYPE html>

<?php
    $output = '';
    class Animal {
        private $species;
        private $name = 'Default';

        public function __construct($name, $species){
            $this->name = $name;
            $this->species = $species;
        }

        public function __toString(){
            return 'This is the '.$this->species.' called '.$this->name;
        }
    }

    if (isset($_GET['Name']) && isset($_GET['species'])){
        $current = new Animal($_GET['Name'], $_GET['species']);
        $output = 'You submitted this animal:<br>'.$current.'<br>';
    }
    else{
        $output = '';
    }
?>

<html>
    <head>
        <title>My first OOP-code in PHP</title>
    </head>
    <body>
        <h1>Class -- animal</h1>
        <div>
            Here You can create some instance of the animal class.
        </div>
        <form>
            <div>
                Name: <input type="text" name="Name" size="30">
            </div>
            <div>
                Species:<br>
                <input type="radio" name="species" value="Dog">Dog<br>
                <input type="radio" name="species" value="Cat">Cat<br>
                <input type="radio" name="species" value="Parrot">Parrot
            </div>
            <input type="submit">
        </form>

        <?= $output ?>
    </body>
</html>
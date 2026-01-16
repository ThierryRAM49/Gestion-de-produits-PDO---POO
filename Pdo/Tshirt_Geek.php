<?php



// 1 création de la classe Product


class Product
{
    private string $name;
    private float $price;
    public string $description;




    // 2 - creation de la methode constructeur
    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    // 3 - creation des methodes getteurs & setteurs
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        // specification du prix
        return $this->price . "€";
    }

    public function setPrice($price)
    {
        if ($price >= 0) { 
           
            $this->price = $price;
        } else { echo "Le prix ne peut pas être négatif."; }
    }
}
// Instantiation en dehors de la classe qui gère les produits
$tshirt = new Product("T-shirt Geek", 50, "Casual cotton T-shirt");
// affichage des détails du T-shirt:
// echo $tshirt->getName() . "<br>";
// echo $tshirt->getPrice() . "<br>";
// echo $tshirt->Description . "<br>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tshirt Geek</title>
</head>

<body>
    <h1> Instanciation et tests</h1>
    <!--Création d'un objet T-shirt Geek avec un prix de 20 euros et une description -->

    <?php
    class Tshirt
    {
        // public $name = "T-shirt Geek";
        
        // public $price = 20;
        // public $Description;
    } // afficher les détails du T-shirt
    echo $tshirt->getName() . "<br>";
    echo $tshirt->getPrice() . "<br>";
    echo $tshirt->description . "<br>";
    ?>
</body>

</html>
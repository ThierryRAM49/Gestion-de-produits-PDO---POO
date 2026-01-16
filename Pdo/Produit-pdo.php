<?php  
 class Produit {
    private $nom;
    private $prix;

 //création de constructors et méthodes pour gérer les produits avec réduction de prix

     public function __construct($nom, $prix) {
         $this->nom = $nom;
        $this->prix = $prix;     }

     public function afficherDetails() {
         echo "Nom: ".$this->nom."\n
        Prix: ".$this->prix."\n";
    }


    public function reduirePrix() {
        $this->prix -= 5;
        echo "Nouveau prix après réduction: ".$this->prix."\n";
     }
 }       

 $produit1 = new Produit("Produit 1", 10);
echo '<pre>';
 $produit1->afficherDetails();
 echo '<pre>';
$produit1->reduirePrix();
 echo '<pre>';
 var_dump($produit1);

 $produit2 = new Produit("Produit 2", 20);
 echo '<pre>';
$produit2->afficherDetails();
 echo '<pre>';
 $produit2->reduirePrix();
 echo '<pre>';
 var_dump($produit2);






 
?>  
    
<?php

?>
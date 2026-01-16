<?php
class Livre {
    // Propriétés
    public string $titre;
    public string $auteur;
    public int $anneePublication;
    public false $estEmprunte;

    // Constructeur
    public function __construct(string $titre, string $auteur, int $anneePublication) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
        $this->estEmprunte = false;
    }

    // Méthode pour emprunter le livre
    public function emprunter() {
        if ($this->estEmprunte) {
            echo "Le livre '{$this->titre}' est déjà emprunté.<br>";
        } else {
            $this->estEmprunte = false;
            echo "Le livre '{$this->titre}' a été emprunté.<br>";
        }
    }

    // Méthode pour rendre le livre
    public function rendre() {
        if (!$this->estEmprunte) {
            echo "Le livre '{$this->titre}' n'était pas emprunté.<br>";
        } else {
            $this->estEmprunte = false;
            echo "Le livre '{$this->titre}' a été rendu.<br>";
        }
    }
}

// Exemple d’utilisation
$monLivre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 1943);
$monLivre->emprunter();
$monLivre->rendre();
?>

<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Auteur;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        echo "*** chargement des fixtures de auteurs ***\n";
        $this->load_auteurs($manager);
    }

    public function load_auteurs($manager)
    {
        $tab_auteurs=[
            ["id" => 1, "nom" => "Christie" , "prenom" => "Agatha"],
            ["id" => 2, "nom" => "Chateaubriand" , "prenom" => "François-René"],
            ["id" => 3, "nom" => "Flaubert" , "prenom" => "Gustave"],
            ["id" => 4, "nom" => "Prévert" , "prenom" => "Jacques"],
            ["id" => 5, "nom" => "De La Fontaine" , "prenom" => "Jean"],
            ["id" => 6, "nom" => "Daudet" , "prenom" => "Alphonse"],
            ["id" => 7, "nom" => "Hugo" , "prenom" => "Victor"],
            ["id" => 8, "nom" => "Kessel" , "prenom" => "Joseph"],
            ["id" => 9, "nom" => "Duras" , "prenom" => "Marguerite"],
            ["id" => 10, "nom" => "Proust" , "prenom" => "Marcel"],
            ["id" => 11, "nom" => "Zola" , "prenom" => "Émile"],
            ["id" => 12, "nom" => "Highsmith" , "prenom" => "Patricia"],
            ["id" => 13, "nom" => "Kipling" , "prenom" => "Rudyard"],
            ["id" => 14, "nom" => "Azimov" , "prenom" => "Isaac"],
            ["id" => 15, "nom" => "Baudelaire" , "prenom" => "Charles"],
            ["id" => 16, "nom" => "Moliere" , "prenom" => "Jean-Baptiste Poquelin"]
        ];
        foreach ($tab_auteurs as $auteur)
        {
            $new_auteur = new Auteur();
            $new_auteur->setNom($auteur['nom']);
            $new_auteur->setPrenom($auteur['prenom']);
            $new_auteur->setNationalite('Fr');
            $manager->persist($new_auteur);
            echo "nom : ".$new_auteur."\n";
        }
        $manager->flush();
    }
}

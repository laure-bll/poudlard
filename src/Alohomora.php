<?php
namespace App;

use App\Entity\Personnages\Ron;
use App\Entity\Maison\Serdaigle;
use App\Entity\Personnages\Luna;
use App\Controller\RonController;
use App\Entity\Maison\Gryffondor;
use App\Entity\Maison\Serpentard;
use App\Entity\Personnages\Drago;
use App\Entity\Personnages\Ginny;
use App\Entity\Personnages\Harry;
use App\Controller\LunaController;
use App\Entity\Maison\Poufsouffle;
use App\Controller\DragoController;
use App\Controller\GinnyController;
use App\Controller\HarryController;
use App\Entity\Personnages\Hermione;
use App\Entity\Personnages\Neuville;
use App\Controller\HermioneController;
use App\Controller\NeuvilleController;

require_once "../vendor/autoload.php";


// INITIALIASATION DES MAISONS DE POUDLARD

$gryffondor = new Gryffondor();
$gryffondor->setFondateur("Godric Gryffondor");
$gryffondor->setCouleurs(["rouge", "or"]);
$gryffondor->setAnimal("lion");
$gryffondor->setFantome("Sir Nicholas de Mimsy-Porpington");

$poufsouffle = new Poufsouffle();
$poufsouffle->setFondateur("Helga Poufsouffle");
$poufsouffle->setCouleurs(["jaune", "noir"]);
$poufsouffle->setAnimal("Blaireau");
$poufsouffle->setFantome("Moine Gras");

$serdaigle = new Serdaigle();
$serdaigle->setFondateur("Rowena Serdaigle");
$serdaigle->setCouleurs(["bleu", "bronze"]);
$serdaigle->setAnimal("Aigle");
$serdaigle->setFantome("Dame Grise");

$serpentard = new Serpentard();
$serpentard->setFondateur("Salazar Serpentard");
$serpentard->setCouleurs(["vert", "argent"]);
$serpentard->setAnimal("Serpent");
$serpentard->setFantome("Baron Sanglant");

// print_r($gryffondor);
// print_r($serpentard);
// print_r($serdaigle);
// print_r($poufsouffle);


// LES PERSONNAGES ENTRENT EN SCENE

$drago = new Drago("Drago Malefoy");
$drago->setMaison($serpentard);
$drago = new DragoController($drago);

$ginny = new Ginny("Ginny Weasley");
$ginny->setMaison($gryffondor);
$ginny = new GinnyController($ginny);

$harry = new Harry("Harry Potter");
$harry->setMaison($gryffondor);
$harry = new HarryController($harry);

$hermione = new Hermione("Hermione Granger");
$hermione->setMaison($gryffondor);
$hermione = new HermioneController($hermione);

$luna = new Luna("Luna Lovegood");
$luna->setMaison($serdaigle);
$luna = new LunaController($luna);

$neuville = new Neuville("Neuville Londubat");
$neuville->setMaison($gryffondor);
$neuville = new NeuvilleController($neuville);

$ron = new Ron("Ron Weasley");
$ron->setMaison($gryffondor);
$ron = new RonController($ron);

$drago->lancerUnSort("Amplificatum", $neuville);
$neuville->fuirLeCombat();
$hermione->sauverLaSituation();
$drago->faireUnCoupBas();
$harry->parlerFourcheLangue();
$drago->fuirLeCombat();
$luna->voirLesFantomes("Syrius Black");
$ron->volerSurUnBalais();
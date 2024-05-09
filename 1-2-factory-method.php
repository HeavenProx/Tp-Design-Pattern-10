<?php 

use EsgiIw\TpDesignPattern\Model\Factories\LoginAlertFactory;

require_once 'vendor/autoload.php';

$alertFactory = new LoginAlertFactory();

// Création d'une alerte de connexion pour un fichier de log
$fileAlert = $alertFactory->createAlert(LoginAlertFactory::FILE_SUPPORT);
$fileAlert->sendAlert("User logged in successfully.");


// Création d'une alerte de connexion pour une table de base de données
$databaseAlert = $alertFactory->createAlert(LoginAlertFactory::DATABASE_SUPPORT);
$databaseAlert->sendAlert("User logged in successfully.");

// Création d'une alerte de connexion pour un email aux administrateurs
$emailAlert = $alertFactory->createAlert(LoginAlertFactory::EMAIL_SUPPORT);
$emailAlert->sendAlert("User logged in successfully.");


/*
1. Programme principale (ici)

2. LoginAlertFactory.php (notre fabrique) -> 2.5 Doit retourner l'objet qui implementera LoginAlertInterface 

3. FileLoginAlert.php (ou les autres) 
*/






/*
use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Events\ConcertEventFactory;
use EsgiIw\TpDesignPattern\Model\Events\SoireeEventFactory;

require_once 'vendor/autoload.php';

$concertFactory = new ConcertEventFactory();
$concertEvent = $concertFactory->createEvent()
    ->setId(1)
    ->setLabel('Gala du printemps')
    ->setDescription('Assistez à la soirée de gala pour le printemps.')
    ->setDate(new \DateTime('2024-04-26 19:30'));

echo $concertEvent->getDetails();

echo "<br><br>";

$soireeFactory = new SoireeEventFactory();
$soireeEvent = $soireeFactory->createEvent()
    ->setId(2)
    ->setLabel('Soiree d\'été')
    ->setDescription('Viens boire un coup avec nous pour contrer cette chaleur !')
    ->setDate(new \DateTime('2024-04-28 19:30'));

echo $soireeEvent->getDetails();

/*
1. Programme Principal --> Utilisation de ConcertEventFactory pour créer un ConcertEvent

2. ConcertEventFactory (ConcertEventFactory.php) --> Crée une instance de ConcertEvent en appelant createEvent()

3. ConcertEvent (ConcertEvent.php) --> Initialise les propriétés de l'événement (setId, setLabel, setDescription, setDate)

--> Retourne l'instance de ConcertEvent au Programme Principal
      |
4. Programme Principal utilise l'instance de ConcertEvent créée pour obtenir les détails et les afficher
*/

/* 
ConcertEvent.php 
    <--
        ConcertEventFactory <-- Programme principale
            |
            |    
          extend
            |
            v
        EventFactory
*/




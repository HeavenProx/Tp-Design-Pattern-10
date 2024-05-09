<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export\EventCsvExportAdapter;
use EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export\EventJsonExportAdapter;
use EsgiIw\TpDesignPattern\Model\Entity\Event;

require_once 'vendor/autoload.php';

// Récupération des événements
$eventsToExport = [
    (new Event())
        ->setId(1)
        ->setLabel('Concert du printemps')
        ->setDescription('Assistez au concert fêtant le printemps.')
        ->setDate(new \DateTime('2024-04-26 19:30')),

    (new Event())
        ->setId(2)
        ->setLabel('Soirée League of Legend')
        ->setDescription('Rejoignez vos comparses sur LoL.')
        ->setDate(new \DateTime('2024-04-20 21:00')),

    (new Event())
        ->setId(5)
        ->setLabel('Cinéma de fin avril')
        ->setDescription('Tous cinema pour la fin du mois d\'avril.')
        ->setDate(new \DateTime('2024-04-30 20:30')),
];

// Définition des adapteurs
$adapters = [
    new EventCsvExportAdapter($eventsToExport),
    new EventJsonExportAdapter($eventsToExport),
];

// Utilisation des adapteurs
foreach ($adapters as $adapter) {
    echo '# Adapter ' . $adapter::class . "\n";
    echo $adapter->convert();
    echo "<br><br>";
}

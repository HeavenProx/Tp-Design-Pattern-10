<?php

use EsgiIw\TpDesignPattern\Model\Facade\RepositoryFacade;
use EsgiIw\TpDesignPattern\Model\Facade\MyRepository;

require_once 'vendor/autoload.php';

$repository = new RepositoryFacade(new MyRepository());

$repository->retrieveData(); 
$repository->updateData();   
$repository->deleteData();   

/*
1. Programme principale : 
    - Instanciation de la façade en prenant en paramètre l'instancation de ma classe MyRepository qui effectuera les actions

2. MyRepository :
    - implemente RepositoryFacade qui déclare les méthodes utilisé pour nos actions 

3. Programme principale : 
    - appelle des méthodes de RepositoryFacade
    
4. RepositoryFacade 
    - délegue la tâche de la méthode à la méthode MyRepository associé
    (renvoie les actions ou en donne d'autre)

5. MyRepository :
    - Fait l'action : ici fait un echo
*/
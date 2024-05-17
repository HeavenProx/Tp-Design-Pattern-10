<?php 

namespace EsgiIw\TpDesignPattern\Model\Facade;

use EsgiIw\TpDesignPattern\Model\Facade\RepositoryInterface;

class MyRepository implements RepositoryInterface {
    public function retrieveData(): void {
        echo "La méthode retrieveData a été effectuée<br>";
    }

    public function updateData(): void {
        echo "La méthode updateData a été effectuée<br>";
    }

    public function deleteData(): void {
        echo "La méthode deleteData a été effectuée<br>";
    }
}
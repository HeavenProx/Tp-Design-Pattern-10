<?php 

namespace EsgiIw\TpDesignPattern\Model\Facade;

interface RepositoryInterface {
    public function retrieveData(): void;
    public function updateData(): void;
    public function deleteData(): void;
}
<?php 

namespace EsgiIw\TpDesignPattern\Model\Facade;

use EsgiIw\TpDesignPattern\Model\Facade\RepositoryInterface;

class RepositoryFacade {
    public function __construct(RepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function retrieveData(): void {
        $this->repository->retrieveData();
    }

    public function updateData(): void {
        $this->repository->updateData();
    }

    public function deleteData(): void {
        $this->repository->deleteData();
    }
}
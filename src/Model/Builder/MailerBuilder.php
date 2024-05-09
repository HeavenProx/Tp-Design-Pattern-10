<?php 

namespace EsgiIw\TpDesignPattern\Model\Builder;

interface MailerBuilder {
    public function addCible($email);
    public function addCC($email);
    public function addBCC($email);
    public function setObjet($objet);
    public function setMessage($message);
    public function create();
}

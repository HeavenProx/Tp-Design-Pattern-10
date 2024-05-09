<?php 

namespace EsgiIw\TpDesignPattern\Model\Builder;

use EsgiIw\TpDesignPattern\Model\Builder\MailerBuilder;
use EsgiIw\TpDesignPattern\Model\Mailer\Mailer;

class SimpleMailerBuilder implements MailerBuilder {
    private $mailer;

    public function __construct() {
        $this->mailer = new Mailer();
    }

    public function addCible($email) {
        $this->mailer->addCible($email);
        return $this;
    }

    public function addCC($email) {
        $this->mailer->addCC($email);
        return $this;
    }

    public function addBCC($email) {
        $this->mailer->addBCC($email);
        return $this;
    }

    public function setObjet($objet) {
        $this->mailer->setObjet($objet);
        return $this;
    }

    public function setMessage($message) {
        $this->mailer->setMessage($message);
        return $this;
    }

    public function create() {
        return $this->mailer;
    }
}

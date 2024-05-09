<?php 

namespace EsgiIw\TpDesignPattern\Model\Mailer;

namespace EsgiIw\TpDesignPattern\Model\Mailer;

class Mailer {
    private $cible = [];
    private $cc = [];
    private $bcc = [];
    private $objet;
    private $message;

    public function addCible($email) {
        $this->cible[] = $email;
        return $this;
    }

    public function addCC($email) {
        $this->cc[] = $email;
        return $this;
    }

    public function addBCC($email) {
        $this->bcc[] = $email;
        return $this;
    }

    public function setObjet($objet) {
        $this->objet = $objet;
        return $this;
    }

    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    public function display() {
        echo "Email cible : " . implode(", ", $this->cible) . "<br>";
        echo "CC : " . implode(", ", $this->cc) . "<br>";
        echo "BCC : " . implode(", ", $this->bcc) . "<br>";
        echo "Objet du mail : " . $this->objet . "<br>";
        echo "Message : " . $this->message . "<br>";
    }
}

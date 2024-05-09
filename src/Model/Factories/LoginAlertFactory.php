<?php

namespace EsgiIw\TpDesignPattern\Model\Factories;

use EsgiIw\TpDesignPattern\Model\Alerts\LoginAlertInterface;
use EsgiIw\TpDesignPattern\Model\Alerts\FileLoginAlert;
use EsgiIw\TpDesignPattern\Model\Alerts\DatabaseLoginAlert;
use EsgiIw\TpDesignPattern\Model\Alerts\EmailLoginAlert;

require_once 'vendor/autoload.php';

class LoginAlertFactory {
    public const FILE_SUPPORT = 'file';
    public const DATABASE_SUPPORT = 'database';
    public const EMAIL_SUPPORT = 'email';

    public function createAlert(string $support): LoginAlertInterface {
        switch ($support) {
            case self::FILE_SUPPORT:
                return new FileLoginAlert();
            case self::DATABASE_SUPPORT:
                return new DatabaseLoginAlert();
            case self::EMAIL_SUPPORT:
                return new EmailLoginAlert();
            default:
                throw new \InvalidArgumentException("Unsupported support type: $support");
        }
    }
}

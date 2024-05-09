<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Entity;

use SplSubject;
use SplObserver;

class Event implements SplSubject
{
    protected int $id;

    protected string $label;

    protected string $description;

    protected \DateTime $date;

    protected array $observers = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }


    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    // Ne nous sert pas ici
    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

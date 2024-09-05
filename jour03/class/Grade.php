<?php

class Grade {
    private $id;
    private $level;
    private $description;
    private $startDate;

    public function __construct(
        int $id = 0,
        int $level = 0,
        string $description = '',
        $startDate = null
    ) {
        $this->id = $id;
        $this->level = $level;
        $this->description = $description;
        $this->startDate = $startDate instanceof \DateTime ? $startDate : null;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getLevel(): int {
        return $this->level;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getStartDate(): ?\DateTime {
        return $this->startDate;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setLevel(int $level): void {
        $this->level = $level;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setStartDate($startDate): void {
        $this->startDate = $startDate instanceof \DateTime ? $startDate : null;
    }
}
?>

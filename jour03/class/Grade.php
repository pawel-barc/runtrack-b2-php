<?php

class Grade {
    private int $id;
    private int $level;
    private string $description;
    private ?\DateTime $startDate;

    public function __construct(
        int $id = 0,
        int $level = 0,
        string $description = '',
        ?\DateTime $startDate = null
    ) {
        $this->id = $id;
        $this->level = $level;
        $this->description = $description;
        $this->startDate = $startDate;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    public function getLevel(): int {
        return $this->level;
    }

    public function setLevel(int $level): self {
        $this->level = $level;
        return $this;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    public function getStartDate(): ?\DateTime {
        return $this->startDate;
    }

    public function setStartDate(?\DateTime $startDate): self {
        $this->startDate = $startDate;
        return $this;
    }
}
?>

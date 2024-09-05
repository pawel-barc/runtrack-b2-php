<?php

class Floor {
    private $id;
    private $name;
    private $level;

    public function __construct(
        int $id = 0,
        string $name = '',
        int $level = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLevel(): int {
        return $this->level;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setLevel(int $level): void {
        $this->level = $level;
    }
}
?>

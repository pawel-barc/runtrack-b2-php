<?php

class Student {
    private int $id;
    private int $grade_id;
    private string $email;
    private string $fullname;
    private ?\DateTime $birthdate;
    private string $gender;

    public function __construct(
        int $id = 0,
        int $grade_id = 0,
        string $email = '',
        string $fullname = '',
        $birthdate = null,
        string $gender = ''
    ) {
        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate instanceof \DateTime ? $birthdate : null;
        $this->gender = $gender;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    public function getGradeId(): int {
        return $this->grade_id;
    }

    public function setGradeId(int $grade_id): self {
        $this->grade_id = $grade_id;
        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function getFullname(): string {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self {
        $this->fullname = $fullname;
        return $this;
    }

    public function getBirthdate(): ?\DateTime {
        return $this->birthdate;
    }

    public function setBirthdate(?\DateTime $birthdate): self {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function setGender(string $gender): self {
        $this->gender = $gender;
        return $this;
    }
}
?>

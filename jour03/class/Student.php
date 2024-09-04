<?php

class Student {
    private $id;
    private $grade_id;
    private $email;
    private $fullname;
    private $birthdate;
    private $gender;

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

    public function getGradeId(): int {
        return $this->grade_id;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getFullname(): string {
        return $this->fullname;
    }

    public function getBirthdate(): ?\DateTime {
        return $this->birthdate;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setGradeId(int $grade_id): void {
        $this->grade_id = $grade_id;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setFullname(string $fullname): void {
        $this->fullname = $fullname;
    }

    public function setBirthdate($birthdate): void {
        $this->birthdate = $birthdate instanceof \DateTime ? $birthdate : null;
    }

    public function setGender(string $gender): void {
        $this->gender = $gender;
    }
}
?>

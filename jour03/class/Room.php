<?php

class Room{
    private int $id;
    private int $floor_id;
    private string $name;
    private int $capacity;

    public function __construct(

        int $id = 0,
        int $floor_id = 0,
        string $name = '',
        int $capacity = 0
    ){
       $this->id = $id; 
       $this->floor_id = $floor_id;
       $this->name = $name;
       $this->capacity = $capacity;
    }

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id): self{
        $this->id = $id;
        return $this;

    }

    public function getFloorId(): int{
        return $this->floor_id;
    }
    public function setFloorId(int $floor_id): self{
        $this->floor_id = $floor_id;
        return $this;
    }

    public function getName(): string{
        return $this->name;
        
    }
    
    public function setName(string $name): self{
        $this-> name = $name;
        return $this;
    }

    
    public function getCapacity(): int{
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self{
        $this-> capacity = $capacity;
        return $this;
    }
}    
?>
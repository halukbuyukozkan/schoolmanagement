<?php

namespace Haluk\School;

class School{

    protected string $name;
    protected string $description;
    protected array $faculties = [];


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setFaculty(array $faculties): self
    {
        $this->faculties[] = $faculties;
        return $this;
    }
}


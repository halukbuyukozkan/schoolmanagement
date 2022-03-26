<?php

namespace Haluk\School;

class Department{

    protected $name;
    protected $description;
    protected $type;
    protected $students = [];


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this->name;
    }
    public function getName()
    {
        return $this-> name;
    }

}

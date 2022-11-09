<?php

class Calculator
{
    public string $operator;
    public float $num1;
    public float $num2;
    public string $name;
    public function __construct($operator,  $num1,  $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function setName()
    {
        $this->name = "Calculator";
    }
    public function getName()
    {
        return $this->name;
    }
    public function getResult()
    {
        switch ($this->operator) {
            case "+":
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case '/':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
        }
    }
}




// Domaci
// Klasa kalkulator
// kalkulator ima svoje ime
// kalkulator moze da sabira, oduzima, mnozi i deli 2 broja
// kalkutor ima broj 1, broj 2, i rezultat
// kalkulator vraca rezultat samo kada pozovete getResult
// rezultat je prikazan u formatu "ime kalkulatora + rezultat"
// unit testovi za kalkulator
// sve je strogo tipizirano -> ne mozemo slova u brojeve
// hint: rezultat nece biti int
// instancirati 2 kalkulatora i napraviti racunice
// Bonus: clean code
// ne radimo na master / main branchu -> develop branch ili feature branch koji merge-ujemo u develop
// Lepsa HTML strana ++
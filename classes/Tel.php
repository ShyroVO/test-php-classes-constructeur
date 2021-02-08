<?php
class Tel extends Computer
{
    public function __construct(string $marque, string $operateur){
        parent::__construct($marque, 'Android', $operateur);
    }

}
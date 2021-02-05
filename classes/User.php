<?php
class User {
    private string $user;
    private string $pw;

    public function setOwner(User $user){
        $this->owner = $user;
    }
    
    public function getOwner(): User {
        return $this->owner;
    }

}
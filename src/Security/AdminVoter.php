<?php
// src/Security/AdminVoter.php

namespace App\Security;

use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class AdminVoter extends Voter
{   
    protected function supports($attribute, $subject) : bool
    {
        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token) : bool
    {
        return true;
    } 
}
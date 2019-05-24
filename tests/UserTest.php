<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testEmptyUser(): void
    {
        $user = new User();
        
        $email = 'test@mac.mac';
        $user->setEmail($email);
        
        $this->assertIsString($user->getFullName());
        $this->assertSame($user->getEmail(), $user->getFullName());
        $this->assertSame($email, $user->getFullName());
    }
    
    public function testFullUser(): void
    {
        $user = new User();
        
        $email = 'test@mac.mac';
        $firstName = 'Ivan';
        $middleName = 'Petrovich';
        $lastName = 'Sidorov';
        $user->setFirstName($firstName);
        $user->setMiddleName($middleName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        
        $this->assertIsString($user->getFullName());
        $this->assertSame(implode(' ', [
            $firstName,
            $middleName,
            $lastName,
        ]), $user->getFullName());
        
    }
    
    public function testUserWithoutMiddleName(): void
    {
        $user = new User();
    
        $email = 'test@mac.mac';
        $firstName = 'Ivan';
        $middleName = '';
        $lastName = 'Sidorov';
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
    
        $this->assertIsString($user->getFullName());
        $this->assertSame(implode(' ', [
            $firstName,
            $lastName,
        ]), $user->getFullName());
    
        $user = new User();
    
        $email = 'test@mac.mac';
        $firstName = 'Ivan';
        $middleName = null;
        $lastName = 'Sidorov';
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
    
        $this->assertIsString($user->getFullName());
        $this->assertSame(implode(' ', [
            $firstName,
            $lastName,
        ]), $user->getFullName());
    }
    
    public function testUserWithoutFirstName(): void
    {
        $user = new User();
    
        $email = 'test@mac.mac';
        $firstName = '';
        $middleName = 'Petrovich';
        $lastName = 'Sidorov';
        $user->setFirstName($firstName);
        $user->setMiddleName($middleName);
        $user->setLastName($lastName);
        $user->setEmail($email);
    
        $this->assertIsString($user->getFullName());
        $this->assertSame($email, $user->getFullName());
    
        $user = new User();
    
        $email = 'test@mac.mac';
        $firstName = null;
        $middleName = 'Petrovich';
        $lastName = 'Sidorov';
        $user->setFirstName($firstName);
        $user->setMiddleName($middleName);
        $user->setLastName($lastName);
        $user->setEmail($email);
    
        $this->assertIsString($user->getFullName());
        $this->assertSame($email, $user->getFullName());
    }
}

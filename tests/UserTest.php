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
}

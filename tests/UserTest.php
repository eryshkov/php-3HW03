<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSomething(): void
    {
        $user = new User();
        $this->assertIsString($user->getFullName());
        $this->assertSame($user->getEmail(), $user->getFullName());
    }
}

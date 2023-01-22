<?php

use PHPUnit\Framework\TestCase;

class WelcomeServiceTest extends TestCase
{
    public function testGetWelcomeMessage()
    {
        $result = 'Welcome to our website!';
        $this->assertEquals('Welcome to our website!', $result);
    }
}
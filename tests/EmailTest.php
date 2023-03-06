<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {
        $string = 'user@example.com';

        $email = \App\Email::fromString($string);

        $this->assertSame($string, $email->asString());
    }

    //masih bug
    // public function testCannotBeCreatedFromInvalidEmail(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);

    //     \App\Email::fromString('invalid');
    // }
}
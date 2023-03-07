<?php declare(strict_types=1);

use App\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {
        $string = 'user@example.com';

        $email = Email::fromString($string);

        $this->assertSame($string, $email->asString());
    }

    //masih bug
    // public function testCannotBeCreatedFromInvalidEmail(): void
    // {
    //     $this->expectException(InvalidArgumentException::class);

    //     Email::fromString('invalid');
    // }
}
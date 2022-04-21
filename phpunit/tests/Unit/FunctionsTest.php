<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class FunctionsTest extends TestCase
{
    public function testEmail()
    {
        $result = Email::validate('i@email.com');
        $this->assertTrue($result);

        $result = validate_email('i@@email.com');
        $this->assertFalse($result);
    }
}

<?php

use PHPUnit\Framework\TestCase;
use App\Model\User;

class UserTest extends TestCase {

    public $user;

    public function setUp() :void {
        $this->user = new User();
    }

    public function testThatWeCanGetTheFirstName() {
        
        $this->user->setFirstName('Saiduzzaman');

        $this->assertEquals($this->user->getFirstName(), 'Saiduzzaman');
    }

    public function testThatWeCanGetTheLastName() {

        $this->user->setLastName('Tuhin');

        $this->assertEquals($this->user->getLastName(), 'Tuhin');
    }

    public function testFullNameIsReturned() {

        $this->user->setFirstName('Saiduzzaman');

        $this->user->setLastName('Tuhin');

        $this->assertEquals($this->user->getFullName(), 'Saiduzzaman Tuhin');
    }

    public function testFirstNameandLastNameisTrimmed() {

        $this->user->setFirstName('  Saiduzzaman   ');
        $this->user->setLastName('Tuhin    ');

        $this->assertEquals($this->user->getFullName(), 'Saiduzzaman Tuhin');
    }

    public function testThatWeCanGetTheEmailAddress() {

        $this->user->setEmail('tuhin@coderex.co');

        $this->assertEquals($this->user->getEmail(), 'tuhin@coderex.co');
    }

    public function testGetTheCorrectEmailVariables() {

        $this->user->setFirstName('  Saiduzzaman   ');
        $this->user->setLastName('Tuhin    ');
        $this->user->setEmail('tuhin@coderex.co');

        $emailVarilables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('fullName', $emailVarilables);

        $this->assertArrayHasKey('email', $emailVarilables);

        $test = [
            'fullName' => 'Saiduzzaman Tuhin',
            'email' => 'tuhin@coderex.co'
        ];

        $this->assertEquals($emailVarilables, $test);
    }

}


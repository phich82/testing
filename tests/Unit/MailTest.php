<?php

namespace Tests\Unit;

use function get_class_methods;
use Illuminate\Support\Facades\Mail;
use Swift_Events_EventListener;
use Swift_Message;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MailTest extends TestCase
{
    protected $emails = [];

    public function setUp()
    {
        parent::setUp();
        Mail::getSwiftMailer()->registerPlugin(new TestingMailEventListener ($this));
    }

    public function testEmail()
    {
//        Mail::raw('Some string', function ($message) {
//            $message->to('foo@bar.com');
//            $message->from('bar@foo.com');
//        });

        $this->assertNotEmpty($this->emails);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testEmail()
//    {
//        Mail::raw('Some string', function ($message) {
//            $message->to('foo@bar.com');
//            $message->from('bar@foo.com');
//        });
//
//        $mock = \Mockery::mock($this->app['mailer']->getSwiftMailer());
//        $this->app['mailer']->setSwiftMailer($mock);
//
//        $mock->shouldReceive('raw')
//             ->once()
//             ->withArgs([\Mockery::on(function ($message) {
//                $this->assertEquals('My subject', $message->getSubject());
//                $this->assertSame(['foo@bar.com' => null], $message->getTo());
//                $this->assertContains('Some string', $message->getBody());
//                return true;
//             }), \Mockery::any()]);
//    }

//    public function testEmail2()
//    {
//        $mailer = $this->app->make('mailer');
//        $swiftMailer = \Mockery::mock($mailer->getSwiftMailer());
//        $mailer->setSwiftMailer($swiftMailer);
//        $swiftMailer->shouldReceive('send')->once()->withArgs(function (\Swift_Message $mail) {
//            return array_key_exists('foo@bar.net', $mail->getTo());
//        });
//    }

    public function addEmail(Swift_Message $email)
    {
        $this->emails[] = $email;
    }
}

class TestingMailEventListener implements Swift_Events_EventListener
{
    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function beforeSendPerformed($event)
    {
        $this->test->addEmail($event->getMessage());
    }
}

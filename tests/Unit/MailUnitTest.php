<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTestCases;
class MailUnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testFrom() {
        $mail_test = new MailTestCases();
        $mail_test->from('sender@mail.com');
        $this->assertTrue($mail_test->hasFrom('sender@mail.com'));
    }

    public function testTo() {
        $mail_test = new MailTestCases();
        $mail_test->to('client@mail.com');
        $this->assertTrue($mail_test->hasTo('client@mail.com'));
    }

    public function testCc() {
        $mail_test = new MailTestCases();
        $mail_test->cc('cc@mail.com');
        $this->assertTrue($mail_test->hasCc('cc@mail.com'));
    }

    public function testBcc() {
        $mail_test = new MailTestCases();
        $mail_test->bcc('bcc@mail.com');
        $this->assertTrue($mail_test->hasBcc('bcc@mail.com'));
    }

    public function testReplyTo() {
        $mail_test = new MailTestCases();
        $mail_test->replyTo('replyto@mail.com');
        $this->assertTrue($mail_test->hasReplyTo('replyto@mail.com'));
    }

}
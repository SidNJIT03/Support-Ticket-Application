<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
class MailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMail()
    {
        Mail::fake();

        $user  = factory(User::class)->make();
        $user->save();

        Mail::to($user->email)->send(new Mailable());
        Mail::assertSent(Mailable::class);
    }
}
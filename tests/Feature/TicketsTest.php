<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Ticket;
use App\User;


class TicketsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTicketCreation()
    {
        $user = factory(\App\User::class)->make();
        $user->save();
        $this->assertTrue($user->save());

        $usr = factory(\App\Ticket::class)->make();
        $this->assertTrue($usr->save());

    }


}

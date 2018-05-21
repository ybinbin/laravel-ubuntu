<?php

namespace App\Listeners;

use App\Events\UserSignUp;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleUserSignUp
{
    public $filesystem;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($filesystem=" hello ")
    {
        $this->filesystem = $filesystem;
    }

    /**
     * Handle the event.
     *
     * @param  UserSignUp  $event
     * @return void
     */
    public function handle(UserSignUp $event)
    {
        var_dump($event->user->name.' sign up '.$this->filesystem);
    }
}

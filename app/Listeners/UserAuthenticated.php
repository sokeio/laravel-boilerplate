<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Auth\Events\Authenticated;

class UserAuthenticated
{
    private $request;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (config('fast.checkin_out', 1)) {
            $now = Carbon::now();
            if (!$this->request->session()->has(config('fast.key_checkin'))) {
                $this->request->user()->checkin();
                $this->request->user()->checkout();
                $this->request->session()->put(config('fast.key_checkin'),  $now->copy());
                $this->request->session()->put(config('fast.key_checkout'),  $now->copy());
            }
            $nextTimeLogout = $now->copy()->subMinutes(config('fast.time_checkout'));
            if (($this->request->session()->get(config('fast.key_checkout'))) < $nextTimeLogout) {
                $this->request->user()->checkout();
                $this->request->session()->put(config('fast.key_checkout'),  $now->copy());
            }
        }
    }
}

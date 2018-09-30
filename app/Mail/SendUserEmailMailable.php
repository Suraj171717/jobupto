<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\Requests;
use App\Http\Controllers\Controller;


class SendUserEmailMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

	public $data;
	 
    public function __construct($data)
    {
        $this->data = $data;
    }
     
    public function build()
    {
		return $this->view('emails.usernoti')->with(['data' => $this->data]);
	}
}

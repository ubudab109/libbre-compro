<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJob;
use App\Mail\GetInTouchMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    private $config;

    public function __construct()
    {
        $this->config = config('mail.default');

    }
    
    public function sendGetInTouchEmail(Request $requests)
    {
        $validator = Validator::make($requests->all(), [
            'fullname' => ['required'],
            'email'    => ['required'],
            'message'  => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()->all(),
            ], 422);
        }
        if (!empty($this->config)) {
            $to = config('mail.mailers.'. $this->config. '.username');
            $data = [
                'from_email' => $requests->email,
                'to_email'   => $to,
                'fullname' => $requests->fullname,
                'email' => $requests->email,
                'message' => $requests->message,
            ];
            EmailJob::dispatch(GetInTouchMail::class, $data);
            try {
                DB::table('emails')->insert([
                    'type' => 'Get In Touch',
                    'from_name' => $requests->fullname,
                    'to_name' => $to,
                    'from_email' => $requests->email,
                    'to_email' => $to,
                    'message' => $requests->message,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                DB::commit();
            } catch (\Exception $err) {
                Log::info($err->getMessage());
                DB::rollBack();
            } 
            return response()->json(['message' => 'Mail Send Successfully']);
        } else {
            return response()->json(['message' => 'Failed to send the email. Please contact directly to email on contact']);
        }
    }
}

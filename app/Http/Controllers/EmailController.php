<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJob;
use App\Mail\GetInTouchMail;
use App\Mail\SendCompanyProfileMail;
use App\Models\CompanySetting;
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

    public function sendGetInTouchEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            $to = config('mail.mailers.' . $this->config . '.username');
            $data = [
                'from_email' => $request->email,
                'to_email'   => $to,
                'fullname' => $request->fullname,
                'email' => $request->email,
                'message' => $request->message,
            ];
            EmailJob::dispatch(GetInTouchMail::class, $data);
            try {
                DB::table('emails')->insert([
                    'type' => 'Get In Touch',
                    'from_name' => $request->fullname,
                    'to_name' => $to,
                    'from_email' => $request->email,
                    'to_email' => $to,
                    'message' => $request->message,
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

    public function sendCompanyProfileDocument(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'messages' => $validator->errors()->all(),
            ], 422);
        }

        if (!empty($this->config)) {
            $from = config('mail.mailers.' . $this->config . '.username');
            $setting = CompanySetting::where('slug', 'compro_file')->first();
            $data = [
                'from_email' => $from,
                'to_email'   => $request->email,
                'email' => $request->email,
                'message' => $request->message,
                'file' => $setting->value,
            ];
            try {
                DB::table('emails')->insert([
                    'type' => 'Company Profile Document',
                    'from_name' => $from,
                    'to_name' => $request->email,
                    'from_email' => $from,
                    'to_email' => $request->email,
                    'message' => 'Downloaded Company Profile Document',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                // EmailJob::dispatch(SendCompanyProfileMail::class, $data);

                DB::commit();
            } catch (\Exception $err) {
                Log::info($err->getMessage());
                DB::rollBack();
            }
            return response()->json(['message' => 'Thank you for your interest in our Company Profile. The document is sending. Check Your email']);
        } else {
            return response()->json(['message' => 'Failed to send the email. Please contact directly to email on contact']);
        }
    }
}

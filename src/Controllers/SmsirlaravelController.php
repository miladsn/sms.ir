<?php

namespace Damoongasht\Smsir\Controllers;

use Illuminate\Routing\Controller;
use Damoongasht\Smsir\models\SmsirlaravelLog;
use Damoongasht\Smsir\Smsirlaravel;

class SmsirlaravelController extends Controller
{
	public function index()
	{
		return view('smsirlaravel::index', [
			'credit' => Smsirlaravel::credit(),
			'logs' => SmsirlaravelLog::orderBy('id', 'DESC')->paginate(config('smsirlaravel.in-page'))
		]);
	}

	public function destroy($smsirlaravelLog)
	{
		SmsirlaravelLog::where('id', $smsirlaravelLog)->delete();

		return back();
	}
}

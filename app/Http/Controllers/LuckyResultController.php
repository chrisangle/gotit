<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuckyResultController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ], [
            'code.required' => 'Nhập mã dự thưởng',
        ]);

        $code = $request->input('code');
        $code = strtolower($code);

        // Find code in Employee model
        $employee = Employee::where(DB::raw('lower(lottery_code)'), strtolower($code))
            ->where('is_lucky', false)
            ->first();
        dd($employee);
    }
}

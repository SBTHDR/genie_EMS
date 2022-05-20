<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // $employees = User::where('is_owner', 0)->get();
        return view('report.index');
    }

    public function sortByDate(Request $request)
    {
        $date = new DateTime($request->date);
        $formatDate = $date->format('d F Y');

        $employees = Employee::where('date', $formatDate)->latest()->get();
        return view('report.index', compact('employees'));
    }

    public function show(Request $request, $user_id)
    {
        $employee = Employee::find($user_id);
        $employees = Employee::where('user_id', $employee->user_id)->latest()->get();
        return view('report.show', compact('employees', 'employee'));
    }
}

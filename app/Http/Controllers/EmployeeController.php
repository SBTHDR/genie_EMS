<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Employee;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class EmployeeController extends Controller
{
    public function index()
    {
        $currentDate = date("j F, Y");
        return view('employee.index', compact('currentDate'));
    }

    public function checkIn(Request $request, FlasherInterface $flasher)
    {
        $date = new DateTime();
        $formatDate = $date->format('g:i a');
        $currentDate = $date->format('d F Y');
        
        Employee::create([
            // 'checkin' => date("F j, Y, g:i a")
            // 'checkin' => Carbon::now()->toDateTimeString(),
            'user_id' => auth()->user()->id,
            'date' => $currentDate,
            'checkin' => $formatDate,
        ]);

        $flasher->addSuccess('Checkin Successfully!');
        return redirect()->route('employee.check-out-view');
    }

    public function checkOutView()
    {
        $currentDate = date("j F, Y");
        return view('employee.checkout', compact('currentDate'));
    }

    public function checkOut(Request $request, FlasherInterface $flasher)
    {
        $date = new DateTime();
        $formatDate = $date->format('g:i a');
        $currentDate = $date->format('d F Y');

        Employee::create([
            'user_id' => auth()->user()->id,
            'date' => $currentDate,
            'checkout' => $formatDate,
            'office_hours' => '10 Hours' // Need to implement using  pivot table
        ]);

        $flasher->addSuccess('Checkout Successfully!');
        return redirect('/');
    }
}

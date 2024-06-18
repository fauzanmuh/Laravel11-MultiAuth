<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('user.calculator');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operation' => 'required|string',
        ]);

        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operation = $request->input('operation');

        $result = 0;

        switch ($operation) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    return redirect('/calculator')->withErrors(['number2' => 'Division by zero is not allowed.']);
                }
                break;
            default:
                return redirect('/calculator')->withErrors(['operation' => 'Invalid operation selected.']);
        }

        return view('user.calculator', compact('result'));
    }
}

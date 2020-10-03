<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExExpenseController extends Controller
{
    public function displayform()
    {
        return view('expenseform');
    }
    public function save(Request $request)
    {
            $expense_name = $request->input('expense_name');
            $expense_price = $request->input('expense_price');
            $expense_purchase = $request->input('expense_purchase');
            $expense_location = $request->input('expense_location');

            DB::insert('insert into expense (expense_name,expense_price,expense_purchase,expense_location) values (?,?,?,?)'
            ,[$expense_name, $expense_price, $expense_purchase ,$expense_location]);

            return redirect('expense')->with('success','Expense Added');
    }
}

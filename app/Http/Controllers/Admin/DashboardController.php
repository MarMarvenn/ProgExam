<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
    return view('admin.register')->with('users',$users);
    } 
    
    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request  ->input('username');
        $users->usertype = $request  ->input('usertype');
        $users->update();
        
        return redirect('/role-register')->with('status',"Done. Your data has been Updated.");
    }

    public function registerdelete($id)
    {
        $users = User::findOrFail($id); 
        $users->delete();

        return redirect('/role-register')->with('status',"Done. Your data has been Deleted.");
    }

    
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
 
    public function expenseadd()
    {
    return view('admin.expenseadd');
    }


        public function viewforms()
        {
            return view('expenseshow');
        }

        public function index()
        {
            $expense = DB::select('select * from expense');
            return view('expenseshow', ['expense'=>$expense]);
        }

        public function edit_function($id)
        {
            $expense = DB::select('select * from expense where id = ?', [$id]);
            return view('expenseedits',['expense'=>$expense]);
        }

        public function update_function(Request $request,$id)
        {
            $expense_name = $request->input('expense_name');
            $expense_price = $request->input('expense_price');
            $expense_purchase = $request->input('expense_purchase');

            DB::update('update expense set expense_name = ?, expense_price = ?, expense_purchase = ? where id = ?'
            , [ $expense_name, $expense_price, $expense_purchase, $id]);

            return redirect('expenseviews')->with('success','Expense Updated');
        }

         public function delete_function($id)
         {
            DB::delete('delete from expense where id = ?', [$id]);
            return redirect('expenseviews')->with('success','Expense Deleted');
         }


         public function newviewforms()
        { 
            return view('userview');
        }

        public function newindex()
        {
            $expense = DB::select('select * from expense');
            return view('userview', ['expense'=>$expense]);
        }

        public function newestviewforms()
        { 
            return view('dashshow');
        }

        public function newestnewindex()
        {
            $expense = DB::select('select * from expense');
            return view('dashshow', ['expense'=>$expense]);
        }

        public function enewestviewforms()
        { 
            return view('dashshow');
        }

        public function enewestnewindex()
        {
            $expense = DB::select('select * from expense');
            return view('dashshow', ['expense'=>$expense]);
        }

}  

 
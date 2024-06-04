<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\_customer;

class formController extends Controller
{
    public function Index(){
        $url = url('/reg');
        $title = "Customer Form";
        $data = compact('url','title');
        return view('form')->with($data);
    }

    public function register(request $request){
        $customer = new _customer;
        $customer->name = $request->input('name');
        $customer->grade = $request->input('grade');
        $customer->save();
        return redirect('/reg/view');
    }
    public function view()
    {
       
        $customers = _customer::all();
        // dd($customers);
        return view('view', compact('customers'));
        
    }

    // custom helper function example
    // public function myMethod() {
        // $newDateFormat = changeDateFormate(date('Y-m-d'), '/d/Y');
        // $fullPath = productImagePath('1.jpg');
    // }

    public function edit($id){
        $customer = _customer::find($id);
        if(is_null($customer)){
            // not found
            return redirect('view');
        }else{
            // found
            $url = url('reg/view/update') . '/' . $id;
            $title = "Update Customer Form";
            $data = compact('customer','url','title');
            return view('form')->with($data);
        }
    }

    public function update($id , request $request){
        $customer = _customer::find($id);
        $customer->name = $request['name'];
        $customer->grade = $request['grade'];
        $customer->save();
        return redirect('/reg/view');
    }

    public function destroy($id)
{
    $customer = _customer::find($id);
    if (!is_null($customer)) {
        $customer->delete();
    }
    return redirect('/reg/view')->with('success', 'Customer deleted successfully.');
}

}

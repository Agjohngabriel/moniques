<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Info;
class bookingController extends Controller
{
    public function booking(Request $request)
    {
        $book = $request->session()->get('booking');
        return view('form.book', compact('book'));
    }
    public function Postbooking(Request $request)
    {
        $validatedData = $request->validate([
            'departure_date' => 'required',
            'bus_type' => 'required',
            'adults' => 'required',
        ]);
        if (empty($request->session()->get('book'))){
            $book = new Booking();
            $book->fill($validatedData);
            $request->session()->put('book', $book);
        }else{
            $book = $request->session()->get('book');
            $book->save($validatedData);
            $request->session()->put('book', $book);
        }
        return redirect('/info');
    }
    public function info(Request $request)
    {
        $book = $request->session()->get('book');
        return view ('form.info', compact('book'));
    }
    public function Postinfo(Request $request)
    {
        $validatedData = $request->validate([
            'terminal' => 'required'
        ]);
        if (empty($request->session()->get('book'))){
            $book = new Booking();
            $book->save($validatedData);
            $request->session()->put('book', $book);
        }else{
            $book = $request->session()->get('book');
            $book->save($validatedData);
            $request->session()->put('book', $book);
        }
        return redirect('/details');
    }
    public function detail(Request $request)
    {
        $book = $request->session()->get('book');
        return view('form.details', compact('book'));
    }
    public function Postdetail(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'

        ]);
        if (empty($request->session()->get('book'))){
            $book = new Booking();
            $book->save($validatedData);
            $request->session()->put('book', $book);
        }else{
            $book = $request->session()->get('book');
            $book->save($validatedData);
            $request->session()->put('book', $book);
        }
        return redirect('/review');
    }
    public function store(Request $request)
    {
        $book = $request->session()->get('book');
        return $book;
    }

}

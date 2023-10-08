<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Destination;
use App\Models\Book;
use App\Models\Booked;
use App\Models\Packages;

class Homecontroller extends Controller
{

    public function index(){
        $destination=destination::all();
        return view('home.userpage',compact('destination'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){

            $total_booked=booked::all()->count();
            $total_customer=user::all()->count();
            $bookings=booked::all();

            $total_revenue=0;

            foreach($bookings as $booked){

            $total_revenue=$total_revenue + $booked->total_cost;

        }

            return view('admin.home',compact('total_booked','total_customer','total_revenue'));
        }
        else{

            $destination=destination::all();
        return view('home.userpage',compact('destination'));
        }

    }

    public function aboutus(){
        return view('home.aboutus');
    }

    public function destination(){
        $packages=packages:: all();
        return view('home.destination',compact('packages'));
    }


    public function detail($id){
        $destination=destination::find($id);
        return view('home.detail',compact('destination'));
    }

    public function book($id)
    {
        if (Auth::id()){
            $user=Auth::user();
            $destination=destination::find($id);
        return view('home.book',compact('user','destination'))->with('message','Booking successful, we will contact soon.');
        }


        else
        {
            return redirect('login');
        }



    }




    public function add_book(Request $request,$id){
        if (Auth::id()){
        $user=Auth::user();
        $destination=destination::find($id);
        $book=new book;
        $book->full_name=$user->name;
        $book->email=$user->email;
        $book->phone=$user->phone;
        $book->address=$user->address;
        $book->destination=$destination->destination;
        $book->guests=$request->guests;
        $book->arrivals='2023-12-09';
        $book->leaving='2023-12-20';
        $book->total_cost=$destination->discount_amount * $request->guests;

        $book->user_id=$user->id;


        $book->save();

        return view('home.book',compact('book','user','destination'));
        }

    }



    public function show_book(){
       if (Auth::id()){
        $id=Auth::user()->id;
        $book=book::where ('user_id','=',$id)->get();

        return view('home.show_book',compact('book'));


       }

    }

    public function delete($id){
        $data=book::find($id);
        $data->delete();
        return redirect()->back()->with('message','Deleted successfully');
    }

    public function cash_delivery(){

        $user=Auth::user();
        $userid=$user->id;

        $bookdata=book::where('user_id','=',$userid)->get();

        foreach($bookdata as $data)
        {
            $booked=new booked;
            $booked->name=$data->full_name;
            $booked->address=$data->address;
            $booked->phone_no=$data->phone;
            $booked->destination=$data->destination;
            $booked->guests=$data->guests;
            $booked->arrivals =$data->arrivals;
            $booked->leaving =$data->leaving;
            $booked->total_cost =$data->total_cost;
            $booked->payment_status='cash';

            $booked->save();

        }


        return redirect('/');
    }




}

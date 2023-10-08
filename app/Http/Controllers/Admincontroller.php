<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Book;
use App\Models\Booked;
use App\MOdels\Packages;

class Admincontroller extends Controller
{
    //
    public function view_category(){
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function category(Request $request){
        $data=new category;
        $data->destination_name=$request->category;

        $data->save();
        return redirect()->back()->with('message','category added successfully');
    }

    public function delete_category($id){
      $data=category::find($id);
      $data->delete();
      return redirect()->back()->with('message','added destination deleted successfully');

    }
    public function view_destination(){
        return view('admin.destination');
    }

    public function add_destination(Request $request){
        $destination=new destination;
        $destination->destination=$request->destination;
        $destination->description=$request->description;
        $destination->amount=$request->amount;
        $destination->discount_amount=$request->discount_amount;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('destination1',$imagename);
        $destination->image=$imagename;

        $destination->save();

        return redirect()->back()->with('message','destinations added successfully');

    }

    public function show_destination(){
        $destination=destination::all();
        return view('admin.showdestination',compact('destination'));
    }

    public function delete_destination( $id){
        $data=destination::find($id);
        $data->delete();

        return redirect()->back()->with('message','Deleted destination successfully');
    }

    public function update_destination($id){
        $destination=destination::find($id);
        return view('admin.updatedestination',compact('destination'));

    }

    public function update_destination_confirm(Request $request, $id){
        $destination=destination::find($id);
        $destination->destination=$request->destination;
        $destination->description=$request->description;
        $destination->amount=$request->amount;
        $destination->discount_amount=$request->discount_amount;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('destination1',$imagename);
        $destination->image=$imagename;

        $destination->save();

        return redirect()->back()->with('message','destinations updated successfully');


    }
    public function booked(){
        $booked=booked::all();
        return view('admin.booked',compact('booked'));
    }

    public function paid_status($id){
        $booked=booked::find($id);

        $booked->payment_status='paid';

        $booked->save();
        return redirect()->back();
    }

    public function search(Request $request){
      $search=$request->search;
      $booked=booked::where('name','LIKE',"%$search%")->orWhere('address','LIKE',"%search%")->get();

      return view('admin.booked',compact('booked'));


    }

    public function destinations(){
        return view('admin.destinations');
    }

    public function add_destinations(Request $request){


        $packages=new packages;
        $packages->destination=$request->destination;
        $packages->description=$request->description;
        $packages->amount=$request->amount;
        $packages->discount_amount=$request->discount_amount;

        $image=$request->image;
        $imagename = time().'.' .$image->getClientOriginalExtension();


        $request->image->move('destination1',$imagename);
        $packages->image=$imagename;

        $packages->save();




        return redirect()->back();

    }

    public function show_destinations(){


        $packages=packages::all();
        return view('admin.showdestinations',compact('packages'));
    }


    public function update_destinations($id){
        $packages=packages::find($id);
        return view('admin.updatedestinations',compact('packages'));
    }


    public function updatedestinations_confirm(Request $request, $id){
        $packages=new packages;

        $packages=$packages::find($id);
        $packages->destination=$request->destination;
        $packages->description=$request->description;
        $packages->amount=$request->amount;
        $packages->discount_amount=$request->discount_amount;

        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();


        $request->image->move('destination1',$imagename);
        $packages->image=$imagename;

        $packages->save();

        return redirect()->back();





    }

    public function delete_destinations($id){
        $packages=packages::find($id);

        $packages->delete();

        return redirect()->back();
    }


}

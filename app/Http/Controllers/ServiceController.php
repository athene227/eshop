<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Good;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a types of the actions on goods. Post / Buy
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('services.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showlist()
    {
        //
        $items = Good::all();
        return view('services.list')
            ->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('services.create')
            ->with('default_image', Good::DEFAULT_IMAGE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new Good;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->amount = $request->amount;
        $item->user_id = Auth::user()->id;
        $item->image = Good::DEFAULT_IMAGE;

        $image = $request->file('image');
        if ($image && $image != '') {
            $extension = $image->getClientOriginalExtension();
            $imageName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME).'.'.time().$extension;
            $image->move('assets/images/goods/', $imageName);
            $item->image = $imageName;
        }
        $item->save();
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Good::find($id);
        return view('services.show')
            ->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

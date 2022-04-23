<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodstuff;
use Validator;

class foodstuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $foodstuffs = foodstuff::orderBy('created_at', 'asc')->get();
        return view('toppage');
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
		// バリデーション
	    $validator = Validator::make($request->all(), [
	        'item_name'   => 'required | min:3 | max:255',
	        'item_number' => 'required | min:1 | max:3',
	        'item_amount' => 'required | max:6',
	        'published'   => 'required',
	    ]);

			// バリデーション:エラー時の処理
	    if ($validator->fails()) {
	        return redirect('/')
	            ->withInput()
	            ->withErrors($validator);
	    }
			
		// 登録処理
        $foodstuff = new foodstuff;
        $foodstuff->item_name =    $request->item_name;
        $foodstuff->item_number =  $request->item_number;
        $foodstuff->item_amount =  $request->item_amount;
        $foodstuff->published =    $request->published;
        $foodstuff->save();
        return redirect('/');
    }

   
    public function show($id)
    {
        $post = Foodstuff::find($id);
        return view('toppage')->with('foodstuff', $foodstuff);
    }

    // PostをFoodstuffsに変更。posts.show→toppage.showに変更

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(foodstuff $foodstuff)
    {
        return view('foodstuffsedit', ['foodstuff' => $foodstuff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		// バリデーション
		$validator = Validator::make($request->all(), [
		    'id' => 'required', // storeに対しての追加分
		    'item_name' => 'required|min:3|max:255',
		    'item_number' => 'required|min:1|max:3',
		    'item_amount' => 'required|max:6',
		    'published' => 'required',
		]);

		// バリデーション:エラー
		if ($validator->fails()) {
		    return redirect('/foodstuffsedit/'.$request->id)
		        ->withInput()
		        ->withErrors($validator);
		}

        $foodstuff = foodstuff::find($request->id);
        $foodstuff->item_name =    $request->item_name;
        $foodstuff->item_number =  $request->item_number;
        $foodstuff->item_amount =  $request->item_amount;
        $foodstuff->published =    $request->published;
        $foodstuff->save(); 
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(foodstuff $foodstuff)
    {
        $foodstuff->delete();
        return redirect('/');
    }
}
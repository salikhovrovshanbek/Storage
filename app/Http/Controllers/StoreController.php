<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
//        $posts=Store::query()->orderBy("created_at","DESC")->limit(3)->get();//or we can only Post::orderBy(....
//        return view('Welcome',[
//            "posts"=>$posts,
//        ]);
        $data['stores'] = Store::orderBy('id','desc')->paginate(5);
        return view('stores.index', $data);
    }


    public function create()
    {
        return view('store.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Store $store)
    {
        return view('store.show');
    }
    public function edit(Store $store)
    {
        //
    }

    public function update(Request $request, Store $store)
    {
        $request->validate([

        ]);

        $store->update($request->all());

        return redirect()->route('store.index')
            ->with('success','Store updated successfully');
    }

    public function destroy(Store $store)
    {
        $store->delete();

        return redirect()->route('store.index')
            ->with('success','Store deleted successfully');
    }
}

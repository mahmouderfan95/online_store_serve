<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\langugesRequest;
use App\Models\language;

class langugesController extends Controller
{
    public function index(){
        $languges = language::Selection()->paginate(PAGINATION_COUNT);
        return view('admin.languges.index',compact('languges'));
    }
    public function create(){
        return view('admin.languges.create');
    }
    public function store(langugesRequest $request){
        $lang_data = $request->all();
        $languges = language::create($lang_data);
        return redirect()->route('languges.index');
    }
    public function edit($id){
        $languges = language::find($id);
        if(! $languges){
            return redirect()->route('languges.index');
        }
        return view('admin.languges.edit',compact('languges'));
    }
    public function update($id,langugesRequest $request){
        $lang_data = $request->all();
        $languges = language::find($id);
        if(! $languges){
            return redirect()->route('languges.edit',$id);
        }
        if(! $request->has('active'))
        $request->request->add(['active'=>0]);
        $languges->update($lang_data);
        return redirect()->route('languges.index');

    }

    public function destroy($id){
        $languges = language::find($id);
        if(! $languges){
            return redirect()->route('languges.index',$id);
        }
        $languges->delete();
        return redirect()->route('languges.index');
    }
}

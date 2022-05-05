<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends = [
      'getParentsTree'
    ];

    public static function getParentsTree($category, $title){
        if($category->parentId == 0)
            return $title;
        $parent = Category::find($category->parentId);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent, $title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::all();
        return view('admin.category.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.category.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new category();
        if($request->parentId == 0)
            $data->parentId=null;
        else
            $data->parentId=$request->parentId;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/category/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(category $categories, $id)
    {
        $data=category::find($id);
        return view('admin.category.show',[
            'data' => $data,
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(category $categories, $id)
    {
        $data=category::find($id);
        $allCategories = Category::all();
        return view('admin.category.edit',[
            'data' => $data,
            'allCategories' => $allCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $categories, $id)
    {
        $updatedAt = Carbon::now()->toDateTimeString();
        $data=category::find($id);
        if($request->parentId != $data->id) {
            if ($request->parentId == 0)
                $data->parentId = null;
            else
                $data->parentId = $request->parentId;
            $data->title = $request->title;
            $data->keywords = $request->keywords;
            $data->description = $request->description;
            $data->status = $request->status;
            if ($request->file('image')) {
                $data->image = $request->file('image')->store('images');
            }
            $data->save();
            return redirect('/admin/category');
        }
        return null;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $categories, $id)
    {
        $data=category::find($id);
        if($data->image && Storage::disk('public')->exists($data->image))
            Storage::delete($data->image);
        $data->delete();
        return redirect('/admin/category');
    }
}

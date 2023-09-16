<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    private $_request = "";
    private $_modal   = "";

    public function __construct(Request $request, Post $modal)
    {
        $this->_request = $request;
        $this->_modal   = $modal;
    }



    public function index()
    {
        $data = $this->get_all($this->_modal);
        return view('welcome', compact('data'));
    }

    public function store()
    {
        $data = $this->_request->only('name', 'password', 'image', 'title', 'description');
        $imagename = time() . '.' . $this->_request->file('image')->getClientOriginalExtension();
        $data['image']->move(public_path('blog', $imagename));

        $this->add($this->_modal, $data);
        return redirect()->back();
    }

    public function edit($id)
    {

        $data =  $this->get_single_record($this->_modal, 'id', $id);
        return view('edit', compact('data'));
    }

    public function update($id)
    {
        $newdata = $this->_request->only('title', 'description');
        $this->get_single_record($this->_modal, 'id', $id)->update($newdata);
        return redirect('/');
    }

    public function destroy($id)
    {
        $this->delete($this->_modal, $id);
        return redirect()->back();
    }
}

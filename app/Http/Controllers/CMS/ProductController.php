<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Storage, Redirect;

class ProductController extends Controller
{
    protected $request, $product;

    public function __construct(Request $request,
                                Product $product)
    {
        $this->request = $request;
        $this->product = $product;
    }

    public function index()
    {
        return view('cms.pages.products')->with([
            'data' => $this->product->all()
        ]);
    }

    public function add()
    {
        return view('cms.pages.products_add');
    }

    public function create()
    { 
        $this->request->merge([
            'image1' => $this->_upload($this->request->file1),
            'image2' => $this->_upload($this->request->file2),
            'image3' => $this->_upload($this->request->file3)
        ]);
        
        $this->product->create(
            $this->request->except('_token')
        );

        return Redirect::route('cms.products');
    } 

    public function _upload($file)
    {
        return Storage::disk('public')->putFileAs(
            'product',  
            $file, 
            $this->_createFilename( 
                $file->extension()
            )
        );
    }

    public function _createFilename($ext)
    {
        return rand(11111,99999) .'_'. strtotime(date('Y-m-d')) .'.'. $ext;
    }
}

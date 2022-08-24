<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categoryRepo;

    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            $categories = $this->categoryRepo->getAll();
    
            return response()->json(["success" => true, "categories" => $categories]);

        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $data = $request->all();

            $request->validate([
                "name" => "required",
            ]);
        
            $category = $this->categoryRepo->createWithSlug($data);

            return response()->json(["success" => true, "message" => "Add Category successful"]);

        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        try{

            $category = $this->categoryRepo->findBySlug($slug);
    
            return response()->json(["success"=> true, "category" => $category]);

        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        try{

            $data = $request->all();
    
            $request->validate([
                "name" => "required",
            ]);

            $category = $this->categoryRepo->updateBySlug($slug, $data);

            return response()->json(["success"=> true, "message" => "Update category successful"]);
            
        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        try{
            
            $category = $this->categoryRepo->deleteBySlug($slug);
            
            return response()->json(["success"=> true, "message" => "Delete category successful"]);
                
        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }
}

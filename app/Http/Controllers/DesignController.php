<?php

namespace App\Http\Controllers;

use App\Repositories\Design\DesignRepositoryInterface;
use Illuminate\Http\Request;

class DesignController extends Controller
{

    protected $designRepo;

    public function __construct(DesignRepositoryInterface $designRepo)
    {
        $this->designRepo = $designRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            $designs = $this->designRepo->getAll();
    
            return response()->json(["success" => true, "designs" => $designs]);

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
        
            $design = $this->designRepo->createWithSlug($data);

            return response()->json(["success" => true, "message" => "Add Design successful"]);

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

            $design = $this->designRepo->findBySlug($slug);
    
            return response()->json(["success"=> true, "design" => $design]);

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

            $design = $this->designRepo->updateBySlug($slug, $data);

            return response()->json(["success"=> true, "message" => "Update design successful"]);
            
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
            
            $design = $this->designRepo->deleteBySlug($slug);
            
            return response()->json(["success"=> true, "message" => "Delete design successful"]);
                
        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    protected $customerRepo;

    public function __construct(CustomerRepositoryInterface $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            $customers = $this->customerRepo->getAll();
    
            return response()->json(["success" => true, "customers" => $customers]);

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
                "email" => "email"
            ]);
        
            $customer = $this->customerRepo->create($data);

            return response()->json(["success" => true, "message" => "Add Customer successful"]);

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
    public function show($id)
    {
        try{

            $customer = $this->customerRepo->find($id);
    
            return response()->json(["success"=> true, "customer" => $customer]);

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
    public function update(Request $request, $id)
    {
        try{

            $data = $request->all();
    
            $request->validate([
                "name" => "required",
                "email" => "email"
            ]);
    
            $customer = $this->customerRepo->update($id, $data);
    
            return response()->json(["success"=> true, "message" => "Update customer successful"]);

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
    public function destroy($id)
    {
        try{
            
            $this->customerRepo->delete($id);
                
            return response()->json(["success"=> true, "message" => "Delete customer successful"]);

        }catch(Exception $e){

            echo $e;
            
            return response()->json(["success" => false, "message" => "Internal server error"]);
        }
    }
}

<?php

namespace App\Http\Controllers\backend\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\Category\CategoryService;

class categoryController extends Controller
{
    private $categoryService;
    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }
    public function addCategory(Request $request)
    {

        try {
            
            if (!$request->has("name")) {
                return response()->json([
                    "status" => "failed",
                    "msg" => "Something went wrong."
                ]);
            }
            
            $category = $this->categoryService->addCategory($request);
            if (!$category) {
                return response()->json([
                    "status" => "failed",
                    "msg" => "Something added failed."
                ]);
            }
            return response()->json([
                "status" => "success",
                "msg" => "Category added success.",
                
            ]);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

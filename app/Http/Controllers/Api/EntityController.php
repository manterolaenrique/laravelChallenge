<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; 

class EntityController extends Controller
{
    public function index($categoryName)
    {
        $category = Category::with(['entities'])->where('category', $categoryName)->first();

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found',
            ], 404);
        }

        $entities = $category->entities->map(function ($entity) {
            $categoryData = $entity->category ? [
                'id' => $entity->category->id,
                'category' => $entity->category->category,
            ] : null;

            return [
                'api' => $entity->api,
                'description' => $entity->description,
                'link' => $entity->link,
                'category' => $categoryData,
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $entities,
        ]);
    }

}

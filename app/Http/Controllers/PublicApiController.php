<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Entity;
use App\Models\Category;
use App\Http\Controllers\Controller;


class PublicApiController extends Controller
{
    public function fetchApis()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.publicapis.org/entries');
        $data = json_decode($response->getBody()->getContents(), true);

        $categories = ['Animals', 'Security'];

        foreach ($data['entries'] as $entry) {
            if (in_array($entry['Category'], $categories)) {
                $category = Category::firstOrCreate(['category' => $entry['Category']]);
                
                Entity::create([
                    'api' => $entry['API'],
                    'description' => $entry['Description'],
                    'link' => $entry['Link'],
                    'category_id' => $category->id,
                ]);
            }
        }

        return response()->json(['message' => 'Entities imported successfully!']);
    }

}

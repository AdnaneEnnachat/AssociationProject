<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class newController extends Controller
{
    public function PostNews(Request $data){
        $validatedData = $data->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'content_ar' => 'nullable|max:255',
            'content_en' => 'nullable|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $title = json_encode(['title_ar'=>$data->title_ar,'title_en'=>$data->title_en]);
        $content = json_encode(['content_ar'=>$data->content_ar,'content_en'=>$data->content_en]);
        if ($data->hasFile('image')) {
            $imageName = time() .'.'.$data->file('image')->getClientOriginalExtension();
            $data->file('image')->move(public_path('news'),$imageName);
            $path = 'news/'.$imageName;
        }
        News::create(['title'=>$title,'post'=>$content,'image'=>$path]);
        return 'add succ';
    }
}

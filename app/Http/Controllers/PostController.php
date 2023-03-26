<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video    ;
class PostController extends Controller
{
    //

    public function index(){
        $post = new Post;
        $post->title = 'First post';
        $post->content = 'This is my first post';
        $post->save();

        $video = new Video;
        $video->title = 'First video';
        $video->url = 'https://www.youtube.com/watch?v=ABC123';
        $video->save();
    }

}

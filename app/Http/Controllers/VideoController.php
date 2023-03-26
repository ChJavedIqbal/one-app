<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;
use App\Models\Post;
class VideoController extends Controller
{
    //
    public function index(){
        $post = Video::find(1);
         echo $post->comment;



    }
}

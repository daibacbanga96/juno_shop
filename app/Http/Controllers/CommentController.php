<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentModel;
class CommentController extends Controller
{
    //
    public function getComment(){
        $comment=CommentModel::paginate(5);
        return view('backend.comment',compact('comment'));
    }
}

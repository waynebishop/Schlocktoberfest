<?php

	namespace App\Controllers;

	use App\Models\Comment;
	use App\Models\Movies;
	use App\Views\SingleMovieView;


	class CommentsController extends Controller
	{

		public function create(){
			
			$input = $_POST;

			$input['user_id'] = static::$auth->user()->id;

			$newcomment = new Comment($input);
			
			if(! $newcomment->isValid()){
				$_SESSION['comment.form'] = $newcomment;
				header("Location: ./?page=movie&id=" . $newcomment->movie_id);
				exit();
			}

			$newcomment->save();
			header("Location: ./?page=movie&id=" . $newcomment->movie_id . "#comment-" . $newcomment->id);
			
			
		}

		public function getFormData($id = null){
			
		}
	}
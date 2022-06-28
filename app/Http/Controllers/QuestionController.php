<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{
    //
    public function index(){
          $technical = Question::where('category', 'technical')->get();
          $logical = Question::where('category', 'logical')->get();
          $aptitude = Question::where('category', 'aptitude')->get();
         return view('welcome', ['technical'=>$technical,'logical'=>$logical,'aptitude'=>$aptitude]);
    }

   
    public function insert(){

        $newWQuestion = new Question ();
        $newWQuestion->question= request('question');
        $newWQuestion->option1= request('option1');
        $newWQuestion->option2= request('option2');
        $newWQuestion->option3= request('option3');
        $newWQuestion->option4= request('option4');
        $newWQuestion->category = request('category');
        $newWQuestion->save();

        return response()->json(['success'=>'Data has been added successfully']);

    }

    public function destroy($id){

        $findQuestion = Question::findorFail($id)->delete();

        return response()->json(['success'=>'Data has been deleted successfully']);
    }

    public function update($id){
        $updateQuestion = Question::findOrFail($id);
        $updateQuestion->question= request('question');
        $updateQuestion->option1= request('option1');
        $updateQuestion->option2= request('option2');
        $updateQuestion->option3= request('option3');
        $updateQuestion->option4= request('option4');
        $updateQuestion->category = request('category');

        $updateQuestion->update();


        return response()->json(['success'=>'Data Upadated successfully']);


    }
}

@extends('template.navHeader')

@section('title')
Add Question
@endsection

@section('content')
<div class="container">

    <div class="card-body">
        <h1 class="text-center text-primary"> ADD EXAM QUESTION  </h1>
        <p id="success" class="alert text-success">  </p>
        <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Question</label>
            <input type="email" class="form-control" id="question" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 1</label>
            <input type="text" class="form-control" id="option1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 2</label>
            <input type="text" class="form-control" id="option2">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 3</label>
            <input type="text" class="form-control" id="option3">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id ="category">
        <option selected>Select Category</option>
        <option value="Objective">Objective</option>
        <option value="Subjective">Subjective</option>
        <option value="Optional">Optional </option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
    </div>
    
</div>
@endsection
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>

<script>
jQuery(document).ready(function(){
            jQuery('#submit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/addQuestion') }}",
                  method: 'post',
                  data: {
                     question: jQuery('#question').val(),
                     option1: jQuery('#option1').val(),
                     option2: jQuery('#option2').val(),
                     option3: jQuery('#option3').val(),
                     category: jQuery('#category').val(),
                  },
                  success: function(result){
                    document.getElementById('success').innerHTML ="You have successfully added a question";
                  }});
               });
            });


</script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examapp
    </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<meta name="_token" content="{{csrf_token()}}" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Exam Application </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
        
      </div>
    </div>
  </div>

</nav>

<div class="container">

<div class="card-body">
<h1 class="text-center"> EXAM APPLICATION  </h1>
<!-- Button trigger modal -->
<div class="text-center"> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Question
</button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <p id="success" class="alert text-success">  </p>
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
            <label for="exampleInputPassword1" class="form-label">Option 4</label>
            <input type="text" class="form-control" id="option4">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id ="category">
        <option selected>Select Category</option>
        <option value="aptitude">aptitude</option>
        <option value="logical">logical</option>
        <option value="technical">technical </option>
        </select>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->



<h2 class="text-primary"> Technical Questions </h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Question</th>
      <th scope="col">Category</th>
      <th scope="col">Option1</th>
      <th scope="col">Option2</th>
      <th scope="col">Option3</th>
      <th scope="col">Option4</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($technical as $technicals)
     <tr>
      <th scope="row"> {{$technicals->question}}</th>
      <td>{{$technicals->category}}</td>
      <td>{{$technicals->option1}}</td>
      <td>{{$technicals->option2}}</td>
      <td>{{$technicals->option3}}</td>
      <td>{{$technicals->option4}}</td>
      <td> <a class ="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit"> EDIT </a> </td>
      <td> <button type="button" class="btn btn-danger" id="deleteQuestion" value="{{$technicals->id}}">
             Delete
</button>
<!-- Modal -->

</td>
    </tr>
     </tbody>
     <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
       
      <p id="success" class="alert text-success">  </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Question</label>
            <input type="email" class="form-control" id="Editquestion" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 1</label>
            <input type="text" class="form-control" id="Editoption1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 2</label>
            <input type="text" class="form-control" id="Editoption2">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 3</label>
            <input type="text" class="form-control" id="Editoption3">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 4</label>
            <input type="text" class="form-control" id="Editoption4">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id ="Editcategory">
        <option selected>Select Category</option>
        <option value="aptitude">aptitude</option>
        <option value="logical">logical</option>
        <option value="technical">technical </option>
        </select>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="editQuestionTechnical" value="{{$technicals->id}}">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @endforeach
</table>
<h2 class="text-primary"> Logical Questions </h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Question</th>
      <th scope="col">Category</th>
      <th scope="col">Option1</th>
      <th scope="col">Option2</th>
      <th scope="col">Option3</th>
      <th scope="col">Option4</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($logical as $logicals)
     <tr>
      <th scope="row"> {{$logicals->question}}</th>
      <td>{{$logicals->category}}</td>
      <td>{{$logicals->option1}}</td>
      <td>{{$logicals->option2}}</td>
      <td>{{$logicals->option3}}</td>
      <td>{{$logicals->option4}}</td>
      <td> <a class ="btn btn-success" data-toggle="modal" data-target="#exampleModalEditLogical" > EDIT </a> </td>
      <td> <button type="button" class="btn btn-danger" id="deleteQuestionLogical" value="{{$logicals->id}}">
             Delete
</button>
<!-- Modal -->

</td>
    </tr>
     </tbody>
     <div class="modal fade" id="exampleModalEditLogical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
       
      <p id="success" class="alert text-success">  </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Question</label>
            <input type="email" class="form-control" id="Editquestion" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 1</label>
            <input type="text" class="form-control" id="Editoption1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 2</label>
            <input type="text" class="form-control" id="Editoption2">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 3</label>
            <input type="text" class="form-control" id="Editoption3">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 4</label>
            <input type="text" class="form-control" id="Editoption4">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id ="Editcategory">
        <option selected>Select Category</option>
        <option value="aptitude">aptitude</option>
        <option value="logical">logical</option>
        <option value="technical">technical </option>
        </select>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="editQuestionLogical" value="{{$logicals->id}}">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @endforeach
</table>
<h2 class="text-primary"> Aptitude Questions </h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Question</th>
      <th scope="col">Category</th>
      <th scope="col">Option1</th>
      <th scope="col">Option2</th>
      <th scope="col">Option3</th>
      <th scope="col">Option4</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($aptitude as $aptitudes)
     <tr>
      <th scope="row"> {{$aptitudes->question}}</th>
      <td>{{$aptitudes->category}}</td>
      <td>{{$aptitudes->option1}}</td>
      <td>{{$aptitudes->option2}}</td>
      <td>{{$aptitudes->option3}}</td>
      <td>{{$aptitudes->option4}}</td>
      <td> <a class ="btn btn-success" data-toggle="modal" data-target="#exampleModalAptitude" > EDIT </a> </td>
      <td> <button type="button" class="btn btn-danger" id="deleteQuestionAptitude" value="{{$aptitudes->id}}">
           Delete
</button>
<!-- Modal -->

</td>
    </tr>
     </tbody>
     <div class="modal fade" id="exampleModalAptitude" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
       
      <p id="success" class="alert text-success">  </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Question</label>
            <input type="email" class="form-control" id="Editquestion" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 1</label>
            <input type="text" class="form-control" id="Editoption1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 2</label>
            <input type="text" class="form-control" id="Editoption2">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 3</label>
            <input type="text" class="form-control" id="Editoption3">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Option 4</label>
            <input type="text" class="form-control" id="Editoption4">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id ="Editcategory">
        <option selected>Select Category</option>
        <option value="aptitude">aptitude</option>
        <option value="logical">logical</option>
        <option value="technical">technical </option>
        </select>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="editQuestionAptitude" value="{{$aptitudes->id}}">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @endforeach
</table>
    </div>
    </div>
    
</body>

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
                     option4: jQuery('#option4').val(),
                     category: jQuery('#category').val(),
                  },
                  success: function(result){
                    document.getElementById('success').innerHTML ="You have successfully added a question";
                    location.reload();
                  }});
               });
            });


</script>
<script>
jQuery(document).ready(function(){
            jQuery('#deleteQuestion').click(function(e){
              var question_id =  jQuery('#deleteQuestion').val();
              if (confirm("Are You sure want to delete !")==true) {
                e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                
                              });
               jQuery.ajax({
                url: "{{ url('/deleteQuestion') }}"+'/'+ question_id,
                 method: 'delete',
                   success: function(result){
                    location.reload();
                   
                  }});   

              };
              
                  
               });
            });


</script>
<script>
jQuery(document).ready(function(){
            jQuery('#deleteQuestionLogical').click(function(e){
              var question_id =  jQuery('#deleteQuestionLogical').val();
              if (confirm("Are You sure want to delete !")==true) {
                e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                
                              });
               jQuery.ajax({
                url: "{{ url('/deleteQuestion') }}"+'/'+ question_id,
                 method: 'delete',
                   success: function(result){
                    location.reload();
                   
                  }});   

              };
              
                  
               });
            });


</script>
<script>
jQuery(document).ready(function(){
            jQuery('#deleteQuestionAptitude').click(function(e){
              var question_id =  jQuery('#deleteQuestionAptitude').val();
              if (confirm("Are You sure want to delete !")==true) {
                e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                
                              });
               jQuery.ajax({
                url: "{{ url('/deleteQuestion') }}"+'/'+ question_id,
                 method: 'delete',
                   success: function(result){
                    location.reload();
                   
                  }});   

              };
              
                  
               });
            });


</script>

<script>
jQuery(document).ready(function(){
            jQuery('#editQuestionTechnical').click(function(e){
              var question_id =  jQuery('#editQuestionTechnical').val();   
                    
              e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                
                              });
               jQuery.ajax({
                url: "{{ url('/editQuestion') }}"+'/'+ question_id,
                 method: 'Put',
                  data: {
                     question: jQuery('#Editquestion').val(),
                     option1: jQuery('#Editoption1').val(),
                     option2: jQuery('#Editoption2').val(),
                     option3: jQuery('#Editoption3').val(),
                     option4: jQuery('#Editoption4').val(),
                     category: jQuery('#Editcategory').val(),
                                     },
                   success: function(result){
                  location.reload();
                   
                  }});   

            
              
                  
               });
            });


</script>
<script>
jQuery(document).ready(function(){
            jQuery('#editQuestionLogical').click(function(e){
              var question_id =  jQuery('#editQuestionLogical').val();   
                    
              e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                
                              });
               jQuery.ajax({
                url: "{{ url('/editQuestion') }}"+'/'+ question_id,
                 method: 'Put',
                  data: {
                     question: jQuery('#Editquestion').val(),
                     option1: jQuery('#Editoption1').val(),
                     option2: jQuery('#Editoption2').val(),
                     option3: jQuery('#Editoption3').val(),
                     option4: jQuery('#Editoption4').val(),
                     category: jQuery('#Editcategory').val(),
                                     },
                   success: function(result){
                  location.reload();
                   
                  }});   

            
              
                  
               });
            });


</script>
<script>
jQuery(document).ready(function(){
            jQuery('#editQuestionAptitude').click(function(e){
              var question_id =  jQuery('#editQuestionAptitude').val();   
                    
              e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                
                              });
               jQuery.ajax({
                url: "{{ url('/editQuestion') }}"+'/'+ question_id,
                 method: 'Put',
                  data: {
                     question: jQuery('#Editquestion').val(),
                     option1: jQuery('#Editoption1').val(),
                     option2: jQuery('#Editoption2').val(),
                     option3: jQuery('#Editoption3').val(),
                     option4: jQuery('#Editoption4').val(),
                     category: jQuery('#Editcategory').val(),
                                     },
                   success: function(result){
                  location.reload();
                   
                  }});   

            
              
                  
               });
            });


</script>
</html>



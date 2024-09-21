@extends('layouts.main')
@push('head')
    <title>Todo List APP</title>
@endpush

@section('main-section')
   <div class="container">
       <div class="d-flex justify-content-between align-items-center my-5">
           <div class="h2">Update Todo</div>
           <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
       </div>

   
       <div class="card">
           <div class="card-body">
              <form action="{{route("todo.updateData")}}" method="POST">
                @csrf
                 <label for="name" class="form-label">Name</label>
                 <input type="text" name="name" class="form-control" value="{{$todo->name}}">
                 <label for="work" class="form-label">Work</label>
                 <input type="text" name="work" class="form-control" value="{{$todo->work}}">
                 <label for="due_date" class="form-label">Due Date</label>
                 <input type="date" name="dueDate" class="form-control" value="{{$todo->dueDate}}">
                 <input type="hidden" name="id" value="{{$todo->id}}">
                 <button class="btn btn-primary btn-lg mt-3">Update Todo</button>
              </form>
           </div>
       </div>
   </div>
@endsection
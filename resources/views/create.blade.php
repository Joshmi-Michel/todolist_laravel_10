@extends('layouts.main')
@push('head')
    <title>Todo List APP</title>
@endpush

@section('main-section')
   <div class="container">
       <div class="d-flex justify-content-between align-items-center my-5">
           <div class="h2">Add Todo</div>
           <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
       </div>
       <div class="card">
           <div class="card-body">
              <form action="{{route("todo.store")}}" method="POST">
                @csrf
                 <label for="name" class="form-label">Name</label>
                 <input type="text" name="name" class="form-control">
                    <div class="text-danger">
                        @error('name')
                            {{$message}}
                        @enderror
                    </div>
                 <label for="work" class="form-label">Work</label>
                 <input type="text" name="work" class="form-control">
                    <div class="text-danger">
                        @error('work')
                            {{$message}}
                        @enderror
                    </div>
                 <label for="due_date" class="form-label">Due Date</label>
                 <input type="date" name="dueDate" class="form-control">
                    <div class="text-danger">
                        @error('dueDate')
                            {{$message}}
                        @enderror
                    </div>
                 <button class="btn btn-primary btn-lg mt-3">Add Todo</button>
              </form>
           </div>
       </div>
   </div>
@endsection
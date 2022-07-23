
@extends('layouts.app')

@section('title','Edit task')

@section('content')

    <form action="{{ route('task.update',$task->id) }}" method="post">

        @csrf
        @method('patch')
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <input type="text" name="task" placeholder="Create task" value="{{$task ->task}}" id="" class="form-control">

            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-info"> Update</button>
            </div>


        </div>

    </form>

@endsection


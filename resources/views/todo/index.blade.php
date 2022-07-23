

@extends('layouts.app')

@section('title','Create task')

@section('content')

    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <input type="text" name="task" placeholder="Create task" id="" class="form-control">
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-info"><i class="fas fa-save"></i></button>
            </div>
        </form>

            <div class="my-5">
                <div class="list-group">

                    @foreach ($all_tasks as $task)
                        <li class="list-group-item">
                            {{ $task->task }}
                            <a href="{{ route('task.edit',$task->id) }}" class="btn btn-info float-end">
                                <i class="fas fa-edit"></i>
                            </a>

                            <form action="{{ route('task.delete', $task->id) }}" method="post" class="d-inlene mx-2 float-end">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="delete" class="btn btn-danger ">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>



                        </li>
                    @endforeach

                </div>

            </div>
        </div>

    </form>

@endsection

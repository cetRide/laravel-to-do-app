@extends('layout.default')
@section('content')
    <div class="col-md-9 mt-5 ml-auto mr-auto">
        <form action="/add_task" method="post">
            @csrf
            <h3 class="my-3">Add Task</h3>
            <input type="text" name="task_name" class="form-control form-control-lg">
            <button type="submit" class="bg-primary px-5 py-2 text-white auto my-4 ">Add Task</button>
        </form>
        <hr>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Task name</th>
                <th scope="col">Task Status</th>
                <th scope="col">Complete Task</th>
                <th scope="col">Delete Task</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $key => $value)
                <tr>
                    <th scope="row">{{$value->task_name}}</th>
                    <td>{{$value->status}}</td>
                    <td><a class="btn bg-success text-white" type="submit"
                           href="{{ URL::to('complete_task/' . $value->id) }}">Complete task</a></td>
                    <td><a class="btn bg-danger text-white" type="submit"
                           href="{{ URL::to('delete_task/'. $value->id) }}">Delete task</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Home
        </div>
    </div>
    <div class="container">
        <h2 class="mt">Meeting Planner</h2>
        <h3 class="mt">Meetings</h3>

        <div class="mt-4">
            <p>No tasks found.</p>
        </div>

        <ul class="list-group mt-4">
            <li class="list-group-item">
                <div class="list">
                    <div class="left-icon">
                        <span>1. </span>
                        <a :href="task.link"> title - <span style="color: rgb(52, 221, 52)">platform</span></a>
                    </div>

                    <div class="right-icon">

                        <span>
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                            <span class="trash"><i class="fa-solid fa-trash-can"></i></span>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection

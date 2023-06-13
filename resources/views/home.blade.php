@extends('layouts.app')

@section('content')
  
    <div class="container">
    <div class="flex justify-center align-center">
       <h3> Meeting Planner </h3>
    </div>
        <!-- <h3 class="mt">Meetings</h3> -->
        @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach

                {{ $posts->links() }}
            @else
            <div class="mt-4">
                <p>No tasks found.</p>
            </div>
            @endif
    </div>
@endsection

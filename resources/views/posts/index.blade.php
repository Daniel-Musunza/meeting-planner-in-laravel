@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="flex justify-center align-center">
            <h3>Meeting Planner</h3>
        </div>
        <!-- <h3 class="mt">Meetings</h3> -->
        <div class="p-6 rounded-lg">
        @if ($posts->count())
    
            <div class="row ">
                @foreach ($posts as $index => $post)
                @can('delete', $post)
                    <div class="post-item flex justify-center align-center">
                        <!-- <span style="padding-top:17px;">{{ $index + 1}}.</span> -->
                        <x-post :post="$post" />
                    </div>
                @endcan
                @endforeach
            </div>

            {{ $posts->links() }}
        @else
            @can('delete', $post)
                <div class="mt-4">
                    <p>No tasks found.</p>
                </div>
            @endcan
        @endif
    </div>
    </div>
@endsection

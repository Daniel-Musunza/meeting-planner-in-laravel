@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
        <div class="flex justify-center align-center">
            <h3> Meeting Planner </h3>
        </div>

        <div class="bg-white p-6 rounded-lg">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <p>{{ $user->name }} does not have any posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection
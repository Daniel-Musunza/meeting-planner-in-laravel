@component('mail::message')
# Your have a meeting today

you have {{$post->title}} meeting at{{ $post->time }}.

@component('mail::button', ['url' => route('posts.show', $post)])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

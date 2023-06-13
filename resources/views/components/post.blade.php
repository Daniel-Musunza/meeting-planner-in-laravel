@props(['post' => $post])
<ul class="list-group mt-4">
            <li class="list-group-item">
                <div class="list">
                    <div class="left-icon">
                        <span>1. </span>
                        <a href="{{ $post->link }} "> {{ $post->title }} - <span style="color: rgb(52, 221, 52)">{{ $post->platform }} </span></a>
                    </div>

                    <div class="right-icon">

                        <span>
                            <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                            @can('delete', $post)
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="trash"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                            @endcan
                        </span>
                    </div>
                </div>
            </li>
</ul>
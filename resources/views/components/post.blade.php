@props(['post'])

<ol class="list-group mt-4" style="list-style-type: decimal;">
    <li class="list-group-item">
        <div class="list">
            <div class="left-icon">
                <a href="{{ $post->link }}"> {{ $post->title }} - <span style="color: rgb(52, 221, 52)">{{ $post->platform }}</span></a>
            </div>

            <div class="right-icon">
                <span id="time-remaining-{{ $post->id }}"></span>

                <span>
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
</ol>

<script>
    function updateTimeRemaining(postId) {
        const timeSpan = document.getElementById(`time-remaining-${postId}`);

        if (timeSpan) {
            const now = Math.floor(Date.now() / 1000); // Current timestamp in seconds
            const targetTimestamp = Math.floor(Date.parse('{{ $post->date }} {{ $post->time }}') / 1000); // Target timestamp in seconds
            const totalSeconds = targetTimestamp - now;

            if (totalSeconds > 0) {
                const days = Math.floor(totalSeconds / (24 * 60 * 60));
                const hours = Math.floor((totalSeconds % (24 * 60 * 60)) / (60 * 60));
                const minutes = Math.floor((totalSeconds % (60 * 60)) / 60);
                const seconds = totalSeconds % 60;

                let timeRemaining = '';
                if (days > 0) {
                    timeRemaining += `${days} days `;
                }
                if (hours > 0) {
                    timeRemaining += `${hours} hrs `;
                }
                if (minutes > 0) {
                    timeRemaining += `${minutes} min `;
                }
                if (seconds > 0) {
                    timeRemaining += `${seconds} sec`;
                }

                timeSpan.textContent = timeRemaining;
            } else {
                timeSpan.textContent = 'Started';
            }
        }
    }

    updateTimeRemaining({{ $post->id }});

    // Update time remaining periodically
    setInterval(function() {
        updateTimeRemaining({{ $post->id }});
    }, 1000);
</script>

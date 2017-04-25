<div class="blog-post clearfix" style="margin-top: 10px;">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <p class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }} by
        <a href="#">
            {{ $post->user->name }}
        </a>
    </p>
    @php
    $length = 80;
    $more = false;
    if (mb_strlen($post->content) > $length) {
        $posEn = mb_strpos($post->content, '.', $length);
        $posCn = mb_strpos($post->content, '。', $length);
        if ($posCn !== false && ($posCn <= $length + 50 || $posCn >= $length - 30)) {
            $length = ++$posCn;
            $more = true;
        } elseif ($posEn !== false && ($posEn <= $length + 50 || $posEn >= $length - 30)) {
            $length = ++$posEn;
            $more = true;
        }
        $post->content = mb_substr($post->content, 0, $length);
    }  
    @endphp
    
    <h6>{{ $post->content }}
    @if ($more)
        <a href="/posts/{{ $post->id }}">More>></a>
    @endif
    </h6>
</div>
<br>
<!-- /.blog-post -->

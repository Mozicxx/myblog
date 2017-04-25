<div class="col-sm-2 col-offset-sm-4 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
    <div class="sidebar-module">
    <h6 class="m-top-30">Tags</h6>
    <div class="separator_small"></div>
        <ol class="list-unstyled">
            @foreach ($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag }}">
                    {{ $tag }}
                </a>
            </li>
            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
    <h6 class="m-top-30">Archives</h6>
    <div class="separator_small"></div>
        <ol class="list-unstyled">
            @foreach ($archives as $archive)
            <li>
                <a href="/posts?month={{ $archive->month }}&year={{ $archive->year }}">
                    {{ $archive->month . ' ' . $archive->year }}
                </a>
            </li>
            @endforeach
        </ol>
    </div>
    <div class="sidebar-module">
    <h6 class="m-top-30">Archives</h6>
    <div class="separator_small"></div>
        <ol class="list-unstyled">
            <li>
                <a href="#">
                    GitHub
                </a>
            </li>
            <li>
                <a href="#">
                    Twitter
                </a>
            </li>
            <li>
                <a href="#">
                    Facebook
                </a>
            </li>
        </ol>
    </div>
</div>
<!-- /.blog-sidebar -->

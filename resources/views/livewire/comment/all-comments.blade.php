<div>
    @include('includes.recursive', ['comments' => $video->comments()->LatestFirst()->get()])
</div>

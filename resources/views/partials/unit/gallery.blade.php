<section class="gallery-unit" id="gallery-show">
    @if($unit[0]->gallery_files && count($unit[0]->gallery_files) > 3 )
        @foreach($unit[0]->gallery_files as $key=>$gallery)
            @if($key >= 3)
                <a href="{{$gallery['file_url'].'?access_token='.$token}}" data-fancybox="gallery" data-caption="{{ $gallery['title'] }}">
                    <img src="{{$gallery['file_url'].'?access_token='.$token}}">
                </a>
            @endif
        @endforeach
    @endif
</section>

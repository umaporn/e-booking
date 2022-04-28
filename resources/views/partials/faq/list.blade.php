@foreach($faq as $key=>$item)
    <li class="list-faq">
        <a class="uk-accordion-title article-title" href="#">{{ $item->q }}</a>
        <div class="uk-accordion-content">
            <p>{!! $item->a !!}</p>
        </div>
    </li>
@endforeach
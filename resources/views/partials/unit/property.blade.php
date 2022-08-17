<div class="container online-content content-padding">
    <div class="uk-width-3-4@m">
        <h1 class="article-title name-project">{{ $unit[0]->project_info->project_title }}</h1>
        <div class="column-property uk-child-width-1-3 uk-child-width-auto@s" uk-grid>
            <p class="item-property">
                <img src="{{asset( config('images.icons.unit'))}}" alt="@lang('unit.title.unit_name')">{{ $unit[0]->unit_name }}
            </p>
            <p class="item-property">
                <img src="{{asset( config('images.icons.floor'))}}" alt="@lang('unit.title.floor')">@lang('unit.title.floor') {{ $unit[0]->unit_floor }}
            </p>
            <p class="item-property">
                <img src="{{asset( config('images.icons.bed'))}}" alt="@lang('unit.title.bedroom')">{{ $unit[0]->unit_bedroom }}
            </p>
            <p class="item-property">
                <img src="{{asset( config('images.icons.bathroom'))}}" alt="@lang('unit.title.bathroom')">{{ $unit[0]->unit_bathroom }}
            </p>
            <p class="item-property">
                <img src="{{asset( config('images.icons.sqm'))}}" alt="@lang('unit.title.sqm')">{{ $unit[0]->unit_sqm }}
            </p>
            <p class="item-property">
                <img src="{{asset( config('images.icons.direction'))}}" alt="@lang('unit.title.direction')">{{ $unit[0]->unit_facing }}
            </p>
        </div>
    </div>
</div>

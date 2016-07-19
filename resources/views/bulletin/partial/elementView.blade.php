<div>
    {{--todo view--}}
    <div><img src="{{ $bulletin->image }}" alt="{{ $bulletin->title }}"></div>
    <div>{{ $bulletin->description }}</div>
    <div class="col-md-3 col-sm-3 col-xs-6 pull-left">
        <div class="font-grey-mint font-sm"> {{trans('main.price')}} </div>
        <div class="uppercase font-hg theme-font"> {{$bulletin->price}}
            <span class="font-lg font-grey-mint">{{trans('main.val')}}</span>
        </div>
    </div>
    <div>{{ $bulletin->created_at }}</div>
</div>
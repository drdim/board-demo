@foreach($bulletinList as $row)

    <div class="portlet light clearfix">
        <div class="portlet-title">
            <div class="caption font-dark">
                <a href="/bulletin/{{$row->id}}"><span
                            class="caption-subject bold uppercase">{{$row->title}}</span></a>
            </div>
            @if ($row->user_id === Auth::user()->id)
                <div class="tools">
                    <div class="dt-buttons">
                        <a class="dt-button buttons-print btn dark btn-outline" tabindex="0"
                           aria-controls="sample_1" href="/bulletin/{{$row->id}}/edit">
                            <span>{{trans('main.edit')}}</span></a>
                        <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" tabindex="0"
                           aria-controls="sample_1"
                           href="/bulletin/{{$row->id}}/publish"><span>{{trans('main.publish')}}</span></a>
                        <a
                                class="dt-button buttons-csv buttons-html5 btn purple btn-outline" tabindex="0"
                                aria-controls="sample_1"
                                href="/bulletin/{{$row->id}}/close"><span>{{trans('main.close')}}</span></a>
                    </div>
                </div>
            @endif
        </div>
        <div class="photo pull-left">
            <img src="{{$row->image or '/assets/layouts/layout3/img/avatar9.jpg'}}" alt="{{$row->title}}">
        </div>
        <div class="description pull-left">
            {{$row->description}}
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6 pull-left">
            <div class="font-grey-mint font-sm"> {{trans('main.price')}} </div>
            <div class="uppercase font-hg theme-font"> {{$row->price}}
                <span class="font-lg font-grey-mint">{{trans('main.val')}}</span>
            </div>
        </div>
    </div>
@endforeach
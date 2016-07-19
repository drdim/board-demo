<form class="form-horizontal margin-bottom-40" role="form" method="POST" action="/bulletin/{{$state}}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="form-group form-md-line-input">
        <label for="title" class="col-md-2 control-label">{{trans('main.add_title')}}</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="title" placeholder="{{trans('main.add_title')}}"
                   value="{!! $bulletin->title or '' !!}">
            <div class="form-control-focus"></div>
            <span class="help-block">{{trans('main.help_title')}}</span>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        <label for="description" class="col-md-2 control-label">{{trans('main.description')}}</label>
        <div class="col-md-4">
            <textarea class="form-control" name="description" id="" cols="30" rows="10"
                      placeholder="{{trans('main.description')}}">{!! $bulletin->description or '' !!}</textarea>
            <div class="form-control-focus"></div>
            <span class="help-block">{{trans('main.help_description')}}</span>
        </div>
    </div>
    <div class="form-group form-md-line-input">
        <label for="price" class="col-md-2 control-label">{{trans('main.add_price')}}</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="price" placeholder="{{trans('main.price')}}"
                   value="{!! $bulletin->price or '' !!}">
            <div class="form-control-focus"></div>
            <span class="help-block">{{trans('main.help_price')}}</span>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label for="file" class="col-md-2 control-label">{{trans('main.image')}}</label>
        <div class="col-md-4">
            @if (isset($bulletin) && $bulletin->image)
                <img src="{{$bulletin->image}}" alt="{{$bulletin->title}}">
            @endif
            <input type="file" class="form-control" name="image">
            <div class="form-control-focus"></div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label for="file" class="col-md-2 control-label">Опубликовать</label>
        <div class="col-md-4">
            {{ Form::checkbox('status', $bulletin->status) }}
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-offset-2 col-md-10">
        @if ($state == 'save')
            <input type="hidden" name="id" value="{{$bulletin->id}}"/>
            <button type="submit" class="btn blue">{{trans('main.edit')}}</button>
        @else
            <button type="submit" class="btn blue">{{trans('main.add')}}</button>
        @endif
    </div>
</form>
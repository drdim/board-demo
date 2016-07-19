<div class="about-section">
    <div class="text-content">
        <div class="span7 offset1">
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{!! Session::get('success') !!}</h2>
                </div>
            @endif
            <div class="secure">Upload form</div>
                <form action="apply/upload" method="POST" enctype="multipart/form-data" >

                    <div class="control-group">
                        <div class="controls">
                            {!! csrf_field() !!}
                            <input type="file" name="image">
                            <p class="errors">{!!$errors->first('image')!!}</p>
                            @if(Session::has('error'))
                                <p class="errors">{!! Session::get('error') !!}</p>
                            @endif
                        </div>
                    </div>
                    <div id="success"> </div>
                    <button type='submit'>{{trans('main.upload')}}</button>
                </form>
        </div>
    </div>
</div>
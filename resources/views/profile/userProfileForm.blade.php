<div class="profile-content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light ">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">{{trans('user.profileHeader')}}</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab">{{trans('user.personalTab')}}</a>
                        </li>
                        <li>
                            <a href="#tab_1_3" data-toggle="tab">{{trans('user.changePass')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <!-- PERSONAL INFO TAB -->
                        <div class="tab-pane active" id="tab_1_1">
                            <form role="form" action="/myProfile/edit" method="POST">
                                <div class="form-group">
                                    <label class="control-label">{{trans('user.nameLabel')}}</label>
                                    <input type="text" name="name" placeholder="{{trans('user.nameLabel')}}" class="form-control" value="{{ $user->name }}"> </div>
                                <div class="form-group">
                                    <label class="control-label">{{trans('user.emailLablel')}}</label>
                                    <input type="email" name="email" placeholder="{{trans('user.emailLablel')}}" class="form-control" value="{{ $user->email }}"> </div>
                                <div class="margiv-top-10">
                                    <button type="submit" class="btn green">{{trans('user.save')}}</button>
                                    <button type="reset" class="btn default">{{trans('user.cancel')}}</button>
                                </div>
                            </form>
                        </div>
                        <!-- END PERSONAL INFO TAB -->
                        <!-- CHANGE PASSWORD TAB -->
                        <div class="tab-pane" id="tab_1_3">
                            <form action="/myProfile/edit/password" method="POST">
                                <div class="form-group">
                                    <label class="control-label">{{trans('user.currentPasswordLabel')}}</label>
                                    <input type="password" name="old_password" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">{{trans('user.newPasswordLabel')}}</label>
                                    <input type="password" name="password" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">{{trans('user.rePasswordLabel')}}</label>
                                    <input type="password" name="confirm_password" class="form-control"> </div>
                                <div class="margin-top-10">
                                    <button type="submit" class="btn red">{{trans('user.save')}}</button>
                                    <button type="reset" class="btn default">{{trans('user.cancel')}}</button>
                                </div>
                            </form>
                        </div>
                        <!-- END CHANGE PASSWORD TAB -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
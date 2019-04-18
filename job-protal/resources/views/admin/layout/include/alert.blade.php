@if(session('success'))
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 alert-set-extra" >
            <div class="alert alert-success alert-extra">
                 <i class="fa fa-check"></i> <strong>SUCCESS </strong> - {{session('success')}}.
            </div>
        </div>
    </div>
@endif

<!-------Alert For Validation-------->

@if($errors->has('logo'))
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 alert-set-extra" >
            <div class="alert alert-danger alert-extra" >
                <i class="fa fa-exclamation-triangle "></i> <strong>ERROR ! </strong> - {!! $errors->first('logo') !!}.
            </div>
        </div>
    </div>
@endif
@if($errors->has('sitename'))
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 alert-set-extra" >
            <div class="alert alert-danger alert-extra" >
                <i class="fa fa-exclamation-triangle "></i> <strong>ERROR ! </strong> - {!! $errors->first('sitename') !!}.
            </div>
        </div>
    </div>
@endif
@if($errors->has('image'))
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 alert-set-extra" >
            <div class="alert alert-danger alert-extra" >
                <i class="fa fa-exclamation-triangle "></i> <strong>ERROR ! </strong> - {!! $errors->first('image') !!}.
            </div>
        </div>
    </div>
@endif
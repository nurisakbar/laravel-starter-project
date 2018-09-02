<div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Full Name</label>
        <div class="col-md-8">
            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Full Name'])}}
        </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Email</label>
    <div class="col-md-8">
        {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])}}
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Password</label>
    <div class="col-md-8">
        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
    </div>
</div>
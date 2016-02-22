<div class="form-group">
    {!! Form::label('itemno','Item No: ') !!}
    {!! Form::text('itemno',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('producttype','Product Type: ') !!}
    {!! Form::text('producttype',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('productname','Product Name: ') !!}
    {!! Form::text('productname',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('description','Product Description: ') !!}
    {!! Form::text('description',null,['class'=>'form-control'])!!}
</div>		
<div class="form-group">
    {!! Form::label('price','Product Price: ') !!}
    {!! Form::text('price',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! form::submit($button,['class'=>'btn btn-info form-control'])!!}
</div>
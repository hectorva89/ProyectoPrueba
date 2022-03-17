<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::text('nombrecategoria', $categoria->nombrecategoria, ['class' => 'form-control' . ($errors->has('nombrecategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoria']) }}
            {!! $errors->first('nombrecategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

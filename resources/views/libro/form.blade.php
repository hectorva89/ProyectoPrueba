<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('categoria_id',$categorias ,$libro->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar...']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Libro') }}
            {{ Form::text('nombreLibro', $libro->nombreLibro, ['class' => 'form-control' . ($errors->has('nombreLibro') ? ' is-invalid' : ''), 'placeholder' => 'Nombrelibro']) }}
            {!! $errors->first('nombreLibro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

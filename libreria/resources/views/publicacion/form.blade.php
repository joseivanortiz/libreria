<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $publicacion->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('texto') }}
            {{ Form::text('texto', $publicacion->texto, ['class' => 'form-control' . ($errors->has('texto') ? ' is-invalid' : ''), 'placeholder' => 'Texto']) }}
            {!! $errors->first('texto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
      <br>
       <label for="foto"> foto </label>
        <input type="file" name="foto" >

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
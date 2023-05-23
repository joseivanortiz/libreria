<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('evento') }}
            {{ Form::text('evento', $evento->evento, ['class' => 'form-control' . ($errors->has('evento') ? ' is-invalid' : ''), 'placeholder' => 'Evento']) }}
            {!! $errors->first('evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $evento->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $evento->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $evento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $evento->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
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
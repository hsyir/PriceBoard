<div class="form-group ">
   @if(isset($caption))
        <label for="{{ $name }}"
               class="col-form-label text-md-right">{{ $caption }}</label>

    @endif
    <select id="{{ $name }}"
            name="{{ $name }}"
            class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}">
        @foreach($options as $key=>$option)
            <option value="{{ $key }}" {{( $key != "" and $key==$value) ? "selected" : "" }}>{{  $option }}</option>
        @endforeach
    </select>
    @if(isset($description)) <small>{{ $description }}</small>  @endif
    @if ($errors->has($name))
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first($name) }}</strong>
                                    </span>
    @endif
</div>

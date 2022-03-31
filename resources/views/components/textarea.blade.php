<div class="row mb-3">
    <label for="{{ $name }}" class="col-md-4 col-form-label text-md-end">{{ $label }} </label>

    <div class="col-md-6">
<textarea class="textarea" name="{{ $name }}" id="{{ $name }}">
@isset(($object->{$name})){{ old($name) ? old($name) : $object->{$name} }}
@else {{ old($name) }}
@endisset
</textarea>

        @error( $name )
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

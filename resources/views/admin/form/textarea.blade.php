<div class="form-group">
    @if(isset($label))
        <label class="">
            @if(!empty($required))
                <span class="required">*</span>
            @endif
            {{ $label }}:
        </label>
    @endif
    <textarea class="form-control" name="{{ $name }}">{{ $old }}</textarea>
    @error($name)
    <span class="text-danger form-error" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
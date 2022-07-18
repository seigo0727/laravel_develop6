<div class="form-group">
    @if(isset($label))
    <label class="">
        @if(!empty($required))
            <span class="required">*</span>
        @endif
        {{ $label }}:
    </label>
    @endif
    <input type="password" class="form-control" name="{{ $name }}" value="{{ $old }}">
    @error($name)
    <span class="text-danger form-error" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

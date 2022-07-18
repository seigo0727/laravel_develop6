<div class="form-group">
    @if(isset($label))
    <label class="">
        @if(!empty($required))
            <span class="required">*</span>
        @endif
        {{ $label }}:
    </label>
    @endif
    <select name="{{ $name }}" class="form-control">
        @if(isset($placeholder))
            <option value="">{{ $placeholder }}</option>
        @endif
        @foreach($choices as $value => $label)
            @if(isset($old) && (string)$value === (string)$old))
            <option value="{{ $value }}" selected="selected">{{ $label }}</option>
            @else
            <option value="{{ $value }}">{{ $label }}</option>
            @endif
        @endforeach
    </select>
    @error($name)
    <span class="text-danger form-error" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
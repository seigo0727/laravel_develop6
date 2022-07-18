<div class="form-group">
    @if(isset($label))
    <label class="">
        @if(!empty($required))
            <span class="required">*</span>
        @endif
        {{ $label }}:
    </label>
    @endif
    <ul class="list-inline mb-0">
        @foreach($choices as $value => $label)
            <li class="list-inline-item">
                <label>
                    @if(isset($old) && (string)$value === (string)$old)
                    <input type="radio" name="{{ $name }}" value="{{ $value }}" checked="checked">
                    @else
                    <input type="radio" name="{{ $name }}" value="{{ $value }}">
                    @endif
                    {{ $label }}
                </label>
            </li>
        @endforeach
    </ul>
    @error($name)
    <span class="text-danger form-error" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group{{ (isset($column_size) ? ' ' . $column_size : '') . (isset($column_class) ? ' ' . $column_class : '') }}">
    <label class="form-label">
        {!! $label . (isset($required) ? ' <span class="required">*</span>' : '') !!}
    </label>
    <div class="input-group">
        @if(isset($input_group_prepend))
            <div class="input-group-prepend">
                <span class="input-group-text">
                    {{ $input_group_prepend }}
                </span>
            </div>
        @endif
        <input type="{{ $type ?? 'text' }}"
               name="{{ $name }}"
               class="form-control{{ isset($input_class) ? ' ' . $input_class : '' }}"
               value="{{ old($name, $value ?? '') }}"{{ isset($disabled) && $disabled ? ' disabled' : '' }}>
        @if(isset($input_group_append))
            <div class="input-group-append">
                <span class="input-group-text">
                    {{ $input_group_append }}
                </span>
            </div>
        @endif
    </div>
    @if(isset($help_text))
        <small class="form-text text-muted">{{ $help_text }}</small>
    @endif
</div>

<div class="form-group{{ (isset($column_size) ? ' ' . $column_size : '') . (isset($column_class) ? ' ' . $column_class : '') }}">
    <label class="form-label">
        {!! $label . (isset($required) ? ' <span class="required">*</span>' : '') !!}
    </label>
    <div class="input-group">
        <input type="{{ $type ?? 'text' }}"
               name="{{ $name }}"
               class="form-datepicker form-control date-mask{{ isset($input_class) ? ' ' . $input_class : '' }}"
               value="{{ old($name, $value ?? '') }}"{{ isset($disabled) && $disabled ? ' disabled' : '' }}>
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="fas fa-calendar"></i>
            </span>
        </div>
    </div>
    @if(isset($help_text))
        <small class="form-text text-muted">{{ $help_text }}</small>
    @endif
</div>

<div class="form-group{{ (isset($column_size) ? ' ' . $column_size : '') . (isset($column_class) ? ' ' . $column_class : '') }}">
    <label class="form-label">
        {!! $label . (isset($required) ? ' <span class="required">*</span>' : '') !!}
    </label>
    <textarea id="tinymce" name="{{ $name }}"
              class="form-control{{ isset($textarea_class) ? ' ' . $textarea_class : '' }}"
              rows="{{ $rows ?? 3 }}"{{ isset($disabled) && $disabled ? ' disabled' : '' }}>{{ old($name, $value ?? '') }}</textarea>
    @if(isset($help_text))
        <small class="form-text text-muted">{{ $help_text }}</small>
    @endif
</div>

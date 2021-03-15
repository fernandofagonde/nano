<div class="col-lg-3 mb-4{{ isset($column_class) ? ' ' . $column_class : '' }}">
    <label class="form-label">{{ $label }}</label>
    <input type="text"
           name="{{ $name }}"
           class="form-control{{ isset($input_class) ? ' ' . $input_class : '' }}"
           value="{{ $value }}">
</div>

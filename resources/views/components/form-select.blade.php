<div class="form-group{{ (isset($column_size) ? ' ' . $column_size : '') . (isset($column_class) ? ' ' . $column_class : '') }}">
    <label class="form-label">
        {!! $label . (isset($required) ? ' <span class="required">*</span>' : '') !!}
    </label>
    <select name="{{ $name }}"
            class="custom-select{{ isset($select_class) ? ' ' . $select_class : '' }}"{{ isset($disabled) && $disabled ? ' disabled' : '' }}>
        @foreach($items as $item_key => $item)
            <option value="{{ $item_key }}"{{ (string)$item_key === (string)old($name, $selected_item) ? ' selected' : '' }}>
                {{ $item }}
            </option>
        @endforeach
    </select>
    @if(isset($help_text))
        <small class="form-text text-muted">{{ $help_text }}</small>
    @endif
</div>

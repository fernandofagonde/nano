<div class="form-group{{ (isset($column_size) ? ' ' . $column_size : '') . (isset($column_class) ? ' ' . $column_class : '') }}">
    <label class="form-label">
        {!! $label . (isset($required) ? ' <span class="required">*</span>' : '') !!}
    </label>
    <select name="{{ $name }}"
            class="form-select2 form-control{{ isset($select_class) ? ' ' . $select_class : '' }}"
            style="width: 100%"
            data-allow-clear="true">
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

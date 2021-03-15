<div class="col-lg-3 mb-4{{ isset($column_class) ? ' ' . $column_class : '' }}">
    <label class="form-label">{{ $label }}</label>
    <select name="{{ $name }}"
            class="custom-select{{ isset($select_class) ? ' ' . $select_class : '' }}">
        @foreach($items as $item_key => $item)
            <option value="{{ $item_key }}"{{ $item_key == $selected_item ? ' selected' : '' }}>
                {{ $item }}
            </option>
        @endforeach
    </select>
</div>

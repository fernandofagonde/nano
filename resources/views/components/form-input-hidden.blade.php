<input type="hidden"
       name="{{ $name }}"
       class="{{ isset($input_class) ? ' ' . $input_class : '' }}"
       value="{{ old($name, $value ?? '') }}">

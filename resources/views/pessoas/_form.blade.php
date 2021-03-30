<div class="card">
    <div class="card-body pb-2">
        @component('components.form-input')
            @slot('label', 'Nome')
            @slot('name', 'nome')
            @slot('value', $pessoa->nome)
            @slot('required', true)
        @endcomponent

        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'E-mail')
                @slot('name', 'email')
                @slot('value', $pessoa->email)
            @endcomponent

            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Telefone')
                @slot('name', 'telefone')
                @slot('value', $pessoa->telefone)
                @slot('input_class', 'phone-mask')
            @endcomponent
        </div>

        @component('components.form-input')
            @slot('label', 'Login')
            @slot('name', 'login')
            @slot('value', $pessoa->login)
            @slot('required', true)
            @slot('disabled', $is_edit)
        @endcomponent

        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-3')
                @slot('type', 'password')
                @slot('label', 'Senha')
                @slot('name', 'senha')
                @slot('required', true)
            @endcomponent

            @component('components.form-input')
                @slot('column_size', 'col-md-3')
                @slot('type', 'password')
                @slot('label', 'Confirmar senha')
                @slot('name', 'senha_confirmation')
                @slot('required', true)
            @endcomponent

            @component('components.form-select')
                @slot('column_size', 'col-md-2')
                @slot('label', 'Ativo')
                @slot('name', 'fl_ativo')
                @slot('items', ['' => 'Selecione um item', '1' => 'Sim', '0' => 'Não'])
                @slot('selected_item', !is_null($pessoa->fl_ativo) ? (int)$pessoa->fl_ativo : '')
                @slot('required', true)
            @endcomponent
            @component('components.form-select')
                @slot('column_size', 'col-md-2')
                @slot('label', 'Admin')
                @slot('name', 'fl_admin')
                @slot('items', ['' => 'Selecione um item', '1' => 'Sim', '0' => 'Não'])
                @slot('selected_item', !is_null($pessoa->fl_admin) ? (int)$pessoa->fl_admin : '')
                @slot('required', true)
            @endcomponent
            @component('components.form-select')
                @slot('column_size', 'col-md-2')
                @slot('label', 'Login')
                @slot('name', 'fl_login')
                @slot('items', ['' => 'Selecione um item', '1' => 'Sim', '0' => 'Não'])
                @slot('selected_item', !is_null($pessoa->fl_login) ? (int)$pessoa->fl_login : '')
                @slot('required', true)
            @endcomponent
        </div>
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('pessoas.index')])
</div>

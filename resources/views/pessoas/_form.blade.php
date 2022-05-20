<div class="card">
    <div class="card-body pb-2">

        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Nome')
                @slot('name', 'nome')
                @slot('value', $pessoa->nome)
                @slot('required', true)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Endereço')
                @slot('name', 'endereco')
                @slot('value', $pessoa->endereco)
                @slot('required', true)
            @endcomponent
        </div>
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
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('pessoas.index')])
</div>

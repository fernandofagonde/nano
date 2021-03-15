<div class="card">
    <div class="card-body pb-2">
        @component('components.form-input')
            @slot('label', 'Nome')
            @slot('name', 'nome')
            @slot('value', $papel->nome)
            @slot('required', true)
        @endcomponent

        @component('components.form-textarea')
            @slot('label', 'Descrição')
            @slot('name', 'descricao')
            @slot('value', $papel->descricao)
        @endcomponent
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('papeis.index')])
</div>

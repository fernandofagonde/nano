<div class="card">
    <div class="card-body pb-2">

        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Nome')
                @slot('name', 'nome')
                @slot('value', $cliente->nome)
                @slot('required', true)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Endereço')
                @slot('name', 'endereco')
                @slot('value', $cliente->endereco)
                @slot('required', true)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'E-mail')
                @slot('required', true)
                @slot('name', 'email')
                @slot('value', $cliente->email)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Telefone')
                @slot('name', 'telefone')
                @slot('required', true)
                @slot('value', $cliente->telefone)
                @slot('input_class', 'phone-mask')
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('type', 'file')
                @slot('label', 'Logo')
                @slot('name', 'logo')
                @slot('value', $cliente->logo)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('type', 'file')
                @slot('label', 'Fundo')
                @slot('name', 'fundo')
                @slot('value', $cliente->fundo)
            @endcomponent            
        </div>

        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Título')
                @slot('name', 'titulo')
                @slot('value', $cliente->titulo)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-textarea')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Decrição')
                @slot('name', 'descricao')
                @slot('value', $cliente->descricao)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'URL (https://ipsillon.cc/_______)')
                @slot('name', 'url')
                @slot('value', $cliente->url)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-2')
                @slot('type','color');
                @slot('label', 'Cor da fonte')
                @slot('name', 'font_color')
                @slot('value', $cliente->font_color)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-2')
                @slot('type','color');
                @slot('label', 'Cor do botão')
                @slot('name', 'button_color')
                @slot('value', $cliente->button_color)
            @endcomponent
            @component('components.form-input')
                @slot('type','color');
                @slot('column_size', 'col-md-2')
                @slot('label', 'Cor da fonte do botão')
                @slot('name', 'button_font_color')
                @slot('value', $cliente->button_font_color)
            @endcomponent
        </div>
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('clientes.index')])
</div>

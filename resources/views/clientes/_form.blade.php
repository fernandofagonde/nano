<div class="card">
    <div class="card-body pb-2">

        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Título')
                @slot('name', 'titulo')
                @slot('value', $cliente->titulo)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'URL (https://nano.ipsillon.cc/_______)')
                @slot('name', 'url')
                @slot('value', $cliente->url)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Razão Social')
                @slot('name', 'razao')
                @slot('value', $cliente->razao)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'E-mail')
                @slot('required', true)
                @slot('name', 'email')
                @slot('value', $cliente->email)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Whatsapp')
                @slot('name', 'whatsapp')
                @slot('required', true)
                @slot('value', $cliente->whatsapp)
                @slot('input_class', 'phone-mask')
            @endcomponent

            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Endereço')
                @slot('name', 'endereco')
                @slot('value', $cliente->endereco)
                @slot('required', true)
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
                @slot('column_size', 'col-md-6')
                @slot('type', 'file')
                @slot('label', 'Logo (250X150px)')
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
                @slot('column_size', 'col-md-4')
                @slot('type', 'color');
                @slot('label', 'Cor da fonte')
                @slot('name', 'font_color')
                @slot('value', $cliente->font_color)
            @endcomponent

            @component('components.form-input')
                @slot('column_size', 'col-md-4')
                @slot('type', 'color');
                @slot('label', 'Cor do botão')
                @slot('name', 'button_color')
                @slot('value', $cliente->button_color)
            @endcomponent

            @component('components.form-input')
                @slot('type', 'color');
                @slot('column_size', 'col-md-4')
                @slot('label', 'Cor da fonte do botão')
                @slot('name', 'button_font_color')
                @slot('value', $cliente->button_font_color)
            @endcomponent

        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Instagram')
                @slot('name', 'instagram')
                @slot('value', $cliente->instagram)
            @endcomponent
 
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Facebook')
                @slot('name', 'facebook')
                @slot('value', $cliente->facebook)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Youtube')
                @slot('name', 'youtube')
                @slot('value', $cliente->youtube)
            @endcomponent

            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Linkedin')
                @slot('name', 'linkedin')
                @slot('value', $cliente->linkedin)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'site/loja virtual')
                @slot('name', 'site')
                @slot('value', $cliente->site)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Áreas (separado por ";")')
                @slot('name', 'area')
                @slot('value', $cliente->area)
            @endcomponent
        </div>
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('clientes.index')])
</div>

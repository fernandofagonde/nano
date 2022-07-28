<div class="card">
    <div class="card-body pb-2">
        @component('components.form-input')
            @slot('label', 'Nome')
            @slot('name', 'nome')
            @slot('value', $grupo->nome)
            @slot('required', true)
        @endcomponent

        @component('components.form-textarea')
            @slot('label', 'Descrição')
            @slot('name', 'descricao')
            @slot('value', $grupo->descricao)
        @endcomponent

        <div class="form-row">
            @component('components.form-select')
                @slot('column_size', 'col-md-4')
                @slot('items', ['' => 'Selecione o dia da semana', 
                                '0' => 'Domingo', 
                                '1' => 'Segunda-feira', 
                                '2' => 'Terça-feira', 
                                '3' => 'Quarta-feira', 
                                '4' => 'Quinta-feira', 
                                '5' => 'sexta-feira', 
                                '6' => 'Sábado'])
                @slot('selected_item', !is_null($grupo->dia_semana) ? (int)$grupo->dia_semana : '')
                @slot('label', 'Dia da semana')
                @slot('name', 'dia_semana')
                @slot('value', $grupo->dia_semana)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-4')
                @slot('name', 'hora_inicio')
                @slot('label', 'Hora Inicial')
                @slot('value', $grupo->hora_inicio)
            @endcomponent

            @component('components.form-input')
                @slot('column_size', 'col-md-4')
                @slot('label', 'Hora final')
                @slot('name', 'hora_fim')
                @slot('value', $grupo->hora_fim)
            @endcomponent        
        </div>
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('grupos.index')])
</div>

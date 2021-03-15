// Auto update layout
(function () {
    window.layoutHelpers.setAutoUpdate(true);
})();

// Collapse menu
(function () {
    if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
        return;
    }

    try {
        window.layoutHelpers.setCollapsed(
            localStorage.getItem('layoutCollapsed') === 'true',
            false
        );
    } catch (e) {
    }
})();

jQuery.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': window.APP_CSRF_TOKEN
    }
});

jQuery(function ($) {
    // Initialize sidenav
    $('#layout-sidenav').each(function () {
        new SideNav(this, {
            orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
        });
    });

    // Initialize sidenav togglers
    $('body').on('click', '.layout-sidenav-toggle', function (e) {
        e.preventDefault();
        window.layoutHelpers.toggleCollapsed();
        if (!window.layoutHelpers.isSmallScreen()) {
            try {
                localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));
            } catch (e) {
            }
        }
    });

    if ($('html').attr('dir') === 'rtl') {
        $('#layout-navbar .dropdown-menu').toggleClass('dropdown-menu-right');
    }

    $('.btn-destroy').click(function (e) {
        e.preventDefault();

        var self = $(this);
        var url = self.attr('href');

        Swal.fire({
            title: "Deseja realmente excluir?",
            text: "Essa ação é irreversível!",
            type: "error",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Excluir definitivamente"
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    method: "DELETE",
                    url: url,
                    data: {'_method': 'DELETE'}
                }).done(function (response) {
                    Swal.fire({
                        title: "Excluído!",
                        text: "Dados excluídos com sucesso.",
                        type: "success",
                        confirmButtonColor: "#8cd4f5",
                        confirmButtonText: "Fechar"
                    }).then(function () {
                        window.location = response.redirect_to;
                    });
                }).fail(function () {
                    Swal.fire("Erro ao tentar excluir!", "Tente novamente mais tarde.", "warning");
                });
            }
        });

        return false;
    });

    // MÁSCARAS
    var phoneMaskBehavior = function (val) {
        var val2 = val.replace(/\D/g, '');

        if (val2.length === 11 && val2.substr(0, 4) === '0800') {
            return '0000-000-0000';
        } else if (val2.length === 11) {
            return '(00) 0 0000-0000';
        } else {
            return '(00) 0000-00009';
        }
    };

    var phoneMaskOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(phoneMaskBehavior.apply({}, arguments), options);
        }
    };

    var cpfCnpjMaskBehavior = function (val) {
        var val2 = val.replace(/\D/g, '');

        if (val2.length > 11) {
            return '00.000.000/0000-00';
        } else {
            return '000.000.000-00999';
        }
    };

    var cpfCnpjMaskOptions = {
        onKeyPress: function (val, e, field, options) {
            field.mask(cpfCnpjMaskBehavior.apply({}, arguments), options);
        }
    };

    $(".phone-mask").mask(phoneMaskBehavior, phoneMaskOptions);
    $(".date-mask").mask("00/00/0000");
    $(".time-mask").mask("00:00:00");
    $(".datetime-mask").mask("00/00/0000 00:00:00");
    $(".cep-mask").mask("00000-000");
    $('.cpf-mask').mask("000.000.000-00");
    $(".cnpj-mask").mask("00.000.000/0000-00");
    $(".cpfcnpj-mask").mask(cpfCnpjMaskBehavior, cpfCnpjMaskOptions);
    $(".integer-mask").mask("#");
    $(".money-mask").mask("#.##0,00", {reverse: true});

    // SELECT2
    $('.form-select2').each(function () {
        $(this).wrap('<div class="position-relative"></div>').select2({
            placeholder: 'Selecione um item',
            dropdownParent: $(this).parent()
        });
    });

    // BOOTSTRAP DATEPICKER
    $('.form-datepicker').datepicker({
        language: "pt-BR",
        todayBtn: "linked",
        clearBtn: true,
        autoclose: true,
        todayHighlight: true
    });
});

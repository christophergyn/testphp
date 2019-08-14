var tabelapopup; // variavel da tabela de pesquisa

var language = {
    "lengthMenu": "Mostra _MENU_ registros por página",
    "zeroRecords": "Nenhum registro encontrado!",
    "info": "Total _PAGE_ de _PAGES_",
    "infoEmpty": "Não há registros para mostrar",
    "infoFiltered": "(filtrado por _MAX_ total registros)",
    "search": "Pesquisar",
    "processing": "<img src='../../img/giphy3.gif' />",
    "oPaginate": {
        "sFirst": "Primeiro",
        "sPrevious": "Anterior",
        "sNext": "Próximo",
        "sLast": "Último"
    }
};
function mostraInfo(msg) {
    $('#dialog-info p').text(msg);
    $('#dialog-info').dialog({
        modal: true,
        buttons: [{
                text: "OK",
                class: 'btn btn-primary',
                click: function () {
                    $(this).dialog("close");
                }
            }],
        position: {
           my: "center",
           at: "center",
           of: window
        }
    });
}
function mostraWarning(msg) {
    $('#dialog-warning p').text(msg);
    $('#dialog-warning').dialog({
        modal: true,
        buttons: [{
                text: "OK",
                class: 'btn btn-primary',
                click: function () {
                    $(this).dialog("close");
                }
            }],
        position:{
           my: "center",
           at: "center",
           of: window
        } 
    });
}
function mostraError(msg) {
    $('#dialog-error p').text(msg);
    $('#dialog-error').dialog({
        modal: true,
        buttons: [{
                text: "OK",
                class: 'btn btn-primary',
                click: function () {
                    $(this).dialog("close");
                }
            }],
    });
}
function mostraSuccess(msg) {
    $('#dialog-success p').text(msg);
    $('#dialog-success').dialog({
        modal: true,
        buttons: [{
                text: "OK",
                class: 'btn btn-primary',
                click: function () {
                    $(this).dialog("close");
                }
            }],
    });
}

function mostraMensagemComFuncao(msg, functionName) {
    $('#dialog-warning p').text(msg);
    $('#dialog-warning').dialog({
        modal: true,
        buttons: [{
                text: "Alterar",
                class: 'btn btn-primary',
                click: function () {
                    functionName();
                    $(this).dialog("close");
                }
            },
            {
                text: "Cancelar",
                class: 'btn btn-primary',
                click: function () {
                    clearCliente();
                    $(this).dialog("close");
                }
            }]
    });
}

function mostraLoading(msg) {
    $('#dialog-loading p').text(msg);
    $('#dialog-loading').dialog({
        modal: true,
    });
}

function escondeLoading() {
    $('#dialog-loading').dialog('close');
}

function eventoPesquisarClick(nomeDialog, tituloDialog, opcoesSelect, nomeSelect) {
    $(nomeDialog).dialog({
        modal: true,
        title: tituloDialog,
        //position: 'botton',
        width: 750,
        height: 480,
        beforeClose: function (event, ui) {
            $('#btnNovoPopup').click();
        },
        close: function (event, ui) {
            $(this).dialog("destroy");
        }
    });
    var option = '<option value="-1">Selecione uma opção</option>';
    $.each(opcoesSelect, function (i, item) {
        option += '<option value="' + i + '">' + item + '</option>';
    });
    $(nomeSelect).html(option).show();
}

function eventoPesquisarCadastroClick(idDialog, tituloDialog, opcoesSelect, nomeSelect, btnFechar, width = 750, height = 480, option = '<option value="-1">Selecione uma opção</option>') {
    $(btnFechar).click(function () {
        $(idDialog).dialog("destroy");
    });
    $(idDialog).dialog({
        modal: true,
        title: tituloDialog,
        width: width,
        height: height,
        close: function (event, ui) {
            $(this).dialog("destroy");
        }
    });
    $.each(opcoesSelect, function (i, item) {
        option += '<option value="' + i + '">' + item + '</option>';
    });
    $(nomeSelect).html(option).show();
}

function eventoCadastrarClick(idDialog, tituloDialog, btnFechar, width = 450, height = 200) {
    $(btnFechar).click(function () {
        $(idDialog).dialog("destroy");
    });
    $(idDialog).dialog({
        modal: true,
        title: tituloDialog,
        width: width,
        height: height,
        close: function (event, ui) {
            $(this).dialog("destroy");
        },
    });
}

//-------- mascara
function inserirMascara(valor, mascara) {
    var mascarado = '';
    var k = 0;
    for (var i = 0; i <= (mascara.length - 1); i++) {
        if (mascara.charAt[i] === '#') {
            if (valor.charAt[k]) {
                mascarado += valor.charAt[k++];
            }
        } else {
            if (mascara.charAt[i]) {
                mascarado += mascara.charAt[i];
            }
        }
    }
    return mascarado;
}

function formatTelefone(value) {
    value = onlyNumber(value);
    if (value.length === 8) {
        return inserirMascara(value, '####-####');
    } else if (value.length === 9) {
        return inserirMascara(value, '#####-####');
    } else if (value.length === 10) {
        return inserirMascara(value, '(##)####-####');
    } else if (value.length === 11) {
        return inserirMascara(value, '(##)#####-####');
    } else {
        return value;
    }
}

function setMascaraCnpj(valor) {
    return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g, "\$1.\$2.\$3\/\$4\-\$5");
}

function setMascaraCpf(valor) {
    return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, "\$1.\$2.\$3\-\$4");
}

function retirarFormatacao(texto) {
    return texto.replace(/(\.|\/|\-)/g, "");
}

// formulario
function submitForm(form, acao) {
    form.action = acao;
    return form.submit();
}

/**
 * retorna quantidade de registros da tabela, ignorando o cabeçalho
 * @param {type} idTable
 * @returns {Number}
 */
function getTotalDeRegistrosTabela(idTable) {
    var result = 0;
    if (($(idTable + " > tbody").children().length > 0)) {
        var oTable = $(idTable).dataTable();
        result = oTable.fnGetData().length;
    }
    return result;
}

/**
 * verifica em uma tabela para um array de input se um novo valor já existe
 * @param {type} codItem
 * @param {type} idTable
 * @param {type} nameInput
 * @returns {Boolean}
 */
function isItemRepetidoTabela(codItem, idTable, nameInput) {
    var repetido = false;
    if (getTotalDeRegistrosTabela(idTable) > 0) {
        $('table ' + idTable + ' > tbody > tr').each(function () {
            var vlrItem = $(this).find('input[name="' + nameInput + '[]"]')[0].value;
            if (codItem == vlrItem) {
                repetido = true;
                return true;
            }
        });
    }
    return repetido;
}

function formatMoedaStringToFloat(value) {
    value = value.replace('.', '');
    value = value.replace(',', '.');
    return parseFloat(value);
}
//Converte resultado da tela de calculo de recesso
function formatMoedaStringToFloat2(value) {
    //value = value.replace('.',''); 
    value = parseFloat(value).toFixed(2);
    value = value.toString();
    value = value.replace('.', ',');
    return value;
}
//------ formatação
function formatMoeda(value, decimal, semSigla) {
    value = formatMoedaStringToFloat();

    if (semSigla) {
        return valor.toLocaleString("pt-BR", {minimumFractionDigits: decimal});
    } else {
        return valor.toLocaleString("pt-BR", {style: "currency", currency: 'BRL', minimumFractionDigits: decimal});
    }
}

function formatData(data, separador = '-') {
    var strData = '' + data;
    var dataEmPartes = strData.split('-');

    return dataEmPartes[2] + separador + dataEmPartes[1] + separador + dataEmPartes[0];
}

function formatStringToDate(data, separador = '-') {
    var strData = '' + data;
    var dataEmPartes = strData.split('-');
    return new Date(parseInt(dataEmPartes[0]), parseInt(dataEmPartes[1]) - 1, parseInt(dataEmPartes[2]));
}

function retiraMascaraMoeda(valor) {
    valor = valor.replace('R$', '');
    valor = valor.replace('.', '');
    valor = valor.replace(',', '.');
    return valor;
}
//------------ Numeros
function onlyNumber(value) {
    value = value.toString();
    return value.replace(/\D/g, '');
}

function isValidNumber(n) {
    return (n !== null && !isNaN(parseFloat(n)) && isFinite(n));
}
/**
 * Função para o arredondamento de casas decimais. Recebe um valor (valor),
 * valida se é número e arredonda para a quantidade de casas passadas (d).
 * @param {type} valor
 * @param {type} d
 * @returns {Number}
 */
function roundValue(valor, d = 2) {
    if (isValidNumber(valor)) {
        return parseFloat(parseFloat(valor).toFixed(d));
    } else {
        return 0.0;
}
}

/**
 * Busca valor de input pelo name, tr e índice
 * @param {type} tr
 * @param {type} nameInput
 * @param {type} indice
 * @returns {unresolved}
 */
function buscaValorDeInputPorTrNomeDaInputEIndice(tr, nameInput, indice = 0) {
    if (tr === null || tr === '' || nameInput === '' || indice < 0) {
        return '';
    }
    return $(tr).find('input[name="' + nameInput + '[]"]')[indice].value;
}

/**
 * verifica se uma data é válida
 * @param string data
 * @returns {Boolean}
 */
function isValidDate(data) {
    return (!isNaN(Date.parse(data)) && !!new Date(data).getTime());
}


function isValidaHora(campo) {
    var hrs = (campo.substring(0, 2));
    var min = (campo.substring(3, 5));
    if ((hrs < 00) || (hrs > 23) || (min < 00) || (min > 59)) {
        return false;
    }
    if ((hrs + min) === 0) {
        return false;
    }

    return true;
}

function isHoraZerado(campo) {
    var hrs = (campo.substring(0, 2));
    var min = (campo.substring(3, 5));
    if ((parseInt(hrs) + parseInt(min)) === 0) {
        return true;
    }

    return false;
}

/**
 * incrementa data por dia, caso não seja passado a quantidade de dias e uma data 
 * é gerado data atual, incrementa 0 dias e retorna string no padrão americano (aaaa-mm-dd)
 * @param {type} data
 * @param {type} day
 * @returns {unresolved}
 */
function criaIncrementaEConverteData(day = 0, data = new Date()) {
    if (isValidDate(data)) {
        data.setMinutes(new Date().getTimezoneOffset());
        data.setDate(data.getDate() + parseInt(day));
        return data.toISOString().substring(0, 10);
    }
    return false;
}

/**
 * Função que retorna dia semana por extenso.
 * @param string data (ano-mes-dia)
 * @returns dia da semana
 */
function getDiaDaSemana(data) {
    var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
    var arr = data.split("-");
    var teste = new Date(arr[0], arr[1] - 1, arr[2]);
    var dia = teste.getDay();
    return semana[dia];
}
/**
 * incrementa data por dia, mes ou ano.
 * @param {type} data
 * @param {type} day
 * @returns {unresolved}
 */
function incrementaData(data, day = 0, tipo) {
    var dtFim = new Date(data.getFullYear(), data.getMonth(), data.getDate());
    if (isValidDate(data)) {
        if (tipo === 'DIA') {
            dtFim.setDate(data.getDate() + parseInt(day));
        } else if (tipo === 'MES') {
            var meses = (dtFim.getMonth() + day);
            dtFim.setMonth(meses);
        } else if (tipo === 'ANO') {
            var ano = (data.getYear() + day);
            dtFim.setYear(ano);
        } else {
            dtFim.setDate(data.getDate() + parseInt(day));
        }
        return dtFim.toISOString().substring(0, 10);
    }
    return false;
}

/**
 * destaca input válida ou inválida
 * @param {type} input
 * @param {type} isValid
 * @param {type} invalidBorder
 * @param {type} validBorder
 * @returns {@var;isValid|Boolean}
 */
function destacaInputValidada(input, isValid = true, invalidBorder = "1px solid FireBrick", validBorder = "1px solid MediumSeaGreen") {
    if (isValid) {
        $(input).css({"border": validBorder});
    } else {
        $(input).css({"border": invalidBorder});
    }
    return isValid;
}

/**
 * valida, destaca e seleciona input(s)
 * @param {type} array
 * @param {type} selecionar
 * @returns {Boolean}
 */
function validaDestacaESelecionaInputs(array, selecionar = true) {
    var isValid = true;
    var inputSelect = null;

    if (Object.keys(array).length > 0) {
        $.each(array, function (key, obj) {
            var inputType = document.getElementById($(obj.input).attr('name')).type;
            var retornoValido = validaInputPreenchidaPorType(obj.input);
            destacaInputValidada(obj.input, retornoValido);
            if (isValid && !retornoValido) {
                inputSelect = {"input": obj.input, "type": inputType};
                ;
                isValid = false;
            }
        });
        if (selecionar && !isValid && inputSelect !== null) {
            selecionaInputPorTipo(inputSelect.input, inputSelect.type);
        }
    }

    return isValid;
}

/**
 * valida input preenchida conforme tipo da input
 * @param {type} input
 * @returns {Boolean}
 */
function validaInputPreenchidaPorType(input) {
    var inputType = document.getElementById($(input).attr('name')).type;

    if (inputType === 'number' && roundValue($(input).val()) <= 0) {
        return false;
    } else if (inputType === 'text' && $(input).val() === '') {
        return false;
    } else if (inputType === 'date' && !isValidDate($(input).val())) {
        return false;
    } else if (inputType === 'textarea' && $(input).val() === '') {
        return false;
    } else if (inputType === 'select-one' && $(input).val() === '') {
        return false;
    }
    return true;
}

/**
 * seleciona input pelo Id
 * @param {type} input
 * @param {type} inputType
 * @returns {undefined}
 */
function selecionaInputPorTipo(input, inputType) {
    if (inputType === 'select-one') {
        $(input).focus().select();
    } else {
        $(input).focus();
    }
}

/**
 * função para limpar inputs, sendo passado array de objeto contendo os ids das inputs
 * formato recebido [{id: '#idInput1'}, {id: '#idInput2'}, {id: '#idInput3'}...]
 * @param {type} array
 * @returns {undefined}
 */
function limparInputsPorIdInput(array) {
    if (array !== null && Object.keys(array).length > 0) {
        $.each(array, function (key, input) {
            $(input.id).val('');
        });
    }
}

/**
 * função para redirecionamento de página
 * @param {type} page
 * @returns {undefined}
 */
function redirectToPage(page) {
    try {
        window.location.href = page;
    } catch (err) {
        mostraError('Erro: ' + err);
    }
}

/**
 * função para abrir página em uma nova aba do navegador
 * @param {type} page
 * @returns {undefined}
 */
function openPageInNewTab(page) {
    try {
        window.open(page);
    } catch (err) {
        mostraError('Erro: ' + err);
    }
}

function validaCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf === '')
        return false;
    // Elimina CPFs invalidos conhecidos	
    if (cpf.length !== 11 ||
            cpf === "00000000000" ||
            cpf === "11111111111" ||
            cpf === "22222222222" ||
            cpf === "33333333333" ||
            cpf === "44444444444" ||
            cpf === "55555555555" ||
            cpf === "66666666666" ||
            cpf === "77777777777" ||
            cpf === "88888888888" ||
            cpf === "99999999999")
        return false;
    // Valida 1o digito	
    var add = 0;
    for (var i = 0; i < 9; i ++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    var rev = 11 - (add % 11);
    if (rev === 10 || rev === 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    // Valida 2o digito	
    add = 0;
    for (i = 0; i < 10; i ++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev === 10 || rev === 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;

    return true;
}

function validarCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj === '')
        return false;

    if (cnpj.length !== 14)
        return false;
    // Elimina CNPJs invalidos conhecidos
    if (cnpj === "00000000000000" ||
            cnpj === "11111111111111" ||
            cnpj === "22222222222222" ||
            cnpj === "33333333333333" ||
            cnpj === "44444444444444" ||
            cnpj === "55555555555555" ||
            cnpj === "66666666666666" ||
            cnpj === "77777777777777" ||
            cnpj === "88888888888888" ||
            cnpj === "99999999999999")
        return false;
    // Valida DVs
    var tamanho = cnpj.length - 2
    var numeros = cnpj.substring(0, tamanho);
    var digitos = cnpj.substring(tamanho);
    var soma = 0;
    var pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    var resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;

}

function removeAcento(text){                                                                   
    text = text.replace(new RegExp('[ÁÀÂÃ][áàâã]','gi'), 'a');
    text = text.replace(new RegExp('[ÉÈÊ][éèê]','gi'), 'e');
    text = text.replace(new RegExp('[ÍÌÎ][íìî]','gi'), 'i');
    text = text.replace(new RegExp('[ÓÒÔÕ][óòôõ]','gi'), 'o');
    text = text.replace(new RegExp('[ÚÙÛ][úùû]','gi'), 'u');
    text = text.replace(new RegExp('[Ç][ç]','gi'), 'c');
    return text;
}
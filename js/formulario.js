window.onload(addCarros())


function addCarros(value) {

    var lblModelo = document.getElementById("lblModelo").style.display = "none";
    var preco = document.getElementById('txtPrecoCarro').style.display = 'none';
    if (value == '1') {
        //======================= CRIANDO OS CARROS TOYOTA NO SEGUNDO SELECT=================///
        var selectParcela = document.getElementById('txtParcela').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtTipoCarro').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtAnoCarro').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtEntrada').removeAttribute('disabled')

        var novoSelect = document.querySelector('#txtNovoSelect')
        var myselect = document.createElement('select')
        myselect.setAttribute('class', "browser-default custom-select")
        myselect.setAttribute('id', 'txtToyota')
        myselect.setAttribute('onchange', 'chamaFoto(this.value)')
        myselect.style.marginTop = "-33px"
        var optionToyota = document.createElement('option')
        var optionSw4 = document.createElement('option')
        var optionEtios = document.createElement('option')
        var optionOpcao = document.createElement('option')
        var optionRav4 = document.createElement('option')
        var optionPrius = document.createElement('option')
        var optionYaris = document.createElement('option')

        optionToyota.innerHTML = 'Corola'
        optionEtios.innerHTML = 'Etios'
        optionSw4.innerHTML = 'Sw4'
        optionRav4.innerHTML = 'Rav4'
        optionPrius.innerHTML = 'Prius'
        optionYaris.innerHTML = 'Yaris'
        optionOpcao.innerHTML = 'Escolha Uma Opção'

        myselect.append(optionOpcao)
        myselect.append(optionToyota)
        myselect.append(optionEtios)
        myselect.append(optionSw4)
        myselect.append(optionRav4)
        myselect.append(optionPrius)
        myselect.append(optionYaris)
        novoSelect.append(myselect)
        var lblModelo = document.getElementById("lblModelo").style.display = "block";
        console.log(novoSelect)



        if (document.getElementById('txtHyundai') == null) {


        } else {
            // APAGANDO O SELECT DA HYUNDAI

            var selectHyundai = document.getElementById('txtHyundai')
            var elementoPai = selectHyundai.parentNode;
            elementoPai.removeChild(selectHyundai);
        }

        // APAGANDO O SELECT DA HONDA
        if (document.getElementById('txtHonda') == null) {


        } else {

            var selectHonda = document.getElementById('txtHonda')
            // APAGANDO OS SELECTS DA HONDA
            var elementoPai = selectHonda.parentNode;
            elementoPai.removeChild(selectHonda);
            console.log(elementoPai)
        }

        //=============== FIM CADASTRO TOYOTA======================//

    } else if (value == '2') {

        var selectParcela = document.getElementById('txtParcela').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtTipoCarro').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtAnoCarro').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtEntrada').removeAttribute('disabled')

        var selectParcela = document.getElementById('txtParcela')
        selectParcela.removeAttribute('disabled')
        var novoSelect = document.querySelector('#txtNovoSelect')
        var myselect = document.createElement('select')
        myselect.setAttribute('class', "browser-default custom-select")
        myselect.setAttribute('id', 'txtHyundai')
        myselect.setAttribute('onchange', 'chamaFoto(this.value)')
        myselect.style.marginTop = "-33px"
        var optionHb20 = document.createElement('option')
        var optionSantaFe = document.createElement('option')
        var optionIx35 = document.createElement('option')
        var optionElantra = document.createElement('option')
        var optionTucson = document.createElement('option')
        var optionCreta = document.createElement('option')
        var optionOpcao = document.createElement('option')

        optionHb20.innerHTML = 'Hb20'
        optionSantaFe.innerHTML = 'Santa Fe'
        optionIx35.innerHTML = 'Ix35'
        optionElantra.innerHTML = 'Elantra'
        optionCreta.innerHTML = 'Creta'
        optionTucson.innerHTML = 'Tucson'
        optionOpcao.innerHTML = 'Escolha Uma Opção'

        myselect.append(optionOpcao)
        myselect.append(optionHb20)
        myselect.append(optionSantaFe)
        myselect.append(optionIx35)
        myselect.append(optionElantra)
        myselect.append(optionCreta)
        myselect.append(optionTucson)
        novoSelect.append(myselect)
        var lblModelo = document.getElementById("lblModelo").style.display = "block";
        console.log(novoSelect)


        if (document.getElementById('txtToyota') == null) {


        } else {
            //APAGANDO OS SELECTS DA TOYOTA
            var selectToyota = document.getElementById('txtToyota')
            var elementoPai = selectToyota.parentNode;
            elementoPai.removeChild(selectToyota);
        }

        if (document.getElementById('txtHonda') == null) {
        } else {
            var selectHonda = document.getElementById('txtHonda')
            // APAGANDO OS SELECTS DA HONDA
            var elementoPai = selectHonda.parentNode;
            elementoPai.removeChild(selectHonda);
            console.log(elementoPai)
        }

    } else if (value == 3) {


        var selectParcela = document.getElementById('txtParcela').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtTipoCarro').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtAnoCarro').removeAttribute('disabled')
        var selectParcela = document.getElementById('txtEntrada').removeAttribute('disabled')

        var novoSelect = document.querySelector('#txtNovoSelect')
        var myselect = document.createElement('select')
        myselect.setAttribute('class', "browser-default custom-select")
        myselect.setAttribute('id', 'txtHonda')
        myselect.setAttribute('onchange', 'chamaFoto(this.value)')
        myselect.style.marginTop = "-33px"
        var optionCivic = document.createElement('option')
        var optionFit = document.createElement('option')
        var optionCity = document.createElement('option')
        var optionOpcao = document.createElement('option')
        var optionCrv = document.createElement('option')
        var optionWrv = document.createElement('option')
        var optionHrv = document.createElement('option')


        optionCity.innerHTML = 'City'
        optionCivic.innerHTML = 'Civic'
        optionFit.innerHTML = 'Fit'
        optionHrv.innerHTML = 'Hrv'
        optionWrv.innerHTML = 'Wrv'
        optionCrv.innerHTML = 'Crv'
        optionOpcao.innerHTML = 'Escolha Uma Opção'

        myselect.append(optionOpcao)
        myselect.append(optionCity)
        myselect.append(optionCivic)
        myselect.append(optionFit)
        myselect.append(optionHrv)
        myselect.append(optionWrv)
        myselect.append(optionCrv)
        novoSelect.append(myselect)
        var lblModelo = document.getElementById("lblModelo").style.display = "block";


        if (document.getElementById('txtHyundai') == null) {


        } else {
            // APAGANDO O SELECT DA HYUNDAI

            var selectHyundai = document.getElementById('txtHyundai')
            var elementoPai = selectHyundai.parentNode;
            elementoPai.removeChild(selectHyundai);
        }

        if (document.getElementById('txtToyota') == null) {


        } else {
            // APAGANDO OS SELECTS DA TOYOTA

            var selectToyota = document.getElementById('txtToyota')
            var elementoPai = selectToyota.parentNode;
            elementoPai.removeChild(selectToyota);
        }
    }
}


//==================================CADASTRO DOS INPUTS E SELECTS PARA A TABELA======================//
function cadastraTabela() {

    // Pegando os valore dos inputs
    var txtnome = document.getElementById("txtNome").value;
    var txtCpf = document.getElementById("txtCpf").value;
    var txtRg = document.getElementById("txtRg").value;
    var txtData = document.getElementById("txtData").value;
    var txtEntrada = document.getElementById("txtEntrada").value
    var precoVeiculo = document.getElementById('txtPrecoCarro').value
    var prestacaoEntrada = 0;
    var prestacaoMes = 0;

    // chamando o metodo valida campo para dentro da função


    // trcho abaixo verifica se o id do select ja existe! por conta de problema para pegar o value do select assim
    // que inicia a aplicação.
    if (document.getElementById('txtHyundai') == null) {
        // se cair aqui é porque o selecHyundai Nao existe
    } else {



        //pegando modelo do carro
        var selectHyundai = document.querySelector('#txtHyundai');
        var optionHyundai = selectHyundai.children[selectHyundai.selectedIndex];
        var textoHyundai = optionHyundai.innerHTML;
        //
        //Pegando Marca do Carro
        var selectMarca = document.querySelector('#mySelect');
        var optionMarca = selectMarca.children[selectMarca.selectedIndex];
        var textoMarca = optionMarca.innerHTML;
        //Pegando o valor da parcela
        var selectParcela = document.querySelector('#txtParcela');
        var optionParcela = selectParcela.children[selectParcela.selectedIndex];
        var textoParcela = optionParcela.innerHTML;
        //pegando o tipo do carro
        var selectTipoCarro = document.querySelector('#txtTipoCarro');
        var optionTipoCarro = selectTipoCarro.children[selectTipoCarro.selectedIndex];
        var textoTipoCarro = optionTipoCarro.innerHTML;

        var selectAnoCarro = document.querySelector('#txtAnoCarro');
        var optionAnoCarro = selectAnoCarro.children[selectAnoCarro.selectedIndex];
        var textoAnoCarro = optionAnoCarro.innerHTML;


        var table = document.querySelector("table");
        var newTr = document.createElement("tr");
        var tdNome = document.createElement("td");
        var tdCpf = document.createElement("td");
        var tdRg = document.createElement("td");
        var tdData = document.createElement("td");
        var tdMarca = document.createElement('td')
        var tdModelo = document.createElement('td')
        var tdParcelas = document.createElement('td')
        var tdTipoCarros = document.createElement('td')
        var tdAno = document.createElement('td')
        var tdValorCarro = document.createElement('td')
        var tdValorPrestacao = document.createElement('td')
        var tdValorEntrada = document.createElement('td')
        var tdSituacao = document.createElement('td')



        if (txtEntrada < 5000) {
            prestacaoEntrada = (parseFloat(precoVeiculo) - parseFloat(txtEntrada))
            alert(prestacaoEntrada)
            prestacaoMes = parseFloat(prestacaoEntrada) / parseFloat(textoParcela)
            alert(prestacaoMes)

            tdNome.innerHTML = txtnome;
            tdCpf.innerHTML = txtCpf
            tdRg.innerHTML = txtRg;
            tdData.innerHTML = txtData;
            tdMarca.innerHTML = textoMarca;
            tdModelo.innerHTML = textoHyundai;
            tdParcelas.innerHTML = parseInt(textoParcela) + ' X';
            tdTipoCarros.innerHTML = textoTipoCarro;
            tdAno.innerHTML = textoAnoCarro;
            tdValorCarro.innerHTML = 'R$' + precoVeiculo;
            tdValorPrestacao.innerHTML = 'R$' + prestacaoMes;
            tdValorEntrada.innerHTML = 'R$' + txtEntrada;
            tdSituacao.setAttribute('style', 'color:red; font-size:20px;')
            tdSituacao.innerHTML = "Reprovado";

            // apresentando os valores
            newTr.appendChild(tdNome);
            newTr.appendChild(tdCpf);
            newTr.appendChild(tdRg);
            newTr.appendChild(tdData);
            newTr.appendChild(tdMarca);
            newTr.appendChild(tdModelo)
            newTr.appendChild(tdParcelas)
            newTr.appendChild(tdTipoCarros)
            newTr.appendChild(tdAno);
            newTr.appendChild(tdValorCarro);
            newTr.appendChild(tdValorPrestacao);
            newTr.appendChild(tdValorEntrada)
            newTr.appendChild(tdSituacao);
            table.appendChild(newTr);


            alert("Pedido Realizado com Sucesso!")
            document.getElementById("txtNome").value = "";
            document.getElementById("txtCpf").value = "";
            document.getElementById("txtRg").value = "";
            document.getElementById("txtData").value = "";


        } else {
            prestacaoEntrada = (parseFloat(precoVeiculo) - parseFloat(txtEntrada))
            alert(prestacaoEntrada)
            prestacaoMes = parseFloat(prestacaoEntrada) / parseFloat(textoParcela)
            alert(prestacaoMes)

            tdNome.innerHTML = txtnome;
            tdCpf.innerHTML = txtCpf
            tdRg.innerHTML = txtRg;
            tdData.innerHTML = txtData;
            tdMarca.innerHTML = textoMarca;
            tdModelo.innerHTML = textoHyundai;
            tdParcelas.innerHTML = parseInt(textoParcela) + ' X';
            tdTipoCarros.innerHTML = textoTipoCarro;
            tdAno.innerHTML = textoAnoCarro;
            tdValorCarro.innerHTML = 'R$' + precoVeiculo;
            tdValorPrestacao.innerHTML = 'R$' + prestacaoMes;
            tdValorEntrada.innerHTML = 'R$' + txtEntrada;
            tdSituacao.setAttribute('style', 'color:green; font-size:20px;')
            tdSituacao.innerHTML = "Aprovada";

            // apresentando os valores
            newTr.appendChild(tdNome);
            newTr.appendChild(tdCpf);
            newTr.appendChild(tdRg);
            newTr.appendChild(tdData);
            newTr.appendChild(tdMarca);
            newTr.appendChild(tdModelo)
            newTr.appendChild(tdParcelas)
            newTr.appendChild(tdTipoCarros)
            newTr.appendChild(tdAno);
            newTr.appendChild(tdValorCarro);
            newTr.appendChild(tdValorPrestacao);
            newTr.appendChild(tdValorEntrada)
            newTr.appendChild(tdSituacao);
            table.appendChild(newTr);


            alert("Pedido Realizado com Sucesso!")
            document.getElementById("txtNome").value = "";
            document.getElementById("txtCpf").value = "";
            document.getElementById("txtRg").value = "";
            document.getElementById("txtData").value = "";

        }
    }

    //CADASTRO TOYOTA TABELA
    if (document.getElementById('txtToyota') == null) {
        // se cair aqui e porque o selectToyota N existe
    } else {



        //pegando modelo do carro
        var selectToyota = document.querySelector('#txtToyota');
        var optionToyota = selectToyota.children[selectToyota.selectedIndex];
        var textoToyota = optionToyota.innerHTML;


        var selectMarca = document.querySelector('#mySelect');
        var optionMarca = selectMarca.children[selectMarca.selectedIndex];
        var textoMarca = optionMarca.innerHTML;

        var selectParcela = document.querySelector('#txtParcela');
        var optionParcela = selectParcela.children[selectParcela.selectedIndex];
        var textoParcela = optionParcela.innerHTML;

        var selectTipoCarro = document.querySelector('#txtTipoCarro');
        var optionTipoCarro = selectTipoCarro.children[selectTipoCarro.selectedIndex];
        var textoTipoCarro = optionTipoCarro.innerHTML;

        var selectAnoCarro = document.querySelector('#txtAnoCarro');
        var optionAnoCarro = selectAnoCarro.children[selectAnoCarro.selectedIndex];
        var textoAnoCarro = optionAnoCarro.innerHTML;


        var table = document.querySelector("table");
        var newTr = document.createElement("tr");
        var tdNome = document.createElement("td");
        var tdCpf = document.createElement("td");
        var tdRg = document.createElement("td");
        var tdData = document.createElement("td");
        var tdMarca = document.createElement('td')
        var tdModelo = document.createElement('td')
        var tdParcelas = document.createElement('td')
        var tdTipoCarros = document.createElement('td')
        var tdAno = document.createElement('td')
        var tdValorCarro = document.createElement('td')
        var tdValorPrestacao = document.createElement('td')
        var tdValorEntrada = document.createElement('td')
        var tdSituacao = document.createElement('td')



        if (txtEntrada < 5000) {
            prestacaoEntrada = (parseFloat(precoVeiculo) - parseFloat(txtEntrada))
            alert(prestacaoEntrada)
            prestacaoMes = parseFloat(prestacaoEntrada) / parseFloat(textoParcela)
            alert(prestacaoMes)

            tdNome.innerHTML = txtnome;
            tdCpf.innerHTML = txtCpf
            tdRg.innerHTML = txtRg;
            tdData.innerHTML = txtData;
            tdMarca.innerHTML = textoMarca;
            tdModelo.innerHTML = textoToyota;
            tdParcelas.innerHTML = parseInt(textoParcela) + ' X';
            tdTipoCarros.innerHTML = textoTipoCarro;
            tdAno.innerHTML = textoAnoCarro;
            tdValorCarro.innerHTML = 'R$' + precoVeiculo;
            tdValorPrestacao.innerHTML = 'R$' + prestacaoMes;
            tdValorEntrada.innerHTML = 'R$' + txtEntrada;
            tdSituacao.setAttribute('style', 'color:red; font-size:20px;')
            tdSituacao.innerHTML = "Reprovado";

            // apresentando os valores
            newTr.appendChild(tdNome);
            newTr.appendChild(tdCpf);
            newTr.appendChild(tdRg);
            newTr.appendChild(tdData);
            newTr.appendChild(tdMarca);
            newTr.appendChild(tdModelo)
            newTr.appendChild(tdParcelas)
            newTr.appendChild(tdTipoCarros)
            newTr.appendChild(tdAno);
            newTr.appendChild(tdValorCarro);
            newTr.appendChild(tdValorPrestacao);
            newTr.appendChild(tdValorEntrada)
            newTr.appendChild(tdSituacao);
            table.appendChild(newTr);


            alert("Pedido Realizado com Sucesso!")
            document.getElementById("txtNome").value = "";
            document.getElementById("txtCpf").value = "";
            document.getElementById("txtRg").value = "";
            document.getElementById("txtData").value = "";


        } else {
            prestacaoEntrada = (parseFloat(precoVeiculo) - parseFloat(txtEntrada))
            alert(prestacaoEntrada)
            prestacaoMes = parseFloat(prestacaoEntrada) / parseFloat(textoParcela)
            alert(prestacaoMes)

            tdNome.innerHTML = txtnome;
            tdCpf.innerHTML = txtCpf
            tdRg.innerHTML = txtRg;
            tdData.innerHTML = txtData;
            tdMarca.innerHTML = textoMarca;
            tdModelo.innerHTML = textoToyota;
            tdParcelas.innerHTML = parseInt(textoParcela) + ' X';
            tdTipoCarros.innerHTML = textoTipoCarro;
            tdAno.innerHTML = textoAnoCarro;
            tdValorCarro.innerHTML = 'R$' + precoVeiculo;
            tdValorPrestacao.innerHTML = 'R$' + prestacaoMes;
            tdValorEntrada.innerHTML = 'R$' + txtEntrada;
            tdSituacao.setAttribute('style', 'color:green; font-size:20px;')
            tdSituacao.innerHTML = "Aprovada";

            // apresentando os valores
            newTr.appendChild(tdNome);
            newTr.appendChild(tdCpf);
            newTr.appendChild(tdRg);
            newTr.appendChild(tdData);
            newTr.appendChild(tdMarca);
            newTr.appendChild(tdModelo)
            newTr.appendChild(tdParcelas)
            newTr.appendChild(tdTipoCarros)
            newTr.appendChild(tdAno);
            newTr.appendChild(tdValorCarro);
            newTr.appendChild(tdValorPrestacao);
            newTr.appendChild(tdValorEntrada)
            newTr.appendChild(tdSituacao);
            table.appendChild(newTr);


            alert("Pedido Realizado com Sucesso!")
            document.getElementById("txtNome").value = "";
            document.getElementById("txtCpf").value = "";
            document.getElementById("txtRg").value = "";
            document.getElementById("txtData").value = "";

        }
    }

    // Honda Cadastro

    if (document.getElementById('txtHonda') == null) {
        //se cair aqui e porque o selectHonda n Existe
    } else {
        // se cair aqui e porque existe e ele vai pegar os values de todos os selectes de acordo com seus Id

        //pegando modelo do carro
        var selectHonda = document.querySelector('#txtHonda');
        var optionHonda = selectHonda.children[selectHonda.selectedIndex];
        var textoHonda = optionHonda.innerHTML;

        var selectMarca = document.querySelector('#mySelect');
        var optionMarca = selectMarca.children[selectMarca.selectedIndex];
        var textoMarca = optionMarca.innerHTML;

        var selectParcela = document.querySelector('#txtParcela');
        var optionParcela = selectParcela.children[selectParcela.selectedIndex];
        var textoParcela = optionParcela.innerHTML;

        var selectTipoCarro = document.querySelector('#txtTipoCarro');
        var optionTipoCarro = selectTipoCarro.children[selectTipoCarro.selectedIndex];
        var textoTipoCarro = optionTipoCarro.innerHTML;

        var selectAnoCarro = document.querySelector('#txtAnoCarro');
        var optionAnoCarro = selectAnoCarro.children[selectAnoCarro.selectedIndex];
        var textoAnoCarro = optionAnoCarro.innerHTML;

        var table = document.querySelector("table");
        var newTr = document.createElement("tr");
        var tdNome = document.createElement("td");
        var tdCpf = document.createElement("td");
        var tdRg = document.createElement("td");
        var tdData = document.createElement("td");
        var tdMarca = document.createElement('td')
        var tdModelo = document.createElement('td')
        var tdParcelas = document.createElement('td')
        var tdTipoCarros = document.createElement('td')
        var tdAno = document.createElement('td')
        var tdValorCarro = document.createElement('td')
        var tdValorPrestacao = document.createElement('td')
        var tdValorEntrada = document.createElement('td')
        var tdSituacao = document.createElement('td')

        if (txtEntrada < 5000) {
            prestacaoEntrada = (parseFloat(precoVeiculo) - parseFloat(txtEntrada))
            alert(prestacaoEntrada)
            prestacaoMes = parseFloat(prestacaoEntrada) / parseFloat(textoParcela)
            alert(prestacaoMes)

            tdNome.innerHTML = txtnome;
            tdCpf.innerHTML = txtCpf
            tdRg.innerHTML = txtRg;
            tdData.innerHTML = txtData;
            tdMarca.innerHTML = textoMarca;
            tdModelo.innerHTML = textoHonda;
            tdParcelas.innerHTML = parseInt(textoParcela) + ' X';
            tdTipoCarros.innerHTML = textoTipoCarro;
            tdAno.innerHTML = textoAnoCarro;
            tdValorCarro.innerHTML = 'R$' + precoVeiculo;
            tdValorPrestacao.innerHTML = 'R$' + prestacaoMes;
            tdValorEntrada.innerHTML = 'R$' + txtEntrada;
            tdSituacao.setAttribute('style', 'color:red; font-size:20px;')
            tdSituacao.innerHTML = "Reprovado";

            // apresentando os valores
            newTr.appendChild(tdNome);
            newTr.appendChild(tdCpf);
            newTr.appendChild(tdRg);
            newTr.appendChild(tdData);
            newTr.appendChild(tdMarca);
            newTr.appendChild(tdModelo)
            newTr.appendChild(tdParcelas)
            newTr.appendChild(tdTipoCarros)
            newTr.appendChild(tdAno);
            newTr.appendChild(tdValorCarro);
            newTr.appendChild(tdValorPrestacao);
            newTr.appendChild(tdValorEntrada)
            newTr.appendChild(tdSituacao);
            table.appendChild(newTr);


            alert("Pedido Realizado com Sucesso!")
            document.getElementById("txtNome").value = "";
            document.getElementById("txtCpf").value = "";
            document.getElementById("txtRg").value = "";
            document.getElementById("txtData").value = "";


        } else {
            prestacaoEntrada = (parseFloat(precoVeiculo) - parseFloat(txtEntrada))
            alert(prestacaoEntrada)
            prestacaoMes = parseFloat(prestacaoEntrada) / parseFloat(textoParcela)
            alert(prestacaoMes)

            tdNome.innerHTML = txtnome;
            tdCpf.innerHTML = txtCpf
            tdRg.innerHTML = txtRg;
            tdData.innerHTML = txtData;
            tdMarca.innerHTML = textoMarca;
            tdModelo.innerHTML = textoHonda;
            tdParcelas.innerHTML = parseInt(textoParcela) + ' X';
            tdTipoCarros.innerHTML = textoTipoCarro;
            tdAno.innerHTML = textoAnoCarro;
            tdValorCarro.innerHTML = 'R$' + precoVeiculo;
            tdValorPrestacao.innerHTML = 'R$' + prestacaoMes;
            tdValorEntrada.innerHTML = 'R$' + txtEntrada;
            tdSituacao.setAttribute('style', 'color:green; font-size:20px;')
            tdSituacao.innerHTML = "Aprovada";

            // apresentando os valores
            newTr.appendChild(tdNome);
            newTr.appendChild(tdCpf);
            newTr.appendChild(tdRg);
            newTr.appendChild(tdData);
            newTr.appendChild(tdMarca);
            newTr.appendChild(tdModelo)
            newTr.appendChild(tdParcelas)
            newTr.appendChild(tdTipoCarros)
            newTr.appendChild(tdAno);
            newTr.appendChild(tdValorCarro);
            newTr.appendChild(tdValorPrestacao);
            newTr.appendChild(tdValorEntrada)
            newTr.appendChild(tdSituacao);
            table.appendChild(newTr);


            alert("Pedido Realizado com Sucesso!")
            document.getElementById("txtNome").value = "";
            document.getElementById("txtCpf").value = "";
            document.getElementById("txtRg").value = "";
            document.getElementById("txtData").value = "";

        }
    }
    // colocando valor nos camp    
}


function chamaFoto(value) {

    if (value == 'Corola') {

        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/toyota/corola.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '70000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Etios') {

        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/toyota/Etios.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '60500';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Sw4') {

        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/toyota/Sw4.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '110000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Hb20') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/hyundai/Hb20.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '40000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Ix35') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/hyundai/ix35.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '38900';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Santa Fe') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/hyundai/Santa FE.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '60900';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'City') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/Honda/City.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '77900';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Civic') {

        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/Honda/civic.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '55900';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Fit') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/Honda/Fit.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '45900';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Elantra') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/hyundai/elantra.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '60900';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Creta') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/hyundai/creta.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '80000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Tucson') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/hyundai/tucson.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '90500';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Rav4') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/toyota/rav4.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '60500';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Prius') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/toyota/prius.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '45500';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)

    } else if (value == 'Yaris') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/toyota/yaris.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '50500';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)
    } else if (value == 'Hrv') {
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/Honda/hrv.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '120000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)
    }else if (value=='Wrv'){
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/Honda/wrv.jpg')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '130000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)
    }else if (value=='Crv'){
        var imgFoto = document.getElementById('imgFoto');
        imgFoto.setAttribute('src', 'img/Honda/crv.png')
        var precoCarro = document.getElementById('txtPrecoCarro').value = '100000';
        var precoCarro = document.getElementById('txtPrecoCarro').style.display = "block"
        console.log(imgFoto)
    }

}
/*
function remove(value) {

    var selectobject = document.getElementById("txtCarro");
    for (var i = 1; i < selectobject.length; i++) {

        if (value == 2) {
            if (selectobject.options[i].value == 'Corola') {
                selectobject.remove(i);
            } if (selectobject.options[i].value == 'Etios') {
                selectobject.remove(i);
            } if (selectobject.options[i].value == 'Sw4') {
                selectobject.remove(i);
            }
            if (selectobject.options[i].value == 'Hb20') {
                selectobject.remove(i);
            } if (selectobject.options[i].value == 'IX35') {
                selectobject.remove(i);
            } if (selectobject.options[i].value == 'Santa Fe') {
                selectobject.remove(i);
            }
        } else if (value == 1) {
            if (selectobject.options[i].value == 'Hb20') {
                selectobject.remove(i);
            } if (selectobject.options[i].value == 'IX35') {
                selectobject.remove(i);
            } if (selectobject.options[i].value == 'Santa Fe') {
                selectobject.remove(i);
            }


        }


        var selectCarro = document.getElementById("txtCarro").style.display = "none";
        var selectCarro = document.getElementById("lblModelo").style.display = "none";

    }
}*/
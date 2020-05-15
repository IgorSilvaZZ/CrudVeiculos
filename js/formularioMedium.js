window.onload(pegatotal());

function addItem() {
    // pegando os valor dos  elementos
    var nome = document.getElementById("txtNomeItem").value;
    var preco = document.getElementById("txtPreco").value;
    var quantidade = document.getElementById("txtQuantidade").value;
    var dataFesta = document.getElementById("txtData").value;
    var select = document.querySelector('select');
    var option = select.children[select.selectedIndex];
    var texto = option.textContent;
    var subtotal = 0;

    if (dataFesta == '') {

        alert("Data Festa esta Vazia");
        document.getElementById('txtDataFesta').style.borderBottom = 'solid 1px red';
    } else {


        if(quantidade>=600){

        if (confirm("Limite Excedido recomendado plano Premiun limite e de 599 convidados") == true) {

                window.location.href = "FormularioPremiun.html";
                
            }
           
        }else{

        if (quantidade > 400 && quantidade <600) {

           
            document.getElementById('txtQuantidade').style.borderBottom = 'solid 2px red';

            if (confirm("Limite Excedido recomendado plano Premium ") == true) {

                window.location.href = "FormularioPremium.html";
            } else {
                
                alert("Sera Cobrado R$55 por pessoa acima de 400 convidados");
                var table = document.querySelector("table");
                var newTr = document.createElement("tr");
                var tdNomeItem = document.createElement("td");
                var tdPreco = document.createElement("td");
                var tdQuantidade = document.createElement("td");
                var tdSubtotal = document.createElement("td");
                var tdDataFesta = document.createElement("td");
                var tdTipoFesta = document.createElement("td");
                tdSubtotal.setAttribute('id', 'txtTableTotal');
                var h1total = document.querySelector("#txtTotal");
                var h1totalNovo = document.createElement("h1");




                // colocando valor nos camps
                subtotal = parseFloat(quantidade) * parseFloat(55);
                tdNomeItem.innerHTML = "Medium";
                tdPreco.innerHTML = 55;
                tdQuantidade.innerHTML = quantidade;
                tdSubtotal.innerHTML = subtotal;
                tdDataFesta.innerHTML = dataFesta;
                tdTipoFesta.innerHTML = texto;


                // apresentando os valores
                newTr.appendChild(tdNomeItem);
                newTr.appendChild(tdPreco);
                newTr.appendChild(tdQuantidade);
                newTr.appendChild(tdSubtotal);
                newTr.appendChild(tdDataFesta);
                newTr.appendChild(tdTipoFesta);
                table.appendChild(newTr);

                document.getElementById('txtQuantidade').style.borderBottom = 'solid 1px #4285f4';
                alert("Pedido Realizado com Sucesso!")
                document.getElementById("txtNomeItem").value = "";
                document.getElementById("txtPreco").value = "";
                document.getElementById("txtQuantidade").value = "";

                window.onload(pegatotal());
            }
        }
        
        } if (quantidade <= 400) {


            if (quantidade == '') {
                alert("Quantidade esta Vazia");
                document.getElementById('txtQuantidade').style.borderBottom = 'solid 1px red';
            } else {
                // setando os elemeentos do tbody
                var table = document.querySelector("table");
                var newTr = document.createElement("tr");
                var tdNomeItem = document.createElement("td");
                var tdPreco = document.createElement("td");
                var tdQuantidade = document.createElement("td");
                var tdSubtotal = document.createElement("td");
                var tdDataFesta = document.createElement("td");
                var tdTipoFesta = document.createElement("td");
                tdSubtotal.setAttribute('id', 'txtTableTotal');
                var h1total = document.querySelector("#txtTotal");
                var h1totalNovo = document.createElement("h1");




                // colocando valor nos camps
                subtotal = parseFloat(quantidade) * parseFloat(45);
                tdNomeItem.innerHTML = "Medium";
                tdPreco.innerHTML = 45;
                tdQuantidade.innerHTML = quantidade;
                tdSubtotal.innerHTML = subtotal;
                tdDataFesta.innerHTML = dataFesta;
                tdTipoFesta.innerHTML = texto;


                // apresentando os valores
                newTr.appendChild(tdNomeItem);
                newTr.appendChild(tdPreco);
                newTr.appendChild(tdQuantidade);
                newTr.appendChild(tdSubtotal);
                newTr.appendChild(tdDataFesta);
                newTr.appendChild(tdTipoFesta);
                table.appendChild(newTr);

                document.getElementById('txtQuantidade').style.borderBottom = 'solid 1px #4285f4';
                alert("Pedido Realizado com Sucesso!")
                document.getElementById("txtNomeItem").value = "";
                document.getElementById("txtPreco").value = "";
                document.getElementById("txtQuantidade").value = "";

                window.onload(pegatotal());

            }
            // console.log(tdSubtotal);  
        }
    }



}

function pegatotal() {

    var table = document.getElementById("table"), total = 0;

    for (var i = 1; i < table.rows.length; i++) {
        total = total + parseFloat(table.rows[i].cells[3].innerHTML);
    }

    document.getElementById("txtTotal").innerHTML = "Total = " + "R$" + total;
    console.log(total);
}

function teste() {
    var quantidade = document.getElementById("txtQuantidade").value;
    document.writeln

}











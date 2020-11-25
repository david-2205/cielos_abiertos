function sololetras(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key).toLowerCase();
        letras = " abcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-38-46-164";
        teclado_especial = false;
        for (var i in especiales) {
            if (key == especiales[i]) {
                teclado_especial = true;
                break;
            }
        }
        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }

    }

    function solonumeros(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key).toLowerCase();
        numeros = "123456789";
        especiales = "8-37-38-46-164";
        teclado_especial = false;
        if (numeros.indexOf(teclado) == -1) {
            return false;
        }

    }

    function func() {
        var type = document.getElementsByName("type");
        if (type[0].checked) {
            var val = type[0].value;
            document.getElementById("valor_pagar").value = val;
            console.log(val);
        } else if (type[1].checked) {
            var val = type[1].value;
            document.getElementById("valor_pagar").value = val;
            console.log(val);
        } else if (type[2].checked) {
            var val = type[2].value;
            document.getElementById("valor_pagar").value = val;
            console.log(val);
        } else if (type[3].checked) {
            var val = type[3].value;
            document.getElementById("valor_pagar").value = val;
            console.log(val);
        } else if (type[4].checked) {
            var val = type[4].value;
            document.getElementById("valor_pagar").value = val;
            console.log(val);
        }
    }

    
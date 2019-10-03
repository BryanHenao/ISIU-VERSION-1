/**CALCULOS GEOLOGIA 1 */
function calcularF_Geologia() {

    var total = 0;

    if (document.getElementById('sismicidad1').value == "" && document.getElementById('erosion1').value == "" && document.getElementById('derrumbes1').value == "" && document.getElementById('vulcanismo1').value == "" && document.getElementById('pendientes1').value == "" &&
        document.getElementById('calidadSuelo1').value == "") {
        document.getElementById('fpGeologia3').value = "";

    } else {
        if (eval(document.getElementById('sismicidad1').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('vulcanismo1').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('derrumbes1').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('pendientes1').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('erosion1').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('calidadSuelo1').value) == 1) {
            total = total + 1;
        }

        document.getElementById('fpGeologia3').value = eval(total);
    }

}

function calcularExPxF_Geologia() {
    var total = 0;
    if (document.getElementById('fpGeologia3').value !== "") {
        total = (document.getElementById('fpGeologia3').value) * 1 * 3;
        document.getElementById('expxfGeologia3').value = eval(total);
    } else {
        document.getElementById('expxfGeologia3').value = "";
    }

}

function calcularPxP_Geologia() {
    var total = 0;
    if (document.getElementById('fpGeologia3').value !== "") {
        total = (document.getElementById('fpGeologia3').value) * 3;
        document.getElementById('pxfGeologia3').value = eval(total);
    } else {
        document.getElementById('pxfGeologia3').value = "";
    }
}

/**CALCULOS BIOCLIMATICO 2 */
function calcularF_Geologia2() {

    var total = 0;

    if (document.getElementById('sismicidad2').value == "" && document.getElementById('erosion2').value == "" && document.getElementById('derrumbes2').value == "" && document.getElementById('vulcanismo2').value == "" && document.getElementById('pendientes2').value == "" &&
        document.getElementById('calidadSuelo2').value == "") {
        document.getElementById('fpGeologia2').value = "";

    } else {
        if (eval(document.getElementById('sismicidad2').value) == 1) {
            total = total + 1;
        } else {
            document.getElementById('sismicidad2').disabled = false;
        }
        if (eval(document.getElementById('vulcanismo2').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('derrumbes2').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('pendientes2').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('erosion2').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('calidadSuelo2').value) == 1) {
            total = total + 1;
        }

        document.getElementById('fpGeologia2').value = eval(total);
    }

}

function calcularExPxF_Geologia2() {
    var total = 0;
    if (document.getElementById('fpGeologia2').value !== "") {
        total = (document.getElementById('fpGeologia2').value) * 2 * 2;
        document.getElementById('expxfGeologia2').value = eval(total);
    } else {
        document.getElementById('expxfGeologia2').value = "";
    }

}

function calcularPxP_Geologia2() {
    var total = 0;
    if (document.getElementById('fpGeologia2').value !== "") {
        total = (document.getElementById('fpGeologia2').value) * 2;
        document.getElementById('pxfGeologia2').value = eval(total);
    } else {
        document.getElementById('pxfGeologia2').value = "";
    }
}

/**CALCULOS BIOCLIMATICO 3 */
function calcularF_Geologia3() {

    var total = 0;

    if (document.getElementById('sismicidad3').value == "" && document.getElementById('erosion3').value == "" && document.getElementById('derrumbes3').value == "" && document.getElementById('vulcanismo3').value == "" && document.getElementById('pendientes3').value == "" &&
        document.getElementById('calidadSuelo3').value == "") {
        document.getElementById('fpGeologia1').value = "";

    } else {
        if (eval(document.getElementById('sismicidad3').value) == 1) {
            total = total + 1;
        } else {
            document.getElementById('sismicidad3').disabled = false;
        }
        if (eval(document.getElementById('vulcanismo3').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('derrumbes3').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('pendientes3').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('erosion3').value) == 1) {
            total = total + 1;
        }
        if (eval(document.getElementById('calidadSuelo3').value) == 1) {
            total = total + 1;
        }

        document.getElementById('fpGeologia1').value = eval(total);
    }

}

function calcularExPxF_Geologia3() {
    var total = 0;
    if (document.getElementById('fpGeologia1').value !== "") {
        total = (document.getElementById('fpGeologia1').value) * 1 * 3;
        document.getElementById('expxfGeologia1').value = eval(total);
    } else {
        document.getElementById('expxfGeologia1').value = "";
    }

}

function calcularPxP_Geologia3() {
    var total = 0;
    if (document.getElementById('fpGeologia1').value !== "") {
        total = (document.getElementById('fpGeologia1').value) * 1;
        document.getElementById('pxfGeologia1').value = eval(total);
    } else {
        document.getElementById('pxfGeologia1').value = "";
    }
}

/**Sumatoria Bioclimatico */
function sumatoria_Geologia_expx() {

    if (((document.getElementById('expxfGeologia3').value)) == null || ((document.getElementById('expxfGeologia3').value)) == "") {
        (document.getElementById('expxfGeologia3').value) = 0;
    }
    if (((document.getElementById('expxfGeologia2').value)) == null || ((document.getElementById('expxfGeologia2').value)) == "") {
        (document.getElementById('expxfGeologia2').value) = 0;
    }
    if (((document.getElementById('expxfGeologia1').value)) == null || ((document.getElementById('expxfGeologia1').value)) == "") {
        (document.getElementById('expxfGeologia1').value) = 0;
    }

    document.getElementById('sumatoriaGeologiaExPxF').value = (parseFloat(document.getElementById('expxfGeologia3').value)) +
        (parseFloat(document.getElementById('expxfGeologia2').value)) +
        (parseFloat(document.getElementById('expxfGeologia1').value));

}

function sumatoria_Geologia_pxf() {

    if (((document.getElementById('pxfGeologia3').value)) == null || ((document.getElementById('pxfGeologia3').value)) == "") {
        (document.getElementById('pxfGeologia3').value) = 0;
    }
    if (((document.getElementById('pxfGeologia2').value)) == null || ((document.getElementById('pxfGeologia2').value)) == "") {
        (document.getElementById('pxfGeologia2').value) = 0;
    }
    if (((document.getElementById('pxfGeologia1').value)) == null || ((document.getElementById('pxfGeologia1').value)) == "") {
        (document.getElementById('pxfGeologia1').value) = 0;
    }

    document.getElementById('sumatoriaGeologiaPxF').value = (parseFloat(document.getElementById('pxfGeologia1').value)) +
        (parseFloat(document.getElementById('pxfGeologia2').value)) +
        (parseFloat(document.getElementById('pxfGeologia3').value));

}

function totalGeologia() {
    document.getElementById('totalGeologia').value = ((parseFloat(document.getElementById('sumatoriaGeologiaExPxF').value)) /
        (parseFloat(document.getElementById('sumatoriaGeologiaPxF').value))).toFixed(2);

    document.getElementById('evaluacionGeologia').value = eval(document.getElementById('totalGeologia').value).toFixed(2);
}
/**
 * Created by D'rin on 21/06/2017.
 */
$(document).ready(function () {


    var loader = $('#myLoader')
    var btn = $('#btn')
    var form = document.forms.namedItem("fileinfo");

    form.addEventListener('submit', function(ev) {


        ev.preventDefault();
        btn.hide();
        loader.addClass("loader");

        var oOutput = document.querySelector("#myModal"),
            oData = new FormData(form);

        oData.append("CustomField", "This is some extra data");

        var oReq = new XMLHttpRequest();
        oReq.open("POST", "/save", true);

        //oOutput.innerHTML="";



        oReq.onload = function(oEvent) {
            location.reload();
            if (oReq.status == 200) {
                loader.removeClass("loader");

                oOutput.innerHTML = "Traitement terminé!";
            } else {
                loader.removeClass("loader");

                oOutput.innerHTML = "Erreur " + oReq.status + " lors de l'upload du fichier.<br \/>";
            }
        };

        oReq.send(oData);
    }, false);
})
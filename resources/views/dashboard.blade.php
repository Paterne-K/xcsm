{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


@stop

@section('content')

    <div class="row fond">

        <div class="col-md-11 fond">
            <div class="box box-primary fond" id="firstBox">
                <div class="box-header with-border" id="fbheader">
                    <h1 class="box-title text">Bienvenue sur <b>XCSM module (Extended Content Structured Module)</b></h1>
                    <span class="label label-primary pull-right"><i class="fa fa-fw fa-institution "></i></span>
                </div><!-- /.box-header -->
                <div id="textB" class="box-body row ">
                    <div class="col-md-4 ">
                        <div class="row">
                            <img src="{{ asset('css/images/xcsm.PNG') }}" width="300" height="240">
                        </div>

                        <div class="row">
                            @if(isset(Auth::user()->is_admin) && Auth::user()->is_admin==1)
                                <div class="box-footer fond row">
                                    <!-- Trigger the modal with a button -->
                                    <div>
                                        <button type="button" data-toggle="modal" data-target="#myModal" id="importbut"
                                                class="btn btn-sm bg-blue-active">
                                            <span class="family mybutton">Importer un cours au format .docx</span>
                                        </button>
                                    </div>
                                    <div style="margin-top: 5px;">
                                        <button type="button" data-toggle="modal" data-target="#myModal" id="importbutPdf"
                                                class="btn btn-sm bg-blue-active">
                                            <span class="family mybutton">Importer un cours au format .pdf</span>
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade " role="dialog" tabindex="-1" aria-labelledby="titleform" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content modalcont">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" id="titleform">Importation d'un nouveau cours</h4>
                                                </div>
                                                <div class="modal-body">
                                                        {{ csrf_field() }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-8 mysize1">

                        <p>Le module de structuration des contenus (eXtended Content Structured Module)
                            permet de mettre en ligne des contenus structurés sur une plateforme de formation
                            xMoodle3.0.
                            </br>
                            Ce module:
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon "></i>
                            Organise les contenus en leur offrant une structure pédagogique de 5 niveaux,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Réduit les risques de surcharge cognitive en proposant aux apprenants des contenus sur
                            mesure,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Facilite la publication des contenus en ligne,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Garanti la réutilisation des notions lors de la composition de nouveaux cours,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Réduit considérablement les flux sur les bandes passantes lors des formations à distance.
                            </br>

                        </p>
                    </div>

                </div><!-- /.box-body -->

                <div class="" id="lastBox">

                    <h4 class="mysize family" id="textWarning" style="background-color:green"><i class="fa fa-fw fa-warning mysize"></i>
                        Les documents doivent être sous le format docx ou pdf pour être pris en compte!</h4>

                </div>
            </div><!-- /.box -->
        </div>
    </div>

    <footer id="footer" class=" navbar navbar-default navbar-fixed-bottom family">
        <div class="row">
            <div class=" col-md-9 ">
                <div class="row">
                    <h5 class="text" style="margin-left: 4%"> COPYRIGHT© 2017 - Developed By PROMOTION 2018
                    </h5>
                </div>
            </div>

            <div class=" col-md-3 ">
                 <div class="row" >
                     <a  href="#" data-toggle="modal" data-target="#myModal"  class="mycontact">
                    <span class="family text" style=""> CONTACTEZ-NOUS
                    </span>
                     </a>
                 </div>
            </div>
        </div>
    </footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/loader.css">
    <link rel="stylesheet" href="/css/accueilcss.css ">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        $('.mycontact').on('click', function(e){

            //e.preventDefault();

            var content = "<div class='row'>"+
                    "<div class='col-md-6'>"+
                    "<ul class=' '>"+
                    "<li>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Joêl DJIZANNE</span>"+
                    "</li> "+
                    "<li> "+
                    "<i class='fa fa-fw fa-user '>"+"</i>"+
                    " <span>Nadia DJONGOUE</span>"+
                    " </li>"+
                    "<li>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Stella N'DONGA</span>"+
                    "</li>"+
                    "<li class=''>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Michael NGUEMEN</span>"+
                    "</li>"+
                    "</ul>"+
                    "</div>"+
                    "<div class='col-md-6'>"+
                    " <ul class='' >"+
                    "<li>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Buffet TEGUIA</span>"+
                    "</li>"+
                    "<li>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Thierry TCHOFFO</span>"+
                    "</li>"+
                    "<li>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Michel TCHOUATCHA</span>"+
                    "</li>"+
                    "<li class=''>"+
                    "<i class='fa fa-fw fa-user '></i>"+
                    "<span>Doreen TCHOUPE</span>"+
                    "</li>"+
                    "</ul>"+
                    "</div>"+
                    "</div>";

            $('.modal-body').html(content);
            $('#titleform').html(" Equipe de développement");

        });


        $('#importbut').on('click', function(e){

            var v = "<form  role='form' action='/save' enctype='multipart/form-data' method='post' name='fileinfo'><input type='hidden' name='_token' id='_token' ><div class='form-group'><label for='name' class='nameform'>Nom du cours:</label><input type='name' class='form-control' id='name' name='name' placeholder='au format docx' required></div><br><br><div><div class='form-group'><label for='cours' class='nameform'>Fichier du cours</label><input type='file' class='form-control-file' id='cours' name='cours' aria-describedby='fileHelp' required></div></div><div class='col col-md-offset-5'><div id='myLoader' class='' ></div><button id='btn' type='submit' class='btn btn-success'>Valider</button></div></form>";

            $('.modal-body').html(v);
            $('#titleform').html("Importation d'un nouveau cours");

            var loader = $('#myLoader');
            var btn = $('#btn');
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

                        //
                        // -+oOutput.innerHTML = "Traitement terminé!";

                        alert("Traitement terminé avec succès");
                    } else {
                        loader.removeClass("loader");

                        //oOutput.innerHTML = "Erreur " + oReq.status + " lors de l'upload du fichier.<br \/>";

                        alert("Erreur " + oReq.status + " lors de l'upload du fichier.<br \/>");
                    }
                };

                oReq.send(oData);
            }, false);
        });


        $('#importbutPdf').on('click', function(e){

            var v = "<form  role='form' action='/save' enctype='multipart/form-data' method='post' name='fileinfo'><input type='hidden' name='_token' id='_token' ><div class='form-group'><label for='name' class='nameform'>Nom du cours:</label><input type='name' class='form-control' id='name' name='name' placeholder='au format pdf' required></div><br><br><div><div class='form-group'><label for='cours' class='nameform'>Fichier du cours</label><input type='file' class='form-control-file' id='cours' name='cours' aria-describedby='fileHelp' required></div></div><div class='col col-md-offset-5'><div id='myLoader' class='' ></div><button id='btn' type='submit' class='btn btn-success'>Valider</button></div></form>";

            $('.modal-body').html(v);
            $('#titleform').html("Importation d'un nouveau cours");

            var loader = $('#myLoader');
            var btn = $('#btn');
            var form = document.forms.namedItem("fileinfo");

            form.addEventListener('submit', function(ev) {
                ev.preventDefault();
                btn.hide();
                loader.addClass("loader");

                var oOutput = document.querySelector("#myModal"), oData = new FormData(form);

                oData.append("CustomField", "This is some extra data");

                var oReq = new XMLHttpRequest();
                oReq.open("POST", "/save", true);

                //oOutput.innerHTML="";

                oReq.onload = function(oEvent) {
                    location.reload();
                    if (oReq.status == 200) {
                        loader.removeClass("loader");

                        // -+oOutput.innerHTML = "Traitement terminé!";

                        alert("Traitement terminé avec succès");
                    } else {
                        loader.removeClass("loader");

                        //oOutput.innerHTML = "Erreur " + oReq.status + " lors de l'upload du fichier.<br \/>";

                        alert("Erreur " + oReq.status + " lors de l'upload du fichier.<br \/>");
                    }
                };

                oReq.send(oData);
            }, false);
        });

    </script>

    <script type="text/javascript" src="{{asset('js/save.js')}}"></script>
@stop
@push('css')

@push('js')

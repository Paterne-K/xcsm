/**
 * Created by D'rin on 20/06/2017.
 */
$(document).ready(function(){
    $("#search").keyup(function () {
        var recherche = $(this).val();
        var data = "motclef=" + recherche;
        if(recherche.length>=1){
            $.ajax({
                type:"GET",
                url:"/search",
                data: data,
                success:function (server_response) {
                    $(".listeCours").html(server_response).show();
                }
            })
        }
        if(recherche.length==0){
            $.ajax({
                type:"GET",
                url:"/search",
                data: "",
                success:function (server_response) {
                    $(".listeCours").html(server_response).show();
                }
            })
        }
    })
})
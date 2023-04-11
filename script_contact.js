$(document).ready(function(){
    var headingHeight = $("#contact").height();
    $("#phoneImage").height(headingHeight);

    $("#show1").click(function(){
        $("#formModal #formModalLabel").text("Jaki masz problem?")
        $("#formModal #message").attr('placeholder', 'Tutaj opisz swój problem.');
        var formModal = new bootstrap.Modal(document.getElementById("formModal"));
        formModal.show();
    })
    $("#show2").click(function(){
        $("#formModal #formModalLabel").text("Jaki masz pomysł?")
        $("#formModal #message").attr('placeholder', 'Tutaj napisz o twoim pomyśle.');
        var formModal = new bootstrap.Modal(document.getElementById("formModal"));
        formModal.show();
    })
    $("#show3").click(function(){
        $("#formModal #formModalLabel").text("Jakie masz pytanie?")
        $("#formModal #message").attr('placeholder', 'Tutaj napisz o co chcesz się zapytać.');
        var formModal = new bootstrap.Modal(document.getElementById("formModal"));
        formModal.show();
    })
})
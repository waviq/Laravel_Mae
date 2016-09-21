/**
 * Created by waviq on 19/09/2016.
 */
new Vue({
    el:'body',
    data:{

    }
});
$(function(){
    $(".name").typed({
        strings: ["Hello Mae.", "You are spesials friend for following this mission."],
        typeSpeed: 50,
        loop: true

    });
});

$(function(){
    $(".rest1").typed({
        strings: ["Hello Mae.", "Gimana? Susah ya?","Aku bikin lima soal tadi ampe 2 malem loch.",
            "Masih mau lanjut misi selanjutnya kan?",'Next Mision is not a TTS','Klik Button di bawah ini untuk melanjutkan Mision'],
        typeSpeed: 50,
        loop: true

    });
});

$(function(){
    $(".rest2").typed({
        strings: ["Hello Mae.", "Gimana?","Sudah bisa membayangkan siapa aku?","sedikit lagi misi selesai","tetap semangat ya"],
        typeSpeed: 50,
        loop: true

    });
});

SING_A_SONG = 'sing_a_song';
KEYWORDS = 'keywords';
STORY_TELLING = 'story_telling';
BOARD = 'board';
ACTIVITY = 'activity';
PHONICS = 'phonics';
DANCE = 'dance';

cur_k = 1;
cur_state = SING_A_SONG;
cur_card = {};
cur_card[SING_A_SONG] = 1;
cur_card[ACTIVITY] = 1;
cur_card[DANCE] = 1;

window.onmessage = function(e) {
    if (typeof (e.data) === 'string') {
        keywordsHideIframe(e.data);
    }
};


function keywordsHideIframe(color) {
    cur_color = color;
    video_elem = document.getElementById(color + '_video');
    video_elem.style.display = '';
    document.getElementById('keywords_iframe').style.display='none';
    video_elem.play();
}

function keywordsHideVideo(color) {
    document.getElementById('keywords_iframe').style.display='';
    video_elem = document.getElementById(color + '_video');
    video_elem.pause();
    video_elem.currentTime = 0;
    video_elem.style.display = 'none';
}

function hideAll() {
    document.getElementById(SING_A_SONG).style.display='none';
    document.getElementById(KEYWORDS).style.display='none';
    document.getElementById(STORY_TELLING).style.display='none';
    document.getElementById(BOARD).style.display='none';
    document.getElementById(ACTIVITY).style.display='none';
    document.getElementById(PHONICS).style.display='none';
    document.getElementById(DANCE).style.display='none';
}

function pauseAllVideo() {
    all_videos = $("video");
    for (var i = 0; i < all_videos.length; i++) {
        video_elem = all_videos[i];
        video_elem.pause();
    }
}

function kChange(k_num) {
    cur_k = k_num;
}

function studyChange(state) {
    hideAll();
    exitFolder();
    pauseAllVideo();
    if (cur_state == KEYWORDS) {
        keywordsHideVideo(cur_color);
    }

    cur_state = state;
    state_to_display(cur_state);
}

function exitFolder() {
    $("#outer_container").addClass('container');
    $("#outer_container").removeClass('container-fluid');
    $(".card").css("display","");
    if (cur_state == SING_A_SONG) {
        document.getElementById('sing_a_song_video_' + cur_card[SING_A_SONG]).style.display='none';
    } else if (cur_state == ACTIVITY) {
        document.getElementById('activity_' + cur_card[ACTIVITY]).style.display='none';
        document.getElementById('activity_' + cur_card[ACTIVITY]).contentWindow.location.reload();
    } else if (cur_state == DANCE) {
        document.getElementById('dance_container').style.display='none';
        document.getElementById('dance_' + cur_card[DANCE]).style.display='none';
    }
}

function enterFolder(thumbnail_num) {
    $("#outer_container").addClass('container-fluid');
    $("#outer_container").removeClass('container');
    $(".card").css("display","none");
    if (cur_state == SING_A_SONG) {
        cur_card[SING_A_SONG] = thumbnail_num;
        document.getElementById('sing_a_song_video_' + cur_card[SING_A_SONG]).style.display='';
    } else if (cur_state == ACTIVITY) {
        cur_card[ACTIVITY] = thumbnail_num;
        document.getElementById('activity_' + cur_card[ACTIVITY]).style.display='';
    } else if (cur_state == DANCE) {
        cur_card[DANCE] = thumbnail_num;
        document.getElementById('dance_container').style.display='';
        document.getElementById('dance_' + cur_card[DANCE]).style.display='';
    }
}

function state_to_display(state) {
    var title_string = document.getElementById('title_string');
    var border_container = document.getElementById('border_container');
    if (state == SING_A_SONG) {
        title_string.innerHTML = 'Sing a Song';
        title_string.style.color = '#007bff';
        border_container.style.borderColor = '#007bff';
        document.getElementById(SING_A_SONG).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == KEYWORDS) {
        title_string.innerHTML = 'Keywords';
        title_string.style.color = '#16a2b8';
        border_container.style.borderColor = '#16a2b8';
        document.getElementById(KEYWORDS).style.display='';
        $("#outer_container").addClass('container-fluid');
        $("#outer_container").removeClass('container');
    } else if (state == STORY_TELLING) {
        title_string.innerHTML = 'Story Telling';
        title_string.style.color = '#27a745';
        border_container.style.borderColor = '#27a745';
        document.getElementById(STORY_TELLING).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == BOARD) {
        title_string.innerHTML = 'Board';
        title_string.style.color = '#ffc108';
        border_container.style.borderColor = '#ffc108';
        document.getElementById(BOARD).style.display='';
        $('.carousel').carousel(0);
        $("#outer_container").addClass('container-fluid');
        $("#outer_container").removeClass('container');
    } else if (state == ACTIVITY) {
        title_string.innerHTML = 'Activity';
        title_string.style.color = '#dc3545';
        border_container.style.borderColor = '#dc3545';
        document.getElementById(ACTIVITY).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == PHONICS) {
        title_string.innerHTML = 'Phonics';
        title_string.style.color = '#c93cb0';
        border_container.style.borderColor = '#c93cb0';
        document.getElementById(PHONICS).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == DANCE) {
        title_string.innerHTML = 'Dance';
        title_string.style.color = '#7700c9';
        border_container.style.borderColor = '#7700c9';
        document.getElementById(DANCE).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    }
}

window.onload = function() {
    studyChange(SING_A_SONG);

    $(".logo_img").hover(function(){
        $(this).addClass('animated jello');
    });
    $(".logo_img").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
        $(this).removeClass('animated jello');
    });

    $(".card").hover(function(){
        $(this).addClass('animated pulse');
    });
    $(".card").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
        $(this).removeClass('animated pulse');
    });

    $(".btn").click(function(){
        $(this).addClass('animated rubberBand');
    });
    $(".btn").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",function(){
        $(this).removeClass('animated rubberBand');
    });


    var t1 = gsap.timeline({defaults:{duration:2}});
        t1.to('.app-loader', {css:{'display':'none'}, duration:0})
        .to('#main_container', {css:{'display':''}, duration:0})
        .from('#main_container', {opacity: 1, y: -1000, ease: 'Power4.easeInOut'});


};

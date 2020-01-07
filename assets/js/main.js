SING_A_SONG = 'sing_a_song';
BEFORE_YOU_STUDY = 'before_you_study';
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
        beforeYouStudyHideIframe(e.data);
    }
};


function beforeYouStudyHideIframe(color) {
    cur_color = color;
    video_elem = document.getElementById(color + '_video');
    video_elem.style.display = '';
    document.getElementById('before_you_study_iframe').style.display='none';
    video_elem.play();
}

function beforeYouStudyHideVideo(color) {
    document.getElementById('before_you_study_iframe').style.display='';
    video_elem = document.getElementById(color + '_video');
    video_elem.pause();
    video_elem.currentTime = 0;
    video_elem.style.display = 'none';
}

function hideAll() {
    document.getElementById(SING_A_SONG).style.display='none';
    document.getElementById(BEFORE_YOU_STUDY).style.display='none';
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
    if (cur_state == BEFORE_YOU_STUDY) {
        beforeYouStudyHideVideo(cur_color);
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
    var state_title = document.getElementById('state_title');
    var border_container = document.getElementById('border_container');
    if (state == SING_A_SONG) {
        state_title.innerHTML = 'Sing a Song';
        state_title.style.color = '#007bff';
        border_container.style.borderColor = '#007bff';
        document.getElementById(SING_A_SONG).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == BEFORE_YOU_STUDY) {
        state_title.innerHTML = 'Before You Study';
        state_title.style.color = '#16a2b8';
        border_container.style.borderColor = '#16a2b8';
        document.getElementById(BEFORE_YOU_STUDY).style.display='';
        $("#outer_container").addClass('container-fluid');
        $("#outer_container").removeClass('container');
    } else if (state == STORY_TELLING) {
        state_title.innerHTML = 'Story Telling';
        state_title.style.color = '#27a745';
        border_container.style.borderColor = '#27a745';
        document.getElementById(STORY_TELLING).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == BOARD) {
        state_title.innerHTML = 'Board';
        state_title.style.color = '#ffc108';
        border_container.style.borderColor = '#ffc108';
        document.getElementById(BOARD).style.display='';
        $('.carousel').carousel(0);
        $("#outer_container").addClass('container-fluid');
        $("#outer_container").removeClass('container');
    } else if (state == ACTIVITY) {
        state_title.innerHTML = 'Activity';
        state_title.style.color = '#dc3545';
        border_container.style.borderColor = '#dc3545';
        document.getElementById(ACTIVITY).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == PHONICS) {
        state_title.innerHTML = 'Phonics';
        state_title.style.color = '#c93cb0';
        border_container.style.borderColor = '#c93cb0';
        document.getElementById(PHONICS).style.display='';
        $("#outer_container").addClass('container');
        $("#outer_container").removeClass('container-fluid');
    } else if (state == DANCE) {
        state_title.innerHTML = 'Dance';
        state_title.style.color = '#7700c9';
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
    // $('#main_container').css('display', '');

    // $('#main_container').css('display', '');
    // t1.to('.app-loader', {opacity: 1, y: 700, ease: 'Power4.easeInOut'})
        t1.to('.app-loader', {css:{'display':'none'}, duration:0})
        .to('#main_container', {css:{'display':''}, duration:0})
        .from('#main_container', {opacity: 1, y: -1000, ease: 'Power4.easeInOut'});


};

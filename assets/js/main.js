SING_A_SONG = 'sing_a_song';
BEFORE_YOU_STUDY = 'before_you_study';
STORY_TELLING = 'story_telling';
BOARD = 'board';
ACTIVITY = 'activity';
PHONICS = 'phonics';
DANCE = 'dance';

cur_k = 1;
cur_state = SING_A_SONG;
cur_color = 'red';
cur_card = {};
cur_card[SING_A_SONG] = 1;
cur_card[ACTIVITY] = 1;
cur_card[DANCE] = 1;

window.onmessage = function(e){
    if (e.data == 'red_clicked') {
        beforeYouStudyHideIframe('red')
    } else if (e.data == 'green_clicked') {
        beforeYouStudyHideIframe('green')
    } else if (e.data == 'yellow_clicked') {
        beforeYouStudyHideIframe('yellow')
    } else if (e.data == 'blue_clicked') {
        beforeYouStudyHideIframe('blue')
    } else if (e.data == 'orange_clicked') {
        beforeYouStudyHideIframe('orange')
    } else if (e.data == 'purple_clicked') {
        beforeYouStudyHideIframe('purple')
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
    all_videos = $(".embed-responsive");
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
    if (state == SING_A_SONG) {
        document.getElementById(SING_A_SONG).style.display='';
    } else if (state == BEFORE_YOU_STUDY) {
        document.getElementById(BEFORE_YOU_STUDY).style.display='';
    } else if (state == STORY_TELLING) {
        document.getElementById(STORY_TELLING).style.display='';
    } else if (state == BOARD) {
        document.getElementById(BOARD).style.display='';
        $('.carousel').carousel(0);
    } else if (state == ACTIVITY) {
        document.getElementById(ACTIVITY).style.display='';
    } else if (state == PHONICS) {
        document.getElementById(PHONICS).style.display='';
    } else if (state == DANCE) {
        document.getElementById(DANCE).style.display='';
    }
}

function exitFolder() {
    $(".card").css("display","");
    if (cur_state == SING_A_SONG) {
        document.getElementById('sing_a_song_video_' + cur_card[SING_A_SONG]).style.display='none';
    } else if (cur_state == ACTIVITY) {
        document.getElementById('activity_' + cur_card[ACTIVITY]).style.display='none';
        document.getElementById('activity_' + cur_card[ACTIVITY]).contentWindow.location.reload();
    } else if (cur_state == DANCE) {
        document.getElementById('dance_' + cur_card[DANCE]).style.display='none';
    }
}

function enterFolder(thumbnail_num) {
    $(".card").css("display","none");
    if (cur_state == SING_A_SONG) {
        cur_card[SING_A_SONG] = thumbnail_num;
        document.getElementById('sing_a_song_video_' + cur_card[SING_A_SONG]).style.display='';
    } else if (cur_state == ACTIVITY) {
        cur_card[ACTIVITY] = thumbnail_num;
        document.getElementById('activity_' + cur_card[ACTIVITY]).style.display='';
    } else if (cur_state == DANCE) {
        cur_card[DANCE] = thumbnail_num;
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
    } else if (state == BEFORE_YOU_STUDY) {
        state_title.innerHTML = 'Before You Study';
        state_title.style.color = '#16a2b8';
        border_container.style.borderColor = '#16a2b8';
    } else if (state == STORY_TELLING) {
        state_title.innerHTML = 'Story Telling';
        state_title.style.color = '#27a745';
        border_container.style.borderColor = '#27a745';
    } else if (state == BOARD) {
        state_title.innerHTML = 'Board';
        state_title.style.color = '#ffc108';
        border_container.style.borderColor = '#ffc108';
    } else if (state == ACTIVITY) {
        state_title.innerHTML = 'Activity';
        state_title.style.color = '#dc3545';
        border_container.style.borderColor = '#dc3545';
    } else if (state == PHONICS) {
        state_title.innerHTML = 'Phonics';
        state_title.style.color = '#c93cb0';
        border_container.style.borderColor = '#c93cb0';
    } else if (state == DANCE) {
        state_title.innerHTML = 'Dance';
        state_title.style.color = '#c93cb0';
        border_container.style.borderColor = '#c93cb0';
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
};

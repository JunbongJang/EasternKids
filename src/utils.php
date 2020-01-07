<?php
function getFileNames($cur_k, $cur_ho, $type) {
    $wanted_files = array();
    if ($type == 1) {
        $dir = "/home/web_data/welleastern/EasternKids/assets/files/k{$cur_k}/ho{$cur_ho}/1_sing_a_song/";
        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {
            if (strpos($file, '.mp4') !== false) {
                array_push($wanted_files, $file);
            }
        }
    } else if ($type == 2) {
        $dir = "/home/web_data/welleastern/EasternKids/assets/files/k{$cur_k}/ho{$cur_ho}/2_before_you_study/";
        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {
            if (strpos($file, '.mp4') !== false) {
                array_push($wanted_files, $file);
            }
        }
    } else if ($type == 3) {


    } else if ($type == 4) {
        $dir = "/home/web_data/welleastern/EasternKids/assets/files/k{$cur_k}/ho{$cur_ho}/4_board/";
        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {
            if (strpos($file, '.png') !== false) {
                array_push($wanted_files, $file);
            }
        }
    } else if ($type == 5) {
        $dir = "/home/web_data/welleastern/EasternKids/assets/files/k{$cur_k}/ho{$cur_ho}/5_activity/";
        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {
            if (strpos($file, '.png') !== false) {
                array_push($wanted_files, $file);
            }
        }
    } else if ($type == 6) {
        $dir = "/home/web_data/welleastern/EasternKids/assets/files/k{$cur_k}/ho{$cur_ho}/6_phonics/";
        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {
            if (strpos($file, '.mp4') !== false) {
                array_push($wanted_files, $file);
            }
        }
    }
    return $wanted_files;
}

function convertFileNamesToDisplayNames($file_names, $type) {
    $display_names = array();

    if ($type == 1 or $type == 6) {
        foreach ($file_names as $file_name) {
            $str = preg_replace('/_/', ' ', $file_name);
            $str = ucwords($str);
            $str = preg_replace('/(.mp4)|(.png)/', '', $str);
            $str = preg_replace('/[0-9]/', '', $str);
            $str = trim($str);
            array_push($display_names, $str);
        }
    } else if ($type == 2) {
        foreach ($file_names as $file_name) {
            $str = preg_replace('/[0-9]_/', '', $file_name);
            $str = preg_replace('/(.mp4)|(.png)/', '', $str);
            $str = trim($str);
            array_push($display_names, $str);
        }
    } else if ($type == 5) {
        foreach ($file_names as $file_name) {
            $str = preg_replace('/_/', ' ', $file_name);
            $str = preg_replace('/(.mp4)|(.png)/', '', $str);
            $str = preg_replace('/[0-9]/', '', $str);
            $str = trim($str);
            array_push($display_names, $str);
        }
    }
    return $display_names;
}
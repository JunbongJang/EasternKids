<?
@session_start();
if (isset($_SESSION['member_id'])) {
    // user is logged in so do nothing
} else {
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	header("Location: ".$protocol."www.welleastern.cn/user/cn/?goto=/EasternKids/src");
}
include 'utils.php';

$cur_k = 1;
$cur_ho = 6;
if ( isset($_GET["k"]) && $_GET["k"] != '') {
	$cur_k = $_GET["k"];
}
if (isset($_GET["ho"]) && $_GET["ho"] != '') {
	$cur_ho = $_GET["ho"];
}

if (!checkHoExists($cur_k, $cur_ho)) {
    ?>
    history.go(-1);
<?}

$file_names_1 = getFileNames($cur_k, $cur_ho, 1);
$display_names_1 = convertFileNamesToDisplayNames($file_names_1, 1);

$file_names_2 = getFileNames($cur_k, $cur_ho, 2);
$display_names_2 = convertFileNamesToDisplayNames($file_names_2, 2);

$file_names_4 = getFileNames($cur_k, $cur_ho, 4);

$file_names_5 = getFileNames($cur_k, $cur_ho, 5);
$display_names_5 = convertFileNamesToDisplayNames($file_names_5, 5);

//$file_names_6 = getFileNames($cur_k, $cur_ho, 6);
//$display_names_6 = convertFileNamesToDisplayNames($file_names_6, 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=11">
	<title>EasternKids</title>

	<link rel="stylesheet" href="../assets/library/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/preloader.css">
	<link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/button.css">
	<link rel="stylesheet" href="../assets/css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans&display=swap" rel="stylesheet">
	<script src="../assets/library/jquery/jquery-3.4.1.min.js"></script>
	<script src="../assets/library/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<main id="main_container"
	  style="display:none; min-height: 100%;
            background-image: url('../assets/img/background.png');">

	<div id="outer_container" class="container container-fluid">
		<div class="row mb-3">
			<div class="col">
				<img src="../assets/img/cn_welleastern_logo.png"
					 class="logo_img"
					 alt="logo" style="height:115px;">
			</div>
			<div class="col">
				<img src="../assets/img/eastern_kids_logo.png"
					 class="logo_img"
					 alt="logo" style="height:180px;">
			</div>
			<div class="col">
			</div>
		</div>

		<div id="border_container" class="row bg-white pt-2 pb-3 mb-3"
			 style="border-radius: 20px; border-style: solid; border-width: 5px; border-color: #007bff">
			<div class="col-3">
				<div class="btn-group" style="width:100%" role="group" aria-label="Level select">
					<div class="btn-group" style="width:100%" >
						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							K1
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?k=1&ho=1">1</a>
							<a class="dropdown-item" href="index.php?k=1&ho=2">2</a>
							<a class="dropdown-item" href="index.php?k=1&ho=3">3</a>
							<a class="dropdown-item" href="index.php?k=1&ho=4">4</a>
							<a class="dropdown-item" href="index.php?k=1&ho=5">5</a>
							<a class="dropdown-item" href="index.php?k=1&ho=6">6</a>
							<a class="dropdown-item" href="index.php?k=1&ho=7">7</a>
							<a class="dropdown-item" href="index.php?k=1&ho=8">8</a>
							<a class="dropdown-item" href="index.php?k=1&ho=9">9</a>
							<a class="dropdown-item" href="index.php?k=1&ho=10">10</a>
							<a class="dropdown-item" href="index.php?k=1&ho=11">11</a>
							<a class="dropdown-item" href="index.php?k=1&ho=12">12</a>
						</div>
					</div>

					<div class="btn-group" style="width:100%" >
						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							K2
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?k=1&ho=1">1</a>
							<a class="dropdown-item" href="index.php?k=2&ho=2">2</a>
							<a class="dropdown-item" href="index.php?k=1&ho=3">3</a>
							<a class="dropdown-item" href="index.php?k=1&ho=4">4</a>
							<a class="dropdown-item" href="index.php?k=1&ho=5">5</a>
							<a class="dropdown-item" href="index.php?k=1&ho=6">6</a>
							<a class="dropdown-item" href="index.php?k=1&ho=7">7</a>
							<a class="dropdown-item" href="index.php?k=1&ho=8">8</a>
							<a class="dropdown-item" href="index.php?k=1&ho=9">9</a>
							<a class="dropdown-item" href="index.php?k=1&ho=10">10</a>
							<a class="dropdown-item" href="index.php?k=1&ho=11">11</a>
							<a class="dropdown-item" href="index.php?k=1&ho=12">12</a>
						</div>
					</div>

					<div class="btn-group" style="width:100%" >
						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							K3
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?k=3&ho=1">1</a>
							<a class="dropdown-item" href="index.php?k=3&ho=2">2</a>
							<a class="dropdown-item" href="index.php?k=3&ho=3">3</a>
							<a class="dropdown-item" href="index.php?k=3&ho=4">4</a>
							<a class="dropdown-item" href="index.php?k=3&ho=5">5</a>
							<a class="dropdown-item" href="index.php?k=3&ho=6">6</a>
							<a class="dropdown-item" href="index.php?k=3&ho=7">7</a>
							<a class="dropdown-item" href="index.php?k=3&ho=8">8</a>
							<a class="dropdown-item" href="index.php?k=3&ho=9">9</a>
							<a class="dropdown-item" href="index.php?k=3&ho=10">10</a>
							<a class="dropdown-item" href="index.php?k=3&ho=11">11</a>
							<a class="dropdown-item" href="index.php?k=3&ho=12">12</a>
						</div>
					</div>

				</div>

				<div class="d-flex btn-group-vertical justify-content-middle mt-4">
					<button type="button" class="btn btn-lg btn-primary" onclick="studyChange(SING_A_SONG)">Sing a song</button>
					<button type="button" class="btn btn-lg btn-info" onclick="studyChange(KEYWORDS)">Keywords</button>
					<button type="button" class="btn btn-lg btn-success" onclick="studyChange(STORY_TELLING)">Story Telling</button>
					<button type="button" class="btn btn-lg btn-warning" onclick="studyChange(BOARD)">Board</button>
					<button type="button" class="btn btn-lg btn-danger" onclick="studyChange(ACTIVITY)">Activity</button>
					<button type="button" class="btn btn-lg btn-pink" onclick="studyChange(PHONICS)">Phonics</button>
					<button type="button" class="btn btn-lg btn-purple" onclick="studyChange(DANCE)">Dance</button>
				</div>

			</div>
			<div class="col-9 border-left">
				<div class="row">
					<div class="col-6" >
						<h1 id="title_string"></h1>
					</div>
                    <div class="col-6 text-right" >
                        <h1 id="k_ho_string">K<?=$cur_k?> Vo.<?=$cur_ho?></h1>
                    </div>
				</div>
				<hr class="mb-2 mt-1">
				<div class="row">

					<div class="col" id="sing_a_song" style="display: none;">

						<div class="row mb-3">

							<div class="col-6">
								<div class="card"
									 id="sing_a_song_card_1"
									 style="width: 22rem;" onclick="enterFolder(1)">
									<img class="card-img-top" src="../assets/files/common/1_sing_a_song/thumbnail1.png" alt="Card image cap">
									<div class="card-body border-top">
										<p class="card-text">Hello Song</p>
									</div>
								</div>
							</div>

							<div class="col-6">
								<div class="card" id="sing_a_song_card_2" style="width: 22rem;" onclick="enterFolder(2)">
									<img class="card-img-top" src="../assets/files/common/1_sing_a_song/thumbnail2.png" alt="Card image cap">
									<div class="card-body border-top">
										<p class="card-text">Bye Song</p>
									</div>
								</div>
							</div>

						</div>

						<div class="row mb-3">
							<div class="col-6">
								<div class="card" id="sing_a_song_card_3" style="width: 22rem;" onclick="enterFolder(3)">
									<img class="card-img-top" src="../assets/files/common/1_sing_a_song/thumbnail3.png" alt="Card image cap">
									<div class="card-body border-top">
										<p class="card-text">Everyday Song</p>
									</div>
								</div>
							</div>

                            <div class="col-6">
                                <div class="card" id="sing_a_song_card_4" style="width: 22rem;" onclick="enterFolder(4)">
                                    <img class="card-img-top" src="../assets/files/common/1_sing_a_song/thumbnail4.png" alt="Card image cap">
                                    <div class="card-body border-top">
                                        <p class="card-text">Main Song</p>
                                    </div>
                                </div>
                            </div>
						</div>

                        <div class="row">
                            <div class="col-6">
                                <div class="card" id="sing_a_song_card_5" style="width: 22rem;" onclick="enterFolder(5)">
                                    <img class="card-img-top" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/1_sing_a_song/thumbnail1.png" alt="Card image cap">
                                    <div class="card-body border-top">
                                        <p class="card-text"><?=$display_names_1[0]?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card" id="sing_a_song_card_6" style="width: 22rem;" onclick="enterFolder(6)">
                                    <img class="card-img-top" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/1_sing_a_song/thumbnail2.png" alt="Card image cap">
                                    <div class="card-body border-top">
                                        <p class="card-text"><?=$display_names_1[1]?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

						<video id="sing_a_song_video_1" controls preload="auto"
							   class="embed-responsive embed-responsive-16by9"
							   style="display:none;">
							<source src="../assets/files/common/1_sing_a_song/1_hello_song.mp4" type="video/mp4">
							Your Browser don't support this video.
						</video>

						<video id="sing_a_song_video_2" controls preload="auto"
							   class="embed-responsive embed-responsive-16by9"
							   style="display:none;">
							<source src="../assets/files/common/1_sing_a_song/2_bye_song.mp4" type="video/mp4">
							Your Browser don't support this video.
						</video>


						<video id="sing_a_song_video_3" controls preload="auto"
							   class="embed-responsive embed-responsive-16by9"
							   style="display:none;">
							<source src="../assets/files/common/1_sing_a_song/3_everyday_song.mp4" type="video/mp4">
							Your Browser don't support this video.
						</video>

                        <video id="sing_a_song_video_4" controls preload="auto"
                               class="embed-responsive embed-responsive-16by9"
                               style="display:none;">
                            <source src="../assets/files/common/1_sing_a_song/4_main_song.mp4" type="video/mp4">
                            Your Browser don't support this video.
                        </video>

                        <video id="sing_a_song_video_5" controls preload="auto"
                               class="embed-responsive embed-responsive-16by9"
                               style="display:none;">
                            <source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/1_sing_a_song/<?=$file_names_1[0]?>" type="video/mp4">
                            Your Browser don't support this video.
                        </video>

                        <video id="sing_a_song_video_6" controls preload="auto"
                               class="embed-responsive embed-responsive-16by9"
                               style="display:none;">
                            <source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/1_sing_a_song/<?=$file_names_1[1]?>" type="video/mp4">
                            Your Browser don't support this video.
                        </video>

					</div>

					<div class="col" id="keywords" style="display: none;">

						<iframe id="keywords_iframe"
								src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/before_you_study/BeforeYouStudy.html"
								frameborder="0" crossorigin="Anonymous"
								style="width:1100px; height:734px"></iframe>

						<video id="<?=$display_names_2[0]?>_video" onended="keywordsHideVideo('<?=$display_names_2[0]?>')" style="display: none;"
							   preload="auto"
							   width="1100" height="734">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/<?=$file_names_2[0]?>" type="video/mp4">
							Your Browser don't support this video.
						</video>

						<video id="<?=$display_names_2[1]?>_video" onended="keywordsHideVideo('<?=$display_names_2[1]?>')" style="display: none;"
							   preload="auto"
							   width="1100" height="734">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/<?=$file_names_2[1]?>" type="video/mp4">
							Your Browser don't support this video.
						</video>

						<video id="<?=$display_names_2[2]?>_video" onended="keywordsHideVideo('<?=$display_names_2[2]?>')" style="display: none;"
							   preload="auto"
							   width="1100" height="734">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/<?=$file_names_2[2]?>" type="video/mp4">
							Your Browser don't support this video.
						</video>

						<video id="<?=$display_names_2[3]?>_video" onended="keywordsHideVideo('<?=$display_names_2[3]?>')" style="display: none;"
							   preload="auto"
							   width="1100" height="734">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/<?=$file_names_2[3]?>" type="video/mp4">
							Your Browser don't support this video.
						</video>

						<video id="<?=$display_names_2[4]?>_video" onended="keywordsHideVideo('<?=$display_names_2[4]?>')" style="display: none;"
							   preload="auto"
							   width="1100" height="734">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/<?=$file_names_2[4]?>" type="video/mp4">
							Your Browser don't support this video.
						</video>

						<video id="<?=$display_names_2[5]?>_video" onended="keywordsHideVideo('<?=$display_names_2[5]?>')" style="display: none;"
							   preload="auto"
							   width="1100" height="734">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/2_keywords/<?=$file_names_2[5]?>" type="video/mp4">
							Your Browser don't support this video.
						</video>

					</div>


					<div class="col" id="story_telling" style="display: none;">
						<video id="story_telling_video"
							   preload="auto"
							   controls class="embed-responsive embed-responsive-16by9">
							<source src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/3_story_telling/1.mp4" type="video/mp4">
							Your Browser don't support this video.
						</video>
					</div>


					<div class="col" id="board" style="display: none;">

						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/1.png" alt="First slide">
								</div>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/2.png" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/3.png" alt="Third slide">
								</div>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/4.png" alt="Fourth slide">
								</div>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/5.png" alt="Fifth slide">
								</div>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/6.png" alt="Sixth slide">
								</div>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/7.png" alt="Seventh slide">
								</div>
                                <? if (sizeof($file_names_4) > 7) { ?>
								<div class="carousel-item">
									<img src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/4_board/8.png" alt="Seventh slide">
								</div>
                                <?} ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>


					<div class="col" id="activity" style="display: none;">

						<div class="row mb-3">

							<div class="col">
								<div class="card" id="activity_card_1" style="width: 18rem;" onclick="enterFolder(1)">
									<img class="card-img-top" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/5_activity/<?=$file_names_5[0]?>" alt="Card image cap">
									<div class="card-body border-top">
										<p class="card-text"><?=$display_names_5[0]?></p>
									</div>
								</div>
							</div>

							<div class="col">
								<div class="card" id="activity_card_2" style="width: 18rem;" onclick="enterFolder(2)">
									<img class="card-img-top" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/5_activity/<?=$file_names_5[1]?>" alt="Card image cap">
									<div class="card-body border-top">
										<p class="card-text"><?=$display_names_5[1]?></p>
									</div>
								</div>
							</div>

						</div>

						<div class="row">

							<div class="col">
								<div class="card" id="activity_card_3" style="width: 18rem;" onclick="enterFolder(3)">
									<img class="card-img-top" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/5_activity/<?=$file_names_5[2]?>" alt="Card image cap">
									<div class="card-body border-top">
										<p class="card-text"><?=$display_names_5[2]?></p>
									</div>
								</div>
							</div>

						</div>


						<iframe id="activity_1" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/5_activity/1/1.html"
								frameborder="0" crossorigin="Anonymous"
								style="display:none; height:792px; width:1057px;"></iframe>

						<iframe id="activity_2" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/5_activity/1/1.html"
								frameborder="0" crossorigin="Anonymous"
								style="display:none;"></iframe>

						<iframe id="activity_3" src="../assets/files/k<?=$cur_k?>/ho<?=$cur_ho?>/5_activity/1/1.html"
								frameborder="0" crossorigin="Anonymous"
								style="display:none;"></iframe>
					</div>

					<div class="col" id="phonics" style="display: none;">
						<video id="phonics_video"
							   preload="auto"
							   controls class="embed-responsive embed-responsive-16by9">
							<source src="../assets/files/k3/ho3/6_phonics/1_a_b_c_d.mp4" type="video/mp4">
							Your Browser don't support this video.
						</video>
					</div>

					<div class="col" id="dance" style="display: none;">
						<div class="row mb-3">

							<div class="col-3">
								<div class="card" id="dance_card_1" onclick="enterFolder(1)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail1.png" alt="Card image cap">
								</div>
							</div>

							<div class="col-3">
								<div class="card" id="dance_card_2" onclick="enterFolder(2)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail2.png" alt="Card image cap">
								</div>
							</div>


							<div class="col-3">
								<div class="card" id="dance_card_3" onclick="enterFolder(3)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail3.png" alt="Card image cap">
								</div>
							</div>

							<div class="col-3">
								<div class="card" id="dance_card_4" onclick="enterFolder(4)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail4.png" alt="Card image cap">
								</div>
							</div>

						</div>

						<div class="row">

							<div class="col-3">
								<div class="card" id="dance_card_5" onclick="enterFolder(5)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail5.png" alt="Card image cap">
								</div>
							</div>

							<div class="col-3">
								<div class="card" id="dance_card_6" onclick="enterFolder(6)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail6.png" alt="Card image cap">
								</div>
							</div>

							<div class="col-3">
								<div class="card" id="dance_card_7" onclick="enterFolder(7)">
									<img class="card-img-top" style="width:auto; height:190px;" src="../assets/genki/thumbnail7.png" alt="Card image cap">
								</div>
							</div>
						</div>

						<div id="dance_container" class="embed-responsive embed-responsive-16by9" style="display:none;">
							<embed id="dance_1" src="../assets/genki/DISCOB.swf" class="embed-responsive-item" style="display:none;">
							<embed id="dance_2" src="../assets/genki/JANKEN.swf" class="embed-responsive-item" style="display:none;">
							<embed id="dance_3" src="../assets/genki/NAME.swf" class="embed-responsive-item" style="display:none;">
							<embed id="dance_4" src="../assets/genki/HOWRUM.swf" class="embed-responsive-item" style="display:none;">
							<embed id="dance_5" src="../assets/genki/SUPER.swf" class="embed-responsive-item" style="display:none;">
							<embed id="dance_6" src="../assets/genki/LEFT.swf" class="embed-responsive-item" style="display:none;">
							<embed id="dance_7" src="../assets/genki/PRONOUNS.swf" class="embed-responsive-item" style="display:none;">
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</main>

<!-- loading layout replaced by app after startupp-->
<div class="app-loader" style="overflow-y:hidden;">
	<div class="logo" ></div>
	<svg class="spinner" viewBox="25 25 50 50">
		<defs>
			<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
				<stop offset="0%" stop-color="#fca8ac" />
				<stop offset="100%" stop-color="#5eaefd" />
			</linearGradient>
		</defs>
		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke="url(#gradient)" stroke-width="2" stroke-miterlimit="10"/>
	</svg>
</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.4/gsap.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
	cur_color = '<?=$display_names_2[0]?>';
</script>


</html>

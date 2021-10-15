<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <article class="content-article">

                    <!-- cardType01 -->
                    <section class="cardType">
                            <div class="cardType01">
                            <h2>평범한 포토</h2>
                            <p>일상, 여행 속에서 평범하지만 여러가지를 담은 사진 사이트 입니다.
                                좋아하는 것들을 담았습니다.</p>
                            <div class="card-wrap">
                                    <div class="card">
                                        <a href="#">
                                            <img src="../assets/img/card01.jpg" alt="일상 관련 이미지입니다." class="card-img">
                                            <strong class="card-title">Daily</strong>
                                            <span class="card-desc">하늘, 구름 등 일상 속에서 볼 수 있는 평범함을 담았습니다. 하늘, 구름 등 일상 속에서 볼 수 있는 평범함을 담았습니다.</span>
                                            <span class="card-keyword">
                                                <span>#일상</span>
                                                <span>#사진</span>
                                            </span>   
                                        </a>
                                    </div>
                                    <div class="card">
                                        <a href="#">
                                            <img src="../assets/img/card02.jpg" alt="좋아하는 것 관련 이미지입니다." class="card-img">
                                            <strong class="card-title">Like</strong>
                                            <span class="card-desc">평소 좋아하는 것들을 담은 사진입니다. 하늘, 구름 등 일상 속에서 볼 수 있는 평범함을 담았습니다.</span>
                                            <span class="card-keyword">
                                                <span>#일상</span>
                                                <span>#사진</span>
                                            </span>   
                                        </a>
                                    </div>
                                    <div class="card">
                                        <a href="#">
                                            <img src="../assets/img/card03.jpg" alt="여행 관련 이미지입니다." class="card-img">
                                            <strong class="card-title">Travel</strong>
                                            <span class="card-desc">여행 중 만난 평범한 모습들을 담았습니다. 하늘, 구름 등 일상 속에서 볼 수 있는 평범함을 담았습니다.</span>
                                            <span class="card-keyword">
                                                <span>#여행</span>
                                                <span>#사진</span>
                                            </span>   
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <!-- cardType01 -->
                </article>
                 <article class="flow-article">  <!-- 전체영역 -->
                    <h3 class="ir_so">구경하기</h3>
                    <section id="comment" class="section-comment">
                        <h4>구경하기</h4>
                        <p>자유롭게 적어주세요.</p>
                        <div class="comment-form">
                            <form action="commentSave.php" method="post" name="comment">
                                <fieldset>
                                    <legend class="ir_so">댓글 영역</legend>
                                        <div class="comment-wrap">
                                            <div>
                                                <label for="youName" class="ir_so">이름</label>
                                                <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="5" required>
                                            </div>
                                            <div>
                                                <label for="youName" class="ir_so">댓글</label>
                                                <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="자유롭게 적어주세요!" autocomplete="off" required>
                                            </div>
                                            <button class="btn_submit2" type="submit" value="댓글">입력</button>
                                        </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="comment-list">
                            <?php
                                include "../connect/connect.php";

                                $sql = "SELECT * FROM myComment LIMIT 10";
                                $result = $connect -> query($sql);

                                // echo "<pre>";
                                // var_dump
                                // echo "</pre>";


                                while( $info = mysqli_fetch_array($result) ){   //여기 있는 갯수만큼 데이터 불러옴
                            ?>
                                <div>
                                    <p><?=$info['youText']?></p>
                                    <div>
                                        <img src="../assets/img/bg3.jpg" alt="">
                                        <span><?=$info['youName']?></span>
                                        <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>


                            
                        </div>
                    </section>
                </article>
            </section>
        </main>
        <!-- //contents -->

        <footer id="footer" class="footer">
            footer
        </footer>
        <!-- //footer -->

</body>
</html>
<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">서명 관리</div>
            </div>
        	<div class="signature_list">
            	<ul>
                	<a href="javascript:layer_open('signature_add');" class="new_signature">
                    	<img src="img/icon_plus_L.png">
                        <p>서명 추가</p>
                    </a>
                    <li style="background-image:url(img/sign_sample_01.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_02.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_03.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_04.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_05.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_06.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_07.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                    <li style="background-image:url(img/sign_sample_08.png)">
                        <a href=""><img src="img/icon_delete_red.svg"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 서명 추가창 -->
<div id="signature_add" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_sign.svg"><span>서명 추가</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="tabBox">
                <a href="javascript:;" class="tab_draw active">그리기</a>
                <a href="javascript:;" class="tab_make">만들기</a>
                <a href="javascript:;" class="tab_upload">업로드</a>
            </div>
            <div class="tabView draw">
            	<div class="canvas"><span>사인을 그려주세요.</span></div>
                <div class="eraser"><a href="javascript:;"><img src="img/icon_eraser.png"> 지우기</a></div>
            </div>
            <div class="tabView make">
            	<div class="inputArea">
                	<div class="inputBox"><input type="text" placeholder="서명할 이름을 입력해주세요."></div>
                    <a href="javascript:;" class="btn">확인</a>
                </div>
                <div class="radioBox">
                	<input type="radio" id="서명만들기샘플01" name="서명만들기샘플"><label for="서명만들기샘플01" style="background-image:url(img/sign_make_sample_01.png)"></label>
                	<input type="radio" id="서명만들기샘플02" name="서명만들기샘플"><label for="서명만들기샘플02" style="background-image:url(img/sign_make_sample_02.png)"></label>
                	<input type="radio" id="서명만들기샘플03" name="서명만들기샘플"><label for="서명만들기샘플03" style="background-image:url(img/sign_make_sample_03.png)"></label>
                	<input type="radio" id="서명만들기샘플04" name="서명만들기샘플"><label for="서명만들기샘플04" style="background-image:url(img/sign_make_sample_04.png)"></label>
                	<input type="radio" id="서명만들기샘플05" name="서명만들기샘플"><label for="서명만들기샘플05" style="background-image:url(img/sign_make_sample_05.png)"></label>
                	<input type="radio" id="서명만들기샘플06" name="서명만들기샘플"><label for="서명만들기샘플06" style="background-image:url(img/sign_make_sample_06.png)"></label>
                	<input type="radio" id="서명만들기샘플07" name="서명만들기샘플"><label for="서명만들기샘플07" style="background-image:url(img/sign_make_sample_07.png)"></label>
                	<input type="radio" id="서명만들기샘플08" name="서명만들기샘플"><label for="서명만들기샘플08" style="background-image:url(img/sign_make_sample_08.png)"></label>
                </div>
            </div>
            <div class="tabView upload">
            	<div class="uploadBox">
                	<input type="file" id="image_upload"><label for="image_upload">이미지 업로드</label>
                    <p>(2MB 이하 업로드)</p>
                </div>
                <div class="imgView">
                	<img src="img/icon_paint_sample.png">
                </div>
                <ul class="controlBox">
                	<li>
                    	<p>색상</p>
                        <span style="background-color:black"></span>
                        <span style="background-color:red"></span>
                    </li>
                    <li>
                    	<p>투명도</p>
                        <input type="range" value="50" min="0" max="50" class="opacity">
                    </li>
                    <li>
                    	<a href="javascript:;" class="rotate"><img src="img/icon_rotate.svg"> 이미지 회전</a>
                    </li>
                </ul>
            </div>
            <a href="javascript:;" class="submit">등록하기</a>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
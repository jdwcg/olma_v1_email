<?php include_once "common.php"; ?>
<style>
body{background-color:#eee;}
</style>
<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
    
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">계약서 작성</div>
            </div>
        	<div class="contents">
            	<ul>
                    <li>
                        <div class="contents_title">업로드</div>
                        <div class="contents_subTitle">계약서 작성 할 파일을 업로드 해주세요.</div>
                        <figure><img src="img/img_upload.png"></figure>
                        <a href="javascript:layer_open('document_upload');" class="btn">파일 업로드</a>
                    </li>
                    <li>
                        <div class="contents_title">만들기</div>
                        <div class="contents_subTitle">계약을 직접 작성 해주세요.</div>
                        <figure><img src="img/img_make.png"></figure>
                        <a href="javascript:;" class="btn">직접작성</a>
                    </li>
                    <li>
                        <div class="contents_title">템플릿</div>
                        <div class="contents_subTitle">계약할 템플릿을 선택해주세요.</div>
                        <figure><img src="img/img_temp.png"></figure>
                        <a href="javascript:;" class="btn">템플릿 가져오기</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="document_upload" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_upload.svg"><span>문서업로드</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="fileBox">
                <form>
                    <div class="file-upload">
                        <img src="img/icon_file.png" class="fileImg">
                        <div class="infoBox"><span class="file-info"></span><a href="javascript:;" class="file_xBtn"><img src="img/icon_xBtn_gray.png"></a></div>
                        <input id="field-image" name="fields[image][value]" type="file" required>
                        <label for="field-image" class="button">파일선택</label>
                        <div class="file-info2">파일 찾기 버튼을 눌러 업로드할 문서를 선택하세요</div>
                    </div>
                </form>
            </div>
            <div class="btnBox">
            	<a href="javascript:;" class="xBtn">취소</a>
            	<a href="javascript:;" class="upload_btn">업로드</a>
            </div>
        </div>
    </div>
</div>

<script src="js/file_upload.js?<?=rand()?>"></script>
</div><!-- // wraper -->
</body>
</html>
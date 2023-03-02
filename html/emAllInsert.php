<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">
        	<div class="titleBox">
            	<div class="title">사용자 일괄 등록</div>
            </div>

            <div class="organizTextBox">
                <p>신규 등록할 사용자 정보를 엑셀파일(.xlsx)로 업로드 하여, 최대 100건까지 일괄 등록할 수 있습니다.</p>
                <p>등록 양식을 다운로드 받아, 신규 구성원 정보를 일괄 등록하세요.</p>
                <span>샘플 다운로드</span>
                <span class="profileText">프로필 사진 일괄 등록</span>
            </div>
            <div class="organizFileBox">
                <span > 사용자 일괄 등록 </span> 
                <input type="file" id="file" style="display:none;">
                <input class="upload-name" value="" readonly>
                <label for="file">불러오기</label> 
            </div>

        	

        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
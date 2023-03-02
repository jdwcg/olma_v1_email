<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">
        	<div class="titleBox">
            	<div class="title">사용자 일괄 수정</div>
            </div>

            <div class="organizTextBox">
                <p>오피스에 이미 등록된 사용자 정보를 엑셀 파일(.csv)에서 수정하여 최대 100건까지 일괄 적용할 수 있습니다.</p>
                <p>[임직원 정보 업데이트용 파일 다운로드]에서 일괄 수정할 부서의 임직원 정보를 다운로드 받아</p>
                <p>데이터를 편집한 후 업로드하여 일괄 수정할 수 있습니다.</p>
                <span class="emInfoText">임직원 정보 업데이트용 파일 다운로드</span>
            </div>
            <div class="organizFileBox">
                <span > 사용자 일괄 수정 </span> 
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
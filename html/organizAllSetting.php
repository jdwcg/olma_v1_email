<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">
        	<div class="titleBox">
            	<div class="title">조직 일괄 등록</div>
            </div>

            <div class="organizTextBox">
                <p>파일을 통해 대량의 조직을 일괄 등록할 수 있습니다.</p>
                <p>등록 양식을 다운로드 받아, 조직을 일괄 등록하세요.</p>
                <span>샘플 다운로드</span>
            </div>

            <div class="organizTextBox2">
                <h2>조직 등록 파일 작성방법</h2>
                <p>1. 조직명은 (공백이 없는 경우)한글 50자, 영문 100자까지 입력할 수 있습니다.</p>
                <p>2. 11레벨까지 조직을 생성할 수 있으며, 1레벨(회사명) 정보는 입력하지 않습니다.</p>
                <p>3. 기존 조직과 중복 되는 경우, 해당 행은 등록되지 않습니다.</p>
                <p>4. 기존 조직은 그대로 보존되며, 중복되지 않은 조직정보만 업데이트됩니다.</p>
                <p>5. 상위 조직이 있는 경우, 상위조직 정보도 모두 입력해야 합니다.</p>
                <p>6. 조직명에 특수기호 | 는 사용할 수 없습니다.</p>

            </div>

            <div class="organizFileBox">
                <span>대상 파일 선택</span> 
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
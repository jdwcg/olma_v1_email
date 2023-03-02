<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">
        	<div class="titleBox">
            	<div class="title">기본 설정</div>
            </div>

            <div class="organizTextBox">
                <h2>사용자 정보 수정 권한 설정</h2>
                <p>사용자정보의 개인 수정 허용 여부를 설정할 수 있습니다.</p>
                <p>개인 수정을 허용하지 않는 경우,</p>
                <p>내 정보 관리 및 프로필 설정에서 개인정보 및 프로필 사진을 등록/수정 할 수 없습니다.</p>
                <div>
                    <input type="radio" name="userCheck" id="userCheck1"><label for="userCheck1">개인 수정 허용</label></input>
                </div>
                <div>
                    <input type="radio" name="userCheck" id="userCheck2"><label for="userCheck2">관리자만 수정 가능</label></input>
                </div>
                <span class="insertBtn emSettingBtn">저장</span>
            </div>

            <div class="organizTextBox2">
                <h2>중요정보 일괄 비공개 처리</h2>
                <p>비공개 설정 가능한 사용자 정보를 관리자가 일괄로 비공개 설정할 수 있습니다.</p>
                <p>비공개 처리된 사용자 정보는 인사관리자 및 상위 조직장에게만 노출됩니다.</p>
                <p>단, 사용자 정보 수정 권한에 따라 개인 수정이 허용된 경우에는 비공개처리된 정보를 사용자가 직접 공개로 변경할 수 있습니다.</p>
                <p>모든 사용자의 사용자 정보에서 비공개로 전호나할 항목을 체크하세요.</p>
                <div>
                    <div class="cCheckBox"><input type="checkbox" id="휴대전화"/><label for="휴대전화">휴대전화</label></div>
                    <div class="cCheckBox"><input type="checkbox" id="개인"/><label for="개인">개인</label></div>
                    <div class="cCheckBox"><input type="checkbox" id="이메일"/><label for="이메일">이메일</label></div>
                    <div class="cCheckBox"><input type="checkbox" id="사번"/><label for="사번">사번</label></div>
                </div>
                <div>
                    <div class="cCheckBox"><input type="checkbox" id="입사일"/><label for="입사일">입사일</label></div>
                    <div class="cCheckBox"><input type="checkbox" id="생년월일"/><label for="생년월일">생년월일</label></div>
                    <div class="cCheckBox"><input type="checkbox" id="자택주소"/><label for="자택주소">자택주소</label></div>
                    <div class="cCheckBox"><input type="checkbox" id="기타정보"/><label for="기타정보">기타정보</label></div>
                </div>
                <span class="insertBtn emSettingBtn">저장</span>
            </div>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
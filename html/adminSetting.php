<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">관리자 설정</div>
            </div>

            <div class="adminSelectNav">
                <ul class="adminListUl">
                    <li class="adminList active"><a href="adminSetting.php">전체 관리자</a></li>
                    <li class="adminList"><a href="adminHumanAfrs.php">인사 관리자</a></li>
                    <li class="adminList"><a href="adminHumanAfrs.php">전자결재 관리자</a></li>
                    <li class="adminList"><a href="adminHumanAfrs.php">메시징 관리자</a></li>
                    <li class="adminList"><a href="adminHumanAfrs.php">예약 관리자</a></li>
                </ul>
            </div>

            <div class="allAdminTitle">
                <span>이름 / 아이디</span>
                <div class="inputBox resize"><input type="text"></div>
                <a href="javascript:;" class="cbtn">검색</a>
                <a> 전체 관리자 (최대 5명) </a>
            </div>

            <div class="allAdminContant">

                <div class="adminListbox1">
                    <p class="listboxInText"><span>박해일 (BHI)</span></p>
                    <p class="listboxInText"><span>전진우 (JJU)</span></p>
                    <p class="listboxInText"><span>송가인 (SGI)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                    <p class="listboxInText"><span>김우주 (KUJ)</span></p>
                </div>

                <div class="adminBtnBox">
                    <a class="btnSelect"><span>선택</span><img src="img/icon_arrow_right.png" alt="오른쪽화살"/></a>
                    <a class="btnRemove"><img src="img/icon_arrow_left.png" alt="왼쪽화살"/><span>빼기</span></a>
                </div>

                <div class="adminListRightBox">
                    <div class="adminListbox2">
                        <p class="listboxInText"><span>박원일(BWI)</span></p>
                        <p class="listboxInText"><span>김진우(KJU)</span></p>
                    </div>

                    <a class="cbtn2">확인</a>

                    <div class="adminRightText">
                        <p><strong>이용안내</strong></p>
                        <br>
                        <p>[선택]버튼으로 사용자를 지정한 후, </p>
                        <p><span>[확인] 버튼을 클릭</span>하시기 바랍니다.</p>
                        <p>전체 관리자는 <span>최대 5명까지</span> 지정할 수 있습니다.</p>
                        <p>(단, 최소 1명은 지정되어야 합니다.)</p>
                    </div>

                </div>

            </div>

            


        	

        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">
        	<div class="titleBox">
            	<div class="title">직위 / 직무 관리</div>
            </div>

            <div class="positionBox">

                <div class="list_title">
                    <span>직위 관리</span>
                    <div class="rightBox">
                        <a class="newBtn cadminInsert positionInsetBoxBtn">등급 추가</a>
                    </div>
                </div>

                <div class="positionBoxAllPiece">
                    <div class="positionBoxPiece">
                        <div class="positionTitle"><span>1등급 - 대표이사<span></div>
                        <div class="positionList">
                            <div class="list">
                                <span> 홍길동</span>
                                <span> 각시탈</span>
                                <span> 아무개</span>
                            </div>
                            <!-- <div class="inputBox"><input type="text" id=""></input></div> -->
                        </div>
                        <div class="positionImg"><img src="img/icon_plus_L.png"  id="positionInBtn" /></div>
                    </div>
                    <div class="positionBoxPiece">
                        <div class="positionTitle"><span>2등급 - 사장<span></div>
                        <div class="positionList">
                            <div class="list">
                                <span> 홍길동</span>
                            </div>
                            <div class="inputBox"><input type="text" id=""></input></div>
                        </div>
                        <div class="positionImg"> <img src="img/icon_plus_L.png" id="positionInBtn" /> </div>
                    </div>
                    <div class="positionBoxPiece">
                        <div class="positionTitle"><span>3등급 - 대표<span></div>
                        <div class="positionList">
                            <div class="list"> 
                            </div>
                            <div class="inputBox"><input type="text" id=""></input></div>
                        </div>
                        <div class="positionImg"> <img src="img/icon_plus_L.png" id="positionInBtn"  /> </div>
                    </div>
                </div> <!-- positionBoxAllPiece end -->

                <div class="positionInputBox" style="display:none;">
                    <div class="flexSetting" style="margin:0px;">
                        <div class="inputBox"><input type="text" id="rating" placeholder="등급"></input></div>
                        <div class="inputBox"><input type="text" id="pst" placeholder="직위"></input></div>
                    </div>
                    <span id="positionNewBtn">생성</span>
                </div> <!-- positionInputBox end  -->

            </div> <!-- positionBox end -->
            
            <div class="dutyBox">
                <div class="list_title">
                    <span>직무 관리</span>
                    <div class="rightBox">
                        <a class="newBtn cadminInsert dutyInsetBoxBtn">직무 추가</a>
                    </div>
                </div>

                <div class="dutyBoxAllPiece">
                    <div class="dutyBoxPiece">
                        <div class="dutyList">
                            <span>기획</span>
                            <span>관리</span>
                            <span>영업</span>
                            <span>생산</span>
                            <span>개발</span>
                        </div>
                        <div class="dutyInputBox" style="display:none;">
                            <div class="inputBox"><input type="text" id="dutyVal" placeholder="직무"></input></div>
                            <span id="dutyNewBtn">생성</span>
                        </div>
                    </div> <!-- dutyBoxPiece end -->
                </div> <!-- dutyBoxAllPiece end -->

            </div> <!-- dutyBox end -->
        	

        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>






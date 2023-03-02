<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea group">
        	<div class="titleBox">
            	<div class="title">그룹 관리</div>
                <a href="javascript:layer_open('group_add');" class="newBtn m_show">새 그룹 추가</a>
            </div>
            <div class="searchBox">
                <div class="inputBox"><input type="text"></div>
                <a href="javascript:;" class="btn">검색</a>
            </div>
        	<div class="documentBox m_hide">
                <div class="document_list">
                    <div class="list_title">
                        <span>문서함 ( 7 )</span>
                        <div class="rightBox">
                            <div class="selectBox">
                                <select>
                                    <option value="10줄보기">10줄 보기</option>
                                </select>
                            </div>
                            <a href="javascript:layer_open('group_add');" class="newBtn">새 그룹 추가</a>
                        </div>
                    </div>
                    <div class="tbBox">
                        <table>
                            <tr>
                                <th>그룹 이름</th>
                                <th>그룹 설명</th>
                                <th>멤버수</th>
                            </tr>
                            <tr>
                                <td>그룹 이름01</td>
                                <td>블라블라블라블라블라블라</td>
                                <td>10명</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="board_page">
                        <a href="javascript:;" class="firstBtn"></a>
                        <a href="javascript:;" class="prevBtn"></a>
                        <a href="javascript:;" class="number active">1</a>
                        <a href="javascript:;" class="number">2</a>
                        <a href="javascript:;" class="number">3</a>
                        <a href="javascript:;" class="number">4</a>
                        <a href="javascript:;" class="number">5</a>
                        <a href="javascript:;" class="number">6</a>
                        <a href="javascript:;" class="number">7</a>
                        <a href="javascript:;" class="number">8</a>
                        <a href="javascript:;" class="number">9</a>
                        <a href="javascript:;" class="number">10</a>
                        <a href="javascript:;" class="nextBtn"></a>
                        <a href="javascript:;" class="lastBtn"></a>
                    </div>
                </div>
                <div class="detailBox">
                	<div class="title">상세정보</div>
                    <div class="inputArea">
                    	<table>
                        	<tr>
                            	<th>그룹이름</th>
                                <td><div class="inputBox"><input type="text"></div></td>
                            </tr>
                            <tr>
                            	<th>그룹설명</th>
                                <td><div class="inputBox"><input type="text"></div></td>
                            </tr>
                        </table>
                        <div class="btnBox">
                        	<a href="javascript:;" class="delBtn">구성원 삭제</a>
                        	<a href="javascript:layer_open('member_add');" class="addBtn">구성원 추가</a>
                        </div>
                    </div>
                    <div class="list_title">
                        <span>총그룹 ( 5 )</span>
                        <div class="rightBox">
                            <div class="selectBox">
                                <select>
                                    <option value="5줄보기">5줄 보기</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tbBox">
                        <table>
                            <tr>
                                <th><input type="checkbox" id="check_all"><label for="check_all"></label></th>
                                <th><a href="javascript:;"><span>이름</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>회사명</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>휴대폰</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>이메일</span> <img src="esign-img/icon_sorting.png"></a></th>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check_01"><label for="check_01"></label></td>
                                <td>홍길동</td>
                                <td>아이퀘스트</td>
                                <td>01012341234</td>
                                <td>sadfsadf@iquest.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check_02"><label for="check_02"></label></td>
                                <td>홍길동</td>
                                <td>아이퀘스트</td>
                                <td>01012341234</td>
                                <td>sadfsadf@iquest.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check_03"><label for="check_03"></label></td>
                                <td>홍길동</td>
                                <td>아이퀘스트</td>
                                <td>01012341234</td>
                                <td>sadfsadf@iquest.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check_04"><label for="check_04"></label></td>
                                <td>홍길동</td>
                                <td>아이퀘스트</td>
                                <td>01012341234</td>
                                <td>sadfsadf@iquest.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check_05"><label for="check_05"></label></td>
                                <td>홍길동</td>
                                <td>아이퀘스트</td>
                                <td>01012341234</td>
                                <td>sadfsadf@iquest.com</td>
                            </tr>
                        </table>
                    </div>
                    <div class="board_page">
                        <a href="javascript:;" class="firstBtn"></a>
                        <a href="javascript:;" class="prevBtn"></a>
                        <a href="javascript:;" class="number active">1</a>
                        <a href="javascript:;" class="number">2</a>
                        <a href="javascript:;" class="number">3</a>
                        <a href="javascript:;" class="number">4</a>
                        <a href="javascript:;" class="number">5</a>
                        <a href="javascript:;" class="nextBtn"></a>
                        <a href="javascript:;" class="lastBtn"></a>
                    </div>
                    <div class="bottomBtn">
                    	<a href="javascript:;" class="delBtn">그룹 삭제</a>
                        <a href="javascript:;" class="saveBtn">그룹 상세 정보 저장</a>
                    </div>
                </div>
            </div>
            
            <!-- 모바일 -->
            <div class="documentBox m_show">
            	<ul>
                	<li>
                    	<div onClick="layer_open('group_detail');">
                            <div class="docu_name">아이퀘스트 근로계약</div>
                            <div class="text">2019년 신입 근로계약서</div>
                            <div class="number">20</div>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:layer_open('member_add');" class="member_addBtn"></a>
                        </div>
                    </li>
                    <li>
                    	<div onClick="layer_open('group_detail');">
                            <div class="docu_name">아이퀘스트 근로계약</div>
                            <div class="text">2019년 신입 근로계약서</div>
                            <div class="number">20</div>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:layer_open('member_add');" class="member_addBtn"></a>
                        </div>
                    </li>
                    <li>
                    	<div onClick="layer_open('group_detail');">
                            <div class="docu_name">아이퀘스트 근로계약</div>
                            <div class="text">2019년 신입 근로계약서</div>
                            <div class="number">20</div>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:layer_open('member_add');" class="member_addBtn"></a>
                        </div>
                    </li>
                    <li>
                    	<div onClick="layer_open('group_detail');">
                            <div class="docu_name">아이퀘스트 근로계약</div>
                            <div class="text">2019년 신입 근로계약서</div>
                            <div class="number">20</div>
                        </div>
                        <div class="rightBox">
                            <a href="javascript:layer_open('member_add');" class="member_addBtn"></a>
                        </div>
                    </li>
                </ul>
                <div class="board_page">
                    <a href="javascript:;" class="firstBtn"></a>
                    <a href="javascript:;" class="prevBtn"></a>
                    <a href="javascript:;" class="number active">1</a>
                    <a href="javascript:;" class="number">2</a>
                    <a href="javascript:;" class="number">3</a>
                    <a href="javascript:;" class="number">4</a>
                    <a href="javascript:;" class="number">5</a>
                    <a href="javascript:;" class="nextBtn"></a>
                    <a href="javascript:;" class="lastBtn"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 새그룹추가 -->
<div id="group_add" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="esign-img/icon_group_add.png"><span>새 그룹 추가</span> <a href="javascript:;" class="xBtn"><img src="esign-img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="inputArea">
                <table>
                    <tr>
                        <th>그룹이름</th>
                        <td><div class="inputBox"><input type="text"></div></td>
                    </tr>
                    <tr>
                        <th>그룹설명</th>
                        <td><div class="inputBox"><input type="text"></div></td>
                    </tr>
                </table>
                <a href="javascript:;" class="addBtn">추가</a>
            </div>
        </div>
    </div>
</div>

<!-- 전체구성원 -->
<div id="member_add" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="esign-img/icon_add_member_w.png"><span>전체 구성원</span> <a href="javascript:;" class="xBtn"><img src="esign-img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="searchBox">
                <div class="inputBox"><input type="text"></div>
                <a href="javascript:;" class="btn">검색</a>
            </div>
            <ul class="member_list">
            	<li>
                	<input type="checkbox" id="member_add_01"><label for="member_add_01"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member_add_02"><label for="member_add_02"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member_add_03"><label for="member_add_03"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member_add_04"><label for="member_add_04"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member_add_05"><label for="member_add_05"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
            </ul>
            <div class="board_page">
                <a href="javascript:;" class="firstBtn"></a>
                <a href="javascript:;" class="prevBtn"></a>
                <a href="javascript:;" class="number active">1</a>
                <a href="javascript:;" class="number">2</a>
                <a href="javascript:;" class="number">3</a>
                <a href="javascript:;" class="number">4</a>
                <a href="javascript:;" class="number">5</a>
                <a href="javascript:;" class="nextBtn"></a>
                <a href="javascript:;" class="lastBtn"></a>
            </div>
            <div class="bottomBtn">
                <a href="javascript:;" class="cancelBtn xBtn">취소</a>
                <a href="javascript:;" class="addBtn">그룹 추가</a>
            </div>
        </div>
    </div>
</div>

<!-- 그룹상세관리 -->
<div id="group_detail" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="esign-img/icon_add_member_w.png"><span>그룹관리</span> <a href="javascript:;" class="xBtn"><img src="esign-img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="groupBox">
                <div class="group_name">마케팅팀</div>
                <div class="group_text">아이퀘스트 마케팅팀 입니다.</div>
                <div class="number">20</div>
            </div>
            <div class="topBtn">
                <a href="javascript:;" class="delBtn">구성원 삭제</a>
                <a href="javascript:layer_open('member_add','group_detail');" class="addBtn">구성원 추가</a>
            </div>
            <ul class="member_list">
            	<li>
                	<input type="checkbox" id="member01"><label for="member01"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member02"><label for="member02"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member03"><label for="member03"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member04"><label for="member04"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
                <li>
                	<input type="checkbox" id="member05"><label for="member05"></label>
                    <div class="textBox">
                    	<div class="text01">김건우</div>
                    	<div class="text02">아이퀘스트</div>
                    </div>
                    <div class="textBox right">
                    	<div class="text01">010-1234-1234</div>
                    	<div class="text02">sample@iquest.co.kr</div>
                    </div>
                </li>
            </ul>
            <div class="board_page">
                <a href="javascript:;" class="firstBtn"></a>
                <a href="javascript:;" class="prevBtn"></a>
                <a href="javascript:;" class="number active">1</a>
                <a href="javascript:;" class="number">2</a>
                <a href="javascript:;" class="number">3</a>
                <a href="javascript:;" class="number">4</a>
                <a href="javascript:;" class="number">5</a>
                <a href="javascript:;" class="nextBtn"></a>
                <a href="javascript:;" class="lastBtn"></a>
            </div>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
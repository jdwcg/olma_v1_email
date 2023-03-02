<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
   
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">전체문서</div>
            </div>
            <div class="searchBox document">
            	<div class="selectBox">
                	<select>
                    	<option value="모든문서">모든문서</option>
                    </select>
                </div>
                <div class="selectBox">
                	<select>
                    	<option value="모든상태">모든상태</option>
                    </select>
                </div>
                <div class="selectBox">
                	<select>
                    	<option value="keyword">keyword</option>
                    </select>
                </div>
                <div class="dateBox"><input type="text" id="startDate" readonly></div>
                <p> ~ </p>
                <div class="dateBox mgR"><input type="text" id="endDate" readonly></div>
                <div class="inputBox resize"><input type="text"></div>
                <a href="javascript:;" class="btn">검색</a>
            </div>
            
            <!-- PC -->
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
                        </div>
                    </div>
                    <div class="tbBox">
                        <table>
                            <tr>
                                <th>상태</th>
                                <th width="20%">제목</th>
                                <th>처리유효기간</th>
                                <th>작성자</th>
                                <th>작성일</th>
                                <th>처리자</th>
                                <th>처리일</th>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
                            </tr>
                            <tr>
                                <td>최종완료</td>
                                <td><p>근로계약서</p></td>
                                <td>5일 10시간 남음</td>
                                <td>홍길동</td>
                                <td>2019-09-21</td>
                                <td>홍길동</td>
                                <td>2019-09-23</td>
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
                <div class="historyBox">
                	<div class="title">History</div>
                    <ul>
                        <li>
                            <div class="text01">시작 - 작성</div>
                            <div class="text02">김신훈 : 2008-05-01 09:32</div>
                        </li>
                        <li>
                            <div class="text01">서명요청</div>
                            <div class="text02">김신훈 : 2008-05-01 09:32</div>
                        </li>
                        <li>
                            <div class="text01">수신자열람</div>
                            <div class="text02">2008-05-01 09:32</div>
                        </li>
                        <li>
                            <div class="text01">수신자승인</div>
                            <div class="text02">2008-05-01 09:32</div>
                        </li>
                        <li>
                            <div class="text01">최종완료</div>
                            <div class="text02">2008-05-01 09:32(TXID : 4E)</div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- 모바일 -->
            <div class="documentBox m_show">
            	<ul>
                	<li>
                    	<div class="docu_name">근로계약서</div>
                        <div class="text">서명 참여자 : 홍길동, 김영희</div>
                        <div class="date">2019.10.01 오전 09:30분</div>
                        <div class="state wait">서명 대기중</div>
                        <div class="rightBox">
                            <a href="javascript:layer_open('history');" class="historyBtn"></a>
                        </div>
                    </li>
                    <li>
                    	<div class="docu_name">자동차 계약서</div>
                        <div class="text">서명 참여자 : 홍길동, 김영희</div>
                        <div class="date">2019.10.01 오전 09:30분</div>
                        <div class="state complete">최종완료</div>
                        <div class="rightBox">
                        	<a href="javascript:;" class="downloadBtn"></a>
                            <a href="javascript:layer_open('history');" class="historyBtn"></a>
                        </div>
                    </li>
                    <li>
                    	<div class="docu_name">보험계약서</div>
                        <div class="text">서명 참여자 : 홍길동, 김영희</div>
                        <div class="date">2019.10.01 오전 09:30분</div>
                        <div class="state myWait">내 서명 대기</div>
                        <div class="rightBox">
                            <a href="javascript:layer_open('history');" class="historyBtn"></a>
                        </div>
                    </li>
                    <li>
                    	<div class="docu_name">계약서 템플릿</div>
                        <div class="text">서명 참여자 : 홍길동, 김영희</div>
                        <div class="date">2019.10.01 오전 09:30분</div>
                        <div class="state complete">최종완료</div>
                        <div class="rightBox">
                        	<a href="javascript:;" class="downloadBtn"></a>
                            <a href="javascript:layer_open('history');" class="historyBtn"></a>
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

<!-- 모바일 히스토리 팝업창 -->
<div id="history" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_clock_w.svg"><span>히스토리</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<ul class="history_list">
            	<li>
                	<div class="text01">시작 - 작성</div>
                	<div class="text02">김신훈 : 2018-05-01 09:32</div>
                </li>
                <li>
                	<div class="text01">서명요청</div>
                	<div class="text02">김신훈 : 2018-05-01 09:32</div>
                </li>
                <li>
                	<div class="text01">수신자열람</div>
                	<div class="text02">2018-05-01 09:32</div>
                </li>
                <li>
                	<div class="text01">수신자승인</div>
                	<div class="text02">2018-05-01 09:32</div>
                </li>
                <li>
                	<div class="text01">최종완료</div>
                	<div class="text02">2018-05-01 09:32(TXID : 4E2341EDD)</div>
                </li>
            </ul>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
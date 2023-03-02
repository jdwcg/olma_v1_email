<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">근무 통계</div>
            </div>

            <div class="list_title">
                <span>2022년</span>
            </div>
            <div class="allWorkShow">
                <p class="allWorkShowBtn">모든 부서 <img src="img/up_icon61204.png" class="upArrow" > <img src="img/down_icon61209.png" class="downArrow" ></p>
            </div>

            <div class="allWorkTable">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2"> 
                                <div><p>--(주)아이퀘스트(128)</p></div>
                            </th>
                            <th>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <div><p>-- CEO(1)</p></div> 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div><p>-- <img src="img/icon_plus.png"/>CTO(72)</p></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div><p>-- <img src="img/icon_plus.png"/>CBO(31)</p></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div><p>-- <img src="img/icon_plus.png"/>CBO(31)</p></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div><p>-- <img src="img/icon_plus.png"/>CFO(8)</p></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div><p>-- <img src="img/icon_plus.png"/>협력업체(16)</p></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- allWorkTable end -->

                <div class="searchBox">
                    <div class="selectBox">
                        <select>
                            <option value="이름">이름</option>
                            <option value="소속">소속</option>
                        </select>
                    </div>
                    <div class="inputBox resize bigTbInputBox"><input type="text"></div>
                    <a href="javascript:;" class="btn">검색</a>
                    <div class="rightBox">
                        <div class="inputBox">
                            <input type="file" id="fileExcell" style="display:none;">
                            <input class="upload-name" value="" readonly>
                        </div>
                        <label for="fileExcell" class="btn">excell</label> 
                    </div>
                </div>

            <div class="documentBox m_hide">
                <div class="document_list" style="width:100%">
                   

                    <div class="tbBox bigTbBox">
                        <table>
                            <tr>
                                <th colspan="2"><a href="javascript:;"><span>이름/소속</span> </a></th>
                                <th colspan="3"><a href="javascript:;"><span>휴가</span></a></th>
                                <th colspan="4"><a href="javascript:;"><span>근태</span></a></th>
                                <th colspan="3"><a href="javascript:;"><span>근무</span></a></th>
                            </tr>
                            <tr>
                                <td><span>이름(ID)</span></td>
                                <td><span>소속</span></td>
                                <td><span>생성</span></td>
                                <td><span>사용</span></td>
                                <td><span>잔여</span></td>
                                <td><span>지각</span></td>
                                <td><span>조기퇴근</span></td>
                                <td><span>결근</span></td>
                                <td><span>퇴근미체크</span></td>
                                <td><span>근무일수</span></td>
                                <td><span>총근무시간</span></td>
                                <td><span>평균근무시간</span></td>
                            </tr>
                            <tr>
                                <td><span>김순모(ceoksm)</span></td>
                                <td><span>CEO</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>3</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>박원일(wipark)</span></td>
                                <td><span>CTO</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>3</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>박영신(pys)</span></td>
                                <td><span>개발1본부</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>박종식(pjongsik)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>신원식(sws)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>류승혁(rsh)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>박병관(pbk)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>김주성(kjs)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>이승아(lsa)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                            <tr>
                                <td><span>김한국(khg)</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0일</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>4</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                                <td><span>0</span></td>
                            </tr>
                        </table>
                    </div> <!-- tbBox end -->
                    <div class="tbTotal">총 인원: <span>128</span></div>
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
                </div> <!-- document_list end -->
            </div> <!-- documentBox m_hide end -->


            <!-- 모바일 -->
            <div class="documentBox m_show">
            	<ul>
                	<li onClick="layer_open('member_detail');">
                        <div class="docu_name">김순모(ceoksm) / CEO</div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>휴가</a></th></tr>
                                <tr>
                                    <td>생성: <span>0일</span></td>
                                    <td>사용: <span>0일</span></td>
                                    <td>잔여: <span>0일</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="4"><a>근태</a></th></tr>
                                <tr>
                                    <td>지각: <span>0</span></td>
                                    <td>조기퇴근: <span>0</span></td>
                                    <td>결근: <span>3</span></td>
                                    <td>퇴근미체크: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>근무</a></th></tr>
                                <tr>
                                    <td>근무일수: <span>0</span></td>
                                    <td>총근무시간: <span>0</span></td>
                                    <td>평균근무시간: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                    </li>

                	<li onClick="layer_open('member_detail');">
                        <div class="docu_name">박원일(wipark) / CTO</div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>휴가</a></th></tr>
                                <tr>
                                    <td>생성: <span>0일</span></td>
                                    <td>사용: <span>0일</span></td>
                                    <td>잔여: <span>0일</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="4"><a>근태</a></th></tr>
                                <tr>
                                    <td>지각: <span>0</span></td>
                                    <td>조기퇴근: <span>0</span></td>
                                    <td>결근: <span>4</span></td>
                                    <td>퇴근미체크: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>근무</a></th></tr>
                                <tr>
                                    <td>근무일수: <span>0</span></td>
                                    <td>총근무시간: <span>0</span></td>
                                    <td>평균근무시간: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                    </li>

                    <li onClick="layer_open('member_detail');">
                        <div class="docu_name">박영신(pys)/ 개발1본부</div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>휴가</a></th></tr>
                                <tr>
                                    <td>생성: <span>0일</span></td>
                                    <td>사용: <span>0일</span></td>
                                    <td>잔여: <span>0일</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="4"><a>근태</a></th></tr>
                                <tr>
                                    <td>지각: <span>0</span></td>
                                    <td>조기퇴근: <span>0</span></td>
                                    <td>결근: <span>3</span></td>
                                    <td>퇴근미체크: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>근무</a></th></tr>
                                <tr>
                                    <td>근무일수: <span>0</span></td>
                                    <td>총근무시간: <span>0</span></td>
                                    <td>평균근무시간: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                    </li>

                    <li onClick="layer_open('member_detail');">
                        <div class="docu_name">박종식(pjongsik) / 개발1팀</div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>휴가</a></th></tr>
                                <tr>
                                    <td>생성: <span>0일</span></td>
                                    <td>사용: <span>0일</span></td>
                                    <td>잔여: <span>0일</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="4"><a>근태</a></th></tr>
                                <tr>
                                    <td>지각: <span>0</span></td>
                                    <td>조기퇴근: <span>0</span></td>
                                    <td>결근: <span>3</span></td>
                                    <td>퇴근미체크: <span>0</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tableText">
                            <table class="m_bigCtable">
                                <tr><th colspan="3"><a>근무</a></th></tr>
                                <tr>
                                    <td>근무일수: <span>0</span></td>
                                    <td>총근무시간: <span>0</span></td>
                                    <td>평균근무시간: <span>0</span></td>
                                </tr>
                            </table>
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
            </div><!-- 모바일 끝-->

        </div> <!-- mainArea subArea end -->
    </div> <!-- container end -->

    

</div><!-- // wraper -->
</body>
</html>
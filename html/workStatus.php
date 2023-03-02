<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">근무 현황</div>
            </div>

            <div class="list_title">
                <span>2022년 08월 15일 ~ 21일</span>
                <p>총 인원 : 128명</p>
            </div>
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
                                <th><span>이름</span></th>
                                <th><span>소속</span></th>
                                <th><span>15(월)</span></th>
                                <th><span>16(화)</span></th>
                                <th><span>17(수)</span></th>
                                <th><span>18(목)</span></th>
                                <th><span>19(금)</span></th>
                                <th><span>20(토)</span></th>
                                <th><span>21(일)</span></th>
                                <th><span>주간합계</span></th>
                            </tr>
                            <tr>
                                <td><span class="textName">김순모</span></td>
                                <td><span>CEO</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">박원일</span></td>
                                <td><span>CTO</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">박영신</span></td>
                                <td><span>개발1본부</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">박종식</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">신원식</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">류승혁</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">박병관</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">김주성</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">이승아</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="textName">김한국</span></td>
                                <td><span>개발1팀</span></td>
                                <td><span class="textVacation">광복절</span></td>
                                <td><span class="textWarning">결근</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span>정 09:00 ~ 18:00</span></td>
                                <td><span class="textVacation">휴무일</span></td>
                                <td><span class="textVacation">휴일</span></td>
                                <td>
                                    <span>계획:24시간</span>
                                    <span>휴가:0시간</span>
                                    <span>실근무:0시간</span>
                                </td>
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
                	<li>
                        <div class="docu_name">김순모 / CEO</div>
                        <div class="tableText">
                            <table class="m_bigCtable1">
                                <tr>
                                    <td>
                                        <p>15(월)</p>
                                        <a class="textVacation">광복절</a>
                                    </td>
                                    <td>
                                        <p>16(화)</p>
                                        <a class="textWarning">결근</a>
                                    </td>
                                    <td>
                                        <p>17(수)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>18(목)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>19(금)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>20(토)</p>
                                        <a class="textVacation">휴무일</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>21(일)</p>
                                        <a class="textVacation">휴무</a>
                                    </td>
                                    <td colspan="2">
                                        <p>주간합계</p>
                                        <a>계획:24시간</a>
                                        <a>휴가:0시간</a>
                                        <a>실근무:0시간</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>

                	<li>
                        <div class="docu_name">박원일 / CTO</div>
                        <div class="tableText">
                            <table class="m_bigCtable1">
                                <tr>
                                    <td>
                                        <p>15(월)</p>
                                        <a class="textVacation">광복절</a>
                                    </td>
                                    <td>
                                        <p>16(화)</p>
                                        <a class="textWarning">결근</a>
                                    </td>
                                    <td>
                                        <p>17(수)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>18(목)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>19(금)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>20(토)</p>
                                        <a class="textVacation">휴무일</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>21(일)</p>
                                        <a class="textVacation">휴무</a>
                                    </td>
                                    <td colspan="2">
                                        <p>주간합계</p>
                                        <a>계획:24시간</a>
                                        <a>휴가:0시간</a>
                                        <a>실근무:0시간</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>

                	<li>
                        <div class="docu_name">박영신 / 개발1본부</div>
                        <div class="tableText">
                            <table class="m_bigCtable1">
                                <tr>
                                    <td>
                                        <p>15(월)</p>
                                        <a class="textVacation">광복절</a>
                                    </td>
                                    <td>
                                        <p>16(화)</p>
                                        <a class="textWarning">결근</a>
                                    </td>
                                    <td>
                                        <p>17(수)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>18(목)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>19(금)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>20(토)</p>
                                        <a class="textVacation">휴무일</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>21(일)</p>
                                        <a class="textVacation">휴무</a>
                                    </td>
                                    <td colspan="2">
                                        <p>주간합계</p>
                                        <a>계획:24시간</a>
                                        <a>휴가:0시간</a>
                                        <a>실근무:0시간</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>

                	<li>
                        <div class="docu_name">박종식 / 개발1팀</div>
                        <div class="tableText">
                            <table class="m_bigCtable1">
                                <tr>
                                    <td>
                                        <p>15(월)</p>
                                        <a class="textVacation">광복절</a>
                                    </td>
                                    <td>
                                        <p>16(화)</p>
                                        <a class="textWarning">결근</a>
                                    </td>
                                    <td>
                                        <p>17(수)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>18(목)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>19(금)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>20(토)</p>
                                        <a class="textVacation">휴무일</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>21(일)</p>
                                        <a class="textVacation">휴무</a>
                                    </td>
                                    <td colspan="2">
                                        <p>주간합계</p>
                                        <a>계획:24시간</a>
                                        <a>휴가:0시간</a>
                                        <a>실근무:0시간</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="docu_name">신원식 / 개발1팀</div>
                        <div class="tableText">
                            <table class="m_bigCtable1">
                                <tr>
                                    <td>
                                        <p>15(월)</p>
                                        <a class="textVacation">광복절</a>
                                    </td>
                                    <td>
                                        <p>16(화)</p>
                                        <a class="textWarning">결근</a>
                                    </td>
                                    <td>
                                        <p>17(수)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>18(목)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>19(금)</p>
                                        <a>정 09:00 ~ 18:00</a>
                                    </td>
                                    <td>
                                        <p>20(토)</p>
                                        <a class="textVacation">휴무일</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>21(일)</p>
                                        <a class="textVacation">휴무</a>
                                    </td>
                                    <td colspan="2">
                                        <p>주간합계</p>
                                        <a>계획:24시간</a>
                                        <a>휴가:0시간</a>
                                        <a>실근무:0시간</a>
                                    </td>
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
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
                    <li class="adminList"><a href="adminSetting.php">전체 관리자</a></li>
                    <li class="adminList"><a href="adminHumanAfrs.php">인사 관리자</a></li>
                    <li class="adminList"><a href="adminPayment.php">전자결재 관리자</a></li>
                    <li class="adminList active"><a href="adminMessage.php">메시징 관리자</a></li>
                    <li class="adminList"><a href="adminReservation.php">예약 관리자</a></li>
                </ul>
            </div>

            <div class="documentBox m_hide">
                <div class="document_list" style="width:100%">
                    <div class="list_title">
                        <span>메시징 관리자</span>
                        <div class="rightBox">
                            <a class="newBtn cadminInsert">새 관리자 추가</a>
                        </div>
                    </div>
                    <div class="tbBox">
                        <table>
                            <tr>
                                <th><a href="javascript:;"><span>이름</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>아이디</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>소속</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>등록일</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span>상태</span> <img src="esign-img/icon_sorting.png"></a></th>
                                <th><a href="javascript:;"><span></span></th>
                            </tr>
                            <tr class="adminInsertTr">
                                <td><div class="inputBox"><input type="text" id="name"></div></td>
                                <td><div class="inputBox"><input type="text" id="id" /></div></td>
                                <td>
                                    <div class="selectBox cselectBox">
                                        <select>
                                            <option value="1팀">시스템보안R&D팀</option>
                                            <option value="2팀">개발1본부</option>
                                            <option value="5팀">HR팀</option>
                                            <option value="인사">인사 팀</option>
                                        </select>
                                    </div>
                                </td>
                                <td><div class="inputBox"><input type="text" id="date" /></div></td>
                                <td><div class="inputBox"><input type="text" id="setting" /></div></td>
                                <td>
                                    <div class="tableInsertDiv">저장</div>
                                </td>
                            </tr>
                            <tr>
                                <td>김진우</td>
                                <td>jwkim</td>
                                <td>시스템보안R&D팀</td>
                                <td>2022-08-15</td>
                                <td>전체 관리자</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>김현석</td>
                                <td>djsunz</td>
                                <td>시스템보안R&D팀</td>
                                <td>2022-08-15</td>
                                <td>전체 관리자</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>박영신</td>
                                <td>pys</td>
                                <td>개발1본부</td>
                                <td>2021-05-07</td>
                                <td>삭제</td>
                                <td></td>
                            </tr>
                        </table>
                    </div> <!-- tbBox end -->
                    <div class="tbTotal">총 인원: <span>3</span></div>
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
                        <div class="docu_name">김진우 </div>
                        <div class="text">시스템보안R&D팀</div>
                        <div class="date">jwkim / 2022-08-15</div>
                        <div class="states">전체 관리자</div>
                    </li>
                    <li onClick="layer_open('member_detail');">
                        <div class="docu_name">박영신</div>
                        <div class="text">개발1본부</div>
                        <div class="date">pys / 2021-05-07</div>
                        <div class="states delete">삭제</div>
                    </li>
                    <li onClick="layer_open('member_detail');">
                        <div class="docu_name">박원일</div>
                        <div class="text">CTO</div>
                        <div class="date">jwipark / 2022-08-15</div>
                        <div class="states">전체 관리자</div>
                    </li>
                    <li onClick="layer_open('member_detail');">
                        <div class="docu_name">김장운</div>
                        <div class="text">HR팀</div>
                        <div class="date">kjw0129 / 2020-03-22</div>
                        <div class="states delete">삭제</div>
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
                <div class="list_title">
                    <a onClick="layer_open('new_member_add');" class="insertBtn">새 관리자 추가</a>
                </div>
            </div><!-- 모바일 끝-->
        </div> <!-- mainArea subArea end -->
    </div> <!-- container end -->

    <!-- 새관리자추가 -->
    <div id="new_member_add" class="layer_popup">
        <div class="popupBox">
            <div class="titleBox"><img src="esign-img/icon_group_add.png"><span>새 관리자 추가</span> <a href="javascript:;" class="xBtn"><img src="esign-img/icon_xBtn_w.png"></a></div>
            <div class="popup_main">
                <div class="inputArea">
                    <table>
                        <tr>
                            <th>이름</th>
                            <td><div class="inputBox"><input type="text"></div></td>
                        </tr>
                        <tr>
                            <th>아이디</th>
                            <td><div class="inputBox"><input type="text"></div></td>
                        </tr>
                        <tr>
                            <th>소속</th>
                            <td> 
                                <div class="selectBox">
                                            <select>
                                                <option value="1팀">시스템보안R&D팀</option>
                                                <option value="2팀">개발1본부</option>
                                                <option value="5팀">HR팀</option>
                                                <option value="인사">인사 팀</option>
                                            </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td><div class="inputBox"><input type="email"></div></td>
                        </tr>
                        <tr>
                            <th>상태</th>
                            <td><div class="inputBox"><input type="number"></div></td>
                        </tr>
                    </table>
                    <a href="javascript:;" class="addBtn">추가</a>
                </div>
            </div>
        </div>
    </div> <!-- 새관리자추가 끝 -->

</div><!-- // wraper -->
</body>
</html>
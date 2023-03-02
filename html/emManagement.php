<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">
                    임직원 관리
                </div>
            </div>

            <div class="adminSelectNav">
                <ul class="adminListUl">
                    <li class="adminList active"><a>기본 설정</a></li>
                    <li class="adminList"><a>사용자 추가</a></li>
                    <li class="adminList"><a>사용자 일괄 등록</a></li>
                    <li class="adminList"><a>사용자 일괄 수정</a></li>
                </ul>
            </div>
            
            <div class="documentBox m_hide">
                <div class="document_list" style="width:100%">
                    <div class="list_title">
                        <span class="list_titleSpan">사용자 : 129</span>
                        <span>메일사용계정 : 117/150</span>
                        <div class="rightBox">
                            <a class="newBtn cadminInsert">새 임직원 추가</a>
                        </div>
                    </div>
                    <div class="tbBox">
                        <table>
                            <tr>
                            <th><a href="javascript:;"></a></th>
                                <th><a href="javascript:;"><span>이름</span></a></th>
                                <th><a href="javascript:;"><span>아이디</span></a></th>
                                <th><a href="javascript:;"><span>비밀번호</span></a></th>
                                <th><a href="javascript:;"><span>사내전화</span> </a></th>
                                <th><a href="javascript:;"><span>휴대전화</span></a></th>
                                <th><a href="javascript:;"><span>소속조직</span></a></th>
                                <th><a href="javascript:;"><span>직위</span></a></th>
                                <th><a href="javascript:;"><span>메일 사용</span></a></th>
                                <th><a href="javascript:;"><span>상태</span></a></th>
                            </tr>
                            <tr class="adminInsertTr">
                                <td></td>
                                <td><div class="inputBox"><input type="text" id="name"></div></td>
                                <td><div class="inputBox"><input type="text" id="id" /></div></td>
                                <td><div class="inputBox"><input type="text" id="passwd" /></div></td>
                                <td><div class="inputBox"><input type="text" id="inPhone" /></div></td>
                                <td><div class="inputBox"><input type="text" id="Phone" /></div></td>
                                <td>
                                    <div class="selectBox cselectBox">
                                        <select>
                                            <option value="1팀">개발 1팀</option>
                                            <option value="2팀">개발 2팀</option>
                                            <option value="5팀">개발 5팀</option>
                                            <option value="인사">인사 팀</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="selectBox cselectBox">
                                        <select>
                                            <option value="사원">사원</option>
                                            <option value="책임">책임</option>
                                            <option value="팀장">팀장</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="selectBox cselectBox">
                                        <select>
                                            <option value="사용">사용</option>
                                            <option value="미사용">미사용</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="tableInsertDiv">저장</div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkCilck" /></td>
                                <td>강세희</td>
                                <td>ksh1</td>
                                <td>********</td>
                                <td></td>
                                <td>010-9484-9814</td>
                                <td>개발5팀</td>
                                <td>책임</td>
                                <td>사용</td>
                                <td>정상</td>
                            </tr>
                            <tr>
                            <td><input type="checkbox" id="checkCilck" /></td>
                                <td>박수진</td>
                                <td>psj</td>
                                <td>********</td>
                                <td></td>
                                <td>010-4008-9642</td>
                                <td>개발5팀</td>
                                <td>책임</td>
                                <td>사용</td>
                                <td>정상</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkCilck" /></td>
                                <td>이성호</td>
                                <td>kamiyun</td>
                                <td>********</td>
                                <td>827</td>
                                <td>010-3295-9879</td>
                                <td>개발5팀</td>
                                <td>책임</td>
                                <td>팀장</td>
                                <td>정상</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkCilck" /></td>
                                <td>전혜리</td>
                                <td>jhr1</td>
                                <td>********</td>
                                <td></td>
                                <td>010-2062-1059</td>
                                <td>개발5팀</td>
                                <td>책임</td>
                                <td>사용</td>
                                <td>정상</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tbTotal">소속원 수: <span>4명</span></div>
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
                        <div class="docu_name">강세희 </div>
                        <div class="text">개발5팀 / 책임</div>
                        <div class="text">827 / 010-9484-9814</div>
                        <div class="date">jwkim / ****** / 2022-08-15</div>
                        <div class="text">메일 - 사용</div>
                        <div class="states">정상</div>
                    </li>
                    <li onClick="layer_open('member_detail');">
                    <div class="docu_name">박수진 </div>
                        <div class="text">개발5팀 / 책임</div>
                        <div class="text">826 / 010-2062-1059</div>
                        <div class="date">psj / ****** / 2022-08-15</div>
                        <div class="text">메일 - 사용</div>
                        <div class="states">정상</div>
                    </li>
                    <li onClick="layer_open('member_detail');">
                    <div class="docu_name">이성호 </div>
                        <div class="text">개발5팀 / 팀장</div>
                        <div class="text">823 / 010-3295-9879</div>
                        <div class="date">kamiyun / ****** / 2022-08-15</div>
                        <div class="text">메일 - 사용</div>
                        <div class="states">정상</div>
                    </li>
                    <li onClick="layer_open('member_detail');">
                        <div class="docu_name">전혜리 </div>
                        <div class="text">개발5팀 / 책임</div>
                        <div class="text">825 / 010-2062-1059</div>
                        <div class="date">jhr1 / ****** / 2022-08-15</div>
                        <div class="text">메일 - 미사용</div>
                        <div class="states delete">삭제</div> 
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
                    <a onClick="layer_open('new_member_add');" class="insertBtn">새 임직원 추가</a>
                </div>
            </div><!-- 모바일 끝-->

        </div> <!-- mainArea subArea end -->
    </div> <!-- container end -->

    <!-- 새관리자추가 -->
    <div id="new_member_add" class="layer_popup">
        <div class="popupBox">
            <div class="titleBox"><img src="img/icon_group_add.png"><span>새 임직원 추가</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
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
                            <th>비밀번호</th>
                            <td><div class="inputBox"><input type="text"></div></td>
                        </tr>
                        <tr>
                            <th>사내전화</th>
                            <td><div class="inputBox"><input type="text"></div></td>
                        </tr>
                        <tr>
                            <th>휴대전화</th>
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
                            <th>직위</th>
                            <td> 
                                <div class="selectBox">
                                            <select>
                                                <option value="사원">사원</option>
                                                <option value="책임">책임</option>
                                                <option value="팀장">팀장</option>
                                                <option value="이사">이사</option>
                                            </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>메일 사용</th>
                            <td> 
                                <div class="selectBox">
                                            <select>
                                                <option value="허용">허용</option>
                                                <option value="비허용">비허용</option>
                                            </select>
                                </div>
                            </td>
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
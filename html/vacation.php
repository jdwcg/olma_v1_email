<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">
            <div class="adminSelectNav">
                        <ul class="adminListUl">
                            <li class="adminList active"><a href="">근무</a></li>
                            <li class="adminList"><a href="">휴가</a></li>
                            <li class="adminList"><a href="">근무체크</a></li>
                            <li class="adminList"><a href="">일일근무규칙</a></li>
                        </ul>
            </div>
            <div class="vacationMain">
                
                <!--
                <div class="subWorkNav">
                    <ul>
                        <li class="ulList active">근무</li>
                        <li class="ulList" >휴가</li>
                        <li class="ulList" >근무체크</li>
                        <li class="ulList" >일일근무규칙</li>
                        <li class="ulListHide" style="width:40%"></li>
                    </ul>
                </div>
                -->

                <div class="subWorkTitle">
                    <span>근무관리 사용 여부</span>
                </div>

                <div class="subWorkSt">
                    <div class="subWorkBtn active">사용</div>
                    <div class="subWorkBtn">사용안함</div>
                </div>

                <div class="insertBtn">저장</div>

                <div class="subWorkTitle textBoxDiv">
                    <span>근무상태 관리</span>
                    <p>업무, 외출, 외근 등의 근무상태를 생성하고, 근무시간 포함 여부를 설정하세요. 근무상태의 근무시간 포함 여부에 따라 일별 근무시간에서 제외되거나 추가됩니다.</p>
                    <p>사용자가 [내 근무현황]페이지에서 현재의 근무상태를 체크할 수 있습니다.</p>
                </div>

                <div class="vactionSettingDiv">
                    <div class="vacationTableBox">
                        <div>
                            <a class="newBtn">근무상태 추가</a> 
                        </div>
                        <table>
                            <tr>
                                <th><p>근무상태</p></th>
                                <th><p>근무시간 포함 여부</p></th>
                                <th><p>사용여부</p></th>
                                <th><p>수정/삭제</p></th>
                            </tr>

                            <tr>
                                <td><div class="inputBox"><input type="text" id="name"></div></td>
                                <td>
                                    <div class="selectBox cselectBox">
                                        <select>
                                            <option value="포함">포함</option>
                                            <option value="미포함">미포함</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="selectBox cselectBox">
                                        <select>
                                            <option value="포함">포함</option>
                                            <option value="미포함">미포함</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="tableBtnDiv">
                                        <span class="saveBtn">저장</span>
                                        <span class="deleteBtn">취소</span>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><p>외출</p></td>  
                                <td><p>미포함</p></td>
                                <td><p>사용</p></td>
                                <td>
                                    <div class="tableBtnDiv">
                                        <span class="alterBtn">수정</span>
                                        <span class="deleteBtn">삭제</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><p>회의</p></td>  
                                <td><p>포함</p></td>
                                <td><p>사용</p></td>
                                <td>
                                    <div class="tableBtnDiv">
                                        <span class="alterBtn">수정</span>
                                        <span class="deleteBtn">삭제</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><p>외근</p></td>  
                                <td><p>포함</p></td>
                                <td><p>사용</p></td>
                                <td>
                                    <div class="tableBtnDiv">
                                        <span class="alterBtn">수정</span>
                                        <span class="deleteBtn">삭제</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><p>휴식</p></td>  
                                <td><p>미포함</p></td>
                                <td><p>미사용</p></td>
                                <td>
                                    <div class="tableBtnDiv">
                                        <span class="alterBtn">수정</span>
                                        <span class="deleteBtn">삭제</span>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div> <!-- vacationTableBox end -->
                </div> <!--  vactionSettingDiv end -->
            </div><!-- vacationMain end -->
            

        	

        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>






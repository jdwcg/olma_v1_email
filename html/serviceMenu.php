<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">서비스 메뉴 설정</div>
            </div>

            <div class="serviceDescrip">
                <p> ·  오피스홈에서 노출될 서비스 메뉴를 설정할 수 있습니다. (오피스 웹에만 해당) </p>
                <p> · '사용'으로 설정한 메뉴만 오피스 홈에서 노출됩니다. '메일'은 필수 사용 서비스로 무조건 노출되어 메뉴 설정이 불가합니다. <a>[메뉴얼 바로가기]</a></p>
            </div>

            <div class="CtableSet">
                <table>
                    <tr>
                        <th width=20%>서비스 명</th>
                        <th width=40%>전체 설정</th>
                        <th width=40%>개별 설정</th>
                    </tr>

                    <tr>
                        <td>전자 결재</td>
                        <td>
                            <input type="radio" name="paymentAll"><label for="사용" >사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="paymentAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="paymentIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="paymentIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>인사</td>
                        <td>
                            <input type="radio" name="HumanAfrsAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="HumanAfrsAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="HumanAfrsIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="HumanAfrsIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>메시징</td>
                        <td>
                            <input type="radio" name="messageAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="messageAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="messageIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="messageIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>주소록</td>
                        <td> 
                            <input type="radio" name="addressAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="addressAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="addressIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="addressIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr >
                        <td id="CtableSetTd1">전자세금계산서</td>
                        <td id="CtableSetTd2" colspan="2">
                            <span>전자세금계산서 이용 권한이 있는 사용자에게 메뉴가 노출됩니다. <a href=""><strong>설정하기</strong></a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>게시판</td>
                        <td>
                            <input type="radio" name="boardAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="boardAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="boardIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="boardIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>그룹</td>
                        <td>
                            <input type="radio" name="groupAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="groupAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="groupIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="groupIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>스토어</td>
                        <td>
                            <input type="radio" name="storeAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="storeAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="storeIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="storeIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>공용메일</td>
                        <td>
                            <input type="radio" name="meailAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="meailAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="meailIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="meailIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>예약</td>
                        <td>
                            <input type="radio" name="reservAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="reservAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="reservIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="reservIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>
                    <tr>
                        <td>일정</td>
                        <td>
                            <input type="radio" name="scheduleAll"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="scheduleAll"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                        <td>
                            <input type="radio" name="scheduleIndvd"><label for="사용">사용</label> <img src="img/check_yes_icon_157194.png" />
                            <input type="radio" name="scheduleIndvd"><label for="사용 안함">사용 안함</label> <img src="img/check_no_icon_157196.png" />
                        </td>
                    </tr>


                </table>

            </div>
            


        	

        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
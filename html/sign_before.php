<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
    
        <div class="mainArea subArea pdT_01">
        	<div class="titleBox2 fixed">
            	<div class="rightBox">
                	<div class="perBox">
                    	<a href="javascript:;" class="minusBtn"></a>
                        <span class="percent">100%</span>
                        <a href="javascript:;" class="plusBtn"></a>
                    </div>
                    <a href="javascript:layer_open('member_setting');" class="saveBtn">다음</a>
                </div>
            </div>
        	<div class="contract_view">
            	<img src="img/document_sample.jpg">
            </div>
        </div>
    </div>
</div>

<!-- 참여자 설정 팝업창 -->
<div id="member_setting" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_member_setting.svg"><span>참여자 설정</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<ul class="add_list">
            	<a href="" class="top_btn">구성원관리에서 선택</a>
            	<li>
                	<div class="list_title">서명 요청자 <a href="javascript:;" class="list_xBtn"><img src="img/icon_xBtn_gray.png"></a></div>
                    <div class="list_conts">
                    	<table>
                        	<tr>
                            	<th>이름</th>
                                <td><div class="inputBox"><input type="text"></div></td>
                            </tr>
                            <tr>
                            	<th>휴대폰 번호</th>
                                <td>
                                	<div class="phoneBox">
                                    	<select>
                                        	<option value="010">010</option>
                                            <option value="011">011</option>
                                        </select>
                                        <span>-</span>
                                        <input type="number">
                                        <span>-</span>
                                        <input type="number">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>이메일</th>
                                <td><div class="inputBox"><input type="email"></div></td>
                            </tr>
                            <tr>
                            	<th>처리유효기한</th>
                                <td>
                                    <div class="dateBox">
                                    	<input type="text" id="datepicker01">
                                        <input type="number" class="time">
                                        <span>시</sapn>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>서명알림수단</th>
                                <td>
                                	<div class="checkBox">
                                        <input type="checkbox" id="요청자sms"><label for="요청자sms">SMS</label>
                                        <input type="checkbox" id="요청자email"><label for="요청자email">e-mail</label>
                                        <input type="checkbox" id="요청자kakao"><label for="요청자kakao">kakao</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                	<div class="list_title">서명 참여자 <a href="javascript:;" class="list_xBtn"><img src="img/icon_xBtn_gray.png"></a></div>
                    <div class="list_conts">
                    	<table>
                        	<tr>
                            	<th>이름</th>
                                <td><div class="inputBox"><input type="text"></div></td>
                            </tr>
                            <tr>
                            	<th>휴대폰 번호</th>
                                <td>
                                	<div class="phoneBox">
                                    	<select>
                                        	<option value="010">010</option>
                                            <option value="011">011</option>
                                        </select>
                                        <span>-</span>
                                        <input type="number">
                                        <span>-</span>
                                        <input type="number">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>이메일</th>
                                <td><div class="inputBox"><input type="email"></div></td>
                            </tr>
                            <tr>
                            	<th>처리유효기한</th>
                                <td>
                                    <div class="dateBox">
                                    	<input type="text" id="datepicker02">
                                        <input type="number" class="time">
                                        <span>시</sapn>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>서명알림수단</th>
                                <td>
                                	<div class="checkBox">
                                        <input type="checkbox" id="참여자sms"><label for="참여자sms">SMS</label>
                                        <input type="checkbox" id="참여자email"><label for="참여자email">e-mail</label>
                                        <input type="checkbox" id="참여자kakao"><label for="참여자kakao">kakao</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            <div class="message">
            	<div class="message_title">요청메시지</div>
                <div class="inputBox"><input type="text"></div>                
            </div>
            <div class="btnBox">
            	<a href="javascript:;" class="xBtn">취소</a>
            	<a href="javascript:layer_open('signature','member_setting');" class="next_btn">확인</a>
            </div>
        </div>
    </div>
</div>

<!-- 서명 요청완료 팝업창 -->
<div id="signature" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_mail.svg"><span>서명 요청 완료</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="completeBox">
                <img src="img/img_signComplete.png">
                <div class="text">서명 요청이 완료되었습니다.</div>
                <a href="javascript:;" class="btn">확인</a>
            </div>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
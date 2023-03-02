<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">템플릿 관리</div>
            </div>
            <div class="searchBox">
            	<div class="selectBox">
                	<select>
                    	<option value="전체">전체</option>
                    </select>
                </div>
                <div class="inputBox"><input type="text"></div>
                <a href="javascript:;" class="btn">검색</a>
            </div>
        	<div class="template_list">
            	<div class="list_title">
                	<span>문서함 ( 6 )</span>
                    <input type="radio" id="type01" class="type01" name="list_type" checked><label for="type01"></label>
                    <input type="radio" id="type02" class="type02" name="list_type"><label for="type02"></label>
                </div>
            	<ul>
                	<a href="javascript:;" class="new_document">
                    	<img src="img/icon_plus_L.png">
                        <p>새문서 작성</p>
                    </a>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:layer_open('signature');"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:layer_open('signature');"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:layer_open('signature');"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:layer_open('signature');"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:layer_open('signature');"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:layer_open('signature');"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 서명 팝업창 -->
<div id="signature" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_sign02.svg"><span>서명 확인</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="halfBox">
                <div class="half">
                	<div class="imgBox img01"></div>
                    <div class="text">먼저 서명 후 발송</div>
                	<a href="javascript:layer_open('member_setting','signature');" class="btn">선 서명</a>
                </div>
                <div class="half">
                	<div class="imgBox img02"></div>
                    <div class="text">계약서 마지막 서명</div>
                	<a href="javascript:;" class="btn">후 서명</a>
                </div>
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
            	<a href="javascript:;" class="next_btn">다음</a>
            </div>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
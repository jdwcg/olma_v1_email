<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
    
        <div class="mainArea subArea pdT_01">
        	<div class="titleBox fixed">
            	<div class="file_name">
                	<span class="name"><input type="text" placeholder="제목을 입력해주세요."></span>
                </div>
                <a href="javascript:;" class="btn01">임시저장</a>
                <a href="javascript:layer_open('member_setting');" class="btn02">참여자 설정</a>
            </div>
        	<div class="contract_view">
            	<img src="img/document_sample.jpg">
            </div>
        </div>
    </div>
</div>

<div id="member_setting" class="layer_popup">
	<div class="popupBox">
        <div class="titleBox"><img src="img/icon_member_setting.svg"><span>참여자 설정</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<ul class="add_list">
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
                        </table>
                    </div>
                </li>
                <a href="javascript:;" class="add_btn"><img src="img/icon_plus.png"></a>
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
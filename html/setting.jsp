<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<jsp:include page="/WEB-INF/view/esign/common/common.jsp" flush="false" />
<div id="wraper">
    
    <jsp:include page="/WEB-INF/view/esign/common/nav.jsp" flush="false" />
    
    <div class="container">
        <jsp:include page="/WEB-INF/view/esign/common/head.jsp" flush="false" />
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">설정</div>
            </div>

            <div class="settingRow">
                <div class="settingTitle"><span>쓰기 설정</span></div>

                <div class="fontSettingBox">
                    <div class="fontKind">
                        <div class="selectBox">
                            <select>
                                <option value="맑은 고딕">맑은 고딕</option>
                                <option value="궁서체">궁서체</option>
                            </select>
                        </div>
                    </div>
                    <div class="fontSize">
                        <div class="selectBox">
                            <select>
                                <option value="16px">16px</option>
                                <option value="18px">18px</option>
                            </select>
                        </div>
                        <div class="selectBox">
                            <select>
                                <option value="1.8">1.8</option>
                                <option value="1.6">1.6</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- fontSettingBox end -->
            </div> <!-- settingRow end -->

            <div class="settingRow">
                <div class="settingTitle"><span>읽기 설정</span></div>

                <div class="readSettingBox">
                    <input type="radio" name="read" id="read1"></input><label for="read1">15개</label>
                    <input type="radio" name="read" id="read2"></input><label for="read2">30개</label>
                    <input type="radio" name="read" id="read3"></input><label for="read3">50개</label>
                    <input type="radio" name="read" id="read4"></input><label for="read4">100개</label>
                </div> <!-- fontSettingBox end -->
            </div> <!-- settingRow end -->

            <div class="settingRow">
                <div class="settingTitle"><span>서명 설정</span> <a>기본으로 재 설정</a></div>

                <div class="signSettingBox">
                    <div class="singOkImgBox"><img src="img/checkok_icon.png"></div>
                    <div class="singInputBox">
                        <div class="singInput">
                            <div class="inputBox"><input type="text" id="date" /></div>
                            <div class="inputBoxDescrip"><span>파일선택</span></div>
                        </div>
                        <div class="singInputDescrip">
                            <p>파일선택: 46*46 / gif, jpg, jpeg, png 가능</p> 
                            <span>삭제</span>
                        </div>
                    </div>

                </div> <!-- signSettingBox end -->
            </div> <!-- settingRow end -->


            <div class="settingRow">
                <div class="settingTitle"><span>알림 상세 설정</span> <p>알림 수신 정보:010-7238-2515 / pjongsik@iquest.kr <a> 변경하기</a></p></div>

                <div class="settingTableBox">
                    <table class="m_hide">
                        <tr>
                            <th colspan="2">구분</th>
                            <th>알림 조건</th>
                            <th>알림 설정</th>
                        </tr>
                        <tr>
                            <td rowspan="3">결재</td>
                            <td>예정</td>
                            <td>예정 문서함에 문서가 등록되었을 떄</td>
                            <td>
                                <input type="checkbox" id="sms1"/><label for="sms1">SMS</label>
                                <input type="checkbox" id="email1"/><label for="email1">메일</label>
                                <input type="checkbox" id="mApp1"/><label for="mApp1">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>대기</td>
                            <td>대기 문서함에 문서가 등록되었을 떄</td>
                            <td>
                                <input type="checkbox" id="sms2"/><label for="sms2">SMS</label>
                                <input type="checkbox" id="email2"/><label for="email2">메일</label>
                                <input type="checkbox" id="mApp2"/><label for="mApp2">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>완료</td>
                            <td><div>문서가 결재 완료 되었을 때 <img src="img/faq_icon.png"/></div></td>
                            <td>
                                <input type="checkbox" id="sms3"/><label for="sms3">SMS</label>
                                <input type="checkbox" id="email3"/><label for="email3">메일</label>
                                <input type="checkbox" id="mApp3"/><label for="mApp3">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">참조</td>
                            <td>결재 시작</td>
                            <td>참조자료 포함된 문서가 등록되었을 때</td>
                            <td>
                                <input type="checkbox" id="sms4"/><label for="sms4">SMS</label>
                                <input type="checkbox" id="email4"/><label for="email4">메일</label>
                                <input type="checkbox" id="mApp4"/><label for="mApp4">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>결재 완료</td>
                            <td>참조자료 포함된 문서의 모든 결재가 완료되었을 때</td>
                            <td>
                                <input type="checkbox" id="sms5"/><label for="sms5">SMS</label>
                                <input type="checkbox" id="email5"/><label for="email5">메일</label>
                                <input type="checkbox" id="mApp5"/><label for="mApp5">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>수신</td>
                            <td></td>
                            <td>문서가 수신되었을 때</td>
                            <td>
                                <input type="checkbox" id="sms6"/><label for="sms6">SMS</label>
                                <input type="checkbox" id="email6"/><label for="email6">메일</label>
                                <input type="checkbox" id="mApp6"/><label for="mApp6">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>회람</td>
                            <td></td>
                            <td>문서가 회람되었을 때</td>
                            <td>
                                <input type="checkbox" id="sms7"/><label for="sms7">SMS</label>
                                <input type="checkbox" id="email7"/><label for="email7">메일</label>
                                <input type="checkbox" id="mApp7"/><label for="mApp7">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="3">기안</td>
                            <td>반려</td>
                            <td>기안한 문서 중에서 결재자 또는 합의자가 반려했을 때</td>
                            <td>
                                <input type="checkbox" id="sms8"/><label for="sms8">SMS</label>
                                <input type="checkbox" id="email8"/><label for="email8">메일</label>
                                <input type="checkbox" id="mApp8"/><label for="mApp8">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>협의 요청</td>
                            <td>기안한 문서 중에서 결재자 또는 합의자가 협의 요청했을 때</td>
                            <td>
                                <input type="checkbox" id="sms9"/><label for="sms9">SMS</label>
                                <input type="checkbox" id="email9"/><label for="email9">메일</label>
                                <input type="checkbox" id="mApp9"/><label for="mApp9">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>완료</td>
                            <td>기안한 문서의 모든 결재 및 합의가 완료되었을 때</td>
                            <td>
                                <input type="checkbox" id="sms10"/><label for="sms10">SMS</label>
                                <input type="checkbox" id="email10"/><label for="email10">메일</label>
                                <input type="checkbox" id="mApp10"/><label for="mApp10">메신저/앱</label>
                            </td>
                        </tr>
                        <tr>
                            <td>문서변경</td>
                            <td></td>
                            <td><div>문서가 변경되었을 때 <img src="img/faq_icon.png"/></div></td>
                            <td>
                                <input type="checkbox" id="mApp11"/><label for="mApp11">메신저/앱</label>
                            </td>
                        </tr>
                    </table>

                    <div class="m_settingBoxDiv m_show">
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>결재 - 예정</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p> 예정 문서함에 문서가 등록되었을 때</p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM1"/><label for="smsM1">SMS</label>
                                    <input type="checkbox" id="emailM1"/><label for="emailM1">메일</label>
                                    <input type="checkbox" id="mAppM1"/><label for="mAppM1">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>결재 - 대기</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p> 대기 문서함에 문서가 등록되었을 때</p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM2"/><label for="smsM2">SMS</label>
                                    <input type="checkbox" id="emailM2"/><label for="emailM2">메일</label>
                                    <input type="checkbox" id="mAppM2"/><label for="mAppM2">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>결재 - 완료</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <div><p>문서가 결재 완료 되었을 때 </p><img src="img/faq_icon.png"/></div>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM3"/><label for="smsM3">SMS</label>
                                    <input type="checkbox" id="emailM3"/><label for="emailM3">메일</label>
                                    <input type="checkbox" id="mAppM3"/><label for="mAppM3">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>참조 - 결재 시작</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>참조자로 포함된 문서가 등록되었을 때 </p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM4"/><label for="smsM4">SMS</label>
                                    <input type="checkbox" id="emailM4"/><label for="emailM4">메일</label>
                                    <input type="checkbox" id="mAppM4"/><label for="mAppM4">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>참조 - 결재 완료</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>참조자로 포함된 문서의 모든 결재가 완료되었을 때 </p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM5"/><label for="smsM5">SMS</label>
                                    <input type="checkbox" id="emailM5"/><label for="emailM5">메일</label>
                                    <input type="checkbox" id="mAppM5"/><label for="mAppM5">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>수신</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>문자가 수신되었을 때</p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM6"/><label for="smsM6">SMS</label>
                                    <input type="checkbox" id="emailM6"/><label for="emailM6">메일</label>
                                    <input type="checkbox" id="mAppM6"/><label for="mAppM6">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>회람</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>문서가 회람되었을 때 </p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM7"/><label for="smsM7">SMS</label>
                                    <input type="checkbox" id="emailM7"/><label for="emailM7">메일</label>
                                    <input type="checkbox" id="mAppM7"/><label for="mAppM7">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>기안 - 반려</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>기안한 문서 중에서 결재자 또는 합의자가 반려했을 때 </p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM8"/><label for="smsM8">SMS</label>
                                    <input type="checkbox" id="emailM8"/><label for="emailM8">메일</label>
                                    <input type="checkbox" id="mAppM8"/><label for="mAppM8">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>기안 - 협의 요청</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>기안한 문서 중에서 결재자 또는 합의자가 협의 요청했을 때 </p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM9"/><label for="smsM9">SMS</label>
                                    <input type="checkbox" id="emailM9"/><label for="emailM9">메일</label>
                                    <input type="checkbox" id="mAppM9"/><label for="mAppM9">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>기안 - 완료</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <p>기안한 문서의 모든 결재 및 합의가 완료되었을 때 </p>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM10"/><label for="smsM10">SMS</label>
                                    <input type="checkbox" id="emailM10"/><label for="emailM10">메일</label>
                                    <input type="checkbox" id="mAppM10"/><label for="mAppM10">메신저/앱</label>
                                </div>
                            </div>
                        </div>
                        <div class="m_settingBox">
                            <div class="m_settingBoxTitle"><span>문서 변경</span></div>
                            <div class="m_settingBoxContents">
                                <div>
                                    <div><p>문서가 변경되었을 때 </p><img src="img/faq_icon.png"/></div>
                                </div>
                                <div>
                                    <input type="checkbox" id="smsM11"/><label for="smsM11">SMS</label>
                                    <input type="checkbox" id="emailM11"/><label for="emailM11">메일</label>
                                    <input type="checkbox" id="mAppM11"/><label for="mAppM11">메신저/앱</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="settingTableDescript">
                        <p>· 문자 전송 방법은 관리자 설정에 따라 90bytes가 넘을 때 분할 발송(SMS) 또는 장문 발성(LMS)이 될 수 있습니다.</p>
                        <p>· 메일 알림을 수신하시려면 하이웍스 메일 계정을 사용하거나 <span>인사정보 설정</span>에 개인 이메일 정보를 입력해 주세요.</p>
                        <p>· 메신저가 설치 되어 있지 않은 경우 먼저 <span>다운로드</span> 받으시기 바랍니다.</p>
                    </div>

                </div> <!-- settingTableBox end -->
            </div> <!-- settingRow end -->

            <div class="settingRow">
                <div class="settingTitle"><div class="settingTitleFlex"><span>참조/회람/수신 확인 방식</span> <img src="img/faq_icon.png"/></div> </div>
                <div class="settingCheckBox">
                    <input type="radio" name="read" id="settingCheckBtn"></input><label for="settingCheckBtn">버튼</label>
                    <input type="radio" name="read" id="settingCheckRead"></input><label for="settingCheckRead">열람</label>
                </div> 
                <div class="settingCheckBtnBox">
                    <a>저장</a>
                </div> 
            </div> <!-- settingRow end -->

            <div class="settingRow">
                <div class="settingTitle"><div class="settingTitleFlex"><span>자주 쓰는 결재선</span> <img src="img/faq_icon.png"/> <a href="javascript:layer_open('oftensignLine');">결재선추가</a></div> </div>
                <div class="signLineTableBox">
                    <table>
                        <tr>
                            <th width="80%">결재선 명</th>
                            <th width="20%">관리</th>
                        </tr>
                        <tr>
                            <td>결재 후 송신</td>
                            <td><a>수정</a> | <a>삭제</a></td>
                        </tr>
                        <tr>
                            <td>신청</td>
                            <td><a>수정</a> | <a>삭제</a></td>
                        </tr>
                        <tr>
                            <td>연차</td>
                            <td><a>수정</a> | <a>삭제</a></td>
                        </tr>
                    </table>
                </div>

            </div> <!-- settingRow end -->


        </div> <!-- mainArea subArea end -->
    </div> <!-- container end -->

<!-- 자주사용하는 결재선 추가 -->
<div id="oftensignLine" class="layer_popup">
	<div class="oftensignBox">
        <div class="titleBox"><span>결재선 변경</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="oftensignMain">

            <div class="oftenSub">
                <div class="signBox">
                    <div class="inputBox"><input type="text" id="id" placeholder="이름, 조직 검색" /></div>
                    <a>검색</a>
                </div>
                <div class="signList">
                    <p class="signListTitle"><input type="checkbox"/> <img src="img/delete_minus.png"> <a class="sign_group">(주)아이퀘스트</a><a>(132)</a></p>
                    <p><input type="checkbox"/> <img src="img/delete_minus.png"><a class="sign_group">CEO</a><a>(1)</a></p>
                    <p><img src="img/delete_minus.png"><a>홍길동</a></p>
                    <p><img src="img/add_plus.png"><a class="sign_group">개발3팀</a><a>(4)</a></p>
                    <p><img src="img/add_plus.png"><a class="sign_group">개발4팀</a><a>(12)</a></p>
                </div>
            </div>

            <div class="oftenSub">
                <div class="oftenKindSelectDiv">
                    <div><a>결재</a> <img src="img/angle_right_arrow.png" class="m_hide"/> <img src="img/angle_bottom_arrow.png" class="m_show"/></div>
                    <div><a>합의</a> <img src="img/angle_right_arrow.png" class="m_hide"/> <img src="img/angle_bottom_arrow.png" class="m_show"/></div>
                    <div><a>참조</a> <img src="img/angle_right_arrow.png" class="m_hide"/> <img src="img/angle_bottom_arrow.png" class="m_show"/></div>
                </div>
            </div>

            <div class="oftenSub">

                <div class="oftenCheckList">

                    <div class="checkPiece">
                        <div class="imgBox"><img src="img/1number_icon.png"></div>
                        <div class="checkBox">
                            <div class="btnBox">
                                <a class="oftenBtnClick active">결재</a><a class="oftenBtnClick">합의</a>
                            </div>
                            <div class="textBox">
                                <div>
                                    <p>홍길동</p>
                                    <p>괴도 팀장</p>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- CheckPiece end -->

                    <div class="checkPiece">
                        <div class="imgBox"><img src="img/2number_icon.png"></div>
                        <div class="checkBox">
                            <div class="btnBox">
                                <a class="oftenBtnClick">결재</a><a class="oftenBtnClick active">합의</a>
                            </div>
                            <div class="textBox">
                                <div>
                                    <p>각시탈</p>
                                    <p>해방 팀장</p>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- CheckPiece end -->
                    
                </div> <!-- oftenCheckList end -->


                <div class="oftenReferList">
                    <div><a>참조</a></div>
                    <div class="referList">

                    </div>
                </div>

            </div>

           
        </div> <!-- signBoxMain end -->

        <div class="popupBtnBox">
                <a>확인</a>
                <a>취소</a>
        </div>
       
    </div> <!-- popupBox end -->
</div>




</div><!-- // wraper -->
</body>
</html>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<jsp:include page="/WEB-INF/view/esign/common/common.jsp" flush="false" />
<script src="js/textAreaEditor.js"></script>
<div id="wraper">
    
    <jsp:include page="/WEB-INF/view/esign/common/nav.jsp" flush="false" />
    
    <div class="container">
        <jsp:include page="/WEB-INF/view/esign/common/head.jsp" flush="false" />
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">기안하기</div>
            </div>

            <div class="draftMain">
                <div class="draftTitle">
                    <div><a>기본 설정</a></div>
                </div>

                <div class="draftSetting m_hide">
                    <table>
                        <tr>
                            <td>
                              <div class="draftBox">
                                <div><a>문서 종류</a></div>
                                <div class="selectBox">
                                    <select>
                                        <option value="아이퀘스트">아이퀘스트</option>
                                        <option value="미포함">미포함</option>
                                    </select>
                                </div>
                                <div class="selectBox">
                                    <select>
                                        <option value="종류">종류</option>
                                        <option value="미포함">미포함</option>
                                    </select>
                                </div>
                                <a href="javascript:layer_open('draftSelectDocument');">문서 보기(추가페이지)</a> 
                              </div>
                            </td>
                            <td>
                              <div class="draftBox">
                                <div><a>작성자</a></div>
                                <div>CTO 부사장 박원일</div>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div class="draftBox">
                                <div><a>보존 연한</a></div>
                                <div class="selectBox">
                                    <select>
                                        <option value="보존 연한">보존 연한</option>
                                        <option value="보존">보존</option>
                                    </select>
                                </div>
                              <div>
                            </td>
                            <td>
                              <div class="draftBox">
                                <div><a>보안등급</a></div>
                                <div class="selectBox">
                                    <select>
                                        <option value="보안 등급">보안 등급</option>
                                        <option value="1등급">1등급</option>
                                    </select>
                                </div>
                              </div>
                            </td>
                        </tr>
                    </table>
                </div> <!-- draftSetting -->

                <div class="draftSetting m_show">
                    <table>
                        <tr>
                            <td>
                              <div class="draftBox">
                                <div><a>문서 종류</a></div>
                                <div class="selectBox">
                                    <select>
                                        <option value="아이퀘스트">아이퀘스트</option>
                                        <option value="미포함">미포함</option>
                                    </select>
                                </div>
                                <div class="selectBox">
                                    <select>
                                        <option value="종류">종류</option>
                                        <option value="미포함">미포함</option>
                                    </select>
                                </div>
                              </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                              <div class="draftBox">
                                <div><a>작성자</a></div>
                                <div>CTO 부사장 박원일</div>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div class="draftBox">
                                <div><a>보존 연한</a></div>
                                <div class="selectBox">
                                    <select>
                                        <option value="보존 연한">보존 연한</option>
                                        <option value="보존">보존</option>
                                    </select>
                                </div>
                              <div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <div class="draftBox">
                                <div><a>보안등급</a></div>
                                <div class="selectBox">
                                    <select>
                                        <option value="보안 등급">보안 등급</option>
                                        <option value="1등급">1등급</option>
                                    </select>
                                </div>
                              </div>
                            </td>
                        </tr>
                    </table>
                </div> <!-- m_draftSetting -->


                <div class="notThingDraft">
                    <div class="notThingBox">
                        <a>결재선</a>
                        <p>문서 종류 선택 시 결재선이 노출됩니다.</p>
                    </div>

                    <div class="notThingBox">
                        <a>상세입력</a>
                        <p>문서 종류 선택 시 상세입력이 노출됩니다.</p>
                    </div>
                </div>

                <div class="draftTableBox">
                    <div class="draftTableTitle">
                        <div><a href="javascript:layer_open('draftName');">결재</a></div>
                        <div><a href="javascript:layer_open('draftSetting');">결재선 설정</a></div>
                    </div>

                    <div class="draftTable">
                        <table>
                            <tr>
                                <td class="middleBox" rowspan="3">결재</td>
                                <td class="littleBox">부사장</td>
                                <td class="littleBox">사장</td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                            </tr>
                            <tr>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                            </tr>
                            <tr>
                                <td class="littleBox">박원일</td>
                                <td class="littleBox">김순모</td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                                <td class="littleBox"></td>
                            </tr>
                            <tr>
                                <td class="littleBox">참조</td>
                                <td  colspan="7">
                                    <div class="inputBox"><input type="text" id="id" placeholder="클릭 후 입력" /></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="littleBox">수신</td>
                                <td  colspan="7">
                                    <div class="inputBox"><input type="text" id="id" placeholder="클릭 후 입력" /></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="littleBox">수신(참조)</td>
                                <td  colspan="7">
                                    <div class="inputBox"><input type="text" id="id" placeholder="클릭 후 입력" /></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div> <!-- draftTable end -->

                <div class="draftTextArea">
                    <div class="TextTitle">
                        <div class="TextTitleBox"><a>본문</a></div>
                        <div class="inputBox"><input type="text" id="id" placeholder="제목을 입력해주세요." /></div>
                    </div>

                    <div>
                        <textarea row="13" cols="40" id="content12" name="content12"  style="width:100%; height:455px;"></textarea>
                    </div>

                    <div class="TextFile">
                        <div class="TextFileName">
                            <div class="fileSelect">
                                <a class="fileSelectTitle">별첨</a>
                                <label for="fileTextArea" class="fileClick">파일첨부 |</label><a class="fileText" href="javascript:layer_open('draftDocument');"> 관련문서 첨부 </a>
                            </div>
                        </div>
                        <div class="TextFileInput">
                            <div class="inputBox">
                                <input type="file" id="fileTextArea" style="display:none;">
                                <input class="upload-name" value="" readonly>
                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- draftMain end -->
        </div> <!-- mainArea end --> 
    </div>
</div>

<!-- 결재 팝업-->
<div id="draftName" class="layer_popup">
	<div class="signPopupBox">
        <div class="titleBox"><span>결재 설정</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="signBoxMain">

            <div class="signBox">
                <div class="inputBox"><input type="text" id="id" placeholder="클릭 후 입력" /></div>
                <a>등록</a>
            </div>
            
            <div class="signList">
                <p><a>홍길동</a></p>
                <p><a>홍길동</a></p>
                <p><a>홍길동</a></p>
                <p><a>홍길동</a></p>
                <p><a>홍길동</a></p>
                <p><a>홍길동</a></p>
            </div>

            <div class="popupBtnBox">
                <a>확인</a>
                <a>취소</a>
            </div>
        </div> <!-- signBoxMain end -->
    </div> <!-- popupBox end -->
</div>



<!-- 결재선 설정-->
<div id="draftSetting" class="layer_popup">
	<div class="bigPopupBox">
        <div class="titleBox"><span>결재선 설정</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="popup_main">
        	<div class="mainBox">
                <div class="subBox"> 
                    <div class="subBoxTitle">
                        <input type="radio" name="bris" id="nameId"></input><label for="nameId">이름, 아이디</label>
                        <input type="radio" name="bris" id="group"></input><label for="group">조직</label>
                        <div class="inputBox"><input type="text" id="id" placeholder="클릭 후 입력" /></div>
                        <a>검색</a>
                    </div>
                    <div class="subBoxUserList">
                        <div class="groupList">
                            <div class="list">
                                <div class="center"><img src="img/add_plus.png" /><p>(주)아이퀘스트</p></div>
                                <div class="center"><p>CEO</p></div>
                                <div class="center"><img src="img/delete_minus.png" /><p>CTO</p></div>
                            </div>
                        </div>
                        <div class="userList">
                            <div class="list">
                                <p class="listClick">홍길동 (개발1팀:책임)</p>
                                <p class="listClick">홍길동 (개발2팀:책임개발2팀:책임개발2팀:책임개발2팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임개발2팀:책임개발2팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임개발2팀:책임개발2팀:책임개발2팀:책임개발2팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임)</p>
                                <p class="listClick">홍길동 (개발3팀:책임)</p>
                            </div>
                            <div class="btnBox">
                                <a>전체</a>
                                <a>선택안함</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="subBox2">
                    <div class="title">
                        <div class="selectBox">
                            <select>
                                <option value="자주 쓰는 결재선">자주 쓰는 결재선</option>
                                <option value="프리셋1">프리셋1</option>
                                <option value="프리셋2">프리셋2</option>
                            </select>
                        </div>
                    </div>

                    <div class="draftBox">
                        <div class="draftArrowBox">
                            <div><img src="img/angle_right_arrow.png"></div>
                            <div><img src="img/angle_left_arrow.png"></div>
                        </div>
                        <div class="draftDivBox">
                            <div class="draftDivBoxTitle">
                                <a>결제 <strong>1</strong></a> 
                                <div>
                                    <a><img src="img/angle_top_arrow.png"></a> 
                                    <a><img src="img/angle_bottom_arrow.png"></a> 
                                </div>
                            </div>
                            <div class="draftDivList">
                                <p class="subListClick1">홍길동(CTO:부사장)</p>
                                <p class="subListClick1">홍길동(CTO:부사장)</p>
                            </div>
                        </div>
                    </div> <!-- draftBox end -->

                    <div class="draftBox">
                        <div class="draftArrowBox">
                            <div><img src="img/angle_right_arrow.png"></div>
                            <div><img src="img/angle_left_arrow.png"></div>
                        </div>
                        <div class="draftDivBox">
                            <div class="draftDivBoxTitle">
                                <a>참조 <strong>0</strong></a> 
                                <div>
                                    <a><img src="img/angle_top_arrow.png"></a> 
                                    <a><img src="img/angle_bottom_arrow.png"></a> 
                                </div>
                            </div>
                            <div class="draftDivList">
                                <p class="subListClick2">홍길동(CTO:부사장)</p>
                                <p class="subListClick2">홍길동(CTO:부사장)</p>
                            </div>
                        </div>
                    </div> <!-- draftBox end -->

                    <div class="draftBox">
                        <div class="draftArrowBox">
                            <div><img src="img/angle_right_arrow.png"></div>
                            <div><img src="img/angle_left_arrow.png"></div>
                        </div>
                        <div class="draftDivBox">
                            <div class="draftDivBoxTitle">
                                <a>수신 <strong>0</strong></a> 
                                <div>
                                    <a><img src="img/angle_top_arrow.png"></a> 
                                    <a><img src="img/angle_bottom_arrow.png"></a> 
                                </div>
                            </div>
                            <div class="draftDivList">
                                <p class="subListClick3">홍길동(CTO:부사장)</p>
                            </div>
                        </div>
                    </div> <!-- draftBox end -->

                    <div class="draftBox">
                        <div class="draftArrowBox">
                            <div><img src="img/angle_right_arrow.png"></div>
                            <div><img src="img/angle_left_arrow.png"></div>
                        </div>
                        <div class="draftDivBox">
                            <div class="draftDivBoxTitle">
                                <a>(수신)참조 <strong>0</strong></a> 
                                <div>
                                    <a><img src="img/angle_top_arrow.png"></a> 
                                    <a><img src="img/angle_bottom_arrow.png"></a> 
                                </div>
                            </div>
                            <div class="draftDivList">
                                <p class="subListClick3">홍길동(CTO:부사장)</p>
                            </div>
                        </div>
                    </div> <!-- draftBox end -->

                </div> <!-- subBox2 end -->

            </div> <!-- mainBox end -->
            <div class="popupBtnBox">
                <a>확인</a>
                <a>취소</a>
            </div>
        </div>
    </div>
</div>

<!-- 관련문서 첨부-->
<div id="draftDocument" class="layer_popup">
	<div class="documentBox">
        <div class="titleBox"><span>관련문서 첨부</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="documentBoxMain">

            <div class="searchBox">
                <div class="inputBox"><input type="text" id="id" placeholder="문서 검색" /></div>
                <a>검색</a>
            </div>
            
            <div class="ListBox">
                <div> <a>보기: 모든 문서 <img src="img/down_icon61209.png"/> </a> </div>

                <table>
                    <tr>
                        <th></th>
                        <th colspan="2">문서 번호</th>
                        <th>제목</th>
                        <th>기안자</th>
                    </tr>
                    <tr>
                        <td>선택</td>
                        <td>☆★</td>
                        <td>개발1팀-재택2022...</td>
                        <td>개발 1팀 재택근무 신청서</td>
                        <td>최유성</td>
                    </tr>
                    <tr>
                        <td>선택</td>
                        <td>☆★</td>
                        <td>개발1팀-재택2022...</td>
                        <td>개발 1팀 오후반차 신청서</td>
                        <td>최유성</td>
                    </tr>
                    <tr>
                        <td>선택</td>
                        <td>☆★</td>
                        <td>개발1팀-재택2022...</td>
                        <td>개발 1팀 재택근무 신청서</td>
                        <td>최유성</td>
                    </tr>
                </table>
            </div>
            <div class="board_page">
                <span>문서 수 : 2372</span>
                <a href="javascript:;" class="firstBtn"></a>
                <a href="javascript:;" class="prevBtn"></a>
                <a href="javascript:;" class="number active">1</a>
                <a href="javascript:;" class="number">2</a>
                <a href="javascript:;" class="number">3</a>
                <a href="javascript:;" class="number">4</a>
                <a href="javascript:;" class="number">5</a>
                <a href="javascript:;" class="nextBtn"></a>
                <a href="javascript:;" class="lastBtn"></a>
                <a class="selectBox">                                     
                    <select>
                        <option value="1">1</option>
                        <option value="10">10</option>
                        <option value="100">100</option>
                        <option value="1000">1000</option>
                    </select> 
                </a>
                <span>/ 475</span>
            </div>

            <div class="descriptionBox">

            </div>

            <div class="popupBtnBox">
                <a>확인</a>
                <a>취소</a>
            </div>

        </div> <!-- documentBoxMain end -->


    </div> <!-- documentBox end -->
</div>

<!-- 문서보기-->
<div id="draftSelectDocument" class="layer_popup">
	<div class="selectDocumentBox">
        <div class="titleBox"><span>문서 보기</span> <a href="javascript:;" class="xBtn"><img src="img/icon_xBtn_w.png"></a></div>
        <div class="selectBoxMain">
        
            <div class="docuList">
                <p class="group">아이퀘스트</p>
                <p class="documents">업무일지</p>
                <p class="documents">매출일보</p>
                <p class="documents">기안서</p>
                <p class="documents">보고서</p>
                <p class="documents">주간보고서</p>
                <p class="documents">중간보고서</p>
                <p class="documents">월말보고서</p>
                <p class="documents">전략회의보고서</p>
                <p class="documents">법인인감날인부</p>
                <p class="documents">사용인감날인부</p>
                <p class="documents">회의록</p>
                <p class="documents">업무협조전</p>
                <p class="documents">지출품의서</p>
                <p class="documents">지출결의서</p>
                <p class="documents">지출결의서</p>
                <p class="documents">지출결의서</p>
                <p class="documents">지출결의서</p>
                <p class="documents">지출결의서</p>
            </div>



            <div class="docuContent">
                <div class="documentTitle">
                    <a>보고서</a>
                </div>
                <div class="documentContents">
                    
                </div>
            </div>



        </div> <!-- selectBoxMain end -->

        <div class="popupBtnBox">
            <a>선택</a>
            <a>취소</a>
        </div>


    </div> <!-- selectDocumentBox end -->
</div>


</div><!-- // wraper -->
</body>
</html>
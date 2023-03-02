<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea organizArea">

        	<div class="titleBox">
            	<div class="title">사용자 등록</div>
            </div>

            <div class="ctableBox">
                <table class="m_hide">
                    <tbody>
                        <tr>
                            <td ><p>이름<strong>*</strong></p></td>
                            <td ><div class="inputBox"><input type="text" id="name"></div></td>
                        </tr>
                        <tr>
                            <td><p>아이디<strong>*</strong></p></td>
                            <td><div class="inputBox"><input type="text" id="id"></div></td>
                        </tr>
                        <tr>
                            <td><p>비밀번호<strong>*</strong></p></td>
                            <td><div class="inputBox"><input type="text" id="passwd"></div></td>
                        </tr>
                        <tr>
                            <td><p>비밀번호 확인<strong>*</strong></p></td>
                            <td><div class="inputBox"><input type="text" id="rePasswd"></div></td>
                        </tr>
                        <tr>
                            <td><p>사번</p></td>
                            <td><div class="inputBox"><input type="text" id="number"></div></td>
                        </tr>
                        <tr>
                            <td><p>입사일</p></td>
                            <td><div class="inputBox"><input type="text" id="data"></div></td>
                        </tr>
                        <tr>
                            <td><p>소속조직</p></td>
                            <td>
                                <div class="selectBox">
                                    <select>
                                        <option value="개발1팀">개발1팀</option>
                                        <option value="개발2팀">개발2팀</option>
                                        <option value="인사팀">인사팀</option>
                                        <option value="HR팀">HR팀</option>
                                    </select>
                                </div>
                                <span class="tableInsertBtn">조직선택</span>
                                <span class="decriptionTextColor">(클릭하여 소속 조직을 설정하세요.)</span>
                            </td>
                        </tr>
                        <tr>
                            <td><p>직위</p></td>
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
                            <td><p>직무</p></td>
                            <td>
                                <div class="selectBox">
                                    <select>
                                        <option value="개발">개발</option>
                                        <option value="인사">인사</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>계정 구분</p></td>
                            <td>
                                <div class="radioBox">
                                    <label for="userCheck1">일반 사용자</label><input type="radio" name="userCheck" id="userCheck1"></input>
                                    <label for="userCheck2">전체 관리자</label><input type="radio" name="userCheck" id="userCheck2"></input>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>메일 설정</p></td>
                            <td>
                                <div class="radioBox inlineDiv">
                                    <label for="stateCheck1">사용</label><input type="radio" name="stateCheck" id="stateCheck1"></input>
                                    <label for="stateCheck2">사용 안함</label><input type="radio" name="stateCheck" id="stateCheck2"></input>
                                </div>
                                <span class="decriptionTextColor">(생성 가능한 메일 계정수 32개)</span>
                            </td>
                        </tr>
                        <tr>
                            <td><p>이메일</p></td>
                            <td><div class="inputBox"><input type="text" id="email"></div></td>
                        </tr>
                        <tr>
                            <td><p>사내 전화</p></td>
                            <td><div class="inputBox"><input type="text" id="inPhone"></div></td>
                        </tr>
                        <tr>
                            <td><p>휴대 전화</p></td>
                            <td><div class="inputBox"><input type="text" id="phone"></div></td>
                        </tr>
                        <tr>
                            <td><p>자택주소</p></td>
                            <td>
                                <div class="inputBox inlineDiv addressSet"><input type="text" id="address"></div> <span class="tableInsertBtn addressSetBtn">우편번호 검색</span>
                                <div class="inputBox" style="width:60%;"><input type="text" id="detailAddress"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>생년월일</p></td>
                            <td>
                                <div class="inputBox inlineDiv year" style="width:20%;"><input  type="text" id="phone" placeholder="년"></div>
                                <div class="inputBox inlineDiv month" style="width:10%;"><input type="text" id="phone"placeholder="월" ></div>
                                <div class="inputBox inlineDiv date" style="width:10%;"><input type="text" id="phone" placeholder="일"></div>
                                <div class="inlineDiv">
                                    <label for="bris1">양력</label><input type="radio" name="bris" id="bris1"></input>
                                    <label for="bris2">음력</label><input type="radio" name="bris" id="bris2"></input>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td><p>기타 정보</p></td>
                            <td> <div class="inputBox" style="width:80%;"><input type="textarea" id="name"></div></td>
                        </tr>
                        <tr>
                            <td><p>계정 상태</p></td>
                            <td> 
                                <label for="statePlay">정상</label><input type="radio" name="statePlay" id="statePlay"></input>
                                <label for="stateStop">일시정지</label><input type="radio" name="statePlay" id="stateStop"></input>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <div class="tableRightDiv">
                    <div><img src="img/member_profil_img.png"/></div>
                    <div class="tableDescript decriptionTextColor">
                        <p>- 프로필 사진 권장 최대 사이즈는 330x330px (10MB미만)입니다.</p>
                        <p>- 여기서 설정한 비밀번호는 임시비밀번호로 사용자가 직접 1회 비밀번호를 변경한 후 오피스 사용이 가능합니다.</p>
                    </div>
                </div> <!-- tableRightDiv end -->


                <!-- 모바일 사용자 등록 -->

                <table class="m_show">
                    <tbody>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="name" placeholder="이름"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="id" placeholder="아이디"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="passwd" placeholder="비밀번호"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="rePasswd" placeholder="비밀번호확인"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="number" placeholder="사번"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="data" placeholder="입사일"></div></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="tableInsertBtn">조직선택</span>
                                <span class="decriptionTextColor">(클릭하여 소속 조직을 설정하세요.)</span>
                                <div class="selectBox">
                                    <select>
                                        <option value="개발1팀">개발1팀</option>
                                        <option value="개발2팀">개발2팀</option>
                                        <option value="인사팀">인사팀</option>
                                        <option value="HR팀">HR팀</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
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
                            <td>
                                <div class="selectBox">
                                    <select>
                                        <option value="개발">개발</option>
                                        <option value="인사">인사</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radioBox">
                                    <label for="userCheck1">일반 사용자 <input type="radio" name="userCheck" id="userCheck1"></label>
                                    <label for="userCheck2">전체 관리자 <input type="radio" name="userCheck" id="userCheck2"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radioBox inlineDiv">
                                    <label for="stateCheck1">메일 사용 <input type="radio" name="stateCheck" id="stateCheck1"></label>
                                    <label for="stateCheck2">메일 사용 안함 <input type="radio" name="stateCheck" id="stateCheck2"></label>
                                </div>
                                <span class="decriptionTextColor" style="display: block;">(생성 가능한 메일 계정수 32개)</span>
                            </td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="email" placeholder="이메일"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="inPhone" placeholder="사내 전화"></div></td>
                        </tr>
                        <tr>
                            <td><div class="inputBox"><input type="text" id="phone" placeholder="휴대 전화"></div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="inputBox inlineDiv addressSet"><input type="text" id="address" style="display: inline-block;" placeholder="우편번호"></div> <span class="tableInsertBtn addressSetBtn">우편번호 검색</span>
                                <div class="inputBox" style="width:90%;"><input type="text" id="detailAddress" placeholder="상세 주소"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="inputBox inlineDiv year" style="width:20%;"><input  type="text" id="phone" placeholder="년"></div>
                                <div class="inputBox inlineDiv month" style="width:13%;"><input type="text" id="phone"placeholder="월" ></div>
                                <div class="inputBox inlineDiv date" style="width:13%;"><input type="text" id="phone" placeholder="일"></div>
                                <div class="inlineDiv">
                                    <label for="bris1">양력 <input type="radio" name="bris" id="bris1"></label>
                                    <label for="bris2">음력 <input type="radio" name="bris" id="bris2"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> <div class="inputBox" style="width:90%;"><input type="textarea" id="name"  placeholder="기타 정보"></div></td>
                        </tr>
                        <tr>
                            <td> 
                                <div class="idSettingDiv">
                                    <label for="statePlay">계정 정상 <input type="radio" name="statePlay" id="statePlay"></label>
                                    <label for="stateStop">계정 일시정지 <input type="radio" name="statePlay" id="stateStop"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div> <!-- ctableBox end -->

            <div class="emInsertDiv">
                <span class="emInsertBtn"> 저장 </span>
                <span class="emInsertBtn"> 저장 후 계속 추가 </span>
            </div>
           

        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
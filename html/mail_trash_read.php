 <?php  include_once "common.php"; ?>

<div id="wraper">
   
<?php include_once "./include/nav.php"; ?>
   
   <div class="container content_area">
   <?php include_once "head.php"; ?>
   
   <!-- 페이지 시작 -->
   <div class="main_area">
      <div class="mailbox_location">
         <h1>휴지통<span>&nbsp20</span></h1>
      </div>
      <div class="mail_content mail_content_read">
         <table class="mailbox_bo">
            <tr id="popmenu">
               <td class="sort_pop sortPop">
                  <section class="sort_pop_wrap sortPopWrap">
                     <ul class="sort_list sortList">
                        <li>모두</li>
                        <li>별 표시</li>
                        <li>첨부 있음</li>
                        <li>안 읽은 메일</li>
                        <li>읽은 메일</li>
                     </ul>
                  </section>
                  <section class="sort_pop_wrap_mod.on sortPopWrapMod smart_mail_btns">
                     <p class="sort_btn">답장</p>
                     <p class="sort_btn">전체답장</p>
                     <p class="sort_btn">전달</p>
                     <p class="sort_btn">삭제</p>
                     <p class="sort_btn">완전삭제</p>
                     <div class="sort_btn_wrap sortPopWrap_1">
                        <p class="sort_btn">이동<img src="./esign-img-email/arrow_down.svg" alt="svg" /></p>
                        <ul class="sort_list_1 sortList_1">
                           <li>스마트 편지함</li>
                           <li>보낸 편지함</li>
                           <li>보낼 편지함</li>
                           <li>임시 보관함</li>
                           <li>휴지통</li>
                           <li class="new_mail">
                              <input type="text" placeholder="새 편지함" />
                              <button>추가</button>
                           </li>
                           <li class="chk_wrap">
                              <input id="chk" type="checkbox" name="" id="" />
                              <label for="chk">계속 이동</label>
                           </li>
                        </ul>
                     </div>
                     <div class="sort_btn_wrap sortPopWrap_2">
                        <p class="sort_btn">다른작업<img src="./esign-img-email/arrow_down.svg" alt="svg" /></p>
                        <ul class="sort_list_2 sortList_2">
                           <li>인쇄</li>
                           <li>안 읽음으로 표시</li>
                           <li>다운로드(PC저장)</li>
                           <li class="modalBtn">원문보기</li>
                        </ul>
                     </div>
                  </section>
               </td>
            </tr>
         </table>
         <div class="mail_read_wrap">
            <h1 class="read_hd">
               <img src="./esign-img-email/icon_Vector.svg" alt="icon_Vector" />
               별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금
            </h1>
            <p class="mail_date">2023-02-20 17:14:45</p>
            <dl class="mail_auth">
               <dt>보낸사람:&nbsp;</dt>
               <dd>박원일&lt;wipark@iquest.kr&gt;</dd>
            </dl>
            <dl class="mail_auth">
               <dt>받는사람:&nbsp;</dt>
               <dd>박민수&lt;minsoopark@iquest.kr&gt;</dd>
            </dl>
            <hr />
            <dl class="attchfile">
               <dt>
                  첨부파일:1개(442KB)
                  <img src="./esign-img-email/icon_close.svg" alt="icon_file" class="fileLiBtn" />
               </dt>
            </dl>
            <dl class="attchfile fileLi">
               <dd>
                  <img src="./esign-img-email/icon_file.svg" alt="icon_file" />
                  메일 개발에 필요한 화면 리스트.docx (442KB)
                  <img src="./esign-img-email/icon_view.svg" alt="icon_view" />
               </dd>
            </dl>
            
            <hr />
            <p class="trash_coment">
               <img src="./esign-img-email/icon_warning.svg" alt="icon_warning.svg" />
               휴지통으로 수신되었거나 이동한 메일입니다. 첨부된 파일 및 본문 링크에 각별히 유의하시기 바랍니다.
            </p>
            <p class="content_txt">업무에 노고가 많습니다.</p>
         </div>
      </div>
      <footer class="foot"></footer>
   </div>

   <!-- 모달창 시작 -->
   <section class="mail_modal">
      <div class="mail_modal_wrap">
         <div class="modal_hd">
            원문보기
            <img src="./esign-img-email/icon_delete.svg" alt="icon_delete.svg" class="modalClose" />
         </div>
         <div class="madal_body">
            <p>
               업무에 노고가 많습니다. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, qui saepe! Minus vero iste esse modi illum itaque in dolor,
            </p>
         </div>
         <div class="modal_btns">
            <button class="btn">취소</button>
            <button class="btn">확인</button>
         </div>
      </div>
   </section>
   <!-- 모달창 끝 -->
   <!-- 재발송창 시작 -->
   <section class="mail_modal_mod">
      <div class="mail_modal_wrap mail_modal_wrap_mod">
         <div class="modal_hd">
            재발송
            <img src="./esign-img-email/icon_delete.svg" alt="icon_delete.svg" class="modalClose_mod" />
         </div>
         <div class="madal_body madal_body_mod">
            <div class="resend_radios">
               <p class="resend_radio">
                  <input type="radio" name="chk" id="chk1" checked />
                  <label for="chk1">확인 후 발송합니다.</label>
               </p>
               <p class="resend_radio">
                  <input type="radio" name="chk" id="chk2" />
                  <label for="chk2">즉시 발송합니다.</label>
               </p>
            </div>
            <p><b>주의! 즉시 발송은 개인별 보내기가 되지 않습니다.</b></p>
            <p class="resend_caution">‘개인별 보내기'로 보낸 편지라면, '확인 후 발송합니다'를 선택한 후 개인별 보내기 옵션을 사용하시기 바랍니다.</p>
         </div>
         <div class="modal_btns">
            <button class="btn">취소</button>
            <button class="btn">확인</button>
         </div>
      </div>
   </section>
   <!-- 재발송창 끝 -->
   <script>
      // 첨부파일토글
      let fileLiBtn = document.querySelector(".fileLiBtn")
      let fileLi = document.querySelector(".fileLi")
      fileLiBtn.addEventListener("click", function () {
         this.classList.toggle("on")
         fileLi.classList.toggle("on")
         console.log(0)
      })
      // 버블링 팝업
      let sortList = document.querySelector(".sortList")
      let sortList_1 = document.querySelector(".sortList_1")
      let sortList_2 = document.querySelector(".sortList_2")
      let sortPopWrap = document.querySelector(".sortPopWrap")
      let sortPopWrap_1 = document.querySelector(".sortPopWrap_1")
      let sortPopWrap_2 = document.querySelector(".sortPopWrap_2")
      let bodyWrap = document.querySelector("body")

      function sortPopOn(event) {
         event.stopPropagation()
         sortList.classList.add("on")
      }
      function sortPopOn_1(event) {
         event.stopPropagation()
         sortList_1.classList.add("on")
         sortList_2.classList.remove("on")
      }
      function sortPopOn_2(event) {
         event.stopPropagation()
         sortList_1.classList.remove("on")
         sortList_2.classList.add("on")
      }
      sortPopWrap.addEventListener("click", sortPopOn)
      sortPopWrap_1.addEventListener("click", sortPopOn_1)
      sortPopWrap_2.addEventListener("click", sortPopOn_2)

      function bodyCancel() {
         sortList.classList.remove("on")
         sortList_1.classList.remove("on")
         sortList_2.classList.remove("on")
      }
      bodyWrap.addEventListener("click", bodyCancel)

      let mailContent = document.querySelector(".mail_content")
      let iconStar = mailContent.querySelectorAll("tr td svg")
      let iconStarInner = mailContent.querySelectorAll("tr td svg path")
      for (let i = 0; i < iconStar.length; i++) {
         iconStar[i].addEventListener("click", function () {
            this.firstElementChild.classList.toggle("on")
         })
      }
      let sortPopWrapMod = mailContent.querySelector(".sortPopWrapMod")
      let sortPopInput = mailContent.querySelectorAll(".sortPop input")
      for (let i = 0; i < sortPopInput.length; i++) {
         sortPopInput[i].addEventListener("click", function () {
            if (sortPopInput[i].checked == true) {
               sortPopWrap.classList.add("off")
               sortPopWrapMod.classList.add("on")
            } else if (sortPopInput[i].checked == false) {
               sortPopWrap.classList.remove("off")
               sortPopWrapMod.classList.remove("on")
            }
         })
      }
      // 비블링 모달창
      let modalBtn = document.querySelector(".modalBtn")
      let mailModal = document.querySelector(".mail_modal")
      let modalClose = document.querySelector(".modalClose")
      let mailModalWrap = document.querySelector(".mail_modal_wrap")
      // 재발송 모달
      let modalBtnMod = document.querySelector(".modalBtn_mod")
      let mailModalMod = document.querySelector(".mail_modal_mod")
      let modalCloseMod = document.querySelector(".modalClose_mod")
      let mailModalWrapMod = document.querySelector(".mail_modal_wrap_mod")

      function modalPop(elem) {
         if (elem == "on") {
            mailModal.classList.add(elem)
            mailModal.classList.remove("off")
         } else if (elem == "off") {
            mailModal.classList.add(elem)
         }
      }
      modalBtn.onclick = function () {
         modalPop("on")
      }
      modalClose.onclick = function () {
         modalPop("off")
      }
      mailModal.onclick = function () {
         modalPop("off")
      }

      function modalPopMod(elem) {
         if (elem == "on") {
            mailModalMod.classList.add(elem)
            mailModalMod.classList.remove("off")
         } else if (elem == "off") {
            mailModalMod.classList.add(elem)
         }
      }

      // 재발송 모달
      modalBtnMod.onclick = function () {
         modalPopMod("on")
      }
      modalCloseMod.onclick = function () {
         modalPopMod("off")
      }
      mailModalMod.onclick = function () {
         modalPopMod("off")
      }
      // 공통
      mailModalWrap.onclick = function (event) {
         event.stopPropagation()
      }
      mailModalWrapMod.onclick = function (event) {
         event.stopPropagation()
      }
   </script>
   <!-- 페이지 끝 -->
</div>

</div><!-- // wraper -->

</body>
</html>
 <?php  include_once "common.php"; ?>

<div id="wraper">
   
<?php include_once "./include/nav.php"; ?>
   
   <div class="container content_area">
   <?php include_once "head.php"; ?>
   
   <!-- 페이지 시작 -->
   <div class="main_area">
      <div class="mailbox_location">
         <h1>메일쓰기</h1>
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
                     <div class="sort_btn_wrap sortPopWrap_2">
                        <p class="sort_btn">보내기<img src="./esign-img-email/arrow_down.svg" alt="svg" /></p>
                        <ul class="sort_list_2 sortList_2">
                           <li>보내기</li>
                           <li>보안 편지 보내기</li>
                        </ul>
                     </div>
                     <p class="sort_btn modalBtn">미리보기</p>
                     <p class="sort_btn">저장하기</p>
                     <div class="sort_btn_wrap sortPopWrap_1">
                        <p class="sort_btn">옵션<img src="./esign-img-email/arrow_down.svg" alt="svg" /></p>
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
                  </section>
               </td>
            </tr>
         </table>
         <div class="mail_read_wrap">
            <div class="write_input_wrap">
               <p class="write_input">
                  <label for="res">받는 사람</label>
                  <input id="res" type="text" />
               </p>
               <p class="write_input">
                  <label for="ref">참조</label>
                  <input id="ref" type="text" />
               </p>
               <p class="write_input">
                  <label for="tit">제목</label>
                  <input id="tit" type="text" />
               </p>
               <p class="write_input">
                  <label for="attfile">파일 첨부</label>
                  <input id="attfile" type="text" />
               </p>
               <p class="write_input">
                  <textarea id="txtarea" type="text"> </textarea>
               </p>
            </div>
         </div>
      </div>
      <footer class="foot"></footer>
   </div>

   <!-- 모달창 시작 -->
   <section class="mail_modal">
      <div class="mail_modal_wrap">
         <div class="modal_hd">
            미리보기
            <img src="./esign-img-email/icon_delete.svg" alt="icon_delete.svg" class="modalClose" />
         </div>
         <div class="madal_body">
            <div class="mail_preview">
               <h1>메일을 보내드립니다.</h1>
               <dl>
                  <dt>보낸사람:</dt>
                  <dd>이소연 &lt;lsy@iquest.kr&gt;</dd>
               </dl>
               <dl>
                  <dt>받는사람:</dt>
                  <dd>이소연 &lt;lsy@iquest.kr&gt;</dd>
               </dl>
               <dl>
                  <dt>참조:</dt>
                  <dd>이소연 &lt;lsy@iquest.kr&gt;</dd>
               </dl>
            </div>
            <p class="txt_content">
               업무에 노고가 많습니다. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, qui saepe! Minus vero iste esse modi illum itaque in dolor,
            </p>
            <div class="attfile_area">
               <dl>
                  <dt>첨부파일:</dt>
                  <dd>계약서양식.pdf(103.2KB)</dd>
               </dl>
            </div>
         </div>
         <div class="modal_btns">
            <button class="btn">수정하기</button>
            <button class="btn">보내기</button>
         </div>
      </div>
   </section>
   <!-- 모달창 끝 -->
   <script>
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
      mailModalWrap.onclick = function (event) {
         event.stopPropagation()
      }
   </script>
   <!-- 페이지 끝 -->
</div>

</div><!-- // wraper -->

</body>
</html>
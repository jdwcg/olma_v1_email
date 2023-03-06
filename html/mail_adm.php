 <?php  include_once "common.php"; ?>

<div id="wraper">
   
<?php include_once "./include/nav.php"; ?>
   
   <div class="container content_area">
   <?php include_once "head.php"; ?>
   
   <!-- 페이지 시작 -->
   <div class="main_area">
      <div class="mailbox_location">
         <h1>편지함 관리</h1>
      </div>
      <div class="mail_content">
         <ul>
            <li>편지함 백업, 업로드, 비우기를 할 수 있습니다.</li>
            <li>사용자는 개인 편지함과 노출 순서를 설정할 수 있습니다.</li>
         </ul>
         <div class="usage_mail">
            <section class="usage_current">
               <div>현재 사용량 : 3,613.35 MB</div>
               <div class="usage_wrap">
                  <section class="chart_wrap">
                     <div class="teamCart_outer">
                        <div class="usage">
                           <svg>
                              <rect class="recGuage" width="0%" height="10px" fill="#ff7062" />
                           </svg>
                        </div>
                     </div>
                     <script>
                        window.onload = function () {
                           let recGuage = document.querySelector(".recGuage")
                           recGuage.setAttribute("width", "40%")
                        }
                     </script>
                  </section>
                  <p>무제한</p>
               </div>
               <div class="mail_clear modalBtn">메일 정리하기</div>
            </section>
            <section class="new_mailbox">
               <input type="text" placeholder="새 편지함" />
               <label for="" class="mail_clear">만들기</label>
            </section>
         </div>

         <table class="mailbox_bo">
            <tr class="email_adm">
               <td>편지함</td>
               <td class="td_tit">
                  <p>
                     <a href="./mail_tosend_read.php"> 용량 </a>
                  </p>
               </td>
               <td>편지 수</td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
            </tr>
            <tr class="email_adm">
               <td>스마트 편지함</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
            </tr>
            <tr class="email_adm">
               <td>보낸 편지함</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
            </tr>
            <tr class="email_adm">
               <td>보낼 편지함</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
            </tr>
            <tr class="email_adm">
               <td>임시 보관함</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
            </tr>
            <tr class="email_adm">
               <td>휴지통</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
               <td class="empty"></td>
            </tr>
            <tr class="email_adm">
               <td>회사 공지</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td>비우기</td>
               <td>백업</td>
               <td>변경</td>
               <td>편지함 삭제</td>
               <td>위로</td>
               <td>아래로</td>
            </tr>
            <tr class="email_adm">
               <td>업무</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td>비우기</td>
               <td>백업</td>
               <td>변경</td>
               <td>편지함 삭제</td>
               <td>위로</td>
               <td>아래로</td>
            </tr>
            <tr class="email_adm">
               <td>협력 업체</td>
               <td class="td_tit">616.7K</td>
               <td>24 / 1,985</td>
               <td>비우기</td>
               <td>백업</td>
               <td>변경</td>
               <td>편지함 삭제</td>
               <td>위로</td>
               <td>아래로</td>
            </tr>
         </table>
         <div class="mail_pagination">
            <p><img src="./esign-img/icon_page_first.png" alt="icon_page_first" /></p>
            <p><img src="./esign-img/icon_page_prev.png" alt="icon_page_prev" /></p>
            <span class="page_num on">1</span>
            <span class="page_num">2</span>
            <p><img src="./esign-img/icon_page_next.png" alt="icon_page_next" /></p>
            <p><img src="./esign-img/icon_page_last.png" alt="icon_page_last" /></p>
         </div>
      </div>
      <footer class="foot"></footer>
   </div>

   <!-- 모달창 시작 -->
   <section class="mail_modal">
      <div class="mail_modal_wrap">
         <div class="modal_hd">
            메일정리하기
            <img src="./esign-img-email/icon_delete.svg" alt="icon_delete.svg" class="modalClose" />
         </div>
         <div class="madal_body" style="border: none">
            <div class="mail_clear_pop">
               <section class="label_tit">
                  <span class="label_tit_span">정리할 메일함</span>
                  <div class="input_wrap">
                     <select name="mailbox" id="mailbox">
                        <option value="받은 편지함">받은 편지함</option>
                        <option value="받은 편지함">받은 편지함</option>
                     </select>
                  </div>
               </section>
               <section class="label_tit">
                  <span class="label_tit_span">기간 선택</span>
                  <div class="input_wrap">
                     <input type="date" name="date" id="date" />
                     <span>~</span>
                     <input type="date" name="date" id="date" />
                  </div>
               </section>
               <section class="label_tit_mod">
                  <span class="label_tit_span">정리 방법</span>
                  <div class="input_wrap">
                     <p>
                        <input type="radio" name="move" id="move" />
                        <label for="move">휴지통으로 이동</label>
                     </p>
                     <p>
                        <input type="radio" name="move" id="move_mod" />
                        <span>
                           <select name="move" id="mailbox">
                              <option value="받은 편지함">받은 편지함</option>
                              <option value="받은 편지함">받은 편지함</option>
                           </select>
                        </span>
                        <label for="move_mod"> 으로 이동 </label>
                     </p>
                  </div>
               </section>
               <section class="label_tit">
                  <span class="label_tit_span">옵션</span>
                  <div class="input_wrap">
                     <input type="checkbox" name="chk1" id="chk1" />
                     <label for="chk1">보낸 편지 저장</label>
                     <input type="checkbox" name="chk2" id="chk2" />
                     <label for="chk2">수신 확인</label>
                  </div>
               </section>
            </div>
         </div>
         <div class="modal_btns">
            <button class="btn">취소</button>
            <button class="btn">확인</button>
         </div>
      </div>
   </section>
   <!-- 모달창 끝 -->
   <script>
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
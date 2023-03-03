 <?php  include_once "common.php"; ?>

<div id="wraper">
   
<?php include_once "./include/nav.php"; ?>
   
   <div class="container content_area">
   <?php include_once "head.php"; ?>
   
   <!-- 페이지 시작 -->
   <div class="main_area">
      <div class="mailbox_location">
         <h1>
            보낸 편지함</span>&nbsp20</span>
         </h1>
      </div>
      <div class="mail_content">
         <table class="mailbox_bo">
            <tr id="popmenu">
               <td class="sort_pop sortPop">
                  <input type="checkbox" name="" id="" />
                  <section class="sort_pop_wrap sortPopWrap">
                     <p class="sort_btn">보기: 모두 <img src="./esign-img-email/arrow_down.svg" alt="svg" /></p>
                     <ul class="sort_list sortList">
                        <li>모두</li>
                        <li>별 표시</li>
                        <li>첨부 있음</li>
                        <li>안 읽은 메일</li>
                        <li>읽은 메일</li>
                     </ul>
                  </section>
                  <section class="sort_pop_wrap_mod sortPopWrapMod">
                     <p class="sort_btn">삭제</p>
                     <p class="sort_btn">완전삭제</p>
                     <p class="sort_btn">재발송</p>
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
                           <li>읽음으로 표시</li>
                           <li>안 읽음으로 표시</li>
                           <li>별 표시</li>
                           <li>별 제거</li>
                           <li>다운로드(PC저장)</li>
                        </ul>
                     </div>
                     <p class="sort_btn sort_btn_num">1개 선택</p>
                  </section>
               </td>
            </tr>
            <tr class="email_li_mo">
               <td class="sort_pop sortPop">
                  <input type="checkbox" name="" id="" />
                  <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        id="icon_star"
                        d="M13.6627 5.88959C13.8073 5.77077 13.9121 5.61288 13.9638 5.43606C14.0155 5.25923 14.0117 5.07149 13.9529 4.89676C13.8941 4.72203 13.783 4.56824 13.6337 4.45501C13.4844 4.34177 13.3038 4.27422 13.1147 4.26097L9.44431 3.97424C9.41275 3.97289 9.38226 3.96282 9.35641 3.9452C9.33056 3.92759 9.31045 3.90318 9.29844 3.87484L7.8831 0.575534C7.81141 0.405494 7.68913 0.259995 7.53186 0.157585C7.37459 0.0551757 7.18944 0.000488281 7 0.000488281C6.81056 0.000488281 6.62542 0.0551757 6.46814 0.157585C6.31087 0.259995 6.18859 0.405494 6.1169 0.575534L4.70156 3.87484C4.68955 3.90318 4.66944 3.92759 4.64359 3.9452C4.61774 3.96282 4.58725 3.97289 4.55569 3.97424L0.885287 4.26097C0.696249 4.27422 0.515568 4.34177 0.36628 4.45501C0.216991 4.56824 0.105856 4.72203 0.047064 4.89676C-0.0117281 5.07149 -0.0155256 5.25923 0.0361636 5.43606C0.0878529 5.61288 0.192684 5.77077 0.337284 5.88959L3.13642 8.21402C3.1601 8.23401 3.17774 8.25985 3.18746 8.2888C3.19718 8.31775 3.19863 8.34873 3.19162 8.37841L2.3361 11.8536C2.29197 12.0321 2.3034 12.2193 2.36892 12.3916C2.43444 12.5639 2.55113 12.7134 2.70426 12.8214C2.85738 12.9294 3.04007 12.991 3.22926 12.9984C3.41844 13.0057 3.60563 12.9586 3.7672 12.8629L6.92115 11.001C6.9467 10.9841 6.97694 10.975 7.00789 10.975C7.03884 10.975 7.06906 10.9841 7.09461 11.001L10.2486 12.8629C10.3991 12.9528 10.5724 13.0005 10.7493 13.0005C10.8936 12.9989 11.0358 12.966 11.1653 12.9041C11.2948 12.8423 11.4083 12.753 11.4976 12.643C11.5868 12.533 11.6495 12.405 11.681 12.2683C11.7125 12.1317 11.7121 11.99 11.6797 11.8536L10.8242 8.37841C10.8172 8.34873 10.8186 8.31775 10.8283 8.2888C10.838 8.25985 10.8557 8.23401 10.8794 8.21402L13.6627 5.88959Z"
                        fill="#D6D6D6"
                     />
                  </svg>
               </td>
               <script></script>
               <td>박원일</td>
               <td class="td_tit">
                  <p>
                     <a href="./mail_send_read.php">
                        별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금별첨의 6개 메뉴화면의 작업이 가능별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금별첨의
                        6개 메뉴화면의 작업이 가능한 기간이 궁금
                     </a>
                  </p>
               </td>
               <td>
                  <img src="./esign-img-email/icon_file.svg" alt="icon_file.svg" />
                  616.7K
               </td>
               <td>23-02-20 17:14</td>
            </tr>
            <tr class="email_li_mo">
               <td class="sort_pop sortPop">
                  <input type="checkbox" name="" id="" />
                  <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        id="icon_star"
                        d="M13.6627 5.88959C13.8073 5.77077 13.9121 5.61288 13.9638 5.43606C14.0155 5.25923 14.0117 5.07149 13.9529 4.89676C13.8941 4.72203 13.783 4.56824 13.6337 4.45501C13.4844 4.34177 13.3038 4.27422 13.1147 4.26097L9.44431 3.97424C9.41275 3.97289 9.38226 3.96282 9.35641 3.9452C9.33056 3.92759 9.31045 3.90318 9.29844 3.87484L7.8831 0.575534C7.81141 0.405494 7.68913 0.259995 7.53186 0.157585C7.37459 0.0551757 7.18944 0.000488281 7 0.000488281C6.81056 0.000488281 6.62542 0.0551757 6.46814 0.157585C6.31087 0.259995 6.18859 0.405494 6.1169 0.575534L4.70156 3.87484C4.68955 3.90318 4.66944 3.92759 4.64359 3.9452C4.61774 3.96282 4.58725 3.97289 4.55569 3.97424L0.885287 4.26097C0.696249 4.27422 0.515568 4.34177 0.36628 4.45501C0.216991 4.56824 0.105856 4.72203 0.047064 4.89676C-0.0117281 5.07149 -0.0155256 5.25923 0.0361636 5.43606C0.0878529 5.61288 0.192684 5.77077 0.337284 5.88959L3.13642 8.21402C3.1601 8.23401 3.17774 8.25985 3.18746 8.2888C3.19718 8.31775 3.19863 8.34873 3.19162 8.37841L2.3361 11.8536C2.29197 12.0321 2.3034 12.2193 2.36892 12.3916C2.43444 12.5639 2.55113 12.7134 2.70426 12.8214C2.85738 12.9294 3.04007 12.991 3.22926 12.9984C3.41844 13.0057 3.60563 12.9586 3.7672 12.8629L6.92115 11.001C6.9467 10.9841 6.97694 10.975 7.00789 10.975C7.03884 10.975 7.06906 10.9841 7.09461 11.001L10.2486 12.8629C10.3991 12.9528 10.5724 13.0005 10.7493 13.0005C10.8936 12.9989 11.0358 12.966 11.1653 12.9041C11.2948 12.8423 11.4083 12.753 11.4976 12.643C11.5868 12.533 11.6495 12.405 11.681 12.2683C11.7125 12.1317 11.7121 11.99 11.6797 11.8536L10.8242 8.37841C10.8172 8.34873 10.8186 8.31775 10.8283 8.2888C10.838 8.25985 10.8557 8.23401 10.8794 8.21402L13.6627 5.88959Z"
                        fill="#D6D6D6"
                     />
                  </svg>
               </td>
               <td>박원일</td>
               <td class="td_tit">
                  <p>
                     <a href="./mail_send_read.php">
                        별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금별첨의 6개 메뉴화면의 작업이 가능별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금별첨의
                        6개 메뉴화면의 작업이 가능한 기간이 궁금
                     </a>
                  </p>
               </td>
               <td>
                  <img src="./esign-img-email/icon_file.svg" alt="icon_file.svg" />
                  616.7K
               </td>
               <td>23-02-20 17:14</td>
            </tr>
            <tr class="email_li_mo">
               <td class="sort_pop sortPop">
                  <input type="checkbox" name="" id="" />
                  <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        id="icon_star"
                        d="M13.6627 5.88959C13.8073 5.77077 13.9121 5.61288 13.9638 5.43606C14.0155 5.25923 14.0117 5.07149 13.9529 4.89676C13.8941 4.72203 13.783 4.56824 13.6337 4.45501C13.4844 4.34177 13.3038 4.27422 13.1147 4.26097L9.44431 3.97424C9.41275 3.97289 9.38226 3.96282 9.35641 3.9452C9.33056 3.92759 9.31045 3.90318 9.29844 3.87484L7.8831 0.575534C7.81141 0.405494 7.68913 0.259995 7.53186 0.157585C7.37459 0.0551757 7.18944 0.000488281 7 0.000488281C6.81056 0.000488281 6.62542 0.0551757 6.46814 0.157585C6.31087 0.259995 6.18859 0.405494 6.1169 0.575534L4.70156 3.87484C4.68955 3.90318 4.66944 3.92759 4.64359 3.9452C4.61774 3.96282 4.58725 3.97289 4.55569 3.97424L0.885287 4.26097C0.696249 4.27422 0.515568 4.34177 0.36628 4.45501C0.216991 4.56824 0.105856 4.72203 0.047064 4.89676C-0.0117281 5.07149 -0.0155256 5.25923 0.0361636 5.43606C0.0878529 5.61288 0.192684 5.77077 0.337284 5.88959L3.13642 8.21402C3.1601 8.23401 3.17774 8.25985 3.18746 8.2888C3.19718 8.31775 3.19863 8.34873 3.19162 8.37841L2.3361 11.8536C2.29197 12.0321 2.3034 12.2193 2.36892 12.3916C2.43444 12.5639 2.55113 12.7134 2.70426 12.8214C2.85738 12.9294 3.04007 12.991 3.22926 12.9984C3.41844 13.0057 3.60563 12.9586 3.7672 12.8629L6.92115 11.001C6.9467 10.9841 6.97694 10.975 7.00789 10.975C7.03884 10.975 7.06906 10.9841 7.09461 11.001L10.2486 12.8629C10.3991 12.9528 10.5724 13.0005 10.7493 13.0005C10.8936 12.9989 11.0358 12.966 11.1653 12.9041C11.2948 12.8423 11.4083 12.753 11.4976 12.643C11.5868 12.533 11.6495 12.405 11.681 12.2683C11.7125 12.1317 11.7121 11.99 11.6797 11.8536L10.8242 8.37841C10.8172 8.34873 10.8186 8.31775 10.8283 8.2888C10.838 8.25985 10.8557 8.23401 10.8794 8.21402L13.6627 5.88959Z"
                        fill="#D6D6D6"
                     />
                  </svg>
               </td>
               <script></script>
               <td>박원일</td>
               <td class="td_tit">
                  <p>
                     <a href="./mail_send_read.php">
                        별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금별첨의 6개 메뉴화면의 작업이 가능별첨의 6개 메뉴화면의 작업이 가능한 기간이 궁금별첨의
                        6개 메뉴화면의 작업이 가능한 기간이 궁금
                     </a>
                  </p>
               </td>
               <td>
                  <img src="./esign-img-email/icon_file.svg" alt="icon_file.svg" />
                  616.7K
               </td>
               <td>23-02-20 17:14</td>
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
   <script>
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
   </script>
   <!-- 페이지 끝 -->
</div>

</div><!-- // wraper -->

</body>
</html>
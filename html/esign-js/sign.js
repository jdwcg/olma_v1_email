// 상단 화살표 클릭 시
$(function () {
   $("nav .homeBox input").click(function () {
      if ($(this).is(":checked")) {
         $("#wraper .container").addClass("full")
         $("nav").addClass("move")
         if ($(window).width() < 769) {
            $("#nav_bg").show()
         }
      } else {
         $("#wraper .container").removeClass("full")
         $("nav").removeClass("move")
         if ($(window).width() < 769) {
            $("#nav_bg").hide()
         }
      }
   })
})

// 레이어 팝업
function layer_open(opeN, closE) {
   var open_layer = $("#" + opeN)
   var close_layer = $("#" + closE)

   close_layer.fadeOut()
   open_layer.fadeIn()

   open_layer.find(".xBtn").click(function (e) {
      open_layer.fadeOut()
      e.preventDefault()
   })
}

// 달력 선택
$(function () {
   $.datepicker.setDefaults({
      dateFormat: "yy.mm.dd", //Input Display Format 변경
      showOtherMonths: true, //빈 공간에 현재월의 앞뒤월의 날짜를 표시
      showMonthAfterYear: true, //년도 먼저 나오고, 뒤에 월 표시
      changeYear: true, //콤보박스에서 년 선택 가능
      changeMonth: true, //콤보박스에서 월 선택 가능
      showOn: "both", //button:버튼을 표시하고,버튼을 눌러야만 달력 표시 ^ both:버튼을 표시하고,버튼을 누르거나 input을 클릭하면 달력 표시
      buttonImage: "esign-img/icon_calendar.svg", //버튼 이미지 경로
      buttonImageOnly: true, //기본 버튼의 회색 부분을 없애고, 이미지만 보이게 함
      yearSuffix: "년", //달력의 년도 부분 뒤에 붙는 텍스트
      monthNamesShort: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"], //달력의 월 부분 텍스트
      monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"], //달력의 월 부분 Tooltip 텍스트
      dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"], //달력의 요일 부분 텍스트
      dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"], //달력의 요일 부분 Tooltip 텍스트
      minDate: "-1M", //최소 선택일자(-1D:하루전, -1M:한달전, -1Y:일년전)
      maxDate: "+1M", //최대 선택일자(+1D:하루후, -1M:한달후, -1Y:일년후)
   })

   //input을 datepicker로 선언
   $("#datepicker01").datepicker()
   $("#datepicker02").datepicker()
   $("#startDate").datepicker()
   $("#endDate").datepicker()
})

// 서명 추가창 탭 클릭시
$(function () {
   $("#signature_add .popupBox .popup_main .tabBox a").click(function () {
      $("#signature_add .popupBox .popup_main .tabBox a").removeClass("active")
      $(this).addClass("active")

      if ($(this).hasClass("tab_draw")) {
         $("#signature_add .popupBox .popup_main .tabView").hide()
         $("#signature_add .popupBox .popup_main .draw").show()
      }
      if ($(this).hasClass("tab_make")) {
         $("#signature_add .popupBox .popup_main .tabView").hide()
         $("#signature_add .popupBox .popup_main .make").show()
      }
      if ($(this).hasClass("tab_upload")) {
         $("#signature_add .popupBox .popup_main .tabView").hide()
         $("#signature_add .popupBox .popup_main .upload").show()
      }
   })
})

$(document).ready(function () {
   var fileTarget = $("#file")
   var fileExcellTarget = $("#fileExcell")
   var fileTextAreaTarget = $("#fileTextArea")

   fileTarget.on("change", function () {
      // 값이 변경되면
      var cur = $(".organizFileBox input[type='file']").val()
      $(".upload-name").val(cur)
   })
   fileExcellTarget.on("change", function () {
      // 값이 변경되면
      var cur = $(".rightBox input[type='file']").val()
      $(".upload-name").val(cur)
   })
   fileTextAreaTarget.on("change", function () {
      // 값이 변경되면
      var cur = $(".TextFileInput input[type='file']").val()
      $(".upload-name").val(cur)
   })

   // 메뉴아코디언

   $(document).on("click", ".icon12", function () {
      if ($(".iconChild").hasClass("p_hide")) {
         $(".iconChild").removeClass("p_hide")
         $(".iconChild").addClass("p_block")
      } else {
         $(".iconChild").removeClass("p_block")
         $(".iconChild").addClass("p_hide")
      }
   })
   $(document).on("click", ".icon13", function () {
      if ($(".iconChild2").hasClass("p_hide")) {
         $(".iconChild2").removeClass("p_hide")
         $(".iconChild2").addClass("p_block")
      } else {
         $(".iconChild2").removeClass("p_block")
         $(".iconChild2").addClass("p_hide")
      }
   })

   //관리자 탭 활성화
   $(document).on("click", ".adminList", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 그대로 둠
      } else {
         //클릭한게 엑티스 없다면 하위중 삭제후 등록
         $(".adminSelectNav>ul>li.active").removeClass("active")
         $(this).addClass("active")
      }
   })

   $(document).on("click", ".listboxInText", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 삭제
         $(this).removeClass("active")
      } else {
         //클릭한게 엑티스 없다면 생성
         $(this).addClass("active")
      }
   }) //organizInputImg

   $(document).on("click", ".iconPlusImg", function (e) {
      var HTML = '<div class="organizDiv"><div class="inputBox resize organizInput"><input type="text"/></div>'
      HTML += '<div class="organizText cbtn">등록</div></div>'

      if ($(this).parent().children("div").hasClass("organizDiv")) {
         $(".organizDiv").remove()
      } else {
         $(this).parent().append(HTML)
      }
   })

   $(document).on("click", ".cadminInsert", function (e) {
      if ($(".adminInsertTr").css("display") == "none") {
         //안보일때 보여주고
         $(".adminInsertTr").css("display", "table-row")
      } else {
         //보일때 안보여준다.
         $(".adminInsertTr").css("display", "none")
      }
   })

   //dutyPosition.php
   $(document).on("click", "#positionInBtn", function () {
      var HTML = '<div class="inputBox"><input type="text" id=""></input></div>'

      if ($(this).parent().prev(".positionList").find("div").hasClass("inputBox")) {
         $(this).parent().prev(".positionList").find(".inputBox").remove()
      } else {
         $(this).parent().prev(".positionList").append(HTML)
      }
   })

   //dutyPosition.php
   $(document).on("click", "#positionNewBtn", function (e) {
      var rating = $("#rating").val()
      var position = $("#pst").val()

      if (rating == "" || position == "") {
         return
      }

      var HTML =
         '<div class="positionBoxPiece">' +
         '<div class="positionTitle"><span> ' +
         rating +
         " - " +
         position +
         " <span></div>" +
         '<div class="positionList">' +
         '<div class="list"></div>' +
         "</div>" +
         '<div class="positionImg"> <img src="img/icon_plus_L.png" id="positionInBtn"  /> </div>' +
         "</div>"
      $(".positionBoxAllPiece").append(HTML)
      $("#rating").val("")
      $("#pst").val("")
   })

   $(document).on("click", "#dutyNewBtn", function (e) {
      var duty = $("#dutyVal").val()

      if (duty == "") {
         return
      }

      var HTML = "<span>" + duty + "</span>"

      $(".dutyList").append(HTML)
      $("#dutyVal").val("")
   })

   //dutyPosition.php
   $(document).on("click", ".positionInsetBoxBtn", function (e) {
      var windowWidth = window.innerWidth
      if ($(".positionInputBox").css("display") == "none") {
         if (windowWidth > 570) {
            $(".positionInputBox").css("display", "flex")
         } else {
            $(".positionInputBox").css("display", "block")
         }
      } else {
         $(".positionInputBox").css("display", "none")
      }
   })

   //dutyPosition.php
   $(document).on("click", ".dutyInsetBoxBtn", function (e) {
      var windowWidth = window.innerWidth
      if ($(".dutyInputBox").css("display") == "none") {
         if (windowWidth > 570) {
            $(".dutyInputBox").css("display", "flex")
         } else {
            $(".dutyInputBox").css("display", "block")
         }
      } else {
         $(".dutyInputBox").css("display", "none")
      }
   })

   //vacation.php
   $(document).on("click", ".ulList", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 그대로 둠
      } else {
         //클릭한게 엑티스 없다면 하위중 삭제후 등록
         $(".subWorkNav>ul>li.active").removeClass("active")
         $(this).addClass("active")
      }
   })

   //vacation.php
   $(document).on("click", ".subWorkBtn", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 그대로 둠
      } else {
         //클릭한게 엑티스 없다면 하위중 삭제후 등록
         $(".subWorkSt>div.active").removeClass("active")
         $(this).addClass("active")
      }
   })

   //workStatistics.php
   $(document).on("click", ".allWorkShowBtn", function (e) {
      if ($(".allWorkTable").css("display") == "none") {
         //모든부서 테이블 등장
         //$('.allWorkTable').css('display','block');
         $(".allWorkTable").css("display", "block")
         $(".upArrow").css("display", "none")
         $(".downArrow").css("display", "inline-block")
      } else {
         //모든부서 테이블 안보임
         $(".allWorkTable").css("display", "none")
         $(".upArrow").css("display", "inline-block")
         $(".downArrow").css("display", "none")
      }
   })

   //관리자 탭 활성화 main.php
   $(document).on("click", ".adminListdiv", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 그대로 둠
      } else {
         //클릭한게 엑티스 없다면 하위중 삭제후 등록
         $(".adminList>div.active").removeClass("active")
         $(this).addClass("active")
      }
   })

   //draftPage.php
   $(document).on("click", ".subListClick4", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 삭제
         $(this).removeClass("active")
      } else {
         //클릭한게 엑티스 없다면 생성
         $(this).addClass("active")
      }
   })
   $(document).on("click", ".subListClick2", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 삭제
         $(this).removeClass("active")
      } else {
         //클릭한게 엑티스 없다면 생성
         $(this).addClass("active")
      }
   })
   $(document).on("click", ".subListClick3", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 삭제
         $(this).removeClass("active")
      } else {
         //클릭한게 엑티스 없다면 생성
         $(this).addClass("active")
      }
   })
   $(document).on("click", ".subListClick4", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 삭제
         $(this).removeClass("active")
      } else {
         //클릭한게 엑티스 없다면 생성
         $(this).addClass("active")
      }
   })

   /* setting.php */
   /*
	$(document).on('click', '.oftenBtnClick', function(e) {
		if( $(this).hasClass('active') ) {
			//클릭한게 엑티브가 있다면 그대로 둠
		} else {
			//클릭한게 엑티스 없다면 하위중 삭제후 등록
			$(".btnBox>a.active").removeClass("active");
			$(this).addClass('active');
		}
	});
	*/

   /* draftPage.php */
   $(document).on("click", ".documents", function (e) {
      if ($(this).hasClass("active")) {
         //클릭한게 엑티브가 있다면 그대로 둠
      } else {
         //클릭한게 엑티스 없다면 하위중 삭제후 등록
         $(".docuList>p.active").removeClass("active")
         $(this).addClass("active")
      }
   })
})

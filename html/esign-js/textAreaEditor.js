
$(document).ready(function() {

    var oEditors = [];

    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "content12",
        sSkinURI: "/js/naver-smarteditor2/demo/SmartEditor2Skin.html",
        fCreator: "createSEditor2"
       });
       
});

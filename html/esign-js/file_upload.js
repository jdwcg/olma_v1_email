(function ($) {
    "use strict";
    $.fn.prettyUploader = function (options) {

        var settings = $.extend({
                info: '.file-info',
                input: 'input',
                button: '.button',
				defaultText: '선택된 파일이 없습니다.'
            }, options);

        return this.each(function () {
            var $this = $(this),
                input = $this.find(settings.input),
                button = $this.find(settings.button),
                info = $this.find(settings.info),
                infoText = settings.defaultText,
                updateText = function() {
                    var files = input[0].files;

                    if( files.length > 0 ) {
                        var file = files[0],
                            name = file.name;
							
						button.hide();
                        infoText = name;
						$(".file-info2").html("첨부가 완료되었습니다.");
						$(".infoBox").addClass("attached");
						$(".upload_btn").addClass("active");
						
                    } else {
                        infoText = settings.defaultText;
                    }

                    info.html(infoText);
                },
                updateAll = function() {
                    updateText();
                };

            $this.on('change', 'input', function() {
                updateAll();
				$(".fileImg").attr("src","img/icon_file_complete.png");
            });

            updateAll();
        });
    };
}(jQuery));

$('.file-upload').prettyUploader();
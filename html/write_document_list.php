<?php include_once "common.php"; ?>

<div id="wraper">
    
	<?php include_once "nav.php"; ?>
    
    <div class="container">
    	<?php include_once "head.php"; ?>
 
        <div class="mainArea subArea">
        	<div class="titleBox">
            	<div class="title">작성 문서 관리</div>
            </div>
            <div class="searchBox">
            	<div class="selectBox">
                	<select>
                    	<option value="전체">전체</option>
                    </select>
                </div>
                <div class="inputBox"><input type="text"></div>
                <a href="javascript:;" class="btn">검색</a>
            </div>
        	<div class="template_list">
            	<div class="list_title">
                	<span>문서함 ( 6 )</span>
                    <input type="radio" id="type01" class="type01" name="list_type" checked><label for="type01"></label>
                    <input type="radio" id="type02" class="type02" name="list_type"><label for="type02"></label>
                </div>
            	<ul>
                	<a href="javascript:;" class="new_document">
                    	<img src="img/icon_plus_L.png">
                        <p>새문서 작성</p>
                    </a>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:;"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:;"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:;"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:;"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:;"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgBox" style="background-image:url(img/document_sample.jpg)"></div>
                        <div class="box">
                        	근로계약서
                        	<div class="btnBox">
                            	<a href="javascript:;"><img src="img/icon_write.svg"></a>
                                <a href=""><img src="img/icon_delete.svg"></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div><!-- // wraper -->
</body>
</html>
<?php
echo '<!--LOGIN POP-->
        <div id="content-window-light-box-upload" class="overall_class">  
            <div id="content-upload-box" style="transition: 0.5s; top: 50%; left: 50%; transform: translate(-50%,-50%); position: absolute;">
                <div class="close_icon_group" onclick="Close(\'#content-window-light-box-upload\', \'#content-upload-box\', \'#login_form\');"></div>
                <h2>Subir Comprobante</h2>
                <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
					<!--div id="image_preview"><img id="previewing" src="noimage.png" /></div-->
						<hr id="line">
						<div id="selectImage">
							<label>Select Your Image</label><br/>
							<input type="hidden" name="reqId" value="" /> 
							<!--input type="file" name="file" id="file" required /-->
							<input type="file" name="file" id="file" class="inputfile" required />
							<label for="file">Choose a file</label>
							<input type="submit" value="Upload" class="submit" />
						</div>
				</form>
            </div>
        </div>
';
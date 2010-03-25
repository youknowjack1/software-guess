<?php /*
Copyright (c) 2010 Jack Langman, Daniel Fozdar, Nelson Yiap, Zhihua Guo, 
                   Vivek Koul & Aaron Taylor
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
 are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice, 
      this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, 
      this list of conditions and the following disclaimer in the documentation 
      and/or other materials provided with the distribution.
    * Neither the name(s) of the authors nor the names of its contributors 
      may be used to endorse or promote products derived from this software 
      without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND 
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES 
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; 
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON 
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT 
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS 
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

?>
<!--
FILE INFO: calibrate.php
$LastChangedDate: 2010-03-25 19:16:27 +0800 (Thu, 25 Mar 2010) $
$Revision: 5 $
$Author: youknowjack@gmail.com $
-->
<?php 
    // setup some vars for the grid
    $header_extra = '<script language="javascript" src="ajaxGridSort/ajax.js"></script>';
    $header_extra .= '<script language="javascript">
		var ags_numFields = 6;
		var ags_arrValidate = new Array("", "[0-9a-zA-Z\\\\n\\\\-]+", "\\\\d*\\\\.?\\\\d+", "\\\\d*\\\\.?\\\\d+", "\\\\d*\\\\.?\\\\d+", "\\\\d*\\\\.?\\\\d+");
		var ags_arrRange = new Array(0, 0, new Array(1, 10), new Array(1, 10), 0, 0);
		var ags_filename = "calibrate-grid.php";
		var ags_arrFields = new Array("ID", "Project Name","Domain Experience","Field Experience","Estimated Effort","Actual Effort");
		ags_init(ags_numFields, ags_arrValidate, ags_arrRange, ags_arrFields, ags_filename);
		</script>
		<link rel="stylesheet" href="ajaxGridSort/css.css" type="text/css">';

     // Header file to show title, load styles, etc...
    $header_title = "Calibration";
    $header_bodytag_extra = "onLoad=\"getagents('ID','')\"";
    require 'static/header.php';
?>
<div id="hiddenDIV" style="visibility:hidden; background-color:white; border: 0px solid black;"></div>
<?php 
    // Footer file to show some copyright info etc...
    require 'static/footer.php';
?>
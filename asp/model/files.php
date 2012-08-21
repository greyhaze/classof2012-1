<?php

require_once 'wikitexttohtml.php';

function bNewestTxt($sFCur){
	$sFTxt = $sFCur . '.txt';
	$nTimeCur = filemtime($sFCur);
	$nTimeTxt = filemtime($sFTxt);

	if($nTimeTxt > $nTimeCur) {
		$sFTmp = uniqid(rand(), true) . '.php';
		// need to translate wiki text to html
		$sTxtContent = file_get_contents($sFTxt);
		$aInput = explode("\n", $sTxtContent);
		$aOutput = WikiTextToHTML::convertWikiTextToHTML($aInput);
		$fTmp = fopen($sFTmp, 'w');
		foreach($aOutput as $sLine) {
			fputs($fTmp, $sLine . "\n");
		}
		fclose($fTmp);		
		include $sFTmp;
		$fIn = fopen($sFCur, 'w');
		fputs($fIn, "<?php include_once 'model/files.php'; if(bNewestTxt(__FILE__)) { ?>\n");
		fputs($fIn, file_get_contents($sFTmp));
		fputs($fIn, "\n<?php } ?>");
		fclose($fIn);
//		unlink($sFTmp);
		return false;
	}
	return true;
}
?>
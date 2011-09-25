JumpFlag=1;

function CheckVal(CurrentInp) {
	
	JumpFlag=(CurrentInp.value!='') ? 0 : 1;

}


function ChangeFlag(CurrentInp) {

	if (CurrentInp.value.length==2) JumpFlag=1;

}

function go2cpt(CurrentInp) {

	if (JumpFlag==1) {
	
	with (CurrentInp) {

		if ( (value.length==maxLength) && (tabIndex<=document.FX.elements.length-1) ) {

			document.FX.elements[tabIndex].focus();

		}

	}
	}

}

function abschicken() {
	document.getElementById('overlay').style.display = 'block';
	document.sgcopy.submit();
}

function show_channelgrouplist(option)
{
	if ( option == '1' ) {
		
		document.getElementById('div_channelgroup').style.display = 'block';
		document.getElementById('div_servergroup').style.display = 'none';
		
	} else { 
	
		document.getElementById('div_channelgroup').style.display = 'none';
		document.getElementById('div_servergroup').style.display = 'block';
	}
	
    return true;
	
}
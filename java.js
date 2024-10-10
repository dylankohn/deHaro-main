function onContractClick(){
    document.getElementById('contractadd').className="hide";
    document.getElementById('contracttext').className="show";
    document.getElementById('contractcancel').className="show";
    document.getElementById('contractsubmit').className="show";
    document.getElementById('contracttext').value="";
}

function onContractCancelClick(){
    document.getElementById('contractadd').className="show";
    document.getElementById('contracttext').className="hide";
    document.getElementById('contractcancel').className="hide";
    document.getElementById('contractsubmit').className="hide";
    document.getElementById('contracttext').value="";
}

function onJobClick(){
    document.getElementById('jobadd').className="hide";
    document.getElementById('jobtext').className="show";
    document.getElementById('jobcancel').className="show";
    document.getElementById('jobsubmit').className="show";
    document.getElementById('jobtext').value="";
}

function onJobCancelClick(){
    document.getElementById('jobadd').className="show";
    document.getElementById('jobtext').className="hide";
    document.getElementById('jobcancel').className="hide";
    document.getElementById('jobsubmit').className="hide";
    document.getElementById('jobtext').value="";
}

function onDeleteClick(){
    document.getElementById('delete').className="hide";
    document.getElementById('deletetext').className="show";
    document.getElementById('deletecancel').className="show";
    document.getElementById('deletesubmit').className="show";
    document.getElementById('deletetext').value="";
}

function onDeleteCancelClick(){
    document.getElementById('delete').className="show";
    document.getElementById('deletetext').className="hide";
    document.getElementById('deletecancel').className="hide";
    document.getElementById('deletesubmit').className="hide";
    document.getElementById('deletetext').value="";
}

function onDoorClick(){
    document.getElementById('dooradd').className="hide";
    document.getElementById('doortext').className="show";
    document.getElementById('doorcancel').className="show";
    document.getElementById('doorsubmit').className="show";
    document.getElementById('doortext').value="";
}

function onDoorCancelClick(){
    document.getElementById('dooradd').className="show";
    document.getElementById('doortext').className="hide";
    document.getElementById('doorcancel').className="hide";
    document.getElementById('doorsubmit').className="hide";
    document.getElementById('doortext').value="";
}
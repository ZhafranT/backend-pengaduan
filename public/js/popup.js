let tempid;

function togglepopup(value) {
    console.log("togglepopup | value:", value);
    tempid = value;
    document.getElementById("popup-1").classList.toggle("active");
}

function togglesendparam() {
    console.log("togglesendparam | clicked");
    const form = document.getElementById("toupdatedataform");
    let newvalueform;
    const lastchar = form.action.slice(form.action.length - 1);
    if (lastchar != tempid) {
        newvalueform = `${form.action}/${tempid}`;
        form.action = newvalueform;
    }
    let isExecuted = confirm("are you sure ?");
    if (isExecuted) {
        console.log("isExecuted | isExecuted:", isExecuted);
        form.submit();
    } else {
        console.log("isExecuted | isExecuted:", isExecuted);
        return false;
    }
}

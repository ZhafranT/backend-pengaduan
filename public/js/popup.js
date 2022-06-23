let tempid;

function togglepopup(value) {
    console.log("togglepopup | value:", value);
    tempid = value;
    document.getElementById("popup-1").classList.toggle("active");
}

function togglesendparam() {
    console.log("togglesendparam | clicked");
    const form = document.getElementById("toupdatedataform");
    const tglmediasi = document.getElementById("tanggalMediasiid").value;

    if (tglmediasi) {
        console.log("tglmediasi is not empty");
    } else {
        alert("Tanggal Mediasi tidak boleh kosong!");
        return false;
    }

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

function togglesendparam2() {
    console.log("togglesendparam | clicked");
    const form = document.getElementById("toupdatedataform");
    const report = document.getElementById("exampleFormControlTextarea1").value;

    if (report) {
    } else {
        alert("Ulasan report tidak boleh kosong!");
        return false;
    }

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

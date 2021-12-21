function check() {
    var atte = document.getElementByIdP("attendance").value;
    var inju = document.getElementByIdP("injury").value;
    var moti = document.getElementByIdP("motivation").value;
    var resp = document.getElementByIdP("respect").value;
    var dics = document.getElementByIdP("dicsipline").value;
    var eval = document.getElementByIdP("evaluation").value;
    var Revi = document.getElementByIdP("Review").value;

    alert("mother fucker");
    if (atte <= 10 && inju <= 10 && moti <= 5 && resp <= 5 && dics <= 10 && eval <= 20 && Revi <= 40 &&
        atte >= 0 && inju >= 0 && mot >= 0 && res >= 0 && dics >= 0 && eval >= 0 && Revi >= 0) {
        alert("all are correct");
        return false;
    } else {
        alert("inccorect input");
        return false;
    }
}
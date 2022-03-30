function isStringEmptyOrContainsOnlyWhitespaces(str) {
    return /^[\s\t\r\n]*$/.test(str);
}

function isEmailInvalid(email) {
    return !/^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/.test(email);
}

function checkStringAndFocus(obj, msg, func) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (func(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = "";
        return true;
    }
}

function validate(personalDataForm) {
    var validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_imie"], "Podaj imię!", isStringEmptyOrContainsOnlyWhitespaces);
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_nazwisko"], "Podaj nazwisko!", isStringEmptyOrContainsOnlyWhitespaces);
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_email"], "Podaj poprawny email!", isEmailInvalid);
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_kod"], "Podaj kod pocztowy!", isStringEmptyOrContainsOnlyWhitespaces);
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_ulica"], "Podaj ulicę!", isStringEmptyOrContainsOnlyWhitespaces);
    if (!validated) return validated;
    validated = checkStringAndFocus(personalDataForm.elements["f_miasto"], "Podaj miasto!", isStringEmptyOrContainsOnlyWhitespaces);
    if (!validated) return validated;
    return true;
}

function showElement(e) {
    document.getElementById(e).style.display = '';
}

function hideElement(e) {
    document.getElementById(e).style.display = 'none';
}

function alterRows(i, e) {
    if (e) {
        if (i % 2 == 1) {
            e.setAttribute("style", "background-color: Aqua;");
        }
        e = e.nextSibling;
        while (e && e.nodeType != 1) {
            e = e.nextSibling;
        }
        alterRows(++i, e);
    }
}

function nextNode(e) {
    while (e && e.nodeType != 1) {
        e = e.nextSibling;
    }
    return e;
}

function prevNode(e) {
    while (e && e.nodeType != 1) {
        e = e.previousSibling;
    }
    return e;
}

function swapRows(b) {
    let tab = prevNode(b.previousSibling);
    let tBody = nextNode(tab.firstChild);
    let lastNode = prevNode(tBody.lastChild);
    tBody.removeChild(lastNode);
    let firstNode = nextNode(tBody.firstChild);
    tBody.insertBefore(lastNode, firstNode);
}

function cnt(form, msg, maxSize) {
    if (form.value.length > maxSize)
        form.value = form.value.substring(0, maxSize);
    else
        msg.innerHTML = maxSize - form.value.length;
}
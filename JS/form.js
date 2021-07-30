function $(selector) {
    var elements = document.querySelectorAll(selector);
    return elements.length == 1 ? elements[0] : elements;
}

// Lấy các element từ form
var form = $('#form');
var username = $('#username');
var email = $('#email');
var password = $('#password');
var date = $('#date');
console.log(form);

function Check_trim(name) {
    if (name.value.trim() === "") {
        name.parentElement.querySelector('span').innerHTML = 'Dữ liệu của bạn đang trống!';
    } else {
        name.parentElement.querySelector('span').innerHTML = '';
    }
};

function Check_data(data) {
    if (!isNaN(data.value)) {
        data.parentElement.querySelector('span').innerHTML = 'Bạn nhập sai dữ liệu!';
    };
};

function Check_number(data) {
    if (isNaN(data.value)) {
        data.parentElement.querySelector('span').innerHTML = 'Bạn nhập sai dữ liệu!';
    }
};

form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Check username
    Check_trim(username);
    // Check_data(username);

    // Check email;
    Check_trim(email);

    // Check password;
    Check_trim(password);

    // Check date;
    Check_trim(date);

});
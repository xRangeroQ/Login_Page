const showpass = document.getElementById('showpass');

showpass.addEventListener('change', function() {
    const pass = document.getElementById('passwords');
    const ceye = document.getElementById('closed-eye');
    const oeye = document.getElementById('opened-eye');

    if (pass.type==='password') {
        pass.type = 'text';
        oeye.style.opacity = '1';
        ceye.style.opacity = '0';
    } else {
        pass.type = 'password';
        oeye.style.opacity = '0';
        ceye.style.opacity = '1';
    };
});

const showpass2 = document.getElementById('showpass2');

showpass2.addEventListener('change', function() {
    const pass2 = document.getElementById('newpass');
    const ceye2 = document.getElementById('closed-eye2');
    const oeye2 = document.getElementById('opened-eye2');

    if (pass2.type==='password') {
        pass2.type = 'text';
        oeye2.style.opacity = '1';
        ceye2.style.opacity = '0';
    } else {
        pass2.type = 'password';
        oeye2.style.opacity = '0';
        ceye2.style.opacity = '1';
    };
});

const showpass3 = document.getElementById('showpass3');

showpass3.addEventListener('change', function() {
    const pass3 = document.getElementById('newpassc');
    const ceye3 = document.getElementById('closed-eye3');
    const oeye3 = document.getElementById('opened-eye3');

    if (pass3.type==='password') {
        pass3.type = 'text';
        oeye3.style.opacity = '1';
        ceye3.style.opacity = '0';
    } else {
        pass3.type = 'password';
        oeye3.style.opacity = '0';
        ceye3.style.opacity = '1';
    };
});

const kayit = document.getElementById('kayitoll');

kayit.addEventListener('click', function() {
    const container1 = document.getElementById('konteyner1');
    const container2a = document.getElementById('konteyner2');

    container1.style.opacity = '0';
    container1.style.zIndex = '0';
    container2a.style.opacity = '1';
    container2a.style.zIndex = '1';
})

const gir = document.getElementById('girisyapp');

gir.addEventListener('click', function() {
    const container1 = document.getElementById('konteyner1');
    const container2a = document.getElementById('konteyner2');

    container1.style.opacity = '1';
    container1.style.zIndex = '1';
    container2a.style.opacity = '0';
    container2a.style.zIndex = '0';
});
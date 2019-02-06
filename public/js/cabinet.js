function showBtn(element) {
    var idElement = document.getElementById(element);
    idElement.setAttribute('style', 'display: block;');
}

function closeBtn(element) {
    var idElemetn = document.getElementById(element);
    idElemetn.setAttribute('style', 'display: none;');
}

function logout() {
    document.location.href = 'logout.php';
}

function askWorkers() {
    var questions2 = document.getElementById('questions2');
    var questions2_1 = document.getElementById('questions2_1');
    
    questions2.setAttribute('style', 'display: inline-block;');
    questions2_1.setAttribute('style', 'display: inline-block');
}

function askPensioner() {
    var questions2_2 = document.getElementById('questions2_2');
    var questions2_3 = document.getElementById('questions2_3'); 

    questions2_2.setAttribute('style', 'display: inline-block;');
    questions2_3.setAttribute('style', 'display: inline-block;');
}

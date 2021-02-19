require('./bootstrap');

require('alpinejs');

function init() {
    const btnStart = document.getElementById('btn-start');
    const rangeTempo = document.getElementById('tempo');

    function updateTempo() {
        tempo = parseFloat(rangeTempo.value);
    }

    function bindAllElements() {
        btnStart.addEventListener('click', function () {
            if (isPlaying) {
                btnStart.innerText = "Start";
            } else {
                btnStart.innerText = "Stop";
            }

            play();
        });

        rangeTempo.addEventListener('change', function() {
            updateTempo();
        });
    }

    updateTempo();
    bindAllElements();
}

window.addEventListener("load", init);

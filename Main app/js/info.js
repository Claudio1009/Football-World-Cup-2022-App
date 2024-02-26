function focusContainer(containerId) {
    var containers = document.getElementsByClassName('container');
    var isFocused = document.getElementById(containerId).classList.contains('focused');

    for (var i = 0; i < containers.length; i++) {
        if (containers[i].id !== containerId || isFocused) {
            containers[i].classList.remove('focused');
            containers[i].classList.remove('hidden');
        } else {
            containers[i].classList.add('hidden');
            document.getElementById(containerId).classList.add('focused');
        }
    }
}

function resetContainers() {
    var containers = document.getElementsByClassName('container');
    for (var i = 0; i < containers.length; i++) {
        containers[i].classList.remove('hidden');
        containers[i].classList.remove('focused');
    }
}
const tabItems = document.querySelectorAll('.nav-item');
const contentItems = document.querySelectorAll('.content');

function selectItem(e) {
    removeShow();
    removeActive();
    // Add class active
    this.classList.add('active');
    // Grab content from DOM
    const tabContent = document.querySelector(`#${this.id}-content`);
    tabContent.classList.add('show');
}

function removeActive() {
    tabItems.forEach(item => item.classList.remove('active'));
}

function removeShow() {
    contentItems.forEach(item => item.classList.remove('show'));
}

// Listener click nav-item
tabItems.forEach(item => item.addEventListener('click', selectItem));
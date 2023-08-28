const stars = document.querySelectorAll('.star');
const labels = document.querySelectorAll('.star + label');

labels.forEach((label, index) => {
    label.addEventListener('mouseover', () => {
        for (let i = 0; i <= index; i++) {
            stars[i].checked = true;
        }
    });

    label.addEventListener('mouseout', () => {
        for (let i = 0; i <= index; i++) {
            stars[i].checked = false;
        }
    });
});

const checkboxes = document.querySelectorAll('.rise input[type="checkbox"]');

const otherRiseInput = document.getElementById('otherRise');

checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('click', () => {
        checkboxes.forEach((cb) => {
            cb.removeAttribute('data-selected');
            cb.checked = false;
        });

        checkbox.setAttribute('data-selected', 'true');
        checkbox.checked = true;
        otherRiseInput.value = '';
    });
});

otherRiseInput.addEventListener('input', () => {
    if (otherRiseInput.value.trim() !== '') {
        checkboxes.forEach((cb) => {
            cb.removeAttribute('data-selected');
            cb.checked = false;
        });
    }
});

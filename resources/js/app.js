document.querySelectorAll('.deleteBtn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this record?')) {
            event.target.closest('form').submit();
        }
    });
});
const forms = document.querySelectorAll(".confirm-delete-form");
forms.forEach((form) => {
    form.addEventListener("submit", function (event) {
        const confirmation = confirm(`Deseja mesmo excluir?`);
        if (!confirmation) {
            event.preventDefault();
        }
    });
});

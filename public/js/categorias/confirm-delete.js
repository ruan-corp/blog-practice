const forms = document.querySelectorAll(".delete-category-form");
forms.forEach((form) => {
    form.addEventListener("submit", function (event) {
        const confirmation = confirm(
            `Deseja mesmo excluir a categoria '${form.name}' ?`
        );
        if (!confirmation) {
            event.preventDefault();
        }
    });
});

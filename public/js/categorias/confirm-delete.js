const forms = document.querySelectorAll('.delete');
forms.forEach(form => {
    form.addEventListener("submit", function(event) {
        const confirmation = confirm(`Deseja mesmo excluir a categoria '${form.name}' ?`);
        if (!confirmation) {
            event.preventDefault();
        }
        console.log(form.name)
    });
});
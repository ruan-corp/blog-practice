const notification = document.querySelector("#notification-message");

notification.addEventListener("click", function () {
    this.remove();
});

if (notification) {
    setTimeout(() => {
        notification.remove();
    }, 2500);
}

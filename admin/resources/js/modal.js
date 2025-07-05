document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("confirmationModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalMessage = document.getElementById("modalMessage");
    const modalForm = document.getElementById("modalForm");
    const modalCancel = document.getElementById("modalCancel");

    window.openConfirmationModal = function({ title, message, action }) {
        modalTitle.textContent = title || "Confirmação";
        modalMessage.textContent = message || "Tem a certeza?";
        modalForm.action = action || "";
        modal.classList.remove("hidden");
    };

    modalCancel.addEventListener("click", () => {
        modal.classList.add("hidden");
        modalForm.action = ""; // reset
    });
});

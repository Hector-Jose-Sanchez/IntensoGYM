document.addEventListener("DOMContentLoaded", () => {
    const dropArea = document.getElementById("drop-area");
    const fileElem = document.getElementById("fileElem");
    const previewImg = document.getElementById("preview-image");
    const previewText = document.getElementById("preview-text");
    const textInput = document.getElementById("text");

    dropArea.addEventListener("click", () => fileElem.click());

    dropArea.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropArea.classList.add("highlight");
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("highlight");
    });

    dropArea.addEventListener("drop", (e) => {
        e.preventDefault();
        dropArea.classList.remove("highlight");
        const file = e.dataTransfer.files[0];
        if (file) {
            fileElem.files = e.dataTransfer.files;
            previewFile(file);
        }
    });

    fileElem.addEventListener("change", () => {
        if (fileElem.files[0]) {
            previewFile(fileElem.files[0]);
        }
    });

    textInput.addEventListener("input", () => {
        previewText.textContent = textInput.value || "Aquí aparecerá la descripción...";
    });

    function previewFile(file) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = () => {
            previewImg.src = reader.result;
        };
    }
});

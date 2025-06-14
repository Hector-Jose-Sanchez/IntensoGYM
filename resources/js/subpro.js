document.addEventListener("DOMContentLoaded", () => {
    const dropArea = document.getElementById("drop-area");
    const fileElem = document.getElementById("fileElem");
    const previewImg = document.getElementById("preview-image");
    const previewText = document.getElementById("preview-text");

    const fontSelect = document.getElementById("font-family");
    const sizeSelect = document.getElementById("font-size");
    const boldBtn = document.getElementById("bold-btn");
    const italicBtn = document.getElementById("italic-btn");
    const underlineBtn = document.getElementById("underline-btn");
    const colorPicker = document.getElementById("font-color");
    const editor = document.getElementById("editable");
    const hiddenInput = document.getElementById("hidden-text");

    let currentColor = colorPicker.value;

    // ========== Imagen ==========
    dropArea.addEventListener("click", () => fileElem.click());

    dropArea.addEventListener("dragover", e => {
        e.preventDefault();
        dropArea.classList.add("highlight");
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("highlight");
    });

    dropArea.addEventListener("drop", e => {
        e.preventDefault();
        dropArea.classList.remove("highlight");
        const file = e.dataTransfer.files[0];
        if (file) {
            fileElem.files = e.dataTransfer.files;
            previewFile(file);
        }
    });

    fileElem.addEventListener("change", () => {
        if (fileElem.files[0]) previewFile(fileElem.files[0]);
    });

    function previewFile(file) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = () => {
            previewImg.src = reader.result;
        };
    }

    // ========== Texto ==========
    function execCommand(command, value = null) {
        document.execCommand(command, false, value);
        editor.focus();
        syncEditor();
    }

    function toggleActive(button) {
        button.classList.toggle("active");
    }

    boldBtn.addEventListener("click", () => {
        execCommand("bold");
        toggleActive(boldBtn);
    });

    italicBtn.addEventListener("click", () => {
        execCommand("italic");
        toggleActive(italicBtn);
    });

    underlineBtn.addEventListener("click", () => {
        execCommand("underline");
        toggleActive(underlineBtn);
    });

    fontSelect.addEventListener("change", () => {
        execCommand("fontName", fontSelect.value);
    });

    sizeSelect.addEventListener("change", () => {
        execCommand("fontSize", "7");
        setTimeout(() => {
            const fonts = editor.querySelectorAll("font[size='7']");
            fonts.forEach(el => {
                el.removeAttribute("size");
                el.style.fontSize = sizeSelect.value;
            });
            syncEditor();
        }, 0);
    });

    colorPicker.addEventListener("input", () => {
        currentColor = colorPicker.value;
        execCommand("foreColor", currentColor);
    });

    // ========== Mantener estilos activos al escribir ==========
    editor.addEventListener("keydown", e => {
        if (!e.ctrlKey && !e.metaKey && e.key.length === 1) {
            setTimeout(() => {
                const selection = window.getSelection();
                if (selection.rangeCount > 0) {
                    const range = selection.getRangeAt(0);
                    const parent = range.startContainer.parentElement;
                    if (parent && editor.contains(parent)) {
                        parent.style.color = currentColor;
                        parent.style.fontSize = sizeSelect.value;
                        parent.style.fontFamily = fontSelect.value;
                        parent.style.fontWeight = document.queryCommandState("bold") ? "bold" : "normal";
                        parent.style.fontStyle = document.queryCommandState("italic") ? "italic" : "normal";
                        parent.style.textDecoration = document.queryCommandState("underline") ? "underline" : "none";
                    }
                    syncEditor();
                }
            }, 0);
        }
    });

    // ========== Vista previa y hidden ==========
    function syncEditor() {
        previewText.innerHTML = editor.innerHTML;
        hiddenInput.value = editor.innerHTML;
    }

    editor.addEventListener("input", syncEditor);

    // ========== Estado de botones ==========
    editor.addEventListener("mouseup", updateButtonStates);
    editor.addEventListener("keyup", updateButtonStates);

    function updateButtonStates() {
        [boldBtn, italicBtn, underlineBtn].forEach(btn => btn.classList.remove("active"));
        if (document.queryCommandState("bold")) boldBtn.classList.add("active");
        if (document.queryCommandState("italic")) italicBtn.classList.add("active");
        if (document.queryCommandState("underline")) underlineBtn.classList.add("active");
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const galleryItems = document.querySelectorAll(".gambar img");

    galleryItems.forEach(item => {
        item.addEventListener("click", () => {
            const modal = document.createElement("div");
            modal.classList.add("modal");
            modal.innerHTML = `
                <span class="tombol_tutup">&times;</span>
                <img class="modal-content" src="${item.src}" alt="${item.alt}">
            `;
            document.body.appendChild(modal);

            const tombol_tutup = modal.querySelector(".tombol_tutup");
            tombol_tutup.addEventListener("click", () => {
                modal.remove();
            });
        });
    });
});


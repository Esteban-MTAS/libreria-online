document.addEventListener("DOMContentLoaded", function () {
    let formulario = document.getElementById("formulario-contacto");

    if (formulario) {
        formulario.addEventListener("submit", function (e) {
            let nombre = document.getElementById("nombre").value.trim();
            let correo = document.getElementById("correo").value.trim();
            let asunto = document.getElementById("asunto").value.trim();
            let comentario = document.getElementById("comentario").value.trim();

            if (nombre === "" || correo === "" || asunto === "" || comentario === "") {
                e.preventDefault();
                alert("Por favor, complete todos los campos.");
                return;
            }

            let formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!formatoCorreo.test(correo)) {
                e.preventDefault();
                alert("Por favor, escriba un correo válido.");
                return;
            }

            if (comentario.length < 5) {
                e.preventDefault();
                alert("El comentario es demasiado corto.");
                return;
            }

            let confirmar = confirm("¿Desea enviar este mensaje?");
            if (!confirmar) {
                e.preventDefault();
            }
        });
    }

    let alerta = document.querySelector(".alert");
    if (alerta) {
        setTimeout(function () {
            alerta.style.display = "none";
        }, 4000);
    }

    let buscarLibro = document.getElementById("buscar-libro");
    if (buscarLibro) {
        buscarLibro.addEventListener("keyup", function () {
            let texto = this.value.toLowerCase();
            let filas = document.querySelectorAll("#tabla-libros tbody tr");

            filas.forEach(function (fila) {
                let contenido = fila.textContent.toLowerCase();
                fila.style.display = contenido.includes(texto) ? "" : "none";
            });
        });
    }

    let buscarAutor = document.getElementById("buscar-autor");
    if (buscarAutor) {
        buscarAutor.addEventListener("keyup", function () {
            let texto = this.value.toLowerCase();
            let filas = document.querySelectorAll("#tabla-autores tbody tr");

            filas.forEach(function (fila) {
                let contenido = fila.textContent.toLowerCase();
                fila.style.display = contenido.includes(texto) ? "" : "none";
            });
        });
    }

    let btnArriba = document.getElementById("btn-arriba");
    if (btnArriba) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 200) {
                btnArriba.style.display = "block";
            } else {
                btnArriba.style.display = "none";
            }
        });

        btnArriba.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    let anio = document.getElementById("anio");
    if (anio) {
        anio.textContent = new Date().getFullYear();
    }
});
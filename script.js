let modo = "registro";
 
function toggle() {
    const form = document.getElementById("form");
    const title = document.getElementById("title");
    const btn = document.getElementById("btn");
    const email = document.getElementById("emailBox");
    const sideTitle = document.getElementById("sideTitle");
    const sideText = document.getElementById("sideText");
 
    form.classList.add("fade");
 
    setTimeout(() => {
        if (modo === "registro") {
            form.action = "login.php";
            title.innerText = "Iniciar sesión";
            btn.innerText = "Entrar";
            email.style.display = "none";
            sideTitle.innerText = "Hola 👋";
            sideText.innerText = "¿No tienes cuenta?";
            modo = "login";
        } else {
            form.action = "registro.php";
            title.innerText = "Crear cuenta";
            btn.innerText = "Registrarse";
            email.style.display = "block";
            sideTitle.innerText = "Bienvenido 🔥";
            sideText.innerText = "¿Ya tienes cuenta?";
            modo = "registro";
        }
 
        form.classList.remove("fade");
    }, 200);
}
 
/* VALIDACIÓN PRO */
document.addEventListener("input", () => {
    const inputs = document.querySelectorAll("input");
 
    inputs.forEach(input => {
        if (input.value.length > 0) {
            input.style.border = "2px solid #4CAF50";
        } else {
            input.style.border = "none";
        }
    });
});
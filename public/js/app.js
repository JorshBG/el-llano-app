//import './bootstrap';

function hide() {
    let baseModal = document.querySelector("#baseModal");
    baseModal.ariaHidden = true;
    baseModal.style.display = "none";
}

function getModal(id, method, route) {
    let modalsave = document.getElementById(id);

    const url = "http://clinica-el-llano-app.test";
    modalsave.onsubmit = async (e) => {
        e.preventDefault();

        const data = new FormData(modalsave);

        let res = await fetch(url + route, {
            method: method,
            body: data,
        });

        if (!res.ok) {
            alert("error");
        }

        console.log(await res.json());
    };

    // show id method and route parameter in console.table
    console.table({
        id: id,
        method: method,
        route: route,
    });
}

document.addEventListener("DOMContentLoaded", () => {
    let content = document.getElementById("main");

    const observerOptions = { childList: true };

    function autoload(mutationsList, observer) {
        for (let mutation of mutationsList) {
            if (mutation.type === "childList") {

                updateDataTable()
                updateDataTable()


            }
        }
    }

    const observer = new MutationObserver(autoload);

    // Empezamos a observar el div
    observer.observe(content, observerOptions);
});

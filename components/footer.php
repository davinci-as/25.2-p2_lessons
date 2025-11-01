<script>
    function addItem(parent, obj) {
        const child = document.createElement("div");
        child.className = "card";
        child.style.width = '18rem';
        parent.appendChild(child);
        child.innerHTML = `
            <img src="${obj.url}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    ${obj.title}
                </h5>
                <p class="card-text">
                    ${obj.text}
                </p>
                <a href="${obj.link}" class="btn btn-primary">Ir a web</a>
            </div>
        `;

    }

    const items = <?= json_encode($list) ?>;

    const parent = document.querySelector("#post_container");

    for (let index = 0; index < items.length; index++) {
        const child = items[index];
        addItem(parent, child);
    }

</script>

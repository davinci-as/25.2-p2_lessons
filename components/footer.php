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

    function addTopics (topics) {
        //actualizar vista con los topics
        const topics_container = document.querySelector('#topics_container');
        for(let i = 0; i < topics.length; i++) {
            const button = document.createElement('a');
            button.href = "#";
            button.text = topics[i].topic_name
            topics_container.appendChild(button);
        }
    }
    const parent = document.querySelector("#post_container");

    const addChildren = (items) => {
        for (let index = 0; index < items.length; index++) {
            const child = items[index];
            addItem(parent, child);
        }
    }

    const convertToJSON = data => data.json();

    fetch("/25.2-p2_lessons/api/cards/")
        .then(convertToJSON) //primero lo convierto en json
        .then(addChildren)
    
    fetch("/25.2-p2_lessons/api/topics/")
        .then(convertToJSON)
        .then(addTopics)

</script>

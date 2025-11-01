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

    const items = [
        {
        "name": "angularjs",
        "title": "AngularJS",
        "link": "https://angularjs.org/",
        "text": "AngularJS support has officially ended as of January 2022. See what ending support means and read the end of life announcement. Visit angular.io for the actively supported Angular.",
        "url": "https://angularjs.org/img/angularjs-for-header-only.svg",
        "topic": "web_framework"
    }, {
        "name": 'gitlab',
        "title": 'Gitlab',
        "link": "https://gitlab.com",
        "text": "Build software, not toolchains. With native AI at every step.",
        "url": "https://miro.medium.com/v2/resize:fit:1400/format:webp/1*OgR4jtnczW-hZUCB-gOg_g.png",
        "topic": "git_provider"
    }, {
        "name": "bitbucket",
        "title": "Bitbucket",
        "link": "https://bitbucket.org/product/",
        "text": "Code and CI/CD, powered by the Atlassian platform",
        "url": "https://dam-cdn.atl.orangelogic.com/AssetLink/np0j8d765ebc4a778s3tdr6bc7avc301/fl_keep_metadata/logo-light_Bitbucket_mark-tile_inverse_RGB.svg",
        "topic": "git_provider"
    }
    ];

    const parent = document.querySelector("#post_container");

    for (let index = 0; index < items.length; index++) {
        const child = items[index];
        addItem(parent, child);
    }

</script>

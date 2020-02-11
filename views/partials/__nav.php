<nav class="navigation">
    <ul id="navigation__list"></ul>
</nav>

<script>
    const menuItems = [
        ['Home', "/"],
        ["About", "/about"],
        ["Contact", "/contact"],
        ["Culture", "/about/culture"]
    ]

    const ul = document.getElementById("navigation__list");

    menuItems.forEach(item => {
        const li = document.createElement("li");
        const a = document.createElement("a");
        a.textContent = item[0];
        a.setAttribute("href", item[1]);
        li.classList.add("navigation__listItem");
        li.appendChild(a);
        ul.appendChild(li);
    });
</script>
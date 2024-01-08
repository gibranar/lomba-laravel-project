<body id="body-pd">
   
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class="bx bx-layer nav_logo-icon"></i>
                    <span class="nav_logo-name">BBBootstrap</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class="bx bx-grid-alt nav_icon"></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-user nav_icon"></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-message-square-detail nav_icon"></i>
                        <span class="nav_name">Messages</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-bookmark nav_icon"></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-folder nav_icon"></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class="bx bx-log-out nav_icon"></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
   

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('show')
                        toggle.classList.toggle('bx-x')
                        bodypd.classList.toggle('body-pd')
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))
        });
    </script>
</body>

</html>

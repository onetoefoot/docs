<style>
p {
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    docs-sidebar STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
}

#docs-sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: #cccccc;
    color: #636b6f;
    transition: all 0.3s;
    margin-top: 65px;
}

#docs-sidebar.active {
    margin-left: -250px;
}

#docs-sidebar .docs-sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#docs-sidebar .sidebar-header h3 {
    margin: 20px;
}
#docs-sidebar ul.components {
    padding: 20px 0;
    /* border-bottom: 1px solid #47748b; */
}
#docs-sidebar ul.components li a{
    padding-left: 30px;
}

#docs-sidebar ul p {
    color: #636b6f;
    padding: 10px 10px 0px 20px;
    font-weight: bold;
}

#docs-sidebar ul li a {
    padding: 10px 10px 10px 20px;
    font-size: 1.1em;
    display: block;
}

#docs-sidebar ul li a:hover {
    color: #000;
    /* background: #fff; */
}

#docs-sidebar ul li.active>a {
    color: #fff;
    font-weight: bold;
    background: #636b6f;
}

a[data-toggle="collapse"] {
    position: relative;
}

/* .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
} */

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: calc(100% - 250px);
    padding: 40px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
    margin-top: 65px;
}

#content.active {
    width: 100%;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #docs-sidebar {
        margin-left: -250px;
    }
    #docs-sidebar.active {
        margin-left: 0;
    }
    #content {
        width: 100%;
    }
    #content.active {
        width: calc(100% - 250px);
    }
}
</style>
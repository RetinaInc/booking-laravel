<style>
    .breadcrumb {
        background-color: #FAFAFA;
        border-radius: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        -o-border-radius: 0;
    }

    .breadcrumb a:hover {
        text-decoration: none;
    }

    /*change active color*/
    .breadcrumb > .active {
        color: #9CD05F;
    }
    .breadcrumb > li + li:before {
        content: "\00BB";
        color: #aaa;
    }
</style>
<ul class="breadcrumb list-inline">
    <li><a href="">Basic</a></li>
    <li><a href="">Location</a></li>
    <li><a href="">Room Types</a></li>
    <li><a href="">Rooms</a></li>
    <li><a href="">Calendar</a></li>
    <li><a href="">Facilities</a></li>
    <li><a href="">Room Facilities</a></li>
</ul>
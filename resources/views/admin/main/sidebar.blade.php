<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="@if (request()->routeIs('admin.dashboard')) active @endif">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>

                    </a>
                </li>

                <li class="@if (request()->routeIs('admin.products')) active @endif">
                    <a href="{{ route('admin.products') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Products</span>

                    </a>
                </li>

                <li class="@if (request()->routeIs('admin.create.product')) active @endif">
                    <a href="{{ route('admin.create.product') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Create Product</span>

                    </a>
                </li>
                
            </ul>


        </div>
    </div>
</nav>

<script>
    function dropDown(id) {
        let cls = $('#' + id).attr('class');

        //$( ".fa-caret-down" ).removeAttr("class", "fa fa-caret-right");

        if (cls == 'fa fa-caret-right') {
            $('.fa-caret-down').attr('class', 'fa fa-caret-right')
            $('#' + id).attr('class', 'fa fa-caret-down')
        } else {
            $('#' + id).attr('class', 'fa fa-caret-right')
        }
    }
</script>

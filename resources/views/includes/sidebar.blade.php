<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#profile" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Profile</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="profile" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">View Profile</a></li>
                            <li><a href="page-login.html" class="">Update Profile</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#products" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Products</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="products" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{route('product.index')}}" class="">Add Product</a></li>
                            <li><a href="{{route('category.index')}}" class="">Add Product Category</a></li>
                            <li><a href="{{route('product.display')}}" class="">Product List</a></li>
                            <li><a href="{{route('stock.display')}}" class="">Live Stock</a></li>
                            <li><a href="page-lockscreen.html" class="">Faulty Product List</a></li>
                        </ul>
                    </div>
                </li>
{{--                <li>--}}
{{--                    <a href="#company" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Company</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>--}}
{{--                    <div id="company" class="collapse ">--}}
{{--                        <ul class="nav">--}}
{{--                            <li><a href="page-profile.html" class="">Branch</a></li>--}}
{{--                            <li><a href="page-login.html" class="">On-Going Projects</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li>
                    <a href="#employees" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Employees</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="employees" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{route('employee.index')}}" class="">Create</a></li>
                            <li><a href="{{route('employee.display')}}" class="">Employee List</a></li>
                            <li><a href="page-login.html" class="">Attendance</a></li>
                            <li><a href="page-lockscreen.html" class="">TA/TD</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#vendor" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Vendor</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="vendor" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{route('vendor.vendorlist')}}" class="">Vendors</a></li>
                            <li><a href="{{route('vendor.index')}}" class="">Vendor Registration</a></li>
                            <li><a href="{{route('vendor.vendorproducts')}}" class="">Vendor wise Product List</a></li>
                            <li><a href="page-profile.html" class="">Product Transaction</a></li>
                            <li><a href="page-profile.html" class="">Payment</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#client" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Clients</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="client" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{route('client.index')}}" class="">Client Registration</a></li>
                            <li><a href="{{route('client.show')}}" class="">Client List</a></li>
                            <li><a href="page-profile.html" class="">Purchase History</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#costs" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Costs</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="costs" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Service Cost</a></li>
                            <li><a href="page-login.html" class="">Marketing Cost</a></li>
                            <li><a href="page-lockscreen.html" class="">Financing Cost</a></li>
                            <li><a href="page-lockscreen.html" class="">Administrative Cost</a></li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#salary" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Salary</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="salary" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Payments</a></li>
                            <li><a href="page-profile.html" class="">Due Payments</a></li>
                            <li><a href="page-profile.html" class="">Advanced Salary</a></li>
                        </ul>
                    </div>
                </li>
{{--                <li>--}}
{{--                    <a href="#bank" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Bank</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>--}}
{{--                    <div id="bank" class="collapse ">--}}
{{--                        <ul class="nav">--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li>
                    <a href="#report" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Report</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="report" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Product Wise Stock Report</a></li>
                            <li><a href="page-profile.html" class="">Product Wise Sales Report</a></li>
                            <li><a href="page-profile.html" class="">Monthly Stock Report</a></li>
                            <li><a href="page-profile.html" class="">Total Stock Report</a></li>
                            <li><a href="page-profile.html" class="">Total Sales Report</a></li>
                            <li><a href="page-profile.html" class="">Customer Wise Sales Report</a></li>
                            <li><a href="page-profile.html" class="">Transaction Report</a></li>
                            <li><a href="page-profile.html" class="">Cost Report</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#print" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Print</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="print" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Invoice</a></li>
                            <li><a href="page-profile.html" class="">Quotation</a></li>
                            <li><a href="page-profile.html" class="">Bar Code</a></li>
                            <li><a href="page-profile.html" class="">Check</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
</div>

<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li class="active">
            <a href="/"><i class="fas fa-home"></i>Home</a>
        </li>
        <li>
            <a href="/home"><i class="fa fa-align-justify"></i>Dashboard</a>
        </li>
        <li>
            <a href="{{route('orders.index')}}"><i class="fas fa-desktop fa-lg"></i> Cashier</a>
        </li>
        <li>
            <a href="{{route('transactions.index')}}"><i class="fas fa-money-bill fa-lg"></i> Transactions</a>
        </li>
        <li>
            <a href="{{route('products.index')}}"><i class="fas fa-box fa-lg"></i> Products</a>
        </li>
       
    </ul>
</nav>

<style>

    #sidebar ul.lead{
        border-bottom: 1px solid #477748b;
        width: fit-content;
    }

    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: #d37d2c;

            }
    #sidebar ul li a:hover{
      
        color: #fff;
        background: #d37d2c;
        text-decoration: none !important;
     }

    #sidebar ul li a i{
        margin-right: 10px;

    }

    #sidebar ul li.active>a, a[aria-expanded="true"]{
        color: #fff;
        background: #d37d2c;
    }

</style>
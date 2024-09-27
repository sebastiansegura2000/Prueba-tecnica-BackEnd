<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<nav>
    <div class="sidebar-top">
        <a href="{{ route('employees.index') }}" class="logo__wrapper">
            <img src="{{ asset('assets/psico.png') }}" alt="Logo" class="logo">
            <h1 class="hide">PsicoAlianza</h1>
        </a>
        <div class="expand-btn">
            <img src="{{ asset('assets/chevron.svg') }}" alt="Chevron">
        </div>
    </div>

    {{-- Employees --}}

    <div class="sidebar-links">
        <ul>
            <li>
                <a href="{{ route('employees.index') }}" class="tooltip">
                    <img src="{{ asset('assets/manager.png') }}" alt="employees">
                    <span class="link hide">Employees</span>
                    <span class="tooltip__content">Employees</span>
                </a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" class="tooltip">
                    <img src="{{ asset('assets/add.png') }}" alt="Add Employees">
                    <span class="link hide">Add Employees</span>
                    <span class="tooltip__content">Add Employees</span>
                </a>
            </li>
        </ul>
    </div>

    {{-- Country --}}

    <div class="sidebar-links">
        <ul>
            <li>
                <a href="{{ route('countries.index') }}" class="tooltip">
                    <img src="{{ asset('assets/countries.png') }}" alt="Countries">
                    <span class="link hide">Countries</span>
                    <span class="tooltip__content">Countries</span>
                </a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" class="tooltip">
                    <img src="{{ asset('assets/Add_c.png') }}" alt="Add Country">
                    <span class="link hide">Add Country</span>
                    <span class="tooltip__content">Add Country</span>
                </a>
            </li>
        </ul>
    </div>

    {{-- City --}}

    <div class="sidebar-links">
        <ul>
            <li>
                <a href="{{ route('countries.index') }}" class="tooltip">
                    <img src="{{ asset('assets/city.png') }}" alt="Cities">
                    <span class="link hide">Cities</span>
                    <span class="tooltip__content">Cities</span>
                </a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" class="tooltip">
                    <img src="{{ asset('assets/buildings.png') }}" alt="Add City">
                    <span class="link hide">Add City</span>
                    <span class="tooltip__content">Add City</span>
                </a>
            </li>
        </ul>
    </div>

    {{-- Charge --}}

    <div class="sidebar-links">
        <ul>
            <li>
                <a href="{{ route('countries.index') }}" class="tooltip">
                    <img src="{{ asset('assets/job.png') }}" alt="Charges">
                    <span class="link hide">Charges</span>
                    <span class="tooltip__content">Charges</span>
                </a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" class="tooltip">
                    <img src="{{ asset('assets/add_j.png') }}" alt="Add Charges">
                    <span class="link hide">Add Charges</span>
                    <span class="tooltip__content">Add Charges</span>
                </a>
            </li>
        </ul>
    </div>


</nav>
<script src="{{ asset('js/script.js') }}"></script>

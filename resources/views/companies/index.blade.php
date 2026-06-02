<h1>Aziende</h1>

<ul>
    @foreach ($companies as $company)
        <li>
            <a href="/aziende/{{ $company->id }}">
                {{ $company->name }}
            </a>
        </li>
    @endforeach
</ul>

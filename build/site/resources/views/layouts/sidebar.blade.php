  @php
  if(!isset($activePage))
        $activePage = 'active';
  @endphp
  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/contacts" class="simple-text">
                Contact Manager
            </a>
        </div>
        <ul class="nav">
            <li class="{{ $activePage }}">
                <a href="/contacts">
                    <i class="pe-7s-user"></i>
                    <p>My Contacts
                        <span class="pull-right">
                            {{ $allContacts }}
                        </span>
                    </p>
                </a>
            </li>
            @foreach ($groups as $group)
            <li class="{{ ( $group->name == $activePage ) ? 'active' : '' }}">
                {{-- comment line below is kind of shit programming --}}
                {{-- <a href="{{ route('contacts.index', ['group_id' => $group->id] )}}"> --}}
                <a href="/contacts/{{ $group->name }}">
                    <i class="pe-7s-science"></i>
                    <p>
                        {{ $group->name }}
                        <span class="pull-right">
                            {{ $group->contacts->count() }}
                        </span>
                    </p>
                </a>
            </li>
            @endforeach
            {{-- <li>
                <a href="dashboard.html">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="table.html">
                    <i class="pe-7s-note2"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="typography.html">
                    <i class="pe-7s-news-paper"></i>
                    <p>Typography</p>
                </a>
            </li>
            
            <li>
                <a href="maps.html">
                    <i class="pe-7s-map-marker"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a href="notifications.html">
                    <i class="pe-7s-bell"></i>
                    <p>Notifications</p>
                </a>
            </li> --}}
    <li class="active-pro">
                <a href="upgrade.html">
                    <i class="pe-7s-rocket"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
  </div>
</div>
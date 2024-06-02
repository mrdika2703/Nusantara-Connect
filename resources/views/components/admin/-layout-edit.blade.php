<x-admin.header-edit></x-admin.header-edit>
<x-admin.navbar>{{ $title }}</x-admin.navbar>
<x-admin.sidebar>{{ $title }}</x-admin.sidebar>

{{ $slot }}

<x-admin.sidebar-content></x-admin>
<x-admin.footer></x-admin.footer>
<x-admin.foot-script-edit></x-admin.foot-script-editt>
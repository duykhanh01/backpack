@if(backpack_user()->can('login'))
<a href="{{ url($crud->route.'/'.$entry->getKey().'/login') }} " class="btn btn-xs btn-default"><i class="fa fa-ban"></i> login</a>
@endcan
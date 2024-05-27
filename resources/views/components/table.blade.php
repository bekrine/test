
<table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
    @if($errors->any())
    
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    
        @foreach ($errors->all() as $erorr)
            
        <span class="font-medium block">{{$erorr}}</span> 
        @endforeach
    </div>
  @endif
  @if (session('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
        {{ session('success') }}
    </div>
@endif
    <x-table-header :sortColumn='$sortColumn' :sortDirection="$sortDirection"/>
    <x-table-body :contacts='$contacts' />
</table>
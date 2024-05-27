<div class="h-full w-[90%] flex flex-col items-center justify-center">
    <x-Header/>
    <div class="w-full flex justify-between items-center">
        <x-search/>
        <x-add/>
    </div>
    <div class="w-full mt-8">
        <x-table :contacts='$contacts' :sortColumn='$sortColumn' :sortDirection="$sortDirection"/>
    </div>
    <div class="mt-6 p-4 w-full">
        {{$contacts->links()}}
    </div>
</div>
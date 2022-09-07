<div class="bg-gradient-to-r from-sky-500 to-sky-700 h-[7%]">
    <div class="py-3 px-6">
        <div class="flex justify-between">
            <div class="flex items-center h-10">
                <img src="../images/logos/city.png" class="h-10 w-10" alt="Avatar">
                <span class="ml-5 font-medium text-white text-xl">Эрдэнэт газарзүйн мэдээллийн систем</span>
            </div>

            <div class="ml-2 flex">
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-50 rounded-full" type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="mr-2 w-8 h-8 rounded-full" src="../images/logos/profile-user.png" alt="user photo">
                    Хэрэглэгч
                    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">Pro User</div>
                            <div class="truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100">Earnings</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>  
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="/plugins/global/plugins.bundle.js"></script>
<script src="/js/scripts.bundle.js"></script> 
<script>
    function menuDetail(divName)
    {
        console.log(divName);
        $.ajax({
            url: "/"+divName,
            type: 'get',
            // dataType: 'json',
            data: {
                divName: divName
            },
            beforeSend: function() {
            },
            success: function(response) {
                $("#menu-detail").empty().html(response);
            },
            error: function(xhr, textStatus, error) {
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            },
            async: false,
        }).done(function(data) {});
    }
</script>